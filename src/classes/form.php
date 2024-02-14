<?php

    class Form {

        public static function Alert($tipo,$mensagem) {
            $html= '<div style="font-size: 25px">';

            if($tipo == 'erro') {
                $html .= 'color: red">';
            }elseif($tipo == 'sucesso') {
                $html .= 'color:green;">';
            }
            $html .= $mensagem . '<div>';
            return $html;
        }

        public static function Cadastrar($nome, $email, $senha) {
            try {
                $pdo = Mysql::conexion(); // Obtém a conexão com o banco de dados
                $sql = "INSERT INTO formulario (nome, email, senha) VALUES (:nome, :email, :senha)";
                $stmt = $pdo->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->bindParam(':senha', $senha);
                $stmt->execute();
        
                // Verifica se o registro foi inserido com sucesso
                if ($stmt->rowCount() > 0) {
                    return true; // Registro inserido com sucesso
                } else {
                    return false; // Falha ao inserir o registro
                }
            } catch (PDOException $e) {
                echo "Erro ao cadastrar usuário: " . $e->getMessage();
                return false; // Retorna falso em caso de erro
            }
        }
        
    }    
        
?>        
