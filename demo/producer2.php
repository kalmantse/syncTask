<?php
/**
 * Created by PhpStorm.
 * User: wecot
 * Date: 18-11-22
 * Time: 下午3:09
 */

require(__DIR__ . "/../beanstalkd.php");


//product
try {
    $res = $pheanstalk->useTube('TestTube')->put(json_encode([
        'username' => $_GET['username'],
        'password' => $_GET['password'],
    ]));

    echo "JOB-{$res}" . PHP_EOL;

} catch (\Exception $e) {

}
?>

<html>
<head></head>
<body>
<div style="width:230px">
    <form action="">
        <lable style="display: block">姓名：<input type="text" name="username"></lable>
        <lable style="margin-bottom: 30px">密码：<input type="text" name="password"></lable>
        <button style="display: block;float: right" type="submit">提交</button>
    </form>
</div>
</body>
</html>

