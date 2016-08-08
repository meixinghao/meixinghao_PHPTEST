<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 17:37
 * 常见的关键字和魔术方法
 * 关键字：final static const clone _toString()
 *魔术方法：__call(),__toString,__autoload()
 */


//final关键字，可以标识类，也可以标识方法，但是不能标识属性
//使用final标识的类，不能被继承
//使用final标识的方法在子类中不能被覆盖
final class MyClass
{
    function test()
    {
        echo "测试final类的继承";
    }
}

//class MyClass1 extends MyClass{         //继承final类失败

//}

Class MyClass2
{

    final function test()
    {
        echo "测试fianl方法覆盖";
    }
}

class MyClass3 extends MyClass2
{
    //function test(){    //覆盖final方法失败

    //}
}


//static关键字
//标识成员属性，也可标识成员方法，
//使用static标识的属性或方法不需要通过对象来拿到他们，只需   类名::静态成员属性名   类名::静态成员方法名
//如果访问自己类内部的成员方法和成员属性, 需要 self::静态属性名，  self::静态方法名
//用self而不是用$this,因为它不是通过对象引用的，而是通过类引用的
class STC
{
    static $count;
    var $count1;

    function __construct($count)
    {
        self::$count = $count;
    }

    static function Test()
    {
        //$this->count1;                  //在静态方法中只能引用静态成员，该引用错误
        self::$count;
    }

}

$stc = new STC("100");
echo STC::$count . "\n";

//const关键字
//将类中的属性定义为常量只能用const
//标识为常量为只读的，不能重新赋值，不能通过对象引用
//其用法和static相同，
//声明的常量不需要加$符号
class CNT
{

    const CONSTANT = 'CONSTANT value';

    function showConstant()
    {
        echo self::CONSTANT . "\n";
    }

}

echo CNT::CONSTANT . "\n";
$C = new CNT();
$C->showConstant();
//echo $C->CONSTANT;            //使用对象访问常量是错误的


//克隆对象clone
class Person
{
    var $name;
    var $age;
    protected $sex;

    function __construct($name = "", $age = "", $sex = "")
    {
        $this->name = $name;
        $this->age = $age;
        $this->sex = $sex;
    }

    //声明此方法则在对象克隆是自动调用，用来为新对象赋值
    function __clone()
    {
        $this->name = "我是副本";
        $this->age = 33;
    }

    function say()
    {
        echo "我的名字：" . $this->name . "性别：" . $this->sex . ", 年龄：" . $this->age . "\n";
    }

    function test($name)
    {
        $this->name = $name;
    }
}

$P1 = new Person("梅兴昊", "22", "男");
$P2 = clone $P1;                //复制对象，创建一个对象的副本
$P3 = $P1;          //这不是复制对象，而是为对象多复制出一个访问对象的引用
var_dump($P1 == $P2);
$P1->say();
$P2->say();
$P1->test("奥巴马");
$P1->say();
$P2->say();                     //不受$P1的影响
$P3->say();                     //受$P1的影响

//类的通用方法__toString()
//快速获取对象字符串表示的最便捷的方式
//他是直接输出对象引用时，自动调用的方法
class TestClass
{

    private $foo;

    function __construct($foo)
    {
        $this->foo = $foo;
    }

    public function __toString()
    {
        return $this->foo;
    }
}

$obj = new TestClass("输出对象中的内容\n");
echo $obj;


//_call()方法的应用
//当调用对象中不存在的方法时，查询会自动调用_call()方法
//接收2个参数，第一个参数：所调方法名，第二个参数：所调方法的参数列表
class TestClass1
{

    function __call($functionName, $args)
    {
        echo "你所调用的函数" . $functionName . "(参数：";
        print_r($args);
        echo "不存在\n";
    }

}

$testClass1 = new TestClass1();
$testClass1->func(1, 2, 3);

//自动加载类魔术方法__autoload()
//不是在类中声明的函数
function __autoload($className)
{
    include(strtolower($className) . ".php");
}

$obj = new Test();
$obj->prt();