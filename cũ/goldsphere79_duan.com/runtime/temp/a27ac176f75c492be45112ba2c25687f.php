<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:73:"/www/wwwroot/isetradingstar.com/application/lord/view/system/addrech.html";i:1690248718;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/head.html";i:1690248718;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/menu.html";i:1690261194;s:63:"/www/wwwroot/isetradingstar.com/application/lord/view/foot.html";i:1690047148;}*/ ?>
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



<link rel="stylesheet" href="/static/layui/css/layui.css" />
<script src="/static/layui/layui.js"></script>
<!--main content start-->
      <section id="main-content">
          <section class="wrapper">


          <div class="row">
                  <div class="col-sm-12">
                      <aside class="profile-info col-lg-9">
                      <section class="panel">

                          <div class="panel-body bio-graph-info">
                              <h1> Thêm cấu hình nạp tiền</h1>
                              <form class="form-horizontal" role="form" method="post" id="formid">

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="pay_name"  value="<?php echo !empty($pay_name)?$pay_name:''; ?>"  >
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Thông tin cấu hình</label>
                                      <div class="col-lg-6">
                                          <textarea name="pay_conf"  class="form-control" cols="30" rows="10"><?php echo !empty($pay_conf)?$pay_conf:''; ?></textarea>
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Định dạng: </strong> key1:value1|key2:value2|......
                                          </div>
                                      </div>
                                      
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Sử dụng</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="is_use"  value="<?php echo !empty($is_use)?$is_use:'0'; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> 1 hiển thị; 0 không hiển thị
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Phí giao dịch mỗi lần</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="pay_point"  value="<?php echo !empty($pay_point)?$pay_point:'0'; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Nhập phần trăm, ví dụ: 2% thì nhập 2
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Tên ngân hàng</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="bankname"  value="<?php echo !empty($bankname)?$bankname:''; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Nhập tên ngân hàng
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Chủ tài khoản</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="bankuser"  value="<?php echo !empty($bankuser)?$bankuser:''; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Nhập tên chủ tài khoản
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Số thẻ</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="card"  value="<?php echo !empty($card)?$card:''; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Nhập số thẻ
                                          </div>
                                      </div>
                                  </div>  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Mã QR</label>
                                      <div class="col-lg-6">
                                            <div class="layui-upload">
                                              
                                              <div class="layui-upload-list">
                                                <img class="layui-upload-img" id="demo1" width="200" src="<?php echo !empty($qrcode)?$qrcode:''; ?>">
                                                <p id="demoText"></p>
                                              </div>
                                              <div style="width: 95px;">
                                                <div class="layui-progress layui-progress-big" lay-showpercent="yes" lay-filter="demo">
                                                  <div class="layui-progress-bar" lay-percent=""></div>
                                                </div>
                                              </div>
                                              <button type="button" class="layui-btn" id="test1">Tải lên hình ảnh</button>
                                            </div>
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Tải lên hình ảnh WeChat hoặc Zalopay
                                          </div>
                                          <input type="hidden" id="qrcode" name="qrcode"  value="<?php echo !empty($qrcode)?$qrcode:''; ?>"  >
                                      </div>
                                  </div>  
                                  <div class="form-group">
                                      <label class="col-lg-2 control-label">Sắp xếp</label>
                                      <div class="col-lg-6">
                                          <input type="text" class="form-control" name="pay_order"  value="<?php echo !empty($pay_order)?$pay_order:'0'; ?>"  >
                                          <div class="alert alert-block alert-danger fade in" style="margin:10px 0 0 0 ">
                                             <strong>Chú thích: </strong> Số càng lớn thì sắp xếp càng trước
                                          </div>
                                      </div>
                                  </div>

                                  <?php if(isset($id) && !empty($id)): ?>
                                    <input type="hidden" value="<?php echo $id; ?>" name="id">
                                  <?php endif; ?>


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

  </body>
</html>
<script type="text/javascript" src="/static/public/umeditor/umindex.js"></script>
<script>
  function editcon(form){

    var pay_name = form.pay_name.value;
    var pay_conf = form.pay_conf.value;
    var is_use = form.is_use.value;
    var pay_point = form.pay_point.value;

    if(!pay_name){layer.msg('Vui lòng nhập tên'); return false;}
    if(!pay_conf){layer.msg('Vui lòng nhập thông tin cấu hình'); return false;}

    var formurl = "<?php echo Url('system/addrech'); ?>";
    var data = $('#formid').serialize();
    var locurl = "<?php echo Url('system/recharge'); ?>";

    WPpost(formurl,data,locurl);

    return false;

  }

layui.use(['upload', 'element', 'layer'], function(){
  var $ = layui.jquery
  ,upload = layui.upload
  ,element = layui.element
  ,layer = layui.layer;
  
  //常规使用 - 普通图片上传
  var uploadInst = upload.render({
    elem: '#test1'
    ,url: "<?php echo url('lord/system/upload_pic'); ?>" //此处用的是第三方的 http 请求演示，实际使用时改成您自己的上传接口即可。
    ,before: function(obj){
      //预读本地文件示例，不支持ie8
      obj.preview(function(index, file, result){
        $('#demo1').attr('src', result); //图片链接（base64）
      });
      
      element.progress('demo', '0%'); //进度条复位
      layer.msg('Đang tải lên', {icon: 16, time: 0});
    }
    ,done: function(res){
      //如果Tải lên thất bại
      console.log(res);
      if(res.code == 0){
        return layer.msg(res.msg);
      }
      //上传成功的一些操作
      $('#demo1').attr('src', res.url);
      $("#qrcode").val(res.url);
      $('#demoText').html(''); //置空Tải lên thất bại的状态
    }
    ,error: function(){
      //演示失败状态，并实现重传
      var demoText = $('#demoText');
      demoText.html('<span style="color: #FF5722;">Tải lên thất bại</span> <a class="layui-btn layui-btn-xs demo-reload">Thử lại</a>');
      demoText.find('.demo-reload').on('click', function(){
        uploadInst.upload();
      });
    }
    //进度条
    ,progress: function(n, elem, e){
      element.progress('demo', n + '%'); //可配合 layui 进度条元素使用
      if(n == 100){
        layer.msg('Tải lên hoàn tất', {icon: 1});
      }
    }
  });
});
 
</script>
