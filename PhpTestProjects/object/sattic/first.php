<?php

class test
{
    static $a = 'hello';
    static $b = 'world';
    public $c = 'hello world';

    static function test1()
    {
        echo "hello world" . PHP_EOL;
        echo self::$a;
    }


}

//静态方法可以被实例化的对象直接调用,静态属性不可以
$test = new test();

$test->test1();

echo test::$a;
test::test1();