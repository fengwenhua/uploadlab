<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript">$file = $_GET['page'];
if( isset( $file ) ){
	// Input validation
	if( !fnmatch( "file*", $file )) {
		// This isn't the page we want!
		echo "ERROR: File not found!";
		exit;
	}
	include( $file );
	
}else {
}
</code>
</pre>
</li>