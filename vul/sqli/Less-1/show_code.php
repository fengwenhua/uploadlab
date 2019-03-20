<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript">$id=$_GET['id'];
    $sql="SELECT * FROM users WHERE id='$id' LIMIT 0,1";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);

    if($row)
    {
        echo 'Your Login name:'. $row['username'];
        echo 'Your Password:' .$row['password'];
    }
    else 
    {
        print_r(mysql_error()); 
    }
</code>
</pre>
</li>