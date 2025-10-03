<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Cookie;

class Login extends Controller
{


    public function __construct(){
        //$yuyan = cookie('think_var', 'zh-yl');
        parent::__construct();
        $this->conf = getconf('');
        if($this->conf['is_close'] != 1){
            header('Location:/error.html');
        }
        $this->assign('conf',$this->conf);
        $this->token = md5(rand(1,100).time());
        $this->assign('token',$this->token);
    }
    
    /**
     * 用户登录
     * @author lukui  2017-02-18
     * @return [type] [description]
     */
	 public function login()
	{   
        $userinfo = Db::name('userinfo');
    	//判断是否已经登录
    	if (isset($_SESSION['uid'])) {
    		$this->redirect('index/index?token='.$this->token);
    	}
		//web用户登录请求
		if(input('post.')){
			$data = input('post.');
			//验证用户信息
			if(!isset($data['username']) || empty($data['username'])){
				return WPreturn(lang('qsryhm'),-1);
			}
			if(!isset($data['upwd']) || empty($data['upwd'])){
				return WPreturn(lang('qsrmm'),-1);
			}
			//查询用户
			
			$result = $userinfo
			->where('username',$data['username'])->whereOr('nickname',$data['username'])->whereOr('utel',encrypt(trim($data['username']),'E','e10adc3949ba59abbe56e057f20f883e'))
			->field("uid,upwd,username,utel,utime,otype,ustatus")->find();
			//验证用户
		 if(empty($result)){
				return WPreturn(lang('zhbcz'),-1);
			}else{
				if(!in_array($result['otype'], array(0,101))){  //非客户无权登录
					return WPreturn('Bạn không có quyền đăng nhập!',-1);
				}
				if($result['upwd'] == md5($data['upwd'])){
					
						$_SESSION['uid'] = $result['uid'];
						//更新登录时间
						$t_data['logintime'] = $t_data['lastlog'] = time();
						$t_data['uid'] = $result['uid'];
						$userinfo->update($t_data);
						return WPreturn(lang('dlcg'),1);

									   
				}
				else{
					return WPreturn(lang('mmcw'),-1);
				}
			}
			
			
		}
		return $this->fetch();
    	
    }
    public function loginbf()
	{   
        $userinfo = Db::name('userinfo');
    	//判断是否已经登录
    	if (isset($_SESSION['uid'])) {
    		$this->redirect('index/index?token='.$this->token);
    	}
		//web用户登录请求
		if(input('post.')){
			$data = input('post.');
			//验证用户信息
			if(!isset($data['username']) || empty($data['username'])){
				return WPreturn('Vui lòng nhập tên người dùng！',-1);
			}
			if(!isset($data['upwd']) || empty($data['upwd'])){
				return WPreturn('Vui lòng nhập mật khẩu！',-1);
			}
			//查询用户
			
			$result = $userinfo
			->where('username',$data['username'])->whereOr('nickname',$data['username'])->whereOr('utel',encrypt(trim($data['username']),'E','e10adc3949ba59abbe56e057f20f883e'))
			->field("uid,upwd,username,utel,utime,otype,ustatus")->find();
			//验证用户
		 if(empty($result)){
				return WPreturn(lang('zhbcz'),-1);
			}else{
				if(!in_array($result['otype'], array(0,101))){  //非客户无权登录
					return WPreturn('Bạn không có quyền đăng nhập!',-1);
				}
				if($result['upwd'] == md5($data['upwd'])){
					
						$_SESSION['uid'] = $result['uid'];
						//更新登录时间
						$t_data['logintime'] = $t_data['lastlog'] = time();
						$t_data['uid'] = $result['uid'];
						$userinfo->update($t_data);
						return WPreturn(lang('dlcg'),1);

									   
				}
				else{
					return WPreturn(lang('mmcw'),-1);
				}
			}
			
			
		}
		return $this->fetch();
    	
    }
    public function login2()
    {   
        $userinfo = Db::name('userinfo');
    	//判断是否已经登录
    	if (isset($_SESSION['uid'])) {
    		$this->redirect('index/index?token='.$this->token);
    	}
        
    	if(iswechat() && 1==2){
    		//微信浏览器 微信登录
    		if(cookie('wx_info')){
    			$wx_info = cookie('wx_info');

    			$data['openid'] = $wx_info['openid'];
    			$checkuser = Db::name('userinfo')->where($data)->value('uid');
    			//判断是否已经注册
    			if($checkuser){  //已经注册直接记录session
    				$_SESSION['uid'] = $checkuser;
                    //更新登录时间
                    $t_data['logintime'] = $t_data['lastlog'] = time();
                    $t_data['uid'] = $checkuser;
                    $userinfo->update($t_data);
                    $this->redirect('index/index');
    			}else{  //未注册 则注册 默认密码为123456
    				$data['nickname'] = $wx_info['nickname'];
    				$data['utime'] = time();
    				//$data['upwd'] = md5('123456'.$data['utime']);
    				$data['otype'] = 0;
    				$data['ustatus'] = 0;
    				$data['address'] = $wx_info['country'].$wx_info['province'].$wx_info['city'];
    				$data['portrait'] = $wx_info['headimgurl'];
                    if(isset($_SESSION['fid']) && $_SESSION['fid']>0){
                        $fid = $_SESSION['fid'];
                        $fid_info = $userinfo->where(array('uid'=>$fid,'otype'=>101))->value('uid');
                        if($fid_info){
                            $data['oid'] = $fid;
                        }

                    }
    				//插入数据
    				$ids = $userinfo->insertGetId($data);
					$newdata['uid'] = $ids;
					$newdata['username'] = 10000000+$ids;
					$newids = $userinfo->update($newdata);
					//清除cookie 为了安全
					cookie('wx_info', null);
					//记录session
					$_SESSION['uid'] = $ids;
                    //更新登录时间
                    $t_data['logintime'] = $t_data['lastlog'] = time();
                    $t_data['uid'] = $ids;
                    $userinfo->update($t_data);
					$this->redirect('login/addpwd?token='.$this->token);
    			}
    		}else{
    			$this->redirect('wechat/get_wx_userinfo');
    			
    		}

    	}else{
            //web用户登录请求
    		if(input('post.')){
                $data = input('post.');
                //验证用户信息
                if(!isset($data['username']) || empty($data['username'])){
                    return WPreturn('Vui lòng nhập tên người dùng！',-1);
                }
                if(!isset($data['upwd']) || empty($data['upwd'])){
                    return WPreturn('Vui lòng nhập mật khẩu！',-1);
                }
                //查询用户
                
                $result = $userinfo
                ->where('username',$data['username'])->whereOr('nickname',$data['username'])->whereOr('utel',encrypt(trim($data['username']),'E','e10adc3949ba59abbe56e057f20f883e'))
                        ->field("uid,upwd,username,utel,utime,otype,ustatus")->find();
                //验证用户
             if(empty($result)){
                    return WPreturn('Đăng nhập thất bại, tên người dùng không tồn tại!',-1);
                }else{
                    if(!in_array($result['otype'], array(0,101))){  //非客户无权登录
                        return WPreturn('Bạn không có quyền đăng nhập!',-1);
                    }
                    if($result['upwd'] == md5($data['upwd'])){
                    

                            $_SESSION['uid'] = $result['uid'];
                            //更新登录时间
                            $t_data['logintime'] = $t_data['lastlog'] = time();
                            $t_data['uid'] = $result['uid'];
                            $userinfo->update($t_data);
                            return WPreturn('login successful!',1);

                                           
                    }
                    else{
                        return WPreturn('Đăng nhập thất bại,mật khẩu không đúng!',-1);
                    }
                }
                
                
            }
            return $this->fetch();
    		
    	}
    	
    }

