<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/27
 * Time: 15:48
 */
class reflectionMethodTest
{
    public function test($a, $b)
    {
        echo $a;
        echo $b;
        echo "test";
    }

    private function testPri(){
        echo "private";
    }

    final public static function test1()
    {
        echo "test1";
    }
}

class reflectionMethodTest1 extends reflectionMethodTest
{
    public function test($a, $b){
        echo "test extends";
    }
}

$reflection_method = new ReflectionMethod('reflectionMethodTest', 'test');
var_dump($reflection_method->export('reflectionMethodTest', 'test', true));

var_dump($reflection_method->getDeclaringClass());

var_dump($reflection_method->getModifiers());


$reflection_method1 = new ReflectionMethod('reflectionMethodTest1', 'test');
var_dump($reflection_method1->getPrototype());

//$reflection_method->invoke(new reflectionMethodTest1(), 'jack');

$reflection_method->invokeArgs(new reflectionMethodTest(), array('a', 'b'));
var_dump($reflection_method->isAbstract());
var_dump($reflection_method->isConstructor());
var_dump($reflection_method->isDestructor());
var_dump($reflection_method->isFinal());
var_dump($reflection_method->isPrivate());
var_dump($reflection_method->isProtected());
var_dump($reflection_method->isPublic());
var_dump($reflection_method->isStatic());
echo $reflection_method;

$pri_reflection_method = new ReflectionMethod('reflectionMethodTest', 'testPri');
var_dump($pri_reflection_method->setAccessible(true));
$pri_reflection_method->invoke(new reflectionMethodTest(), 'testPri');