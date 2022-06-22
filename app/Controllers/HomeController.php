<?php
namespace app\Controllers;

use Longman\TelegramBot\Entities\Message;
use Longman\TelegramBot\Request;

class HomeController{
    public function index(Message $Message){        
        Request::sendMessage([
            'chat_id' => $Message->getFrom()->getId(),
            'text' => 'Message From HomeController Controller',
            'reply_markup' => json_encode([
                'inline_keyboard' => [
                    [['text' => 'Test', 'callback_data' => 'TestCallback']]
                ]
            ])
        ]);
    }
}