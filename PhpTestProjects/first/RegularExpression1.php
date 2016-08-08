<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/7/21
 * Time: 12:34
 * 正则表达式

 */
$pattern = '/<a.*?(?:|\\t|\\r|\\n)?href=[\'"]?(.+?)[\'"]?(?:(?:|\\t|\\n)+.*?)?>(.+?)<\/a.*?>/sim';
$content = "请单击进入<a href='http://www.lampbrother.net'>LAMP兄弟连</a>技术社区。";

//$pattern = '/[^apj]sp/';
//$content = "msp";

if(preg_match($pattern, $content)){
    echo "匹配成功";
}else{
    echo "匹配失败";
}

//原子是正则表达式的最基本的组成单位，而且在每个模式中都要有最少包含一个原子


//元字符
