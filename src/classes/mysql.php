<?php 

    class Mysql {
      
        private static $pdo;

        public static function conexion() {
            if(self::$pdo == null) {
                try {
                    $dsn = 'mysql:host=' . HOST . ';dbname=' . DATABASE;
                    $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
                    self::$pdo = new PDO($dsn, USER, PASSWORD, $options);
                } catch(PDOException $e) {
                    // Em caso de erro, lançamos a exceção para que ela seja tratada no código que chamou a função
                    throw new Exception('Erro ao conectar com banco de dados: ' . $e->getMessage());
                }
            }
            return self::$pdo;
        }
    }

?>