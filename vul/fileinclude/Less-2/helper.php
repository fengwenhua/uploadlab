<?php

if($_GET['action'] == 'get_prompt'){
    echo '$file = $_GET[ \'page\' ];'."<br>";
    echo 'if( isset( $file ) ){'."<br>";
	echo '$file = str_replace( array( "http://", "https://" ), "", $file );'."<br>";
	echo '$file = str_replace( array( "../", "..\"" ), "", $file );'."<br>";
	echo 'include( $file );';
}

?>