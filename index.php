<?php
session_start();

if(isset($_SESSION['id'])){
echo "<a href=\"list.php\">List PAGE</a><br>";
echo "<a href=\"write.php\">Write PAGE</a><br>";
echo "<a href=\"logout.php\">Logout PAGE</a><br>";
}
if(!(isset($_SESSION['id']))){
echo "<a href=\"login.php\">Login</a>";
}
 ?>
