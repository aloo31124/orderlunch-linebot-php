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
        'lat' => '99999.2',
        'lng' => '11111.23'
    );

    $ch = curl_init("https://googleplacesapi.herokuapp.com/places");
    curl_setopt_array($ch, array(
        CURLOPT_POST => TRUE,
        CURLOPT_RETURNTRANSFER => TRUE,
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer eyJhbGciOiJIUzI1NiJ9.eyJ1c2VybmFtZSI6ImFkbSIsImV4cCI6MTY0MDI2MjM0MX0.azh5kUod-_0C8bSWI4YuZE04kRaPmnPZ42mi7lrzhuM'
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
