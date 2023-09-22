<?php
    namespace  DankiCode\Controllers;

    class RegistrarController{

        public function index(){
            
                // Renderiza a home
              \DankiCode\Views\MainView::render('registrar');
            
        }
    }
?>