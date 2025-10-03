<?php

namespace app\lord\controller;


class Price extends Base
{

    /**
     * Hoa hồng统计
     * @return [type] [description]
     */
    public function yongjin()
    {

        $pagenum = cache('page');
        $getdata = array();

        //搜索条件
        $get = input('param.');

        $res = $this->checkinput($get);
        $map = $res['where'];
        $getdata = $res['getdata'];


        $map['title'] = 'Phí giao dịch của khách hàng';


        $list = db('price_log')->alias('pl')->field('pl.*,u.username,u.utel')
            ->join('__USERINFO__ u', 'u.uid=pl.uid')
            ->where($map)->order('id desc')->paginate($pagenum, false, ['query' => $getdata]);;


        $this->assign('list', $list);
        $this->assign('getdata', $getdata);
        return $this->fetch();
    }


    /**
     * Báo cáo tiền thưởng
     * @return [type] [description]
     */
    public function allot()
    {

        $pagenum = cache('page');
        $getdata = array();

        //搜索条件
        $get = input('param.');

        $res = $this->checkinput($get);
        $map = $res['where'];
        $getdata = $res['getdata'];


        $map['title'] = 'Đối chứng';


        $list = db('price_log')->alias('pl')->field('pl.*,u.username,u.utel')
            ->join('__USERINFO__ u', 'u.uid=pl.uid')
            ->where($map)->order('id desc')->paginate($pagenum, false, ['query' => $getdata]);;


        $count = db('price_log')->alias('pl')
            ->join('__USERINFO__ u', 'u.uid=pl.uid')
            ->where($map)->count();

        $this->assign('list', $list);
        $this->assign('count', $count);
        $this->assign('getdata', $getdata);
        return $this->fetch();

    }


