<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 10:21
 * PHP面向对象的程序设计
 */
class Person
{
    var $name = 100;              //在类中声明成员属性时，必须有关键字修饰，public，private， static， var
    var $age;
    var $sex;

    function test()
    {
        echo "对象练习";
        echo $this->name;
    }

    //test();
}

class oop1
{

}

$s = new Person;
$s->test();