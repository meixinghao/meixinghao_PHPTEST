<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/24
 * Time: 11:23
 */

interface FOO{}
interface BAR{}

class reflectionClassTest1{}

class reflectionClassTest extends reflectionClassTest1 implements FOO, BAR
{
    public $a = 1;
    const RT = 10;
    const RT1 = 11;

    public static $c = 100;
    protected static $b = 101;
    private static $d = 102;

    public function __construct($co1 = 1, $con2 = 2)
    {
        echo $co1;
        echo $con2;
        echo "hello world" . PHP_EOL;
    }

    public function Test1(){
        echo "hello";
    }
    protected function Test2(){}
    private function Test3(){}
}

$reflection_class = new ReflectionClass('reflectionClassTest');

//导出一个反射后的类
ReflectionClass::export('reflectionClassTest', true);
echo $reflection_class->getConstant('RT');
echo $reflection_class->getNamespaceName();
print_r($reflection_class->getConstants());
var_dump($reflection_class->getConstructor());
print_r($reflection_class->getDefaultProperties());
print_r($reflection_class->getProperties());
print_r($reflection_class->getProperty('a'));
echo $reflection_class->getDocComment() . PHP_EOL;
echo $reflection_class->getEndLine() . PHP_EOL;
var_dump($reflection_class->getExtension());
echo $reflection_class->getExtensionName();
echo $reflection_class->getFileName();
print_r($reflection_class->getInterfaceNames());
print_r($reflection_class->getInterfaces());
var_dump($reflection_class->getMethod('Test1')->isPrivate());
print_r($reflection_class->getMethods());
echo $reflection_class->getModifiers() . PHP_EOL;
echo $reflection_class->getName() . PHP_EOL;
echo $reflection_class->getParentClass() . PHP_EOL;
echo $reflection_class->getShortName() . PHP_EOL;
echo $reflection_class->getStartLine() . PHP_EOL;
print_r($reflection_class->getStaticProperties());
print_r($reflection_class->getStaticPropertyValue('c', '没有c'));
var_dump($reflection_class->hasConstant('RT'));
var_dump($reflection_class->hasMethod('Test1'));
var_dump($reflection_class->hasProperty('a'));
var_dump($reflection_class->implementsInterface('FOO'));
var_dump($reflection_class->inNamespace());
var_dump($reflection_class->isAbstract());
//var_dump($reflection_class->isAnonymous()); //php7
var_dump($reflection_class->isCloneable());
var_dump($reflection_class->isFinal());
$test1 = new reflectionClassTest();
var_dump($reflection_class->isInstance($test1)); //检查类的实例
var_dump($reflection_class->isInstantiable()); //检查类是否可以被实例化
var_dump($reflection_class->isInterface());
var_dump($reflection_class->isInternal());
var_dump((new ReflectionClass('reflectionClass'))->isInternal());
var_dump($reflection_class->isIterateable());
var_dump($reflection_class->isSubclassOf('reflectionClassTest1'));
var_dump($reflection_class->isTrait());
var_dump($reflection_class->isUserDefined());
$reflection_class->setStaticPropertyValue('c', 10000);
echo $reflection_class->getStaticPropertyValue('c');
echo $reflection_class->__toString();

var_dump($reflection_class->newInstance('a', 'b'));

var_dump($reflection_class->newInstanceArgs(array('a','b')));

$reflection_class->newInstanceWithoutConstructor()->Test1();