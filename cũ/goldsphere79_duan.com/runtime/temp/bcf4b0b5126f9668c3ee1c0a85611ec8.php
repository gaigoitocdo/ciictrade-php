<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:64:"/www/wwwroot/51.79.209.207/application/lord/view/chat/index.html";i:1747600985;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/head.html";i:1690248718;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/menu.html";i:1755730339;s:58:"/www/wwwroot/51.79.209.207/application/lord/view/foot.html";i:1747598054;}*/ ?>
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



<style>
    .chat-layout {
        display: flex;
        height: 85vh;
        max-width: 95%;
        box-shadow: 0 2px 15px rgba(0,0,0,0.1);
        border-radius: 8px;
        overflow: hidden;
        background: #fff;
    }
    .chat-sidebar {
        width: 300px;
        border-right: 1px solid #ddd;
        padding: 15px;
        background: #f8f9fa;
        overflow-y: auto;
    }
    .chat-sidebar h3 {
        margin-top: 0;
        font-size: 18px;
        margin-bottom: 15px;
    }
    .conversation {
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 10px;
        cursor: pointer;
        background: #e9ecef;
        position: relative;
    }
    .conversation.active {
        background: #007bff;
        color: white;
    }
    .conversation .delete-conv {
        display: none;
        position: absolute;
        right: 5px;
        top: 5px;
        color: red;
        cursor: pointer;
    }
    .conversation:hover .delete-conv {
        display: block;
    }
    .chat-main {
        flex: 1;
        display: flex;
        flex-direction: column;
    }
    .chat-header {
        background: #007bff;
        color: white;
        padding: 15px;
        font-weight: bold;
        text-align: center;
    }
    .chat-box {
        flex: 1;
        padding: 15px;
        overflow-y: auto;
        background: #f1f1f1;
    }
    .message {
        margin: 10px 0;
        max-width: 70%;
        padding: 10px;
        border-radius: 10px;
        position: relative;
        line-height: 1.4;
        white-space: pre-wrap;
    }
    .message.sent {
        margin-left: auto;
        background: #007bff;
        color: #fff;
        text-align: right;
    }
    .message.received {
        margin-right: auto;
        background: #e2e3e5;
        text-align: left;
    }
    .message small {
        display: block;
        font-size: 10px;
        margin-top: 5px;
        opacity: 0.6;
        clear: both;
        width: auto;
    }
    .message .delete-msg {
        display: none;
        position: absolute;
        right: 5px;
        top: 5px;
        color: red;
        cursor: pointer;
    }
    .message:hover .delete-msg {
        display: block;
    }
    .chat-input {
        display: flex;
        padding: 10px;
        border-top: 1px solid #ccc;
        background: white;
    }
    .chat-input textarea {
        flex: 1;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        margin-right: 10px;
        resize: none;
        height: 40px;
        overflow-y: auto;
    }
    .chat-input input[type="file"] {
        display: none;
    }
    .chat-input .image-label {
        background: #cdcdcd;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
        margin-bottom: 0;
        font-size: 15px;
    }
    .chat-input button {
        background: #007bff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 6px;
        cursor: pointer;
    }
    .chat-input button:hover {
        background: #0056b3;
    }
    .quick-commands-btn {
        background: #28a745;
        color: white;
        padding: 8px 12px;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
    }
    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
    }
    .modal-content {
        background: white;
        width: 500px;
        margin: 100px auto;
        padding: 20px;
        border-radius: 8px;
    }
    .modal-content h3 {
        margin-top: 0;
    }
    .command-row {
        display: flex;
        margin-bottom: 10px;
        align-items: center;
    }
    .command-row input {
        flex: 1;
        margin-right: 10px;
        padding: 5px;
    }
    .command-row button {
        padding: 5px 10px;
    }
</style>
<section id="main-content">
<section class="wrapper">
<div class="row">
<div class="col-sm-12">
<div class="chat-layout">
    <div class="chat-sidebar">
        <h3>Danh sách chat</h3>
        <div id="conversation-list">
            <?php foreach($conversations as $conv): ?>
                <div class="conversation" data-id="<?php echo $conv['conversation_id']; ?>">
                    <strong><?php echo $conv['username']; ?></strong><br>
                    <?php if($conv['admin_unread_count'] > 0): ?>
                        <small style="color: red;"><?php echo $conv['admin_unread_count']; ?> chưa đọc</small>
                    <?php endif; ?>
                    <span class="delete-conv" onclick="deleteConversation(<?php echo $conv['conversation_id']; ?>)">✕</span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="chat-main">
        <div class="chat-header" id="chat-title">Chọn cuộc trò chuyện</div>
        <div class="chat-box" id="chat-box"></div>
        <div class="chat-input">
            <div class="quick-commands-btn" onclick="openQuickCommands()">Quick Commands</div>
            <textarea id="message-input" placeholder="Nhập tin nhắn hoặc icon 😊" rows="1"></textarea>
            <label class="image-label" for="image-input">📷</label>
            <input type="file" id="image-input" accept="image/*">
            <button onclick="sendMessage()">Gửi</button>
        </div>
    </div>
