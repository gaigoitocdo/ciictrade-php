<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:79:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/order/orderlist.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/head.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/menu.html";i:1690261194;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/foot.html";i:1690047148;}*/ ?>
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
                    <li  <?php if($contrname == 'Setup' && $actionname == 'deploy'): ?> class="active" <?php endif; ?> >
                    <a class="" href="<?php echo Url('lord/Setup/deploy'); ?>">Quản lý cấu hình</a>
                    </li>
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
              <!--state overview start-->
              
              <div class="row state-overview">
				<form action="" method="get">
                <div class="container">
                <div class="row">
                 
                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Mã Lệnh</span>
                            <input type="text"  name="orderid"  class="form-control" value="<?php echo !empty($getdata['oid'])?$getdata['oid']:''; ?>" placeholder="Nhập Mã Lệnh/ID Lệnh"/>
                        </div>
                      </div>

                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">
                              <select name="stype" id="">
                                <option <?php if(isset($getdata['stype']) && $getdata['stype'] == 1): ?> selected="selected" <?php endif; ?> value="1">Lợi nhuận</option>
                                <option <?php if(isset($getdata['stype']) && $getdata['stype'] == 2): ?> selected="selected" <?php endif; ?>  value="2">Đại lý</option>
                              </select>
                            </span>
                            <input type="text"   class="form-control" value="<?php echo !empty($getdata['username'])?$getdata['username']:''; ?>"  name="username" placeholder="Biệt danh/Tên/Điện thoại/Số thứ tự"/>
                        </div>
                      </div>

                      <div class="col-lg-6 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Thời gian đặt lệnh</span>
                            <input type="text"  id="datetimepicker" class="form-control" placeholder="Nhấp để chọn thời gian" name="starttime" value="<?php echo !empty($getdata['starttime'])?$getdata['starttime']:''; ?>"/>
                            <span class="input-group-addon" id="basic-addon1">đến</span>
                            <input type="text"  id="datetimepicker_end" class="form-control" placeholder="Nhấp để chọn thời gian" name="endtime" value="<?php echo !empty($getdata['endtime'])?$getdata['endtime']:''; ?>" />
                        </div>
                      </div>
               </div>
               <div class="row">
                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon">Tăng/Giảm</span>
                            <select name="ostyle" id="" class="selectpicker show-tick form-control">
                                <option value="">Không chọn mặc định</option>
                                <option <?php if(isset($getdata['ostyle']) && $getdata['ostyle'] == 1): ?> selected="selected" <?php endif; ?> value="1">Mua lên</option>
                                <option <?php if(isset($getdata['ostyle']) && $getdata['ostyle'] == 2): ?> selected="selected" <?php endif; ?> value="2">Mua xuống</option>
                            </select>
                        </div>
                      </div>

                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon">Khách hàng</span>
                            <select name="ploss" id="" class="selectpicker show-tick form-control">
                                <option value="">Không chọn mặc định</option>
                                <option <?php if(isset($getdata['ploss']) && $getdata['ploss'] == 1): ?> selected="selected" <?php endif; ?> value="1">Lãi</option>
                                <option <?php if(isset($getdata['ploss']) && $getdata['ploss'] == 2): ?> selected="selected" <?php endif; ?> value="2">Lỗ</option>
                                <option <?php if(isset($getdata['ploss']) && $getdata['ploss'] == 3): ?> selected="selected" <?php endif; ?> value="3">Không hợp lệ</option>
                            </select>
                        </div>
                      </div>
                      
                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon">Sản phẩm</span>
                            <select name="pid" id="" class="selectpicker show-tick form-control">
                                <option value="">Không chọn mặc định</option>
                                <!-- <?php if(is_array($pro) || $pro instanceof \think\Collection || $pro instanceof \think\Paginator): $i = 0; $__LIST__ = $pro;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> -->
                                <option <?php if(isset($getdata['pid']) && $getdata['pid'] == $vo['pid']): ?> selected="selected" <?php endif; ?> value="<?php echo $vo['pid']; ?>"><?php echo $vo['ptitle']; ?></option>
                                <!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
                                
                            </select>
                        </div>
                      </div>

                      <div class="col-lg-3 mar-10">
                        <div class="input-group">
                            <span class="input-group-addon">Trạng thái</span>
                            <select name="ostaus" id="" class="selectpicker show-tick form-control">
                                <option value="">Không chọn mặc định</option>
                                <option <?php if(isset($getdata['ostaus']) && $getdata['ostaus'] == 1): ?> selected="selected" <?php endif; ?>  value="1">Mở cửa</option>
                                <option <?php if(isset($getdata['ostaus']) && $getdata['ostaus'] == 2): ?> selected="selected" <?php endif; ?>  value="2">Đóng cửa</option>
                            </select>
                        </div>
                      </div>
                  </div>
                  <div class="mar-10">
                   <input type="submit" class="btn btn-success" value="Tìm kiếm">
                  </div>
                </div>
                </form>
              </div>
              
              <!--state overview end-->
            
            <a href="<?php echo url('order/orderlist'); ?>"><button type="submit" class="btn btn-danger">Tìm kiếm tất cả</button></a>&nbsp;&nbsp;&nbsp;&nbsp; <span class="color_red">&nbsp;&nbsp;<strong>Mặc định là Lệnh trong ngày</strong></span>
			<?php if(input('type') == 1): ?>
			<a href="<?php echo url('order/orderlist'); ?>"><button type="submit" class="btn btn-danger">Dừng làm mới</button></a>
			
			<?php else: ?>
			<a href="<?php echo url('order/orderlist',array('type'=>1)); ?>"><button type="submit" class="btn btn-danger">Tự động làm mới</button></a>
			
			<?php endif; ?>
            
            <br><br>
             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Ghi chép giao dịch
                          </header>
                          <table class="table table-striped table-advance table-hover">
                            <thead class="ordertable">
                              <tr>
                                <th>Mã Lệnh</th>
                                <th>Tài khoản giao dịch</th>
                                <th>Tên đăng nhập</th>
                                <th>Thời gian đặt lệnh</th>
                                <th>Thông tin sản phẩm</th>
                                <th>Trạng thái</th>
                                <th>Hướng</th>
                                <th>Thời gian/Tiền</th>
                                <th>Giá mở cửa</th>
                                <th>Giá đóng cửa</th>
                                <th>Số dư đặt cọc</th>
                                <th>Số dư không hợp lệ đặt cọc</th>
                                <th>Số dư hợp lệ đặt cọc</th>             
                                <th>Lợi nhuận thực tế</th>
                                <th>Số dư sau khi mua</th>
                                <th>Đại lý</th>
                                <?php if($otype == 3 || $iskong == 1): ?>
                                <th>Thao tác kiểm soát Lệnh</th>
                                <?php endif; ?>
                                <th>Chi tiết</th>
                            </tr>
                          </thead>
                          <tbody>
                          <!-- <?php if(is_array($order) || $order instanceof \think\Collection || $order instanceof \think\Paginator): $i = 0; $__LIST__ = $order;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> -->
                              <tr>
                                  <td><?php echo $vo['oid']; ?></td>
                                  <td><?php echo $vo['username']; ?></td>
                                  <td><?php echo $vo['nickname']; ?></td>
                                  <td><?php echo date("Y-m-d H:i:s",$vo['buytime']); ?></td>
                                  <td><?php echo $vo['ptitle']; ?></td>
                                  <td><?php if($vo['ostaus']==1): ?>Đóng cửa<?php else: ?>Mở cửa<?php endif; ?></td>
                                  <?php if($vo['ostyle'] == 0): ?>
                                  <td class="color_red">Mua lên</td>
                                  <?php elseif($vo['ostyle'] == 1): ?>
                                  <td class="color_green">Mua xuống</td>
                                  <?php endif; ?>
                                  <td><?php echo $vo['endprofit']; if($vo['eid']==1): ?>tiền<?php else: ?>giây<?php endif; ?></td>
                                  <td><?php echo $vo['buyprice']; ?></td>
                                  <td>
                                    <?php if($vo['ostaus'] == 1): if($vo["buyprice"] > $vo["sellprice"]): ?>
                                        <font color="#2fb44e" size="3"><?php echo $vo['sellprice']; ?></font>
                                      <?php else: ?>
                                        <font color="#ed0000" size="3"><?php echo $vo['sellprice']; ?></font>
                                      <?php endif; else: ?>
                                        <span <?php if($vo['pid'] == 1): ?> class="jks drop" <?php elseif($vo['pid'] == 2): ?> class="yks drop" <?php elseif($vo['pid'] == 3): ?> class="tks drop" <?php elseif($vo['pid'] == 4): ?> class="zsy drop" <?php endif; ?>></span>
                                    <?php endif; ?>
                                  </td>

                                  <td class="color_red">$<?php echo $vo['fee']; ?></td>
                                  
                                  <?php if($vo['ploss'] == 0): ?>
                                  <td class="color_red">$<?php echo $vo['fee']; ?></td>
                                  <?php else: ?>
                                  <td class="color_red">$0</td>
                                  <?php endif; if($vo['ploss'] != 0): ?>
                                  <td class="color_red">$<?php echo $vo['fee']; ?></td>
                                  <?php else: ?>
                                  <td class="color_red">$0</td>
                                  <?php endif; ?>
                                  

                                  <td <?php if($vo['ploss'] > 0): ?> class="color_red" <?php else: ?> class="color_green" <?php endif; ?>>$<?php echo $vo['ploss']; ?></td>
                                  <td class="color_red">$<?php echo $vo['commission']; ?></td>

                                  <!--<td><?php echo $vo['managername']; ?></td>-->
								   <td><?php if((getusers($vo['uoid'],'nickname'))): ?> <?php echo getusers($vo['uoid'],'nickname'); else: ?><?php echo $vo['managername']; endif; ?></td>
                                  
                                  <?php if($otype == 3 || $iskong == 1): ?>
                                  <td>
                                  <?php if($vo['ostaus']!=1): ?>
                                    <select name="ostyle" id="" class="selectpicker select_change show-tick form-control">
                                        <option <?php if($vo['kong_type'] == 0): ?> selected="selected" <?php endif; ?> value="<?php echo $vo['oid']; ?>_0">Mặc định</option>
                                        <option <?php if($vo['kong_type'] == 1): ?> selected="selected" <?php endif; ?>  value="<?php echo $vo['oid']; ?>_1">Lãi</option>
                                        <option <?php if($vo['kong_type'] == 2): ?> selected="selected" <?php endif; ?>  value="<?php echo $vo['oid']; ?>_2">Lỗ</option>
                                    </select>
                                  <?php else: ?>Đã đóng cửa<?php endif; ?>
                                    </td>
                                    <?php endif; ?>
                                    <td>
                                      <a href="<?php echo url('order/orderinfo',array('oid'=>$vo['oid'])); ?>"><button class="btn btn-primary btn-xs" title="Nhấp để xem"><i class="icon-list-alt"></i></button></a>
                                      
                                  </td>
                              </tr>
							<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
                              </tbody>
                          </table>
               <?php if(isset($noorder) && $noorder == 1): ?> 
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="noorder">
                                Không có dữ liệu
                              </div>
                            </div>
                          </div>
               <?php endif; ?> 
                      </section>
                      <div>
						<div class="row state-overview">
                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol red color_white">
                              <h5>Thống kê lãi lỗ</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="profit"></h1>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol gray color_white">
                              <h5>Số lượng lệnh</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="count"></h1>
                          </div>
                      </section>
                  </div>
                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol blue color_white">
                              <h5>Số tiền đã ủy thác</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="fee"></h1>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol red color_white">
                              <h5>Số tiền hợp lệ</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="valid_fee"></h1>
                          </div>
                      </section>
                  </div>

                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol terques color_white">
                              <h5>Số tiền không hợp lệ</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="invalid_fee"></h1>
                              
                          </div>
                      </section>
                  </div>
                  
                  <div class="col-lg-2 col-sm-2">
                      <section class="panel">
                          <div class="symbol gray color_white">
                              <h5>Hôm nay</h5>
                          </div>
                          <div class="order-boo">
                              <h1 id="valid_shouxu"></h1>
                          </div>
                      </section>
                  </div>

              </div>
                      </div>
                  </div>
              </div>
              <?php echo $order->render(); ?>
             

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

  </body>
