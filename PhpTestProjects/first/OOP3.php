<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 11:53
 * 构造方法 ： 对象创建完成后第一个被对象自动调用的方法
 * 与析构方法 ： 对象在销毁之前最后一个被对象自动调用的方法
 */

//构造函数
class Construct{
    var $name;
    var $age;
    var $gander;
    function __construct($n="", $a="", $g=""){          //使用默认参数，可以实现函数重载
        echo "构造方法测试\n";
        $this->name = $n;
        $this->age = $a;
        $this->gander = $g;
    }

    function prin(){
        echo $this->name."\n";
        echo $this->age."\n";
        echo $this->gander."\n";
    }
}

$c = new Construct("习近平", 60, "男");
$c->prin();

//析构函数
class Destructed{
    var $name;
    function __construct($n){
        $this->name = $n;
    }
    function Test(){
       echo "开始\n";
    }
    function __destruct(){                  //析构函数不能有任何参数
        echo "对象".$this->name."被销毁了\n";
    }
}
$des1 = new Destructed("1");
$des1->Test();
$des1 = null;
$des2 = new Destructed("2");
unset($des2);
$des3 = new Destructed("3");            //对象都存放在栈中，因为栈队列有后进先出的原则，所以会先执行$des3对象所对应的__destruct()函数