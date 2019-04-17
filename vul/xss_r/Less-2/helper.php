<?php

if($_GET['action'] == 'get_prompt'){
    echo htmlspecialchars('$name = str_replace( \'<script>\', \'\', $_GET[ \'name\' ] );');
}

?>