<?php
namespace app\lord\controller;

use think\Db;

class Project extends Base
{
    public function projectlist()
    {
        $pagenum = cache('page');
        $data    = input('get.');

        // --- validate/search giống style của bạn ---
        $where   = [];
        $getdata = [];

        // keyword: id / title
        if (isset($data['keyword']) && $data['keyword'] !== '') {
            $kw = trim($data['keyword']);
            $where['id|title'] = ['like', "%{$kw}%"];
            $getdata['keyword'] = $kw;
        }

        // status: 0=Ẩn, 1=Mở, 2=Kết thúc
        if (isset($data['status']) && $data['status'] !== '' && in_array((int)$data['status'], [0,1,2], true)) {
            $where['status'] = (int)$data['status'];
            $getdata['status'] = (int)$data['status'];
        }

        // thời gian tạo (created_at) – giống starttime/endtime
        if (!empty($data['starttime']) && !empty($data['endtime'])) {
            $start = strtotime($data['starttime']);
            $end   = strtotime($data['endtime']);
            if ($start && $end && $start <= $end) {
                $where['created_at'] = ['between time', [$start, $end]];
                $getdata['starttime'] = $data['starttime'];
                $getdata['endtime']   = $data['endtime'];
            }
        }

        // --- quyền (nếu bạn muốn giới hạn theo đại lý, tùy chỉnh tại đây) ---
        // mẫu orderlist của bạn chỉ hạn chế theo user khi join, ở đây là bảng projects nên để tự do.

        // --- query + paginate ---
        $project = Db::name('projects')
            ->where($where)
            ->order('id desc')
            ->paginate($pagenum, false, ['query' => $getdata]);

        if ($project->total() == 0) {
            $this->assign('noproject', 1);
        }

        $this->assign('project',  $project);
        $this->assign('getdata',  $getdata);
        $getdata['display'] = 0;
        $this->assign('jsongetdata', http_build_query($getdata));

        return $this->fetch(); // view: application/lord/view/project/projectlist.html
    }

