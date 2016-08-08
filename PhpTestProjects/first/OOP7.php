<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 17:12
 * 子类中重载父类的方法
 * 注意 ：子类中重写的方法访问权限不能低于父类中方法的权限，只能大于或等于
 */

class Person{

    protected $name;
    protected $age;
    protected $sex;

    function __construct($name="",$age="",$sex=""){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function say(){
        echo "人对象中的say方法\n";
    }
}

class Student extends Person{

    private $StudentName;

    function __construct($name="",$age="",$sex="",$StudentName=""){
        parent::__construct($name,$age,$sex);
        $this->StudentName = $StudentName;
    }


    function say(){
        parent::say();
        echo "学生重载后新添加的方法\n";
    }
}

$Student = new Student("梅兴昊","22","男","奥巴马");
$Student->say();