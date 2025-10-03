<?php
namespace app\lord\controller;
use think\Controller;
use think\Db;

class Goods extends Base
{

	/**
	 * Danh sách sản phẩm
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function prolist()
	{
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		$proinfo = Db::name('productinfo')->alias('pi')->field('pi.*,pc.pcname')
                    ->join('__PRODUCTCLASS__ pc','pc.pcid = pi.cid')
                    ->where('pi.isdelete',0)->order('pi.proorder asc')->select();

        $this->assign('proinfo',$proinfo);
		return $this->fetch();
	}

	/**
	 * Thêm sản phẩm
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function proadd()
	{
		//echo 'Kill!';exit;
		
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		if(input('post.')){
			$data = input('post.');

            //修改Thời gian mở cửa thị trường
            $opentime_arr = $data['opentime'];
            $opentime_str = '';
            foreach ($opentime_arr as $k => $v) {
                $opentime_str .= trim($v).'-';
            }
            $opentime['opentime'] = $opentime_str;
            $_otime = db('opentime')->where('pid',$data['pid'])->find();
            if($_otime){
                db('opentime')->where('pid',$data['pid'])->update($opentime);
            }else{
                $opentime['pid'] = $data['pid'];
                db('opentime')->insert($opentime);
            }

            unset($data['opentime']);

            
			if(!$data['ptitle'] || !$data['cid'] ){
				return WPreturn('Tham số không hợp lệ',-1);
			}
			$data['time'] = time();
			$data['isdelete'] = 0;

			if(isset($data['pid']) && !empty($data['pid']) && $data['pid'] != 0){ //编辑
				$editid = Db::name('productinfo')->update($data);
                if($editid){

                    
                    return WPreturn('Chỉnh sửa thành công',1);
                }else{
                    return WPreturn('Chỉnh sửa thất bại',-1);
                }
			}else{  //新添加
				$addid = Db::name('productinfo')->insertGetId($data);
                if($addid){
                    $p_data['pid'] = $addid;
                    Db::name('productdata')->insert($p_data);
                    return WPreturn('Thêm mới thành công',1);
                }else{
                    return WPreturn('Thêm mới thất bại',-1);
                }
			}

		}else{
			if(input('param.pid')){  //Chỉnh sửa sản phẩm

                $pid = input('param.pid');
                $productinfo = Db::name('productinfo')->where('pid',$pid)->find();
                $this->assign($productinfo);

                $opentime = db('opentime')->where('pid',$pid)->find();
                if($opentime){
                    $otime_arr = explode('-',$opentime["opentime"]);
                }else{
                    $otime_arr = array('','','','','','','');
                }
                
                $this->assign('opentime',$otime_arr);
            }
			//分类
			$proclass = Db::name('productclass')->where('isdelete',0)->order('pcid desc')->select();

            $this->assign('proclass',$proclass);
			return $this->fetch();
		}
		
	}

	/**
	 * 产品开、休市
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function proisopen()
	{
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		if (input('post.')) {
			$data = input('post.');
			$editid = Db::name('productinfo')->update($data);
            if($editid){
                return WPreturn('Chỉnh sửa thành công',1);
            }else{
                return WPreturn('Chỉnh sửa thất bại',-1);
            }
		}else{
			return WPreturn('Tham số không hợp lệ',-1);
		}
	}

	/**
	 * 删除产品
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function delpro()
	{
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		$id = input('get.id',0);
    	if(!$id){
    		return WPreturn('Tham số không hợp lệ',-1);
    	}

    	$delpro = Db::name('productinfo')->where('pid', $id)->update(['isdelete' => 1]);
    	if($delpro){
            $p_data['isdelete'] = 1;
            Db::name('productdata')->where('pid', $id)->update($p_data);
    		return WPreturn('Xóa thành công',1);
    	}else{
    		return WPreturn('Xóa thất bại',-1);
    	}
	}

    /**
     * Phục hồi产品
     * @author lukui  2017-02-15
     * @return [type] [description]
     */
    public function hypro()
    {
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
        $id = input('get.id',0);
        if(!$id){
            return WPreturn('Tham số không hợp lệ',-1);
        }

        $delpro = Db::name('productinfo')->where('pid', $id)->update(['isdelete' => 0]);
        if($delpro){
            $p_data['isdelete'] = 0;
            Db::name('productdata')->where('pid', $id)->update($p_data);
            return WPreturn('Khôi phục thành công',1);
        }else{
            return WPreturn('Khôi phục thất bại',-1);
        }
    }




