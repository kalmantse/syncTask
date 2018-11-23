<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

$tube = $pheanstalk->useTube('newUsers')->put('member_1');

$job = $pheanstalk->watch('newUsers')->reserve();

$moudule = false;

if (false == $moudule){
    sleep(30);
    $pheanstalk->release($job);//回收到管道  ready 状态
}else{
    $pheanstalk->delete($job);
}



//===================
