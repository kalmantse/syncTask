<?php
require "vendor/autoload.php";

use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1', '11300');

$result = $pheanstalk->stats();

print_r($result);

