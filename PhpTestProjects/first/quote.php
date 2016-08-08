<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 11:49
 */
    $a = 100;
    $b = &$a;
    echo $b;
    unset($a);
    echo $b;
    echo $a;
?>