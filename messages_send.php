<?php

$message = $_POST['message'];
$token = $_POST['token'];
//121090975

$request_params = [
    'user_id'      => '121090975',
    'random_id'    => mt_rand(20, 99999999),
    'peer_id'      => '88422285',
    'domains'      => 'kostyk163rus',
    'message'      => implode( "", $message),
    'access_token' => implode( "", $token),
    'v'            => '5.92',
];

$url = "https://api.vk.com/method/messages.send?" . http_build_query($request_params);
print_r(file_get_contents($url));

//'chat_id'      => '121090975',
//100000000
//121090975