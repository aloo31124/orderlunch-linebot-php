<?php

global $client, $message, $event;
if ($message['text'] == "post token") {
    $client->replyMessage(
        array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "取得api: "
            )
        )
    ));
}

function getToken(){
 return " loulou token test~~~";
}
