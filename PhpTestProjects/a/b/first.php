<?php
function test()
{
    echo "\t\t\thellp";
}

//test();


function test1()
{
    $i = 0;
    for ($j = 0; $j <= 99; $j++) {
        $i += 0.1;
    }

    echo $i . PHP_EOL;
}

test1();

function test2()
{
    $sum = 0;
    for ($i = 1; $i <= 100; $i++) {
        $sum += $i;
    }

    echo $sum . PHP_EOL;
}
test2();