    /**
     * Báo cáo về dòng tiền
     * @return [type] [description]
     */
    public function pricelist()
    {
        $pagenum = cache('page');
        $map = $getdata = array();
        $uid = $this->uid;

        //循环条件
        $balance = db('balance');
        $price_log = db('price_log');
        $order = db('order');
        $tody_starttime = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 00:00:00');
        $tody_endtime = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 24:00:00');

        //搜索条件
        $data = input('param.');
        if (isset($data['username']) && !empty($data['username'])) {
            $map['username|uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            $getdata['username'] = $data['username'];
        }
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

        if ($this->otype != 3) {
            $my_son = myuids($uid);
            $map['uid'] = array('IN', $my_son);
        }

        $list = db('userinfo')->field('uid,username,utel,oid,managername,usermoney')
            ->where($map)->order('uid desc')->paginate($pagenum, false, ['query' => $getdata]);

        $_list = array();
        foreach ($list as $key => $v) {
            $_list[$key] = $v;
            //入金总额
            $all_res_map['uid'] = $v['uid'];
            $all_res_map['bptype'] = 1;
            $all_res_map['isverified'] = 1;
            if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
                $all_res_map['btime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
            }
            $_list[$key]['all_res'] = $balance->where($all_res_map)->sum('bpprice');
            //入金次数
            $_list[$key]['all_res_count'] = $balance->where($all_res_map)->count();
            //Tổng số tiền rút ra
            $all_cash_map['uid'] = $v['uid'];
            $all_cash_map['bptype'] = 0;
            $all_cash_map['isverified'] = 1;
            if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
                $all_cash_map['btime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
            }
            $_list[$key]['all_cash'] = $balance->where($all_cash_map)->sum('bpprice');
            //Số lần rút ra
            $_list[$key]['all_cash_count'] = $balance->where($all_cash_map)->count();
            //Số tiền rút đang chờ duyệt
            $all_cash_map['isverified'] = 0;
            $_list[$key]['all_cash_shenhe'] = $balance->where($all_cash_map)->sum('bpprice');
            //Hoa hồng
            $yj_map['uid'] = $v['uid'];
            $yj_map['title'] = 'Phí giao dịch của khách hàng';
            if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
                $yj_map['time'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
            }
            $_list[$key]['all_yj'] = $price_log->where($yj_map)->sum('account');
            //红利
            $hl_map['uid'] = $v['uid'];
            $hl_map['title'] = 'Đối chứng';
            if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
                $hl_map['time'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
            }
            $_list[$key]['all_hl'] = $price_log->where($hl_map)->sum('account');
            //Tài sản ròng
            $_list[$key]['res_cash'] = $_list[$key]['all_res'] - $_list[$key]['all_cash'];
            //Lời lỗ trong ngày
            $tody_ploss_map['uid'] = $v['uid'];
            $tody_ploss_map['buytime'] = array('between time', array($tody_starttime, $tody_endtime));
            $_list[$key]['tody_ploss'] = $order->where($tody_ploss_map)->sum('ploss');
            //Tổng lời lỗ
            $tody_ploss_map['uid'] = $v['uid'];
            unset($tody_ploss_map['buytime']);
            $_list[$key]['all_ploss'] = $order->where($tody_ploss_map)->sum('ploss');
            $_list[$key]['all_sx_fee'] = $order->where($tody_ploss_map)->sum('sx_fee');
            //手动打款
            $all_cash_map['uid'] = $v['uid'];
            $all_cash_map['bptype'] = 2;
            $all_cash_map['isverified'] = 1;
            if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
                $all_cash_map['btime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
            }
            $_list[$key]['all_cash_shoudong'] = $balance->where($all_cash_map)->sum('bpprice');
            //Số dư thực tế：
            $_list[$key]['shiji_money'] = $_list[$key]['all_cash_shoudong'] + $_list[$key]['all_ploss'] + $_list[$key]['all_res'] + $_list[$key]['all_yj'] + $_list[$key]['all_hl'] - $_list[$key]['all_cash'] - $_list[$key]['all_cash_shenhe'] - $_list[$key]['all_sx_fee'];


        }


        $this->assign('getdata', $getdata);
        $this->assign('_list', $_list);
        $this->assign('list', $list);

        $this->assign('jsongetdata', http_build_query($getdata));
        return $this->fetch();
    }


    /**
     * Báo cáo cá nhân
     * @return [type] [description]
     */
    public function myprice()
    {

        $pagenum = cache('page');
        $getdata = array();
        $map = array();
        //搜索条件
        $data = input('param.');

        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $map['time'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }


        //权限检测
        if ($this->otype != 3) {
            $map['pl.uid'] = $this->uid;
        }


        $list = db('price_log')->alias('pl')->field('pl.*,u.username,u.utel')
            ->join('__USERINFO__ u', 'u.uid=pl.uid')
            ->where($map)->order('id desc')->paginate($pagenum, false, ['query' => $getdata]);;

        $this->assign('list', $list);
        $this->assign('getdata', $getdata);
        return $this->fetch();
    }


    /**
     * ajax 统计
     * @return [type] [description]
     */
    public function pricesta()
    {

        $data = input('post.');

        //验证搜索数据
        $res = $this->checkinput($data);
        $where = $res['where'];
        $getdata = $res['getdata'];

        $balance = db('balance');
        $price_log = db('price_log');
        $order = db('order');

        $uid = $this->uid;
        if ($this->otype != 3) {
            $uids = myuids($this->uid);
        } else {
            $uids = '';
        }

        if (isset($data['username']) && !empty($data['username'])) {
            $_user_map['username|uid|utel|nickname'] = array('like', '%' . $data['username'] . '%');
            $getdata['username'] = $data['username'];
            $user_id = db('userinfo')->where($_user_map)->field('uid')->select();
            $user_id_arr = array();
            if ($user_id) {
                foreach ($user_id as $kk => $vv) {
                    $user_id_arr[] = $vv['uid'];
                }
                $uids = $user_id_arr;

            }
        }

        $tody_starttime = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 00:00:00');
        $tody_endtime = strtotime(date("Y") . '-' . date("m") . '-' . date("d") . ' 24:00:00');


        //入金总额
        $all_res_map['bptype'] = 1;
        $all_res_map['isverified'] = 1;
        if (!empty($uids)) {
            $all_res_map['uid'] = array('IN', $uids);
        }
        if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
            $all_res_map['btime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        }
        $_list['all_res'] = $balance->where($all_res_map)->sum('bpprice');

        //Tổng số tiền rút ra
        $all_cash_map['bptype'] = 0;
        $all_cash_map['isverified'] = 1;
        if (!empty($uids)) {
            $all_cash_map['uid'] = array('IN', $uids);
        }
        if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
            $all_cash_map['btime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        }
        $_list['all_cash'] = $balance->where($all_cash_map)->sum('bpprice');

        //Tổng số tiền hoa hồng
        $yj_map['title'] = 'Phí giao dịch của khách hàng';
        if (!empty($uids)) {
            $yj_map['uid'] = array('IN', $uids);
        }
        if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
            $yj_map['time'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        }
        $_list['all_yj'] = $price_log->where($yj_map)->sum('account');

        //Tổng số tiền thưởng
        $hl_map['title'] = 'Đối chứng';
        if (!empty($uids)) {
            $hl_map['uid'] = array('IN', $uids);
        }
        if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
            $hl_map['time'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        }
        $_list['all_hl'] = $price_log->where($hl_map)->sum('account');

        //Lời lỗ trong ngày
        $tody_ploss_map['buytime'] = array('between time', array($tody_starttime, $tody_endtime));
        if (!empty($uids)) {
            $tody_ploss_map['uid'] = array('IN', $uids);
        }
        $_list['tody_ploss'] = $order->where($tody_ploss_map)->sum('ploss');

        //Lời lỗ tổng cộng
        $his_ploss_map = array();
        if (isset($getdata['starttime']) && !empty($getdata['starttime'])) {
            $his_ploss_map['buytime'] = array('between time', array($getdata['starttime'], $getdata['endtime']));
        }
        if (!empty($uids)) {
            $his_ploss_map['uid'] = array('IN', $uids);
        }
        $_list['all_lis'] = $order->where($his_ploss_map)->sum('ploss');

        echo json_encode($_list);

    }


    public function checkinput($data)
    {


        $where = array();
        $getdata = array();
        if (isset($data["username"]) && !empty($data["username"])) {
            $where['u.username|u.utel'] = array('like', '%' . trim($data['username']) . '%');
            $getdata['username'] = trim($data['username']);
        }
        //时间搜索
        if (isset($data['starttime']) && !empty($data['starttime'])) {
            if (!isset($data['endtime']) || empty($data['endtime'])) {
                $data['endtime'] = date('Y-m-d H:i:s', time());
            }
            $where['time'] = array('between time', array($data['starttime'], $data['endtime']));
            $getdata['starttime'] = $data['starttime'];
            $getdata['endtime'] = $data['endtime'];
        }

        //权限检测
        if ($this->otype != 3) {
            $me = array($this->uid);
            $my_sons = myoids($this->uid);
            if (!empty($my_sons)) {
                $my_sons = array_merge($me, $my_sons);
            } else {
                $my_sons = $me;
            }

            $where['pl.uid'] = array('IN', $my_sons);
        }


        $res['where'] = $where;
        $res['getdata'] = $getdata;
        return $res;


    }


    public function duizhang()
    {
        $uid = input('uid');
        if ($uid) {
            $user = db('userinfo')->where('uid', $uid)->find();
            if (!$user) {
                $this->error('Hiện chưa có thông tin người dùng');
            }

            //入金
            $rj_map['uid'] = $uid;
            $rj_map['bptype'] = 1;
            $rj_map['isverified'] = 1;

            $data['rujin'] = db('balance')->where($rj_map)->sum('bpprice');
            if (!$data['rujin']) $data['rujin'] = 0;
            //Số tiền đã rút ra
            $cj_map['uid'] = $uid;
            $cj_map['bptype'] = 0;
            $cj_map['isverified'] = 1;
            $data['chujin'] = db('balance')->where($cj_map)->sum('bpprice');
            if (!$data['chujin']) $data['chujin'] = 0;

            $cj_map['uid'] = $uid;
            $cj_map['bptype'] = 0;
            $cj_map['isverified'] = 0;
            $data['chujin_sq'] = db('balance')->where($cj_map)->sum('bpprice');
            if (!$data['chujin_sq']) $data['chujin_sq'] = 0;
            //订单Phí giao dịch
            $sx_map['uid'] = $uid;
            $data['shouxu'] = db('order')->where($sx_map)->sum('sx_fee');
            if (!$data['shouxu']) $data['shouxu'] = 0;
            //Lãi lỗ giao dịch
            $data['yingkui'] = db('order')->where($sx_map)->sum('ploss');
            if (!$data['yingkui']) $data['yingkui'] = 0;
            //Tiền thưởng đã nhận
            $map['uid'] = $uid;
            $map['title'] = 'Đối chứng';
            $data['hongli'] = db('price_log')->where($map)->sum('account');
            if (!$data['hongli']) $data['hongli'] = 0;
            //Hoa hồng收益
            $map['title'] = 'Phí giao dịch của khách hàng';
            $data['shouxushouyi'] = db('price_log')->where($map)->sum('account');
            if (!$data['shouxushouyi']) $data['shouxushouyi'] = 0;

            $this->assign('data', $data);
            $this->assign('user', $user);
            $this->assign('uid', $uid);
        }

        return $this->fetch();


    }


}


?>