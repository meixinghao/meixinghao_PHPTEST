<?php
    function test(){

        $s = "hello word";
        $l = strlen($s);

        for($i = 0; $i <=100; $i++){

            echo $s."\n";
            $l = $l + 10;
            $s = str_pad($s, $l, " ",STR_PAD_LEFT);
        }
    }
test();