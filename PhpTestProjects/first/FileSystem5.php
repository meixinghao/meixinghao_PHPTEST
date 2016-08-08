
<?php
/****
 *文件的基本操作
 */


//文件的打开与关闭fopen(),fclose()
$handle = fopen("/Users/apple/PhpstormProjects/first/info.txt", "r");        //只读的方式打开文件，从文件开头读
$handle1 = fopen("/Users/apple/PhpstormProjects/first/info.txt", "r+");      //只读写的方式打开文件，从文件开头读写
$handle2 = fopen("/Users/apple/PhpstormProjects/first/info1.txt", "w");      //只写的方式打开文件，从文件开头写，如果文件不存在，则会创建该文件。r则不会
$handle3 = fopen("/Users/apple/PhpstormProjects/first/info1.txt", "w+");      //读写的方式打开文件，从文件开头写，如果文件不存在，则会创建该文件。r则不会
$handle4 = fopen("/Users/apple/PhpstormProjects/first/info1.txt", "wb");      //以二进制模式打开
$handle5 = fopen("http://www.baidu.com", "r");                                  //打开远程文件，http只支持只读方式打开
$handle6 = fopen("/Users/apple/PhpstormProjects/first/info1.txt", "a");      //写入方式打开，他是在文件内容末尾处写入内容，不会覆盖原内容，w方式会
$handle7 = fopen("/Users/apple/PhpstormProjects/first/info2.txt", "a+");      //写入方式打开，他是在文件内容末尾处写入内容或读，不会覆盖原内容，w方式会
$handle8 = fopen("/Users/apple/PhpstormProjects/first/info1.txt", "wt");      //以文本模式打开，
//var_dump(fclose($handle));

//写入文件fwrite()
for($row = 0; $row <= 10; $row++){
    fwrite($handle1, "hhhhhhhhhhhhh\n", 10);         //第三个参数可选，写入字节长度，
    fwrite($handle7, ":hhhhhhhhhhhhh\n");
}

//快速写入文件 file_put_contents()函数，和依次调用fopen(),fwrite(),以及fclose(）的功能一样
$data = "共 10 行 数据\n";
for($row = 0; $row <= 10; $row++){
    $data .= $row.":www.lampbrother.net\n";
}
file_put_contents("/Users/apple/PhpstormProjects/first/info3.txt", $data);


//读取文件内容fread(),fgets(),fgetc(),file(),readfile(),file_get_contents
//feof()判断一个文件指针是否位于文件的结束处，如果在结束处就返回true
$content = fread($handle, 10);         //读取前20字节
fclose($handle);
echo $content;

//二进制文件
$handle9 = fopen("/Users/apple/PhpstormProjects/first/info3.txt", "rb") or die("文件打开失败");
$content = "";
while(!feof($handle9)){
    $content .= fread($handle9, 1024);
}
fclose($handle9);
echo $content;

$filename = "/Users/apple/PhpstormProjects/first/info3.txt";
$handle10 = fopen($filename, "r") or die("打开文件失败");
$content = fread($handle10, filesize($filename));
fclose($handle10);
echo $content;
echo filesize($filename);


//使用file_get_contents()将文件内容读入到一个字符串的首选方法
echo file_get_contents("/Users/apple/PhpstormProjects/first/info3.txt");

//函数fgets(),fgetc()
$filename = "/Users/apple/PhpstormProjects/first/info3.txt";
$handle11 = fopen($filename, "r") or die("打开文件失败");
while(!feof($handle11)){
    $buffer = fgets($handle11, 4096);
    echo $buffer;
}

fclose($handle11);

$handle12 = fopen($filename, "r") or die("打开文件失败");
while(false !== ($char = fgetc($handle12))){
    echo $char;
}

//fiel()把文件中数据读入到一个数组中去，不需要fopen（）函数打开文件
print_r(file($filename));

//函数readfile()
//读取指定的整个文件，立即输出到输出缓冲区，并返回读取的字节数，该函数也不需要使用fopen（）函数打开文件
readfile($filename);