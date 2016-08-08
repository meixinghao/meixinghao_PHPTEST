<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 22:20
 */
//php函数的参数至关重要
//测试函数参数类型的区别
//mixed类型的参数可以接受任意参数,number类型的参数可以接受integer,和float类型参数，callback类型参数可以接受一个函数作为参数

function test($a, $b, $c, $d){
    echo $a . "\n";
    echo $b . "\n";
    echo $d . "\n";
    $c();
}

function test1(){
    echo "传个函数作为参数进去\n";
}

test(100, "hello", test1, 12.89);


//引用参数函数 &

function test2($x){                 //这种按值传递参数的函数，并不会影响父程序的值
    $x = 200;
    echo $x . "\n";
}
$m = 100;
test2($m);
echo $m . "\n";


function test3(& $y){           //该函数是按引用方式来传递参数的，相当于把父程序变量的指针传递进来，所以会影响到父程序的值
    $y = 200;
    echo $y . "\n";
}
$n = 100;
test3($n);
echo $n;

function test4(){
    $array = array(1, 4, 6, 8, 3, 0);
    print_r($array) . "\n";
    echo next($array) . "\n";
    echo next($array) . "\n";
    sort($array);
    echo next($array) . "\n";
    echo next($array) . "\n";
    echo key($array) . "\n";
    print_r($array);
}
test4();


//默认参数函数, 适合实参少于形参的函数

function test5($name = "张三", $age, $sex = "男"){
    echo "姓名：{$name} \n 年龄 ： {$age} \n 性别 : {$sex} \n";
}
test5("梅兴昊", 22);

//可变个数参数，是个实参多于形参的情况

function test6(){
    $args = func_get_args();      //获取所有的参数，并存于数组中，返回
    $num = func_num_args();         //获取所有参数的个数
    for($si = 0; $si <= count($args); $si++){
        echo "第" . $si . "个参数是：" . $args[$si];
    }
}

test6("one", "two", "three");