<?php

global $client, $message, $event;
if ($message['text'] == "get api") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => "取得api: " //回覆訊息
            )
        )
    ));
}
