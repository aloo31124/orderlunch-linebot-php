<?php

global $client, $message, $event;
if ($message['text'] == "post places") {
    $client->replyMessage(
        array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "新增 places(寫死) : ".postPlaces()
            )
        )
    ));
}

function postPlaces(){
    $postData = array(
        'lat' => '0487.2',
        'lng' => '0487.23'
    );

    $ch = curl_init("https://googleplacesapi.herokuapp.com/places");
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer '.getToken()
        ),
        CURLOPT_POSTFIELDS => json_encode($postData)
    ));

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
