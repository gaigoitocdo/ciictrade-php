<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"/www/wwwroot/51.79.209.207/application/lord/view/project/projectedit.html";i:1755721002;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/head.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/menu.html";i:1747597993;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/foot.html";i:1747598054;}*/ ?>
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




<section id="main-content">
  <section class="wrapper">
    <div class="row">
      <div class="col-lg-8">
        <section class="panel">
          <header class="panel-heading">Sửa dự án #<?php echo $project['id']; ?></header>
          <div class="panel-body">
<form id="projectEditForm"
      method="post"
      enctype="multipart/form-data"
      action="<?php echo url('lord/project/projectedit',['id'=>$project['id']]); ?>">
  <div class="form-group">
    <label>Tiêu đề</label>
    <input type="text" class="form-control" name="title" value="<?php echo htmlentities($project['title']); ?>" required>
  </div>

  <div class="form-group">
    <label>Mô tả</label>
    <textarea class="form-control" rows="4" name="description"><?php echo (isset($project['description']) && ($project['description'] !== '')?$project['description']:''); ?></textarea>
  </div>

  <div class="form-group">
    <label>Ảnh dự án</label>
    <input type="file" class="form-control" name="image" accept=".jpg,.jpeg,.png,.webp">
    <?php if(!empty($project['image'])): ?>
      <div style="margin-top:8px">
        <img src="<?php echo $project['image']; ?>" alt="Project image" style="max-width:200px; height:auto; border:1px solid #eee;">
      </div>
    <?php endif; ?>
  </div>

  <div class="form-group">
    <label>Lãi/ngày (%)</label>
    <input type="number" step="0.001" class="form-control" name="rate_daily" value="<?php echo $project['rate_daily']; ?>" required>
  </div>

  <div class="form-group">
    <label>Kỳ hạn (ngày)</label>
    <input type="number" class="form-control" name="duration_days" value="<?php echo $project['duration_days']; ?>" required>
  </div>

  <div class="form-group">
    <label>Tối thiểu đầu tư</label>
    <input type="number" step="0.01" class="form-control" name="min_invest" value="<?php echo $project['min_invest']; ?>">
  </div>

  <div class="form-group">
    <label>Hạn mức</label>
    <input type="number" step="0.01" class="form-control" name="total_quota" value="<?php echo $project['total_quota']; ?>">
  </div>

  <div class="form-group">
    <label>Trạng thái</label>
    <select name="status" class="form-control">
      <option value="1" <?php if($project['status']==1): ?>selected<?php endif; ?>>Mở</option>
      <option value="0" <?php if($project['status']==0): ?>selected<?php endif; ?>>Ẩn</option>
      <option value="2" <?php if($project['status']==2): ?>selected<?php endif; ?>>Kết thúc</option>
    </select>
  </div>

  <button type="submit" class="btn btn-success">Lưu</button>
  <a href="<?php echo url('project/projectlist'); ?>" class="btn btn-default">Quay lại</a>
</form>

          </div>
        </section>
      </div>
    </div>
  </section>
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
$('#projectEditForm').on('submit', function(e){
  e.preventDefault();
  var $f = $(this);
  var formData = new FormData($f[0]);
  $.ajax({
    url: $f.attr('action'),
    type: 'POST',
    data: formData,
    processData: false, // quan trọng
    contentType: false, // quan trọng
    success: function(res){
      layer.msg(res.data);
      if(res.type == 1 && res.redirect){
        location.href = res.redirect;
      }
    },
    error: function(){
      layer.msg('Lỗi mạng, vui lòng thử lại');
    }
  });
});
</script>
