<?php
/**
 * 使用自定义函数库
 * 是一种设计模式，不是定义函数的php方法
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 13:45
 */

//require_once 'functionTest4.php';         //require 一般放在文件最上方
require 'functionTest4.php';
include functionTest4.php;    //include 一般放在循环语句中
include_once functionTest4.php;



