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


<h1>反射性xss： 第一关</h1>
<div id="upload_panel">
	<form name="XSS" action="#" method="GET">
		<p>What's your name?</p>
		<input type="text" name="name">
		<input type="submit" value="Submit">
	</form>
	
<?php

if($_GET['name'] == NULL || $_GET['name'] == ''){
	$html = '';
} else {	
	$html .= '<pre>';
	$html .= 'Hello ' . $_GET['name'];
	$html .= '</pre>';
}
	
echo $html;

// 显示源码
if($_GET['action'] == "show_code"){
    include 'show_code.php';
}
include '../../../footer.php';
?>
</div>





 
