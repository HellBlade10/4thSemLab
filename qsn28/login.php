<?php
session_start();
if($_POST){
  $u=$_POST['user'];
  $p=$_POST['pass'];
  if($u=="admin" && $p=="123"){
    $_SESSION['user']=$u;
    setcookie("user",$u,time()+60);
    header("Location: home.php");
  } else echo "Invalid";
}
?>
<form method="post">
Username: <input name="user"><br><br>
Password: <input type="password" name="pass"><br><br>
<input type="submit" value="Login">
</form>
