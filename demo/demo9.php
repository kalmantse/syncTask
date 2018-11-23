<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

$job = $pheanstalk->watch('newUsers')->reserve();

//sleep(30);

$pheanstalk->bury($job);// 把指定job放到预留状态

$job = $pheanstalk->peekBuried('newUsers');

print_r($pheanstalk->statsJob($job));

$pheanstalk->kickJob($job);// job 变成 ready 状态

print_r($pheanstalk->statsJob($job));

//kick buried -> ready,批量操作 id < N 的所有job 都变成 buried

