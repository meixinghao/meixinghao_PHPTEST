<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/4
 * Time: 11:04
 * 运算符
 */

function test()
{
    echo 2 % 3 . PHP_EOL;
    echo 4 % 5 . PHP_EOL;
    echo ceil(2 / 3) . PHP_EOL;
    echo floor(2 / 3) . PHP_EOL;
    echo round(2 / 3) . PHP_EOL;
}

//test();


function test1()
{
    $i = 1;
    do {
        echo "do whilel \n";
        $i++;
    } while ($i < 10);

    return 0;
}

echo test1();
