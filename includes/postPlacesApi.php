<?php

global $client, $message, $event;
if ($message['text'] == "post places") {
    $client->replyMessage(
        array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "新增 places(寫死) : "
            )
        )
    ));
}
