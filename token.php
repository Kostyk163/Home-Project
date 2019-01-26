<?php

$access = [
  'friends', 'messages', 'ads' , 'groups'
];

$request_params = [
    'client_id'     => '6833752',
    'display'       => 'page',
    'redirect_url'  => 'https://oauth.vk.com/blank.html',
    'scope'         => implode( ',' , $access),
    'response_type' => 'token',
    'v'             => '5.92'
];

$url = "https://oath.vk.com/authorize?" . http_build_query($request_params);

echo $url;