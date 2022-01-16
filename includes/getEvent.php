<?php

global $client, $message, $event;
if (strtolower($message['text']) == "get event" || $message['text'] == "取得事件") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text',
                'text' => " event : ".json_encode($event)
            )
        )
    ));
}