<?php
/**
 * 管道
 */
require(__DIR__ . "/../beanstalkd.php");


$stats = $pheanstalk->stats();

print_r($pheanstalk->listTubes());

$tube = $pheanstalk->useTube('newUsers');
//$tube->put('member_6',90);
//$tube->put('member_7',2, 50);
//$tube->put('member_8',12);
//$tube->put('member_9',3);
//$tube->put('member_10',1); // 数值越小，优先级越高

//$tube = $pheanstalk->putInTube('newUsers', 66666, 1000);

//$job = $pheanstalk->watch('newUsers')->reserve();

print_r($pheanstalk->statsTube('newUsers'));

//$pheanstalk->delete($job);






