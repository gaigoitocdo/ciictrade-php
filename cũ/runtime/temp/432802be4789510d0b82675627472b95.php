<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:66:"/www/wwwroot/51.79.209.207/application/lord/view/goods/proadd.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/head.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/menu.html";i:1755730339;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/foot.html";i:1747598054;}*/ ?>
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
                      <aside class="profile-info col-lg-10">
                      <section class="panel">
                          
                          <div class="panel-body bio-graph-info">
                              <h1> <?php echo !empty($pid)?'Chỉnh sửa sản phẩm':'Thêm sản phẩm'; ?></h1>
                              <form class="form-horizontal" role="form" id="formid" method="post">
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên sản phẩm</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($ptitle)?$ptitle:''; ?>"  placeholder="Vui lòng nhập Tên sản phẩm" name="ptitle">
                                      </div>
                                  </div>


                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Danh mục</label>
                                      <div class="col-lg-8">
                                          <select name="cid" class="selectpicker show-tick form-control">
                                          		<option value="0">Vui lòng chọn danh mục</option>
                                          		<!-- <?php if(is_array($proclass) || $proclass instanceof \think\Collection || $proclass instanceof \think\Paginator): $i = 0; $__LIST__ = $proclass;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> -->
                                            	<option <?php if(isset($cid) && $cid == $vo['pcid']): ?> selected="selected" <?php endif; ?> value="<?php echo $vo['pcid']; ?>"><?php echo $vo['pcname']; ?></option>
                                              	<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
                                          </select>
                                      </div>
                                  </div>

                                  
							
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Phạm vi biến động kiểm soát rủi ro</label>
                                      <div class="col-lg-8">
                                      		<div class="input-group">
					                            <span class="input-group-addon" id="basic-addon1">Giá trị tối thiểu</span>
					                            <input type="text" value="<?php echo !empty($point_low)?$point_low:''; ?>" class="form-control" placeholder="Giá trị tối thiểu của phạm vi biến động kiểm soát rủi ro" name="point_low">
					                            <span class="input-group-addon" id="basic-addon1">Giá trị tối đa</span>
					                            <input type="text" value="<?php echo !empty($point_top)?$point_top:''; ?>" class="form-control" placeholder="Giá trị tối đa của phạm vi biến động kiểm soát rủi ro" name="point_top">
					                        </div>
					                        
											<div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
				                                 <strong>Lưu ý: </strong> Khi Lệnh của khách hàng nằm trong phạm vi điều kiện, sẽ tự động trừ hoặc cộng giữa giá trị tối thiểu và tối đa của phạm vi. Nếu để trống hoặc bằng 0 sẽ không kích hoạt tính năng này.
				                            </div>
					                        
                                          
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Phạm vi biến động ngẫu nhiên</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control"  placeholder="Vui lòng nhập Phạm vi biến động ngẫu nhiên" name="rands" value="<?php echo !empty($rands)?$rands:''; ?>">
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
				                                 <strong>Lưu ý: </strong> Sau khi lấy giá trị từ giao diện sản phẩm, sẽ thêm vào giá trị +- của phạm vi này. Ví dụ, nếu là 5, thì trong dữ liệu nhận được từ giao diện, sẽ thêm vào số ngẫu nhiên trong khoảng -5~5.
				                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Mã sản phẩm</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($procode)?$procode:''; ?>"  placeholder="Vui lòng nhập Mã sản phẩm" name="procode">
                                      </div>
                                  </div>
<!-- 
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Giá trị tính bằng ngoại tệ ngoài tỷ giá</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($add_data)?$add_data:''; ?>"  placeholder="Vui lòng nhập giá trị tính bằng ngoại tệ ngoài tỷ giá" name="add_data">
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                               <strong>Lưu ý: </strong> Giá trị tính bằng ngoại tệ ngoài tỷ giá, giá trị thời gian thực của sản phẩm = giá trị gốc của sản phẩm * tỷ giá * khác; Ở đây, bạn nên nhập "khác"; Tối đa bảy chữ số thập phân.
                                        </div>
                                      </div>
                                  </div> -->

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Khoảng thời gian chơi</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($protime)?$protime:''; ?>"  placeholder="Vui lòng nhập Khoảng thời gian chơi" name="protime">
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                               <strong>Lưu ý: </strong> Ví dụ, nếu thời gian là 1 phút, 3 phút, 5 phút, 8 phút, vui lòng sử dụng dấu phẩy để phân tách thời gian, ví dụ: 1,3,5,8. Nếu không có chơi theo thời gian này, hãy để trống. Phải là bốn số.
                                        </div>
                                      </div>
                                  </div>

