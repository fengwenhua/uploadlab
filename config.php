<?php
header("Content-type: text/html;charset=utf-8");
error_reporting(0);
// 网站根目录
define("WWW_ROOT",$_SERVER['DOCUMENT_ROOT']);
define("APP_ROOT",str_replace('\\','/',dirname(__FILE__)));
// 需要将根目录中的反斜杠变成斜杠
define("APP_URL_ROOT",str_replace(WWW_ROOT,"",APP_ROOT));

//文件包含漏洞页面
define("INC_VUL_PATH",APP_URL_ROOT . "/include.php");
//设置上传目录
define("UPLOAD_PATH", "../upload");
?>