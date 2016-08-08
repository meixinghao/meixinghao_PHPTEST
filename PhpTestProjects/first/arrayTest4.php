<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 15:53
 * 预定义数组
 */

//服务器变量
foreach($_SERVER as $key => $value){
    print_r ('$_SERVER['.$key.'] = '.$value . "\n");
}

print_r($_SERVER);

echo $_SERVER['REMOTE_ADDR'];

//环境变量
foreach($_ENV as $key => $value){
    echo '$_ENV['.$key.']='.$value."\n";
}

