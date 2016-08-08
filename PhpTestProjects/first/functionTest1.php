<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 21:46
 */

function test(){
    echo "函数调用测试 \n";
    return 0;
}

function test1($num1, $num2){
    echo $num1 . "\n", $num2 . "\n";
    return "返回值";
}

test();
echo test1(5, 10);