</div>
</div>
</div>
</section>
</section>

<!-- Quick Commands Modal -->
<div id="quickCommandsModal" class="modal">
    <div class="modal-content">
        <h3>Quản lý Quick Commands</h3>
        <div id="commandsList"></div>
        <div class="command-row">
            <input type="text" id="newCommand" placeholder="Command (e.g., /hello)">
            <input type="text" id="newContent" placeholder="Nội dung tin nhắn">
            <button onclick="saveQuickCommand()">Thêm</button>
        </div>
        <button onclick="closeQuickCommands()">Đóng</button>
    </div>
</div>

<script>
    var currentConversationId = null;
    var lastMessageId = 0;
    var uid = 0;
    var quickCommands = [];

    // Utility function to escape content for safe HTML insertion
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    function formatTime(dateStr) {
        const date = new Date(dateStr);
        return date.toLocaleTimeString() + ' ' + date.toLocaleDateString();
    }


    function loadNewMessages() {
        if (!currentConversationId) return;
        $.post("<?php echo url('lord/Chat/getNewMessages'); ?>", {
            conversation_id: currentConversationId,
            last_message_id: lastMessageId
        }, function(res) {
            if (res.status == 1 && res.messages.length > 0) {
                res.messages.forEach(function(msg) {
                    const isSent = msg.sender_id == uid;
                    let content = msg.message_type === 'image'
                        ? '<img src="/public' + escapeHtml(msg.content) + '" style="max-width:100%;border-radius:6px;">'
                        : escapeHtml(msg.content); // Escape content for safe rendering
                    console.log('Rendering message content:', msg.content); // Debug log
                    $('#chat-box').append(
                        '<div class="message ' + (isSent ? 'sent' : 'received') + '" data-id="' + msg.message_id + '">' +
                        content +
                        '<small>' + formatTime(msg.sent_at) + '</small>' +
                        '<span class="delete-msg" onclick="deleteMessage(' + msg.message_id + ')">✕</span>' +
                        '</div>'
                    );
                    lastMessageId = Math.max(lastMessageId, msg.message_id);
                });
                $('#chat-box').scrollTop($('#chat-box')[0].scrollHeight);
            }
        });
    }

    function sendMessage() {
        const text = $('#message-input').val().trim();
        const image = $('#image-input')[0].files[0];
        const type = image ? 'image' : (text === '😊' ? 'icon' : (text ? 'text' : null));
        if (!type || !currentConversationId) {
            console.log('Cannot send: No content or conversation ID');
            return;
        }

        let content = (type === 'text' || type === 'icon') ? text : '';
        let formData = new FormData();
        formData.append('conversation_id', currentConversationId);
        formData.append('content', content);
        formData.append('type', type);
        if (type === 'image') {
            formData.append('image', image);
        }

        $.ajax({
            url: "<?php echo url('lord/Chat/sendMessage'); ?>",
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(res) {
                if (res.status == 1) {
                    $('#message-input').val('');
                    $('#image-input').val('');
                    loadNewMessages();
                } else {
                    alert(res.msg);
                }
            },
            error: function(xhr, status, error) {
                console.log('Send message failed:', status, error);
            }
        });
    }

    function checkQuickCommand(text) {
        console.log('Checking quick command:', text);
        console.log('Current quickCommands:', quickCommands);
        if (!text || typeof text !== 'string') {
            console.log('Invalid input text');
            return false;
        }
        if (text[0] === '/') {
            const command = quickCommands.find(cmd => cmd.command.toLowerCase() === text.toLowerCase());
            if (command) {
                console.log('Found command:', command);
                $('#message-input').val(command.content);
                return true;
            } else {
                console.log('No matching command found for:', text);
            }
        }
        return false;
    }

    function openQuickCommands() {
        $.get("<?php echo url('lord/Chat/getQuickCommands'); ?>", function(res) {
            if (res.status == 1) {
                quickCommands = res.commands || [];
                console.log('Loaded quickCommands:', quickCommands);
                const commandsList = $('#commandsList');
                commandsList.empty();
                res.commands.forEach(cmd => {
                    commandsList.append(
                        `<div class="command-row">
                            <input type="text" value="${escapeHtml(cmd.command)}" disabled>
                            <input type="text" value="${escapeHtml(cmd.content)}" disabled>
                            <button onclick="editQuickCommand(${cmd.id}, '${escapeHtml(cmd.command)}', '${escapeHtml(cmd.content)}')">Sửa</button>
                            <button onclick="deleteQuickCommand(${cmd.id})">Xóa</button>
                        </div>`
                    );
                });
                $('#quickCommandsModal').show();
            } else {
                console.log('Failed to load quick commands:', res.msg);
            }
        });
    }

    function closeQuickCommands() {
        $('#quickCommandsModal').hide();
        $('#newCommand').val('');
        $('#newContent').val('');
    }

    function saveQuickCommand(id = null) {
        const command = $('#newCommand').val().trim();
        const content = $('#newContent').val().trim();
        $.post("<?php echo url('lord/Chat/saveQuickCommand'); ?>", {
            id: id,
            command: command,
            content: content
        }, function(res) {
            if (res.status == 1) {
                openQuickCommands();
                $('#newCommand').val('');
                $('#newContent').val('');
            } else {
                alert(res.msg);
            }
        });
    }

    function editQuickCommand(id, command, content) {
        $('#newCommand').val(command);
        $('#newContent').val(content);
        $('#newCommand').data('edit-id', id);
    }

    function deleteQuickCommand(id) {
        if (confirm('Xác nhận xóa quick command?')) {
            $.post("<?php echo url('lord/Chat/deleteQuickCommand'); ?>", { id: id }, function(res) {
                if (res.status == 1) {
                    openQuickCommands();
                } else {
                    alert(res.msg);
                }
            });
        }
    }

    function deleteMessage(message_id) {
        if (confirm('Xác nhận xóa tin nhắn?')) {
            $.post("<?php echo url('lord/Chat/deleteMessage'); ?>", { message_id: message_id }, function(res) {
                if (res.status == 1) {
                    $(`.message[data-id="${message_id}"]`).remove();
                } else {
                    alert(res.msg);
                }
            });
        }
    }

    function deleteConversation(conversation_id) {
        if (confirm('Xác nhận xóa toàn bộ cuộc trò chuyện?')) {
            $.post("<?php echo url('lord/Chat/deleteConversation'); ?>", { conversation_id: conversation_id }, function(res) {
                if (res.status == 1) {
                    $(`.conversation[data-id="${conversation_id}"]`).remove();
                    if (currentConversationId == conversation_id) {
                        currentConversationId = null;
                        $('#chat-box').empty();
                        $('#chat-title').text('Chọn cuộc trò chuyện');
                    }
                } else {
                    alert(res.msg);
                }
            });
        }
    }

    $('#image-input').on('change', function () {
        if (this.files.length > 0) sendMessage();
    });

    $(document).ready(function() {
        setInterval(loadNewMessages, 2000);

        $('.conversation').on('click', function() {
            $('.conversation').removeClass('active');
            $(this).addClass('active');
            currentConversationId = $(this).data('id');
            $('#chat-title').text('Đang chat với #' + currentConversationId);
            $('#chat-box').empty();
            lastMessageId = 0;
            loadNewMessages();
        });

        $('#message-input').on('keydown', function(e) {
            if (e.key === 'Enter' && e.shiftKey) {
                e.preventDefault();
                const text = $(this).val().trim();
                console.log('Shift+Enter pressed, text:', text);
                if (checkQuickCommand(text)) {
                    console.log('Quick command expanded, waiting for next Shift+Enter');
                    return;
                }
                sendMessage();
            }
        });

        // Preload quick commands on page load
        $.get("<?php echo url('lord/Chat/getQuickCommands'); ?>", function(res) {
            if (res.status == 1) {
                quickCommands = res.commands || [];
                console.log('Initial quickCommands load:', quickCommands);
            } else {
                console.log('Failed to load quick commands:', res.msg);
            }
        });
    });

        $('#message-input').on('keypress', function(e) {
            if (e.which == 13) {
                const text = $(this).val().trim();
                if (checkQuickCommand(text)) {
                    return;
                }
                //sendMessage();
            }
        });
</script>

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