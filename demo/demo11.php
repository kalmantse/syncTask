<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");



//pauseTube  对管道延迟
$pheanstalk->pauseTube('newUsers', 20000);

$job = $pheanstalk->watch('newUsers')->reserve();

print_r($job);


