<?php

class test
{
    protected function a()
    {
        echo "test_a";
    }
}

class test1 extends test
{
    public function a()
    {
        parent::a();
        echo "test1_a";
    }
}

$test1 = new test1();
$test1->a();