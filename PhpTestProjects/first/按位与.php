<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 20:02
 */

    $a = 20;
    $b = 30;
    $c = $a & $b;   //按位与
    $d = $a | $b;   //按位或
    echo $c . "\n";
    echo $d;
?>


<?php
    //反引号
    $x = `ls -al`;
    echo $x;
?>