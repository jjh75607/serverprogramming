<?php
    function man_age($year, $month, $day, $b_year, $b_month, $b_day) {
        if ($b_month < $month) {
            $age = $year - $b_year;
        } elseif ($b_month == $month) {
            if ($b_day <= $day) {
                $age = $year - $b_year;
            } else {
                $age = $year - $b_year - 1;
            }
        } else {
            $age = $year - $b_year - 1;
        }
        return $age;
    }

    $nowYear = 2019;
    $nowMonth = 9;
    $nowDay = 10;
    
    $birthYear = 1999;
    $birthMonth = 2;
    $birthDay = 9;

    $yourAge = man_age($nowYear, $nowMonth, $nowDay, $birthYear, $birthMonth, $birthDay);

    echo "오늘 날짜 : $nowYear 년 $nowMonth 월 $nowDay 일"."<br>";
    echo "오늘 날짜 : $birthYear 년 $birthMonth 월 $birthDay 일생"."<br>";
    echo "만 나이 : $yourAge 세";
?>