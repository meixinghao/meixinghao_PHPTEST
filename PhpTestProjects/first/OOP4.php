<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 14:10
 * 封装性
 * 封装性的原则就是要求对象以外的部分不能随意存取对象内部的数据（成员属性和成员方法）。
 * 从而有效避免了外部错误对它的”交叉感染“，使软件错误能够局部化，大大减小查错和排错的难度
 */

//设置私有成员
class Person {

    private $name;
    private $sex;
    private $age;

    function  __construct($name="",$sex="男",$age="22"){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    function run(){
        echo $this->name . "在跑步\n";
    }

    private function leftLeg(){
        echo "迈左腿";
    }
}
$person = new Person("梅兴昊");
$person->run();
//$person->leftLeg();     //错误的调用
//echo $person->name;       //错误的调用


//私有成员的访问
//在对象外部可以将公有的方法作为访问接口，间接地访问对象内部私有成员
class Person1{

    private $name;
    private $sex;
    private $age;

    function __construct($name="",$sex="",$age=""){
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    public function getName(){
        return $this->name;
    }

    public function  setName($name){
        $this->name = $name;
    }


}

$person1 = new Person1("梅兴昊\n");
echo $person1->getName();
$person1->setName("奥巴马\n");
echo $person1->getName();