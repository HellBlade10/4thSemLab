<form method="post" enctype="multipart/form-data">
<input type="file" name="cv"><br><br>
<input type="submit">
</form>

<?php
if($_FILES){
 $f=$_FILES['cv'];
 if(($f['type']=="application/pdf" || $f['type']=="application/msword") && $f['size']<1000000)
  move_uploaded_file($f['tmp_name'],$f['name']);
 else echo "Invalid File";
}
?>
