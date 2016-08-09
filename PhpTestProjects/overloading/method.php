<?php

/**
 * Created by PhpStorm.
 * User: meixinghao
 * Date: 16/8/9
 * Time: 下午11:50
 * 方法
 */
class MethodTest
{
    public function __call($name, $arguments)
    {
        // TODO: Implement __call() method.
        echo  "Calling object method '$name' " . implode(', ', $arguments) . "\n";
    }



    public static function __callStatic($name, $arguments)
    {
        // TODO: Implement _callStatic() method.
        echo  "Calling static object method '$name' " . implode(', ', $arguments) . "\n";
    }
}

$obj = new MethodTest();
$obj->runTest('hello', 'world', 'yes');

MethodTest::runTest('hello', 'world', 'yes');