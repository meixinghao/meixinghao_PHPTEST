<?php

$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}1,$3';
echo preg_replace($pattern, $replacement, $string) . PHP_EOL;

$string1 = 'The quick brown fox jumped over the lazy dog.';
$pattern1 = array();
$pattern1[0] = '/quick/';
$pattern1[1] = '/brown/';
$pattern1[2] = '/fox/';
$replacement1 = array();
$replacement1[0] = 'bear';
$replacement1[1] = 'black';
$replacement1[2] = 'slow';
echo preg_replace($pattern1, $replacement1, $string1) . PHP_EOL;

$pattern2 = array('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/', '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
echo preg_replace($pattern2, $replace, '{startDate} = 1999-5-27') . PHP_EOL;

$str3 = 'foo  o';
$str3 = preg_replace('/\s+/', '', $str3);
echo $str3 . PHP_EOL;

$count = 0;
echo preg_replace(array('/\d/', '/\s/'), '*', 'xp 4 to', -1, $count) . PHP_EOL;
echo $count;
