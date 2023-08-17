<?php
    namespace DankiCode;    // Define o namespace para evitar conflitos de nome de classes com outros códigos

    class Application{

        private $controller;    // Armazenar o objeto do controlador

        // Função é responsável por definir o controlador com base na URL
        private function setApp(){

            $loadName = 'DankiCode\Controllers\\';  // cria o prefixo do namespace para os controladores.
            $url = explode('/', @$_GET['url']);

            if (!isset($url[0]) || $url[0] == '') {
                $loadName .= 'Home';
            } else {
                $loadName .= ucfirst(strtolower($url[0]));  // Transforma a primeira letra em Maiuscula
            }

            $loadName.='Controller';

            // Verificador de paginas
            if(file_exists($loadName.'.php')){
                $this->controller = new $loadName();
            }else{
                include('Views/pages/404.php');
                die();
            }

        }

        public function run(){
            $this->setApp();
            $this->controller->index(); 
        }
    }
?>