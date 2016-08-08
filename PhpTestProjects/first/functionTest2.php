<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 22:01
 */

//局部变量和全局变量
$a1 = 100;
function test() {
    //global $a1;             //使用global加载全局变量
    $a1 = $GLOBALS['a1'];       //第二种方法加载全局变量
    echo $a1;
}
echo $a1;
test();
phpinfo();              //可以得知php加载了哪些扩展库
//get_loaded_extensions();