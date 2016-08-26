<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/26
 * Time: 21:03
 */
class reflectionTest
{
    private $a = 1;
    public $b = 1;
    protected $c = 1;

    public function __construct()
    {

    }


    public function A()
    {
        echo "hello A";
    }

    private function B()
    {
        echo "hello B";
    }

    protected function C()
    {
        echo "hello C";
    }
}

$class = new Reflection('reflectionTest');

print_r($class->getModifierNames(1));