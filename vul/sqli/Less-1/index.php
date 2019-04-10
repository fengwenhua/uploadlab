<?php
include '../../../config.php';
include '../../../head_sql.php';
include '../../../menu.php';
include '../sql-connect.php';

// 关闭错误报告
error_reporting(0);
?>

<div id="upload_panel">
<?php
if(isset($_GET['id'])){
	$id=$_GET['id'];

	$sql="SELECT * FROM users WHERE id='$id' LIMIT 0,1";
	$result=mysql_query($sql);
	$row = mysql_fetch_array($result);

	if($row)
	{
	  	echo "<font size='5' color= '#99FF00'>";
	  	echo 'Your Login name:'. $row['username'];
	  	echo "<br>";
	  	echo 'Your Password:' .$row['password'];
	  	echo "</font>";
  	}
	else 
	{
		echo '<font color= "#FFFF00">';
		print_r(mysql_error());
		echo "</font>";  
	}
}else { 
	echo "Please input the id as parameter with numeric value";
}

if($_GET['action'] == "show_code"){
    include 'show_code.php';
}

include '../../../footer.php';
?>
</div>





 
