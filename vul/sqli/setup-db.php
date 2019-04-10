<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>初始化数据库</title>
</head>

<body bgcolor="#000000">

<div style=" margin-top:20px;color:#FFF; font-size:24px; text-align:center"> 
Welcome&nbsp;&nbsp;&nbsp;
<br>
</div>

<div style=" margin-top:10px;color:#FFF; font-size:23px; text-align:center">
<font size="3" color="#FFFF00">
初始化数据库以及填充数据！！！
<br><br> 


<?php
//including the Mysql connect parameters.
include("../../config.php");




$con = mysql_connect($host,$dbuser,$dbpass);
if (!$con)
  {
  die('[*]...................无法连接到数据库，请检查config.php中关于数据库的配置' . mysql_error());
  }




//@mysql_select_db('mysql',$con)	
	
//purging Old Database	
	$sql="DROP DATABASE IF EXISTS security";
	if (mysql_query($sql))
		{echo "[*]...................如果存在数据库'SECURITY'则删除"; echo "<br><br>\n";}
	else 
		{echo "[*]...................数据库删除失败: " . mysql_error(); echo "<br><br>\n";}


//Creating new database security
	$sql="CREATE database `security` CHARACTER SET `gbk` ";
	if (mysql_query($sql))
		{echo "[*]...................新数据库'SECURITY'创建成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................数据库创建失败: " . mysql_error();echo "<br><br>\n";}

//creating table users
$sql="CREATE TABLE security.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql))
		{echo "[*]...................新表'USERS'创建成功";echo "<br><br>\n";}
	else 
		{echo "[*]...................表创建失败: " . mysql_error();echo "<br><br>\n";}


//creating table emails
$sql="CREATE TABLE security.emails
		(
		id int(3)NOT NULL AUTO_INCREMENT,
		email_id varchar(30) NOT NULL,
		PRIMARY KEY (id)
		)";
	if (mysql_query($sql))
		{echo "[*]...................新表 'EMAILS'创建成功"; echo "<br><br>\n";}
	else 
		{echo "[*]...................表创建失败: " . mysql_error();echo "<br><br>\n";}



//inserting data
$sql="INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'dhakkan', 'dumbo'), ('14', 'admin4', 'admin4')";
	if (mysql_query($sql))
		{echo "[*]...................将数据插入'USERS'表中";echo "<br><br>\n";}
	else 
		{echo "[*]...................数据插入失败: " . mysql_error();echo "<br><br>\n";}



//inserting data
$sql="INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@dhakkan.com'), ('2', 'Angel@iloveu.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com')";
	if (mysql_query($sql))
		{echo "[*]...................将数据插入'EMAILS'表中";echo "<br><br>\n";}
	else 
		{echo "[*]...................数据插入失败: " . mysql_error();echo "<br><br>\n";}

?>


</font>
</div>
</body>
</html>
