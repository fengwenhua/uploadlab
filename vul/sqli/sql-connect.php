<?php

include("config.php");
@error_reporting(0);
@$con = mysql_connect($host,$dbuser,$dbpass);

// 检查链接
if (!$con)
{
    echo "Failed to connect to MySQL: " . mysql_error();
}else{
	// 设置活动的 MySQL 数据库
	@mysql_select_db($dbname,$con) or die ( "Unable to connect to the database: $dbname");
}
?>




 
