<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * 数组排序
 */


/*  sort() - 以升序对数组排序
  rsort() - 以降序对数组排序
  asort() - 根据值，以升序对关联数组进行排序
  ksort() - 根据键，以升序对关联数组进行排序
  arsort() - 根据值，以降序对关联数组进行排序
  krsort() - 根据键，以降序对关联数组进行排序*/

//数组去重
$array = array(0, 1, 2, 4, 0, 1, 4, 3, 3);

print_r(array_unique($array));      //删除函数中的重复值

foreach ($array as $values) {
    echo $values . PHP_EOL;
}


/**
 * @param1 要判断的值
 * @param2 所在的数组
 * @param3 可选，如果为true则判断他们类型是否相同
 */
var_dump(in_array(1, $array));          //判断一个数是否在$array数组中,

$array1 = array_reverse($array);
print_r($array1);               //把数组翻转排序

