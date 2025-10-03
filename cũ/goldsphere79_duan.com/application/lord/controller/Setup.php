<?php
namespace app\lord\controller;
use think\Controller;
use think\Db;
/**
 * 系统设置和积分比例设置，可自定义设置
 */

class Setup extends Base
{

    /**
     * 基本设置
     * @author lukui  2017-04-19
     * @return [type] [description]
     */
    public function index()
    {
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        $map['group'] = 1;
        $map['status'] = 1;

        $data = Db::name('config')->where($map)->order('sort asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }


    /**
     * 比例设置
     * @author lukui  2017-04-19
     * @return [type] [description]
     */
    public function proportion()
    {
        if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        $map['group'] = 2;
        $map['status'] = 1;

        $data = Db::name('config')->where($map)->order('sort asc')->select();
        $this->assign('data',$data);
        return $this->fetch('index');
    }


    /**
     * 配置比例
     * @author lukui  2017-04-19
     * @return [type] [description]
     */
    public function addsetup()
    {
if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        if(input('post.')){
            $data = input('post.');
            $data['create_time'] = $data['update_time'] = time();
            $data['status'] = 1;

            if(isset($data['id'])){
                $ids = Db::name('config')->update($data);
            }else{
                $ids = Db::name('config')->insert($data);
            }
            
            if($ids){
                cache('conf',null);
                return WPreturn('Cấu hình thành công',1);
            }else{
                return WPreturn('Cấu hình thất bại, vui lòng thử lại',-1);
            }
            
            exit;
        }else{

            if(input('param.id')){
                $id = input('param.id');
                $data = Db::name('config')->where('id',$id)->find();
                $this->assign($data);
            }
            return $this->fetch();
        }

        
    }


    /**
     * 编辑配置/比例
     * @author lukui  2017-04-19
     * @return [type] [description]
     */
    public function editconf()
    {
		
		//echo 'Kill!';exit;
		
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
        
        if(input('post.')){

            $data = input('post.');

            foreach ($data as $k => $v) {
                $arr = explode('_',$k);
                $_data['id'] = $arr[1];
                $_data['value'] = $v;
                $file = request()->file('pic_'.$_data['id']);
                
                if($file){
                    
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
                    if($info){
                        $_data['value'] = '/public' . DS . 'uploads/'.$info->getSaveName();
                    }
                }
                if($_data['value'] == '' && isset($arr[2]) && $arr[2] == 3){
                    continue;
                }
                
                Db::name('config')->update($_data);

            }
            cache('conf',null);
            $this->success('Chỉnh sửa thành công');
        }

        
    }



    public function deleteconf()
    {
        
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        if(input('post.')){

            $id = input('post.id');
            
            if(!$id){
                return WPreturn('Tham số không hợp lệ',-1);
            }

            $_data['id'] = $id;
            $_data['status'] = 0;

            $ids = Db::name('config')->update($_data);
            if($ids){
                cache('conf',null);
                return WPreturn('Xóa thành công',1);
            }else{
                return WPreturn('Xóa thất bại，vui lòng thử lại',-1);
            }
            
        }
    }


    /**
     * 所有Danh sách cấu hình cơ bản
     * @author lukui  2017-04-19
     * @return [type] [description]
     */
    public function deploy()
    {
		
		if($this->otype != 3){
			echo 'Kill!';exit;
		}

        $map['status'] = 1;

        $data = Db::name('config')->where($map)->order('sort asc')->select();
        $this->assign('data',$data);
        return $this->fetch();
    }

    


}
