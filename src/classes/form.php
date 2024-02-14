<?php

    class Form {

        public static function Alert($tipo,$mensagem) {

            if($tipo == 'erro') {
                echo '<div style=" color:red; font-size:25px; ">'.$mensagem.'</div>';
                return false;
            }elseif($tipo == 'sucesso') {
                echo '<div style=" color:green; font-size:25px; ">'.$mensagem.'</div>';
                return true;
            }
            
        }

        public static function Cadastrar($nome,$email,$senha) {
            $sql = Mysql::conexion()->prepare("INSERT INTO `formulario` VALUES (null,?,?,?)");
            $sql->execute(array($nome,$email,$senha)); 
        }
    }

?>