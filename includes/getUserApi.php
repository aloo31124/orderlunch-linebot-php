<?php

global $client, $message, $event;
if ($message['text'] == "get user" || $message['text'] == "user") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "取得user api: ".file_get_contents("http://192.168.11.96:8081/ehrd/users") 
            )
        )
    ));
}
