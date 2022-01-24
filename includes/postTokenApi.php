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
    $postData = array(
        'username' => 'adm',
        'password' => 'QazWsxEdc~'
    );

    $ch = curl_init("https://googleplacesapi.herokuapp.com/auth");
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

    try
    {
        $response = curl_exec($ch);
    
        if($response === FALSE){
            die(curl_error($ch));
        }
    
        // Decode the response
        $responseData = json_decode($response, TRUE);
    
        // Close the cURL handler
        curl_close($ch);
    
        // Print the date from the response
        return $responseData['token'];

    }
    catch (Exception $e) 
    {
        return  ' getToken() Caught exception: '.$e ,  $e->getMessage(), "\n";
    }
    return 'error final !! ';
}
