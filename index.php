<?php
    require('vendor/autoload.php');

    session_start();    // Inicalizando secoes
    $app  = new DankiCode\Application();
    $app ->run();
?>