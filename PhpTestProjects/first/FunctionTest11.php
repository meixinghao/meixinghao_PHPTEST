<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/31
 * Time: 19:12
 * 构造方法
 * 析构方法
 * __tostring()方法
 * __get,__set()
 * __call()
 * __clone
 * __autoload()自动加载类
 */
class ConsTest
{
    private $value1;
    private $value2;
    var $info;

    function __construct($name, $sex)
    {
        echo "姓名:" . $name . "\n";
        echo "性别:" . $sex . "\n";
    }

    function __destruct()
    {
        echo $this->info;
    }

    function __toString()
    {
        return "使用__toString()方法打印出一个对象\n";
    }

    function __set($propertyname, $value)
    {
        $this->$propertyname = $value;
    }

    function prt()
    {
        echo $this->value1 . PHP_EOL . $this->value2 . PHP_EOL;
    }

    function __get($propertyname)
    {     //加上private防止对象外部调用
        return $this->$propertyname;
    }

    function __call($funcname, $argname)
    {
        echo "您调用的方法" . $funcname . "不存在\n";
    }

    function __clone()
    {
        echo "我是一个克隆对象\n";
    }

    function __autoload($classname)
    {
        include(strtolower($classname) . ".php");
    }
}

$constest = new ConsTest('梅兴昊', '男');
$constest->info = '程序结束，拜拜';
$constest->value1 = "使用set传值1";
$constest->value2 = "使用set传值2";
$constest->prt();
echo $constest->value1 . PHP_EOL;
echo $constest;
$constest->none($none);
$constest1 = clone $constest;
$constest1->prt();
$none_class = new oop1();