<?php

trait a
{
    public $a = true;
    public $b = false;
}

class b
{
    use a;
    public $a = true;
    public $b = false;
}


$b = new b();
echo $b->a;
echo $b->b;