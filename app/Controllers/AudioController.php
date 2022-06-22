<?php
namespace app\Controllers;

use app\Models\User;
use Longman\TelegramBot\Entities\Message;
use Longman\TelegramBot\Request;

class AudioController {
    public function index(Message $Message) {
        Request::sendMessage([
            'chat_id' => $Message->getFrom()->getId(),
            'text' => "Hello Friend", 
        ]);

        // $user = User::Create([    'name' => "Ahmed Khan",    'email' => "ahmed.khan@lbs.com",    'password' => password_hash("ahmedkhan",PASSWORD_BCRYPT), ]);

    }

}