<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/31
 * Time: 20:29
 */
class Cons
{

    private $propertyname1;
    private $propertyname2;

    /**
     * 构造方法
     */
    function __construct($name, $age)
    {
        echo "姓名：" . $name . "\n";
        echo "年龄" . $age . "\n";
    }

    /**
     * 析构方法
     */
    function __destruct()
    {
        echo "程序结束了，拜拜";
    }

    /**
     * __toString()方法
     */
    function __toString()
    {
        return "我是一个对象，我被__toString 输出了\n";
    }

    /**
     * __get()方法
     */
    function __get($propertyname)
    {
        return "使用————get方法取私有值" . $this->$propertyname;
    }


    /**
     * __set()方法
     */
    function __set($propertyname, $value)
    {
        $this->$propertyname = $value;
    }

    function prt()
    {
        echo $this->propertyname1;
        echo $this->propertyname2;
    }

    /**
     * __call()方法
     */
    function __call($classname, $args)
    {
        echo "你调用的方法" . $classname . "不存在\n";
    }

    /**
     * 克隆方法
     */
    function __clone()
    {
        echo "我是一个克隆的对象\n";
    }


    function prt1()
    {
        echo "克隆对象打印\n";
    }


}

function __autoload($classname)
{
    echo "调我了";
    include(strtolower($classname) . ".php");
}

$cons = new Cons('梅兴昊', '22');
echo $cons;
$cons->propertyname1 = "使用__set()方法传值1\n";
$cons->propertyname2 = "使用__set()方法传值2\n";
$cons->prt();
echo $cons->propertyname1;
$cons->noneMethod();
$cons1 = clone $cons;
$cons1->prt1();
$cons3 = new first();