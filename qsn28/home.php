<?php
session_start();
if(!isset($_SESSION['user'])) header("Location: login.php");
echo "Welcome ".$_SESSION['user']."<br>";
echo "Cookie: ".$_COOKIE['user']."<br>";
echo "<a href='logout.php'>Logout</a>";
?>
