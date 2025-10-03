<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Cookie;

use wxpay\database\WxPayUnifiedOrder;
use wxpay\JsApiPay;
use wxpay\NativePay;
use wxpay\PayNotifyCallBack;
use think\Log;
use wxpay\WxPayApi;
use wxpay\WxPayConfig;

use alipay\wappay\buildermodel\AlipayTradeWapPayContentBuilder;
use alipay\wappay\service\AlipayTradeService;

use pinganpay\Webapp;




use pufapay\ConfigUtil;
use pufapay\HttpUtils;
use pufapay\SignUtil;
use pufapay\TDESUtil;



class Pay extends Controller
{

	/**
     * 微信支付
     * @return [type] [description]
     */
    public function wxpay($data)
    {

    }
    /**
     * 中云支付
     * @return [type] [description]
     */
    public function zypay($data)
    {

        
    }
	
	

	    /**
     * yOU
     * @return [type] [description]
     */
    public function yupay($data)
    {

    }
	
	
	function yupay_notify(){

	}
	
	
/**
     * 博扬支付
     * @return [type] [description]
     */
    public function bypay($data,$tongdao){

    }
	public function bypay_notify()
    {

    }
	
	public function yyb()
    {


    }
	//回调-青果畅付
	public function hkb()
    {

          

    }
	//签名-青果畅付
	function hkbSign($value,$key)
	{

	}
	function hkbgo($data,$pay_type)
	{

	}
	
    public function zypay_notify()
    {
        

    }
    public function qianbaotong($data,$pay_type)
    {
        
 
        
    }
    function get_nonce( $length = 18 ) { 

	} 
	public function fubei($data,$pay_type)
    {
 
    }
	function send($url, $data)
	{
		$ch      = curl_init();
		$timeout = 30;
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); // 跳过证书检查
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); // 从证书中检查SSL加密算法是否存在
		$html     = curl_exec($ch);
		$curlinfo = curl_getinfo($ch);
		curl_close($ch);
		return $html;
	}
	function fubeiweixinapi(){

	}
	function fubeicallback(){

		
	}
    public function qdb_notify()
    {

    }
    
    public function alipay($data){

    }
public function notify_ok_dopay1($order_no){}
    
    public function notify_ok_dopay($order_no,$order_amount){}
    public function test_not()
    {
    }
}
?>