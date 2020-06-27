<?php
	require_once("./connect.php");

	session_start();

	$no = $_GET['no'];
	$sql = "select * from board where no=$no";
	$res=mysqli_query($connect,$sql) or die("Select Query Error");
	$rows = mysqli_fetch_assoc($res);

	if($_SESSION['id']==$rows['name']){
		$sql = "delete from board where no=$no";
		mysqli_query($connect,$sql) or die("Select Query Error");
		echo '<script>alert("Delete OK")</script>';
		header("Refresh:0; url=./list.php");
	}
	else{
		echo '<script>alert("Delete nono...")</script>';
		header("Refresh:0; url=./list.php");
	}
?>
