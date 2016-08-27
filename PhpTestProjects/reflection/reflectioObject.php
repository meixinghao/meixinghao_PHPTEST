<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/27
 * Time: 17:45
 */
class reflectionObjectTest
{
    private $a = 1;
    public function test()
    {

    }

}

$reflection_object = new reflectionObjectTest();

$reflection_object_test = new ReflectionObject($reflection_object);
$reflection_object_test->export($reflection_object, false);