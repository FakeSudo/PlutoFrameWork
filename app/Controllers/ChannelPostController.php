<?php
namespace app\Controllers;

use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Request;

class ChannelPostController {
    public function index(Update $Update) {
        Request::sendMessage([
            'chat_id' => $Update->getEditedMessage()->getFrom()->getId(),
            'text' => json_encode($Update), 
        ]);
    }
}