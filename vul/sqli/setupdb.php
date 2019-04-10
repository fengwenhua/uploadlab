
<?php
error_reporting(0);
header("Content-Type: text/html;charset=utf-8");


function setup_db(){
	//including the Mysql connect parameters.
	include("../../config.php");
	$con = mysql_connect($host,$dbuser,$dbpass);
	if (!$con)
	{
		die('[*]...................无法连接到数据库，请检查config.php中关于数据库的配置' . mysql_error());
	}

	// 删掉旧数据库
	$sql="DROP DATABASE IF EXISTS security";
	if (mysql_query($sql)){
		echo "[*]...................如果存在数据库'SECURITY'则删除"; 
		echo "<br><br>\n";
	}else {
		echo "[*]...................数据库删除失败: " . mysql_error(); 
		echo "<br><br>\n";
	}


	// 创建新数据库
	$sql="CREATE database `security` CHARACTER SET `gbk` ";
	if (mysql_query($sql)){
		echo "[*]...................新数据库'SECURITY'创建成功";
		echo "<br><br>\n";
	}else {
		echo "[*]...................数据库创建失败: " . mysql_error();
		echo "<br><br>\n";
	}

	// 创建user表
	$sql="CREATE TABLE security.users (id int(3) NOT NULL AUTO_INCREMENT, username varchar(20) NOT NULL, password varchar(20) NOT NULL, PRIMARY KEY (id))";
	if (mysql_query($sql)){
		echo "[*]...................新表'USERS'创建成功";
		echo "<br><br>\n";
	}else {
		echo "[*]...................表创建失败: " . mysql_error();
		echo "<br><br>\n";
	}

	// 创建email表
	$sql="CREATE TABLE security.emails
			(
			id int(3)NOT NULL AUTO_INCREMENT,
			email_id varchar(30) NOT NULL,
			PRIMARY KEY (id)
			)";
		if (mysql_query($sql)){
			echo "[*]...................新表 'EMAILS'创建成功"; 
			echo "<br><br>\n";
		}else {
			echo "[*]...................表创建失败: " . mysql_error();
			echo "<br><br>\n";
		}

	// 插入数据
	$sql="INSERT INTO security.users (id, username, password) VALUES ('1', 'Dumb', 'Dumb'), ('2', 'Angelina', 'I-kill-you'), ('3', 'Dummy', 'p@ssword'), ('4', 'secure', 'crappy'), ('5', 'stupid', 'stupidity'), ('6', 'superman', 'genious'), ('7', 'batman', 'mob!le'), ('8', 'admin', 'admin'), ('9', 'admin1', 'admin1'), ('10', 'admin2', 'admin2'), ('11', 'admin3', 'admin3'), ('12', 'dhakkan', 'dumbo'), ('14', 'admin4', 'admin4')";
	if (mysql_query($sql)){
		echo "[*]...................将数据插入'USERS'表中";
		echo "<br><br>\n";
	}else {
		echo "[*]...................数据插入失败: " . mysql_error();
		echo "<br><br>\n";
	}

	// 插入数据
	$sql="INSERT INTO `security`.`emails` (id, email_id) VALUES ('1', 'Dumb@dhakkan.com'), ('2', 'Angel@iloveu.com'), ('3', 'Dummy@dhakkan.local'), ('4', 'secure@dhakkan.local'), ('5', 'stupid@dhakkan.local'), ('6', 'superman@dhakkan.local'), ('7', 'batman@dhakkan.local'), ('8', 'admin@dhakkan.com')";
	if (mysql_query($sql)){
		echo "[*]...................将数据插入'EMAILS'表中";
		echo "<br><br>\n";
	}else {
		echo "[*]...................数据插入失败: " . mysql_error();
		echo "<br><br>\n";
	}

	echo "创建成功！";
}

if($_GET['action'] == 'setup_database'){
	echo setup_db();
}

?>

