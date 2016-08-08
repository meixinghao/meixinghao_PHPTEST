<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/6/7
 * Time: 11:28
 */
require 'base.php';
class child extends base
{
    function __construct()
    {
        echo "child construct";
    }
}

$child = new child();