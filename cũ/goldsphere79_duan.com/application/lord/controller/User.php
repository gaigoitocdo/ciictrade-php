<?php

namespace app\lord\controller;

use think\Db;

class User extends Base
{
    /**
     * Danh sách người dùng
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function userlist()
    {
        $pagenum = cache('page');
        $getdata = $where = array();
        $data = input('param.');
        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            $where['username|uid|nickname|utel'] = array('like', '%' . $data['username'] . '%');
            // $where['username|uid|nickname|utel'] = encrypt(trim($data['username']),'D','e10adc3949ba59abbe56e057f20f883e');
            $getdata['username'] = $data['username'];
        }
        if (isset($data['utel']) && !empty($data['utel'])) {
            $where['utel'] = encrypt(trim($data['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
            $getdata['utel'] = $data['utel'];
        }

        if (isset($data['today']) && $data['today'] == 1) {
            $getdata['starttime'] = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 00:00:00');
            $getdata['endtime'] = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 24:00:00');
            $where['utime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));

        }
        $oid = input('oid');
        if ($oid) {
            $where['oid'] = $oid;
            $getdata['oid'] = $oid;
        }

        if (isset($data['uid']) && !empty($data['uid'])) {
            $where['uid'] = $data['uid'];
            $getdata['uid'] = $data['uid'];
        }

        //权限检测
        if ($this->otype != 3) {

            $uids = myuids($this->uid);
            if (!empty($uids)) {
                $where['uid'] = array('IN', $uids);
            } else {
                $where['uid'] = $this->uid;
            }
        }

        if (isset($data['otype']) && $data['otype'] != '' && in_array($data['otype'], array(0, 101))) {
            $where['otype'] = $data['otype'];
            $getdata['otype'] = $data['otype'];
        } else {
            $where['otype'] = array('IN', array(0, 101));
        }
        //dump($where);
        //exit;
        $userinfo = Db::name('userinfo')->where($where)->order('uid desc')->paginate($pagenum, false, ['query' => $getdata]);
        
        $page = $userinfo->render();
        $userinfo = $userinfo->items();

        //获取会员下面客户的资金情况
        foreach ($userinfo as $key => $value) {
            $userinfo[$key]['utel'] = encrypt(trim($value['utel']),'D','e10adc3949ba59abbe56e057f20f883e');
        }
        $this->assign('userinfo', $userinfo);
        $this->assign('page', $page);
        $this->assign('getdata', $getdata);
        return $this->fetch();
    }

    /**
     * Thêm người dùng
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function useradd()
    {
        if (input('post.')) {
            $data = input('post.');
            $data['utime'] = time();
            $data['upwd'] = md5($data['upwd']);
            $data['oid'] = $_SESSION['userid'];
            $data['managername'] = db('userinfo')->where('uid', $data['oid'])->value('username');
            $data['username'] = $data['utime'];
			$data['utel']=encrypt(trim($data['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
            $issetutl = db('userinfo')->where('utel', $data['utel'])->find();
            if ($issetutl) {
                return WPreturn('Số điện thoại này đã tồn tại!', -1);
            }

            //去除空字符串，无用字符串
            $data = array_filter($data);
            unset($data['upwd2']);
            //插入数据
            $ids = Db::name('userinfo')->insertGetId($data);

            $newdata['uid'] = $ids;
            $newdata['username'] = 10000000 + $ids;

            $newids = Db::name('userinfo')->update($newdata);

            if ($newids) {
                return WPreturn('Thêm người dùng thành công!', 1);
            } else {
                return WPreturn('Thêm người dùng thất bại, vui lòng thử lại!', -1);
            }
        } else {
            $this->assign('isedit', 0);
            return $this->fetch();
        }

    }

    /**
     * 编辑用户
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function useredit()
    {

        if (input('post.')) {
            //exit;
            $data = input('post.');
            if (!isset($data['uid']) || empty($data['uid'])) {
                return WPreturn('Tham số không hợp lệ, thiếu thông tin id của người dùng!', -1);
            }


            //修改密码
            if (isset($data['upwd']) && !empty($data['upwd'])) {
                //验证用户密码
                $utime = Db::name('userinfo')->where('uid', $data['uid'])->value('utime');

               
                unset($data['upwd2']);
                unset($data['ordpwd']);
                $data['upwd'] = md5($data['upwd']);

            }
            //去除空字符串和多余字符串
            $data = array_filter($data);
            if (!isset($data['ustatus'])) {
                $data['ustatus'] = 0;
            }
            if (isset($data['ordpwd'])) {
               unset($data['ordpwd']);
            }
             if (isset($data['upwd2'])) {
               unset($data['upwd2']);
            }

            //判断是否修改了金额，如修改金额需插入balance记录
            if (!isset($data['usermoney'])) {
                $data['usermoney'] = 0;
            }
            if (!isset($data['ordusermoney'])) {
                $data['ordusermoney'] = 0;
            }

            if ($data['usermoney'] != $data['ordusermoney']) {
                $b_data['bptype'] = 2;
                $b_data['bptime'] = $b_data['cltime'] = time();
                $b_data['bpprice'] = $data['usermoney'] - $data['ordusermoney'];
                $b_data['remarks'] = 'Quản trị viên trang web với id ' . $_SESSION['userid'] . ' đã chỉnh sửa thông tin khách hàng và thay đổi số tiền.';
				//$b_data['remarks'] = '人工补单' . $_SESSION['userid'];
                $b_data['uid'] = $data['uid'];
                $b_data['isverified'] = 1;
                $b_data['bpbalance'] = $data['usermoney'];
                $addbal = Db::name('balance')->insertGetId($b_data);
                if (!$addbal) {
                    return WPreturn('Tăng số tiền thất bại，vui lòng thử lại!', -1);
                }

            }
            unset($data['ordusermoney']);

			//$data['utel']=encrypt(trim($data['utel']),'D','e10adc3949ba59abbe56e057f20f883e');
			$data['utel']=encrypt(trim($data['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
            $editid = Db::name('userinfo')->update($data);

            if ($editid) {
                return WPreturn('Chỉnh sửa người dùng thành công!', 1);
            } else {
                return WPreturn('Chỉnh sửa người dùng thất bại, vui lòng thử lại!', -1);
            }
        } else {
            $uid = input('param.uid');
            $where['uid'] = $uid;
            $userinfo = Db::name('userinfo')->where($where)->find();
            $userinfo['utel'] = encrypt(trim($userinfo['utel']),'D','e10adc3949ba59abbe56e057f20f883e');
            unset($userinfo['otype']);
            //获取用户所属信息
            $oidinfo = GetUserOidInfo($uid, 'username,oid');
            $this->assign($userinfo);
            $this->assign('isedit', 1);
            $this->assign($oidinfo);
            return $this->fetch('useradd');
        }

    }

    /**
     * 充值和提现
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function userprice2()
    {
        $pagenum = cache('page');
        $getdata = $where = array();
        $data = input('');
        $where['bptype'] = array('IN', array(1, 2,3));
        //类型
        if (isset($data['bptype']) && $data['bptype'] != '') {
            $where['bptype'] = $data['bptype'];
            $getdata['bptype'] = $data['bptype'];
        }
      
        //权限检测
        if ($this->otype != 3) {

           // $uids = myuids($this->uid);
           // if (!empty($uids)) {
           //     $where['u.uid'] = array('IN', $uids);
           // }
          
          $data['stype']=2;
          $data['username']=$_SESSION['username'];          
        }
      
      

        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            if ($data['stype'] == 1) {
                $where['username|u.uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            }
            if ($data['stype'] == 2) {
                $puid = db('userinfo')->where(array('username' => $data['username']))->whereOr('utel', $data['username'])->value('uid');
                if (!$puid) $puid = 0;
                $where['u.oid'] = $puid;
            }


            $getdata['username'] = $data['username'];
            $getdata['stype'] = $data['stype'];
        }

        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $where['bptime'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

      

        $balance = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
            ->join('__USERINFO__ u', 'u.uid=b.uid', 'LEFT')
            ->where($where)->order('bpid desc')->paginate($pagenum, false, ['query' => $getdata]);
        $all_bpprice = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
            ->join('__USERINFO__ u', 'u.uid=b.uid', 'LEFT')
            ->where($where)->sum('bpprice');
			
        $this->assign('balance', $balance);
        $this->assign('getdata', $getdata);
        $this->assign('all_bpprice', $all_bpprice);
        return $this->fetch();
    }
	
		/**
	 * 充值和提现
	 * @author lukui  2017-02-16
	 * @return [type] [description]
	 */
	public function userprice()
	{
		$pagenum = cache('page');
		$getdata = $where = array();
		$data = input('');
		$where['bptype'] = array('IN',array(1,2,3));
		//类型
		if(isset($data['bptype']) && $data['bptype'] != ''){
			$where['bptype']=$data['bptype'];
			$getdata['bptype'] = $data['bptype'];
		}

		//Tên đăng nhập、id、手机、昵称
		if(isset($data['username']) && !empty($data['username'])){
			if($data['stype'] == 1){
				$where['username|u.uid|utel|nickname'] = array('like','%'.$data['username'].'%');
			}
			if($data['stype'] == 2){
				$puid = db('userinfo')->where(array('username'=>$data['username']))->whereOr('utel',$data['username'])->value('uid');
				if(!$puid) $puid = 0;
				$where['u.oid'] = $puid;
			}
			

			$getdata['username'] = $data['username'];
			$getdata['stype'] = $data['stype'];
		}

		//时间搜索
		if(isset($data['starttime']) && !empty($data['starttime'])){
			if(!isset($data['endtime']) || empty($data['endtime'])){
				$data['endtime'] = date('Y-m-d H:i:s',time());
			}
			$where['bptime'] = array('between time',array($data['starttime'],$data['endtime']));
			$getdata['starttime'] = $data['starttime'];
			$getdata['endtime'] = $data['endtime'];
		}

		//权限检测
		if($this->otype != 3){

		   $uids = myuids($this->uid);
            if(!empty($uids)){
                $where['u.uid'] = array('IN',$uids);
            }
        }

		$balance = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
					->join('__USERINFO__ u','u.uid=b.uid')
					->where($where)->order('bpid desc')->paginate($pagenum,false,['query'=> $getdata]);
		$all_bpprice = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
					->join('__USERINFO__ u','u.uid=b.uid')
					->where($where)->sum('bpprice');
		//dump($balance);
		$this->assign('balance',$balance);
		$this->assign('getdata',$getdata);
		$this->assign('all_bpprice',$all_bpprice);
		return $this->fetch();
	}
	
