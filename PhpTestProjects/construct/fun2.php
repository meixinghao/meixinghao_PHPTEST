<?php

include 'fun1.php';

class fun2
{
    function test()
    {
        $arg = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4);
        $fun1 = new fun1($arg);
        print_r($fun1);
    }
}

$fun2 = new fun2();
$fun2->test();

print_r(range(0, 9));

$feed_id = "feed_";
echo preg_match('/^feed_\d+/', $feed_id);


$m = new Memcached();