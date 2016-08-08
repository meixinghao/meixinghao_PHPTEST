<?php
/**
 * key-values类型
 */
include_once('SSDB.php');

function conn()
{

    try {
        $ssdb = new SimpleSSDB('127.0.0.1', 8888);
    } catch (SSDBException $e) {
        die(__LINE__ . ' ' . $e->getMessage());
    }
    $ret = $ssdb->set('key', 'value');
    echo $ssdb->get('key') . "\n";
    $ssdb->setnx('key', 'aa');
    echo $ssdb->get('key') . "\n";
    $ssdb->setx('name', 'meixinghao', 1000);
    echo $ssdb->ttl('name') . "\n";
    $ssdb->expire('name', 10000);
    echo $ssdb->ttl('name') . "\n";
    echo $ssdb->getset('name', 'meixinghao1') . "\n";
    echo $ssdb->get('name') . "\n";
    $ssdb->del('key');
    var_dump($ssdb->exists('key'));
    echo $ssdb->getbit('name', 1) . "\n";
    $ssdb->setbit('name', 1, 1);
    echo $ssdb->getbit('name', 1) . "\n";
    var_dump($ssdb->bitcount('name', -1, 2)) . "\n";
    var_dump($ssdb->countbit('name', 0, 10)) . "\n";
    echo $ssdb->substr('name', 2, 3) . "\n";
    var_dump($ssdb->incr('name', 20));          //类型不允许加20
    echo $ssdb->get('name') . "\n";
    echo $ssdb->strlen('name') . "\n";
    print_r($ssdb->keys('', '', 10)) . "\n";  //参数1和参数2 不写表示要选出所有的key
    print_r($ssdb->scan('', '', 10)) . "\n";      //和keys相似，只是scan去除key对应的值
    print_r($ssdb->rscan('', '', 10)) . "\n";
    $ssdb->multi_set(array('a' => 1, 'b' => 2, 'c' => 3));
    print_r($ssdb->multi_get(array('a','b', 'c')));
    $ssdb->multi_del(array('a', 'b'));
}

conn();
