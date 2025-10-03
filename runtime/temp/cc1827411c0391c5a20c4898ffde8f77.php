<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"/www/wwwroot/isetradingstar.com/application/index/view/user/cashlist2.html";i:1693732574;}*/ ?>
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
    <!--<title>微交易</title> -->
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

    <link href="/static/index/css/ionic.css" rel="stylesheet">
    <link href="/static/index/css/style.css" rel="stylesheet">
    <!-- <script src="/static/index/js/jquery-3.2.1.min.js"></script> -->
    <script src="/static/index/js/jquery-1.9.1.min.js"></script>
    <style type="text/css">
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }

        ng\:form {
            display: block;
        }

        .ng-animate-shim {
            visibility: hidden;
        }

        .ng-anchor {
            position: absolute;
        }
    </style>
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

        .ionic_toast_close:active {}
    </style>
    <style>
        .tabs a {
            color: gray;
            line-height: 20px;
        }

        .tabs a.active {
            color: rgb(73, 111, 254)
        }

        .tabs a.active path {
            fill: rgb(73, 111, 254)
        }

        html,
        body {
            overflow: auto !important;
            margin-bottom: 20px;
        }

        .tab-nav {
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        .header {
            background: rgb(73, 111, 254);
            color: white;
            text-align: right;
            padding: 10px;
            line-height: 30px;
            height: 50px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>


    <script src="/static/index/js/lk/order.js"></script>

    <!-- <script type="text/javascript" src="/static/index/js/lk/echarts-all-3.js"></script>
<script type="text/javascript" src="/static/index/js/lk/ecStat.min.js"></script>
<script type="text/javascript" src="/static/index/js/lk/dataTool.min.js"></script>
<script type="text/javascript" src="/static/index/js/lk/china.js"></script>
<script type="text/javascript" src="/static/index/js/lk/world.js"></script>
<script type="text/javascript" src="/static/index/js/lk/api"></script>
<script type="text/javascript" src="/static/index/js/lk/getscript"></script>
<script type="text/javascript" src="/static/index/js/lk/bmap.min.js"></script> -->
    <!-- 弹框插件 -->
    <script src="/static/layer/layer.js"></script>
    <!-- 公共函数 -->
    <script src="/static/public/js/function.js"></script>
    <script src="/static/public/js/base64.js"></script>
    <script type="text/javascript">
        var Base64 = new Base64();
    </script>
    <script>
        var charturl = '/index/user/getchart.html';
        $.get(charturl,function(_res){
            var res = jQuery.parseJSON(Base64.decode(_res));
            $.each(res,function(k,v){
                $('.'+k).html(v);
            })
        })
    </script>
    <script type="text/javascript">
        //iOS Web APP中点击链接跳转到Safari 浏览器新标签页的问题 devework.com
        //stanislav.it/how-to-prevent-ios-standalone-mode-web-apps-from-opening-links-in-safari
        if(("standalone" in window.navigator) && window.navigator.standalone){
            var noddy, remotes = false;
            document.addEventListener('click', function(event) {
                noddy = event.target;
                while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                }
                if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
                {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            },false);
        }


    </script>

</head>


<script>
    var pay_type = '';
    var wxpay_info = '';
    var returnrul = "/index/user/index.html";
</script>


<script>
    var pay_type = '';
    var wxpay_info = '';
    var returnrul = "/index/user/index.html";
</script>

<script type='text/javascript'>
    (function(m, ei, q, i, a, j, s) {
        m[i] = m[i] || function() {
            (m[i].a = m[i].a || []).push(arguments)
        };
        j = ei.createElement(q),
            s = ei.getElementsByTagName(q)[0];
        j.async = true;
        j.charset = 'UTF-8';
        j.src = '/static/index/js/meiqia.js?_=t';
        s.parentNode.insertBefore(j, s);
    })(window, document, 'script', '_MEIQIA');
    _MEIQIA('entId', '266991');

    // 传递顾客信息
    _MEIQIA('metadata', {
        name: 'test', // 美洽默认字段
        会员ID: '1717', // 自定义字段

        账户余额: '0.00', // 自定义字段
    });
    // 在这里开启无按钮模式（常规情况下，需要紧跟在美洽嵌入代码之后）
    _MEIQIA('withoutBtn');

</script>
<style type="text/css">
    .on[data-v-28ad7794] {
        color: #002856;
        font-size: 12px;
    }

    .in[data-v-28ad7794] {
        color: #90a2b0;
        font-size: 12px;
    }

    .box[data-v-28ad7794] {
        position: fixed;
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        left: 0;
        font-size: 0.22rem;
        bottom: 0;
        width: 100%;
        height: 50px;
        background: #fff;
        z-index: 100;
    }

    .box .li[data-v-28ad7794] {
        display: -webkit-box;
        display: -ms-flexbox;
        display: flex;
        width: 100%;
        height: 100%;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
    }

    .box .li img[data-v-28ad7794] {
        width: 20px;
        height: 20px;
    }

    .box .li span[data-v-28ad7794] {
        font: 12px;
        height: 20px;
        line-height: 20px;
    }
</style>
<style type="text/css">
    a {
        text-decoration: none;
    }
</style>

<div id="app">
    <div data-v-45ed8902="" class="mybox">
        <!--<div data-v-28ad7794="" data-v-fb4b8be8="" class="box">-->
        <!--    <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""-->
        <!--                                                     href="<?php echo Url('/index/index/index/token/'.$token); ?>" class="li"><img data-v-28ad7794="" src="/tu/ico/sy.png" alt="">-->
        <!--        <span data-v-28ad7794="" class="in"><?php echo lang('sy'); ?></span></a></div>-->
        <!--    <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""-->
        <!--                                                     href="<?php echo Url('/index/index/hangqing/token/'.$token); ?>" class="li"><img data-v-28ad7794="" src="/tu/ico/hq.png" alt="">-->
        <!--        <span data-v-28ad7794="" class="in"><?php echo lang('hq'); ?></span></a></div>-->
        <!--    <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794="" href="<?php echo Url('/index/order/lixibao/token/'.$token); ?>"-->
        <!--                                                     class="li"><img data-v-28ad7794="" src="/tu/ico/lc.png" alt="">-->
        <!--        <span data-v-28ad7794="" class="in"><?php echo lang('lc'); ?></span></a></div>-->
        <!--    <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794="" href="<?php echo url('/ddd/kf'); ?>"-->
        <!--                                                      class="li"><img data-v-28ad7794="" src="/tu/ico/kf.png" alt="">-->
        <!--        <span data-v-28ad7794="" class="in"><?php echo lang('kf'); ?></span></a></div>-->
        <!--    <div data-v-28ad7794="" style="flex: 1 1 0%;"><a data-v-28ad7794=""-->
        <!--                                                     href="<?php echo Url('/index/user/index/token/'.$token); ?>" class="li"><img data-v-28ad7794="" src="/tu/ico/my1.png" alt="">-->
        <!--        <span data-v-28ad7794="" class="on"><?php echo lang('wd'); ?></span></a></div>-->
        <!--</div>-->
        <div data-v-28ad7794="" data-v-0c912c96="" class="box" id="oukes">
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/index/index/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/quote.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('sy'); ?></span>
                </a>
            </div>
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/order/hold/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/invest.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('lc'); ?></span>
                </a>
            </div>

            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <!--<a data-v-28ad7794="" href="<?php echo url('/ddd/kf'); ?>" class="li">-->
                <a data-v-28ad7794="" data-href="<?php echo url('/index/index/kefu?id=9'); ?>" href="https://tawk.to/chat/64bcd89c94cf5d49dc65db2e/1h60qs912"    class="li">
                    <img data-v-28ad7794="" src="/tu/service.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('kf'); ?></span>
                </a>
            </div>
            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <a data-v-28ad7794="" href="<?php echo Url('/index/user/index/token/'.$token); ?>" class="li">
                    <img data-v-28ad7794="" src="/tu/my.svg" alt="">
                    <span data-v-28ad7794="" class="in"><?php echo lang('wd'); ?></span>
                </a>
            </div>
        </div>
        <style>
            .scroll-content {
                overflow: scroll
            }
            .user_btn h5 {
    color: #fff;
    padding: 0 0.2rem;
}
.user_btn {
    line-height: 0.5rem;
    font-size: 0.15rem;
    border-bottom: solid 1px #727272;
}
.headerbar {
    border: none !important;
    height: 60px;}
    .headerbar .header-item {
    height: 40px;
    line-height: 64px;
    }
        </style>

        <body ng-app="starter" ng-controller="AppCtrl"
              class="navbar grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">

        <ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe="">
            <ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active"
                      style="opacity: 1; transform: translate3d(0%, 0px, 0px);top:0px">
                <ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios"
                             nav-bar-direction="swap" nav-swipe="" style="background-color: #292929 !important;">

                    <div class="nav-bar-block" nav-bar="active">
                        <ion-header-bar onclick="javascript:history.back(-1)" class="bar-stable headerbar bar bar-header" align-title="center" style="background-color: #181818 !important;">
                            <div class="title title-center header-item"
                                 style="transition-duration: 0ms; transform: translate3d(0px, 0px, 0px);color:#fff !important;text-align: left;"><img style="width:28px;position: relative;top: 8px;margin-right: 7px;" src="/static/index/user/fhjt.png"><?php echo lang('chongzhijl'); ?></div>
                        </ion-header-bar>
                    </div>
                </ion-nav-bar>

                <ion-content
                        class="personalbg scroll-content ionic-scroll scroll-content-false  has-header has-tabs"
                        scroll="false" style="margin-top: 60px ;background: #000000;color:#fff;bottom:0">
                    <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <div class="user_btn">
                        <div style="display:flex;justify-content:space-between">
                            <h5><?php echo lang('cjje'); ?>：<?php echo $vo['bpprice']; ?></h5>
                            <h5><?php echo lang('srlx'); ?>：
                                <?php if($vo['bptype'] == 1 || $vo['bptype'] == 2): ?>
                                <?php echo lang('czrj'); elseif($vo['bptype'] == 0): ?>
                                <?php echo lang('tx'); endif; ?>
                            </h5>
                        </div>
                        <h5><?php echo lang('zt'); ?>：
                            <?php if($vo['bptype'] == 0 && $vo['isverified'] == 0): ?>
                            <?php echo lang('shz'); elseif($vo['bptype'] == 0 && $vo['isverified'] == 2): ?>
                            <?php echo lang('yjj'); else: ?>
                            <?php echo lang('ytg'); endif; ?>
                        </h5>
                        <h5><?php echo lang('sj'); ?>：<?php echo date("Y-m-d H:i:s",$vo['bptime']); ?></h5>
                    </div>
                    <?php endforeach; endif; else: echo "" ;endif; ?>


                </ion-content>

            </ion-tabs>
        </ion-nav-view>
        </body>

</html>
<div id="zypay_post"></div>
<script src="/static/index/js/lk/user.js"></script>
<script src="/static/index/js/lk/jquery.qrcode.js"></script>
<script src="/static/index/js/lk/utf.js"></script>
<script>

</script>