<?php

global $client, $message, $event;
if (strtolower($message['text']) == "post food server" ) {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', //訊息類型 (文字)
                'text' => "post food server start!! => ".$client->postFoodServer()
            )
        )
    ));
}
