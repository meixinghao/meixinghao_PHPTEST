<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/26
 * Time: 20:35
 */
class reflectionPropertyTest
{
    private $a = 1;
    protected $b = 2;
    public $c = 3;


    function __construct()
    {
//        echo "hello world";
    }
}

$class = new ReflectionClass('reflectionPropertyTest');
$property = $class->getProperty('a');

$property->setAccessible(true);

var_dump($property->isPrivate());
var_dump($property->isProtected());
$obj = new reflectionPropertyTest();
echo $property->getValue($obj);

print_r($class->getProperties());
print_r($class->getName());