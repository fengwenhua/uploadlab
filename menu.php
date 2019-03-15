<!-- <div id="menu">     
	<ul id="menulist">   
		<li>
			<span>文件上传</span>
			<ul>
				<li><a href="#">概述</a></li>
				<li><a id="Pass-01" href="<?php echo APP_URL_ROOT;?>/Pass-01/index.php">Pass-01</a></li> 
				<li><a id="Pass-02" href="<?php echo APP_URL_ROOT;?>/Pass-02/index.php">Pass-02</a></li> 
				<li><a id="Pass-03" href="<?php echo APP_URL_ROOT;?>/Pass-03/index.php">Pass-03</a></li> 
				<li><a id="Pass-04" href="<?php echo APP_URL_ROOT;?>/Pass-04/index.php">Pass-04</a></li> 
				<li><a id="Pass-05" href="<?php echo APP_URL_ROOT;?>/Pass-05/index.php">Pass-05</a></li> 
				<li><a id="Pass-06" href="<?php echo APP_URL_ROOT;?>/Pass-06/index.php">Pass-06</a></li> 
				<li><a id="Pass-07" href="<?php echo APP_URL_ROOT;?>/Pass-07/index.php">Pass-07</a></li> 
				<li><a id="Pass-08" href="<?php echo APP_URL_ROOT;?>/Pass-08/index.php">Pass-08</a></li> 
				<li><a id="Pass-09" href="<?php echo APP_URL_ROOT;?>/Pass-09/index.php">Pass-09</a></li> 
				<li><a id="Pass-10" href="<?php echo APP_URL_ROOT;?>/Pass-10/index.php">Pass-10</a></li>				
			</ul>
		</li>      
 		<li>
 			<span>SQL注入</span>
 			<ul>
 				<li><a href="#">概述</a></li>
 				<li><a href="#">第一关</a></li>
 				<li><a href="#">第二关</a></li>
 			</ul>
 		</li>
 		<li>
 			<span>XSS反射</span>
 			<ul>
 				<li><a href="#">概述</a></li>
 				<li><a href="#">第一关</a></li>
 				<li><a href="#">第二关</a></li>
 			</ul>
 		</li> 		
	</ul> 
</div> -->

<!-- 下面是第二种实现方式 -->


<!-- <ol class="tree">
       <li>
           <label for="folder1" class="folderOne">SQL注入</label> <input type="checkbox" id="folder1" />
           <ol>
                <li>
                   <label for="subfolder1"class="folderTwo">概述</label> <input type="checkbox" id="subfolder1"  />
                   <ol>
                       <li class="file folderThree"><a href="#">常见界面错误举例</a></li>
                       <li class="file folderThree"><a href="#">关于发行报告对BUG管理提出…</a></li>
                       <li class="file folderThree"><a href="#">插件内部JAVA包命名规范</a></li>
                   </ol>
               </li>
                <li class="file folderTwo"><a href="#">第一关</a></li>
                <li class="file folderTwo"><a href="#">第二关</a></li>
                <li class="file folderTwo"><a href="#">第三关</a></li>
                <li class="file folderTwo"><a href="#">第四关</a></li>
           </ol>

       </li>
       <li>
           <label for="folder2" class="folderOne" >文件上传</label> <input type="checkbox" id="folder2" />
           <ol>   
               <li>
                   <label for="subfolder2" class="folderTwo">概述</label> <input type="checkbox" id="subfolder2"  />
                   <ol>
                       <li class="file folderThree"><a href="#">test</a></li>
                   </ol>
               </li>
               <li id="Pass-01" class="file folderTwo"><a href="<?php echo APP_URL_ROOT;?>/vul/fileupload/Pass-01/index.php">第一关</a></li>
               <li id="Pass-02" class="file folderTwo"><a href="<?php echo APP_URL_ROOT;?>/vul/fileupload/Pass-02/index.php">第二关</a></li>
               <li class="file folderTwo"><a href="#">第三关</a></li>
               <li class="file folderTwo"><a href="#">第四关</a></li>
           </ol>
       </li>
       <li>
           <label for="folder3"  class="folderOne">文件包含</label> <input type="checkbox" id="folder3" />
           <ol>
               <li class="file folderTwo"><a href="#">概述</a></li>
               <li class="file folderTwo"><a href="#">第一关</a></li>
           </ol>
       </li>
       <li>
           <label for="folder4"  class="folderOne">XSS</label> <input type="checkbox" id="folder4"/>
           <ol>
               <li class="file folderTwo"><a href="#">概述</a></li>
               <li class="file folderTwo"><a href="#">第一关</a></li>
           </ol>
       </li>
       <li>
           <label for="folder5"  class="folderOne">CSRF</label> <input type="checkbox" id="folder5"/>
           <ol>
               <li class="file folderTwo"><a href="#">概述</a></li>
               <li class="file folderTwo"><a href="#">第一关</a></li>
           </ol>
       </li>
   </ol>
 -->

 <!-- 下面是第三种实现方式 -->
 <div id="menu">
 	<ul id="accordion" class="accordion">
		<li>
			<div class="link"><i class="fa fa-paint-brush"></i>sql注入<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Photoshop</a></li>
				<li><a href="#">HTML</a></li>
				<li><a href="#">CSS</a></li>
				<li><a href="#">Maquetacion web</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-code"></i>文件上传<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="<?php echo APP_URL_ROOT;?>/vul/fileupload/Pass-01/index.php">第一关</a></li>
				<li><a href="<?php echo APP_URL_ROOT;?>/vul/fileupload/Pass-02/index.php">第二关</a></li>
				<li><a href="<?php echo APP_URL_ROOT;?>/vul/fileupload/Pass-03/index.php">第三关</a></li>
			</ul>
		</li>
		<li>
			<div class="link"><i class="fa fa-mobile"></i>文件包含<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Tablets</a></li>
				<li><a href="#">Dispositivos mobiles</a></li>
				<li><a href="#">Medios de escritorio</a></li>
				<li><a href="#">Otros dispositivos</a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-globe"></i>XSS<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Google</a></li>
				<li><a href="#">Bing</a></li>
				<li><a href="#">Yahoo</a></li>
				<li><a href="#">Otros buscadores</a></li>
			</ul>
		</li>
		<li><div class="link"><i class="fa fa-globe"></i>CSRF<i class="fa fa-chevron-down"></i></div>
			<ul class="submenu">
				<li><a href="#">Google</a></li>
				<li><a href="#">Bing</a></li>
				<li><a href="#">Yahoo</a></li>
				<li><a href="#">Otros buscadores</a></li>
			</ul>
		</li>	
	</ul>
</div>