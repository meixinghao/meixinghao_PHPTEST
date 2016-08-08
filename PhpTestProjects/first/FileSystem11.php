<?php
//文件的下载，需要三个header()函数，用来定义下载文件类型，下载后的文件名字， 下载文件的长度
$filename = "/Users/apple/PhpstormProjects/first/add.php";
$explode_name = explode("/", $filename);
$RealName = array_pop($explode_name);
header('Content-Type:php');
header("Content-Disposition:attachment; filename = $RealName");
header('Content-Length:'.filesize($filename));
readfile($filename);