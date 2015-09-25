<?php
include('dbconnect.php');
$str = "SELECT * FROM tbl_imgs";
$result = mysql_query($str);
while($rows = mysql_fetch_array($result)){
?>
	<font style="font-weight: bold; font-size: 20px; color: blue;">
		<?php echo $rows['mac'];?>
	</font>
	<br />
	<img src="<?php echo $rows['photo'];?>" width="200" />
	<br /><br/>	
<?php
}
?>

<br /><br /><br />
<a href="UploadImage.php">Back page upload images</a>
<br /><br /><br />
<a href="http://wsan.byethost5.com/sg/">Gateway</a>
	
