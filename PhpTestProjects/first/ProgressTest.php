<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/8/1
 * Time: 09:47
 */


function progress()
{
    echo "进程睡眠了\n";
    sleep(10);
    echo "进程睡醒了\n";
}

progress();