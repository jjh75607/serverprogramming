<?php
    if(isset($_COOKIE["userid"]) && isset($_COOKIE["username"])) {
        $userId = $_COOKIE["userid"];
        $username = $_COOKIE["username"];
        echo "userid쿠키 : ".$userId."<br>";
        echo "username 쿠키 : ".$username."<br>";
    } else {
        echo "쿠키가 생성되지 않았습니다.";
    }
?>