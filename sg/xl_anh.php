<?php
include('dbconnect.php');
?>
<html>
<head>
          <title>Trang Xu ly va Ket qua</title>
</head>

<body>
<?php

  if ($_FILES["file_up"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file_up"]["error"] . "<br />";
    }
  else
    {
    if (file_exists("upload/imgs/" . $_FILES["file_up"]["name"])) // upload ảnh lên thư mục upload/imgs
      {
      echo $_FILES["file_up"]["name"] . " da ton tai file tren server. ";
      }
    else
      {  
      move_uploaded_file($_FILES["file_up"]["tmp_name"],
      "upload/imgs/" . $_FILES["file_up"]["name"]);	
	  
	  $link = "upload/imgs/" . $_FILES["file_up"]["name"];
	  $name = $_POST['name'];
	  $str = "INSERT INTO tbl_imgs VALUES('','$name','$link')";
	  mysql_query($str);
      }
    }
?> 

<br />
<?php
	echo "Duong link cua file la: $link <br />";	
    echo "Ten File: " . $_FILES["file_up"]["name"] . "<br />";
    echo "Type: " . $_FILES["file_up"]["type"] . "<br />";
    echo "Size: " . ($_FILES["file_up"]["size"] / 1024) . " Kb<br />";
    echo "Temp file: " . $_FILES["file_up"]["tmp_name"] . "<br />";
?>
<br />
<img src="<?php echo $link; ?>" width="100" />
<br />
<br />
<br />
<a href="Imgs.php">Back page see all image</a>
</body>
</html>