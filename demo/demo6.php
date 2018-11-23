<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

$tube = $pheanstalk->useTube('newUsers');
$tube->put('member_2');



//===================
