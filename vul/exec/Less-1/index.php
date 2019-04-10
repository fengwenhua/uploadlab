<?php
include '../../../config.php';
include '../../../head_normal.php';
include '../../../menu.php';
header("Content-type: text/html; charset=utf-8");
// 关闭错误报告
error_reporting(0);
?>


<h1>命令执行： 第一关</h1>
<div id="upload_panel">
	<h2>Ping for FREE</h2>
	<p>Enter an IP address below:</p>
	<form name="ping" action="#" method="post">
		<input type="text" name="ip" size="30">
		<input type="submit" value="submit" name="submit">
	</form>
	
<?php

if( isset( $_POST[ 'submit' ] ) ) {
	$target = $_REQUEST[ 'ip' ];
	// Determine OS and execute the ping command.
	if (stristr(php_uname('s'), 'Windows NT')) { 
		$cmd = shell_exec( 'ping  ' . $target );
		$html .= '<pre>'.$cmd.'</pre>';
	} else { 
		$cmd = shell_exec( 'ping  -c 3 ' . $target );
		$html .= '<pre>'.$cmd.'</pre>';
	}
}
	
echo $html;

// 显示源码
if($_GET['action'] == "show_code"){
    include 'show_code.php';
}
include '../../../footer.php';
?>
</div>





 
