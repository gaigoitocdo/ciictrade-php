<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/user/userbank.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/head.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/menu.html";i:1690261194;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/foot.html";i:1690047148;}*/ ?>
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
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-8">
                      <!--widget start-->
                      <aside class="profile-nav alt green-border">
                          <section class="panel">
                              
                          <?php if($bank): ?>
                              <div class="panel-body bio-graph-info" id="bankInfo">
                              
                              <div class="form-horizontal">
                                  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">ID người dùng：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['uid']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên chủ tài khoản：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['accntnm']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tỉnh：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo getarea($bank['provinceid']); ?>  <?php echo getarea($bank['cityno']); ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Địa chỉ chi tiết：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['address']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên ngân hàng：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['bank_nm']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số điện thoại dự trữ：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['phone']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số tài khoản ngân hàng：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['accntno']; ?></p>
                                      </div>
                                  </div>
                  <hr>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số CMND：</label>
                                      <div class="col-lg-6">
                                          <p class="control-label"><?php echo $bank['scard']; ?></p>
                                      </div>
                                  </div>
									<hr>
                                  
                                <div class="form-group">
                                      <div class="col-lg-offset-2 col-lg-10">
                                          <input type="submit" value="Chỉnh sửa"  onclick="showEdit()" class="btn btn-success">
                                          <input type="submit" value="Xóa"  onclick="del()" class="btn btn-danger">
                                      </div>
                                  </div>
                                  
                              </div>



                          </div>
                          
                          
                          <div class="panel-body bio-graph-info" id="editBank" style="display: none">

                                  <div class="form-horizontal">

                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">ID người dùng：</label>
                                          <div class="col-lg-6">
                                              <p class="control-label id"><?php echo $bank['id']; ?></p>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tên chủ tài khoản：</label>
                                          <div class="col-lg-6">
                                              <p class="control-label accntnm" ><?php echo $bank['accntnm']; ?></p>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tỉnh：</label>
                                          <div class="col-lg-6">
                                              <select id="province" class="province" name="province" style="">
                                                  <option value="">Vui lòng chọn</option>
                                                  <?php if(is_array($province) || $province instanceof \think\Collection || $province instanceof \think\Paginator): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                                                  <option  value="<?php echo $vo['id']; ?>" <?php if(isset($bank) && $bank['provinceid'] == $vo['id']): ?> selected="selected" <?php endif; ?> ><?php echo $vo['name']; ?></option>

                                                  <?php endforeach; endif; else: echo "" ;endif; ?>

                                              </select>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Thành phố：</label>
                                          <div class="col-lg-6">
                                              <select id="city" name="cityno" class="city">
                                                  <?php if(isset($bank)): ?>
                                                  <option value="<?php echo $bank['cityno']; ?>"><?php echo getarea($bank['cityno']); ?></option>
                                                  <?php else: ?>
                                                  <option value="">Vui lòng chọn</option>
                                                  <?php endif; ?>
                                              </select>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Địa chỉ chi tiết：</label>
                                          <div class="col-lg-6">
                                              <input type="text" placeholder="Địa chỉ chi nhánh" name="address" class="address" value="<?php echo $bank['address']; ?>">
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Tên ngân hàng：</label>
                                          <div class="col-lg-6">
                                              <select name="bankno" class=" bankno">

                                                  <?php if(is_array($banks) || $banks instanceof \think\Collection || $banks instanceof \think\Paginator): $i = 0; $__LIST__ = $banks;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>

                                                  <option label="<?php echo $vo['bank_nm']; ?>" value="<?php echo $vo['id']; ?>" <?php if(isset($bank) && $bank['bankno'] == $vo['id']): ?> selected="selected" <?php endif; ?> ><?php echo $vo['bank_nm']; ?></option>

                                                  <?php endforeach; endif; else: echo "" ;endif; ?>
                                              </select>
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Số điện thoại dự trữ：</label>
                                          <div class="col-lg-6">
                                              <input type="text" placeholder="Số điện thoại dự trữ" name="phone"  class="phone" value="<?php echo isset($bank)?$bank['phone']:''; ?>">
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Số tài khoản ngân hàng：</label>
                                          <div class="col-lg-6">
                                              <input type="text" placeholder="Số tài khoản ngân hàng" name="accntno" class="accntno" value="<?php echo isset($bank)?$bank['accntno']:''; ?>">
                                          </div>
                                      </div>
                                      <hr>
                                      <div class="form-group">
                                          <label class="col-lg-2 control-label">Số CMND：</label>
                                          <div class="col-lg-6">
                                              <input type="text" placeholder="Số CMND" name="scard" class=" scard" value="<?php echo isset($bank)?$bank['scard']:''; ?>">
                                          </div>
                                      </div>
                                      <hr>

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" value="Gửi"  onclick="update_user()" class="btn btn-success">
                                          </div>
                                      </div>
                                  </div>
                              </div>
                        <?php else: ?>
                        <div class="row">
                            <div class="col-lg-12">
                              <div class="noorder">
                                Không có dữ liệu
                              </div>
                            </div>
                          </div>
                        <?php endif; ?>

                          </section>
                      </aside>
                      <!--widget end-->
                      
                  </div>
                 </div> 
              
                 
              
              <!-- page end-->
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
    $('#province').change(function(){
        var pid = $(this).val();
        if(pid != ''){
            var url = "<?php echo url('getarea'); ?>"+"?id="+pid;
            $.get(url,function(data){
                $("#city").html(data);
            });
        }else{
            $("#city").html('<option value="">Vui lòng chọn thành phố</option>');
        }


    });

    function showEdit() {
        $('#bankInfo').hide();
        $('#editBank').show();
    }

    function update_user() {

        var bankno = $('.bankno').val();
        var province = $('.province').val();
        var city = $('.city').val();
        var address = $('.address').val();
        var accntnm = $('.accntnm').text();
        var accntno = $('.accntno').val();
        var scard = $('.scard').val();
        var phone = $('.phone').val();
        var id = $('.id').text();


        if(!bankno){layer.msg('Vui lòng chọn ngân hàng');return false;}
        if(!province){layer.msg('Vui lòng chọnTỉnh');return false;}
        if(!city){layer.msg('Vui lòng chọn thành phố');return false;}
        if(!address){layer.msg('Vui lòng nhập Địa chỉ chi nhánh');return false;}
        if(!accntnm){layer.msg('Vui lòng nhập tên chủ tài khoản');return false;}
        if(!accntno){layer.msg('Vui lòng nhập số tài khoản');return false;}
        if(!scard){layer.msg('Vui lòng nhập số CMND');return false;}
        if(!phone){layer.msg('Vui lòng nhập số điện thoại');return false;}


        var postdata = 'bankno='+bankno+"&provinceid="+province+"&cityno="+city+"&address="+address+"&accntnm="+accntnm+"&accntno="+accntno+"&scard="+scard+"&phone="+phone;
        if(id){
            postdata += "&id="+id
        }
        var posturl = "/lord/user/dobanks";
        $.post(posturl,postdata,function(resdata){
            layer.msg(resdata.data);

            if(resdata.type == 1){
                setTimeout('gourl()',1000);
            }

        })


    }


    function gourl() {

        history.go(0);
    }
    
    function del() {
		var id = $('.id').text();
	  layer.open({
	    content: 'Bạn chắc chắn muốn xóa? Hành động này không thể khôi phục lại, vui lòng cân nhắc thật kỹ!',
	    yes: function(index){
	      //do something
	      var formurl = "<?php echo Url('/lord/user/delQianyue'); ?>";
	      var data = 'id='+id;
	
	      $.post(formurl,data,function(resdata){
	        layer.msg(resdata.data);
	        if(resdata.type == 1){
	          history.go(0);
	        }
	      })
	
	      
	    }
	  });


	}


</script>