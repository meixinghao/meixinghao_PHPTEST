<?php
include_once('SSDB.php');

//print_r(pdo_drivers());
//$clicent = new Predis\Client('tcp://127.0.0.1:6379');
//$clicent->set('x', 'mmm');
//$value = $clicent -> get('x');
//echo "ffff";


//连接redis数据库
/*$redis = new Redis();

$redis->connect('127.0.0.1', 6379);
$redis->set('aa','bb');
echo $redis->get('aa');*/

function conn()
{

    //r$ssdb1 = new SSDB();

    try {
        $ssdb = new SimpleSSDB('127.0.0.1', 8888);
    } catch (SSDBException $e) {
        die(__LINE__ . ' ' . $e->getMessage());
    }
    $ret = $ssdb->set('key', 'value');
    if ($ret === false) {
        // error!
    }
    echo $ssdb->get('key');
    echo $ssdb->get('name');
}

//conn();

//phpinfo();

echo "<h1>Hello!</h1>";