<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 14:21
 *数组的分类：根据数组提供下标方式的不同，将数组分为索引数组（数字索引）和关联数组（字符串做索引）
 */

$array[0] = 1;
$array[1] = 2;
$array[2] = 3;
print_r($array);
var_dump($array);
for ($i = 0; $i < count($array); $i++) {
    echo($array[$i]);
}


$array1 = array("a" => 100, "b" => 200, "c" => 300);
print_r($array1);


$array2 = array(100, 200, 300);
print_r($array2);

//array_walk_recursive(array,function,userdata)递归地调用回调函数参数 	描述
//array 	必需。规定数组。
//function 	必需。用户自定义函数的名称。
//userdata 	可选。用户输入的值，可作为回调函数的参数。
function array_recursive($value, $key)
{
    echo "The key $key has the value $value \n";
}

$array3 = array('a' => 1, 'b' => 2);
$array4 = array($array3, 'c' => 3, 'd' => 4);
array_walk_recursive($array4, "array_recursive", 2);
