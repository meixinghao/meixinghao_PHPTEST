<?php

function test($a, $b)
{
    echo $a . ' ' . $b . PHP_EOL;
    if($a == $b){
        return 0;
    }

    return $a < $b ? -1 : 1;
}


$arr = array('a' => 1, 'b' => 2, 'c' => 6, 'd' => 3);

print_r($arr);

uasort($arr, 'test');

print_r($arr);

echo date('Ymd', time());