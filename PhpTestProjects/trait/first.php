<?php

class base {
    public function sayHello()
    {
        echo "hello";
    }
}

trait sayWorld {
    public function sayHello()
    {
        parent::sayHello();
        echo 'World';
    }
}

class MyHelloWorld extends base{
    use sayWorld;

    public function sayHello()
    {
        echo 'myHello';
    }
}

$o = new MyHelloWorld();
$o->sayHello();