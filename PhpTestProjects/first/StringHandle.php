<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/20
 * Time: 21:49
 */
echo "hello\n";
echo substr("123456",2,4) . "\n";      //截取字符串
$str = "hello";
echo $str[0];   //已过时
echo $str{0};
echo strlen($str);          //获取字符串长度


//双引号中变量解析总结{}





//printf()函数
$str = "LAMP";
$number = 789;
$name = "梅兴昊";
printf("\n %s book.page number %u \n", $str, $number);
printf("%0.3f \n",$number);           //浮点数
printf("%% \n",$number);             //返回百分号
printf("%b \n",$number);            //二进制数
printf("%c \n",$number);            //依照ASII值的字符
printf("%d \n",$number);            //带符号的十进制数
printf("%u \n",$number);            //无符号十进制
printf("%e \n",$number);            //可续计数法
printf("%0.3F \n",$number);         //浮点数
printf("%o \n",$number);            //八进制
printf("%s \n",$number);            //字符串
printf("%x \n",$name);            //十六进制数（小写字母）
printf("%X \n",$name);            //十六进制数（大写字母）

$formart = "The %2\$s book contains %1\$d pages. That's a nice %2\$s full of %1\$d pages name is %3\$s .\n";
printf($formart, $number, $str, $name);


//sprintf()函数
$num = 1000;
$txt = sprintf("%0.2f", $num);
echo $txt;