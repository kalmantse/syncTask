<?php
/**
 * 管道
 */
require __DIR__. "/../vendor/autoload.php";


use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', '11300');

// 创建使用管道并放入信息
$pheanstalk->useTube('newUsers')->put('test');
$pheanstalk->useTube('newUsers')->put('test2');

//print_r($pheanstalk->listTubes());

$statsTube = $pheanstalk->statsTube('newUsers');


//print_r($statsTube);
//stats

$job = $pheanstalk->watch('newUsers')->reserve();
$jobStats = $pheanstalk->statsJob($job);
//print_r($jobStats);

print_r($jobStats);
$pheanstalk->statsJob($job);


$jobInfo = $pheanstalk->peek($jobStats['id']);

print_r($jobInfo->getData());
