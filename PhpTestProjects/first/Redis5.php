<?php
/**
 * List列表
 */

function conn()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->lPush('score', 1, 2, 3, 4);
    $redis->rpush('score', 5, 6, 7, 8, 9);
    echo $redis->lpop('score') . "\n";
    echo $redis->rpop('score') . "\n";
    echo $redis->lLen('score') . "\n";

    print_r($redis->lRange('score', 0, 40));
    $redis->lTrim('score', 0, 10);             //trim修剪，保留 0 - 10之间的数据，其余的全删除
    print_r($redis->lRange('score', 0, 40));

    $redis->lSet('score', 0, '300');
    print_r($redis->lRange('score', 0, 40));

    $redis->lRem('score', 2, -2);     //lRem('list', value, count) 参数位置和文档不同

}

conn();