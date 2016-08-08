<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 11:57
 */
    $a = 100;
    $b = "hello";
    $c = TRUE;
    $d = 12.89;

    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    var_dump((bool)"");
    var_dump((bool)0);
    var_dump((bool)array());
    var_dump((bool)1);
    var_dump((bool)-1);
    var_dump((bool)2);
    var_dump((bool)"false");



?>

<?php

    $large_number = 2147483647;
    var_dump($large_number);

    $large_number = 2147283648;
    var_dump($large_number);

    var_dump(0x80000000);

    $million = 1000000;
    $large_number = 50000*$million;
    var_dump($large_number);
?>

<?php
    $f = 1.234;
    $f1 = 1.234;
    $f = 7E-10;
    $d = 2;
    $d1 = 2;
    if($f == $f1)
    {
        echo "xiangdeng";                   //永远不要比较两个浮点类型的数，因为我们永远不知道浮点数结果是否精确到最后一位
    }
    else
    {
        echo "buxiangdeng";
    }

    echo $large_number;

?>

<?php
    //字符串  --单引号
    echo 'this is a simple string';

    echo 'this is a \'simple\' string';

    echo 'this \n is \r a \t simple string \\';

    $str = 100;
    echo 'this is a simple $str string';
?>

<?php
    //字符串双引号
    echo "this is a simple string \n";

    echo "this is a \'simple\' string \n";

    echo "this is a \t simple \r string \\ \n";

    $str = 100;
    $str1 = 'aobama';
    echo "this is a simple $str string \n";
    echo "$str1's is a man \n";     //可以解析str1,因为（'）在变量名中无效
    echo "$str1s is a man \n";      //无法解析
    echo "${str1}s is a man \n";    //可以解析
    echo "{$str1}s is a man \n";    //可以解析
?>

<?php
    //定界符
    $str3 = <<<EOT
        what are you 弄啥了！
        what are you 弄啥了！
        what are you 弄啥了！
        what are you 弄啥了！
        what are you 弄啥了！what are you 弄啥了！
                    what are you 弄啥了！
EOT;
        echo $str3;
?>
