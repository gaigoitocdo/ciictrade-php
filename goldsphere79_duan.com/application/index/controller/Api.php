<?php 
namespace app\index\controller;
use think\Controller;
use think\Db;
// Giao Dịch
class Api extends Controller{

	public function __construct(){
		parent::__construct();

		$this->nowtime = time();
		$minute = date('Y-m-d H:i',$this->nowtime).':00';
		$this->minute = strtotime($minute);


		$this->user_win = array();//指定客户赢利
		$this->user_loss = array();//指定客户亏损
		
		//K线数据库
		$this->klinedata = db('klinedata');


	}
	public function getdate()
	{
		

		//产品列表
		$pro = db('productinfo')->where('isdelete',0)->select();

		if(!isset($pro)) return false;

		$nowtime = time();
		$_rand = rand(1,900)/100000;
		$thisdatas = array();
		
		foreach ($pro as $k => $v) {

			//验证休市
			$isopen = ChickIsOpen($v['pid']);
			if(!$isopen){
				//continue;
			}
			if(in_array($v['procode'],array('btcusdt','solusdt','ethusdt','bchusdt','ltcusdt','xrpusdt','etcusdt','bnbusdt'))){
				$minute = date('i',$nowtime);
				if($minute >= 0 && $minute < 15){ $minute = 0;}
				elseif($minute >= 15 && $minute < 30){ $minute = 15;}
				elseif($minute >= 30 && $minute < 45){ $minute = 30;}
				elseif($minute >= 45 && $minute < 60){ $minute = 45;}
				$new_date = strtotime(date('Y-m-d H',$nowtime).':'.$minute.':00');
				
				$url = "https://api.huobi.pro/market/history/kline?period=1min&size=1&symbol=".$v['procode'];
				$getdata = $this->curlfun($url,Array(),"POST"); //dump($url);
 if (!$getdata) continue;
                $res = json_decode($getdata,1);
if (!isset($res['data'])) continue;
                $data_arr = $res['data'][0];
                
				if(!$data_arr || !$data_arr['close'] || !$data_arr['open'] || !$data_arr['high'] || !$data_arr['low']){
					continue;
				}
//                $getdata = substr($getdata,2,-2);
//				$data_arr = explode(',',$getdata);
				
//				if(!is_array($data_arr) || count($data_arr) != 6) continue;
				$thisdata['Price'] = $data_arr['close'];
				$thisdata['Open'] = $data_arr['open'];
				$thisdata['Close'] = $data_arr['close'];
				$thisdata['High'] = $data_arr['high'];
				$thisdata['Low'] = $data_arr['low'];
				$thisdata['Diff'] = $data_arr['close'] - $data_arr['open'];
				$thisdata['DiffRate'] = (($data_arr['close'] - $data_arr['open']) / $data_arr['open']) * 100;

			}else if($v['procode'] == "btc" || $v['procode'] == "ltc" ){
				continue;
				$minute = date('i',$nowtime);
				if($minute >= 0 && $minute < 15){ $minute = 0;}
				elseif($minute >= 15 && $minute < 30){ $minute = 15;}
				elseif($minute >= 30 && $minute < 45){ $minute = 30;}
				elseif($minute >= 45 && $minute < 60){ $minute = 45;}
				$new_date = strtotime(date('Y-m-d H',$nowtime).':'.$minute.':00');
				//Giao Dịch
				if($v['procode'] == 'btc'){					
					$url = 'http://btc.layui.icus/data/v1/ticker?market=btc_usdt';				
				}elseif($v['procode'] == 'ltc'){					
					$url = 'http://btc.layui.icus/data/v1/ticker?market=ltc_usdt';					
				}			
				continue;
				$getdata = $this->curlfun($url);
				$res = json_decode($getdata,1);
				$data_arr=$res['ticker']; 		
	
				if(!is_array($data_arr)) continue;                  		
				$thisdata['Price'] = $this->fengkong($data_arr['sell'],$v);;				
				$thisdata['Open'] = $data_arr['buy'];				
				$thisdata['Close'] = $data_arr['last'];				
				$thisdata['High'] = $data_arr['high'];				
				$thisdata['Low'] = $data_arr['low'];				
				$thisdata['Diff'] = 0;				
				$thisdata['DiffRate'] = 0;
				$thisdata['Name'] = $v['ptitle'];
				
				
				}elseif(in_array($v['procode'],array("EURGBP","GBPAUD","AUDUSD","USDJPY","USDCHF","USDCAD","GBPJPY","EURUSD","GBPUSD","GBPCAD"))){

				//Giao Dịch
				$haomiao=getMillisecond();
				/*$url = "http://w.layui.icus/etag.php?_=$haomiao&list=fx_s".strtolower($v['procode']);
				$getdata = $this->curlfunS($url);
					$getdata=explode("=",$getdata);
					$data_arr = explode(',',$getdata[1]);
					if(!is_array($data_arr)) continue;
		
				
				    $thisdata['Price'] = $this->fengkong($data_arr[1],$v);
				    $thisdata['Open'] = $data_arr[3];
				    $thisdata['Close'] = $data_arr[5];
				    $thisdata['High'] = $data_arr[2];
				    $thisdata['Low'] = $data_arr[7];
				    $thisdata['Diff'] = 0;
				    $thisdata['DiffRate'] = 0;*/

				/*$url = "https://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_fx_s".strtolower($v['procode'])."_1_1690111172222=/NewForexService.getMinKline?symbol=fx_s".strtolower($v['procode'])."&scale=1&datalen=1";
				$html = $this->curlfunS($url);
					$_arr = explode('[',$html);
					$_str = substr($_arr[1],1,-3);
					$_data_arr = explode('},{',$_str);

					return $_data_arr[1];
				foreach ($_data_arr as $kz => $vv) {
					
					$_son_arr = explode(',', $vv);
						$res_arr[] = array(
							strtotime(substr($_son_arr[0],5,-1)),
							substr($_son_arr[1],5,-1),
							substr($_son_arr[4],5,-1), 
							substr($_son_arr[2],5,-1),
							substr($_son_arr[3],5,-1),
							
						);
	
				}*/
            $milliseconds = time();
            $milliseconds2 = $milliseconds - 1080000;
				$url = "https://fxverify.com/api/live-chart/datafeed/bars?symbol=IC%20Markets:".strtoupper($v['procode'])."&resolution=1&from=".$milliseconds2."&to=".$milliseconds."&countback=1";
// Sử dụng cURL để gửi yêu cầu GET
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // Bỏ qua kiểm tra SSL nếu cần

// Thực thi yêu cầu và lưu dữ liệu phản hồi
$response = curl_exec($ch);

// Kiểm tra lỗi cURL
if (curl_errno($ch)) {
    echo 'Lỗi cURL: ' . curl_error($ch);
    curl_close($ch);
    exit;
}

// Đóng kết nối cURL
curl_close($ch);

// Giải mã dữ liệu JSON thành mảng PHP
$data = json_decode($response, true);
if (isset($data[0])) {
    $vip = $data[0]; // Lấy phần tử đầu tiên
    $thisdata['Price'] = floatval($vip['open']);
    $thisdata['Open'] = floatval($vip['open']);
    $thisdata['Close'] = floatval($vip['close']);
    $thisdata['High'] = floatval($vip['high']);
    $thisdata['Low'] = floatval($vip['low']);
    $thisdata['Diff'] = floatval($vip['close']) - floatval($vip['open']);
    $thisdata['DiffRate'] = (( $vip['close'] - $vip['open'] ) / $vip['open'] )* 100;
} else {
    echo "Dữ liệu không tồn tại.";
}


			}elseif(in_array($v['procode'],array("GC","CL","SI"))){
			    $interval = "1m";
			    
$geturl ="https://gu.sina.cn/ft/api/jsonp.php/var%20_".$v['procode']."_".$interval."_".getMillisecond()."=/GlobalService.getMink?symbol=".$v['procode']."&type=1m";
				$html = $this->curlfunS($geturl);
				$html=ltrim($html,"/*<script>location.href='//sina.com';</script>*/");

    				$_arr = explode('[',$html);
    				if(!isset($_arr[1])){
    					return;
    				}
    				$_str = substr($_arr[1],1,-3);
    				$_data_arr = explode('},{',$_str);
$_count = count($_data_arr);
if ($_count == 0) {
    return;
}

// lấy phần tử cuối cùng
$last_str = $_data_arr[$_count - 1];

// tách dữ liệu
$_son_arr = explode(',', $last_str);

$arr_tmp = [];
foreach ($_son_arr as $kk => $vv) {
    $tmp = explode('":"', $vv);
    $arr_tmp[] = trim($tmp[1], '"');
}

$_ktime = $arr_tmp[0];
		   		$thisdata['Price'] = $arr_tmp[4];
				$thisdata['Open'] = $arr_tmp[1];
				$thisdata['Close'] = $arr_tmp[4];
				$thisdata['High'] = $arr_tmp[2];
				$thisdata['Low'] = $arr_tmp[3];
				$thisdata['Diff'] = 0;
				$thisdata['DiffRate'] = 0;
			}elseif(in_array($v['procode'],array(12,13,116))){  
				//Giao Dịch
				$url = 'http://m.layui.icus/api.do?rtp=GetQuotesDetail&id='.$v['procode'];
continue;
				$html = $this->curlfun($url);
				
		   		$res = json_decode($html,1);
		   		$res = $res['data']['quotes'];
		  

		   		$thisdata['Price'] = $res['buy'];
				$thisdata['Open'] = $res['open'];
				$thisdata['Close'] = $res['last_close'];
				$thisdata['High'] = $res['top'];
				$thisdata['Low'] = $res['low'];
				$thisdata['Diff'] = 0;
				$thisdata['DiffRate'] = 0;

			}elseif(in_array($v['procode'],array('llg','lls'))){ 				
				//Giao Dịch
				$url = "https://hasd.com/getmarketinfo/getQuotationByCode2.do?code=".$v['procode'];
				$html = $this->curlfun($url);
				$arr = json_decode($html,1);
				
				if(!isset($arr[0])) continue;
				$data_arr = $arr[0];
				$thisdata['Price'] = $this->fengkong($data_arr['buy'],$v);;
				$thisdata['Open'] = $data_arr['open'];
				$thisdata['Close'] = $data_arr['lastclose'];
				$thisdata['High'] = $data_arr['high'];
				$thisdata['Low'] = $data_arr['low'];
				$thisdata['Diff'] = 0;
				$thisdata['DiffRate'] = 0;
				
			}else{
				//Giao Dịch
				$url = "http://hasd.com/rn=".$nowtime."list=".$v['procode'];
				$getdata = $this->curlfun($url);
				$data_arr = explode(',',$getdata);
				
				if(!is_array($data_arr) || count($data_arr) != 18) continue;

				$thisdata['Price'] = $data_arr[1];
				$thisdata['Open'] = $data_arr[5];
				$thisdata['Close'] = $data_arr[3];
				$thisdata['High'] = $data_arr[6];
				$thisdata['Low'] = $data_arr[7];
				$thisdata['Diff'] = $data_arr[12];
				$thisdata['DiffRate'] = $data_arr[4]/10000;

			}
			
			
			$thisdata['Name'] = $v['ptitle'];
			$thisdata['UpdateTime'] = $nowtime;
			$thisdata['pid'] = $v['pid'];

			$thisdatas[$v['pid']] = $thisdata;


			
		}
echo time();
		cache('nowdata',$thisdatas);
		
	}


