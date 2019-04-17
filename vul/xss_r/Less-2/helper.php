<?php

if($_GET['action'] == 'get_prompt'){
    echo '$name = str_replace( \'\<script\>\', \'\', $_GET[ \'name\' ] );';
}

?>