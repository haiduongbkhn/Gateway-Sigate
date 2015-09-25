<?php
include('dbonnect.php');
$str = "SELECT * FROM tbl_news";
$result = mysql_query($str);
while($rows = mysql_fetch_array($result)){
?>
	<font style="font-weight: bold; font-size: 20px; color: blue;">
		<?php echo $rows['name'];?>
	</font>
	<br /><br />
	<img src="<?php echo $rows['photo'];?>" width="200" />
	<br /><br /><br />	
<?php
}
?>

<br /><br /><br />
<a href="UploadImage.php">Return page upload image</a>
<br /><br /><br />
<a href="http://wsan.byethost5.com">Gateway</a>
	