	//Nạp tiền từ trang quản trị处理
	
	 public function dochongzhi()
    {
        if (input('post.')) {
            $data = input('post.');


            //获取充值订单信息和个人信息
            $balance = Db::name('balance')->field('bpid,bpprice,bpbalance,isverified,bptime,reg_par')->where('bpid', $data['bpid'])->find();
            $userinfo = Db::name('userinfo')->field('uid,username,usermoney')->where('uid', $data['uid'])->find();
            
            //拒绝        
            if($data['isverified']==2){
                
                
                unset($data['adminpwd']);
                $ids = Db::name('balance')->update($data);
                
                return WPreturn('Thao tác thành công！', 1);
                //资金日志
                set_price_log($data['uid'], 1, $balance['bpprice'], 'Nạp tiền', 'Từ chối yêu cầu：' . 'Từ chối nạp tiền', $data['bpid'], $_data['bpbalance']);
                
            }
            if (empty($userinfo) || empty($balance)) {
                return WPreturn('Thao tác thất bại，thiếu thông số!', -1);
            }
            if ($balance['isverified'] != 0) {
                return WPreturn('Giao dịch này đã được thực hiện',-1);
            }


            //更新充值订单：

            $_data['bpid'] = $data['bpid'];
            $_data['isverified'] = $data['isverified'];  
            $_data['cltime'] = time();
            $_data['remarks'] = 'Khách hàng gửi yêu cầu nạp tiền';
            $_data['bpbalance'] = $balance['bpprice']+$balance['bpbalance'];


            $ids = Db::name('balance')->update($_data);
            
            $userdata['uid'] = $data['uid'];
            $userdata['usermoney'] =  $_data['bpbalance'];
            $userinfo = Db::name('userinfo')->update($userdata);
            if ($userinfo&&$ids) {
                
                set_price_log($data['uid'], 1, $balance['bpprice'], 'Nạp tiền', 'Yêu cầu được chấp nhận bởi quản trị viên' , 'Nạp tiền đã được chấp thuận' ,$data['bpid'],  $_data['bpbalance']);
                return WPreturn('Thao tác thành công！', 1);

            } else {
                return WPreturn('Thao tác thất bại！', -1);
            }
            //验证是否提现成功，成功后修改订单状态


        } else {
            $this->redirect('user/userprice');
        }

    }

public function findUserByUsername()
{
    if (request()->isPost()) {
        $username = input('post.username/s', '');
        if ($username === '') {
            return json(['code' => -1, 'msg' => 'Vui lòng nhập username']);
        }

        // Tìm user theo username
        $user = Db::name('userinfo')
            ->field('uid,username,usermoney')
            ->where('username', $username)
            ->find();

        if (!$user) {
            return json(['code' => -1, 'msg' => 'Không tìm thấy username']);
        }

        return json(['code' => 1, 'msg' => 'OK', 'data' => $user]);
    }

    return json(['code' => -1, 'msg' => 'Yêu cầu không hợp lệ']);
}

