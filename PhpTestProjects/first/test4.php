<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 11:36
 */
    $hi = "hello";
    $$hi = "world";
    echo "$hi $hello \n";
    echo "$hi ${$hi} \n";
?>