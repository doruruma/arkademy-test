<?php


# ===================
# Author : Andra Yuda
# ===================


function pyramid($size)
{
    for ($a = 1; $a <= $size; $a++) {

        for ($b = $size; $b >= $a; $b -= 1) {
            echo "&nbsp";                       // output spasi dari atas
        }

        for ($c = 1; $c <= $a; $c++) {
            echo '* ';                          // output bintang
        }

        echo "<br/>";                           // pindah ke baris bawah dan mengulang langkah

    }
}

pyramid(6);
