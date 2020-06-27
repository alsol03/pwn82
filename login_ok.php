<?php
session_start();
require_once("./connect.php");
$id=$_POST['userid'];
$pw=$_POST['userpw'];
$sql="select id,pw from members where id='$id'";
$res=mysqli_query($connect,$sql) or die(mysqli_error($connect));
$row=mysqli_fetch_array($res);
if(mysqli_error($connect)) exit();

if (password_verify($pw, $row['pw'])) {
   $_SESSION['id']=$id;
   echo "<script>alert('Login Success')</script>";
   header("Refresh:0; url=index.php");
   exit;
}
else
{
  echo '<script>alert("Wrong ID or Password")</script>';
  header("Refresh:0; url=login.php");
  exit;
}

?>
