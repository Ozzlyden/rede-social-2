<?php
    
    namespace DankiCode;

    class MySql{

        private static $pdo;

        public static function connect(){

            if(self::$pdo == null){
                // Forma segura
            try{
                self::$pdo = new \PDO('mysql:host=localhost;dbname=bd_rede_social','root','',array(\PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                self::$pdo->setAttribute(\PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
                echo '<h2>Sucesso ao conectar</h2>';
            }catch(\Exception $e){
                echo '<h2>Erro ao conectar</h2>';
                error_log($e->getMessage());
                }
            }

       return self::$pdo;
        }

    }

?>