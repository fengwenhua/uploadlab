<?php
$value = "my cookie value";
// 发送一个简单的 cookie
setcookie("TestCookie",$value);
include '../../../config.php';
include '../../../head_normal.php';
include '../../../menu.php';
header("Content-type: text/html; charset=utf-8");
// 关闭错误报告
error_reporting(0);
?>


<h1>反射性xss： 第二关</h1>
<div id="upload_panel">
	<form name="XSS" action="#" method="GET">
		<p>What's your name?</p>
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>
	
<?php

// Is there any input?
if( array_key_exists( "name", $_GET ) && $_GET[ 'name' ] != NULL ) {
	// Get input
	$name = str_replace( '<script>', '', $_GET[ 'name' ] );

	// Feedback for end user
	$html = "<pre>Hello ${name}</pre>";
}else{
	$html="";
}
	
echo $html;





// 显示源码
if($_GET['action'] == "show_code"){
    include 'show_code.php';
}
include '../../../footer.php';
?>
</div>





 
