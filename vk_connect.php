<?php
$user_id  = 88422285;
$request_params = array(

    'user_id' => $user_id,
    'fields' => 'first_name' . 'last_name' . 'bdate' . 'country' . 'city',
    'V' => '5.92',
    'access_token' => '533bacf01e11f55b536a565b57531ac114461ae8736d6506a3'
);

$get_params = http_build_query($request_params);
$result = json_decode(file_get_contents('https://api.vk.com/method/users.get?'.$get_params));
echo ($result -> respons[4] -> first_name -> last_name -> bdate -> country -> city);

$file_info = "";
$result = $file_info;
file_put_contents('info_vk.txt', '$file_info', FILE_APPEND);