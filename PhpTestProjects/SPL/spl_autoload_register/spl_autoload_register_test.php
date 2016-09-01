<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/31
 * Time: 21:34
 */
class spl_autoload_register_test
{
    function __construct()
    {
    }

    static function my_autoload($class_name)
    {
        echo $class_name;
    }

    static function getLoader()
    {
        spl_autoload_register(array('spl_autoload_register_test', 'my_autoload'), true, true);
        spl_autoload_unregister(array('spl_autoload_register_test', 'my_autoload'));
        $test = new test();
    }
}

$spl_autoload_register_test = new spl_autoload_register_test();
spl_autoload_register_test::getLoader();