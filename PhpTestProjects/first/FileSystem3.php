<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 17:02
 * 遍历目录
 */
$num = 0;
$path = '/Users/apple/PhpstormProjects/first';
$dir_handle = opendir($path);

echo '<table border="1" align="center" width="600" cellspacing="0" cellpadding="0"/>';
echo '<caption><h2>目录'.$path .'下面的内容</h2></caption>';
echo '<tr align="left" bgcolor="#ff7f50">';
echo '<th>文件名</th><th>文件大小</th><th>文件类型</th><th>修改时间</th></tr>';

while($file = readdir($dir_handle)){
    $dirFile = $path."/".$file;

    $bgcolor = $num++%2==0?'#FFFFFF' : '#CCCCCC';
    echo '<tr bgcolor='.$bgcolor.'>';
    echo '<td>'.$file.'</td>';
    echo '<td>'.filesize($dirFile).'</td>';
    echo '<td>'.filetype($dirFile).'</td>';
    echo '<td>'.date("Y/n/t",filemtime($dirFile)).'</td>';
    echo '</tr>';
}
echo '</table>';
closedir($dir_handle);
echo '在<b>'.$path.'</b>目录下的子目录和文件共有<b>'.$num.'</b>个';

