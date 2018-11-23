<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

//$job = $pheanstalk->watch('newUsers')->reserve();

print_r($pheanstalk->statsTube('newUsers'));
$job = $pheanstalk->peekBuried('newUsers');// 读取已经ready状态的任务
print_r($job);
$pheanstalk->delete($job);



