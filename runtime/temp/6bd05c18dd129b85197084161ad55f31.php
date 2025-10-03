<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"/www/wwwroot/51.79.209.207/application/index/view/user/reglist.html";i:1690248718;s:59:"/www/wwwroot/51.79.209.207/application/index/view/head.html";i:1690248718;}*/ ?>
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
 <title><?php echo !empty($conf['web_name'])?$conf['web_name']:'微交易'; ?></title> 
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

<script>
var pay_type = '';
var wxpay_info = '';
var returnrul = "<?php echo url('user/index'); ?>";
</script>

<style>
.scroll-content{
    overflow: scroll
}
</style>

<body ng-app="starter" ng-controller="AppCtrl" class="navbar grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">

<ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe=""><ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active" style="opacity: 1; transform: translate3d(0%, 0px, 0px);"><div class="tab-nav tabs">


<a href="/"  class="iconfont icon--6 tabnone tab-item " style=""><span class="tab-title ng-binding" >商品行情</span></a>
<a href="<?php echo url('order/hold'); ?>" class="iconfont icon--7 tabnone tab-item" style=""><span class="tab-title ng-binding" >交易记录</span></a>
<a href="<?php echo url('user/index'); ?>"  class="iconfont icon--8 tabnone tab-item tab-item-active" style=""><span class="tab-title ng-binding" >个人账户</span></a>
<a href="<?php echo url('/index/index/center/token/'.$token); ?>"  class="iconfont icon--8 tabnone tab-item" style=""><span class="tab-title ng-binding" >活动中心</span></a>

</div>

    <ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="swap" nav-swipe="">

    	<div class="nav-bar-block" nav-bar="active">
    		<ion-header-bar class="bar-stable headerbar bar bar-header" align-title="center">
    			<div class="title title-center header-item" style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);">充值列表</div>
    		</ion-header-bar>
    	</div>
    </ion-nav-bar>

    <ion-content class="personalbg scroll-content ionic-scroll scroll-content-false  has-header has-tabs" scroll="false">
        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
         <div class="user_btn">
            <h5>充值金额：<?php echo $vo['bpprice']; ?></h5>
            <h5>状态：
                <?php if($vo['isverified'] == 0): ?>
                    审核中
                <?php else: ?>
                    已通过
                <?php endif; ?>
            </h5>
            <h5>时间：<?php echo date("Y-m-d H:i:s",$vo['bptime']); ?></h5>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>


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