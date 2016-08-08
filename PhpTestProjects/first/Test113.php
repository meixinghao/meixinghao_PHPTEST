<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/31
 * Time: 20:23
 * 父类子类的继承
 */
class Person
{
    static $sex;
    const  AGE = 22;
    private $private_value = 10;
    protected $height;                  //protected 类型的成员和方法在子类和子类的子类中都可以操作，但是在类外部不能操作

    function PersonSay($name)
    {
        echo "我的名字是" . $name . PHP_EOL;
        echo "性别：" . self::$sex . "\n";
    }

    function ParentMethod()
    {
        echo "父类方法\n";
        echo self::AGE . "\n";
    }

    static function staticMethod(){
        echo "静态方法\n";
    }

}


class Student extends Person
{
    function StudentSay()
    {
        parent::$sex = "男";
        $this->PersonSay("梅兴昊");
    }

    function ParentMethod()
    {
        echo "重写父类方法\n";
        echo self::AGE . PHP_EOL;
        $this->height = 170;
        echo $this->height;
        parent::staticMethod();
        //echo $this->private_value  //私有成员不能被继承，私有方法也一样
    }
}

$person = new Person();
$student = new Student();
$student->StudentSay();
$student->ParentMethod();
$person->ParentMethod();
//$person->height = 171;            //类外部不能操作protected的成员，
//echo $person->height;
final class FinalClass
{

}

/*class FinalClass1 extends FinalClass{
    //final类不能被继承
}*/


