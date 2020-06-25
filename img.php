<?php
include_once("config.php");

if(isset($_POST['upload'])) {
  $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));

  $result = mysqli_query($mysqli, "INSERT INTO t_img(img_name) VALUES('$file')");
}

 ?>
