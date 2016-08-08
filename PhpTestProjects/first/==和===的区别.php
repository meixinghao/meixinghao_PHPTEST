<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 17:58
 */

//==和===的区别：==只要求值相等，而 ===要求值和类型都要相等
    $a = 0;
    var_dump($a == 0);
    var_dump($a == '0');
    var_dump($a === 0);
    var_dump($a === '0');

//同理 !=和！==的原理一样

    var_dump($a !== '0');

?>