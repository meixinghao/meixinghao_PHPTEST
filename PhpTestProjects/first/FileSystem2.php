<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 17:02
 */
//echo pow(2,3);
//print_r(stat("/Users/apple/PhpstormProjects/first/first.php"));
//目录的基本操作

//函数basename(string path, string suffix)，获取路径中文件名
//第一个参数是文件路径，第二个参数是文件扩展名是可选的
$path = "/Users/apple/PhpstormProjects/first/add.php";
echo basename($path) . "\n";
echo basename($path, "php") . "\n";


//函数dirname()与basename()的功能相反，他是去掉文件名，返回路径字符串
echo dirname($path);

//函数pathinfo(),返回一个关联数组,包括目录名，基本名和扩展名
$pathInfo = pathinfo($path);
print_r($pathInfo);

