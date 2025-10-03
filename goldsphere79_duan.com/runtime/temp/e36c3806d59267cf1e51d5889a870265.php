<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:75:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/login/login.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/head.html";i:1690248718;s:68:"/www/wwwroot/51.79.188.227/hosetrade/application/lord/view/foot.html";i:1690047148;}*/ ?>

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

<style>
.white-bg{
  background: #000;
  border-bottom:#000;
}
a.logo{
  color:#fff
}
.admin_logo{
      text-align: center;
    padding-top: 120px;
    margin-bottom: -90px;
}
.admin_logo img{
  height: 150px
}

</style>
<body class="login-body">

<div class="container" >
    <form class="form-signin" action="" method="post" id="formid">
        <h2 class="form-signin-heading">Đăng nhập trang quản trị</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" name="username" placeholder="Tên đăng nhập" value="<?php echo $rememberme; ?>">
            <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            <label class="checkbox">
                <input type="checkbox" value="1" name="rememberme"> Ghi nhớ đăng nhập
            </label>
            <input type="submit" onclick="return check_admin_login(this.form)" class="btn btn-lg btn-login btn-block" value="Đăng nhập" />
        </div>
    </form>
</div>



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
function check_admin_login(form) {
    var username = form.username.value;
    var password = form.password.value;
    if (!username) {
        layer.msg('Vui lòng nhập Tên đăng nhập');
        return false;
    }

    if (!password) {
        layer.msg('Vui lòng nhập mật khẩu');
        return false;
    }

    var formurl = "<?php echo Url('lord/login/login'); ?>";
    var data = $('#formid').serialize();
    $.post(formurl, data, function(data) {
        if (data.type == 1) {
            layer.msg(data.data, {icon: 1, time: 1000}, function() {
                window.location.href = "<?php echo Url('lord/index/index'); ?>";
            });
        } else if (data.type == -1) {
            layer.msg(data.data, {icon: 2});
        }
    });

    return false;
}
</script>