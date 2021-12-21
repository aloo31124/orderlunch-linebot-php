<?php

global $client, $message, $event;
if ($message['text'] == "post token") {
    $client->replyMessage(
        array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "取得 token : ".getToken()
            )
        )
    ));
}

function getToken(){
 return " loulou token test~~~";
}
