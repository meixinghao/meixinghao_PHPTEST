<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/26
 * Time: 20:35
 */
class reflectionPropertyTest
{
    /**
     * @var intfffffffffff
     */
    private $a = 1;
    protected $b = 2;

    /**
     * @var intdsfsfdsfsdfds
     */
    public $c = 3;


    function __construct()
    {
//        echo "hello world";
    }
}

$reflection_property = new ReflectionProperty('reflectionPropertyTest', 'a');

var_dump($reflection_property->export('reflectionPropertyTest', 'b', true));

var_dump($reflection_property->getDeclaringClass());

var_dump($reflection_property->getDocComment());

var_dump($reflection_property->getModifiers());

var_dump($reflection_property->getName());

$reflection_property_obj = new reflectionPropertyTest();
$reflection_property->setAccessible(true);
$reflection_property->setValue($reflection_property_obj, 100000);

echo $reflection_property->getValue($reflection_property_obj) . "/////";

var_dump($reflection_property->isPrivate());
var_dump($reflection_property->isDefault());
var_dump($reflection_property->isPublic());
var_dump($reflection_property->isProtected());
var_dump($reflection_property->isStatic());

echo $reflection_property;
