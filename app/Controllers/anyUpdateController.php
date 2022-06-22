<?php
namespace app\Controllers;
use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Request;

class anyUpdateController {
    public function index(Update $Update) {
        Request::sendMessage([
            'chat_id' => $Update->getMessage()->getFrom()->getId(),
            'text' => json_encode($Update->getMessage()->getType()), 
        ]);
    }
}