<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/22
 * Time: 17:58
 * 文件的一些基本操作函数
 */


//复制文件事例
if(copy('info.txt','info1.txt')){
    echo "文件复制成功！";
}else{
    echo "文件复制失败";
}

//删除文件示例
$filename = "info2.txt";
if(file_exists($filename)){
    if(unlink($filename)){
        echo "删除成功";
    }else{
        echo "删除失败";
    }
}else{
    echo "文件不存在";
}

//重命名文件事例
if(rename('info3.txt','info2.txt')){
    echo "文件重命名成功";
}else{
    echo "文件重命名失败";
}


//截取文件示例
$fp = fopen('info4.txt',"r+") or die('文件打开失败');
if(ftruncate($fp,10)){            //将文件截断到指定的长度
    echo "文件截取成功";
}else{
    echo "文件截取失败";
}

