<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-21
 * Time: 下午5:09
 */

require __DIR__. "/../vendor/autoload.php";


use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', '11300');

$result = $pheanstalk->stats();

print_r($result);