    /**
     * 用户注册
     * @author lukui  2017-02-24
     * @param  string $value [description]
     * @return [type]        [description]
     */ 
public function register()
{
    $userinfo = Db::name('userinfo');
    if (input('post.')) {
        $data = input('post.');
        // Xác thực thông tin người dùng
        if (!isset($data['username']) || empty($data['username'])) {
            return WPreturn('Vui lòng nhập tên người dùng!', -1);
        }
        if (!isset($data['upwd']) || empty($data['upwd'])) {
            return WPreturn('Vui lòng nhập mật khẩu!', -1);
        }
        if (!isset($data['upwd2']) || empty($data['upwd2'])) {
            return WPreturn('Vui lòng nhập lại mật khẩu!', -1);
        }
        if ($data['upwd'] != $data['upwd2']) {
            return WPreturn('Mật khẩu không khớp!', -1);
        }
        if (!isset($data['oid']) || empty($data['oid'])) {
            return WPreturn('Vui lòng nhập mã mời!', -1);
        }
        if (!isset($data['paypwd']) || empty($data['paypwd'])) {
            return WPreturn('Vui lòng nhập mật khẩu thanh toán!', -1);
        }
        // Kiểm tra mã mời có tồn tại không
        
        $codeid = checkcode($data['oid']);
        if(!$codeid){
            return WPreturn('Mã mời không tồn tại',-1);
        }

 
        // Kiểm tra mã xác nhận điện thoại
        // if(!isset($_SESSION['code']) || $_SESSION['code'] != $data['phonecode'] ){
        //     return WPreturn('Mã xác nhận điện thoại không chính xác',-1);
        // }else{
        //     unset($_SESSION['code']);
        // }

        // unset($data['phonecode']);
        
        unset($data['upwd2']);
        if (check_user('username', $data['username'])) {
            return WPreturn('Tên người dùng đã tồn tại!', -1);
        }
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
        $data['utime'] = $data['logintime'] = $data['lastlog'] = time();
        $data['upwd'] = md5($data['upwd']);
        $data['nickname'] = trim($data['nickname']);
        $data['utel'] =  encrypt(trim($data['username']), 'E', 'e10adc3949ba59abbe56e057f20f883e');
        //$data['utel'] =  md5(trim($data['username']));
        $data['managername'] = db('userinfo')->where('uid', $data['oid'])->value('username');

        if (isset($this->conf['reg_type']) && $this->conf['reg_type'] == 1) {
            $data['ustatus'] = 0;
        } else {
            $data['ustatus'] = 1;
        }
        
        if (isset($_SESSION['fid']) && $_SESSION['fid'] > 0) {
            $fid = $_SESSION['fid'];
            $fid_info = $userinfo->where(array('uid' => $fid, 'otype' => 101))->value('uid');
            if ($fid_info) {
                $data['oid'] = $fid;
            }
        }
        $data['managername'] = $userinfo->where(array('uid' => $data['oid'], 'otype' => 101))->value('username');

        // Chèn dữ liệu vào cơ sở dữ liệu
        $ids = $userinfo->insertGetId($data);
        // $newdata['uid'] = $ids;
        // $newdata['username'] = 10000000+$ids;
        // $newids = $userinfo->update($newdata);

        if ($ids) {
            $_SESSION['uid'] = $ids;
            return WPreturn(lang('zccg'), 1);
        } else {
            return WPreturn(lang('zcsb'), -1);
        }
    }
    if (isset($_SESSION['fid']) && $_SESSION['fid'] > 0) {
        $oid = $_SESSION['fid'];
    } else {
        $oid = '';
    }
    $this->assign('oid', $oid);
    return $this->fetch();
}



