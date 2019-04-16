<?php
include '../../../config.php';
include '../../../head_normal.php';
include '../../../menu.php';
header("Content-type: text/html; charset=utf-8");
// 关闭错误报告
error_reporting(0);
?>





<h1>文件包含： 第一关</h1>
<div id="upload_panel">

<?php

$file = $_GET[ 'page' ];

if( isset( $file ) )
	include( $file );
else {
	header( 'Location:?page=include.php' );
	exit;
}






// 显示源码
if($_GET['action'] == "show_code"){
    include 'show_code.php';
}
include '../../../footer.php';
?>
</div>





 
