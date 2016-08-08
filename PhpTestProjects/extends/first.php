<?php

class test
{

    private $a = '';
    protected $b = '';
    public $c = '';

    public function test1()
    {
        echo $this->c . PHP_EOL;
        echo $this->b . PHP_EOL;
        echo $this->a . PHP_EOL;
    }

    protected function test2()
    {
        echo "world";
    }

    private function test3()
    {
        echo "yes";
    }
}

class test_1 extends test
{
    public function __construct()
    {
        $this->c = 'sss';
        $this->b = 'sss';
    }
}

$test_1 = new test_1();

$test_1->test1();