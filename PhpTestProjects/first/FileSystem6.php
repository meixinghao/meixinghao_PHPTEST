<?php
/**
 * 访问远程文件
 */
$file = fopen("http://www.cnblogs.com/meixinghao/articles/4654977.html", "r") or die("打开远程文件失败");    //只能可读，访问ftp时只能可读或者只能可写，但是不能读写
while(!feof($file)){
    $line = fgets($file, 1024);         //每读一行

    if(preg_match("/<title>(.*)<\/title>/", $line, $out)){
        $title = $out[1];
        break;
    }
}
fclose($file);
echo $title;

//移动文件指针
//函数ftell()返回文件指针的当前位置
//函数fseek()移动文件指针到指定的位置
//rewind()移动文件指针到文件的开头
$fp = fopen('/Users/apple/PhpstormProjects/first/info3.txt','r') or die("文件打开失败");

echo ftell($fp)."<br>";
echo fread($fp, 10)."<br>";
echo ftell($fp)."<br>";


fseek($fp, 100, SEEK_CUR);    //将文件当前指针的位置，由当前位置向后移动100个字节数
echo ftell($fp)."<br>";
echo fread($fp, 10)."<br>";

fseek($fp, -10, SEEK_END);          //将文件指针移动到倒数10个字节位置处
echo ftell($fp)."<br>";

rewind($fp);                        //将文件指针移动到文件开头
echo ftell($fp)."<br>";

fclose($fp);




