<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript">$file = $_GET['page'];
if( isset( $file ) ){
	// Input validation
	$file = str_replace( array( "http://", "https://" ), "", $file );
	$file = str_replace( array( "../", "..\"" ), "", $file );
	include( $file );
	
}else {
}
</code>
</pre>
</li>