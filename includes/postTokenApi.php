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
    $url = 'https://googleplacesapi.herokuapp.com/auth';
    $data = array('username' => 'adm', 'password' => 'QazWsxEdc');

    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => http_build_query($data)
        )
    );

    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === FALSE) { return "header error :( " }

    return var_dump($result);
}
