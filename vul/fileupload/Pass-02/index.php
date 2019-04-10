<?php
include '../../../config.php';
include '../../../head_upload.php';
include '../../../menu.php';

$is_upload = false;
$msg = null;
if (isset($_POST['submit'])) {
    if (file_exists(UPLOAD_PATH)) {
        $file_type = $_FILES['upload_file']['type'];
        if($file_type=='image/jpeg' || $file_type == 'image/png' || $file_type == 'image/gif' ){
            $temp_file = $_FILES['upload_file']['tmp_name'];
            $img_path = UPLOAD_PATH . '/' . $_FILES['upload_file']['name'];
            if (move_uploaded_file($temp_file, $img_path)){
                $is_upload = true;
            } else {
                $msg = '上传出错！';
            }
        }else{
            $msg = '文件类型不正确，请重新上次！';
        }
    } else {
        $msg = UPLOAD_PATH . '文件夹不存在,请手工创建！';
    }
}
?>

<div id="upload_panel">
    <ol>
        <li>
            <h1>文件上传--第二关</h1>
        </li>
        <li>
            <h3>任务</h3>
            <p>上传一个<code>webshell</code>到服务器。</p>
        </li>
        <li>
            <h3>上传区</h3>
            <form enctype="multipart/form-data" method="post" onsubmit="return checkFile()">
                <p>请选择要上传的图片：<p>
                <input class="input_file" type="file" name="upload_file"/>
                <input class="button" type="submit" name="submit" value="上传"/>
            </form>
            <div id="msg">
                <?php 
                    if($msg != null){
                        echo "提示：".$msg;
                    }
                ?>
            </div>
            <div id="img">
                <?php
                    if($is_upload){
                        echo '文件上传成功！<br>';
                        echo '<img src="'.$img_path.'" width="250px" />';
                    }
                ?>
            </div>
        </li>
	    <?php 
	        if($_GET['action'] == "show_code"){
	            include 'show_code.php';
	        }
	    ?>
	</ol>
</div>

<?php
include '../../../footer.php'
?>