    /**
     * Danh sách KHOẢN ĐẦU TƯ (join user & project) — y hệt orderlog
     */
    public function investmentlist()
    {
        $pagenum = cache('page');
        $data    = input('get.');

        $where   = [];
        $getdata = [];

        // username / uid / nickname / utel
        if (isset($data['username']) && $data['username'] !== '') {
            $kw = trim($data['username']);
            $where['u.username|u.uid|u.nickname|u.utel'] = ['like', "%{$kw}%"];
            $getdata['username'] = $kw;
        }

        // phone (nếu hệ đang mã hoá SĐT thì đổi sang encrypt như userlist)
        if (isset($data['utel']) && $data['utel'] !== '') {
            if (function_exists('encrypt')) {
                $where['u.utel'] = encrypt(trim($data['utel']), 'E', 'e10adc3949ba59abbe56e057f20f883e');
            } else {
                $where['u.utel'] = ['like', '%'.trim($data['utel']).'%'];
            }
            $getdata['utel'] = $data['utel'];
        }

        // trạng thái khoản đầu tư: 1=đang chạy, 2=hoàn tất
        if (isset($data['status']) && $data['status'] !== '' && in_array((int)$data['status'], [1,2], true)) {
            $where['i.status'] = (int)$data['status'];
            $getdata['status'] = (int)$data['status'];
        }

        // project_id filter
        if (isset($data['project_id']) && $data['project_id'] !== '') {
            $where['i.project_id'] = (int)$data['project_id'];
            $getdata['project_id'] = (int)$data['project_id'];
        }

        // thời gian tạo
        if (!empty($data['starttime']) && !empty($data['endtime'])) {
            $start = strtotime($data['starttime']);
            $end   = strtotime($data['endtime']);
            if ($start && $end && $start <= $end) {
                $where['i.created_at'] = ['between time', [$start, $end]];
                $getdata['starttime']  = $data['starttime'];
                $getdata['endtime']    = $data['endtime'];
            }
        }

        // --- quyền như orderlist ---
        if ($this->otype != 3) {
            $uids = myuids($this->uid);
            if (!empty($uids)) {
                $where['u.uid'] = ['IN', $uids];
            }
        }

        $investment = Db::name('investments')->alias('i')
            ->field('i.*, p.title as project_title, u.uid, u.username, u.nickname, u.utel')
            ->join('__PROJECTS__ p', 'i.project_id = p.id', 'LEFT')
            ->join('__USERINFO__ u', 'i.user_id   = u.uid', 'LEFT')
            ->where($where)
            ->order('i.id desc')
            ->paginate($pagenum, false, ['query' => $getdata]);

        if ($investment->total() == 0) {
            $this->assign('noinvestment', 1);
        }

        $this->assign('investment', $investment);
        $this->assign('getdata',    $getdata);
        $getdata['display'] = 0;
        $this->assign('jsongetdata', http_build_query($getdata));

        return $this->fetch(); // view: application/lord/view/project/investmentlist.html
    }
    
public function logs()
{
    $pagenum = cache('page') ?: 20;
    $data    = input('get.', [], 'trim');

    $where   = [];
    $getdata = [];

    // username / uid / nickname / utel
    if (isset($data['username']) && $data['username'] !== '') {
        $kw = $data['username'];
        // nếu là số -> có thể là uid
        if (ctype_digit($kw)) {
            $where['u.uid'] = (int)$kw;
        } else {
            $where['u.username|u.nickname|u.utel'] = ['like', "%{$kw}%"];
        }
        $getdata['username'] = $kw;
    }

    // lọc theo project_id -> dùng bảng investments (iv)
    if (isset($data['project_id']) && $data['project_id'] !== '') {
        $where['iv.project_id'] = (int)$data['project_id'];
        $getdata['project_id']  = (int)$data['project_id'];
    }

    // thời gian tạo (giữ kiểu chuỗi nếu cột là DATETIME)
    if (!empty($data['starttime']) && !empty($data['endtime'])) {
        $startStr = $data['starttime'] . ' 00:00:00';
        $endStr   = $data['endtime']   . ' 23:59:59';
        $where['il.created_at'] = ['between time', [$startStr, $endStr]];
        $getdata['starttime'] = $data['starttime'];
        $getdata['endtime']   = $data['endtime'];
    }

    $logs = Db::name('interest_logs')->alias('il')
        ->field('il.*, iv.project_id, p.title as project_title, u.uid, u.username, u.nickname, u.utel')
        ->join('__INVESTMENTS__ iv', 'il.investment_id = iv.id', 'LEFT')
        ->join('__PROJECTS__ p',     'iv.project_id     = p.id', 'LEFT')
        ->join('__USERINFO__ u',     'il.user_id        = u.uid', 'LEFT')
        ->where($where)
        ->order('il.id desc')
        ->paginate($pagenum, false, ['query' => $getdata]);

    $this->assign('logs', $logs);
    $this->assign('getdata', $getdata);

    $getdata['display'] = 0;
    $this->assign('jsongetdata', http_build_query($getdata));

    return $this->fetch();
}

    
    public function projectadd()
    {
        if (request()->isPost()) {
            $post = input('post.');
    
            if (empty($post['title'])) return json(['type'=>0, 'data'=>'Tiêu đề không được để trống']);
            if (!isset($post['rate_daily']) || $post['rate_daily'] <= 0) return json(['type'=>0, 'data'=>'Lãi/ngày phải > 0']);
            if (!isset($post['duration_days']) || $post['duration_days'] <= 0) return json(['type'=>0, 'data'=>'Kỳ hạn phải > 0']);
    
            // XỬ LÝ ẢNH
            $imagePath = null;
            $file = request()->file('image');
            if ($file) {
                $validate = ['size'=>2*1024*1024, 'ext'=>'jpg,jpeg,png,webp'];
                $info = $file->validate($validate)->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'projects');
                if (!$info) {
                    return json(['type'=>0, 'data'=>$file->getError() ?: 'Upload ảnh thất bại']);
                }
                $imagePath = '/uploads/projects/' . str_replace('\\', '/', $info->getSaveName());
            }
    
            $ins = [
                'title'         => trim($post['title']),
                'description'   => trim($post['description']),
                'image'         => '/public'.$imagePath,
                'rate_daily'    => (float)$post['rate_daily'],
                'duration_days' => (int)$post['duration_days'],
                'min_invest'    => isset($post['min_invest']) ? (float)$post['min_invest'] : 0,
                'total_quota'   => isset($post['total_quota']) ? (float)$post['total_quota'] : 0,
                'status'        => isset($post['status']) ? (int)$post['status'] : 1,
                'created_at'    => date('Y-m-d H:i:s'),
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
    
            $ok = Db::name('projects')->insert($ins);
            if ($ok) return json(['type'=>1, 'data'=>'Tạo dự án thành công', 'redirect'=>url('project/projectlist')]);
            return json(['type'=>0, 'data'=>'Không thể tạo dự án']);
        }
    
        return $this->fetch();
    }
    
