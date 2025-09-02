<form method="post">
Username: <input type="text" name="user"><br><br>
Password: <input type="password" name="pass"><br><br>
<input type="submit" value="Login">
</form>

<?php
if($_POST){
 if($_POST['user']=="admin" && $_POST['pass']=="1234")
  echo "Login Success";
 else
  echo "Invalid Login";
}
?>
