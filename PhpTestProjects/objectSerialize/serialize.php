<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/12
 * Time: 10:33
 */

include("classa.inc");

$a = new A;
$s = serialize($a);

file_put_contents('store', $s);

