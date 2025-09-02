<form method="post" enctype="multipart/form-data">
<input type="file" name="img"><br><br>
<input type="submit">
</form>

<?php
if($_FILES){
 $f=$_FILES['img'];
 if(($f['type']=="image/png" || $f['type']=="image/jpeg") && $f['size']<500000)
  move_uploaded_file($f['tmp_name'],$f['name']);
 else echo "Invalid Image";
}
?>
