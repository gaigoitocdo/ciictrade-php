<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:69:"/www/wwwroot/51.79.209.207/application/index/view/user/pay_step2.html";i:1755731168;s:59:"/www/wwwroot/51.79.209.207/application/index/view/head.html";i:1755731100;}*/ ?>
<html style="font-size: 120px;">
<head>
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width">
<!-- 是否启用全屏模式 -->
<meta name="apple-mobile-web-app-capable" content="yes">
<!-- 全屏时状态颜色设置 -->
<meta name="apple-mobile-web-status-bar-style" content="white">
<!-- 禁用电话号码自动识别 -->
<meta name="format-detection" content="telephone=no">
<!--禁止读取本地缓存模板-->
<meta http-equiv="Pragma" contect="no-cache">
<!-- iPhone 启动图标 -->
<link rel="apple-touch-icon" href="img/logo.png">
<!-- Android 启动图标 -->
<link rel="shortcut icon" href="img/logo.png">
<!-- 添加 favicon icon -->
<link rel="shortcut icon" type="image/ico" href="img/favicon.ico">
 <title><?php echo !empty($conf['web_name'])?$conf['web_name']:'WEB'; ?></title> 
 <script src="/skip.js"></script>
<script type="text/javascript">
window.onload=function(){
//设置适配rem
var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
window.onresize = function(){
change_rem = ((window.screen.width > 450) ? 450 : window.screen.width)/375*100;
document.getElementsByTagName("html")[0].style.fontSize=change_rem+"px";
}
}
</script>

<link href="__HOME__/css/ionic.css" rel="stylesheet">
<link href="__HOME__/css/style.css" rel="stylesheet">
<!-- <script src="__HOME__/js/jquery-3.2.1.min.js"></script> -->
<script src="__HOME__/js/jquery-1.9.1.min.js"></script>
<style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
<style>
.ionic_toast {
  z-index: 9999;
}

.toast_section {
  color: #FFF;
  cursor: default;
  font-size: 1em;
  display: none;
  border-radius: 5px;
  opacity: 1;
  padding: 10px 30px 10px 10px;
  margin: 10px;
  position: fixed;
  left: 0;
  right: 0;
  text-align: center;
  z-index: 9999;
  background-color: rgba(0, 0, 0, 0.75);
}

.ionic_toast_top {
  top: 10px;
}

.ionic_toast_middle {
  top: 40%;
}

.ionic_toast_bottom {
  bottom: 10px;
}

.ionic_toast_close {
  border-radius: 2px;
  color: #CCCCCC;
  cursor: pointer;
  display: none;
  position: absolute;
  right: 4px;
  top: 4px;
  width: 20px;
  height: 20px;
}

.toast_close_icon {
  position: relative;
  top: 1px;
}

.ionic_toast_sticky .ionic_toast_close {
  display: block;
}

.ionic_toast_close:active {

}</style>


<script src="__HOME__/js/lk/order.js"></script>

<!-- <script type="text/javascript" src="__HOME__/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/china.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/world.js"></script>
<script type="text/javascript" src="__HOME__/js/lk/api"></script>
<script type="text/javascript" src="__HOME__/js/lk/getscript"></script>
<script type="text/javascript" src="__HOME__/js/lk/bmap.min.js"></script> -->
<!-- 弹框插件 -->
<script src="/static/layer/layer.js"></script>
<!-- 公共函数 -->
<script src="/static/public/js/function.js"></script>
<script src="/static/public/js/base64.js"></script>
<script type="text/javascript">
  var Base64 = new Base64();

  
</script>
</head>
<title>Nạp tiền tài khoản</title>
<script>
var pay_type = '';
var wxpay_info = '';
var returnrul = "<?php echo url('user/index'); ?>";
</script>

<style>
.scroll-content{
    overflow: scroll
}
.frm_list{margin:30px;}
.frm_list li{clear:both;overflow:hidden; display:flex; padding:10px 0; font-size:16px;}
.frm_list li label{display:inline-block; width:200px; font-size:18px; font-weight:bold;}
.frm_list li img{max-width:75%; height:auto;}
</style>

<body ng-app="starter" ng-controller="AppCtrl" class="navbar grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">

<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);">

    <ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="swap" nav-swipe="">

    	<div class="nav-bar-block" nav-bar="active">
    	    
    		<ion-header-bar class="bar-stable headerbar bar bar-header" align-title="center">
    		    <a style="position:absolute; left:8px; top:50%; margin-top:-12px; z-index:100; width:24px;" href="javascript:history.back(-1)">
                            <i class="icon ion-ios-arrow-left" style="font-size:24px;"></i>
                        </a>
    			<div class="title title-center header-item" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">Nạp tiền tài khoản</div>
    		</ion-header-bar>
    	</div>
    </ion-nav-bar>

    <ion-content style="background:#fff;" class="personalbg scroll-content ionic-scroll scroll-content-false  has-header has-tabs" scroll="false">
        <div style="height:160px;"></div>
        <ol class="frm_list">
            <li><label>Số tiền thanh toán：</label><?php echo $rechargemoney; ?></li>
            <?php if($rs_payment['bankname'] != ''): ?><li><label>Tên ngân hàng：</label><?php echo $rs_payment['bankname']; ?></li><?php endif; if($rs_payment['bankuser'] != ''): ?><li><label>Tên chủ thẻ：</label><?php echo $rs_payment['bankuser']; ?></li><?php endif; if($rs_payment['card'] != ''): ?><li><label>Số thẻ ngân hàng：</label><?php echo $rs_payment['card']; ?></li><?php endif; if($rs_payment['qrcode'] != ''): ?><li><label>Mã QR：</label><img src="<?php echo $rs_payment['qrcode']; ?>"></li><?php endif; ?>
            
        </ol>
        <div style="text-align:center;">
            <button type="button" onclick="dochongzhi()" style="margin-top: 15%;color:#fff;width:75%" class="newbutton outmoneybtn">Xác nhận đã chuyển khoản</button>
        </div>
    </ion-content>

    </ion-tabs>
</ion-nav-view>

</body>
</html>
<div id="zypay_post"></div>
<script src="__HOME__/js/lk/user.js"></script>
<script src="__HOME__/js/lk/jquery.qrcode.js"></script>
<script src="__HOME__/js/lk/utf.js"></script>
<script>

</script>
<script>
    function dochongzhi() {
        var paytype = <?php echo $paytype; ?>;
        var userid = <?php echo $uid; ?>;
        var addprice = <?php echo $rechargemoney; ?>;
        var formurl = "<?php echo Url('user/addbalance'); ?>";
        var data = 'uid=' + userid + '&paytype=' + paytype + "&rechargemoney=" + addprice;
        var locurl = "<?php echo Url('user/index'); ?>";

        WPpost(formurl, data, locurl);
    };
</script>