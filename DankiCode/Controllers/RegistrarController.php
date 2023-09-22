<?php
    namespace  DankiCode\Controllers;

    class RegistrarController{

        public function index(){

            if(isset($_POST['registrar'])){
                $email = $_POST['email'];
                $name = $_POST['name'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                // Validacao email global
                if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
                    \DankiCode\Utilidades::alert('Email invalido');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH.'registrar');
                }else if(\DankiCode\Models\UsuariosModel::emailExists($email)){
                    // Validacao de email no BD
                    \DankiCode\Utilidades::alert('Este email ja foi registrado');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH.'registrar');
                }else if(\DankiCode\Models\UsuariosModel::userNameExists($username)){
                    // Validacao do username no BD
                    \DankiCode\Utilidades::alert('Este username ja foi registrado');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH.'registrar');
                }else if(strlen($password) < 6){
                    // Validacao de senha
                    \DankiCode\Utilidades::alert('Senha precisa ter 6 digitos');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH.'registrar');
                }else{
                    // Criptografar senha
                    $password = \DankiCode\Bcrypt::hash($password);
                    $registro = \DankiCode\MySql::connect()->prepare("INSERT INTO tb_usuarios VALUES (null,?,?,?,?)");
                    $registro->execute(array($name,$email,$username,$password));

                    \DankiCode\Utilidades::alert('Registrado com Sucesso');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH);

                }
            }
            
            // Renderiza a home
              \DankiCode\Views\MainView::render('registrar');
            
        }
    }
?>