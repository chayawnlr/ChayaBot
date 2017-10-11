<?php
$access_token = '3mtLEnhPD9E+x+M1FTAqcH4jzk7etJcLMYkvv6XdBUVDeQYD8z/m32f5V4t9RThqf6a+v+gBT+iEvSCfDT4kqADSlrg7ECuavqCyuOR8f1NWuVoLEmjYsnJsxO77oh/vl496Nh1j2D/RR7h16ZolhwdB04t89/1O/w1cDnyilFU=
';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
