<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/29
 * Time: 10:28
 */
setcookie("user[name]", "梅兴昊");
setcookie("user[password]", md5("123456"));
setcookie("user[email]", "940634689@qq.com");
foreach ($_COOKIE["user"] as $key => $value) {
    echo $key . ":" . $value . "<br>";
}
echo time()-1;
//print_r($_COOKIE["user"]);

