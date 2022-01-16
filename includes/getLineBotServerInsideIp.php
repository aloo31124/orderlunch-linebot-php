<?php

global $client, $message, $event;
if (strtolower($message['text']) == "get line bot server inside ip" ||  $message['text']) == "get server inside ip" || $message['text'] == "get server ip") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "get line bot server inside ip : ".$_SERVER['HTTP_HOST']
            )
        )
    ));
}
