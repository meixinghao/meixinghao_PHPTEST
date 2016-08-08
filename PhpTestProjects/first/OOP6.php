<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 16:08
 * 继承性
 */

class Person{
    var $name;
    var $age;
    protected $sex;
    private $birthday;

    function __construct($name="",$age="",$sex="")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function run(){
        echo "公有方法";
    }

    private function say(){
        echo "私有方法";
    }
}

class Student extends Person{
    var $StudentName;
    function test(){
        echo $this->sex . "mjjjjjj";      //对于受保护的protected地属性和方法在子类和子类的子类中都可以继承，但是在子类外部无法访问
    }
}

$student = new Student("梅兴昊","22","男");
$person = new Person("梅兴昊","22","男");
$student->test();
echo $student->name;
//echo $student->sex;
echo $student->age;
//echo $student->birthday;            //子类不能从继承父类的私有成员属性和私有方法
$student->run();