	/**
	 * 数据风控
	 * @author lukui  2017-06-27
	 * @param  [type] $price [description]
	 * @param  [type] $pro   [description]
	 * @return [type]        [description]
	 */
	public function fengkong($price,$pro)
	{
		
		$point_low = $pro['point_low'];
		$point_top = $pro['point_top'];
		
		$FloatLength = getFloatLength($point_top);
		$jishu_rand = pow(10,$FloatLength);
		$point_low = $point_low * $jishu_rand;
		$point_top = $point_top * $jishu_rand;
		$rand = rand($point_low,$point_top)/$jishu_rand;
		
		$_new_rand = rand(0,10);
		if($_new_rand % 2 == 0){
			$price = $price + $rand;
		}else{
			$price = $price - $rand;
		}
		return $price;
	}




	//curl获取数据
	public function curlfun($url, $params = array(), $method = 'GET')
	{
		
		$header = array();
		$opts = array(CURLOPT_TIMEOUT => 10, CURLOPT_RETURNTRANSFER => 1, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false, CURLOPT_HTTPHEADER => $header);

		/* 根据请求类型设置特定参数 */
		switch (strtoupper($method)) {
			case 'GET' :
				$opts[CURLOPT_URL] = $url . '?' . http_build_query($params);
				$opts[CURLOPT_URL] = substr($opts[CURLOPT_URL],0,-1);
				
				break;
			case 'POST' :
				//判断是否传输文件
				$params = http_build_query($params);
				$opts[CURLOPT_URL] = $url;
				$opts[CURLOPT_POST] = 1;
				$opts[CURLOPT_POSTFIELDS] = $params;
				break;
			default :
				
		}

		/* 初始化并执行curl请求 */
		$ch = curl_init();
		curl_setopt_array($ch, $opts);
		$data = curl_exec($ch);
		$error = curl_error($ch);
		curl_close($ch);
		
		if($error){
			$data = null;
		}
		
		return $data;

	}	/**
	 * 全局平仓
	 * @return [type] [description]
	 */
	public function order()
	{
		$nowtime = time();
		$kong_end = getconf('kong_end');
		$kong_end_arr = explode('-',$kong_end );
		if(count($kong_end_arr) == 2){
			$s_rand = rand($kong_end_arr[0],$kong_end_arr[1]);
		}else{
			$s_rand = rand(6,12);
		}
		
		$db_order = db('order');
		$db_userinfo = db('userinfo');
		//订单列表
		$map['ostaus'] = 0;
		$map['selltime'] = array('elt',$nowtime+$s_rand );
		$_orderlist = $db_order->where($map)->order('selltime asc')->limit('0,50')->select();
		
		//dump($_orderlist);
		

		$data_info = db('productinfo');

		

		//风控参数
		$risk = db('risk')->find();

		//此刻产品价格
		$p_map['isdelete'] = 0;
		$pro = db('productdata')->field('pid,Price')->where($p_map)->select();
		$prodata = array();
		foreach ($pro as $k => $v) {
			
			$_pro = cache('nowdata');
			
			if(!isset($_pro[$v['pid']])){
				$prodata[$v['pid']] = $v['Price'];
				continue;
			}

			$prodata[$v['pid']] = $this->order_type($_orderlist,$_pro[$v['pid']],$risk,$data_info);
			// dump($prodata);
			//echo '---------------------------------------------------<br>';
		}
		//exit;
		//订单列表
		$map['ostaus'] = 0;
		$map['selltime'] = array('elt',$nowtime);
		$orderlist = $db_order->where($map)->limit(0,50)->select();
		
		//exit;
		if(!$orderlist){
			return false;
		}

		//循环处理订单
		$nowtime = time();
		foreach ($orderlist as $k => $v) {

			//此刻可平仓价位
			$sellprice = isset($prodata[$v['pid']])?$prodata[$v['pid']]:0;
			if($sellprice == 0){
				continue;
			}
			//买入价
			$buyprice = $v['buyprice'];
			$fee = $v['fee'];

			$order_cha = round(floatval($sellprice)-floatval($buyprice),6);
			
			//买涨
			if($v['ostyle'] == 0 && $nowtime >= $v['selltime']){

				if($order_cha > 0){  //盈利
					$yingli = $v['fee']*($v['endloss']/100);
					$d_map['is_win'] = 1;
					

					//平仓增加用户金额
                   	$u_add = $yingli + $fee;
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);

                   	//写入日志
                   	$this->set_order_log($v,$u_add);


				}elseif($order_cha < 0){	//亏损
				
				    $kuishun = $v['fee']*($v['endloss']/100);  //输赢亏损
				    //$u_add =  $fee-$kuishun;
				    $u_add =  0;                             //输掉本金
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);

				    //$yingli = -1*$kuishun;   
				    
				    $yingli = -1*$v['fee'];   //输掉本金
					
					
					
					$d_map['is_win'] = 2;
					$this->set_order_log($v,0);

				}else{		//无效
					$yingli = 0;
					$d_map['is_win'] = 3;

					//平仓增加用户金额
                   	$u_add = $fee;
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);
                   	//写入日志
                   	$this->set_order_log($v,$u_add);
				}

