<?php
/**
 * SortSet集合
 */

function conn()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    var_dump($redis->zAdd('studentinfo', 1, 'meixinghao'));         //与ssdb的zset不同，他们score参数位置不同
    var_dump($redis->zadd('studentinfo', 2, 'maoning'));
    var_dump($redis->zAdd('studentinfo', 3, 'chaijiyang'));

    print_r($redis->zscore('studentinfo', 'meixinghao') . "\n");
    print_r($redis->zscore('studentinfo', 'maoning') . "\n");

    var_dump($redis->zrem('studentinfo', 'chaijiyang'));        //删除一个数据
    var_dump($redis->zRem('studentinfo', 'meixinghao', 'maoning'));


    var_dump($redis->zAdd('studentinfo', 1, 'meixinghao'));         //与ssdb的zset不同，他们score参数位置不同
    var_dump($redis->zadd('studentinfo', 2, 'maoning'));
    var_dump($redis->zAdd('studentinfo', 3, 'chaijiyang'));

    echo $redis->zCard('studentinfo') . "\n";    //返回有序集合studentinfo中数据的个数
    print_r($redis->zrange('studentinfo', 0, 1));     //返回0-1之间的值，0 ~ -1取全部值
    print_r($redis->zRevRange('studentinfo', 0, 1));     //取zrange相反的值

    var_dump($redis->zIncrBy('studentinfo', 1, 10));        //如果所所需要相加的成员为字符串，则会把该成员变为0，
    // print_r($redis->zRange('studentinfo', 0, 1));

    echo $redis->zCount('studentinfo', 1, 2);            //score值在1-2之间的成员
    print_r($redis->zrange('studentinfo', 0, -1));     //返回0-1之间的值，0 ~ -1取全部值
    var_dump($redis->zRemRangeByRank('studentinfo', 0, 1));

    print_r($redis->zrange('studentinfo', 0, -1));     //返回0-1之间的值，0 ~ -1取全部值

    var_dump($redis->zremrangebyscore('studentinfo', 1, 2));

    var_dump($redis->zAdd('studentinfo', 1, 'meixinghao'));         //与ssdb的zset不同，他们score参数位置不同

    echo $redis->zrank('studentinfo', 'meixinghao') . "\n";     //返回studentinfo中meixinghao对应的下标

    print_r($redis->zRangeByScore('studentinfo', 1, 3));

    print_r($redis->zRevRangeByScore('studentinfo', 1, 2));
}

conn();