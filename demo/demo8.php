<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

$tube = $pheanstalk->statsTube('TestTube');
print_r($tube);