</html>
<script>
ordersta();

function ordersta(){
  var formurl = "<?php echo url('/lord/order/ordersta'); ?>";
  var data  = '<?php echo $jsongetdata; ?>';
  
console.log(data);
  
  $.post(formurl,data,function(data){
      if (data) {
        $('#profit').html('$'+data.profit);
        $('#count').html(data.count+' lệnh');
        $('#fee').html('$'+data.fee);
        $('#invalid_fee').html('$'+data.invalid_fee);
        $('#valid_fee').html('$'+data.valid_fee);
        $('#now_fee').html('$'+data.now_fee);
        $('#valid_shouxu').html('$'+data.valid_shouxu);
      }


    });
    
}


//Chọn thời gian
$('#datetimepicker').datetimepicker();
$('#datetimepicker_end').datetimepicker();


$(".select_change").change(function(){
  var kong_id = $(this).val();
  if(kong_id){
    var kong_arr = kong_id.split('_');
  }
  var oid = kong_arr[0];
  var kong_type = kong_arr[1];
  var postdata = 'oid='+oid+"&kong_type="+kong_type;
  var posturl = "<?php echo url('dankong'); ?>";
  $.post(posturl,postdata,function(res){
    layer.msg(res.data);
  })
  
})
<?php if(input('type') == 1): ?>

setInterval('shuaxin()', 5000);

<?php endif; ?>

function shuaxin(){
	history.go(0)
}
</script>