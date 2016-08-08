<?php
/**
 * List
 */
include_once('SSDB.php');

function conn()
{
    try {
        $ssdb = new SimpleSSDB('127.0.0.1', 8888);
    } catch (SSDBException $e) {
        echo __FILE__ . ' ' . $e->getMessage();
    }

    $ssdb->qpush_front('nameinfo', 'a', 'b', 'c', 'd', 'e', 'f');
    print_r($ssdb->qlist('', '', 10));
    print_r($ssdb->qrlist('', '', 10));
    $ssdb->qclear('nameibfo');
    echo $ssdb->qfront('nameinfo') . "\n";      //返回第一个元素
    echo $ssdb->qback('nameinfo') . "\n";       //返回最后一个元素
    echo $ssdb->qget('nameinfo', 3);
    $ssdb->qset('nameinfo', 3, 'f');
    echo $ssdb->qget('nameinfo', 3) . "\n";
    print_r($ssdb->qrange('nameinfo', 0, 6));   //从0开始返回6个
    print_r($ssdb->qslice('nameinfo', 0, 4));           //下标处于 0 4
    $ssdb->qpush('nameinfo', 'c', 'v', 'm');
    var_dump($ssdb->qpush_back('nameinfo', 'c', 'v', 'm'));
    print_r($ssdb->qslice('nameinfo', 0, 40));   //从0开始返回6个
    $ssdb->qpop_front('nameinfo', 2);
    $ssdb->qpop_back('nameinfo', 2);
    $ssdb->qtrim_front('nameinfo', 20);
    echo $ssdb->qsize('nameinfo');
    $ssdb->qtrim_back('nameinfo', 20);

    echo "数据库大小：".$ssdb->dbsize();
    print_r($ssdb->info());
}

conn();
