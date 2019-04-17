<?php

if($_GET['action'] == 'get_prompt'){
    echo htmlspecialchars('$name = preg_replace( \'/<(.*)s(.*)c(.*)r(.*)i(.*)p(.*)t/i\', \'\', $_GET[ \'name\' ] );');
}

?>