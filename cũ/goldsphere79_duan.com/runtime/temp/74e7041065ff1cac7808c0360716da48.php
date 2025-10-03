<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:70:"/www/wwwroot/goldsphere79.com/application/lord/view/user/userlist.html";i:1690248718;s:61:"/www/wwwroot/goldsphere79.com/application/lord/view/head.html";i:1690248718;s:61:"/www/wwwroot/goldsphere79.com/application/lord/view/menu.html";i:1755730339;s:61:"/www/wwwroot/goldsphere79.com/application/lord/view/foot.html";i:1747598054;}*/ ?>
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
              <!--state overview start-->
              
              <div class="row state-overview">
                <div class="container">
				        <form action="<?php echo url('user/userlist'); ?>" method="get">
                <div class="row">
                     <div class="col-lg-3 mar-10">
                      <div class="input-group">
                              <span class="input-group-addon">Loại</span>
                              <select name="otype" class="selectpicker show-tick form-control">
                                  <option value="">Không chọn mặc định</option>
                                  <option <?php if(isset($getdata['otype']) && $getdata['otype'] === 0): ?> selected="selected" <?php endif; ?> value="0">Lợi nhuận</option>
                                  <option <?php if(isset($getdata['otype']) && $getdata['otype'] == 101): ?> selected="selected" <?php endif; ?> value="101">Đại lý</option>
                              </select>
                          </div>
                      </div>
                      <div class="col-lg-5 mar-10">

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Tên đăng nhập</span>
                            <input type="text"  value="<?php echo !empty($getdata['username'])?$getdata['username']:''; ?>"  class="form-control" name="username" placeholder="Tên đăng nhập/Số điện thoại/Số thứ tự"/>
                        </div>
                      </div>
                      
                      <div class="col-lg-5 mar-10">

                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Số điện thoại</span>
                            <input type="text"  value="<?php echo !empty($getdata['utel'])?$getdata['utel']:''; ?>"  class="form-control" name="utel" placeholder="Số điện thoại"/>
                        </div>
                      </div>

                      
                  <div class="mar-10">
                   <input type="submit" class="btn btn-success" value="Tìm kiếm">
                  </div>
                </div>
                </form>
              </div>
              </div>
              <!--state overview end-->
              <br>
            <a href="<?php echo url('user/userlist'); ?>"><button type="submit" class="btn btn-primary">Tất cả người dùng</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('user/userlist',array('otype'=>0)); ?>"><button type="submit" class="btn btn-success">Tất cả lợi nhuận</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('user/userlist',array('otype'=>101)); ?>"><button type="submit" class="btn btn-success">Tất cả đại lý</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('user/userlist',array('today'=>1,'otype'=>0)); ?>"><button type="submit" class="btn btn-success">Lợi nhuận hôm nay</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('user/userlist',array('today'=>1,'otype'=>101)); ?>"><button type="submit" class="btn btn-success">Đại lý hôm nay</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            
            <a href="<?php echo url('user/useradd'); ?>"><button type="submit" class="btn btn-danger">Thêm khách hàng+</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="<?php echo url('user/vipuseradd'); ?>"><button type="submit" class="btn btn-danger">Thêm đại lý+</button></a>&nbsp;&nbsp;&nbsp;&nbsp;
            <br><br>
             <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Danh sách người dùng
                          </header>
                          <table class="table table-striped table-advance table-hover">
                            <thead class="ordertable">
                              <tr>
                                <th>ID người dùng</th>
                                <th>Thông tin khách hàng</th>
                                <th>Tên khách hàng</th>
                                <th>Ngày tạo</th>
                                <th>Đăng nhập gần nhất</th>
                                <th>Số Lệnh</th>
                                <th>Số dư tài khoản</th>
                                <th>Quyền hạn</th>
                                <th>Thưởng</th>
                                <th>Hoa hồng</th>
                                <th>Đại lý</th>
                                <?php if($otype == 3): ?>
                                <th>Thao tác</th>
                                <?php endif; ?>
                            </tr>
                          </thead>
                          <tbody>
                          <!-- <?php if(is_array($userinfo) || $userinfo instanceof \think\Collection || $userinfo instanceof \think\Paginator): $i = 0; $__LIST__ = $userinfo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?> -->
                              <tr>
                                  <td><?php echo $vo['uid']; ?></td>
                                  <td><?php echo $vo['username']; ?>【<?php echo $vo['utel']; ?>】</td>
                                  <td><?php echo $vo['nickname']; ?></td>
                                  <td><?php echo date("Y-m-d H:i:s",$vo['utime']); ?></td>
                                  <td><?php echo date("Y-m-d H:i:s",$vo['logintime']); ?></td>
                                  <td><?php echo ordernum($vo['uid']); ?></td>
                                  <td class="color_red">$<?php echo !empty($vo['usermoney'])?$vo['usermoney']:'0'; ?></td>
                                  <td><?php if($vo['otype'] == 0): ?>Khách hàng<?php elseif($vo['otype'] == 101): ?>Đại lý<?php endif; ?></td>
                                  <td><?php echo !empty($vo['rebate'])?$vo['rebate']:'0'; ?>%</td>
                                  <td><?php echo !empty($vo['feerebate'])?$vo['feerebate']:'0'; ?>%</td>
                                  <td><a href="<?php echo url('userlist',array('oid'=>$vo['oid'])); ?>"><?php echo getuser($vo['oid'],"username"); ?></a></td>
                                  
                                  <td>
                                      <?php if($vo['ustatus'] == 0): ?>
                                      <a href="javascript:;" onclick="doustatus(1,<?php echo $vo['uid']; ?>)"> <button class="btn btn-danger btn-xs">Khóa</button> </a>
                                      <?php else: ?>
                                      <a href="javascript:;" onclick="doustatus(0,<?php echo $vo['uid']; ?>)"> <button class="btn btn-primary btn-xs">Mở khóa</button> </a>
                                      <?php endif; if($vo['otype'] == 101): ?>
                                      
                                      <a href="<?php echo url('userlist',array('oid'=>$vo['uid'])); ?>"> <button class="btn btn-primary btn-xs"> Khách hàng cấp dưới </button> </a>
                                      <a href="<?php echo url('vipuserlist',array('oid'=>$vo['uid'])); ?>"> <button class="btn btn-primary btn-xs"> Đại lý cấp dưới </button> </a>
                                      <a href="<?php echo url('yeji',array('uid'=>$vo['uid'])); ?>"> <button class="btn btn-primary btn-xs">Hiệu suất</button> </a>

                                      <?php if($_SESSION['otype'] == 3): ?>
                                      <a href="<?php echo url('user/vipuseredit',array('uid'=>$vo['uid'])); ?>"><button class="btn btn-danger btn-xs"><i class="icon-pencil"> Chỉnh sửa</i></button></a>
                                      <a href="javascript:;" onclick="deleteuser(<?php echo $vo['uid']; ?>)" ><button class="btn btn-danger btn-xs"><i class="icon-pencil"> Xóa</i></button></a> 
                                      <?php endif; endif; if($vo['otype'] == 0): ?>

                                      <a href="javascript:;" onclick="dootype(101,<?php echo $vo['uid']; ?>)"><button class="btn btn-success btn-xs">Trở thành Đại lý</button></a>

                                      <?php if($_SESSION['otype'] == 3): ?>
                                      <a href="<?php echo url('user/useredit',array('uid'=>$vo['uid'])); ?>"><button class="btn btn-danger btn-xs"><i class="icon-pencil"> Chỉnh sửa</i></button></a>
                                      <a href="javascript:;" onclick="deleteuser(<?php echo $vo['uid']; ?>)" ><button class="btn btn-danger btn-xs"><i class="icon-pencil"> Xóa</i></button></a> 
                                      <?php endif; endif; ?>

                                      <a href="<?php echo url('user/userbank',array('uid'=>$vo['uid'])); ?>"><button class="btn btn-primary btn-xs">Ký hợp đồng</button></a>

                                       <a href="<?php echo url('price/pricelist'); ?>?username=<?php echo $vo['username']; ?>"><button class="btn btn-primary btn-xs">Báo cáo về dòng tiền</button></a>

                                      

                                  </td>
                                  
                              </tr>
							<!-- <?php endforeach; endif; else: echo "" ;endif; ?> -->
                              
                              
                              
                              </tbody>
                          </table>
                      </section>
                  </div>
              </div>
              
             <?php echo $page; ?>

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