    public function addpwd()
    {
        
        $uid = $_SESSION['uid'];
        if(!$uid){
            $this->redirect('index/index');
        }
        //查找用户是否已经有了密码
        $user = Db::name('userinfo')->where('uid',$uid)->field('upwd,utime,oid')->find();
        /*
        if(!empty($user['upwd'])){
            $this->redirect('index/index');
        }
        */
        //添加密码
        if(input('post.')){
            $data = input('post.');

            if(!isset($data['upwd']) || empty($data['upwd'])){
                return WPreturn('Vui lòng nhập mật khẩu！',-1);
            }
            if(!isset($data['upwd2']) || empty($data['upwd2'])){
                return WPreturn('Vui lòng nhập lại mật khẩu！',-1);
            }
            if($data['upwd'] != $data['upwd2']){
                return WPreturn('Hai lần nhập mật khẩu không giống nhau！',-1);
            }
            /*
            //验证邀请码
            if (isset($data['oid']) && !empty($data['oid'])) {
                $codeid = checkcode($data['oid']);
                if(!$codeid){
                    return WPreturn('Mã mời này không tồn tại',-1);
                }
                $adddata['oid'] = $data['oid'];
            }
            */
            $adddata['upwd'] = trim($data['upwd']);
            $adddata['upwd'] = md5($adddata['upwd']);
            $adddata['uid'] = $uid;
            if(isset($data['username'])){
                if(check_user('utel',$data['username'])){
                    return WPreturn('Số điện thoại này đã tồn tại',-1);
                }
               $adddata['utel'] = $data['username']; 

               //验证码
               
                //判断手机验证码
                if(!isset($_SESSION['code']) || $_SESSION['code'] != $data['phonecode'] ){
                    return WPreturn('Mã xác nhận điện thoại không chính xác',-1);
                }else{
                    unset($_SESSION['code']);
                }
                
            }
            
            $newids = Db::name('userinfo')->update($adddata);
            if ($newids) {
                return WPreturn('Sửa đổi thành công!',1);
            }else{
                return WPreturn('Sửa đổi thất bại, vui lòng thử lại!',-1);
            }

        }

        $this->assign($user);
        return $this->fetch();

    }
 
