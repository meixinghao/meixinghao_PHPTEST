<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/4
 * Time: 14:33
 * 通串redis命令
 */


/**
 * @param $username
 * key-values
 */
function test1($username)
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->set('username', $username);     //存一个用户姓名
    $redis->expire('username', 40);      //设置用户存在的时间

    $exists_time = $redis->ttl('username');     //获取生存时间, 以秒为单位 pttl为毫秒

    if ($exists_time < 60) {
        $redis->set('username', '梅兴昊');             //如果username的存在时间小于60秒，修改usename的值
    }

    echo $redis->get('username');
    echo $redis->ttl('username') . PHP_EOL;                   //修改以后存在时间改变

    if ($redis->exists('username')) {             //判断一个key是否存在
        echo "username存在\n";
        echo "username的长度" . $redis->strlen('username') . PHP_EOL;
    }

    if ($redis->setnx('username', '张三')) {      //当只有key不存在时setnx，才能设置成功
        echo "存储成功,username不存在\n";
    } else {
        echo "存储失败，username已存在\n";
    };

    $user_array1 = array('username', 'age', 'sex');
    $redis->mset(array('age' => 22, 'sex' => 'man'));       //设置多个值
    $user_array = $redis->mget($user_array1);  //取多个值

    echo "用户详细信息：\n";
    foreach ($user_array as $key => $value) {
        echo $user_array1[$key] . "=>" . $value . PHP_EOL;
    }
}

//test1('meixinghao');

/**
 * hash
 */
function test2($username, $age, $sex)
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->hset('userinfo', 'username', $username);        //创建用户信息的hash，设置用户名
    $redis->hmset('userinfo', array('age' => $age, 'sex' => $sex)); //设置多个值
    $userinfo_array = $redis->hgetall('userinfo');    //获取所有的元素

    echo "用户信息：\n";
    foreach ($userinfo_array as $key => $value) {
        echo $key . "=>" . $value . PHP_EOL;
    }

    if ($redis->hexists('userinfo', 'sex')) {       //判断sex是否存在
        if ($redis->hget('userinfo', 'sex') != null) {
            $redis->hdel('userinfo', 'sex');
        }
    }
    echo "userinfo的长度：" . $redis->hlen('userinfo') . PHP_EOL;
    echo "userinfo的信息的所有值\n";

    foreach ($redis->hvals('userinfo') as $key => $value) {
        echo $value . PHP_EOL;
    }

}

//test2('张三', '13', 'man');

/**
 * sortset
 */
function test3($user)
{
    $size = 10;
    $start = 0;
    $page_count = 1;

    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    if ($redis->exists('user')) {
        $redis->del('user');
    }

    for ($i = 0; $i < 1000; $i++) {
        $redis->zadd('user', $i, "user" . $i);        //插入1000个用户
    }


    while (true) {
        $user_array = $redis->zRange('user', $start, $start + $size - 1);       //分页查询数据
        $start += $size;
        echo "第" . $page_count . "页\n";

        foreach ($user_array as $value) {
            echo "用户:" . $value . PHP_EOL;
        }
        $page_count++;
        if (count($user_array) < $size) {
            break;
        }
    }
    echo "一共" . $redis->zcard('user') . "个用户\n";
    echo $user . "score值是" . $redis->zScore('user', $user) . PHP_EOL;
    $redis->zIncrBy('user', 10, $user);                     //$user的score值加10, score值可以重复，值不可以
    echo $user . "score值加10后是" . $redis->zScore('user', $user) . PHP_EOL;
    $redis->zrem('user', $user);            //删除$user


}

//test3('user5');

/**
 * list
 */
function test4()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->lPush('list', 'userinfo', 'studentinfo');
    echo "list的长度是" . $redis->llen('list') . PHP_EOL;
    $userinfo_array = $redis->hGetAll($redis->lIndex('list', 1));         //从list查出一个用户，在去hash中找出用户的全部信息
    foreach ($userinfo_array as $key => $value) {
        echo $key . "=>" . $value . PHP_EOL;
    }
    $list_info = $redis->lRange('list', 0, 1);
    foreach ($list_info as $value) {
        echo $value . PHP_EOL;
    }

    $redis->ltrim('list', 0, 1);            //保留0-1的数据
    $redis->lRem('list', 'studentinfo', 0); //和ltrim不同，参数位置和文档也不同，第三个参数大于0，从表头开始向表尾检索，删除studentinfo，个数为第三个参数的绝对值，小于0相反，等于0删除全部
}

//test4();

/**
 * 事务
 */
function test5()
{
    $redis = new Redis();
    $redis->connect('127.0.0.1', 6379);

    $redis->multi();
    $redis->set('name', 'meixinghao');          //这里并设置成功，因为事务并没有提交
    //echo $redis->get('name');         //这里输出报错
    $redis->exec();         //提交事物
    echo $redis->get('name');  //ok
}
test5();