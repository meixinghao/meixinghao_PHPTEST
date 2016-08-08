<?php

$sleepuntil = strtotime("2016-07-07 15:32");

while(time() < $sleepuntil){
    echo "goning" . PHP_EOL;
    time_sleep_until($sleepuntil);
    echo "over";
}
