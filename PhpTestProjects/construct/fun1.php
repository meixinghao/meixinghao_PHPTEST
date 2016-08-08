<?php

class fun1
{
    function __construct($arg)
    {
        foreach ($arg as $key => $value) {
            $this->$key = $value;
        }
    }
}