<?php
/**
 * 管道
 */

require(__DIR__ . "/../beanstalkd.php");

//$job = $pheanstalk->watch('newUsers')    // 同时监听多个管道
//                    ->watch('default')
//                    ->ignore('default'); // 忽略制定管道
//
//$listTubesWatched = $pheanstalk->listTubesWatched(); // list 监听的管道
//
//print_r($listTubesWatched);
//
//


//===================

//没有job 则一直阻塞
$job = $pheanstalk->watch('newUsers')->reserve(); //reserve 以阻塞的方式监听管道中ready 状态的任务，按优先级顺序
print_r($job);

if($job){
    $pheanstalk->delete($job);
}

//===================
