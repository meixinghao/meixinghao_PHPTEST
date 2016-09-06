<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 16/9/5
 * Time: 21:49
 */

for ($i = 0; $i < 3; $i++) {
    $line = readline("Command: ");
    readline_add_history($line);
    print_r(readline_info());
}
