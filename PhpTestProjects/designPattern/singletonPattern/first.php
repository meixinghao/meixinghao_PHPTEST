<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/10/11
 * Time: 21:20
 */
class man
{
    private static $_instance;

    private function __construct()
    {
        echo "我被实例化了";
    }

    public static function getInstance()
    {
        var_dump(isset(self::$_instance));

        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    private function __clone()
    {
        // TODO: Implement __clone() method.

        trigger_error('Clone is not allow', E_USER_ERROR);
    }

    function test()
    {
        echo "test";
    }
}

//$test = new man();

$test = man::getInstance();
$test1 = man::getInstance();

$test->test();
$test1->test();