    /**
     * 提现
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function cash()
    {
        $pagenum = cache('page');
        $getdata = $where = array();
        $data = input('');
        $where['bptype'] = 0;
        //类型
        if (isset($data['isverified']) && $data['isverified'] != '') {
            $where['isverified'] = $data['isverified'];
            $getdata['isverified'] = $data['isverified'];
        }

        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            if ($data['stype'] == 1) {
                $where['username|u.uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            }
            if ($data['stype'] == 2) {
                $puid = db('userinfo')->where(array('username' => $data['username']))->whereOr('utel', $data['username'])->value('uid');
                if (!$puid) $puid = 0;
                $where['u.oid'] = $puid;
            }


            $getdata['username'] = $data['username'];
            $getdata['stype'] = $data['stype'];
        }

        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $where['bptime'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

        //权限检测
        if ($this->otype != 3) {

            $uids = myuids($this->uid);
            if (!empty($uids)) {
                $where['u.uid'] = array('IN', $uids);
            }
        }

        $balance = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid,u.managername')
            ->join('__USERINFO__ u', 'u.uid=b.uid')
            ->where($where)->order('bpid desc')->paginate($pagenum, false, ['query' => $getdata]);
        $all_cash = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
            ->join('__USERINFO__ u', 'u.uid=b.uid')
            ->where($where)->sum('bpprice');
        //dump($balance);
        $this->assign('balance', $balance);
        $this->assign('getdata', $getdata);
        $this->assign('all_cash', $all_cash);
        return $this->fetch();
    }

    /**
     * 提现处理
     * @author lukui  2017-02-16
     * @param  string $value [description]
     * @return [type]        [description]
     */
    public function dorecharge()
    {
        if (input('post.')) {
            $data = input('post.');


            //获取提现订单信息和个人信息
            $balance = Db::name('balance')->field('bpid,bpprice,isverified,bptime,reg_par')->where('bpid', $data['bpid'])->find();
            $userinfo = Db::name('userinfo')->field('uid,username')->where('uid', $data['uid'])->find();
            if (empty($userinfo) || empty($balance)) {
                return WPreturn('Rút tiền thất bại，thiếu thông số!', -1);
            }
            if ($balance['isverified'] != 0) {
                //return WPreturn('Giao dịch này đã được thực hiện',-1);
            }


            //提现功能实现：

            $_data['bpid'] = $data['bpid'];
            $_data['isverified'] = (int)$data['type'];
            $_data['cltime'] = time();
            $_data['remarks'] = trim($data['cash_content']);

            //提现代付
            if ($_data['isverified'] == 1) {        //同意
                /*
                $bank = db('bankcard')->alias('bc')->field('bc.*,bs.bank_nm')
                        ->join('__BANKS__ bs','bs.id=bc.bankno')
                        ->where('uid',$userinfo['uid'])
                        ->find();
                $api = controller('Api');

                $resdafu = $api->daifu($balance,$userinfo,$bank);

                //return $resdafu;
                if($resdafu['type'] == -1){
                    return $resdafu;
                    exit;
                }else{
                    $_data['isverified'] == 4;	//代付中……
                }
                */

            }


            $ids = Db::name('balance')->update($_data);
            if ($ids) {

                if ($_data['isverified'] == 2) {  //拒绝
                    $_ids = db('userinfo')->where('uid', $data['uid'])->setInc('usermoney', $balance['bpprice']);
                    if ($_ids) {
                        $user_money = db('userinfo')->where('uid', $data['uid'])->value('usermoney');
                        //资金日志
                        set_price_log($data['uid'], 1, $balance['bpprice'], 'Rút tiền', 'Từ chối yêu cầu：' . $data['cash_content'], $data['bpid'], $user_money);
                    }
                } elseif ($_data['isverified'] == 1) {        //同意

                } else {
                    return WPreturn('Thao tác thất bại2！', -1);
                }
                return WPreturn('Thao tác thành công！', 1);

            } else {
                return WPreturn('Thao tác thất bại1！', -1);
            }
            //验证是否提现成功，成功后修改订单状态


        } else {
            $this->redirect('user/userprice');
        }

    }

