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
class A
{
    public $one = '';
    public $two = '';

    public function __construct()
    {
    }

    #hello
    public function echoOne()
    {
        echo $this->one . PHP_EOL;
    }

    #world
    public function echoTwo()
    {
        echo $this->two . PHP_EOL;
    }


}

$a = new A();

$reflector = new ReflectionClass('A');

$properties = $reflector->getProperties();

print_r($properties);

echo $reflector->getFileName() . PHP_EOL;
echo $reflector->getDocComment() . PHP_EOL;
echo $reflector->getEndLine() . PHP_EOL;