<li id='show_code'>
	<h3>代码</h3>
<pre>
<code class="line-numbers language-php">$is_upload = false;
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
</code>
</pre>
</li>