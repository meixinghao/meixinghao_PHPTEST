<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/1
 * Time: 11:21
 */

function HASHTest()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->hSet('userinfo', 'name', 'meixinghao');
    $redis->hmset('userinfo', array('sex' => 'man', 'height' => 170));
    print_r($redis->hmget('userinfo', array('name', 'sex', 'height', 1)));
}

HASHTest();