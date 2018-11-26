<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-26
 * Time: 下午2:26
 */
require __DIR__ . '/../../vendor/autoload.php';

use \GuzzleHttp\Client;
use \GuzzleHttp\Psr7\Request;

$client = new Client();
$url = 'https://blog.wecot.cn';
$response = $client->request('GET', $url, [
    'timeout' => 3000
]);

//echo $response->getStatusCode(), "\r\n";
//echo $response->getHeader('content-type');
//echo $response->getBody();
//echo $response->getBody()->read(10); // 读出 10 个字节

$request = new Request('GET', $url);

$promise = $client->sendAsync($request)->then(function ($response) {

    //echo $response->getStatusCode();
    echo 'Execute this 【secondly】 ', PHP_EOL;
});

echo 'Execute this 【firstly】 ', PHP_EOL;

$promise->wait();

echo 'Execute this 【finally】 ', PHP_EOL;