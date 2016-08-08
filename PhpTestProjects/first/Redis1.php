<?php
/**
 * Keys
 */


function conn()
{
    //连接redis数据库
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);
    $redis->set('aa', 'bb');
    echo $redis->PTTL('aa');      //毫秒为单位，ttl是秒为单位
    echo $redis->get('aa');
    var_dump($redis->del('aa')) . "\n";
    echo $redis->get('aa') . "\n";

    $array = array('a' => 1, 'b' => 2, 'c' => 3);
    $redis->mset($array);       //一次存储多个值
    print_r($redis->keys('*'));
    echo $redis->randomkey() . "\n";   //随机取一个key
    var_dump($redis->exists('ad'));
    $redis->select(0);
    $redis->set('db1', 1);
    $redis->move('db1', 1);    //把数据库0的数据移动到数据库1中

    var_dump($redis->get('db1'));

    $redis->select(1);
    echo $redis->get('db1') . "\n";
    $redis->select(0);
    var_dump($redis->rename('a', 'a1'));            //把key的名字重命名

    echo $redis->get('a1') . "\n";

    var_dump($redis->renameNx('a1', 'a'));
    var_dump($redis->renameNx('a', 'b'));           //只有当重命名的key不存在时有效

    echo $redis->type('a') . "\n";

    $redis->expire('a', 100000);

    echo $redis->ttl('a');

    $redis->expireAt('b', time() + 1000);   //也是设置key的生存时间，以时间戳的格式
    echo $redis->ttl('b') . "\n";

    //OBJECT命令允许从内部查看给定key的redis对象
    echo $redis->object('REFCOUNT', 'a') . "\n";      //返回key a的引用次数
    echo $redis->object('encoding', 'a') . "\n";       //查看字符串的编码格式
    echo $redis->object('idletime', 'a') . "\n";     //查看字符串的空转时间
    $redis->persist('a');                            //移除字符串的生存时间
    echo $redis->ttl('a');
}

conn();
