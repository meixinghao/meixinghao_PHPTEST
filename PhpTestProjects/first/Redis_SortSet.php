<?php

/**
 * 方法1
 */
function test1()
{
    $beginTime = microtime(true);    //获取程序开始执行时间
    echo $beginTime;
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->del('Test');
    for ($i = 0; $i < 100; $i++) {
        $redis->zAdd('Test', $i, $i);
    }

    $total = $redis->zCard('Test');
    $num = 10;
    $time = ceil($total / 10);

    for ($i = 0; $i < $time; $i++) {
        $offset = $i * $num;
        $array = $redis->zRange('Test', $offset, $offset + $num - 1);
        foreach ($array as $key) {
            echo $key . PHP_EOL;
        }
    }
    $endTime = microtime(true);
    echo $endTime . "\n";
    echo $endTime - $beginTime;

}

//test1();

/**
 * 方法2
 */
function test2()
{
    $beginTime = microtime(true);    //获取程序开始执行时间
    echo $beginTime;
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->del('Test');
    for ($i = 0; $i < 57; $i++) {
        $redis->zAdd('Test', $i, $i);
    }

    $size = 10;
    $i = 0;

    while (true) {
        $array = $redis->zRange('Test', $i, $i + $size - 1);
        foreach ($array as $key) {
            echo $key . PHP_EOL;
        }
        $i += $size;
        if (count($array) < 10) {
            break;
        }

    }
    $endTime = microtime(true);
    echo $endTime . "\n";
    echo $endTime - $beginTime;
}

//test2();

function delete($userinfo)
{

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->del('Test');
    for ($i = 0; $i < 57; $i++) {
        $redis->zAdd('Test', $i, m . $i);
    }

    $start = 0;
    $size = 10;

    while (true) {
        $array = $redis->zRange('Test', $start, $size + $start - 1);
        $start += $size;
        foreach ($array as $value) {
            if ($userinfo === $value) {
                $redis->zRem('Test', $userinfo);
                return true;
            }
        }
        if (count($array) < 10) {
            break;
        }
    }

}

/*if (delete('m1')) {
    echo '用户信息已删除';
} else {
    echo '用户信息不存在';
};*/

//事物
function Multi_Test()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->multi();
    $redis->mset(array('a' => 1, 'b' => 2));
    $redis->exec();
}

//Multi_Test();

function AllSortSet($delNum)
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if($redis->exists('zset')){
        $redis->del('zset');
    }

    for ($i = 0; $i < 100; $i++) {
        $redis->zadd('zset', $i, 'm' . $i);
    }

    echo "zset一共有：" . $redis->zCard('zset') . 个数据 . PHP_EOL;
    echo $delNum . "的score值是" . $redis->zScore('zset', $delNum) . PHP_EOL;
    echo "0~10一共：" . $redis->zcount('zset', 0, 10) . "个数据\n";
    echo $delNum . "的下标是" . $redis->zRank('zset', $delNum) . PHP_EOL;
    $redis->zremrangebyrank('zset', 0, 3);      //删除0-3的数据
    $redis->zremrangebyscore('zset', 5, 8);
   // $redis->zIncrBy('zset', 100, $delNum);
    $start = 0;
    $size = 10;
    while (true) {
        $array = $redis->zRange('zset', $start, $start + $size - 1);
        $array1 = $redis->zRevRange('zset', $start, $start + $size - 1);
        $start += $size;

        foreach ($array as $value) {
            if ($value === $delNum) {
                $redis->zrem('zset', $delNum);
                echo $delNum . "已删除\n";
                continue;
            }
            echo $value . PHP_EOL;
        }

        if (count($array) < 10) {
            break;
        }

        echo "=====================================\n";

        echo "zrangebyscore:";
        $ss = $redis->zRangeByScore('zset', 0, 100);
        print_r($ss);
        echo "zrevrangebyscore:";
        $ss1 = $redis->zRevRangeByScore('zset', 100, 0);
        print_r($ss1);
    }
}

AllSortSet('m3');

