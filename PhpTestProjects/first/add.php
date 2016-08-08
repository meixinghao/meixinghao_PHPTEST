<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 18:04
 */

//HTTP POST 变量 $_POST

echo "用户添加联系人的信息如下：<br>";
foreach($_POST as $key => $value){
    echo $key.':'.$value.'<br>';
}