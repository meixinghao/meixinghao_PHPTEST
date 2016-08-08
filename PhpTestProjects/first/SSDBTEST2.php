<?php
/**
 * sortset类型
 */

include_once('SSDB.php');

function conn()
{
    try {
        $ssdb = new SimpleSSDB('127.0.0.1', 8888);
    } catch (SSDBException $e) {
        echo __FILE__ . ' ' . $e->getMessage();
    }

    $ssdb->zset('studentinfo', 'age', 22);
    $ssdb->zset('studentinfo', 'height', 170);
    print_r($ssdb->zget('studentinfo', 'age') . "\n");
    $ssdb->zdel('studentinfo', 'age');
    print_r($ssdb->zget('studentinfo', 'age') . "\n");
    $ssdb->zset('studentinfo', 'age', 22);
    $ssdb->zincr('studentinfo', 'age', 2);
    print_r($ssdb->zget('studentinfo', 'age') . "\n");
    echo $ssdb->zsize('studentinfo') . "\n";
    print_r($ssdb->zlist('', '', 10));
    print_r($ssdb->zrlist('', '', 10));
    var_dump($ssdb->zexists('studentinfo', 'age'));                 //key值存不存在
    print_r(($ssdb->zkeys('studentinfo', '', '', '', 10)));     //zkeys和hkeys不一样
    print_r($ssdb->zscan('studentinfo', '', '', '', 10));
    // print_r($ssdb->zrscan('studentinfo', '', 1, 100, 10));
    echo $ssdb->zrank('studentinfo', 'height') . "\n";
    echo $ssdb->zrrank('studentinfo', 'height') . "\n";
    print_r($ssdb->zrange('studentinfo', 0, 10));
    print_r($ssdb->zrrange('studentinfo', 0, 10));
    $ssdb->zclear('studentinfo');
    echo $ssdb->zsize('studentinfo') . "\n";
    $ssdb->multi_zset('studentinfo', array('age' => 22, 'height' => 170));
    echo $ssdb->zcount('studentinfo', 0, 30) . "\n";     //参数为score的开始与结束
    echo $ssdb->zsum('studentinfo', '', '') . "\n";
    echo $ssdb->zavg('studentinfo', '', '') . "\n";
    $ssdb->zremrangebyrank('studentinfo', 0, 1);     //参数为索引下标
    $ssdb->multi_zset('studentinfo', array('age' => 22, 'height' => 170));
    $ssdb->zremrangebyscore('studentinfo', 0, 30);      //参数为score值
    echo $ssdb->zsize('studentinfo') . "\n";
    $ssdb->multi_zset('studentinfo', array('age' => 22, 'height' => 170));
    print_r($ssdb->multi_zget('studentinfo',array('age', 'height')));
    $ssdb->multi_zdel('studentinfo',array('age','height'));
    echo $ssdb->zsize('studentinfo');
}

conn();