	/**
	 * Danh mục sản phẩm
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function proclass()
	{
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		$productclass = Db::name('productclass')->where('isdelete',0)->order('pcid desc')->select();
    	$this->assign('productclass',$productclass);
		return $this->fetch();
	}

	/**
	 * 编辑、Thêm sản phẩm分类
	 * @author lukui  2017-02-15
	 * @return [type] [description]
	 */
	public function editclass()
	{
		
		echo 'Kill!';exit;
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
		$data['pcid'] = input('post.pcid',0);
        $data['pcname'] = input('post.pcname',0);
        $data['isdelete'] = 0;
        if(!$data['pcname']){
            return WPreturn('Tham số không hợp lệ',-1);
        }

        if($data['pcid']){ //有id 编辑信息
            $editnews = Db::name('productclass')->where('pcid', $data['pcid'])->update(array('pcname' => $data['pcname']));
            if($editnews){
                return WPreturn('Chỉnh sửa thành công',1);
            }else{
                return WPreturn('Chỉnh sửa thất bại',-1);
            }
        }else{ //没di 增加一条
            $addid = Db::name('productclass')->insert($data);
            if($addid){
                return WPreturn('Thêm mới thành công',1);
            }else{
                return WPreturn('Thêm mới thất bại',-1);
            }
        }
	}

	/**
     * 删除分类
     * @author lukui  2017-02-15
     * @return [type] [description]
     */
    public function deleteclass()
    {
		
		if($this->otype != 3){
			echo 'Kill!';exit;
		}
    	$id = input('get.id',0);
    	if(!$id){
    		return WPreturn('Tham số không hợp lệ',-1);
    	}

    	$delpro = Db::name('productclass')->where('pcid', $id)->update(['isdelete' => 1]);
    	if($delpro){
    		return WPreturn('Xóa thành công',1);
    	}else{
    		return WPreturn('Xóa thất bại',-1);
    	}
    	
    }

    /**
     * 风控管理
     * @author lukui  2017-02-15
     * @return [type] [description]
     */
    public function risk()
    {
    	if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
    	$risk = Db::name('risk')->find();
    	$this->assign($risk);
    	return $this->fetch();
    }


    public function addrisk()
    {
        if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        $post = input('post.');
        
        
        if (!$post) {
            $this->error('Từ chối truy cập');
        }

        if(empty($post['id'])){
            unset($post['id']);
            $ids = db('risk')->insert($post);
        }else{
            $ids = db('risk')->update($post);
        }

        if($ids){
            return WPreturn('Thao tác thành công',1);
        }else{
            return WPreturn('Thao tác thất bại',-1);
        }

    }


    /**
     * Sắp xếp
     * @author lukui  2017-08-27
     * @return [type] [description]
     */
    public function proorder()
    {
        if($this->otype != 3){
			echo 'Kill!';exit;
		}
		
        $post = input('post.');
        if(!isset($post["proorder"])){
            $this->error('Tham số không hợp lệ！');
        }
        $proorder = $post["proorder"];
        $productinfo = db('productinfo');
        foreach ($proorder as $k => $v) {
            $_dara['pid'] = $k;
            $_dara['proorder'] = (int)trim($v);
            $productinfo->update($_dara);
            
        }

        $this->success('Thao tác thành công！');
        
    }

    public function huishou()
    {
        if($this->otype != 3){
			echo 'Kill!';exit;
		}
		

        $proinfo = Db::name('productinfo')->alias('pi')->field('pi.*,pc.pcname')
                    ->join('__PRODUCTCLASS__ pc','pc.pcid = pi.cid')
                    ->where('pi.isdelete',1)->order('pi.pid asc')->select();

        $this->assign('proinfo',$proinfo);
        return $this->fetch();
    }





}
