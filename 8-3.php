<?php
    setcookie("userid", "", time() - 3600);
    setcookie("username", "", time() - 3600);
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        echo "userid와 username가 삭제 되었다.";
    ?>
</body>
</html>