<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 17:26
 */
//常量的练习

    define("a", 100);
    $a = 200;
    echo a;
    echo $a;

    define("b", 99.3);
    echo b;

    define("c", "hello world");
    echo c;

    define("d", "helloworld", true);     //第三个参数是用来确定所声明的常量是否区分大小写，如果为true就不区分大小写
    echo D;

    if(defined('b')){
        echo "已经声明该常量";
    }

    $rand = rand(1, 10);
    echo $rand;

?>