				//平仓处理订单
				$d_map['ostaus'] = 1;
				$d_map['sellprice'] = $sellprice;
				$d_map['ploss'] = $yingli;
				$d_map['oid'] = $v['oid'];
				db('order')->update($d_map);




			//买跌
			}elseif($v['ostyle']==1 && $nowtime >= $v['selltime']){



				if($order_cha < 0){  //盈利
					$yingli = $v['fee']*($v['endloss']/100);
					$d_map['is_win'] = 1;
					

					//平仓增加用户金额
                   	$u_add = $yingli + $fee;
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);

                   	//写入日志
                   	$this->set_order_log($v,$u_add);


				}elseif($order_cha > 0){	//亏损
				
				
				    $kuishun = $v['fee']*($v['endloss']/100);  //输赢亏损
				    //$u_add =  $fee-$kuishun;
				    $u_add =  0;                             //输掉本金
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);

				    $yingli = -1*$kuishun;   //输赢都亏损盈利部分
				
					//$yingli = -1*$v['fee'];
					$d_map['is_win'] = 2;
					$this->set_order_log($v,0);

				}else{		//无效
					$yingli = 0;
					$d_map['is_win'] = 3;

					//平仓增加用户金额
                   	$u_add = $fee;
                   	$db_userinfo->where('uid',$v['uid'])->setInc('usermoney',$u_add);
                   	//写入日志
                   	$this->set_order_log($v,$u_add);
				}

				//平仓处理订单
				$d_map['ostaus'] = 1;
				$d_map['sellprice'] = $sellprice;
				$d_map['ploss'] = $yingli;
				$d_map['oid'] = $v['oid'];
				$db_order->update($d_map);



			}



		}
		
	}



	/**
	 * 写入平仓日志
	 * @author lukui  2017-07-01
	 * @param  [type] $v        [description]
	 * @param  [type] $addprice [description]
	 */
	public function set_order_log($v,$addprice)
	{
		$o_log['uid'] = $v['uid'];
       	$o_log['oid'] = $v['oid'];
       	$o_log['addprice'] = $addprice;
       	$o_log['addpoint'] = 0;
       	$o_log['time'] = time();
       	$o_log['user_money'] = db('userinfo')->where('uid',$v['uid'])->value('usermoney');
       	db('order_log')->insert($o_log);

       	//资金日志
       	set_price_log($v['uid'], 1, $addprice, 'Kết thúc', 'Giải ngân lợi nhuận khi lệnh đáo hạn', $v['oid'], $o_log['user_money']);

	}


	/**
	 * 订单类型
	 * @param  [type] $orders [description]
	 * @return [type]         [description]
	 */
	public function order_type($orders,$pro,$risk,$data_info)
	{
		

		$_prcie = $pro['Price'];

		$pid = $pro['pid'];
		$thispro = array();		//买此产品的用户
		

		//此产品购买人数
		$price_num = 0;
		//买涨金额，计算过盈亏比例以后的
		$up_price = 0;
		//买跌金额，计算过盈亏比例以后的
		$down_price = 0;
		//买入最低价
		$min_buyprice = 0;
		//买入最高价
		$max_buyprice = 0;
		//下单最大金额
		$max_fee = 0;
		//指定客户亏损
		$to_win = explode('|',$risk['to_win']);
		$to_win = array_filter(array_merge($to_win,$this->user_win));
		$is_to_win = array();
		//指定客户亏损
		$to_loss = explode('|',$risk['to_loss']);
		$to_loss = array_filter(array_merge($to_loss,$this->user_loss));
		$is_to_loss = array();



		$i = 0;

		foreach ($orders as $k => $v) {

			if($v['pid'] == $pid ){
				//没炒过最小风控值直接退出price
				if ($v['fee'] < $risk['min_price']) {
					//return $pro['Price'];
				}
				$i++;


				
				//单控 赢利  
				if($v['kong_type'] == '1' || $v['kong_type'] == '3'){
					$dankong_ying = $v;
					break;
				}

				
				//单控 亏损  
				if($v['kong_type'] == '2'){

					$dankong_kui = $v;
					break;
				}
				//dump($v['kong_type']);
				//是否存在指定盈利
				if(in_array($v['uid'], $to_win)){
					$is_to_win = $v;
					break;
					
				}
				//是否存在指定亏损
				if(in_array($v['uid'], $to_loss)){
					$is_to_loss = $v;
					break;
					
				}

				//总下单人数
				$price_num++;
				//买涨买跌累加
				if($v['ostyle'] == 0){
					$up_price += $v['fee']*$v['endloss']/100;
				}else{
					$down_price += $v['fee']*$v['endloss']/100;
				}
				//统计最大买入价与最大下单价
				if($i == 1){
					$min_buyprice = $v['buyprice'];
					$max_buyprice = $v['buyprice'];
					$max_fee = $v['fee'];
				}else{
					if($min_buyprice > $v['buyprice']){
						$min_buyprice = $v['buyprice'];
						
					}
					if($max_buyprice < $v['buyprice']){
						$max_buyprice = $v['buyprice'];
					}
					if($max_fee < $v['fee']){
						$max_fee = $v['fee'];
					}
				}
			}

		}

		// if(isset($orders[0]) && isset($max_buyprice)){
		// 	if($orders[0]['buyprice'] > $max_buyprice){
		// 		$max_buyprice = $orders[0]['buyprice'];
		// 	}
		// }
		// if(isset($orders[0]) && isset($min_buyprice)){
		// 	if($orders[0]['buyprice'] < $min_buyprice){
		// 		$min_buyprice = $orders[0]['buyprice'];
		// 	}
		// }



		// if( $pid == 12){

		
		// dump('$pid:'.$pid);
		// dump('$price_num:'.$price_num);
		// dump('$up_price:'.$up_price);
		// dump('$down_price:'.$down_price);
		// dump('$min_buyprice:'.$min_buyprice);
		// dump('$max_buyprice:'.$max_buyprice);
		// dump('$max_fee:'.$max_fee);

		// }
		$proinfo = $data_info->where('pid',$pro['pid'])->find();
		//根据现在的价格算出风控点
		$FloatLength = getFloatLength((float)$pro['Price']);

		if($FloatLength == 0){
			$FloatLength = getFloatLength($proinfo['point_top']);
		}

		//是否存在指定盈利
		$is_do_price = 0; 	//是否已经操作了价格

		$jishu_rand = pow(10,$FloatLength);
		$beishu_rand = rand(1,10);

		$data_rands = $data_info->where('pid',$pro['pid'])->value('rands');
		
		$data_randsLength = getFloatLength($data_rands);
		if($data_randsLength > 0){
			$_j_rand = pow(10,$data_randsLength)*$data_rands;
			$_s_rand = rand(1,$_j_rand)/pow(10,$data_randsLength);

		}else{
			$_s_rand = 0;
			
		}
		

		$do_rand = $_s_rand;
		
		//if($pro['pid'] == 12) dump($do_rand);


		

		//先考虑单控
		if(!empty($dankong_ying) && $is_do_price == 0){ 		//单控 1赢利
			if($dankong_ying['ostyle'] == 0 ){
				$pro['Price'] = $v['buyprice'] + $do_rand;
			}elseif($dankong_ying['ostyle'] == 1 ){
				$pro['Price'] = $v['buyprice'] - $do_rand;
			}
			$is_do_price = 1;
			//echo 1;
		}

		if(!empty($dankong_kui) && $is_do_price == 0){ 		//单控 2亏损
			if($dankong_kui['ostyle'] == 0  ){
				$pro['Price'] = $v['buyprice'] - $do_rand;
			}elseif($dankong_kui['ostyle'] == 1 ){
				$pro['Price'] = $v['buyprice'] + $do_rand;
			}
			
			//echo 2;
			$is_do_price = 1;
		}

		//指定客户赢利
		if(!empty($is_to_win) && $is_do_price == 0){
			
			if($is_to_win['ostyle'] == 0 ){
				$pro['Price'] = $v['buyprice'] + $do_rand;
			}elseif($is_to_win['ostyle'] == 1 ){
				$pro['Price'] = $v['buyprice'] - $do_rand;
			}
			$is_do_price = 1;
			////echo 1;
			//echo 3;
			
		}
		//是否存在指定亏损
		if(!empty($is_to_loss) && $is_do_price == 0){

			
			if($is_to_loss['ostyle'] == 0 ){
				$pro['Price'] = $v['buyprice'] - $do_rand;
			}elseif($is_to_loss['ostyle'] == 1 ){
				$pro['Price'] = $v['buyprice'] + $do_rand;
			}
			$is_do_price = 1;
			//echo 4;
		}
		//没有任何下单记录
		if($up_price == 0 && $down_price == 0 && $is_do_price == 0){
			$is_do_price = 2;
			//return $pro['Price'];
		}
		
		//只有一个人下单，或者所有人下单买的方向相同
		if(( ($up_price == 0 && $down_price != 0) || ($up_price != 0 && $down_price == 0) )  && $is_do_price == 0 ){

			//风控参数
			$chance = $risk["chance"];
			$chance_1 = explode('|',$chance);
			$chance_1 = array_filter($chance_1);
			//循环风控参数
			if(count($chance_1) >= 1){
				foreach ($chance_1 as $key => $value) {
					//切割风控参数
					$arr_1 = explode(":",$value);
					$arr_2 = explode("-",$arr_1[0]);
					//比较最大买入价格
					if($max_fee >= $arr_2[0] && $max_fee < $arr_2[1]){
						//得出风控百分比
						if(!isset($arr_1[1])){
							$chance_num = 30;
						}else{
							$chance_num = $arr_1[1];
						}
						
						$_rand = rand(1,100);
						continue;
						
					}
					
				}
			}

			
			
			
			//买涨
			if(isset($_rand) && $up_price != 0){

				if($_rand > $chance_num){	//客损
					$pro['Price'] = $min_buyprice-$do_rand;

					// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
					// 	$pro['Price'] = $_prcie - ($proinfo['point_top'] + rand(100,999)/1000);
					// }
					
					$is_do_price = 1;
					//echo 5;
				}else{		//客赢
					$pro['Price'] = $max_buyprice+$do_rand;
					// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
					// 	$pro['Price'] = $_prcie + ($proinfo['point_top'] + rand(100,999)/1000);
					// }
					$is_do_price = 1;
					//echo 6;
				}
				
			}
			
			if(isset($_rand) && $down_price != 0){

				if($_rand > $chance_num){	//客损
					$pro['Price'] = $max_buyprice+$do_rand;
					// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
					// 	$pro['Price'] = $_prcie + ($proinfo['point_top'] + rand(100,999)/1000);
					// }
					$is_do_price = 1;
					//echo 7;
				}else{		//客赢
					$pro['Price'] = $min_buyprice-$do_rand;
					// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
					// 	$pro['Price'] = $_prcie - ($proinfo['point_top'] + rand(100,999)/1000);
					// }
					$is_do_price = 1;
					//echo 8;
				}
				
			}

			

		}


		//多个人下单，并且所有人下单买的方向不相同
		if($up_price != 0 && $down_price != 0  && $is_do_price == 0){
			
			//买涨大于买跌的
			if ($up_price > $down_price) {
				$pro['Price'] = $min_buyprice-$do_rand;
				// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
				// 	$pro['Price'] = $_prcie - ($proinfo['point_top'] + rand(100,999)/1000);
				// }
				$is_do_price = 1;
				//echo 9;
				
			}
			//买涨小于买跌的
			if ($up_price < $down_price) {
				$pro['Price'] = $max_buyprice+$do_rand;
				// if( abs($pro['Price'] - $_prcie) > $proinfo['point_top']){
				// 	$pro['Price'] = $_prcie + ($proinfo['point_top'] + rand(100,999)/1000);
				// }
				$is_do_price = 1;
				//echo 10;
			}
			if ($up_price == $down_price) {
				$is_do_price = 2;
			}
			
			
			
		}


		
		if($is_do_price == 2 || $is_do_price == 0){
			$pro['Price'] = $this->fengkong($pro['Price'],$proinfo);
		}
		//if( $pid == 12) dump($pro['Price']);
		
		db('productdata')->where('pid',$pro['pid'])->update($pro);

		//存储k线值
		$k_map['pid'] = $pro['pid'];
		$k_map['ktime'] = $this->minute;

		/* 此处多余--
		$issetkline = $this->klinedata->where($k_map)->find();
		
		if($issetkline){
			$nk_map['id'] = $issetkline['id'];
			if($issetkline['updata'] < $pro['Price']){
				$nk_map['updata'] = $pro['Price'];
				
			}
			if($issetkline['downdata'] > $pro['Price']){
				$nk_map['downdata'] = $pro['Price'];
				
			}
			$nk_map['closdata'] = $pro['Price'];
			$this->klinedata->update($nk_map);
		}else{
			$k_map['updata'] = $pro['Price'];
			$k_map['downdata'] = $pro['Price'];
			$k_map['opendata'] = $pro['Price'];
			$this->klinedata->insert($k_map);
		}

		

		
		if($pro['Price'] < $pro['Low']){
			$pro['Price'] = $pro['Low'];
		}
		if($pro['Price'] > $pro['High']){
			$pro['Price'] = $pro['High'];
		}
		*/
		return $pro['Price'];
		

	}
