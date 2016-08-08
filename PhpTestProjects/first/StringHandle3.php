<?php
/**
 * 字符串的查找
 */


function findString()
{
    $str = "My Name is mei";

    $str1 = strstr($str, 'Is');     //收索字符串在另一个字符串中出现的首位置，对大小写敏感
    $str2 = stristr($str, 'Is');    //收索字符串在另一个字符串中出现的首位置，对大小不写敏感

    $str3 = strpos($str, 's');          //返回一个字符串在另一个字符串出现的位置，对大小写敏感
    $str4 = stripos($str, 'is');         //返回一个字符串在另一个字符串出现的位置，对大小写不敏感
    echo $str1 . PHP_EOL;
    echo $str2 . PHP_EOL;
    echo $str3 . PHP_EOL;
    echo $str4 . PHP_EOL;
}

findString();