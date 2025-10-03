<?php

namespace app\lord\controller;

use think\Db;

class RechargeRecord extends Base{
	function getRechargeRecord() {
		$pagenum = cache('page');
        $getdata = $where = array();
        $data = input('param.');
		
		$userinfo = Db::name('userinfo')->where($where)->order('uid desc')->paginate($pagenum, false, ['query' => $getdata]);
        $this->assign('userinfo', $userinfo);
        $this->assign('getdata', $getdata);
        return $this->fetch();
		
	}
	
}