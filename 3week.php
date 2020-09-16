<?php
    // n에 따라 변화를 주기 위해 변수 n을 생성
    $n = 3;

    if ($n < 7) {
        for ($i = 1; $i <= ($n * 2) - 1; $i++) {
            if ($n + 1 > $i) {
                for ($j = 0; $j < $n - $i; $j++) {
                    echo "&nbsp;";
                }
                
                for ($j = 0; $j < ($i * 2) - 1; $j++) {
                    echo "*";
                }
            } else {
                // N + 1 이후
                for ($j = 0; $j < $i - $n; $j++) {
                    echo "&nbsp;";
                }
                
                for ($j = 0; $j < (($n * 2) - $i) * 2 - 1; $j++) {
                    echo "*";
                }
            }
            
            echo "<br>";
        }
    } else {
        echo "숫자 초과.";
    }
?>