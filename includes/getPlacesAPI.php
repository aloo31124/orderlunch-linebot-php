<?php

global $client, $message, $event;
if (strtolower($message['text'] == "get api") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "取得 google place 地址: "
            )
        )
    ));
}
