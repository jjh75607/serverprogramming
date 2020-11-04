<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
        function incheck() {
            if (!document.myform.id.value) {
                alert("아이디를 입력 하세요.");
                document.myform.id.focus();
                return;
            }
        

            if (!document.myform.pass.value) {
                alert("패스워드를 입력 하세요.");
                document.myform.pass.focus();
                return;
            }

            document.myform.submit();
        }
    </script>
</head>
<body>
    <h1>로그인</h1>
    
    <form action="mylogin.php" method="POST" name="myform">
        <div>
            ID : <input type="text" name="id">
        </div>

        <div>
            PASS : <input type="password" name="pass">
        </div>

        <div>
            <input type="submit" value="로그인" onclick="incheck()">
            <input type="reset" value="취소하기">
        </div>
    </form>
</body>
</html>