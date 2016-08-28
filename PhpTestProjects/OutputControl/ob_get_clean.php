<?php
/**
 * Created by PhpStorm.
 * User: meixinghao
 * Date: 16/8/28
 * Time: 下午8:16
 */

ob_start();

echo "hello world";

echo ob_get_clean();