<?php
    session_start();    // Inicalizando secoes
    require('vendor/autoload.php');
    define('INCLUDE_PATH_STATIC', 'http://localhost/rede-social-2/DankiCode/Views/pages/');
    define('INCLUDE_PATH', 'http://localhost/rede-social-2/');

    $app  = new DankiCode\Application();
    $app ->run();
?>