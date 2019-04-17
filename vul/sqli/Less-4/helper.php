<?php

if($_GET['action'] == 'get_prompt'){
    echo 'SELECT * FROM users WHERE id=($id)';
}

?>