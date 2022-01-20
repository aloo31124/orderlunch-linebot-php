<?php

global $client, $message, $event;
if (strtolower($message['text']) == "get ip" ||  strtolower($message['text']) == "get server inside ip" 
    || strtolower($message['text']) == "get server ip") {
    $client->replyMessage(array(
        'replyToken' => $event['replyToken'],
        'messages' => array(
            array(
                'type' => 'text', 
                'text' => "get line bot server inside ip 4 ::"
                                                        ."\n HTTP_HOST: ".$_SERVER['HTTP_HOST'] //當前請求的 Host: 頭部的內容。                                                        
                                                        ."\n HTTP_X_FORWARDED_HOST: ".$_SERVER['HTTP_X_FORWARDED_HOST']
                                                        ."\n"
                                                        ."\n REMOTE_ADDR: ".$_SERVER['REMOTE_ADDR'] //正在瀏覽當前頁面用戶的 IP 地址,就是訪客的IP
                                                        ."\n REMOTE_HOST: ".$_SERVER['REMOTE_HOST'] //正在瀏覽當前頁面用戶的主機名
                                                        ."\n REMOTE_PORT: ".$_SERVER['REMOTE_PORT'] //用戶連接到服務器時所使用的端口
                                                        ."\n"
                                                        ."\n SERVER_ADDR: ".$_SERVER['SERVER_ADDR'] //當前運行腳本所在服務器主機的IP。
                                                        ."\n SERVER_NAME: ".$_SERVER['SERVER_NAME'] //當前運行腳本所在服務器主機的名稱。
                                                        ."\n SERVER_SOFTWARE: ".$_SERVER['SERVER_SOFTWARE'] //當前運行腳本所在服務器主機的名稱。
                                                        ."\n SERVER_NAME: ".$_SERVER['SERVER_NAME'] //服務器標識的字串，在響應請求時的頭部中給出。
                                                        ."\n SERVER_PROTOCOL: ".$_SERVER['SERVER_PROTOCOL'] //請求頁面時通信協議的名稱和版本。例如，「HTTP/1.0」
            )
        )
    ));
}
