
<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 20:39
 * 统计目录大小
 */

function dirSize($directory){
    $dir_size = 0;

    if($dir_handle = @opendir($directory)){
        while($filename = readdir($dir_handle)){
            if($filename != "." && $filename!= ".."){
                $subFile = $directory."/".$filename;
                if(is_dir($subFile))
                    $dir_size += dirSize($subFile);
                if(is_file($subFile))
                    $dir_size += filesize($subFile);
            }
        }
        closedir($dir_handle);
        return $dir_size;
    }
}

$dir_size = dirSize('/Users/apple/PhpstormProjects/first');
echo round($dir_size/pow(1024,1),2)."KB";


//建立和删除目录
function delDir($directory){
    if(file_exists($directory)){
        if($dir_handle = @opendir($directory)){
            while($filename = readdir($dir_handle)){
                if($filename != "." && $filename != ".."){
                    $subFile = $directory."/".$filename;
                    if(is_dir($subFile))
                        delDir($subFile);
                    if(is_file($subFile))
                        unlink($subFile);
                }
            }
            closedir($dir_handle);
            rmdir($directory);
        }
    }
}

delDir('/Users/apple/PhpstormProjects/Second');


//复制目录
function copyDir($dirSrc, $dirTo){
    if(is_file($dirTo)){
        echo "目标不是目录，不能创建！！";
        return;
    }
    if(!file_exists($dirTo)){           //如果不存在目标，则创建目标目录
        mkdir($dirTo);
    }
    if($dir_handle = @opendir($dirSrc)){
        while($filename = readdir($dir_handle)){
            if($filename != "." && $filename != ".."){
                $subSrcFile = $dirSrc."/".$filename;
                $subToFile = $dirTo."/".$filename;

                if(is_dir($subSrcFile))
                    copyDir($subSrcFile, $subToFile);
                if(is_file($subSrcFile))
                    copy($subSrcFile, $subToFile);          //文件直接复制
            }
        }
        closedir($dir_handle);
    }
}

copyDir("/Users/apple/PhpstormProjects/a","/Users/apple/PhpstormProjects/Second");