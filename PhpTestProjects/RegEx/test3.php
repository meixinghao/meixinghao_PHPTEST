<?php
var_dump(preg_match('/^cm/i', "cm_sss_dssssss"));


$theme_codes = array('molian' => array('wuxyuehui','xuzyuehui','changzhyuehui','nantyuehui','lianyungyuehui','huaiayuehui','yancyuehui','yangzhyuehui','qinzhyuehui','suqyuehui',
    'changsyuehui','zhangjgyuehui','kunsyuehui','wujyuehui','taicyuehui','haiayuehui','rudyuehui','qidyuehui','shaoguanyuehui','shenzhenyuehui','zhuhaiyuehui',
    'shantouyuehui','foshanyuehui','jiangmenyuehui','zhanjiangyuehui','maomingyuehui','zhaoqingyuehui','huizhouyuehui','meizhouyuehui','heyuanyuehui','yangjiangyuehui',
    'qingyuanyuehui','dongguanyuehui','zhongshanyuehui','chaozhouyuehui','jieyangyuehui','yunfuyuehui','suzhouyuehui','zhenjyuehui','moliao','tongchengyuehui','yuai419',
    'tongchengqiuai','dsxh','dsmiai','yyuehui','dsql','dsqh'),
    'yueai1' => array('jqyyue','liaomeishenqi','jimomeinvqiuyue','nuoliao','qiuhuan','tuodan','woshinvhai','wuyeaibaba','dschuangyue','dsyue','dsqiuai','jiawogzh'),
    'yueai' => array('yueaizaixian','qqyueai','yueaijy','zaixianyueai','xiangai','linai','moaionline','yeyue1','tongchengsupei','milian')
);

foreach($theme_codes as $key => $value){
    echo count($value) . PHP_EOL;
}

echo count(array('huzhyuehui','shaoxyuehui','jinhyuehui','quzyuehui','zhousyuehui','taizhyuehui','lishyuehui','kaifyuehui','luoyyuehui','pingdsyuehui','anyyuehui',
    'hebyuehui','xinxyuehui','jiaozyuehui','puyyuehui','xuchyuehui','luohyuehui','sanmxyuehui','nanyyuehui','shangqyuehui','xinyyuehui','zhoukyuehui','zhumdyuehui'));