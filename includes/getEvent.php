<?php

global $client, $message, $event;
if (strtolower($message['text']) == "get event" || $message['text'] == "取得事件") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => "OnMessage 訊息事件 : "
                        ."\n 事件屬性 event.type : ".$event["type"]
                        ."\n 事件訊息屬性 event.message.type : ".$event["message"]["type"]                        
            )
        )
    ));
}