function doustatus(type,uid) {
  
  if(type == 1){
    var con = 'Bạn có chắc chắn muốn khóa tài khoản này?';
  }else if(type == 0){
    var con = 'Bạn có chắc chắn muốn mở khóa tài khoản này?';
  }else{
    layer.msg('Tham số không hợp lệ！');
    return false;
  }

  if(!uid){
    layer.msg('Tham số không hợp lệ！');
    return false;
  }

  layer.open({
    content: con,
    yes: function(index){
      //do something
      var formurl = "<?php echo Url('user/doustatus'); ?>";
      var data = 'uid='+uid+'&ustatus='+type;

      $.post(formurl,data,function(resdata){
        layer.msg(resdata.data);
        if(resdata.type == 1){
          history.go(0);
        }
      })

      
    }
  });
}

function dootype(type,uid) {
  
  if(type == 101){
    var con = 'Bạn có chắc chắn muốn chuyển thành đại lý?';
  }else{
    layer.msg('Tham số không hợp lệ！');
    return false;
  }

  if(!uid){
    layer.msg('Tham số không hợp lệ！');
    return false;
  }

  layer.open({
    content: con,
    yes: function(index){
      //do something
      var formurl = "<?php echo Url('user/dootype'); ?>";
      var data = 'uid='+uid+'&otype='+type;

      $.post(formurl,data,function(resdata){
        layer.msg(resdata.data);
        if(resdata.type == 1){
          history.go(0);
        }
      })

      
    }
  });
}


function deleteuser (uid) {
  
  layer.open({
    content: 'Bạn chắc chắn muốn xóa? Hành động này không thể khôi phục lại, vui lòng cân nhắc thật kỹ!',
    yes: function(index){
      //do something
      var formurl = "<?php echo Url('user/deleteuser'); ?>";
      var data = 'uid='+uid;

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