    /**
     * 用户退出
     * @author lukui  2017-02-24
     * @return [type] [description]
     */
    public function logout()
    {
        session_unset();
        cookie('wx_info',null);
        $this->redirect('login/login?token='.$this->token);

    }


    /**
     * 发送短信
     * @return [type] [description]
     */
    public function sendmsm()
    {
        $phone = input('phone');

        if(!$phone){
           exit('Vui lòng nhập số điện thoại');
        }

        $code = rand(100000,999999);
        $_SESSION['code'] = $code;
        
        $msm = controller('Msm');
        $res = $msm->sendsms(0, $code ,$phone );
        if($res==1){
		 exit('Gửi thành công');
            return WPreturn('Gửi thành công',1);
        }else{
			exit('Gửi mã xác nhận không thành công');
            return WPreturn('Gửi mã xác nhận không thành công！',-1);
        }
        

    }  


    public function respass()
    {
        $data = input('post.');
        if($data){
            $suerinfo = db('userinfo');
            $user = $suerinfo->where('nickname',$data['nickname'])->find();
            if(!$user){
                return WPreturn('tên người dùng không tồn tại',-1);
            }
            

            if(!isset($data['upwd']) || empty($data['upwd'])){
                return WPreturn('Vui lòng nhập mật khẩu！',-1);
            }
            if(!isset($data['upwd2']) || empty($data['upwd2'])){
                return WPreturn('Vui lòng nhập lại mật khẩu！',-1);
            }
            if($data['upwd'] != $data['upwd2']){
                return WPreturn('Hai lần nhập mật khẩu không giống nhau！',-1);
            }
            
            
            
            //判断手机验证码
//            if(!isset($_SESSION['code']) || $_SESSION['code'] != $data['phonecode'] ){
//                return WPreturn('Mã xác nhận điện thoại không chính xác',-1);
//            }else{
//                unset($_SESSION['code']);
//            }
//
            unset($data['phonecode']);
            unset($data['upwd2']);

            if($user['otype'] == 101){
                unset($data['nickname']);
            }
            
            $data['upwd'] = md5($data['upwd']);
            $data['uid'] = $user['uid'];
            $data['logintime'] = $data['lastlog'] = time();
            $ids = $suerinfo->update($data);
            if($ids){
                return WPreturn('Sửa đổi thành công',1);
            }else{
                return WPreturn('Sửa đổi thất bại',-1);
            }
           
        }
        return $this->fetch();
    }



    public function repaypass()
    {
        $data = input('post.');
        if($data){
            $suerinfo = db('userinfo');
           /* $user = $suerinfo->where('utel',encrypt(trim($data['username']),'E','e10adc3949ba59abbe56e057f20f883e'))->find();*/
            $user = $suerinfo->where('nickname',$data['nickname'])->find();
            if(!$user){
                return WPreturn(lang('yxbcz'),-1);
            }


            if(!isset($data['upwd']) || empty($data['upwd'])){
                return WPreturn('Vui lòng nhập mật khẩu！',-1);
            }
            if(!isset($data['upwd2']) || empty($data['upwd2'])){
                return WPreturn('Vui lòng nhập lại mật khẩu！',-1);
            }
            if($data['upwd'] != $data['upwd2']){
                return WPreturn('Hai lần nhập mật khẩu không giống nhau！',-1);
            }


            unset($data['phonecode']);
            unset($data['upwd2']);

            if($user['otype'] == 101){
                unset($data['nickname']);
            }
            $data['paypwd'] = $data['upwd'];
            unset($data['upwd']);
            $data['uid'] = $user['uid'];
            $data['logintime'] = $data['lastlog'] = time();
            $ids = $suerinfo->update($data);
            if($ids){
                return WPreturn(lang('Succeful!'),1);
            }else{
                return WPreturn(lang('Error!'),-1);
            }

        }
        return $this->fetch();
    }




    public function langSetting()
    {
        //$lang = input('get.lang');
        $lang = input('param.lang');
        if($lang){
           cookie('think_var', $lang);
        }else{
            $lang = cookie('think_var');
        }
        return WPreturn(cookie('think_var'),1);
    }    protected function fetch($template = '', $vars = [], $replace = [], $config = [])
    {
        $replace['__HOME__'] = str_replace('/index.php','',\think\Request::instance()->root()).'/static/index';
        return $this->view->fetch($template, $vars, $replace, $config);
    }



}
