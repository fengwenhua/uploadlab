<?php

if($_GET['action'] == 'get_prompt'){
    echo '$file = $_GET[ \'page\' ];'."<br>";
    echo 'if( isset( $file ) ){'."<br>";
	echo 'if( !fnmatch( "file*", $file )) {'."<br>";
	echo 'echo "ERROR: File not found!";'."<br>";
	echo 'exit;'."<br>";
	echo '}'."<br>";
	echo 'include( $file );';
}

?>