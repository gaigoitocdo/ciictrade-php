<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:69:"/www/wwwroot/isetradingstar.com/application/lord/view/goods/risk.html";i:1690248718;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/head.html";i:1690248718;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/menu.html";i:1747597993;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/foot.html";i:1747598054;}*/ ?>
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
      <div class="col-sm-8">
          <aside class="profile-info col-lg-12">
          <section class="panel">
              <hr>
              <div class="panel-body bio-graph-info">
                  <form class="form-horizontal" role="form" action="" method="post" id="formid">
            
                      <div class="form-group">
                          <label class="col-lg-3 control-label">Xác định khách hàng thua lỗ：</label>
                          <div class="col-lg-8">
                                
                                <input type="text" class="form-control" name="to_loss" placeholder="Vui lòng nhập ID khách hàng" value="<?php echo !empty($to_loss)?$to_loss:''; ?>">
                                <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                       <strong>Chú thích: </strong> Đặt ID thành viên ở đây (Ví dụ: 8888), nếu có nhiều thành viên hãy sử dụng dấu | để phân tách (Ví dụ: 8888|9999). Sau khi thiết lập, tất cả Lệnh của thành viên này sẽ bị thua lỗ, hãy cẩn thận khi thực hiện. Để tắt chức năng này, hãy để trống hoặc nhập 0 ở trên và gửi đi.
                                  </div>
                          </div>
                          <label class="col-lg-3 control-label"></label>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-3 control-label">Xác định khách hàng thắng lợi：</label>
                          <div class="col-lg-8">
                                <input type="text" class="form-control"  placeholder="Vui lòng nhập ID khách hàng" value="<?php echo !empty($to_win)?$to_win:''; ?>" name="to_win">
                                <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                       <strong>Chú thích: </strong> Đặt ID thành viên ở đây (Ví dụ: 8888), nếu có nhiều thành viên hãy sử dụng dấu | để phân tách (Ví dụ: 8888|9999). Sau khi thiết lập, tất cả Lệnh của thành viên này sẽ thắng lợi, hãy cẩn thận khi thực hiện. Để tắt chức năng này, hãy để trống hoặc nhập 0 ở trên và gửi đi.
                                  </div>
                          </div>
                          <label class="col-lg-3 control-label"></label>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-3 control-label">Giá trị kiểm soát tối thiểu：</label>
                          <div class="col-lg-8">
                                <input type="text" class="form-control" name="min_price" placeholder="Vui lòng nhập Giá trị kiểm soát tối thiểu" value="<?php echo !empty($min_price)?$min_price:''; ?>">
                                <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                       <strong>Chú thích: </strong> Lệnh đạt đến số tiền này sẽ chịu ảnh hưởng của kiểm soát bên dưới.
                                  </div>
                          </div>
                          <label class="col-lg-3 control-label"></label>
                      </div>

                      <div class="form-group">
                          <label class="col-lg-3 control-label">Xác suất kiểm soát：</label>
                          <div class="col-lg-8">
                                <textarea name="chance"  class="form-control" cols="30" rows="10"><?php echo !empty($chance)?$chance:''; ?></textarea>
                                <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                       <strong>Chú thích: </strong> Nhập khoảng số tiền, trong khoảng số tiền này sẽ áp dụng xác suất lãi lỗ. Không nằm trong khoảng này sẽ không bị ảnh hưởng kiểm soát<br>
                                       <strong>Định dạng: </strong> Bắt đầu khoảng - Kết thúc khoảng: xác suất thắng lợi của khách hàng | Dấu phân cách phải là ký tự tiếng Anh, Ví dụ: 0-100:50|100-200:30
                                  </div>
                          </div>
                          <label class="col-lg-3 control-label"></label>
                      </div>
                      
                      <input type="hidden" name="id" value="<?php echo !empty($id)?$id:''; ?>">
                      
                                
                                  
                      <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                              <input type="submit" class="btn btn-success" onclick="return editrisk(this.form)" value="Gửi">
                          </div>
                      </div>
                  </form>
              </div>
          </section>
          
      </aside>
      </div>

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

function editrisk(form) {
  
  var formurl = "<?php echo Url('goods/addrisk'); ?>"
    var data = $('#formid').serialize();
    var locurl = "<?php echo Url('goods/risk'); ?>";
    WPpost(formurl,data,locurl);
    return false;
}


</script>