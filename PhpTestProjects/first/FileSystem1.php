<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 16:10
 */
//文件系统处理
echo filetype('/Users/apple')."\n";             //dir目录类型，也是文件一种
echo filetype('/Users/apple/projects')."\n";
echo filetype('/Users/apple/src/nginx-1.9.2/old.conf/fastcgi.conf')."\n";
echo filetype('/Users/apple/dump.rdb')."\n";

//文件的属性
echo filesize('/Users/apple/dump.rdb')."\n";        //获取文件或目录的大小
var_dump(file_exists('/Users/apple/dump.rdb'));     //判断文件是否存在
var_dump(is_readable('/Users/apple/dump.rdb'));     //判断文件是否可读
var_dump(is_writable('/Users/apple/dump.rdb'));     //判断文件是否可写
var_dump(is_executable('/Users/apple/dump.rdb'));     //判断文件是否可执行
var_dump(date("Y 年 m 月 j 日", filectime('/Users/apple/dump.rdb')));     //获取文件的创建时间,unix时间戳格式
var_dump(date("j日 m 月 Y 年", filemtime('/Users/apple/dump.rdb')));     //获取文件的修改时间,unix时间戳格式
var_dump(fileatime('/Users/apple/dump.rdb'));     //获取文件的访问时间,unix时间戳格式
var_dump(stat('/Users/apple/dump.rdb'));                      //获取文件大部分属性值
clearstatcache('/Users/apple/dump.rdb');               //清除被php缓存的信息