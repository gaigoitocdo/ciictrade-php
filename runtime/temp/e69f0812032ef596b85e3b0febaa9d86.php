<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"/www/wwwroot/51.79.209.207/application/lord/view/user/useradd.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/head.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/menu.html";i:1755730339;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/foot.html";i:1747598054;}*/ ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="/favicon.ico">

    <title>TRANG QUẢN TRỊ</title>

    <!-- Bootstrap core CSS -->
    <link href="/static/admin/css/bootstrap.min.css" rel="stylesheet">
    <link href="/static/admin/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="/static/admin/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="/static/admin/css/owl.carousel.css" type="text/css">
    <!-- Custom styles for this template -->
    <link href="/static/admin/css/style.css" rel="stylesheet">
    <link href="/static/admin/css/style-responsive.css" rel="stylesheet" />
    <link href="/static/admin/css/addstyle.css" rel="stylesheet">
    
    <script src="/static/admin/js/jquery.js"></script>
    <script src="/static/admin/js/jquery-1.8.3.min.js"></script>
    <script src="/static/layer/layer.js"></script>

    <!-- DatePicker -->
    <link rel="stylesheet" type="text/css" href="/static/admin/css/jquery.datetimepicker.css"/>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="/static/admin/js/html5shiv.js"></script>
      <script src="/static/admin/js/respond.min.js"></script>
    <![endif]-->
    


  </head>

  <body>

  <section id="container" class="">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Hiển thị/Ẩn" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="#" class="logo">Quản trị<span> Hệ thống</span></a>
        <!--logo end-->

        <div class="top-nav ">
            <!--search & user info start-->
            <ul class="nav pull-right top-menu">
                <?php if(isset($_SESSION['username'])): ?>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">

                        <span class="username"><?php echo !empty($_SESSION['username'])?$_SESSION['username']:''; ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <li><a href="<?php echo Url('login/logout'); ?>"><i class="icon-signout"></i> Đăng xuất</a></li>
                    </ul>
                </li>
                <?php endif; ?>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
    </header>
</section>

<!--header end-->


<!-- Bắt đầu thêm khung soạn thảo -->
<link href="/static/public/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/static/public/umeditor/third-party/jquery.min.js"></script>
<script type="text/javascript" src="/static/public/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/static/public/umeditor/lang/zh-cn/zh-cn.js"></script>

<!-- Kết thúc thêm khung soạn thảo -->

