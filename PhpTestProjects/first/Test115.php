<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/3
 * Time: 11:39
 * asdf423sdf973sdf983尽可能多得写出上边字符串提出数字和字母的方法,用代码实现
 */

function test()
{
    $str = "asdf423sdf973sdf983";
    $num = "";
    $str1 = "";

    $str_arrary = str_split($str);

    foreach ($str_arrary as $key => $value) {

        for ($i = 0; $i <= 9; $i++) {
            if ($value == "$i") {
                $num .= $value;
                $str_arrary[$key] = null;
            }
        }
    }
    foreach ($str_arrary as $key => $value) {
        $str1 .= $value;
    }
    echo '数字:' . $num . PHP_EOL;
    echo '字母:' . $str1 . PHP_EOL;
}

//test();

function test1()
{
    $str = "asdf423sdf973sdf983";
    $num = "";
    $str1 = "";

    $str_arrary = str_split($str);

    foreach ($str_arrary as $key => $value) {
        var_dump(is_numeric($value));
        if (is_numeric($value)) {              //is_numberic判断变量类型
            $num .= $value;
        } else {
            $str1 .= $value;
        }
    }
    echo '数字:' . $num . PHP_EOL;
    echo '字母:' . $str1 . PHP_EOL;
    echo gettype($num) . "\n";
    echo intval(10.99);
    echo ceil(11.2);
    echo floor(11.8);
    echo round(11.8);
}

test1();