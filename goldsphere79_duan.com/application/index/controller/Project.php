<?php
namespace app\index\controller;

use think\Controller;
use think\Db;
use think\Request;

class Project extends Controller
{
    // Danh sách TẤT CẢ dự án đang mở (không phân trang)
    public function index()
    {
        // Bảo vệ đăng nhập theo yêu cầu của bạn
        if (!isset($_SESSION['uid']) || !$_SESSION['uid']) {
            $this->redirect('index/index'); // chưa login
        }
        $uid = (int)$_SESSION['uid'];

        // Tất cả dự án đang mở (show all)
        $projects = Db::name('projects')
            ->where('status', 1)
            ->order('id desc')
            ->select();

        // Tất cả khoản đầu tư của user (show all)
        $investments = Db::name('investments')->alias('i')
            ->join('projects p', 'p.id = i.project_id', 'LEFT')
            ->where('i.user_id', $uid)
            ->order('i.id desc')
            ->field('i.*, p.title as project_title')
            ->select();
        $money = Db::name('userinfo')->where('uid', $uid)->value('usermoney');

        $this->assign('projects', $projects);
        $this->assign('investments', $investments);
        $this->assign('usermoney', $money);
        return $this->fetch(); // view: application/index/view/project/index.html
    }

    // Chi tiết dự án
    public function detail($id)
    {
        if (!isset($_SESSION['uid']) || !$_SESSION['uid']) {
            $this->redirect('index/index'); // chưa login
        }
        $uid = (int)$_SESSION['uid'];
        $id = intval($id);
        $project = Db::name('projects')->where('id', $id)->find();
        if (!$project || $project['status'] == 0) {
            return $this->error('Dự án không tồn tại hoặc đang ẩn.');
        }
        $money = Db::name('userinfo')->where('uid', $uid)->value('usermoney');
        $this->assign('project', $project);
        $this->assign('usermoney', $money);
        return $this->fetch(); // view: application/index/view/project/detail.html
    }

    // Đặt lệnh đầu tư (POST) — trừ usermoney trong userinfo
    public function invest(Request $request)
    {
        if (!isset($_SESSION['uid']) || !$_SESSION['uid']) {
            return WPreturn('Vui lòng đăng nhập!', -1);
        }
        $uid = (int)$_SESSION['uid'];

        if (!$request->isPost()) {
            return WPreturn('Phương thức không hợp lệ', -1);
        }

        $projectId = (int)$request->post('project_id');
        $amount    = round((float)$request->post('amount'), 2);

        if ($projectId <= 0 || $amount <= 0) {
            return WPreturn('Dữ liệu không hợp lệ', -1);
        }

        Db::startTrans();

        // 1) Khóa dự án
        $project = Db::name('projects')->where('id', $projectId)->lock(true)->find();
        if (!$project || (int)$project['status'] !== 1) {
            Db::rollback();
            return WPreturn('Dự án không khả dụng', -1);
        }

        // 2) Kiểm tra min & quota
        if ($amount < (float)$project['min_invest']) {
            Db::rollback();
            return WPreturn('Số tiền nhỏ hơn mức tối thiểu', -1);
        }
        if ((float)$project['total_quota'] > 0) {
            $remaining = (float)$project['total_quota'] - (float)$project['invested_amount'];
            if ($amount > $remaining) {
                Db::rollback();
                return WPreturn('Số tiền vượt hạn mức còn lại', -1);
            }
        }

        // 3) Khóa user + trừ tiền userinfo.usermoney (uid)
        $user = Db::name('userinfo')->where('uid', $uid)->lock(true)->find();
        if (!$user) {
            Db::rollback();
            return WPreturn('Không tìm thấy người dùng', -1);
        }
        if ((float)$user['usermoney'] < $amount) {
            Db::rollback();
            return WPreturn('Số dư không đủ', -1);
        }

        $dec = Db::name('userinfo')->where('uid', $uid)->setDec('usermoney', $amount);
        if ($dec === false) {
            Db::rollback();
            return WPreturn('Không thể trừ tiền', -1);
        }

        // 4) Tạo investment
        $now   = date('Y-m-d H:i:s');
        $endAt = date('Y-m-d H:i:s', strtotime("+{$project['duration_days']} days"));

        $invId = Db::name('investments')->insertGetId([
            'user_id'             => $uid,                     // LƯU UID
            'project_id'          => $project['id'],
            'amount'              => $amount,
            'daily_rate_snapshot' => $project['rate_daily'],
            'start_at'            => $now,
            'end_at'              => $endAt,
            'next_interest_at'    => date('Y-m-d 23:59:59'),
            'total_interest_paid' => 0,
            'status'              => 1,
            'created_at'          => $now,
            'updated_at'          => $now,
        ]);
        if (!$invId) {
            Db::rollback();
            return WPreturn('Không thể tạo khoản đầu tư', -1);
        }

        // 5) Cập nhật invested_amount
        $inc = Db::name('projects')->where('id', $project['id'])->setInc('invested_amount', $amount);
        if ($inc === false) {
            Db::rollback();
            return WPreturn('Không thể cập nhật dự án', -1);
        }

        Db::commit();
        return WPreturn(lang('ytg'), 1);
    }
}
