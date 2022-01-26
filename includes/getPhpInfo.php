<?php

global $client, $message, $event;
if ($message['text'] == "get php info" || $message['text'] == "php") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "php info : ".phpinfo()
            )
        )
    ));
}
