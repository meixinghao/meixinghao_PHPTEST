<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/22
 * Time: 20:00
 */


$allowtype = array("gif", "png", "jpg", "php");
$size = 1000000;
$path = "/Users/apple/PhpstormProjects/first/uploads";


foreach ($_FILES['myfile']['error'] as $key => $value) {
    if ($_FILES['myfile']['error'][$value] > 0) {
        echo '上传错误：';
        switch ($value) {
            case 1:
                die("上传文件{$_FILES['mafile']['name'][$value]}大小超出了php配置文件中的约定值：upload_max_filesize");
            case 2:
                die("上传文件{$_FILES['mafile']['name'][$value]}大小超出表单的约定值：MAX_FILE_SIZE");
            case 3:
                die("文件{$_FILES['mafile']['name'][$value]}只能被部分上传");
            case 4:
                die("没有上传任何文件");
            default:
                die("未知错误");
        }
    }

    $a = explode(".", $_FILES['myfile']['name'][$key]);
    $hz = array_pop($a);
    if (!in_array($hz, $allowtype)) {
        die("文件{$_FILES['myfile']['name'][$key]}后缀是<b>{$hz}</b>,不是允许的文件类型!");
    }

    if ($_FILES['myfile']['size'][$key] > $size) {
        die("文件{$_FILES['myfile']['name'][$key]}超过了允许的<b>{$size}</b>字节大小");
    }


    $filename = date("YmdHis") . rand(1, 10000) . "." . $hz;
    print_r($filename);

    if (is_uploaded_file($_FILES['myfile']['tmp_name'][$key])) {
        if (!move_uploaded_file($_FILES['myfile']['tmp_name'][$key], $path . '/' . $filename)) {
            die('问题：不能将文件移动到指定目录');
        } else {
            //echo ("上传成功");
            //die("问题：上传文件{$_FILES['myfile']['name'][$key]}不是一个合法的文件：");
        }
    }
    echo "文件{$_FILES['myfile']['name'][$key]}上传成功，保持在目录{$path}中，大小为{$_FILES['myfile']['size'][$key]}字节<br>";
}



