<?php

    class Form {

        public static function alert($tipo, $mensagem) {

            if($tipo == 'erro') {
                echo '<div style="color:red; font-size:25px;">'.$mensagem.'</div>';
                return false;
            }else if($tipo == 'sucesso') {
                echo '<div style="color:green; font-size:25px;">'.$mensagem.'</div>';
                return true;
            }
            
        }

        public static function Register() {

        }
    }

?>