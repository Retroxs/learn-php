<?php
require 'vendor/autoload.php';
use GuzzleHttp\Client;

// function ttp(){
//     return Client;
// }
// $client = new Client([
//     // Base URI is used with relative requests
//     'base_uri' => 'http://127.0.0.1:3000',
//     // You can set any number of default request options.
//     'timeout'  => 2.0,
// ]);
// $response = $client->request('GET', '/api/wechat/test');
try{
    $client = new Clinet();
    echo "==================";
}catch(Exception $e){
echo "===========";
}
?>