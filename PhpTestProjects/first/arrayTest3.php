<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/18
 * Time: 15:31
 */


$array1 = array(
    "数组1" => array(0, 1, 2),
    "数组2" => array(3, 4, 5),
    "数组3" => array(6, 7, 8),
    "数组4" => array(9, 10, 11)
);



foreach($array1 as $value){
    //   echo $value . "\n";
    foreach($value as $key => $value1){        //使用该函数可以取得数组的下标值
        echo $key, "\t", $value1, "\n";
    }
}

