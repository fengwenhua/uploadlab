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

[<em><a href="?page=file1.php">file1.php</a></em>] - [<em><a href="?page=file2.php">file2.php</a></em>] - [<em><a href="?page=file3.php">file3.php</a></em>]

// 显示源码
if($_GET['action'] == "show_code"){
    include 'show_code.php';
}
include '../../../footer.php';
?>
</div>
