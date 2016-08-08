<?php
/**
 * 哈希表
 */

function conn()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->hset('userinfo', 'name', 'meixinghao');
    var_dump($redis->hsetnx('userinfo', 'name', 'meixinghao1'));            //和setnx方法相同
    var_dump($redis->hMset('userinfo', array('name' => 'meixinghao', 'age' => 22, 'sex' => 'man')));
    print_r($redis->hMGet('userinfo', array('name', 'age')));
    print_r($redis->hGetAll('userinfo'));
    echo $redis->hget('userinfo', 'name') . "\n";
    var_dump($redis->hdel('userinfo', 'name', 'age'));          //删除一个或多个值
    echo $redis->hget('userinfo', 'name') . "\n";
    var_dump($redis->hexists('userinfo', 'name'));          //查看map中某个key是否存在
    var_dump($redis->hMset('userinfo', array('name' => 'meixinghao', 'age' => 22, 'sex' => 'man')));
    var_dump($redis->hIncrBy('userinfo', 'sex', 10));               //和incrby用法相似，key不能为字符串
    var_dump($redis->hIncrBy('userinfo', 'age', 5));
    var_dump($redis->hIncrByFloat('userinfo', 'age', 4.3));         //加浮点类型的值
    print_r($redis->hGetAll('userinfo'));
    print_r($redis->hkeys('userinfo'));                    //获取map中所有的key，和ssdb的用法不同
    echo $redis->hlen('userinfo') . "\n";              //获取map的长度
    print_r($redis->hmget('userinfo', array('name', 'age', 'sex')));
    print_r($redis->hVals('userinfo'));
    print_r($redis->scan(0));
    //prinft_r($redis->hScan('userinfo', ));
}
conn();