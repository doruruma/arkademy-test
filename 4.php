<?php


# ===================
# Author : Andra Yuda
# ===================


function divideAndSort($number)
{

    if (!is_numeric($number)) {
        echo 'Input is not a Number!';
        exit;
    }

    $arr = str_split($number);

    sort($arr);

    foreach ($arr as $arr) {
        if(!$arr == 0) {
            echo $arr;
        }
    }

}

divideAndSort('12032430');
