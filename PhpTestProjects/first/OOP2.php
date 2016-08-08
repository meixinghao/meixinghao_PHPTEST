<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 11:20
 * 对象中成员的访问
 */

class Person{

    var $name;
    var $age;
    var $gander;

    function run(){
        echo "这是一个人<br>" ;
;
    }
}

$Person1 = new Person();
$Person2 = new Person();
$Person3 = new Person();

$Person1->name = "张三";
$Person1->age = "20";
$Person1->gander = "男";

$Person2->name = "李四";
$Person2->age = "21";
$Person2->gander = "男";

$Person3->name = "王五";
$Person3->age = "22";
$Person3->gander = "男";

echo $Person1->name . "<br>";
echo $Person1->age . "<br>";
echo $Person1->gander . "<br>";
$Person1->run();

echo $Person2->name . "<br>";
echo $Person2->age . "<br>";
echo $Person2->gander . "<br>";
$Person1->run();

echo $Person3->name . "<br>";
echo $Person3->age . "<br>";
echo $Person3->gander . "<br>";
$Person1->run();

//特殊的对象引用
class Test{
    var $A = 100;
    function Prt(){
        echo "对自身的引用：".$this->A;              //对自身的引用
    }
}
$Test = new Test();
$Test->Prt();