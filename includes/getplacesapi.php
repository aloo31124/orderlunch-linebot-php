<?php

global $client, $message, $event;
if ($message['text'] == "get api") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "取得api: " + file_get_contents("https://googleplacesapi.herokuapp.com/places") 
            )
        )
    ));
}
