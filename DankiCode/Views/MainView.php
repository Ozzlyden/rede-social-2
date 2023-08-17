<?php

    namespace DankiCode\Views;

    class MainView{

        // Endereco das paginas
        public static function render($filename){
            include('pages/'.$filename.'.php');
        }

    }
?>
