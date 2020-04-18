<?php


# ===================
# Author : Andra Yuda
# ===================


function getRandom()
{
    return rand('1', '99');
}

function sum($a, $b, $c)
{
    return $a + $b + $c;
}

function matrix($inputRow, $inputCol)
{
    $arr = [];
    for ($row = 0; $row < $inputRow; $row++) {
        for ($col = 0; $col < $inputCol; $col++) {
            echo ' ' . $arr[$row][$col] = getRandom();
        }
        echo '<br>';
    }

    if ($inputRow == $inputCol) {
        echo '<br>';
        $res = sum($arr[0][0], $arr[1][1], $arr[2][2]);
        echo $arr[0][0] . ' + ' . $arr[1][1] . ' + ' . $arr[2][2] . ' = ' . $res;

        echo '<br>';
        $res2 = sum($arr[2][0], $arr[1][1], $arr[0][2]);
        echo $arr[2][0] . ' + ' . $arr[1][1] . ' + ' . $arr[0][2] . ' = ' . $res2;

        echo '<br>';
        echo 'Total : ' . $res . ' + ' . $res2 . ' = ' . ($res + $res2);
    } else {
        echo 'TIdak Bisa Menjumlah Diagonal';
    }
}


matrix(3, 3);
