<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/17
 * Time: 15:34
 */
    $file_handle = fopen("info.txt","w");        //打开摸文件，没有该文件，会自动创建该文件
    var_dump($file_handle);
    //echo($file_handle);

    $dir_handle = opendir("/Users/apple/PhpstormProjects/first/");          //打开文件目录
    var_dump($dir_handle);
    //echo($dir_handle);

    $im_handle = imagecreate(100, 50);    //使用imagecreate创建一个100*50的花瓣
    var_dump($im_handle);

    $xml_parser = xml_parser_create();    //返回XML解析器资源
    var_dump($xml_parser);

?>