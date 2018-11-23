<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-22
 * Time: 下午1:41
 */

require __DIR__ . '/vendor/autoload.php';

use Pheanstalk\Pheanstalk;

//function pp($data, $isExit = true)
//{
//    echo '<pre>';
//    print_r($data);
//    echo '<\pre>';
//    if (!!$isExit) exit;
//}

$pheanstalk = (isset($pheanstalk) && ($pheanstalk instanceof Pheanstalk)) ? $pheanstalk : new Pheanstalk('127.0.0.1', '11300');

return $pheanstalk;