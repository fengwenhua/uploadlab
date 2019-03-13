<?php
include 'config.php';
include 'head.php';
include 'menu.php';
?>
<style type="text/css">
/*隐藏 显示源码，查看提示，清空上传*/
#head_menu a{
	display: none;
}
</style>

<div id="upload_panel">
    <ol>
        <li>
            <h3>简介</h3>
            <p><code>uploadlab</code>是一个使用<code>php</code>语言编写的,专门收集渗透测试和CTF中遇到的各种上传漏洞的靶场。旨在帮助大家对上传漏洞有一个全面的了解。</p>
        </li>
        <li>
            <h3>注意</h3>
            <p>1. 每一关没有固定的通关方法,请大家发散思维。</p>
            <p>2. 本项目提供的<code>writeup</code>只是起一个参考作用。</p>
            <p>3. 如果没有思路时,可以点击<code>查看提示</code>。</p>
            <p>4. 实在实在做不出,可以点击<code>查看源码</code>。</p>
        </li>
	</ol>
</div>


<?php
include 'footer.php'
?>