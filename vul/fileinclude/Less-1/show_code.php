<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript">if($_GET['name'] == NULL || $_GET['name'] == ''){
    $html = '';
} else {    
    $html .= '<pre>';
    $html .= 'Hello ' . $_GET['name'];
    $html .= '</pre>';
}
</code>
</pre>
</li>