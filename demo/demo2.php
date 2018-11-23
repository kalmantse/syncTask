<?php
/**
 * 管道
 */
require __DIR__. "/../vendor/autoload.php";


use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', '11300');

// 监听管道（创建管道）
$usrTube = $pheanstalk->watch('userTube');
print_r($usrTube->stats());

//查看管道列表
$result = $pheanstalk->listTubes();
//print_r($result); //default 默认管道

//管道状态
$statsTube = $pheanstalk->statsTube('default');
//print_r($statsTube);



$usrTube = $pheanstalk->useTube('userTube');
//print_r($usrTube->);

//print_r($result);