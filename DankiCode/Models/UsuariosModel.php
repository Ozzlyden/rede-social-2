<?php

    namespace DankiCode\Models;

    class UsuariosModel{

        public static function emailExists($email){
            $pdo = \DankiCode\MySql::connect();
            $verifica = $pdo->prepare("SELECT email FROM tb_usuarios WHERE email = ?");
            $verifica->execute(array($email));

            // Verificar se o email existe no BD
            if($verifica->rowCount() == 1 ){
                return true;
            }else{
                return false;
            }
        }

        public static function userNameExists($username){
            $pdo = \DankiCode\MySql::connect();
            $verifica = $pdo->prepare("SELECT username FROM tb_usuarios WHERE username = ?");
            $verifica->execute(array($username));

            // Verificar se o username existe no BD
            if($verifica->rowCount() == 1 ){
                return true;
            }else{
                return false;
            }
        }
    }

?>
