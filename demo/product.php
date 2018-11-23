<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-22
 * Time: 下午3:09
 */

require(__DIR__ . "/../beanstalkd.php");


// 定时写入任务
$msec = 10; // 10 毫秒

swoole_timer_tick($msec, function () use ($pheanstalk) {

    //product
    $data = 'input rand[' . rand(9999, 9999999) . ']';

    $time = 'time is :' . date('Y-m-d H:i:s');

    $res = $pheanstalk->useTube('TestTube')->put($data . $time);

    echo "JOB-{$res}".PHP_EOL;
});
