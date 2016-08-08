<?php

function test()
{
    $b = 3;
    $a = <<<EOD
    hello world $b, {$b}
EOD;

    $c = <<<EOF
    yes $a
EOF;

    echo $a;
    echo $c;

}

test();