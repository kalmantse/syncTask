<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-26
 * Time: 下午2:19
 */

require __DIR__. '/../../vendor/autoload.php';

$client = new \GuzzleHttp\Client();
$response = $client->request('GET', 'http://www.wecot.cn', [
    'timeout' => 3000
]);

echo $response->getStatusCode(), "\r\n";

$header = $response->getHeader('content-type');
print_r($header);

//echo $response->getBody();