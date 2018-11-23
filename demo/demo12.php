<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");


$tube = $pheanstalk->useTube('newUsers');

$tube->watch('newUsers')->reserve();
$tube->put('hello_1');
$tube->put('hello_2');
$tube->put('hello_3');
$tube->put('hello_4');




