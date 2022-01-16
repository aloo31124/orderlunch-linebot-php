<?php

global $client, $message, $event;
if (strtolower($message['text']) == "get event" || $message['text'] == "取得事件") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => "OnMessage 訊息事件 : "
                        ."\n事件屬性 event.type:".$event["type"]
                        ."\n訊息屬性 event.message.type:".$event["message"]["type"]                
                        ."\n訊息id event.message.id:".$event["message"]["id"]
                        ."\n訊息回應文字 event.message.text:".$event["message"]["text"]
                        ."\n事件時間 event.timestamp:".date('Y-d-m H:i:s',$event["timestamp"])
            )
        )
    ));
}