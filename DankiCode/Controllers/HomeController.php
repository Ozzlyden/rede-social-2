<?php
    namespace  DankiCode\Controllers;

    class HomeController{

        public function index(){
            
            // Verficacao de acesso
            if(isset($_SESSION[''])){
                // Renderiza a home
                \DankiCode\Views\MainView::render('home');
            }else{
                // Renderiza criar conta
                \DankiCode\Views\MainView::render('login');
            }
        }
    }
?>