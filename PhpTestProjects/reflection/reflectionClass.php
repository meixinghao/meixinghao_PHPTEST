<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/24
 * Time: 11:23
 */

/**
 * todo
 */
class reflectionClassTest
{
    public $a = 1;
}

$reflection_class = new ReflectionClass('reflectionClassTest');

//导出一个反射后的类
ReflectionClass::export('reflectionClassTest', true);