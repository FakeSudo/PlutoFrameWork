<?php
namespace app\Controllers;

use Longman\TelegramBot\Entities\Update;
use Longman\TelegramBot\Request;

class EditedMessageController {
    public function index(Update $Message) {
        Request::sendMessage([
            'chat_id' => $Message->getEditedMessage()->getFrom()->getId(),
            'text' => json_encode($Message), 
        ]);
    }
}