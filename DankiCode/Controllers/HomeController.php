<?php
    namespace  DankiCode\Controllers;

    class HomeController{

        public function index(){
            
            // SISTEMA DE LOGIN
            if(isset($_SESSION['login'])){
                // Renderiza a home
                \DankiCode\Views\MainView::render('home');
            }else{


                if(isset($_POST['login'])){
                    $login = $_POST['email'];
                    $password = $_POST['password'];

                    // Verificar no BD
                    $verifica = \DankiCode\MySql::connect()->prepare("SELECT * FROM tb_usuarios WHERE email = ?");
                    $verifica->execute(array($login));

                    if($verifica->rowCount() == 0){
                        \DankiCode\Utilidades::alert('Não existe usuario com esse email');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                    }else{
                        $dados = $verifica->fetch();
                        $passwordBd = $dados['password'];
                        if(\DankiCode\Bcrypt::check($password, $passwordBd)){
                            // Usuario logado com sucesso
                            $_SESSION['login'] = $dados['email'];
                            \DankiCode\Utilidades::alert('Logado com sucesso');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH);   

                        }else{
                            \DankiCode\Utilidades::alert('Senha incorreta');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH); 
                        }
                    }
                }


                // Renderiza criar conta
                \DankiCode\Views\MainView::render('login');
            }
        }
    }
?>