    /**
     * 客户资料审核
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function userinfo()
    {
        if (input('post.')) {
            $data = input('post.');
            if (!$data['cid']) {
                return WPreturn('Xét duyệt thất bại, tham số không hợp lệ!', -1);
            }
            $editid = Db::name('cardinfo')->update($data);

            if ($editid) {
                return WPreturn('Xét duyệt thành công!', 1);
            } else {
                return WPreturn('Xét duyệt thất bại, vui lòng thử lại!', -1);
            }
        } else {
            $pagenum = cache('page');
            $getdata = $where = array();
            $data = input('get.');
            $is_check = input('param.is_check');
            //类型
            if (isset($data['is_check']) && $data['is_check'] != '') {
                $is_check = $data['is_check'];
            }
            if (isset($is_check) && $is_check != '') {
                $where['is_check'] = $is_check;
                $getdata['is_check'] = $is_check;
            }

            //Tên đăng nhập、id、手机、昵称
            if (isset($data['username']) && !empty($data['username'])) {
                $where['username|u.uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
                $getdata['username'] = $data['username'];
            }

            //时间搜索
            if (isset($data['starttime']) && !empty($data['starttime'])) {
                if (!isset($data['endtime']) || empty($data['endtime'])) {
                    $data['endtime'] = date('Y-m-d H:i:s', time());
                }
                $where['ctime'] = array('between time', array($data['starttime'], $data['endtime']));
                $getdata['starttime'] = $data['starttime'];
                $getdata['endtime'] = $data['endtime'];
            }


            $cardinfo = Db::name('cardinfo')->alias('c')->field('c.*,u.username,u.nickname,u.oid,u.portrait,u.utel')
                ->join('__USERINFO__ u', 'u.uid=c.uid')
                ->where($where)->order('cid desc')->paginate($pagenum, false, ['query' => $getdata]);

            $this->assign('cardinfo', $cardinfo);
            $this->assign('getdata', $getdata);
            return $this->fetch();
        }

    }


    /**
     * 会员列表
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function vipuserlist()
    {
        $pagenum = cache('page');
        $data = input('param.');
        $getdata = array();
        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            $where['username|uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            $getdata['username'] = $data['username'];
        }

        $oid = input('oid');
        if ($oid) {
            $where['oid'] = $oid;
            $getdata['oid'] = $oid;
        }

        //权限检测
        if ($this->otype != 3) {
            $oids = myoids($this->uid);
            $oids[] = $this->uid;
            if (!empty($oids)) {
                $where['uid'] = array('IN', $oids);
            }
        }

        $where['otype'] = 101;
        //dump($where);
        $userinfo = Db::name('userinfo')->where($where)->order('uid desc')->paginate($pagenum, false, ['query' => $getdata]);

        $this->assign('userinfo', $userinfo);
        $this->assign('getdata', $getdata);
        return $this->fetch();
    }

    /**
     * 添加会员
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function vipuseradd()
    {

        if (input('post.')) {
            $data = input('post.');
            $data['utime'] = time();
            $data['upwd'] = md5($data['upwd']);

            $_this_user = db('userinfo')->where('uid', $this->uid)->find();


            //判断用户是否存在
            $data['username'] = trim($data['username']);
            $c_uid = Db::name('userinfo')->where('username', $data['username'])->value('uid');
            if ($c_uid) {
                return WPreturn('Người dùng này đã tồn tại，vui lòng thay đổi Tên đăng nhập!', -1);
            }

            $issetutl = db('userinfo')->where('utel', $data['utel'])->find();
            if ($issetutl) {
                return WPreturn('Số điện thoại này đã tồn tại!', -1);
            }
            // Tỷ lệ hoa hồng (phí giao dịch)
            if ($this->otype == 3) {
                if ($data['rebate'] > 100) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn 100!', -1);
                }
            } else {
                if ($_this_user['rebate'] <= $data['rebate']) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn ' . $_this_user['rebate'] . '!', -1);
                }
            }

            // Tỷ lệ hoa hồng (đặt lệnh)
            if ($this->otype == 3) {
                if ($data['feerebate'] > 100) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn 100!', -1);
                }
            } else {
                if ($_this_user['feerebate'] <= $data['feerebate']) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn ' . $_this_user['feerebate'] . '!', -1);
                }
            }


            //去除空数组
            $data = array_filter($data);
            unset($data['upwd2']);
            $data['oid'] = $_SESSION['userid'];
            $data['managername'] = db('userinfo')->where('uid', $data['oid'])->value('username');

            $data['otype'] = 101;


			$data['utel']=encrypt(trim($data['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
            $ids = Db::name('userinfo')->insertGetId($data);
            if ($ids) {
                return WPreturn('Thêm thành viên thành công!', 1);
            } else {
                return WPreturn('Thêm thành viên thất bại, vui lòng thử lại!', -1);
            }
        } else {
            //所有Giám đốc
            $jingli = Db::name('userinfo')->field('uid,username')->where('otype', 2)->order('uid desc')->select();
            $this->assign('isedit', 0);
            $this->assign('jingli', $jingli);
            return $this->fetch();
        }
    }

    /**
     * 编辑会员
     * @author lukui  2017-02-16
     * @return [type] [description]
     */
    public function vipuseredit()
    {
        if (input('post.')) {
            //exit;
            $data = input('post.');
            if (!isset($data['uid']) || empty($data['uid'])) {
                return WPreturn('Tham số không hợp lệ, thiếu thông tin id của người dùng!', -1);
            }

			$data['utel']=encrypt(trim($data['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
            $foid = db('userinfo')->where('uid', $data['uid'])->value('oid');

            $_this_user = db('userinfo')->where('uid', $foid)->find();
            // Tỷ lệ hoa hồng (phí giao dịch)
            if ($this->otype == 3) {
                if ($data['rebate'] > 100) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn 100!', -1);
                }
            } else {
                if ($_this_user['rebate'] < $data['rebate']) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn ' . $_this_user['rebate'] . '!', -1);
                }
            }

            // Tỷ lệ hoa hồng (đặt lệnh)
            if ($this->otype == 3) {
                if ($data['feerebate'] > 100) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn 100!', -1);
                }
            } else {
                if ($_this_user['feerebate'] < $data['feerebate']) {
                    return WPreturn('Tỷ lệ hoa hồng không thể lớn hơn ' . $_this_user['feerebate'] . '!', -1);
                }
            }


            //修改密码
            if (isset($data['upwd']) && !empty($data['upwd'])) {
                //验证用户密码
                /*
                $c_user = Db::name('userinfo')->where('uid', $data['uid'])->find();
                $utime = $c_user['utime'];
              
                if(md5($data['ordpwd'].$utime) != $c_user['upwd']){
                    return WPreturn('Mật khẩu cũ không chính xác!',-1);
                }
                

                if (!isset($data['upwd']) || empty($data['upwd'])) {
                    return WPreturn('Vui lòng nhập mật khẩu mới!', -1);
                }
                if (isset($data['upwd']) && isset($data['upwd2']) && $data['upwd'] != $data['upwd2']) {
                    return WPreturn('Hai lần nhập mật khẩu không giống nhau!', -1);
                }*/
                unset($data['upwd2']);
                //unset($data['ordpwd']);
                $data['upwd'] = md5($data['upwd']);

            }

            if (empty($data["upwd"])) {
                unset($data["upwd"]);

            }
            //unset($data["ordpwd"]);
            unset($data["upwd2"]);

            if ($this->otype == 3) {

                if (empty($data["usermoney"])) {
                    $data["usermoney"] = 0;
                }

                $_data_user = db('userinfo')->where('uid', $data['uid'])->find();
                if ($data['usermoney'] != $_data_user['usermoney']) {
                    $b_data['bptype'] = 2;
                    $b_data['bptime'] = $b_data['cltime'] = time();
                    $b_data['bpprice'] = $data['usermoney'] - $_data_user['usermoney'];
                    $b_data['remarks'] = 'Quản trị viên trang web với id ' . $_SESSION['userid'] . ' đã chỉnh sửa thông tin khách hàng và thay đổi số tiền.';
                    $b_data['uid'] = $data['uid'];
                    $b_data['isverified'] = 1;
                    $b_data['bpbalance'] = $data['usermoney'];
                    $addbal = Db::name('balance')->insertGetId($b_data);
                    if (!$addbal) {
                        return WPreturn('Tăng số tiền thất bại，vui lòng thử lại!', -1);
                    }

                }
            }


            $data['ustatus']--;


            $editid = Db::name('userinfo')->update($data);

            if ($editid) {
                return WPreturn('Chỉnh sửa người dùng thành công!', 1);
            } else {
                return WPreturn('Chỉnh sửa người dùng thất bại, vui lòng thử lại!', -1);
            }
        } else {
            $uid = input('param.uid');
            if (!isset($uid) || empty($uid)) {
                $this->redirect('user/vipuserlist');
            }
            //获取用户信息
            $where['uid'] = $uid;
            $userinfo = Db::name('userinfo')->where($where)->find();
            $userinfo['utel'] = encrypt(trim($userinfo['utel']),'D','e10adc3949ba59abbe56e057f20f883e');
            //获取所有Giám đốc信息
            $jingli = Db::name('userinfo')->field('uid,username')->where('otype', 2)->order('uid desc')->select();


            unset($userinfo['otype']);
            $this->assign($userinfo);
            $this->assign('isedit', 1);
            $this->assign('jingli', $jingli);
            return $this->fetch('vipuseradd');
        }
    }


