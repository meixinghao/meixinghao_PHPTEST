<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/29
 * Time: 14:30
 */

session_start();

$_SESSION["username"] = "meixinghao";
$_SESSION["id"] = 1;
unset($_SESSION["username"]);    //释放这个变量，不要unset($_SESSION)删除整个数组，这样将不能再通过$_SESSION超全局数组注册变变量了。
$_SESSION = array();             //将某个用户在session中注册的变量全部删除
echo session_name();               //获取session的名字，在php.ini中的session.name可以设置

setcookie(session_name(), '', time() - 3600, '/');
var_dump(isset($_COOKIE[session_name()]));
echo dirname(__FILE__);
echo posix_getpid();
//session_destroy();

