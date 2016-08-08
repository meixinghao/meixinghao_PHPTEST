<?php

trait a
{
    function testA()
    {
        echo 'a' . PHP_EOL;
    }
}

trait b
{
    function testB()
    {
        echo 'b' . PHP_EOL;
    }
}


trait c
{
    use a, b;

    function testC()
    {
        echo 'c' . PHP_EOL;
    }
}

class d {
    use c;
}

$d = new d();
$d->testA();
$d->testB();
$d->testC();