function my_sort($arrays,$sort_key,$sort_order=SORT_ASC,$sort_type=SORT_NUMERIC ){
		if(is_array($arrays)){
			foreach ($arrays as $array){
				if(is_array($array)){
					$key_arrays[] = $array[$sort_key];
				}else{
					return false;
				}
			}
		}else{
			return false;
		}
		array_multisort($key_arrays,$sort_order,$sort_type,$arrays);
		return $arrays;
	}


	/**
	 * 获取K线数据
	 * @author lukui  2017-07-01
	 * @return [type] [description]
	 */
	public function getkdata($pid=null,$num=null,$interval=null,$isres=null)
	{
		
		$pid = empty($pid)?input('param.pid'):$pid;
		$num = empty($num)?input('param.num'):$num;
		$num = empty($num)?30:$num;
		$pro = GetProData($pid);
		$all_data = array();

		if(!$pro){
			//echo 'data error!';
			exit;
		}
		$interval = empty($interval)?input('param.interval'):$interval;
		$interval = input('param.interval') ? input('param.interval') : 1;
		$nowtime = time().rand(100,999);
        
        if($interval=='d'){
            $klength = 1*60*24*$num;
        }else{
            $klength = $interval*60*$num;
        }
        

		$k_map['pid'] = $pid;
		$k_map['ktime'] = array('between',array( ($this->nowtime - $klength),$this->nowtime ) );
		/*
		$kline = $this->klinedata->where($k_map)->select();
		foreach ($kline as $k => $v) {
			$_kline[$v['ktime']] = $v;
		}*/

if(in_array($pro['procode'],array('btcusdt','solusdt','ethusdt','ethusdt','bchusdt','ltcusdt','xrpusdt','etcusdt','bnbusdt','htusdt','bsvusdt','batusdt'))){

			switch ($interval) {
				case '1':
					$datalen = '1min';
					break;
				case '5':
					$datalen = '5min';
					break;
				case '15':
					$datalen = '15min';
					break;
				case '30':
					$datalen = '30min';
					break;
				case '60':
					$datalen = '60min';
					break;
				case 'd':
					$datalen = '1day';
					break;
				
				default:
					//echo 'data error!';
					exit;
					break;
			}

            $url = "https://api.huobi.pro/market/history/kline?period=".$datalen."&size=".$num."&symbol=".$pro['procode'];
            $getdata = $this->curlfun($url,Array(),"POST"); 
			

 if (!$getdata) continue;
                $res = json_decode($getdata,1);
if (!isset($res['data'])) continue;
            $_data_arr = $res['data'];
            $_data_arr = $this->my_sort($_data_arr,'id');
			foreach ($_data_arr as $k => $_son_arr) {
				//dump($_son_arr);
				$res_arr[] = array($_son_arr['id'],$_son_arr['close'],$_son_arr['open'],$_son_arr['low'],$_son_arr['high']);
			}

            /*Db::name('productdata')->where('pid='.$pid)->update(array('UpdateTime'=>strtotime(date("Y-m-d H:i:s"))));
			Db::name('productdata')->where('pid='.$pid)->update(array('Close'=>$res_arr[0][1]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Open'=>$res_arr[0][2]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Low'=>$res_arr[0][3]));
			Db::name('productdata')->where('pid='.$pid)->update(array('High'=>$res_arr[0][4]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Price'=>$res_arr[0][1]));*/
			

		}else if($pro['procode'] == "btc" || $pro['procode'] == "ltc"){
			
			switch ($interval) {				
				case '1':					
					$datalen = "1min";					
					break;				
				case '5':					
					$datalen = "5min";					
					break;				
				case '15':					$datalen = "15min";					break;				
				case '30':					$datalen = "30min";					break;				
				case '60':					$datalen = "1hour";					break;				
				case 'd':					$datalen = "1day";					break;								
				default:										
					exit;					
					break;			
				}			
				//////////////////star
			if($pro['procode'] == "btc"){				
				$geturl = "http://api.bitkk.com/data/v1/kline?market=btc_usdt&type=".$datalen."&size=".$num;			
			}elseif($pro['procode'] == "ltc"){				
				$geturl = "http://api.bitkk.com/data/v1/kline?market=ltc_usdt&type=".$datalen."&size=".$num."&contract_type=this_week";			
			}						
			$html = file_get_contents($geturl);	
		
			$html = substr($html,25,-22);
			
			$_data_arr = explode('],[',$html);	
			//var_dump($_data_arr);
//exit;	
			foreach ($_data_arr as $k => $v) {								
				$_son_arr = explode(',', $v);				
				$res_arr[] = array($_son_arr[0]/1000,$_son_arr[1],$_son_arr[4],$_son_arr[3],$_son_arr[2]);			
			}
			////////////////end
db('productdata')->where('pid',$pro['pid'])->update($pro);
		
		}elseif(in_array($pro['procode'],array("EURGBP","GBPAUD","AUDUSD","USDCNY","USDJPY","USDCHF","USDCAD","GBPJPY","EURUSD","GBPUSD","GBPCAD"))){
			switch ($interval) {
				case '1':
					$datalen = 1440;
					break;
				case '5':
					$datalen = 1440;
					break;
				case '15':
					$datalen = 480;
					break;
				case '30':
					$datalen = 240;
					break;
				case '60':
					$datalen = 120;
					break;
				case 'd':
					
					break;
				
				default:
					//echo 'data error!';
					exit;
					break;
			}
	
				$year = date('Y_n_j',time());
	
				if($interval == 'd'){

					$geturl ="https://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_fx_s".strtolower($pro['procode']).$year."=/NewForexService.getDayKLine?symbol=fx_s".strtolower($pro['procode'])."&_=$year";
				}else{
					
					  $geturl = "https://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_fx_s".strtolower($pro['procode'])."_".$interval."_".$nowtime."=/NewForexService.getMinKline?symbol=fx_s".strtolower($pro['procode'])."&scale=$interval&datalen=$datalen";
				}
				$html = $this->curlfunS($geturl);
				
	
				if($interval == 'd'){
					$_arr = explode('("',$html);
					if(!isset($_arr[1])){
						return;
					}
					$_str = substr($_arr[1],1,-4);
					$_data_arr = explode(',|',$_str);
					
				}else{
					$_arr = explode('[',$html);
					if(!isset($_arr[1])){
						return;
					}
					$_str = substr($_arr[1],1,-3);
					$_data_arr = explode('},{',$_str);
					
				}
	
				$_count = count($_data_arr);
				$_data_arr = array_slice($_data_arr,$_count-$num,$_count);

	
				foreach ($_data_arr as $k => $v) {
					
					$_son_arr = explode(',', $v);
					if($interval == 'd'){
						$res_arr[] = array(
							substr($_son_arr[0],5),
							$_son_arr[1], //open
							$_son_arr[4], //close
							$_son_arr[2], //low
							$_son_arr[3], //high
							
						);
					}else{
	
						$res_arr[] = array(
							strtotime(substr($_son_arr[0],5,-1)),
							substr($_son_arr[1],5,-1),
							substr($_son_arr[4],5,-1), 
							substr($_son_arr[2],5,-1),
							substr($_son_arr[3],5,-1),
							
						);
						
						
					}
	
				}
            /*Db::name('productdata')->where('pid='.$pid)->update(array('UpdateTime'=>strtotime(date("Y-m-d H:i:s"))));
			Db::name('productdata')->where('pid='.$pid)->update(array('Open'=>$res_arr[0][1]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Close'=>$res_arr[0][2]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Low'=>$res_arr[0][3]));
			Db::name('productdata')->where('pid='.$pid)->update(array('High'=>$res_arr[0][4]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Price'=>$res_arr[0][2]));*/
			
		}else if(in_array($pro['procode'],array("GC","CL","SI"))){
	
				$year = date('Y_n_j',time());
	
				if($interval == 'd'){


					$geturl ="https://stock2.finance.sina.com.cn/futures/api/jsonp.php/var%20_".$pro['procode'].$year."=/GlobalFuturesService.getGlobalFuturesDailyKLine?symbol=".$pro['procode']."&_=".$year."&source=web";
				}else{
					
					$geturl ="https://gu.sina.cn/ft/api/jsonp.php/var%20_".$pro['procode']."_".$interval."_".getMillisecond()."=/GlobalService.getMink?symbol=".$pro['procode']."&type=$interval";
				}
				
	
	
				$html = $this->curlfunS($geturl);
				$html=ltrim($html,"/*<script>location.href='//sina.com';</script>*/");
	            //var_dump($html);exit;
				/*if($interval == 'd'){
    				$_arr = explode('("',$html);
    				if(!isset($_arr[1])){
    					return;
    				}
    				$_str = substr($_arr[1],1,-4);
    				$_data_arr = explode(',|',$_str);
    				
    			}else{*/
    				$_arr = explode('[',$html);
    				if(!isset($_arr[1])){
    					return;
    				}
    				$_str = substr($_arr[1],1,-3);
    				$_data_arr = explode('},{',$_str);
    				
    			//}
                //var_dump($_data_arr);exit;
			$_count = count($_data_arr);
			$_data_arr = array_slice($_data_arr,$_count-$num,$_count);
			
			
			
			
			
			

			foreach ($_data_arr as $k => $v) {
				
				$_son_arr = explode(',', $v);
				//var_dump($_son_arr);exit;
				if($interval == 'd'){
				    $arr_tmp=[];
    				foreach ($_son_arr as $kk=>$vv){
    				    $tmp=explode('":"', $vv);
    				    $arr_tmp[]=trim($tmp[1],'"');
    				}
    				$_ktime = $arr_tmp[0];//substr($arr_tmp[0],8,11);
        				
					$res_arr[] = array(
						$_ktime,
						$arr_tmp[1],
						$arr_tmp[4],
						$arr_tmp[3],
						$arr_tmp[2],
						
					);
				}else{
					
					    $arr_tmp=[];
        				foreach ($_son_arr as $kk=>$vv){
        				    $tmp=explode('":"', $vv);
        				    $arr_tmp[]=trim($tmp[1],'"');
        				}
        				//var_dump($arr_tmp);
					    
						
						$_ktime = $arr_tmp[0];
						

						$res_arr[] = array(
							strtotime($_ktime),
							//1:open,2:high,3:low,4:close
							$arr_tmp[1],
							$arr_tmp[4],
							$arr_tmp[3],
							$arr_tmp[2],
							
						);
						
					
					
				}

				
			}		    
            //var_dump($res_arr); exit;
            /*Db::name('productdata')->where('pid='.$pid)->update(array('UpdateTime'=>strtotime(date("Y-m-d H:i:s"))));
			Db::name('productdata')->where('pid='.$pid)->update(array('Open'=>$res_arr[0][1]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Close'=>$res_arr[0][4]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Low'=>$res_arr[0][3]));
			Db::name('productdata')->where('pid='.$pid)->update(array('High'=>$res_arr[0][2]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Price'=>$res_arr[0][4]));*/
			
		}elseif(in_array($pro['procode'],array('llg','lls'))){
			if($interval == 'd') $interval = 1440;
			$geturl = "https://hq.91pme.com/query/kline?callback=jQuery183014447531082730047_".$nowtime."&code=".$pro['procode']."&level=".$interval."&maxrecords=".$num."&_=".$nowtime;

			$html = $this->curlfun($geturl);
			$str_1 = explode('[{',$html);
			if(!isset($str_1[1])){
				return;
			}
			$str_2 = substr($str_1[1],0,-4);
			$str_3 = explode('},{',$str_2);
			
			krsort($str_3);

			foreach ($str_3 as $k => $v) {
				
				$_son_arr = explode(',', $v);

				$_time = substr($_son_arr[11],7,-3);
				if(in_array($interval,array(1,5)) && isset($_kline[$_time])){
					$_h = $_kline[$_time]['updata'];
					$_l = $_kline[$_time]['downdata'];
					$_o = $_kline[$_time]['opendata'];
					$_c = $_kline[$_time]['closdata'];
				}else{
					$_h = substr($_son_arr[4],6,-1);
					$_l = substr($_son_arr[3],7,-1);
					$_o = substr($_son_arr[10],7,-1);
					$_c = substr($_son_arr[0],8,-1);
				}
				
				$res_arr[] = array($_time,$_o,$_c,$_h,$_l);

				
			}

            /*Db::name('productdata')->where('pid='.$pid)->update(array('UpdateTime'=>strtotime(date("Y-m-d H:i:s"))));
			Db::name('productdata')->where('pid='.$pid)->update(array('Open'=>$res_arr[0][3]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Close'=>$res_arr[0][4]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Low'=>$res_arr[0][2]));
			Db::name('productdata')->where('pid='.$pid)->update(array('High'=>$res_arr[0][1]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Price'=>$res_arr[0][4]));*/			


		}else{

			switch ($interval) {
				case '1':
					$datalen = 1440;
					break;
				case '5':
					$datalen = 1440;
					break;
				case '15':
					$datalen = 480;
					break;
				case '30':
					$datalen = 240;
					break;
				case '60':
					$datalen = 120;
					break;
				case 'd':
					
					break;
				
				default:
					//echo 'data error!';
					exit;
					break;
			}
			
			$year = date('Y_n_j',time());
			if(in_array($pro['procode'],array(13,12,116))){
				if($interval == 1) $interval =1;
				if($interval == 5) $interval =2;
				if($interval == 15) $interval =3;
				if($interval == 30) $interval =4;
				if($interval == 60) $interval =5;
				if($interval == 'd') $interval =6;
				
				$geturl = 'https://m.sojex.net/api.do?rtp=CandleStick&type='.$interval.'&qid='.$pro['procode'];
				
				
				
			}else{
				if($interval == 'd'){

					$geturl = "http://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_".$pro['procode']."$year=/NewForexService.getDayKLine?symbol=".$pro['procode']."&_=$year";
				}else{
					$geturl = "http://vip.stock.finance.sina.com.cn/forex/api/jsonp.php/var%20_".$pro['procode']."_".$interval."_$nowtime=/NewForexService.getMinKline?symbol=".$pro['procode']."&scale=".$interval."&datalen=".$datalen;
				}
			}


			
			$html = $this->curlfun($geturl);
			

			if($interval == 'd'){
				$_arr = explode('("',$html);
				if(!isset($_arr[1])){
					return;
				}
				$_str = substr($_arr[1],1,-4);
				$_data_arr = explode(',|',$_str);
				
			}else{
				$_arr = explode('[',$html);
				if(!isset($_arr[1])){
					return;
				}
				$_str = substr($_arr[1],1,-3);
				$_data_arr = explode('},{',$_str);
				
			}

			$_count = count($_data_arr);
			$_data_arr = array_slice($_data_arr,$_count-$num,$_count);
			
			
			
			
			
			

			foreach ($_data_arr as $k => $v) {
				
				$_son_arr = explode(',', $v);
				
				if($interval == 'd'){
					$res_arr[] = array(
										substr($_son_arr[0],5),
										$_son_arr[1],
										$_son_arr[4],
										$_son_arr[2],
										$_son_arr[3],
										
									);
				}else{
					if(in_array($pro['procode'],array(13,12,116))){
						if($interval == 6){
							$_ktime = substr($_son_arr[1],5,-1).' 00:00:00';
						}else{
							$_ktime = '2017-'.substr($_son_arr[1],5,-1);
						}

						$_time = $_ktime;
						if(in_array($interval,array(1,5)) && isset($_kline[$_time])){
							$_h = $_kline[$_time]['updata'];
							$_l = $_kline[$_time]['downdata'];
							$_o = $_kline[$_time]['opendata'];
							$_c = $_kline[$_time]['closdata'];
						}else{
							$_h = substr($_son_arr[4],5,-1);
							$_l = substr($_son_arr[2],5,-1);
							$_o = substr($_son_arr[3],5,-1);
							$_c = substr($_son_arr[3],5,-1);
						}
						
						$res_arr[] = array(
										strtotime($_ktime),
										$_o,
										$_c,
										$_l,
										$_h,
										
									);
						
					}else{
						$_time = strtotime(substr($_son_arr[0],3,-1));
						if(in_array($interval,array(1,5)) && isset($_kline[$_time])){
							$_h = $_kline[$_time]['updata'];
							$_l = $_kline[$_time]['downdata'];
							$_o = $_kline[$_time]['opendata'];
							$_c = $_kline[$_time]['closdata'];
						}else{
							$_h = substr($_son_arr[3],3,-1);
							$_l = substr($_son_arr[2],3,-1);
							$_o = substr($_son_arr[1],3,-1);
							$_c = substr($_son_arr[4],3,-1);
						}
						$res_arr[] = array($_time,$_o,$_c,$_h,$_l);

					}
					
				}

				
			}

			
            /*Db::name('productdata')->where('pid='.$pid)->update(array('UpdateTime'=>strtotime(date("Y-m-d H:i:s"))));
			Db::name('productdata')->where('pid='.$pid)->update(array('Open'=>$res_arr[0][3]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Close'=>$res_arr[0][4]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Low'=>$res_arr[0][2]));
			Db::name('productdata')->where('pid='.$pid)->update(array('High'=>$res_arr[0][1]));
			Db::name('productdata')->where('pid='.$pid)->update(array('Price'=>$res_arr[0][4]));*/
			//dump($res_arr);

			//$res_arr[$num] = array(date('H:i:s',$pro['UpdateTime']),$pro['Price'],$pro['Open'],$pro['Close'],$pro['Low']);
			
			
			


		}
		

		
		if($pro['Price'] < $res_arr[$num-1][1]){
			$_state = 'down';
		}else{
			$_state = 'up';
		}
		//return GetProData($pid);
		
		$all_data['topdata'] = array(
										'topdata'=>$pro['UpdateTime'],
										'now'=>$pro['Price'],
										'open'=>$pro['Open'],
										'lowest'=>$pro['Low'],
										'highest'=>$pro['High'],
										'close'=>$pro['Close'],
										'state'=>$_state

									);

		
		$all_data['items'] = $res_arr;

		//$return_data['data']=$all_data;
		//$return_data['proscale']=
		
		if($isres){
			return (json_encode($all_data));
		}else{
			exit(json_encode(base64_encode(json_encode($all_data))));
		}
		

	}

 


	public function getprodata()
	{
		

		$pid = input('param.pid');

		$pro = GetProData($pid);

		if(!$pro){
			//echo 'data error!';
			exit;
		}

		$topdata = array(
						'topdata'=>$pro['UpdateTime'],
						'now'=>$pro['Price'],
						'open'=>$pro['Open'],
						'lowest'=>$pro['Low'],
						'highest'=>$pro['High'],
						'close'=>$pro['Close']

					);
        $return_data['data']=$topdata;
        if($pid==6){
            $now_time=date('H:i:s');
    		$rs_proscale=Db::name('proscale')->select();
    		$system_proscale=[];
    		$proscale=[];
    		foreach($rs_proscale as $k=>$v){
    		    if($v['start_time']=='00:00:00' && $v['end_time']=='00:00:00'){     //默认盈亏比例
    		        $system_proscale=$v;
    		    }else{
    		        if($v['start_time']<$v['end_time']){    //结束时间大于开始时间，没跨天
    		           if(($now_time>$v['start_time'] && $now_time<$v['end_time'])){
    		               $proscale = explode(',',$v['proscale']);
    		               break;
    		           }
    		        }else{  //结束时间小于开始时间，跨天
    		           if(($now_time>$v['start_time'] && $now_time>$v['end_time']) ||($now_time<$v['start_time'] && $now_time<$v['end_time'])){
    		               $proscale = explode(',',$v['proscale']);
    		               break;
    		           }
    		        }
    		    }
    		}
    
    		if(count($proscale)==0){
    		    $proscale = explode(',',$system_proscale['proscale']);
    		}
            $return_data['proscale']=$proscale;
        }
        $return_data['data']=base64_encode(json_encode($topdata));
		//exit(json_encode($topdata));
		exit(json_encode($return_data));

	}




	/**
	 * 分配订单
	 * @return [type] [description]
	 */
	public function allotorder()
	{
		//查找以平仓未分配的订单  isshow字段
		$map['isshow'] = 0;
		$map['ostaus'] = 1;
		$map['selltime'] = array('<',time()-300);
		$list = db('order')->where($map)->limit(0,10)->select();

		if(!$list){
			return false;
		}

		foreach ($list as $k => $v) {
			//分配金额
			$this->allotfee($v['uid'],$v['fee'],$v['is_win'],$v['oid'],$v['ploss']);
			//更改订单状态
			db('order')->where('oid',$v['oid'])->update(array('isshow'=>1));

		}
		//dump($list);
	}



	public function allotfee($uid,$fee,$is_win,$order_id,$ploss)
	{
		$userinfo = db('userinfo');
		$allot = db('allot');
		$nowtime = time();

		$user = $userinfo->field('uid,oid')->where('uid',$uid)->find();
		$myoids = myupoid($user['oid']);

		

		if(!$myoids){
			return;
		}
		
		//红利
		$_fee = 0;
		//佣金
		$_feerebate = 0;
		//手续费
		$web_poundage = getconf('web_poundage');
		//分配金额
		if($is_win == 1){
			$pay_fee = $ploss;
		}elseif($is_win == 2){
			$pay_fee = $fee;
		}else{
			//20170801 edit
			return;
		}
		
		
		foreach ($myoids as $k => $v) {

			if($user['oid'] == $v['uid']){	//直接推荐者拿自己设置的比例

				
				$_fee = round($pay_fee * ($v["rebate"]/100),2);
				$_feerebate = round($fee*$web_poundage/100 * ($v["feerebate"]/100),2);
				echo $_feerebate;

			}else{		//他上级比例=本级-下级比例
				
				$_my_rebate = ($v["rebate"] - $myoids[$k-1]["rebate"]);
				
				if($_my_rebate < 0) $_my_rebate = 0;
				$_fee = round($pay_fee * ( $_my_rebate /100),2);
				
				$_my_feerebate = ($v["feerebate"]  - $myoids[$k-1]["feerebate"] );
				if($_my_feerebate < 0) $_my_feerebate = 0;
				$_feerebate = round($fee*$web_poundage/100 * ( $_my_feerebate /100),2);

				
			}
			
			
			//红利
			if($is_win == 1){	//客户盈利代理亏损
				if($_fee != 0){
					$ids_fee = $userinfo->where('uid',$v['uid'])->setDec('usermoney', $_fee);
				}else{
					$ids_fee = null;
				}

				$type = 2;
				$_fee = $_fee*-1;
			}elseif($is_win == 2){	//客户亏损代理盈利
				if($_fee != 0){
					$ids_fee = $userinfo->where('uid',$v['uid'])->setInc('usermoney', $_fee);
				}else{
					$ids_fee = null;
				}
				
				$type = 1;
			}elseif($is_win == 3){	//无效订单不做操作
				$ids_fee = null;
			}

			if ($ids_fee) {
				// Số dư tài khoản
				$nowmoney = $userinfo->where('uid', $v['uid'])->value('usermoney');
				set_price_log($v['uid'], $type, $_fee, 'Đối chứng', 'Đối chứng đóng cửa khách hàng dưới', $order_id, $nowmoney);
			}
			
			// Phí giao dịch
			if ($_feerebate != 0) {
				$ids_feerebate = $userinfo->where('uid', $v['uid'])->setInc('usermoney', $_feerebate);
			} else {
				$ids_feerebate = null;
			}
			
			if ($ids_feerebate) {
				// Số dư tài khoản
				$nowmoney = $userinfo->where('uid', $v['uid'])->value('usermoney');
				set_price_log($v['uid'], 1, $_feerebate, 'Phí giao dịch khách hàng', 'Phí giao dịch khách hàng dưới đặt lệnh', $order_id, $nowmoney);
			}
			

		}
		
		/*

		foreach ($myoids as $k => $v) {
			//分红利
			if($_fee <= 0){
				continue;
			}

			if($v['rebate'] <= 0 || $v['rebate'] > 100){
				continue;
			}

			//分给我的钱
			$my_fee = round($_fee*(100-$v['rebate'])/100,2);

			if($my_fee <= 0.01){
				continue;
			}
			
			
			if($is_win == 1){	//客户盈利代理亏损
				$ids = $userinfo->where('uid',$v['uid'])->setDec('usermoney', $my_fee);
				$type = 2;
				$my_fee = $my_fee*-1;
			}elseif($is_win == 2){	//客户亏损代理盈利

				$ids = $userinfo->where('uid',$v['uid'])->setInc('usermoney', $my_fee);
				$type = 1;
			}elseif($is_win == 3){	//无效订单不做操作
				$ids = null;
			}
			//余额
			$nowmoney = $userinfo->where('uid',$v['uid'])->value('usermoney');

			if($ids){
				$_data['is_win'] = $is_win;
				$_data['time'] = $nowtime;
				$_data['uid'] = $v['uid'];
				$_data['order_id'] = $order_id;
				$_data['my_fee'] = $my_fee;
				$_data['nowmoney'] = $nowmoney;
				$_data['type'] = 1;
				$allot->insert($_data);

				set_price_log($v['uid'], $type, $my_fee, 'Đối chứng', 'Đối chứng đóng cửa khách hàng dưới', $order_id, $nowmoney);
			}
			
			$_fee = round($_fee*$v['rebate']/100,2);

			
		}

		//分佣金
		foreach ($myoids as $k => $v) {

			
			if($yj_fee <= 0){
				continue;
			}

			if($v['feerebate'] <= 0 || $v['feerebate'] > 100){
				continue;
			}

			//分给我的钱
			$my_fee = round($yj_fee*(100-$v['feerebate'])/100,2);

			if($my_fee <= 0.01){
				continue;
			}

			//余额
			$nowmoney = $userinfo->where('uid',$v['uid'])->value('usermoney');
			if($is_win == 1 || $is_win == 2){	//有效订单
				$ids = $userinfo->where('uid',$v['uid'])->setInc('usermoney', $my_fee);
				$type = 1;
			}else{
				$ids = null;
			}
			if($ids){
				$_data['is_win'] = $is_win;
				$_data['time'] = $nowtime;
				$_data['uid'] = $v['uid'];
				$_data['order_id'] = $order_id;
				$_data['my_fee'] = $my_fee;
				$_data['nowmoney'] = $nowmoney;
				$_data['type'] = 2;
				$allot->insert($_data);

				set_price_log($v['uid'], $type, $my_fee, 'Phí giao dịch khách hàng', 'Phí giao dịch khách hàng dưới đặt lệnh', $order_id, $nowmoney);

			}
			
			$yj_fee = round($yj_fee*$v['feerebate']/100,2);


		}
		*/

	}



	/**
	 * 获取K线。缓存起来
	 * @author lukui  2017-08-13
	 * @return [type] [description]
	 */
	public function cachekline()
	{
		
		$pro = db('productinfo')->field('pid')->where('isdelete',0)->select();
		$kline = cache('cache_kline');
		foreach ($pro as $k => $v) {
			
			$res[$v['pid']][1] = $this->getkdata($v['pid'],60,1,1);
			if(!$res[$v['pid']][1]) $res[$v['pid']][1] = $kline[$v['pid']][1] ;
			$res[$v['pid']][5] = $this->getkdata($v['pid'],60,5,1);
			if(!$res[$v['pid']][5]) $res[$v['pid']][5] = $kline[$v['pid']][5] ;
			$res[$v['pid']][15] = $this->getkdata($v['pid'],60,15,1);
			if(!$res[$v['pid']][15]) $res[$v['pid']][15] = $kline[$v['pid']][15] ;
			$res[$v['pid']][30] = $this->getkdata($v['pid'],60,30,1);
			if(!$res[$v['pid']][30]) $res[$v['pid']][30] = $kline[$v['pid']][30] ;
			$res[$v['pid']][60] = $this->getkdata($v['pid'],60,60,1);
			if(!$res[$v['pid']][60]) $res[$v['pid']][60] = $kline[$v['pid']][60] ;
			$res[$v['pid']]['d'] = $this->getkdata($v['pid'],60,'d',1);
			if(!$res[$v['pid']]['d']) $res[$v['pid']]['d'] = $kline[$v['pid']]['d'] ;
		}

		

		cache('cache_kline',$res);

	}

	function getkline(){

		$kline = cache('cache_kline');
		$pid = input('pid');
		$interval = input('interval');

		if(!$interval || !$pid){
			return false;
		}

		$info = json_decode($kline[$pid][$interval],1);

		return exit(json_encode($info));;
		
	}
	
	
	
	public function checkbal(){
		$lttime = $this->nowtime-10*60;
		$map['bptime'] = array('lt',$lttime);
		$map['pay_type'] = array('in',array('ysy_alwap','ysy_wxwap'));
		$map['bptype'] = 3;
		$db_balance = db('balance');
		$list = $db_balance->where($map)->select();
		
		if(!$list) return false;
		
		foreach($list as $key=>$val){
			
			$miyao="";
			$mchntid = '';
			$inscd = '';

				$data = array();
				$qxdata = array();
				$data['version'] = "2.2";
				$data['signType'] = 'SHA256';
				$data['charset'] = 'utf-8';
				$data['origOrderNum'] = $val['balance_sn'];
				$data['busicd'] = 'INQY';
				//$data['respcd'] = '00';
				$data['inscd'] = $inscd;
				$data['mchntid'] = $mchntid;
				$data['terminalid'] = $inscd;
				$data['txndir'] = 'Q';
				ksort($data);
				$str = '';
				foreach($data as $k=>$v){
					if($str!=''){
						$str .= '&';
					}
					$str .= $k.'='.$v;
				}
				$str.= $miyao;
				$sign=hash("sha256", $str);
				$data['sign'] = $sign;
				$data=json_encode($data);
				$pc = json_decode($this->post_curl('https://showmoney.cn/scanpay/unified',$data),true);
				
						
				if($pc['errorDetail']=='待买家支付'){ 
						
					$qxdata['busicd'] = 'CANC';
					$qxdata['charset'] = 'utf-8';
					$qxdata['inscd'] = $inscd;
					$qxdata['mchntid'] = $mchntid;
					$qxdata['orderNum'] = time().rand(1000,9999);
					$qxdata['origOrderNum'] = $val['balance_sn'];
					$qxdata['signType'] = 'SHA256';
					$qxdata['terminalid'] = $inscd;
					$qxdata['txndir'] = 'Q';
					$qxdata['version'] = '2.2';
					ksort($qxdata);
					$str = '';
					foreach($qxdata as $k=>$v){
						if($str!=''){
							$str .= '&';
						}
						$str .= $k.'='.$v;
					}
					$str.= $miyao;
					$qxdata['sign'] = hash("sha256", $str);
					$qpc = json_decode($this->post_curl('https://showmoney.cn/scanpay/unified',json_encode($qxdata)),true);
					
					
					
					
				}elseif($pc['errorDetail']=='成功'){
					
				}elseif($pc['errorDetail']=='订单不存在'){
					
				}
				
				$_map['bpid'] = $val['bpid'];
				$_map['bptype'] = 4;
				$db_balance->update($_map);
				
		}
		
		
	}
	
	public function post_curl($url,$data){
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
		curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$result = curl_exec($ch);
		if (curl_errno($ch)) {
			print curl_error($ch);
		}
		curl_close($ch);
		return $result;
	}
    
    public function lixibao(){
        $userinfo = db('userinfo');
        $users = $userinfo->where('lixibao',">" ,0)->select();

        $date_time_array = getdate(time());//1311177600  1316865566
        $now_mday = $date_time_array["mday"];
        $now_hours = $date_time_array["hours"];
        $now_minutes = $date_time_array["minutes"];
        $lixibao = db('lixibao');
        foreach ($users as $k => $v){
            $now_lixibao = $lixibao->where('uid',$v['uid'])->where('time','>=',strtotime(date("Y-m-d 00:00:00")))->find();
            var_dump($now_lixibao);
            if($now_lixibao){
              continue;
            }
            $price_log = db('price_log')->where(['type'=>1,'uid'=>$v['uid'],'content'=>'Chuyển tiền vào tài khoản lấy lãi'])->order(' time desc')->limit(1)->find();
            $second = $price_log['time'];
            $date_time_array = getdate($second);//1311177600  1316865566
            $hours = $date_time_array["hours"];
            $mday = $date_time_array["mday"];
            $minutes = $date_time_array["minutes"];
            if($now_mday != $mday && $hours<=$now_hours && $minutes <= $now_minutes){
                $new_money = $v['lixibao'] * ($v['lixibao_lv'] / 100);
                $data = [];
                $data['uid'] = $v['uid'];
                $data['time'] = time();
                $data['shouyi'] = $new_money;
                $lixibao->insert($data);
                $userinfo->where('uid',$v['uid'])->setInc('lixibao',$new_money);
                set_price_log($v['uid'],1,$new_money,'Tiền lãi thanh toán hàng ngày',0,$new_money+$v['lixibao']);
            }
        }
    }
    
    public function project()
    {
        $now = date('Y-m-d H:i:s');
        $investments = Db::name('investments')
            ->where('status', 1)
            ->where('next_interest_at', '<=', $now)
            ->limit(1000)
            ->select();

        $count = 0;
        foreach ($investments as $inv) {
            Db::startTrans();
            try {
                $inv = Db::name('investments')->where('id', $inv['id'])->lock(true)->find();
                if (!$inv || intval($inv['status']) !== 1) { Db::rollback(); continue; }

                $user = Db::name('userinfo')->where('uid', $inv['user_id'])->lock(true)->find();
                if (!$user) { throw new \Exception('User không tồn tại'); }

                $interest = round(floatval($inv['amount']) * floatval($inv['daily_rate_snapshot']) / 100, 2);

                Db::name('userinfo')->where('uid', $inv['user_id'])->setInc('usermoney', $interest);
                Db::name('interest_logs')->insert([
                    'investment_id'  => $inv['id'],
                    'user_id'        => $inv['user_id'],
                    'interest_amount'=> $interest,
                    'paid_for_date'  => date('Y-m-d'),
                    'created_at'     => date('Y-m-d H:i:s'),
                ]);

                $next = date('Y-m-d H:i:s', strtotime($inv['next_interest_at'].' +1 day'));
                $interest = (float)$interest;
                
                $upd = [
                    'total_interest_paid' => ['exp', 'total_interest_paid + '.$interest],
                    'next_interest_at'    => $next,
                    'updated_at'          => date('Y-m-d H:i:s'),
                ];
                
                $ok = Db::name('investments')->where('id', $inv['id'])->update($upd);

                if (time() >= strtotime($inv['end_at'])) {
                    Db::name('userinfo')->where('uid', $inv['user_id'])->setInc('usermoney', $inv['amount']);
                    $upd['status'] = 2;
                }

                Db::name('investments')->where('id', $inv['id'])->update($upd);

                Db::commit();
                $count++;
            } catch (\Throwable $e) {
                Db::rollback();
            }
        }
    }

    public function curlfunS($url) {
    	$ch = curl_init();
    
        curl_setopt($ch, CURLOPT_URL, $url);
        
        curl_setopt($ch, CURLOPT_POST, 1);
        
        //curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($query));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        //curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Referer: https://finance.sina.com.cn/nmetal/'));
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // https请求 不验证证书和hosts
        
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        
        curl_setopt($ch, CURLOPT_HEADER, false);
        
        //curl_setopt($ch, CURLOPT_USERAGENT, $agent);
        
        $response = curl_exec($ch);
        curl_close($ch);
        return $response;
    
    }
}


 ?>