    /**
     * 会员的Mã mời
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function usercode()
    {
        if (input('post.')) {
            $data = input('post.');
            $data['usercode'] = trim($data['usercode']);
            //Mã mời是否存在
            $codeid = Db::name('usercode')->where('usercode', $data['usercode'])->value('id');
            if ($codeid) {
                return WPreturn('Mã mời này đã tồn tại', -1);
            }
            $ids = Db::name('usercode')->insertGetId($data);
            if ($ids) {
                return WPreturn('Thêm mã mời thành công!', 1);
            } else {
                return WPreturn('Thêm mã mời thất bại, vui lòng thử lại!', -1);
            }
            dump($data);

        } else {
            $uid = input('param.uid');
            if (!isset($uid) || empty($uid)) {
                $this->redirect('user/vipuserlist');
            }

            //所有Quản lý
            $manner = Db::name('userinfo')->field('uid,username')->where('otype', 3)->order('uid desc')->select();

            //Tất cả mã mời
            $usercode = Db::name('usercode')->alias('uc')->field('uc.*,ui.username')
                ->join('__USERINFO__ ui', 'ui.uid=uc.mannerid')
                ->where('uc.uid', $uid)->order('id desc')->select();

            $this->assign('uid', $uid);
            $this->assign('manner', $manner);
            $this->assign('usercode', $usercode);
            return $this->fetch();
        }
    }


    /**
     * 会员资金管理
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function vipuserbalance()
    {
        $pagenum = cache('page');
        $getdata = $userinfo = array();
        $data = input('get.');

        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            $where['username|uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            $getdata['username'] = $data['username'];
        }

        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $u_where['bptime'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

        //Loại thành viên otype
        if (isset($data['otype']) && !empty($data['otype'])) {
            $where['otype'] = $data['otype'];
            $getdata['otype'] = $data['otype'];
        } else {
            $where['otype'] = array('IN', array(2, 3, 4));
        }

        //必须是已经审核了的
        $u_where['isverified'] = 1;

        $user = Db::name('userinfo')->field('uid,username,oid,otype')->where($where)->order('uid desc')->paginate($pagenum, false, ['query' => $getdata]);

        //分页与数据分开执行
        $page = $user->render();
        $userinfo = $user->items();

        //获取会员下面客户的资金情况
        foreach ($userinfo as $key => $value) {
            $u_uid = array();
            //获取会员的ID khách hàng
            if ($value['otype'] == 2) {  //Giám đốc
                $u_uid = JingliUser($value['uid']);
            } elseif ($value['otype'] == 3) {  //Quản lý
                $u_uid = QudaoUser($value['uid']);
            } elseif ($value['otype'] == 4) {  //Nhân viên
                $u_uid = YuangongUser($value['uid']);
            }
            if (empty($u_uid)) {
                $u_uid = array(0);
            }
            $u_where['uid'] = array('IN', $u_uid);
            //Tổng nạp tiền
            $u_where['bptype'] = 1;
            $userinfo[$key]['recharge'] = Db::name('balance')->where($u_where)->sum('bpprice');
            //Tổng rút tiền
            $u_where['bptype'] = 0;
            $userinfo[$key]['getprice'] = Db::name('balance')->where($u_where)->sum('bpprice');
            //Tổng thu nhập ròng
            $userinfo[$key]['income'] = $userinfo[$key]['recharge'] - $userinfo[$key]['getprice'];


        }

        //dump($userinfo);
        $this->assign('userinfo', $userinfo);
        $this->assign('page', $page);
        $this->assign('getdata', $getdata);
        return $this->fetch();
    }


    /**
     * 客户资金管理
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function userbalance()
    {
        $pagenum = cache('page');

        //所有归属
        $vipuser['jingli'] = Db::name('userinfo')->field('uid,username')->where('otype', 2)->select();
        $vipuser['qudao'] = Db::name('userinfo')->field('uid,username')->where('otype', 3)->select();
        $vipuser['yuangong'] = Db::name('userinfo')->field('uid,username')->where('otype', 4)->select();
        //搜索条件
        $where = $getdata = array();
        $data = input('get.');
        //Tên đăng nhập、id、手机、昵称
        if (isset($data['username']) && !empty($data['username'])) {
            $where['username|u.uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            $getdata['username'] = $data['username'];
        }

        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $where['bptime'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

        //Loại thành viên ouid
        if (isset($data['ouid']) && !empty($data['ouid'])) {
            //该会员下所有的Mã mời
            $uids = UserCodeForUser($data['ouid']);
            if (empty($uids)) {
                $uids = array(0);
            }
            $where['b.uid'] = array('IN', $uids);
        }

        //必须是已经审核了的
        $where['isverified'] = 1;


        $where['bptype'] = array('between', '0,2');
        //客户资金变动
        $balance = Db::name('balance')->alias('b')->field('b.*,u.username,u.nickname,u.oid')
            ->join('__USERINFO__ u', 'u.uid=b.uid')
            ->where($where)->order('bpid desc')->paginate($pagenum, false, ['query' => $getdata]);

        $this->assign('vipuser', $vipuser);
        $this->assign('balance', $balance);
        return $this->fetch();
    }


    /**
     * Thêm quản trị viên
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function adminadd()
    {

        return $this->fetch();
    }

    /**
     * Danh sách quản trị viên
     * @author lukui  2017-02-17
     * @return [type] [description]
     */
    public function adminlist()
    {

        return $this->fetch();
    }