[[[<!--sidebar start-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse ">
        <!--Menu sidebar start-->
        <ul class="sidebar-menu">
            <li <?php if($actionname == 'index' && $contrname == 'Index'): ?> class="active" <?php endif; ?>>
                <a class="" href="<?php echo Url('lord/index/index'); ?>">
                    <i class="icon-dashboard"></i>
                    <span>Trang chủ quản trị</span>
                </a>
            </li>
            <!--
            <li <?php if($contrname == 'Index' && (in_array($actionname,array('contentclass','contentlist','contentadd')))): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Quản lý nội dung</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if($actionname == 'contentclass'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/index/contentclass'); ?>">Quản lý danh mục</a></li>
                    <li <?php if($actionname == 'contentlist' || $actionname == 'contentadd'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/index/contentlist'); ?>">Quản lý bài viết</a></li>

                </ul>
            </li>
            -->

            <?php if($otype == 3): ?>
            <li <?php if($contrname == 'Goods'): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-btc"></i>
                    <span>Quản lý sản phẩm</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if($actionname == 'proscale'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/system/proscale'); ?>">Tỷ lệ lời lỗ hệ thống</a></li>
                    <li <?php if($actionname == 'prolist' || $actionname == 'proadd'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/goods/prolist'); ?>">Danh sách sản phẩm</a></li>
                    <li <?php if($actionname == 'proclass'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/goods/proclass'); ?>">Danh mục sản phẩm</a></li>
                    <li <?php if($actionname == 'risk'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/goods/risk'); ?>">Quản lý rủi ro</a></li>
                    <li <?php if($actionname == 'huishou'): ?> class="active" <?php endif; ?>><a href="<?php echo Url('lord/goods/huishou'); ?>">Thùng rác sản phẩm</a></li>


                </ul>
            </li>
            <?php endif; ?>
            <li <?php if($contrname == 'Order'): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-paste"></i>
                    <span>Quản lý Lệnh</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if($actionname == 'orderlist'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/order/orderlist'); ?>">Ghi chép giao dịch</a></li>
                    <li <?php if($actionname == 'orderlog'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/order/orderlog'); ?>">Nhật ký bán</a></li>


                </ul>
            </li>

            <li <?php if($contrname == 'User' && (in_array($actionname,array('userlist','useradd','userprice','userinfo','cash','myteam','chongzhi')))): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-user"></i>
                    <span>Quản lý người dùng</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if(in_array($actionname,array('userlist','useradd'))): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/userlist'); ?>">Danh sách khách hàng</a></li>

                    <li <?php if(in_array($actionname,array('myteam'))): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/myteam'); ?>">Nhóm của tôi</a></li>
                    <li <?php if($actionname == 'userprice'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/userprice'); ?>">Danh sách nạp tiền</a></li>
                    <?php if($otype == 3): ?>


                   <!-- <li <?php if($actionname == 'RechargeRecord'): ?> class="active" <?php endif; ?>>
                   <a class="" href="<?php echo Url('lord/user/rechargeRecord'); ?>">Ghi chép nạp tiền</a></li> -->
                    <?php endif; ?>
                    <li <?php if($actionname == 'cash'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/cash'); ?>">Danh sách rút tiền</a></li>
                    <?php if($otype == 3): ?>
                    <li <?php if($actionname == 'chongzhi'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/chongzhi'); ?>">Nạp tiền thành viên</a></li>
                    <?php endif; ?>
                    <!-- <li <?php if($actionname == 'userinfo'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/userinfo'); ?>">Xét duyệt thông tin</a></li> -->


                </ul>
            </li>
<!-- 
            <li <?php if($contrname == 'User' && (in_array($actionname,array('vipuseradd','vipuserlist','usercode')))): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a class="" href="javascript:;">
                    <i class="icon-user-md"></i>
                    <span>Quản lý đại lý </span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if($actionname == 'vipuseradd'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/vipuseradd'); ?>">Thêm đại lý</a></li>

                    <li <?php if(in_array($actionname,array('vipuserlist','usercode'))): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/user/vipuserlist'); ?>">Danh sách đại lý</a></li>


                </ul>
            </li>
             -->
             
            <li <?php if($contrname == 'Project'): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-book"></i>
                    <span>Quản lý đầu tư</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">


                    <li <?php if($actionname == 'projectlist'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/project/projectlist'); ?>">Danh sách dự án</a></li>

                    <li <?php if($actionname == 'investmentlist'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/project/investmentlist'); ?>">Danh sách đầu tư</a></li>
                    
                    <li <?php if($actionname == 'logs'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/project/logs'); ?>">Lịch sử trả lãi</a></li>

                </ul>
            </li>
            
            <li <?php if($contrname == 'Price'): ?> class="active" <?php else: ?> class="sub-menu " <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-yen"></i>
                    <span>Quản lý báo cáo</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">


                    <li <?php if($actionname == 'allot'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/price/allot'); ?>">Báo cáo thưởng</a></li>

                    <li <?php if($actionname == 'yongjin'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/price/yongjin'); ?>">Báo cáo hoa hồng</a></li>

                    <li <?php if($actionname == 'pricelist'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/price/pricelist'); ?>">Báo cáo tiền</a></li>

                    <li <?php if($actionname == 'myprice'): ?> class="active" <?php endif; ?>>
                    <a class="" href="<?php echo Url('lord/price/myprice'); ?>">Báo cáo cá nhân</a></li>

                </ul>
            </li>

            <?php if($otype == 3): ?>
            <li <?php if($contrname == 'Setup'): ?> class="active" <?php else: ?> class="sub-menu" <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-paste"></i>
                    <span>Cài đặt thông số</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">

                    <li <?php if($contrname == 'Setup' && $actionname == 'index'): ?> class="active" <?php endif; ?> >
                    <a class="" href="<?php echo Url('lord/Setup/index'); ?>">Cài đặt cơ bản</a>
                    </li>

                    <li <?php if($contrname == 'Setup' && $actionname == 'proportion'): ?> class="active" <?php endif; ?> >
                    <a class="" href="<?php echo Url('lord/Setup/proportion'); ?>">Cài đặt thông số</a>
                    </li>
                    <li  <?php if($contrname == 'Setup' && $actionname == 'addsetup'): ?> class="active" <?php endif; ?> >
                    <a class="" href="<?php echo Url('lord/Setup/addsetup'); ?>">Thêm cấu hình</a>
                    </li>
                    <!--<li  <?php if($contrname == 'Setup' && $actionname == 'deploy'): ?> class="active" <?php endif; ?> >
                    <a class="" href="<?php echo Url('lord/Setup/deploy'); ?>">Quản lý cấu hình</a>
                    </li>-->
                </ul>
            </li>


            <li <?php if($contrname == 'System'): ?> class="active" <?php else: ?> class="sub-menu" <?php endif; ?>>
                <a href="javascript:;" class="">
                    <i class="icon-cogs"></i>
                    <span>Cài đặt hệ thống</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub">
                    <li <?php if($actionname == 'adminadd'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/adminadd'); ?>">Thêm quản trị viên</a></li>
                    <li <?php if($actionname == 'adminlist'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/adminlist'); ?>">Danh sách quản trị viên</a></li>
                    <!--<li <?php if($actionname == 'banks'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/banks'); ?>">Thẻ ngân hàng rút tiền</a></li>-->
                    <li <?php if($actionname == 'recharge' || $actionname ==  'addrech'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/recharge'); ?>">Cấu hình nạp tiền</a></li>
                    <!--<li <?php if($actionname == 'setwx'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/setwx'); ?>">Cài đặt WeChat</a></li>
                    <li <?php if($actionname == 'dbbase'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/dbbase'); ?>">Sao lưu dữ liệu</a></li>
                    <li <?php if($actionname == 'dbbase'): ?> class="active" <?php endif; ?>><a class="" href="<?php echo Url('lord/system/online'); ?>">Tư vấn trực tuyến</a></li>-->

                </ul>
            </li>
            <?php endif; ?>
            
            <li <?php if($contrname == 'Chat'): ?> class="active" <?php else: ?> class="sub-menu" <?php endif; ?> style="position:relative">
                <a class="" href="<?php echo Url('lord/chat/index'); ?>">
                    <i class="icon-comment"></i>
                    <span>Chat cskh</span>
                    <div id="count-msg" data-num="0">0</div>
                    <style>#count-msg{position:absolute;background:red;color:#fff;border-radius:100%;width:15px;height:15px;display:flex;align-items:center;justify-content:center;font-size:11px;right:15px;top:15px}#count-msg[data-num="0"]{display:none}</style>
                </a>
            </li>

            <li>
                <a class="" href="<?php echo Url('lord/login/logout'); ?>">
                    <i class="icon-signout"></i>
                    <span>Đăng xuất</span>
                </a>
            </li>
        </ul>
        <!--Menu sidebar end-->
    </div>
</aside>
<!--sidebar end-->





<!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              
            
          <div class="row">
                  <div class="col-sm-12">
                      <aside class="profile-info col-lg-9">
                      <section class="panel">
                          
                          <div class="panel-body bio-graph-info">
                              <h1> Thêm người dùng</h1>
                              <form class="form-horizontal" role="form" method="post" id="formid">

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên đăng nhập</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($username)?$username:'系统生成'; ?>" disabled="true" >
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số điện thoại</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($utel)?$utel:''; ?>" name="utel"/>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Họ và tên</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($nickname)?$nickname:''; ?>" name="nickname">
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Điểm uy tín</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($userpoint)?$userpoint:'0'; ?>" name="userpoint">
                                        
                                      </div>
                                  </div>
								<?php if(isset($isedit) && $isedit == 1): ?>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Trạng thái</label>
                                      <div class="col-lg-6">
                                          <select name="ustatus" class="selectpicker show-tick form-control">
                                          	  <option <?php if(isset($ustatus) && $ustatus == 0): ?> selected="selected" <?php endif; ?> value="0">Bình thường</option>
                                          	  <option <?php if(isset($ustatus) && $ustatus == 1): ?> selected="selected" <?php endif; ?> value="1">Đã đóng băng</option>
                                          </select>
                                      </div>
                                  </div>
								 <?php endif; ?>


                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Cấp bậc thành viên</label>
                                      <div class="col-lg-6">
                                          <select name="level" class="selectpicker show-tick form-control">
                                              <option <?php if(isset($level) && $level == 1): ?> selected="selected" <?php endif; ?> value="1">Thành viên thông thường</option>
                                              <option <?php if(isset($level) && $level == 2): ?> selected="selected" <?php endif; ?> value="2">Thành viên bạc</option>
                                              <option <?php if(isset($level) && $level == 3): ?> selected="selected" <?php endif; ?> value="3">Thành viên vàng</option>
                                              <option <?php if(isset($level) && $level == 4): ?> selected="selected" <?php endif; ?> value="4">Thành viên bạch kim</option>
                                              <option <?php if(isset($level) && $level == 5): ?> selected="selected" <?php endif; ?> value="5">Thành viên vàng kim</option>
                                              <option <?php if(isset($level) && $level == 6): ?> selected="selected" <?php endif; ?> value="6">Thành viên kim cương</option>
                                              <option <?php if(isset($level) && $level == 7): ?> selected="selected" <?php endif; ?> value="7">Thành viên kim cương đen</option>
                                          </select>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Lãi suất ngân hàng</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($lixibao_lv)?$lixibao_lv:''; ?>" name="lixibao_lv">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Mã mời</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($oid)?$oid:''; ?>" name="oid">
                                      </div>
                                  </div>
									<?php if(isset($isedit) && $isedit == 1): ?>


                                  

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số dư tài khoản</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($usermoney)?$usermoney:'0'; ?>" name="usermoney">
                                          <input type="hidden" class="form-control"  value="<?php echo !empty($usermoney)?$usermoney:'0'; ?>" name="ordusermoney">
                                      </div>
                                  </div>
									
								<div class="form-group" style="display:none;">
                                      <label class="col-lg-2 control-label">Mật khẩu cũ</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="..." name="ordpwd">
                                      </div>
                                  </div>

                                  <div class="form-group" style="display:none;">
                                      <label class="col-lg-2 control-label">Mật khẩu mới</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="..." name="upwd2">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Đổi mật khẩu đăng nhập</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="" name="upwd">
                                      </div>
                                  </div>
                                   <div class="form-group">
                                      <label class="col-lg-2 control-label">Đổi mật khẩu rút tiền</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo $paypwd; ?>" name="paypwd">
                                      </div>
                                  </div>
                                  <input type="hidden" class="form-control"  value="<?php echo $uid; ?>" name="uid">
								<?php else: ?>
								<div class="form-group">
                                      <label class="col-lg-2 control-label">Mật khẩu</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="" name="upwd">
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Xác nhận mật khẩu</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="" name="upwd2">
                                      </div>
                                  </div>
                                  <input type="hidden" class="form-control"  value="" name="ordpwd">
								<?php endif; ?>
									
									
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Quốc gia</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($gj)?$gj:''; ?>" name="gj">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Ngân hàng rút tiền</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($bank)?$bank:''; ?>" name="bank">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tỉnh</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($sf)?$sf:''; ?>" name="sf">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Thành phố</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($city)?$city:''; ?>" name="city">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên chủ tài khoản</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($rname)?$rname:''; ?>" name="rname">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số điện thoại dự trữ</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($mobile)?$mobile:''; ?>" name="mobile">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số thẻ rút tiền</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($account)?$account:''; ?>" name="account">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số CMND</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($card)?$card:''; ?>" name="card">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Địa chỉ ví tiền</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($usdt)?$usdt:''; ?>" name="usdt">
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Địa chỉ ví tiền điện tử</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control"  value="<?php echo !empty($usdtaddress)?$usdtaddress:''; ?>" name="usdtaddress">
                                      </div>
                                  </div>

                                  

                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <input type="submit" value="Gửi"  onclick="return editcon(this.form)" class="btn btn-success">
                                          
                                      </div>
                                  </div>

                              </form>
                          </div>
                      </section>
                      
                  </aside>
                  </div>

          </div>       
          
          
             

          </section>
      </section>
      <!--main content end-->
  </section>



    <!-- js placed at the end of the document so the pages load faster -->
    
    <script src="/static/admin/js/bootstrap.min.js"></script>
    <script src="/static/admin/js/jquery.scrollTo.min.js"></script>
    <script src="/static/admin/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="/static/admin/js/jquery.sparkline.js" type="text/javascript"></script>
    <script src="/static/admin/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
    <script src="/static/admin/js/owl.carousel.js" ></script>
    <script src="/static/admin/js/jquery.customSelect.min.js" ></script>

    <!--common script for all pages-->
    <script src="/static/admin/js/common-scripts.js"></script>

    <!--script for this page-->
    <script src="/static/admin/js/sparkline-chart.js"></script>
    <script src="/static/admin/js/easy-pie-chart.js"></script>

    <!-- active -->
    <script src="/static/public/js/function.js"></script>
    
    <!-- date -->
    <script type="text/javascript" src="/static/admin/js/date/jquery.datetimepicker.js" charset="UTF-8"></script>
    <audio id="messageSound" src="/public/static/ding.mp3"></audio>
<script>
    var newmsg = 0;
    function playMessageSound() {
        const sound = document.getElementById('messageSound');
        sound.play().catch(e => console.log('Audio play failed:', e));
    }
    function updateUnreadCounts() {
        $.get("<?php echo url('lord/Chat/getUnreadCounts'); ?>", function(res) {
            if (res.status == 1 && res.data.length > 0) {
                if (res.msg > newmsg) {
                    playMessageSound();
                }
                $('#count-msg').text(res.msg);
                $('#count-msg').attr('data-num', res.msg);
                newmsg = res.msg;
                for (let i = 0; i < res.data.length; i++) {
                    let convElem = $('.conversation[data-id="'+res.data[i].conversation_id+'"]');
                    convElem.find('small').remove();
    
                    if (res.data[i].admin_unread_count > 0) {
                        convElem.append(`<small style="color: red;">${res.data[i].admin_unread_count} chưa đọc</small>`);
                    }
                }
            }
        });
    }

    $(document).ready(function() {
        setInterval(updateUnreadCounts, 3000);
        updateUnreadCounts();
    });
</script>
  </body>
</html>
<script type="text/javascript" src="/static/public/umeditor/umindex.js"></script>
<script>

	function editcon(form){
		var type = "<?php echo $isedit; ?>";
		var utel = form.utel.value;
		var nickname = form.nickname.value;
		var upwd = form.upwd.value;
		var upwd2 = form.upwd2.value;
		var ordpwd = form.ordpwd.value;

		if(type == 0 || (type == 1 && ordpwd)){ 
			//if(!upwd){layer.msg('Vui lòng nhập Mật khẩu'); return false;}
			//if(upwd.length < 6){layer.msg('Mật khẩu phải có ít nhất 6 ký tự'); return false;}
			//if(!upwd2){layer.msg('Vui lòng xác nhận mật khẩu'); return false;}
			//if(upwd !== upwd2){layer.msg('Hai lần nhập mật khẩu không giống nhau'); return false;}
		}

		if(type == 0){
			var formurl = "<?php echo Url('user/useradd'); ?>";
			if(!utel){layer.msg('Vui lòng nhập số điện thoại'); return false;}
		}else{
			var formurl = "<?php echo Url('user/useredit'); ?>";
		}

		
		if(!nickname){layer.msg('Vui lòng nhập Họ và tên'); return false;}
		
	    var data = $('#formid').serialize();
	    var locurl = "<?php echo Url('user/userlist'); ?>";

	    WPpost(formurl,data,locurl);

	    return false;
	}


</script>