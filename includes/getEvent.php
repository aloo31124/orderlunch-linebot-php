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
                        ."\n"
                        ."\n訊息屬性 event.message.type:".$event["message"]["type"]                
                        ."\n訊息id event.message.id:".$event["message"]["id"]
                        ."\n訊息回應文字 event.message.text:".$event["message"]["text"]
                        ."\n"
                        ."\n事件時間 event.timestamp:".date('Y-d-m H:i:s',$event["timestamp"])
                        ."\n"
                        ."\n來源的屬性 event.source.type:".$event["source"]["type"]
                        ."\n來源使用者id event.source.userId:".$event["source"]["userId"]
                        ."\n來源群組id event.source.groupId:".$event["source"]["groupId"]
                        ."\n"
                        ."\n reply token : ".$event["replyToken"]
                        ."\n mode(?) : ".$event["mode"]
                        ."\n"
                        ."\n完整 event: ".json_encode($event)
            )
        )
    ));
}