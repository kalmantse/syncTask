<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-22
 * Time: 下午3:09
 */

require(__DIR__ . "/../beanstalkd.php");

$pool = new Swoole\Process\Pool(4);

$pool->on('WorkerStart', function ($pool, $workerId) use ($pheanstalk) {
    echo "worker#{$workerId} is started \n";

    while (true) {
        try {

            $job = $pheanstalk->watch('TestTube')->reserve(); //无数据会阻塞

            echo 'JOB-[' . $job->getId() . ']: ' . $job->getData();
            echo "\r\n";

            $pheanstalk->delete($job);

        } catch (\Exception $e) {
        }

        usleep(10000);
    }
});

$pool->on("WorkerStop", function ($pool, $workerId) {
    echo "Worker#{$workerId} is stopped\n";
});

$pool->start();


