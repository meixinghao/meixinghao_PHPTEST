<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/13
 * Time: 11:20
 * get_defined_vars — 返回由所有已定义变量所组成的数组
 * 此函数返回一个包含所有已定义变量列表的多维数组，这些变量包括环境变量、服务器变量和用户定义的变量。
 */

$b = array(1, 1, 2, 3, 5, 8);

$arr = get_defined_vars();

print_r($arr['b']);

echo $arr['_'];

print_r($arr['argv']);

print_r($arr['_SERVER']);

print_r(array_keys(get_defined_vars()));


function myFunc()
{
    return "myfunc";
}

$func_arr = get_defined_functions();

print_r($func_arr);


define('const', 1);
const const1 = 2;

print_r(array_keys(get_defined_constants()));