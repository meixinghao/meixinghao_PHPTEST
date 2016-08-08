<?php
/**
 * String类型
 */

function conn()
{
    $redis = new Redis();

    $redis->connect('127.0.0.1', 6379);

//    print_r($redis->keys('*'));

    $redis->set('string1', 'str1');
    var_dump($redis->setnx('string1', 'ss'));      //只有当key值不存在时，设置有效
    $redis->setex('string2', 90, 'str2');          //setex设置key并设置生存时间,ssdb的为setx,参数位置也不同
    $redis->setrange('string1', 2, 'T');            //把字符串第二个字符替换为T
    echo $redis->get('string1') . "\n";

    $redis->mset(array('string3' => 'str3', 'string4' => 'str4'));

    var_dump($redis->msetnx(array('string4' => 'str4', 'string5' => 'str5')));      //和setnx用法类似

    $redis->append('string4', 'append');            //把值append追加到string4后边
    echo $redis->get('string4') . "\n";
    print_r($redis->mget(array('string1', 'string2', 'string3', 'string4'))); //一次获取多个值
    echo $redis->getRange('string1', 0, 2) . "\n";                   //获取string1中0， 2之间的值
    echo $redis->getSet('string1', 'str1getSet') . "\n";           //获取并修改
    echo $redis->get('string1') . "\n";
    echo $redis->strlen('string1') . "\n";
    var_dump($redis->incr('string1'));                        //增加1，和ssdb的incr不同
    echo $redis->get('string1');
    $redis->set('a', 1);
    var_dump($redis->incr('a'));                                //key不能够是字符串

    var_dump($redis->incrby('string1', 20));                    //这个用法和ssdb的incr用法一致,同理不能为字符串
    var_dump($redis->incrBy('a', 20));                      //返回加上值的结果

    var_dump($redis->decr('string1'));
    var_dump($redis->decr('a'));                            //把key的值减一，

    var_dump($redis->decrBy('string1', 20));
    var_dump($redis->decrBy('a', 20));

    var_dump($redis->setBit('string1', 0, 1));
    echo $redis->getBit('string1', 0) . "\n";

    echo $redis->get('string1') . "\n";
    echo $redis->bitCount('string1') . "\n";
}

conn();