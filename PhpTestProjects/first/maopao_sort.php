<?php
/**
 * Created by PhpStorm.
 * User: apple
 * Date: 15/10/14
 * Time: 13:37
 */
function maopao_sort($array)
{
    if (!is_array($array)) {
        return false;
    }
    $length = count($array);
    $flag = false;

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = 0; $j < $length - $i - 1; $j++) {
            if ($array[$j] > $array[$j + 1]) {
                $tmp = $array[$j];
                $array[$j] = $array[$j + 1];
                $array[$j + 1] = $tmp;
                $flag = true;
            }
        }
        if (!$flag) {
            return;
        }
    }
    return $array;
}

$array_arg = array(3, 7, 2, 9, 10, 4, 67, 98, 5);
print_r(maopao_sort($array_arg));

function select_sort($array)
{
    if (!is_array($array)) {
        return false;
    }

    $len = count($array);

    for ($i = 0; $i < $len; $i++) {
        $k = $i;

        for ($j = $i + 1; $j < $len; $j++) {
            if ($array[$k] > $array[$j]) {
                $k = $j;
            }
        }
        if ($i != $k) {
            $temp = $array[$i];
            $array[$i] = $array[$k];
            $array[$k] = $temp;
        }
    }
    return $array;
}

$array = array(7, 2, 4, 1, 6, 3, 8, 0, 5);
print_r(select_sort($array));
?>

