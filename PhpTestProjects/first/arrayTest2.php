<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 14:58
 * 多维数组的声明
 */
$array1 = array(
    "数组1" => array(0, 1, 2),
    "数组2" => array(3, 4, 5),
    "数组3" => array(6, 7, 8),
    "数组4" => array(9, 10, 11)
);

echo $array1["数组1"][0];
for($i = 0; $i < count($array1); $i++){
    echo $i;
    echo $array1[$i];
    for($j = 0; $j < count($array1[$i]); $j++){
        print_r($array1[$i][$j] . "\n");
    }
}                                           //使用for语句遍历数组有很多局限性，例如这个例子，就不能遍历，for只能遍历下标为整数的数组


$array2 = array(
    2 => array(0, 1, 2),
    8 => array(3, 4, 5),
    9 => array(6, 7, 8),
    0 => array(9, 10, 11)
);

for($i = 0; $i < count($array2); $i++){
    echo $i;
    echo $array2[$i];
    for($j = 0; $j < count($array2[$i]); $j++){
        print_r($array2[$i][$j] . "\n");
    }
}                                           //使用for语句遍历数组有很多局限性，例如这个例子，就不能遍历，for只能遍历下标为整数的数组