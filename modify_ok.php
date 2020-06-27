<?php
    require_once("./connect.php");
    $no = $_POST['no'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $date = date('Y-m-d H:i:s');

    $sql = "update board set title='$title', content='$content', date='$date' where no=$no";
    $result =mysqli_query($connect,$sql) or die("Select Query Error");
    if($result==true) {
?>
        <script>
            alert("수정되었습니다.");
            location.replace("./view.php?no=<?=$no?>");
        </script>
<?php    }
    else {
        echo "fail";
    }
?>
