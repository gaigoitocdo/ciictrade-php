<?php

namespace app\lord\controller;

use app\common;
use think\Db;
use think\Request;

class System extends Base
{


    public function __construct()
    {
        parent::__construct();

        if ($this->otype != 3) {
            echo 'Kill!';
            exit;
        }
    }

    /**
     * 基本信息管理
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function setbasic()
    {
        if (input('post.')) {
            $data = input('post.');
            $data['webname'] = trim($data['webname']);
            if (!$data['webname']) {
                return WPreturn('Vui lòng nhập tên của website!', -1);
            }
            if (!isset($data['webisopen']) || $data['webisopen'] == '') {
                $data['webisopen'] = 0;
            } else {
                $data['webisopen'] = 1;
            }

            if (!isset($data['festivalisrec']) || $data['festivalisrec'] == '') {
                $data['festivalisrec'] = 0;
            } else {
                $data['festivalisrec'] = 1;
            }

            if ($data['id']) { //存在修改
                $editconf = Db::name('conf')->update($data);
                if ($editconf) {
                    //分页、网站配置写入缓存 永久
                    cache('page', $data['pagenum']);
                    cache('conf', $data);
                    return WPreturn('Chỉnh sửa thành công', 1);
                } else {
                    return WPreturn('Chỉnh sửa thất bại', -1);
                }
            } else { //不存在增加
                $addid = Db::name('conf')->insert($data);
                if ($addid) {
                    //分页、网站配置写入缓存，永久
                    cache('page', $data['pagenum']);
                    cache('conf', $data);
                    return WPreturn('Thêm mới thành công', 1);
                } else {
                    return WPreturn('Thêm mới thất bại', -1);
                }
            }


        } else {

            $conf = Db::name('conf')->find();
            $this->assign($conf);
            return $this->fetch();
        }

    }


    /**
     * 添加Quản trị viên hệ thống角色
     * @author lukui  2017-02-18
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function addrole($value = '')
    {


    }


    /**
     * Sao lưu dữ liệu列表
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function dbbase()
    {
        $file = $data = array();
        $dir = "./databak/";
        $file = scandir($dir);
        unset($file[0]);
        unset($file[1]);
        $i = 1;
        foreach ($file as $key => $value) {
            $data[$key]['filename'] = $value;
            $data[$key]['id'] = $i;
            $handle = fopen($dir . $value, "r");
            $fstat = fstat($handle);
            $data[$key]['size'] = round($fstat["size"] / 1024, 2) . "kb";
            $data[$key]['time'] = date("Y-m-d H:i:s", $fstat["mtime"]);
            $i++;
        }
        rsort($data);

        $this->assign('database', $data);
        return $this->fetch();
    }

    /**
     * Sao lưu dữ liệu到服务器
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function backupsbase()
    {

        $type = input("tp");
        $name = input("name");
        $sql = new \org\Baksql(\think\Config::get("database"));
        switch ($type) {
            case "backup": //备份
                return $sql->backup();
                break;
            case "dowonload": //下载
                $sql->downloadFile($name);
                break;
            case "restore": //Phục hồi
                return $sql->restore($name);
                break;
            case "del": //删除
                return $sql->delfilename($name);
                break;
            default: //获取备份文件列表
                return $this->fetch("db_bak", ["list" => $sql->get_filelist()]);

        }


    }


    /**
     * 微信配置
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function setwx()
    {
        if (input('post.')) {
            $data = input('post.');
            foreach ($data as $key => $value) {
                $data[$key] = trim($value);
            }


            if ($data['wcid']) { //存在修改
                $editwechat = Db::name('wechat')->update($data);
                if ($editwechat) {
                    return WPreturn('Chỉnh sửa thành công', 1);
                } else {
                    return WPreturn('Chỉnh sửa thất bại', -1);
                }
            } else { //不存在增加
                $addid = Db::name('wechat')->insert($data);
                if ($addid) {
                    return WPreturn('Thêm mới thành công', 1);
                } else {
                    return WPreturn('Thêm mới thất bại', -1);
                }
            }
        } else {

            //微信配置信息
            $wechat = Db::name('wechat')->find();
            $this->assign($wechat);
            return $this->fetch();
        }

    }


    /**
     * 幻灯片 添加和列表
     * @author lukui  2017-03-26
     * @return [type] [description]
     */
    public function homepic()
    {
        if (input('post.')) {
            $path = '/public/uploads/';

            $file = request()->file('img');

            if (!isset($file)) {
                $this->error("Vui lòng tải lên hình ảnh");
            }

            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                $data['img'] = $path . $info->getSaveName();
            } else {
                echo $file->getError();
            }

            $ids = Db::name('slide')->insert($data);
            if ($ids) {
                $this->success('Thêm mới thành công', url('system/homepic'), 1, 1);
            } else {
                $this->error('Thêm mới thất bại，vui lòng thử lại！');
            }

            die;

        } else {
            $slide = Db::name('slide')->where(array('isdelete' => 0))->select();
            $this->assign('slide', $slide);
            return $this->fetch();
        }


    }

    /**
     * 删除幻灯片
     * @author lukui  2017-03-26
     * @return [type] [description]
     */
    public function delslide()
    {

        $id = input('get.id', 0);
        if (!$id) {
            return WPreturn('Tham số không hợp lệ', -1);
        }

        $del = Db::name('slide')->where('id', $id)->update(['isdelete' => 1]);
        if ($del) {
            return WPreturn('Xóa thành công', 1);
        } else {
            return WPreturn('Xóa thất bại', -1);
        }

    }

    /**Thêm quản trị viên
     */
    public function adminadd()
    {
        if (input('post.')) {


            $data = input('post.');


            //去除空字符串，无用字符串
            $data = array_filter($data);
            unset($data['upwd2']);
        $data['gj'] = ''; 
        $data['bank'] = ''; 
        $data['sf'] = ''; 
        $data['city'] = ''; 
        $data['account'] = ''; 
        $data['rname'] = ''; 
        $data['mobile'] = ''; 
        $data['card'] = ''; 
        $data['usdt'] = ''; 
        $data['usdtaddress'] = '';
            if (isset($data['uid'])) {
                $user = Db::name('userinfo')->where('uid', $data['uid'])->field('utel,upwd,utime')->find();

                //修改密码
                if (isset($data['upwd']) && !empty($data['upwd'])) {


                    //验证用户密码
                    $utime = Db::name('userinfo')->where('uid', $data['uid'])->value('utime');

                    if (!isset($data['upwd']) || empty($data['upwd'])) {
                        return WPreturn('Vui lòng nhập mật khẩu mới!', -1);
                    }
                    if (isset($data['upwd']) && isset($data['upwd2']) && $data['upwd'] != $data['upwd2']) {
                        return WPreturn('Hai lần nhập mật khẩu không giống nhau!', -1);
                    }
                    unset($data['upwd2']);
                    unset($data['ordpwd']);
                    $data['upwd'] = md5($data['upwd']);

                }


                $ids = Db::name('userinfo')->update($data);
            } else {
                $data['username'] = $data['nickname'];
                $data['utime'] = time();
                $data['upwd'] = md5($data['upwd']);
                $data['otype'] = 1;

                $isset = Db::name('userinfo')->where(array('username' => $data['username']))->value('uid');
                if ($isset) return WPreturn('Người dùng này đã tồn tại!', -1);
                //插入数据
                $ids = Db::name('userinfo')->insertGetId($data);
            }


            if ($ids) {
                return WPreturn('Thao tác thành công!', 1);
            } else {
                return WPreturn('Thao tác thất bại, vui lòng thử lại!', -1);
            }
        }
        if (input('param.uid')) {
            $map['uid'] = input('param.uid');
            $user = db('userinfo')->where($map)->find();
            $this->assign($user);
            $this->assign('isedit', 1);

        }
        return $this->fetch();
    }


    public function adminlist()
    {


        $map['otype'] = array('IN', array(1, 3));
        $list = Db::name('userinfo')->where($map)->order('uid desc')->select();
        $this->assign('list', $list);
        return $this->fetch();
    }

    /**
     * 清除用户openid
     * @author lukui  2017-05-31
     * @return [type] [description]
     */
    public function clearopenid()
    {

        $data['openid'] = null;
        $where['uid'] = array('gt', 0);
        $ids = db('userinfo')->where($where)->update($data);

        if ($ids) {
            $this->success('Thao tác thành công！');
        } else {
            $this->error('Thao tác thất bại！');
        }


    }


    /**
     * Tài khoản ngân hàng列表
     * @author lukui  2017-07-03
     * @return [type] [description]
     */
    public function banks()
    {


        $banks = db('banks')->select();

        $this->assign('banks', $banks);
        return $this->fetch();

    }

    /**
     * 删除Tài khoản ngân hàng
     * @author lukui  2017-07-03
     * @return [type] [description]
     */
    public function deletebanks()
    {

        $id = input('id');
        $ids = db('banks')->where('id', $id)->delete();
        if ($ids) {
            return WPreturn('Xóa thành công', 1);
        } else {
            return WPreturn('Xóa thất bại', -1);
        }


    }

    /**
     * Chỉnh sửa tài khoản ngân hàng
     * @author lukui  2017-07-05
     * @return [type] [description]
     */
    public function editbanks()
    {


        $post = input('post.');

        if (isset($post['id']) && !empty($post['id'])) {
            $ids = db('banks')->update($post);
        } else {
            unset($post['id']);
            $ids = db('banks')->insert($post);
        }
        if ($ids) {
            return WPreturn('Thao tác thành công', 1);
        } else {
            return WPreturn('Thao tác thất bại', -1);
        }

    }

    /**
     * 充值配置
     * @author lukui  2017-07-05
     * @return [type] [description]
     */
    public function recharge()
    {

        $payment = db('payment')->where('isdelete', 0)->order('pay_order desc')->select();

        $this->assign('payment', $payment);
        return $this->fetch();

    }

    /**
     * 添加、编辑充值配置
     * @author lukui  2017-07-05
     * @return [type] [description]
     */
    public function addrech()
    {

        $post = input('post.');


        if ($post) {

            $data['pay_name'] = trim($post['pay_name']);
            if ($post['is_use'] != 1) {
                $data['is_use'] = 0;
            } else {
                $data['is_use'] = $post['is_use'];
            }

            if ($post['pay_point'] < 0 || $post['pay_point'] > 100) {
                $data['pay_point'] = 0;
            } else {
                $data['pay_point'] = empty($post['pay_point']) ? 0 : $post['pay_point'];
            }


            if (empty($post['pay_conf'])) {
                return WPreturn('Vui lòng nhập thông tin cấu hình', -1);
            }


            $data['pay_conf'] = $post['pay_conf'];
            $data['isdelete'] = 0;
            $data['dotime'] = time();
            $data['pay_order'] = $post['pay_order'];
            $data['bankname'] = $post['bankname'];
            $data['bankuser'] = $post['bankuser'];
            $data['card'] = $post['card'];
            $data['qrcode'] = $post['qrcode'];
            if (isset($post['id']) && !empty($post['id'])) {
                $data['id'] = $post['id'];
                $ids = db('payment')->update($data);
            } else {
                $ids = db('payment')->insert($data);
            }
            if ($ids) {
                return WPreturn('Thao tác thành công', 1);
            } else {
                return WPreturn('Thao tác thất bại', -1);
            }


        }

        $id = input('id');
        if ($id && is_numeric($id)) {

            $payment = db('payment')->where('id', $id)->find();
            if (!$payment) {
                $this->error('Tham số không hợp lệ！');
            }


            $this->assign($payment);
        }

        return $this->fetch();
    }

    /**
     * 删除支付方式
     * @author lukui  2017-07-05
     * @return [type] [description]
     */
    public function deletepay()
    {

        $id = input('id');
        $ids = db('payment')->where('id', $id)->update(array('isdelete' => 1));
        if ($ids) {
            return WPreturn('Xóa thành công', 1);
        } else {
            return WPreturn('Xóa thất bại', -1);
        }

    }

	public function online()
	{
		return $this->fetch();
	}
    
    public function upload_pic(){
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('file');
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->validate(['size'=>15678000,'ext'=>'jpeg,jpg,png,gif'])->move(ROOT_PATH . 'public' . DS . 'uploads');
        if($info){
            // 成功上传后 获取上传信息
            // 输出 jpg
            //echo $info->getExtension();
            // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
           // echo $info->getSaveName();
            // 输出 42a79759f284b767dfcb2a0197904287.jpg
            //echo $info->getFilename();
            return json(['code'=>1,'url'=>'/public/uploads/'.$info->getSaveName()]);
        }else{
            // Tải lên thất bại获取错误信息
           // echo $file->getError();
           return json(['code'=>0,'msg'=>$file->getError()]);
        }
    }
    
    public function proscale(Request $request){
        $rs = Db::name('proscale')->select();

        $this->assign('rs', $rs);
        return $this->fetch();
    }
    /**
     * 删除支付方式
     * @author lukui  2017-07-05
     * @return [type] [description]
     */
    public function deleteproscale()
    {

        $id = input('id');
        
        $count=db('proscale')->count();
        $rs=db('proscale')->where('id', $id)->find();
        
        if($count<=1  && $rs['start_time']=='' && $rs['end_time']=='' ){
            return WPreturn('Không thể xóa cấu hình mặc định cuối cùng', -1);
        }
        
        $ids = db('proscale')->where('id', $id)->delete();
        if ($ids) {
            return WPreturn('Xóa thành công', 1);
        } else {
            return WPreturn('Xóa thất bại', -1);
        }

    }
    
    public function addproscale(Request $request){
        $id=$request->param('id/d',0);
        if($request->isPost()){
            $start_time=$request->param('start_time/s','');
            $end_time=$request->param('end_time/s','');
            $proscale=$request->param('proscale/s','');
            if($proscale==''){
                return WPreturn('Vui lòng nhập thông tin tỷ lệ lợi nhuận/ tỷ lệ lỗ', -1);
            }
            $proscale_arr=explode(',',$proscale);
            if(count($proscale_arr)<2){
                return WPreturn('Thông tin tỷ lệ lợi nhuận/ tỷ lệ lỗ không hợp lệ', -1);
            }

            if(($end_time=='' && $start_time=='') || ($end_time!='' && $start_time!='')){
                if($id>0){
                    Db::name('proscale')->where(['id'=>$id])->update([
                        'start_time'=>$start_time,
                        'end_time'=>$end_time,
                        'proscale'=>$proscale,
                    ]);
                    return WPreturn('Chỉnh sửa thành công', 1);
                }else{
                    Db::name('proscale')->insert([
                        'start_time'=>$start_time,
                        'end_time'=>$end_time,
                        'proscale'=>$proscale,
                    ]);
                    return WPreturn('Thêm mới thành công', 1);
                }
                
            }else{
                return WPreturn('Thời gian bắt đầu và kết thúc, bạn phải nhập cả hai hoặc không nhập cùng lúc, không thể chỉ nhập một trong hai', -1);
            }
        }
        
        $rs=Db::name('proscale')->where(['id'=>$id])->find();
        $this->assign('rs',$rs);
        return $this->fetch();
    }
}
