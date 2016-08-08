<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 10:08
 * 常用的字符串格式化函数
 */

//去空格和字符串填补函数
//ltrim() rtrim() trim()
$str = "   梅兴昊  ";
echo strlen($str) . "<br>";
echo strlen(ltrim($str)) . "<br>";
echo strlen(rtrim($str)) . "<br>";
echo strlen(trim($str)) . "<br>";


$str1 = "123 This is a test...";
echo ltrim($str1, "0..9") . "<br>";       //过滤掉字符串左侧所有的数字
echo rtrim($str1, ".") . "<br>";          //过滤掉右侧所有的.符号
echo trim($str1, "A..Z  0..9 .") . "<br>";         //过滤掉两端的数字和大写字母还有 . 符号


//把字符串填充为新的长度
//str_pad有四个参数：第一个：要处理的字符串(必选项)，第二个：指定字符串的长度(必选项)，第三个：要替代的字符串（可选项，不选自动用空格填充）第四个：填充的方向（三个值：STR_PAD_LEFT，STR_PAD_RIGHT，STR_PAD_BOTH）
$str2 = "meixinghao";
echo str_pad($str2, 20) . "<br>";
echo str_pad($str2, 20, "++", STR_PAD_LEFT) . "<br>";
echo str_pad($str2, 20, "++", STR_PAD_RIGHT) . "<br>";
echo str_pad($str2, 20, "++", STR_PAD_BOTH) . "<br>";
echo str_pad($str2, 20, "_ _ _ ") . "<br>";

//字符串大小写的转换
//strtolower,strtoupper,ucfirst,ucwords
$str3 = "meixinghao is Good man";
echo strtolower($str3) . "<br>";
echo strtoupper($str3) . "<br>";
echo ucfirst($str3) . "<br>";       //第一个单词的第一个字母大写
echo ucwords($str3) . "<br>";       //所有单词的第一个字母大写
echo ucwords(strtolower($str3)) . "<br>";

//和HTML标签相关的字符串格式化
//函数nl2br(）
echo nl2br("One line.\nAnother line.\n");

//翻转字符
echo strrev("翻转字符");

//使用千位分组来格式化数字
echo number_format(1234);

//strip_tags剥去html XML php标签
$str4 = "<font>ddddd</font>";
echo strip_tags($str4, "<font>");

//md5()
echo md5("meixinghao");
