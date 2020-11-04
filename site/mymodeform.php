<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php include "header.php"?>
    </header>

    <?php
        $con = mysqli_connect("localhost", "root", "123", "sample");
        $sql = "SELECT * FROM members WHERE id='$userid'";
        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);

        $pass = $row['pass'];
        $name = $row['name'];
        
        $email = explode('@', $row['email']);
        $email1 = $email[0];
        $email2 = $email[1];

        mysqli_close($con);
    ?>

    <section>
        <form action="member_modify.php" method="post">
           <div>
                ID : <?= $userid ?>
           </div> 

           <div>
                PASS : <input type="password" name="pass" value='<?= $pass ?>'>
           </div>
           <div>
                PASS_CON : <input type="password" name="pass_con" value='<?= $pass ?>'>
                NAME : <input type="text" name="name" value='<?= $name ?>'>
           </div>
        </form>
    </section>
</body>
</html>