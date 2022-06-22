<?php
namespace app\Controllers;

use Longman\TelegramBot\Entities\InlineQuery;
use Longman\TelegramBot\Request;

class InlineController{
    public function index(InlineQuery $Query){
        Request::sendMessage([
            'chat_id' => $Query->getFrom()->getId(),
            'text' => 'Message From InlineQuery Controller', 
        ]);
    }
}