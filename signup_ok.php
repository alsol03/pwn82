<?php
   require_once("connect.php");

   $id = $_POST['userid'];
   $pw = password_hash($_POST['userpw'], PASSWORD_DEFAULT);
   $name = $_POST['name'];
   $sex = $_POST['sex'];


$sql = "insert into members (id,pw,name,sex) values('$id','$pw','$name','$sex')";
$res=mysqli_query($connect,$sql) or die(mysqli_error($connect));
echo '<script>alert("Sign-UP OK")</script>';
header("Refresh:0; url=login.php");
?>
