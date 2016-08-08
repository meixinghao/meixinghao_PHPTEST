<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/10/14
 * Time: 21:01
 */

$array = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => '4');
$json = json_encode($array);
echo $json;
$array1 = json_decode($json);
print_r($array1);