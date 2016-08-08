<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 17:06
 */
    $foo = "100page";
    echo $foo;
    echo "\n";
    $foo += 2;
    echo $foo;
    echo "\n";
    $foo = $foo + 1.3;
    echo $foo;
    echo "\n";
    $foo = null + "10 Little Piggies";
    echo $foo;
    echo "\n";
    $foo = 5 + "10.05yuan";
    echo $foo;
    echo "\n";
?>


<?php
    //强制类型转换
    $a = 10;
    $b = (boolean)$a;
    echo $b;
    echo "\n";
    $str = "1.23.45adc";
    $int = intval($str);
    echo "$int";
    echo "\n";
    $flo = floatval($str);
    echo "$flo";
    echo "\n";
    $str = strval($str);
    echo "$str";
    echo "\n";
?>