    public function projectedit()
    {
        $id = input('id/d');
        if (!$id) $this->error('Thiếu ID dự án');
    
        if (request()->isPost()) {
            $post = input('post.');
            if (empty($post['title'])) return json(['type'=>0, 'data'=>'Tiêu đề không được để trống']);
            if (!isset($post['rate_daily']) || $post['rate_daily'] <= 0) return json(['type'=>0, 'data'=>'Lãi/ngày phải > 0']);
            if (!isset($post['duration_days']) || $post['duration_days'] <= 0) return json(['type'=>0, 'data'=>'Kỳ hạn phải > 0']);
    
            // Lấy dự án hiện tại để xử lý ảnh cũ
            $project = Db::name('projects')->where('id', $id)->find();
            if (!$project) return json(['type'=>0, 'data'=>'Dự án không tồn tại']);
    
            $imagePath = $project['image'];
            $file = request()->file('image');
            if ($file) {
                $validate = ['size'=>2*1024*1024, 'ext'=>'jpg,jpeg,png,webp'];
                $info = $file->validate($validate)->move(ROOT_PATH . 'public' . DS . 'uploads' . DS . 'projects');
                if (!$info) {
                    return json(['type'=>0, 'data'=>$file->getError() ?: 'Upload ảnh thất bại']);
                }
                $newPath = '/uploads/projects/' . str_replace('\\', '/', $info->getSaveName());
    
                // Xoá ảnh cũ nếu có và khác với ảnh mới
                if (!empty($imagePath) && $imagePath !== $newPath) {
                    $old = ROOT_PATH . 'public' . $imagePath;
                    if (is_file($old)) @unlink($old);
                }
                $imagePath = $newPath;
            }
    
            $upd = [
                'title'         => trim($post['title']),
                'description'   => trim($post['description']),
                'image'         => '/public'.$imagePath,
                'rate_daily'    => (float)$post['rate_daily'],
                'duration_days' => (int)$post['duration_days'],
                'min_invest'    => isset($post['min_invest']) ? (float)$post['min_invest'] : 0,
                'total_quota'   => isset($post['total_quota']) ? (float)$post['total_quota'] : 0,
                'status'        => isset($post['status']) ? (int)$post['status'] : 1,
                'updated_at'    => date('Y-m-d H:i:s'),
            ];
    
            $ok = Db::name('projects')->where('id', $id)->update($upd);
            if ($ok !== false) return json(['type'=>1, 'data'=>'Cập nhật thành công', 'redirect'=>url('project/projectlist')]);
            return json(['type'=>0, 'data'=>'Cập nhật thất bại']);
        }
    
        $project = Db::name('projects')->where('id', $id)->find();
        if (!$project) $this->error('Dự án không tồn tại');
    
        $this->assign('project', $project);
        return $this->fetch();
    }

    /**
     * Xóa dự án (AJAX POST)
     * Chặn xóa nếu còn investment liên quan
     */
    public function projectdel()
    {
        if (!request()->isPost()) return json(['type'=>0, 'data'=>'Phương thức không hợp lệ']);
        $id = input('post.id/d');
        if (!$id) return json(['type'=>0, 'data'=>'Thiếu ID']);

        // kiểm tra ràng buộc
        $cnt = Db::name('investments')->where('project_id', $id)->count();
        if ($cnt > 0) return json(['type'=>0, 'data'=>'Vui lòng xóa các khoản đầu tư thuộc dự án trước']);

        $ok = Db::name('projects')->where('id', $id)->delete();
        if ($ok) return json(['type'=>1, 'data'=>'Đã xóa dự án']);
        return json(['type'=>0, 'data'=>'Xóa thất bại']);
    }

    /**
     * Xóa khoản đầu tư (AJAX POST)
     * Lưu ý: Không hoàn tiền/giao dịch—chỉ xóa record. Tùy chính sách của bạn.
     */
    public function investmentdel()
    {
        if (!request()->isPost()) return json(['type'=>0, 'data'=>'Phương thức không hợp lệ']);
        $id = input('post.id/d');
        if (!$id) return json(['type'=>0, 'data'=>'Thiếu ID']);

        $ok = Db::name('investments')->where('id', $id)->delete();
        if ($ok) return json(['type'=>1, 'data'=>'Đã xóa khoản đầu tư']);
        return json(['type'=>0, 'data'=>'Xóa thất bại']);
    }
}
