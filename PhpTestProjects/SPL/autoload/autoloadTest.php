<?php


class autoloadTest
{

}

function __autoload($class_name)
{
    echo $class_name . PHP_EOL;
    require_once $class_name . '.php';
}

$autoload_test1 = new autoloadTest1();