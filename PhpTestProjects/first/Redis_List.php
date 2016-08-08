<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/1
 * Time: 10:27
 */

function ListTest()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if ($redis->exists('list')) {
        $redis->del('list');
    }

    for ($i = 0; $i < 100; $i++) {
        $redis->lpush('list', rand(0, 1000));
    }

    $size = 10;
    $start = 0;
    while (true) {
        $array = $redis->lrange('list', $start, $start + $size - 1);

        foreach ($array as $key => $value) {
            echo $value . PHP_EOL;
        }
        $start += $size;
        if (count($array) < 10) {
            break;
        }
    }

}

//ListTest();


function ListTest1()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if ($redis->exists('list')) {
        $redis->del('list');
    }

    for ($i = 0; $i < 100; $i++) {
        $redis->lpush('list', $i);
    }

    $total = $redis->lLen('list');
    $size = ceil($total / 10);

    for ($i = 0; $i < $size; $i++) {
        $start = $i * $size;
        $end = $size + $start - 1;
        $array = $redis->lRange('list', $start, $end);
        foreach ($array as $value) {
            echo $value . PHP_EOL;
        }
    }
}

//ListTest1();

function ListTest2($delNum)
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if ($redis->exists('list')) {
        $redis->del('list');
    }

    $redis->lpush('list', 'a', 'b', 'c', 'd');
    $redis->rpush('list', 'e', 'f', 'g', 'h');


    echo '从list的左边弹出一个元素：' . $redis->lPop('list') . PHP_EOL;
    echo '从list的邮编弹出一个元素: ' . $redis->rpop('list') . PHP_EOL;

    echo 'list的长度：' . $redis->lLen('list') . PHP_EOL;
    $start = 0;
    $size = 5;
    $count = 1;
    while (true) {
        $array = $redis->lRange('list', $start, $size + $start - 1);
        $start += $size;
        echo "第" . $count . "页\n";
        foreach ($array as $value) {
            echo $value . PHP_EOL;
        }
        $count++;
        echo "=========================\n";
        if (count($array) < 5) {
            break;
        }
    }

    $redis->lTrim('list', 0, 4);            //保留0-4
    echo 'list的长度：' . $redis->lLen('list') . PHP_EOL;
    $redis->lrem('list', $delNum, -2);          //参数位置和文档不同
    var_dump($redis->lset('list', 0, 'xx'));
    echo 'list的长度：' . $redis->lLen('list') . PHP_EOL;
}

ListTest2('a');