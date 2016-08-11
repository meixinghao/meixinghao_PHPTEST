<?php

/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/8/11
 * Time: 17:42
 */

function bool2str($bool)
{
    if ($bool === false) {
        return 'FALSE';
    } else {
        return 'TRUE';
    }
}

function compareObjects(&$o1, &$o2)
{
    echo 'o1 == o2 : ' . bool2str($o1 == $o2) . PHP_EOL;
    echo 'o1 != o2 : ' . bool2str($o1 != $o2) . PHP_EOL;
    echo 'o1 === o2 : ' . bool2str($o1 === $o2) . PHP_EOL;
    echo 'o1 !== o2 : ' . bool2str($o1 !== $o2) . PHP_EOL;
}

class Flag
{
    public $flag;

    public function Flag($flag = true)
    {
        $this->flag = $flag;
    }

}

class OtherFlag
{
    public $flag;

    public function OtherFlag($flag = true)
    {
        $this->flag = $flag;
    }
}

$o = new Flag();
$p = new Flag();
$q = $o;
$r = new OtherFlag();

echo "Two instances of the same class \n";
compareObjects($o, $p);

echo "\nTwo references to the same instance\n";
compareObjects($o, $q);

echo "\nInstances of two different classes\n";
compareObjects($o, $r);