<!--                                   <div class="form-group">
                                      <label class="col-lg-2 control-label">Khoảng thời gian điểm</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($propoint)?$propoint:''; ?>"  placeholder="Vui lòng nhập Tên sản phẩm" name="propoint">
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                               <strong>Lưu ý: </strong> Ví dụ, nếu điểm là 1 điểm, 3 điểm, 5 điểm, 8 điểm, vui lòng sử dụng dấu phẩy để phân tách điểm, ví dụ: 1,3,5,8. Nếu không có chơi theo điểm này, hãy để trống. Phải là bốn số.
                                        </div>
                                      </div>
                                  </div> -->

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tỷ lệ lợi nhuận</label>
                                      <div class="col-lg-8">
                                          <input type="text" class="form-control" value="<?php echo !empty($proscale)?$proscale:''; ?>"  placeholder="Vui lòng nhập Tỷ lệ lợi nhuận" name="proscale">
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                               <strong>Lưu ý: </strong> Ví dụ, tỷ lệ lợi nhuận là 75%, 77%, 80%, 85%, vui lòng nhập dạng: 75,77,80,85. Tất cả đều phải có bốn số và không được để trống.
                                        </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Thời gian mở cửa thị trường</label>
                                      <div class="col-lg-8">
                                          <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Thứ hai</span>
                                              <input type="text" value="<?php echo !empty($opentime[0])?$opentime[0]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[1]">
                                              <span class="input-group-addon" id="basic-addon1">Thứ ba</span>
                                              <input type="text" value="<?php echo !empty($opentime[1])?$opentime[1]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[2]">
                                          </div>

                                          <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Thứ tư</span>
                                              <input type="text" value="<?php echo !empty($opentime[2])?$opentime[2]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[3]">
                                              <span class="input-group-addon" id="basic-addon1">Thứ năm</span>
                                              <input type="text" value="<?php echo !empty($opentime[3])?$opentime[3]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[4]">
                                          </div>

                                          <div class="input-group">
                                              <span class="input-group-addon" id="basic-addon1">Thứ sáu</span>
                                              <input type="text" value="<?php echo !empty($opentime[4])?$opentime[4]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[5]">
                                              <span class="input-group-addon" id="basic-addon1">Thứ bảy</span>
                                              <input type="text" value="<?php echo !empty($opentime[5])?$opentime[5]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[6]">
                                              <span class="input-group-addon" id="basic-addon1">Chủ nhật</span>
                                              <input type="text" value="<?php echo !empty($opentime[6])?$opentime[6]:''; ?>" class="form-control" placeholder="Ví dụ: 00:00~03:00|08:00~24:00" name="opentime[7]">
                                          </div>


                                  
                                    <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                         <strong>Lưu ý: </strong> Nếu thời gian mở cửa thị trường từ 00:00~18:00, hãy nhập 00:00~18:00. Nếu thời gian mở cửa thị trường từ 00:00~03:00 và 08:00~24:00, hãy nhập như sau: 00:00~03:00|08:00~24:00. Không sử dụng các ký tự tiếng Trung, nếu không mở cửa thị trường cả ngày, vui lòng để trống trường này. Thời gian phải nhập chính xác.
                                    </div>
                                  
                                          
                                      </div>
                                  </div>
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Ghi chú</label>
                                      <div class="col-lg-8">
                                          <textarea name="content" class="form-control" cols="30" rows="10"><?php echo !empty($content)?$content:''; ?></textarea>
                                      </div>
                                  </div>
								
								<input type="hidden" name="pid" value="<?php echo !empty($pid)?$pid:''; ?>">
                                  <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <input type="submit" class="btn btn-success" onclick="return editpro(this.form)" value="Gửi">
                                          
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
<script>

function editpro(form){

	var ptitle = form.ptitle.value;
	var cid = form.cid.value;
	var point_low = form.point_low.value;
	var point_top = form.point_top.value;
	var rands = form.rands.value;
  var procode = form.procode.value;
  var proscale = form.proscale.value;

	if(!ptitle){
		layer.msg('Vui lòng nhập Tên sản phẩm'); 
	    return false;
	}

	if(!cid || cid == 0){
		layer.msg('Vui lòng chọn danh mục'); 
	    return false;
	}



	if(point_low < 0 || isNaN(point_low) || point_top < 0 || isNaN(point_top) || rands < 0 || isNaN(rands)){
		layer.msg('Giá trị phạm vi kiểm soát rủi ro phải là số lớn hơn 0'); 
	    return false;
	}

	if(point_low > point_top ){
		layer.msg('Giá trị tối thiểu kiểm soát rủi ro phải nhỏ hơn giá trị tối đa'); 
	    return false;
	}

  if(!procode ){
    layer.msg('Vui lòng nhập Mã sản phẩm！'); 
      return false;
  }

  if(!proscale ){
    layer.msg('Vui lòng nhập Tỷ lệ lợi nhuận！'); 
      return false;
  }




	var formurl = "<?php echo Url('goods/proadd'); ?>"
    var data = $('#formid').serialize();
    var locurl = "<?php echo Url('lord/goods/prolist'); ?>";

    WPpost(formurl,data,locurl);




	return false;

}


</script>