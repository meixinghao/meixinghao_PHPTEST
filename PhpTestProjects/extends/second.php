<?php

class test
{
    private $foo = '';

    private function bar()
    {
        echo "private function";
    }

    public function baz(test $other)
    {
        $other->foo = 'hello';
        var_dump($other->foo);

        $other->bar();
    }
}

$test = new test();
$test->baz(new test());