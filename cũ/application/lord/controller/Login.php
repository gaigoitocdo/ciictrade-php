<?php
namespace app\lord\controller;
use think\Controller;
use think\Request;
use think\Cookie;
use think\Db;

class Login extends Controller
{

	/**  多行情盘 技术飞机Giao Dịch
	 * 后台登录
	 * @author lukui  2017-02-13
	 * @return [type] [description]
	 */
	public function login()
	{	
		$login = cookie('denglu');
		if(isset($login['userid'])){
			$this->error('Bạn đã đăng nhập！','index/index',1,1);
		}
		

		if(input('post.')){
			$data = input('post.');
			
			//记住我一天
			if(isset($data['rememberme'])){
				Cookie::set('rememberme',$data['username'],60*60*24);
			}

			$result = Db::name('userinfo')->where(array('username'=>$data['username']))->find();
			
			//验证用户
			if(empty($result)){
				return WPreturn('Đăng nhập thất bại, Tên đăng nhập không tồn tại!',-1);
			}else{

				if($result['otype'] == 0){
					
					return WPreturn('Bạn không có quyền đăng nhập!',-1);
				}			
				
				if($result['upwd'] == md5($data['password'])){
					
					if ( $result['otype']!=0 && $result['ustatus']==0)
					{
						
						$_datas['otype'] = $result['otype'];
						$_datas['userid'] = $result['uid'];
						$_datas['username'] = $result['username'];
						$_datas['token'] = md5('nimashabi');
						
						$_SESSION['otype'] = $result['otype'];
						$_SESSION['userid'] = $result['uid'];
						$_SESSION['username'] = $result['username'];
						$_SESSION['token'] = md5('nimashabi');
						
						cookie('denglu', $_datas, 60*20);
						return WPreturn('Đăng nhập thành công!',1);

					}elseif($result['ustatus']==1){
						return WPreturn('Đăng nhập thất bại, tài khoản của bạn đã bị đóng băng tạm thời!',-1);
					}else{
						return WPreturn('Đăng nhập thất bại, Tên đăng nhập không tồn tại!',-1);
					}
				
				}
				else{
					return WPreturn('Đăng nhập thất bại, mật khẩu không đúng!',-1);
				}
			
			}
			
		}else{
			$rememberme = isset($_COOKIE['rememberme'])?$_COOKIE['rememberme']:'';
			$this->assign('rememberme',$rememberme);
			return $this->fetch('login');
		}
			
	}

	/**
	 * 退出
	 * @author lukui  2017-02-13
	 * @return [type] [description]
	 */
	public function logout()
	{
		cookie('denglu',null);
		session_unset();
		$this->redirect('login');
		return $this->fetch('logout');
	}

 
	
    
}
