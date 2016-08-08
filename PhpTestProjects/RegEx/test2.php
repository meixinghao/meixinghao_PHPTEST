<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/2/18
 * Time: 17:36
 */

$str = "abcdef";
$pattern = '/^def/';
preg_match($pattern, $str, $matches, PREG_OFFSET_CAPTURE, 0);
//print_r($matches);

$str1 = "abcdef";
preg_match($pattern, substr($str1, 3), $matches, PREG_OFFSET_CAPTURE, 0);
//preg_match($pattern, substr($str1, 3), $matches);
//print_r($matches);

if(preg_match('/php/i', 'PHP is the web scripting language of choice.')) {
    echo "php was found" . PHP_EOL;
}


// /b边界
if (preg_match('/\bweb\b/i', "php is this web")){
    echo "web /b is was found" . PHP_EOL;
}

if (preg_match('/\bweb\b/i', "php is thisweb")){
    echo "web is was found";
};

//从url中获取主机名
preg_match('@^(?:http://)?([^/]+)@i', "http://www.web.com/index", $matches);
print_r($matches);
$host = $matches[1];

//获取主机名称的后面两部分
preg_match('/[^.]+\.[^.]+\.[^.]+[^.]$/', $host, $matches);
print_r($matches);