    /**
     * 禁用、启用用户
     * @return [type] [description]
     */
    public function doustatus()
    {

        $post = input('post.');
        if (!$post) {
            $this->error('Hành động không hợp lệ！');
        }

        if (!$post['uid'] || !in_array($post['ustatus'], array(0, 1))) {
            return WPreturn('Tham số không hợp lệ', -1);
        }

        $ids = db('userinfo')->update($post);
        if ($ids) {
            return WPreturn('Thao tác thành công！', 1);
        } else {
            return WPreturn('Thao tác thất bại！', -1);
        }


    }

    /**
     * 成为代理商
     * @return [type] [description]
     */
    public function dootype()
    {

        $post = input('post.');
        if (!$post) {
            $this->error('Hành động không hợp lệ！');
        }

        if (!$post['uid'] || $post['otype'] != 101) {
            return WPreturn('Tham số không hợp lệ', -1);
        }

        $ids = db('userinfo')->update($post);
        if ($ids) {
            return WPreturn('Thao tác thành công！', 1);
        } else {
            return WPreturn('Thao tác thất bại！', -1);
        }


    }


    /**
     * 签约管理
     * @return [type] [description]
     */
    public function userbank()
    {


        $uid = input('param.uid');
        if (!$uid) {
            $this->error('Tham số không hợp lệ！');
        }
        //Tài khoản ngân hàng模式
        $bank = db('bankcard')->alias('bc')->field('bc.*,bs.bank_nm')
            ->join('__BANKS__ bs', 'bs.id=bc.bankno')
            ->where('uid', $uid)
            ->find();
        //数字钱包模式
        /*$bank = db('bankcard')
            ->where('uid', $uid)
            ->find();
        $bank['bank_nm'] ='test';*/

		//Tài khoản ngân hàng
        $banks = db('banks')->select();

        //地区
        $province = db('area')->where(array('pid'=>0))->select();

        $this->assign('banks',$banks);
        $this->assign('province',$province);
		$this->assign('bank',$bank);
        return $this->fetch();
    }

public function dobanks()
    {

        $post = input('post.');

        foreach ($post as $k => $v) {

            if(empty($v)){
                return WPreturn('Vui lòng điền đúng thông tin！',-1);
            }

            $post[$k] = trim($v);

        }


        if(isset($post['id']) && !empty($post['id'])){

            $ids = db('bankcard')->update($post);
        }else{
            unset($post['id']);
            $post['uid'] = $this->uid;
            $ids = db('bankcard')->insert($post);
        }

        if ($ids) {
            return WPreturn('Thao tác thành công!',1);
        }else{
            return WPreturn('Thao tác thất bại, vui lòng thử lại!',-1);
        }



    }

