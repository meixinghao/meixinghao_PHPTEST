<?php
/**
 * 哈希表
 */

include_once('SSDB.php');

function conn()
{
    try {
        $ssdb = new SimpleSSDB('127.0.0.1', 8888);
    } catch (SSDBException $e) {
        echo __FILE__ . ' ' . $e->getMessage();
    }

    $ssdb->hset('userinfo', 'name', 'meixinghao');
    $ssdb->hset('userinfo', 'age', 22);
    echo $ssdb->hget('userinfo', 'name') . "\n";
    $ssdb->hdel('userinfo', 'name');
    print_r($ssdb->hget('userinfo', 'name')) . "\n";
    echo $ssdb->hincr('userinfo', 'age', 2) . "\n";
    var_dump($ssdb->hexists('userinfo', 'age')) . "\n";
    echo $ssdb->hsize('userinfo') . "\n";
    print_r($ssdb->hlist('a', 'z', 10)) . "\n";             //遍历出数据库中hashmap
    print_r($ssdb->hrlist('', '', 10)) . "\n";
    print_r($ssdb->hkeys('userinfo', '', '', 10));
    print_r($ssdb->getall('userinfo'));
    print_r($ssdb->hscan('userinfo', '', '', 10));
    print_r($ssdb->hrscan('userinfo', '', '', 10));
    $ssdb->hclear('userinfo');
    echo $ssdb->hsize('userinfo') . "\n";
    $ssdb->multi_hset('userinfo', array('name' => 'meixinghao', 'age' => '22'));
    print_r($ssdb->multi_hget('userinfo', array('name', 'age')));
   // $ssdb->multi_hdel('userinfo', array('name', 'age'));
    print_r($ssdb->multi_hget('userinfo', array('name', 'age')));
}

conn();