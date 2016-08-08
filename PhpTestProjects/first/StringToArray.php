<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/31
 * Time: 14:09
 *
 */


//Explode

$str = "My name is mei";

/**
 * @param1 从什么位置分割，必须选
 * @param2 必须选需要分割的字符串
 * @param3 可选，要返回的个数，默认是全部
 */
$array = explode(" ", $str, 4);

foreach ($array as $key => $value) {
    echo $value . PHP_EOL;                    //PHP_EOL换行
}