    /**
     * Đội nhóm của tôi
     * @return [type] [description]
     */
    public function myteam()
    {

        $uid = $this->uid;
        $userinfo = db('userinfo');
        //$myteam = $userinfo->field('uid,oid,username,utel,nickname,usermoney')->where(array('oid'=>$uid,'otype'=>101))->select();
        $myteam = mytime_oids($uid);
        $user = $userinfo->where('uid', $uid)->find();
        $user['mysons'] = $myteam;
        $this->assign('mysons', $user);
        return $this->fetch();

    }


    /**
     * 某个代理商的业绩
     * @return [type] [description]
     */
    public function yeji()
    {
        $userinfo = db('userinfo');
        $price_log = db('price_log');
        $uid = input('uid');
        if (!$uid) {
            $this->error('Tham số không hợp lệ！');
        }

        $_user = $userinfo->where('uid', $uid)->find();
        if (!$_user) {
            $this->error('Hiện chưa có người dùng！');
        }


        //搜索条件
        $data = input('param.');

        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        } else {
            $getdata['starttime'] = date('Y-m-d', time()) . ' 00:00:00';
            $getdata['endtime'] = date('Y-m-d', time()) . ' 23:59:59';
        }

        $map['time'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        $map['uid'] = $uid;
        /*
        //红利收益
        $map['title'] = 'Đối chứng';
        $hl_account = $price_log->where($map)->sum('account');
        if(!$hl_account) $hl_account = 0;
        //Hoa hồng收益
        $map['title'] = 'Phí giao dịch của khách hàng';
        $yj_account = $price_log->where($map)->sum('account');
        if(!$yj_account) $yj_account = 0;
        //dump($yj_account);

        $this->assign('_user',$_user);
        $this->assign('getdata',$getdata);
        $this->assign('all_sxfee',$yj_account);
        $this->assign('all_ploss',$hl_account);
        */

        $_map['buytime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        $uids = myuids($uid);
        $_map['uid'] = array('IN', $uids);
        $all_sxfee = db('order')->where($_map)->sum('sx_fee');
        if (!$all_sxfee) $all_sxfee = 0;
        $all_ploss = db('order')->where($_map)->sum('ploss');
        if (!$all_ploss) $all_ploss = 0;

        $this->assign('_user', $_user);
        $this->assign('getdata', $getdata);
        $this->assign('all_sxfee', $all_sxfee);
        $this->assign('all_ploss', $all_ploss);

        /*
        $this->assign('hl_account',$hl_account);
        $this->assign('yj_account',$yj_account);
        */
        return $this->fetch();
    }

public function delQianyue(){
  		$id = input('post.id');
		if(!$id){
			return WPreturn('Tham số không hợp lệ！',-1);
		}

		$ids = db('bankcard')->where('id',$id)->delete();
		if($id){
			return WPreturn('Xóa thành công',1);
		}else{
			return WPreturn('Xóa thất bại',-1);
		}
  }
    /**删除用户
     */
    public function deleteuser()
    {

        $uid = input('post.uid');
        if (!$uid) {
            return WPreturn('Tham số không hợp lệ！', -1);
        }

        $ids = db('userinfo')->where('uid', $uid)->delete();
        if ($uid) {
            return WPreturn('Xóa thành công', 1);
        } else {
            return WPreturn('Xóa thất bại', -1);
        }
    }

    public function chongzhi()
    {


        return $this->fetch();
    }

    public function addprice()
    {
        //exit;
        $post = input('post.');

       // $post['utel'] = encrypt(trim($post['utel']),'E','e10adc3949ba59abbe56e057f20f883e');
        $post['bpprice'] = trim($post['bpprice']);

        if (!$post || !$post['bpprice']) {
            return WPreturn('Vui lòng điền thông số hợp lệ', -1);
        }
        $user = db('userinfo')->where('uid', $post['uid'])->find();

        if (!$user) return WPreturn('Người dùng này không tồn tại, vui lòng điền id người dùng chính xác', -1);

        $b_data['bptype'] = 2;
        $b_data['bptime'] = $b_data['cltime'] = time();
        $b_data['bpprice'] = $post['bpprice'];
        $b_data['remarks'] = 'Quản trị viên trang web với id ' . $_SESSION['userid'] . ' đã chỉnh sửa thông tin khách hàng và thay đổi số tiền.';
        $b_data['uid'] = $user['uid'];
        $b_data['isverified'] = 1;
        $b_data['bpbalance'] = $user['usermoney'] + $post['bpprice'];
        $addbal = Db::name('balance')->insertGetId($b_data);

        $ids = db('userinfo')->where('uid', $post['uid'])->setInc('usermoney', $post['bpprice']);

        if (!$ids) return WPreturn('Tăng số tiền thất bại，vui lòng thử lại!', -1);

        if (!$addbal) {
            return WPreturn('Lỗi hệ thống, vui lòng kiểm tra Lệnh!', -1);
        } else {
            return WPreturn('Thao tác thành công', 1);
        }
    }
	
	public function rechargerecord(){
		$pagenum = cache('page');
        $getdata = $where = array();
        $data = input('param.');
		
		$codepayorder = Db::name('codepay_order')->where($where)->order('pay_time desc')->paginate($pagenum, false, ['query' => $getdata]);
        $this->assign('codepayorder', $codepayorder);
        $this->assign('getdata', $getdata);
        return $this->fetch();
		
	}


}
