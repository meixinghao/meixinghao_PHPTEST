<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 12:00
 */


//变量函数
function test1(){
    echo "函数1";
}

function test2(){
    echo "函数2";
}

function test3(){
    echo "函数3 \n";
    //echo strrev("meixinghao");                 //strrev()函数，是把变量倒过来排序
}

$test = "test3";
$test();

//回调函数
function filte($fun){
    for($i = 0; $i <= 100; $i++){
        if($fun($i))
            continue;
        echo $i . "\n";
    }
}

function one($num){
    return $num % 3 == 0;
}

function two($num){
    return $num == strrev($num);
}

filte("one");
echo "------------------\n";
filte("two");