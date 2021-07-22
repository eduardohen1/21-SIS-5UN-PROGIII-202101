<?php
    session_start();

    session_destroy(); //limpa a sessão

    header("location: index.php");

?>