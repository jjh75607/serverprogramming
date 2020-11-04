<?php
    $id = $_POST["id"];
    $pass = $_POST["pass"];

    $con = mysqli_connect("localhost", "root", "123", "sample");
    $sql = "SELECT * from members WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    $num = mysqli_num_rows($result);

    if (!$num) {
        echo "
            <script>
                alert('가입된 아이디가 아닙니다.');
                history.go(-1);
            </script>
        ";
    } else {
        $row = mysqli_fetch_array($result);
        $db_pass = $row['pass'];

        mysqli_close($con);

        if ($db_pass != $pass)  {
            echo "
                <script>
                    alert('비밀번호가 틀렸습니다.');
                    history.go(-1);
                </script>
            ";
        } else {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["userlevel"] = $row["level"];
            $_SESSION["userpoint"] = $row["point"];

            echo("
              <script>
                location.href = 'index.php';
              </script>
            ");
        }
    }
?>