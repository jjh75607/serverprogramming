<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <header>
        <?php 
            include "header.php";
        ?>
    </header>

    <?php
        $mode = $_GET['mode'];
        
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = 1;
        }
    ?>

    <section>
        <h3>
            <?php
                 if ($mode == 'send') {
                    echo "송신 쪽지함 > 목록보기";
                 } else {
                    echo "수신 쪽지함 > 목록보기";   
                 }
            ?>
        </h3>

        <hr>
        <span>번호</span> <span>제목</span>
        <sapn>
            <?php
                if($mode == "send") {
                    echo "받는 사람";
                } else {
                    echo "보낸 사람";
                }
            ?>
        </span> <span>등록일</span>
        리스트 올 장소

        <?php
            $con = mysqli_connect("localhost", "root", "tnswo9922", "sample");
            
            if ($mode == 'send') {
                $sql = "select * from message where send_id='$userid' order by num desc";
            } else {
                $sql = "select * from message where rv_id='$userid' order by num desc";
            }

            $result = mysqli_query($con, $sql);
            $total_num = mysqli_num_rows($result);
            $number = $total_num;

            $scale = 2;
            $total_page = ceil($total_num / $scale);
            $start = ($page - 1) * $scale;
            $number = $total_num - $start;

            for ($i = $start; $i < $start + $scale && $i < $total_num; $i++) {
                mysqli_data_seek($result, $i);
                $row = mysqli_fetch_array($result);

                $num = $row['num'];
                
                if ($mode == "send") {
                    $msg_id = $row['rv_id'];
                } else {
                    $msg_id = $row['send_id'];
                }

                $subject = $row['subject'];
                $content = $row['content'];
                $date = $row['regist_day'];

                $sql = "select name from members where id='$msg_id'"; 
                $result2 = mysqli_query($con, $sql);
                $row2 = mysqli_fetch_array($result2);
                $name = $row2['name'];
                ?>

                <div>
                    <span><?= $number--; ?></span> <span><?= $subject ?></span>
                    <span><?= $name."(".$msg_id.")" ?></span> <span><?= $date ?></span>
                </div>
        <?php
            }
        ?>
        <hr>
        
        <?php
            if($total_page >= 2 && $page >= 2) {
                $prv = $page - 1;
                echo "<a href='mymessagebox.php?mode=$mode& page=$prv>◀︎이전</a>";
            } else {
                echo "&nbsp;";
            }

            for ($i = 1; $i <= $total_page; $i++) {
                if($i == $page) {
                    echo "<a herf='mymessagebox.php?mode=$mode&page=$i>$i</a> ";
                } else {
                    echo " $i ";
                }
            }

            if($total_page >= 2 && $page != $total_page) {
                $next = $page + 1;
                echo "<a href='mymessagebox.php?mode=$mode& page=$next>다음▶︎</a>";
            }
        ?>

    </section>
    
    
</body>
</html>