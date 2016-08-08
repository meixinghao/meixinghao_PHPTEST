<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/30
 * Time: 20:45
 */


function test()
{

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->del('Test');
    for ($i = 0; $i < 100; $i++) {
        $redis->zAdd('Test', $i, $i);
    }

    $size = 10;
    $i = 0;
/*
    while (true) {
        $array = $redis->zRange('Test', $i, $i + $size - 1);

        foreach ($array as $key) {
            echo $key . PHP_EOL;
        }
        $i += $size;
        if (count($array) < $size) {
            break;
        }

    }

    die;*/


    $total = $redis->zCard('Test');
    $time = ceil($total / $size);
    for ($i = 0; $i < $time; $i++) {
        $offset = $i * $size;
        $array = $redis->zRange('Test', $offset, $offset + $size - 1);
    }

    echo "一共插入" . $redis->zCard('Test') . "个";

    echo $redis->zSize('Test');
}

test();