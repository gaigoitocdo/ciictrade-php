<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Request;

class Chat extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['uid'])) {
    		$this->redirect('index/index');
    	}
        $uid = $_SESSION['uid'];
        $user = Db::table('wp_userinfo')->where('uid', $uid)->find();
        // Lấy conversation hoặc tạo mới
        $conversation = Db::table('wp_chat_conversations')
            ->where('user_id', $uid)
            ->find();
        if (!$conversation) {
            $admin = Db::table('wp_userinfo')->where('role', 'admin')->order('rand()')->find();
            if ($admin) {
                $conversation_id = Db::table('wp_chat_conversations')->insertGetId([
                    'user_id' => $uid,
                    'admin_id' => $admin['uid'],
                    'last_message_time' => date('Y-m-d H:i:s')
                ]);
                $conversation = Db::table('wp_chat_conversations')->where('conversation_id', $conversation_id)->find();
if ($conversation) {
    $hasMsg = Db::table('wp_chat_messages')
        ->where('conversation_id', $conversation['conversation_id'])
        ->count();

    if ($hasMsg == 0) {
        $domain = request()->host(); // hoặc request()->domain()
        $greet = "Xin chào {$user['username']}\n"
               . "Hệ thống CSKH của {$domain} rất hân hạnh được phục vụ quý khách!\n"
               . "Chúng tôi có thể hỗ trợ gì cho bạn?";

        Db::table('wp_chat_messages')->insert([
            'conversation_id' => $conversation['conversation_id'],
            'sender_id'       => 0,            // admin/system
            'content'         => $greet,
            'message_type'    => 'text',
            'sent_at'         => date('Y-m-d H:i:s'),
            'is_read'         => 0,
        ]);

        // vì là tin nhắn từ admin → tăng số chưa đọc phía user
        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation['conversation_id'])
            ->inc('user_unread_count')
            ->update(['last_message_time' => date('Y-m-d H:i:s')]);
    }
}
            }
        }
        $this->assign('conversation', $conversation);
        return $this->fetch();
    }

public function sendMessage(Request $request)
{
    if (!isset($_SESSION['uid'])) {
        $this->redirect('index/index');
    }
    $uid = $_SESSION['uid'];
    $data = $request->post();
    $conversation_id = $data['conversation_id'];
    $content = $data['content'];
    $message_type = $data['type'];

    // Đếm số tin nhắn trước đó của chính user trong hội thoại này
    $userMsgCountBefore = Db::table('wp_chat_messages')
        ->where('conversation_id', $conversation_id)
        ->where('sender_id', $uid)
        ->count();

    if ($message_type == 'image') {
        $file = $request->file('image');
        if ($file) {
            $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
            if ($info) {
                $content = '/uploads/' . $info->getSaveName();
            } else {
                return json(['status' => 0, 'msg' => 'Upload failed']);
            }
        }
    }

    // chèn tin nhắn của khách
    $message_id = Db::table('wp_chat_messages')->insertGetId([
        'conversation_id' => $conversation_id,
        'sender_id'       => $uid,
        'content'         => $content,
        'message_type'    => $message_type,
        'sent_at'         => date('Y-m-d H:i:s'),
        'is_read'         => 0
    ]);

    // tăng chưa đọc cho admin
    Db::table('wp_chat_conversations')
        ->where('conversation_id', $conversation_id)
        ->inc('admin_unread_count')
        ->update(['last_message_time' => date('Y-m-d H:i:s')]);

    // Nếu đây là tin NHẮN ĐẦU TIÊN của khách → tự động phản hồi
    if ($userMsgCountBefore == 0) {
        $autoReply = "Yêu cầu của quý khách đã được tiếp nhận, xin vui lòng chờ trong giây lát.";
        Db::table('wp_chat_messages')->insert([
            'conversation_id' => $conversation_id,
            'sender_id'       => 0, // admin/system
            'content'         => $autoReply,
            'message_type'    => 'text',
            'sent_at'         => date('Y-m-d H:i:s'),
            'is_read'         => 0
        ]);

        // vì là tin nhắn từ admin → tăng chưa đọc cho user
        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->inc('user_unread_count')
            ->update(['last_message_time' => date('Y-m-d H:i:s')]);
    }

    return json(['status' => 1, 'msg' => 'Sent']);
}


    public function getNewMessages(Request $request)
    {
        if (!isset($_SESSION['uid'])) {
    		$this->redirect('index/index');
    	}
        $uid = $_SESSION['uid'];
        $conversation_id = $request->post('conversation_id');
        $last_message_id = $request->post('last_message_id', 0);

        $messages = Db::table('wp_chat_messages')
            ->where('conversation_id', $conversation_id)
            ->where('message_id', '>', $last_message_id)
            ->order('sent_at', 'asc')
            ->select();

        // Đánh dấu tin nhắn từ admin là đã đọc
        Db::table('wp_chat_messages')
            ->where('conversation_id', $conversation_id)
            ->where('sender_id', '<>', $uid)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);

        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->update(['user_unread_count' => 0]);

        return json(['status' => 1, 'messages' => $messages]);
    }

    public function getUnreadCount()
    {
        if (!isset($_SESSION['uid'])) {
    		$this->redirect('index/index');
    	}
        $uid = $_SESSION['uid'];
        $count = Db::table('wp_chat_conversations')
            ->where('user_id', $uid)
            ->value('user_unread_count');
        return json(['status' => 1, 'count' => $count ?: 0]);
    }
}
?>