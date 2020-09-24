<?php
    $arr = array(15, 13, 9, 7, 6, 12, 19, 30, 28, 26);

    for ($i = 0; $i < 10; $i++) {
        for ($j = 0; $j < 9 - $i; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    for ($i = 0; $i < 10; $i++) {
        echo " $arr[$i] ";
    }
?>