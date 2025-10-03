<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:75:"/www/wwwroot/51.79.188.227/hosetrade/application/index/view/order/hold.html";i:1693732588;}*/ ?>
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
        window.onload = function () {
//设置适配rem
            var change_rem = ((window.screen.width > 450) ? 450 : window.screen.width) / 375 * 100;
            document.getElementsByTagName("html")[0].style.fontSize = change_rem + "px";
            window.onresize = function () {
                change_rem = ((window.screen.width > 450) ? 450 : window.screen.width) / 375 * 100;
                document.getElementsByTagName("html")[0].style.fontSize = change_rem + "px";
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
        *::-webkit-scrollbar {
  display: none;
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

        .ionic_toast_close:active {
        }
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
        
        /*顶部卡片*/
        .top {
            width: 100%;
        }
        .top .card {
            width: 90%;
            margin: 15px auto;
            border-radius: 10px;
            background: linear-gradient(to right bottom,#f6e190,#fdeda7,#edd075,#f8de83);
            padding: 15px;
        }
        .card .card-item .label {
            color: #545451;
            line-height: 24px;
            font-size: 14px;
        }
        .card .card-item .username {
            font-size: 20px;
            font-weight: 600;
        }
        .card .card-item .num {
            font-size: 26px;
            color: green;
        }
        .card .total-box {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .card .total-box .box-item {
            flex: 1;
        }
        .card .total-box .box-item .label {
            color: #545451;
            line-height: 24px;
            font-size: 14px;
        }
        .card .total-box .box-item .num {
            color: #000302;
            font-size: 14px;
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
        var charturl = '/index/order/getchart.html';
        $.get(charturl, function (_res) {
            var res = jQuery.parseJSON(Base64.decode(_res));
            $.each(res, function (k, v) {
                $('.' + k).html(v);
            })
        })
    </script>
    <script type="text/javascript">
        //iOS Web APP中点击链接跳转到Safari 浏览器新标签页的问题 devework.com
        //stanislav.it/how-to-prevent-ios-standalone-mode-web-apps-from-opening-links-in-safari
        if (("standalone" in window.navigator) && window.navigator.standalone) {
            var noddy, remotes = false;
            document.addEventListener('click', function (event) {
                noddy = event.target;
                while (noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
                    noddy = noddy.parentNode;
                }
                if ('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes)) {
                    event.preventDefault();
                    document.location.href = noddy.href;
                }
            }, false);
        }


    </script>

</head>


<script type='text/javascript'>
    (function (m, ei, q, i, a, j, s) {
        m[i] = m[i] || function () {
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
        color: #f8de83;
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
    .order-modal-content .list .item {
        background: #141414!important;
        border-bottom: none !important;
        
    }
    .order-modal-content .list .item .input-label,
    .order-modal-content .list .item .input-content {
        color: #f8de83;
    }
    
</style>
<style type="text/css">
    a {
        text-decoration: none;
    }
</style>

<div data-v-45ed8902="" class="mybox">
    
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
                    <span data-v-28ad7794="" class="on"><?php echo lang('lc'); ?></span>
                </a>
            </div>

            <div data-v-28ad7794="" style="flex: 1 1 0%; background-color: rgb(20,20,20)">
                <!--<a data-v-28ad7794="" href="<?php echo url('/ddd/kf'); ?>" class="li">-->
                <a data-v-28ad7794="" data-href="<?php echo url('/index/index/kefu?id=9'); ?>" href="https://tawk.to/chat/64bcd89c94cf5d49dc65db2e/1h60qs912" class="li">
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
    
    <!--<div data-v-28ad7794="" data-v-fb4b8be8="" class="box">-->
    <!--    <div data-v-28ad7794="" style="flex: 1 1 0%; background:#141414"><a data-v-28ad7794=""-->
    <!--                                                     href="<?php echo Url('/index/index/index/token/'.$token); ?>"-->
    <!--                                                     class="li"><img data-v-28ad7794="" src="/tu/ico/sy.png" alt="">-->
    <!--        <span data-v-28ad7794="" class="in"><?php echo lang('sy'); ?></span></a></div>-->
    <!--    <div data-v-28ad7794="" style="flex: 1 1 0%; background:#141414"><a data-v-28ad7794=""-->
    <!--                                                     href="<?php echo Url('/index/index/hangqing/token/'.$token); ?>"-->
    <!--                                                     class="li"><img data-v-28ad7794="" src="/tu/ico/hq.png" alt="">-->
    <!--        <span data-v-28ad7794="" class="in"><?php echo lang('hq'); ?></span></a></div>-->
    <!--    <div data-v-28ad7794="" style="flex: 1 1 0%; background:#141414"><a data-v-28ad7794="" href="<?php echo Url('/index/order/lixibao/token/'.$token); ?>"-->
    <!--                                                     class="li"><img data-v-28ad7794="" src="/tu/ico/lc.png" alt="">-->
    <!--        <span data-v-28ad7794="" class="in"><?php echo lang('lc'); ?></span></a></div>-->
    <!--    <div data-v-28ad7794="" style="flex: 1 1 0%; background:#141414"><a data-v-28ad7794="" href="javascript:void(0)"-->
    <!--                                                     onclick="_MEIQIA('showPanel')" class="li"><img-->
    <!--            data-v-28ad7794="" src="/tu/ico/kf.png" alt="">-->
    <!--        <span data-v-28ad7794="" class="in"><?php echo lang('kf'); ?></span></a></div>-->
    <!--    <div data-v-28ad7794="" style="flex: 1 1 0%; background:#141414"><a data-v-28ad7794=""-->
    <!--                                                     href="<?php echo Url('/index/user/index/token/'.$token); ?>"-->
    <!--                                                     class="li"><img data-v-28ad7794="" src="/tu/ico/my1.png"-->
    <!--                                                                     alt="">-->
    <!--        <span data-v-28ad7794="" class="on"><?php echo lang('wd'); ?></span></a></div>-->
    <!--</div>-->


    <body ng-app="starter" ng-controller="AppCtrl" style="background: #141414;"
          class="grade-a platform-browser platform-ios platform-ios9 platform-ios9_1 platform-ready">
        <!-- 头部卡片 -->
        <div class="top">
            <div class="card">
                <!--用户名-->
                <div class="card-item">
                    <p class="label"><?php echo lang('username'); ?></p>
                    <p class="username"><?php echo $nickname; ?></p>
                </div>
                <!--今日收益-->
                <div class="card-item" style="margin: 10px 0">
                    <p class="label"><?php echo lang('jrsy'); ?></p>
                    <p class="num"><?php echo $today_income; ?></p>
                </div>
                <!-- 收入 -->
                <div class="total-box">
                    <div class="box-item">
                        <p class="label"><?php echo lang('zzc'); ?></p>
                        <p class="num"><?php echo $out_price; ?></p>
                    </div>
                    <div class="box-item">
                        <p class="label"><?php echo lang('zhb'); ?></p>
                        <p class="num"><?php echo $income_price; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        
    <ion-nav-bar class="bar-stable headerbar nav-bar-container" nav-bar-transition="ios" nav-bar-direction="swap"
                 nav-swipe="" style="background: #141414;">

    </ion-nav-bar>

    <ion-nav-view class="view-container" nav-view-transition="ios" nav-view-direction="none" nav-swipe="">
        <ion-tabs class="tabs-icon-top navbar pane tabs-bottom tabs-standard" abstract="true" nav-view="active"
                  style="opacity: 1; transform: translate3d(0%, 0px, 0px); top: 0">


            <div class="tab-nav tabs" style="height:0">

            </div>
            <ion-nav-view name="tab-qoute" class="view-container tab-content" nav-view="cached"
                          nav-view-transition="ios" nav-view-direction="none" nav-swipe="">
            </ion-nav-view>
            <ion-nav-view name="tab-history" class="view-container tab-content" nav-view="active"
                          nav-view-transition="ios" nav-view-direction="swap" nav-swipe="">
                <ion-view view-title="" hide-nav-bar="false" class="pane" state="tab.history" nav-view="active"
                          style="opacity: 1; transform: translate3d(0%, 0px, 0px); top: 0; border: none">
                    <ion-nav-buttons side="right" class="hide"></ion-nav-buttons>
                    <ion-content
                            class="trade_history scroll-content ionic-scroll scroll-content-false  has-header has-tabs"
                            scroll="false" style="background: #141414;bottom:0">
                        <header style="background: #141414; border-top: 0">
                            <article class="left-table" onclick="change_category(0)" class="active" style="">
                                <p class="chicangmingxi" style="border:none">
                                    
                                </p>
                            </article>
                            <article class="right-table" onclick="change_category(1)">
                                <p class="lishimingxi">

                                </p>
                            </article>
                        </header>

                        <div class="trade_history_list slider" style="visibility: visible;overflow:scroll">
                            <div class="slider-slides" ng-transclude="">
                                <ion-slide class="slider-slide slider-left" data-index="0"
                                           style="width: 100%px; left: 0px; transition-duration: 0ms; transform: translate(0px, 0px) translateZ(0px);">
                                    <!--<div class="chicang-empty-tip">-->
                                    <!--    <img src=""/>-->
                                    <!--    <p>暂无数据</p>-->
                                    <!--</div>-->
                                    <ul>


                                    </ul>
                                </ion-slide>
                                <ion-slide class="slider-slide slider-right" data-index="1"
                                           style=" left: 0px; top: -100%;transition-duration: 0ms; transform: translate(414px, 0px) translateZ(0px);">
                                    <!--<div class="history-empty-tip">-->
                                    <!--    <img src=""/>-->
                                    <!--    <p>暂无数据</p>-->
                                    <!--</div>-->
                                    <ul class="uls">


                                    </ul>

                                </ion-slide>
                            </div>

                            <div class="modal-backdrop ng-hide">
                                <div class="modal-backdrop-bg"></div>
                                <div class="modal-wrapper" ng-transclude="">
                                    <ion-modal-view
                                            class="order-modal modal slide-in-up ng-enter active ng-enter-active">
                                        <ion-header-bar class="order-modal-header bar bar-header" style="background:#141414">
                                            <h1 class="title lishimingxi" style="left: 54px; right: 54px; color: #f8de83;"></h1>
                                            <!--<div class="close" ng-click="close_order_modal.hide()">-->
                                            <!--    <i class="icon ion-ios-close-empty"></i>-->
                                            <!--</div>-->
                                        </ion-header-bar>
                                        <ion-content
                                                class="order-modal-content scroll-content ionic-scroll  has-header" style="background: #141414">
                                            <div class="scroll"
                                                 style="transform: translate3d(0px, 0px, 0px) scale(1); background: #141414">
                                                <ul class="list" style="margin-top:40px; background: #141414;" >
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="商品"
                                                              id="_label-0"><?php echo lang('mc'); ?></span>
                                                        <span class="input-content ng-binding ptitle"></span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="成交价"
                                                              id="_label-2"><?php echo lang('cjj'); ?></span>
                                                        <span class="input-content ng-binding buyprice"></span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="结算价"
                                                              id="_label-3"><?php echo lang('jsj'); ?></span>
                                                        <span class="input-content ng-binding sellprice"></span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="手续费"
                                                              id="_label-4"><?php echo lang('sxf'); ?></span>
                                                        <span class="input-content ng-binding">0</span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="盈亏"
                                                              id="_label-5"><?php echo lang('yk'); ?></span>
                                                        <span class="input-content ng-binding rise ploss" style="">
                    0.00
                </span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="成交时间"
                                                              id="_label-6"><?php echo lang('cjsj'); ?></span>
                                                        <span class="input-content ng-binding buytime"></span>
                                                    </li>
                                                    <li class="item item-input">
                                                        <span class="input-label" aria-label="结算时间"
                                                              id="_label-7"><?php echo lang('jssj'); ?></span>
                                                        <span class="input-content ng-binding selltime"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="scroll-bar scroll-bar-v">
                                                <div class="scroll-bar-indicator scroll-bar-fade-out"
                                                     style="transform: translate3d(0px, 0px, 0px) scaleY(1); height: 0px; transform-origin: center bottom 0px;">
                                                </div>
                                            </div>
                                        </ion-content>
                                        <div class="" style="margin-top:400;">
                                            <a class="button button-dark" onclick="close_order_modal()"><?php echo lang('gb'); ?></a>
                                        </div>

                                        <script>
                                            var charturl = '/index/order/getchart.html';
                                            $.get(charturl, function (_res) {
                                                var res = jQuery.parseJSON(Base64.decode(_res));
                                                $.each(res, function (k, v) {
                                                    $('.' + k).html(v);
                                                })
                                            })
                                        </script>
                                    </ion-modal-view>
                                </div>
                            </div>

                        </div>
                    </ion-content>
                </ion-view>
            </ion-nav-view>
        </ion-tabs>
    </ion-nav-view>
    <script src="/static/index/js/lk/hold.js"></script>
    <script type="text/javascript">
        change_category(0)
    </script>


    <div class="backdrop"></div>
    <div class="ionic_toast">
        <div class="toast_section" ng-class="ionicToast.toastClass" ng-style="ionicToast.toastStyle"
             ng-click="hideToast()" style="display: none; opacity: 0;">
            <span class="ionic_toast_close"><i class="ion-android-close toast_close_icon"></i></span><span
                ng-bind-html="ionicToast.toastMessage" class="ng-binding"></span>
        </div>
    </div>


    </body>

</html>