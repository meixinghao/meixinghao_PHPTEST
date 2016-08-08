<?php

/**
bool class_exists(string $class_name [, bool $autoload) 如果class_name所指的类已经定义则返回true，
否则返回false，该方法默认会调用__autoload,如果不想调用__autoload,第二个参数传false
**/
function __autoload($class)
{
    echo "excude autoload" . PHP_EOL;
    echo $class . PHP_EOL;
}

class classExists
{
    function test()
    {
        var_dump(class_exists("classExists1", false));
    }
}

$classExists = new classExists();
$classExists->test();

var_dump(json_encode(array("a" => 1), true));

$a = null;
$b = false;
$c = 3;
$d = 0;
$e = '';
var_dump(empty($a));
var_dump(empty($b));
var_dump(empty($c));
var_dump(empty($d));

var_dump(isset($a, $b, $c, $d));
var_dump(isset($a));
var_dump(isset($b));
var_dump(isset($c));
var_dump(isset($d));
var_dump(isset($e));

