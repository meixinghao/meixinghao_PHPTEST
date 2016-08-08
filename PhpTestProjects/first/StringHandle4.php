<?php
/**
 * 字符串文字编码转换
 */

$str = "Hello world!";
$str1 = convert_uuencode($str);         //对字符串编码
$str2 = convert_uudecode($str1);        //对字符串解码
echo $str;