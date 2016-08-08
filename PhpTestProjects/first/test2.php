<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 10:37
 */

    $a = "100";

    if(empty($a))
    {
        echo "a 是 一个 空 值 \n";
    }
    else
    {
        echo $a;
    }
    if(isset($a)) {
        echo "a is not set at all \n";
    }
    unset($a);
    if(!isset($a)){
        echo "a is not set at all 222 \n";
    }
phpinfo(

)

?>