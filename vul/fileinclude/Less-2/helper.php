<?php

if($_GET['action'] == 'get_prompt'){
	echo '$file = str_replace( array( "http://", "https://" ), "", $file );'."<br>";
	echo '$file = str_replace( array( "../", "..\"" ), "", $file );'."<br>";
}

?>