<?php
namespace app\Controllers;

use Longman\TelegramBot\Entities\CallbackQuery;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Request;

class CallBackQueryController {
    public function index(CallbackQuery $CallBackQuery) {
        Request::sendMessage([
            'chat_id' => $CallBackQuery->getFrom()->getId(),
            'text' => $CallBackQuery->getData(), 
        ]);
    }
}