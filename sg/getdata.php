<?php 
require 'dbconnect.php';
$sql = "SELECT command FROM command";
$query = mysql_query($sql);
	while($row = mysql_fetch_array($query)){
		echo $row['command'];
	}
mysql_query("DELETE FROM command");

mysql_close($connect);
?>
