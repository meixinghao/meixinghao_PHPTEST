<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 19:43
 */

//$GLOBALS 用来引用全局变量,也是一个数组，它里面装的全是定义好的全局变量

$a = 1;
$b = 2;

function test(){
   $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

test();
//echo $b;



$arr1 = array('error' => 1, 'error_reason' => 'ssss');
$arr2 = array('error' => 2, 'error_reason' => 'qqqq', 'title' => 'hello');


$arr = array_merge($arr2, $arr1);

print_r($arr);