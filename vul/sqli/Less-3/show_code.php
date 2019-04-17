<li id="show_code">
    <h3>代码</h3>
<pre>
<code class="line-numbers language-javascript"> $id=$_GET['id'];

    $sql="SELECT * FROM users WHERE id=('$id') LIMIT 0,1";
    $result=mysql_query($sql);
    $row = mysql_fetch_array($result);

    if($row)
    {
        echo "<font size='5' color= '#99FF00'>";
        echo 'Your Login name:'. $row['username'];
        echo "<br>";
        echo 'Your Password:' .$row['password'];
        echo "</font>";
    }
    else 
    {
        echo '<font color= "#FFFF00">';
        print_r(mysql_error());
        echo "</font>";  
    }
</code>
</pre>
</li>