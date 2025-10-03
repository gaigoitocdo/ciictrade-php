<?php
namespace app\lord\controller;
use think\Controller;
use think\Db;
use think\Request;

class Chat extends Base
{
    public function index()
    {
        $conversations = Db::table('wp_chat_conversations')
            ->alias('c')
            ->join('wp_userinfo u', 'c.user_id = u.uid')
            ->field('c.*, u.username')
            ->order('last_message_time', 'desc')
            ->select();
        $this->assign('conversations', $conversations);
        return $this->fetch();
    }

    public function chat($conversation_id)
    {
        $conversation = Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->find();
        if (!$conversation) {
            return $this->error('Conversation not found');
        }
        $this->assign('conversation', $conversation);
        return $this->fetch('chat');
    }

    public function sendMessage(Request $request)
    {
        $data = $request->post();
        $conversation_id = $data['conversation_id'];
        $content = $data['content'];
        $message_type = $data['type'];

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
        } elseif ($message_type == 'text' || $message_type == 'icon') {
            $content = str_replace("\r\n", "\n", $content);
            $content = htmlspecialchars($content, ENT_QUOTES, 'UTF-8');
        }

        $message_id = Db::table('wp_chat_messages')->insertGetId([
            'conversation_id' => $conversation_id,
            'sender_id' => 0,
            'content' => $content,
            'message_type' => $message_type,
            'sent_at' => date('Y-m-d H:i:s'),
            'is_read' => 0
        ]);

        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->inc('user_unread_count')
            ->update(['last_message_time' => date('Y-m-d H:i:s')]);

        return json(['status' => 1, 'msg' => 'Sent']);
    }

    public function getNewMessages(Request $request)
    {
        $conversation_id = $request->post('conversation_id');
        $last_message_id = $request->post('last_message_id', 0);

        $messages = Db::table('wp_chat_messages')
            ->where('conversation_id', $conversation_id)
            ->where('message_id', '>', $last_message_id)
            ->order('sent_at', 'asc')
            ->select();

        // Decode content and ensure new lines are preserved
        foreach ($messages as &$msg) {
            if ($msg['message_type'] == 'text' || $msg['message_type'] == 'icon') {
                $msg['content'] = htmlspecialchars_decode($msg['content'], ENT_QUOTES);
                // Ensure new lines are \n for consistency
                $msg['content'] = str_replace("\r\n", "\n", $msg['content']);
            }
        }

        Db::table('wp_chat_messages')
            ->where('conversation_id', $conversation_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1]);

        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->update(['admin_unread_count' => 0]);

        return json(['status' => 1, 'messages' => $messages]);
    }

    public function getUnreadCount()
    {
        $count = Db::table('wp_chat_conversations')
            ->sum('admin_unread_count');
        return json(['status' => 1, 'count' => $count ?: 0]);
    }
    
    public function getUnreadCounts(Request $request)
    {
        $data = Db::table('wp_chat_conversations')->select();
        $msg = Db::table('wp_chat_messages')->where('is_read', 0)->count();
        return json(['status' => 1, 'data' => $data, 'msg' => $msg]);
    }

    public function getQuickCommands()
    {
        $commands = Db::table('wp_quick_commands')
            ->select();
        foreach ($commands as &$cmd) {
            $cmd['content'] = htmlspecialchars_decode($cmd['content'], ENT_QUOTES);
            $cmd['command'] = htmlspecialchars_decode($cmd['command'], ENT_QUOTES);
            // Normalize new lines
            $cmd['content'] = str_replace("\r\n", "\n", $cmd['content']);
            $cmd['command'] = str_replace("\r\n", "\n", $cmd['command']);
        }
        return json(['status' => 1, 'commands' => $commands]);
    }

    public function saveQuickCommand(Request $request)
    {
        $data = $request->post();
        if (empty($data['command']) || empty($data['content'])) {
            return json(['status' => 0, 'msg' => 'Command and content are required']);
        }

        // Normalize new lines and encode
        $data['command'] = str_replace("\r\n", "\n", $data['command']);
        $data['content'] = str_replace("\r\n", "\n", $data['content']);
        $data['command'] = htmlspecialchars($data['command'], ENT_QUOTES, 'UTF-8');
        $data['content'] = htmlspecialchars($data['content'], ENT_QUOTES, 'UTF-8');

        if (isset($data['id']) && $data['id']) {
            Db::table('wp_quick_commands')
                ->where('id', $data['id'])
                ->update([
                    'command' => $data['command'],
                    'content' => $data['content'],
                    'updated_at' => date('Y-m-d H:i:s')
                ]);
        } else {
            Db::table('wp_quick_commands')->insert([
                'command' => $data['command'],
                'content' => $data['content'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
        return json(['status' => 1, 'msg' => 'Saved successfully']);
    }

    public function deleteQuickCommand(Request $request)
    {
        $id = $request->post('id');
        Db::table('wp_quick_commands')
            ->where('id', $id)
            ->delete();
        return json(['status' => 1, 'msg' => 'Deleted successfully']);
    }

    public function deleteMessage(Request $request)
    {
        $message_id = $request->post('message_id');
        Db::table('wp_chat_messages')
            ->where('message_id', $message_id)
            ->delete();
        return json(['status' => 1, 'msg' => 'Message deleted']);
    }

    public function deleteConversation(Request $request)
    {
        $conversation_id = $request->post('conversation_id');
        Db::table('wp_chat_messages')
            ->where('conversation_id', $conversation_id)
            ->delete();
        Db::table('wp_chat_conversations')
            ->where('conversation_id', $conversation_id)
            ->delete();
        return json(['status' => 1, 'msg' => 'Conversation deleted']);
    }
}
?>