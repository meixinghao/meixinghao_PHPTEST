<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 15:17
 *__set()和__get()方法 ，也称为魔术方法，用来完成对所用私有属性都能获取和赋值的操作，以及用来检查私有属性是否存在的方法”__isset()“
 * 和”__unset()“删除对象中私有属性的方法
 */
class Person{
    private $name;
    private $sex;
    private $age;

    function __construct($name="",$sex="",$age=""){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function say(){
        echo "我的名字：".$this->name.".";
    }
    function __set($PropertyName, $PropertyValue){
        $this->$PropertyName = $PropertyValue;
    }
}
$person = new Person("梅兴昊");
$person->say();
$person->name = "奥巴马";
$person->say();

class Person1{
    private $name;
    private $sex;
    private $age;

    function __construct($name="",$sex="",$age=""){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function __get($PropertyName){
        return $this->$PropertyName;
    }
}

$person1 = new Person1("梅兴昊");
echo $person1->name;                        //没有$符号
