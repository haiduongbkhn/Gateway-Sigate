<?php 
	include("dbconnect.php");
?>
<html>
<head>
          <title> Result </title>
 <script>
 	var IdCmd = <?php 
		$result = mysql_query("SELECT MAX(id) FROM tbl_imgs");
		$row = mysql_fetch_row($result);
		$highest_id = $row[0];
		echo $highest_id;
	?>  
	
	setInterval(function(){
		$.get("test2.php", function(data){
			if(data > Idcmd){
				showdata(data);
				IdCmd = data;
				}
			});
		}, 500); 
		
	      
          
          
 </script>
          
</head>
 
<body>
<?php 
	  $sql = "SELECT mac,photo FROM tbl_imgs WHERE MAX(id) ";
	  $result1 = mysql_query($sql);
	  while($row = mysql_fetch_field($result1)){
	  //$row = mysql_fetch_row($sql); 
?>

<img src="<?php echo $row['photo'];?>" width="200" />
 <?php }?>
<br />
<br />
<br />
<a href="Imgs.php" >Back page see all image</a>
</body>
</html>