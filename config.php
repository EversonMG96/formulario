<?php 
    $print = function($class) {
        if(file_exists('classes/'.$class.'.php')) {
            include_once('classes/'.$class.'.php');
        }
    };

    spl_autoload_register($print);

        if(isset($_POST['acao']) && $_POST['form'] == 'f_form') {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if($nome == '') {
            Form::Alert('erro', 'nome vazio!');
        } elseif($email == '') {
            Form::Alert('erro', 'email vazio!');
        } elseif($senha == '') {
            Form::Alert('erro', 'senha vazia!'); 
        }else {
            Form::Cadastrar($nome,$email,$senha);
            Form::Alert('sucesso', 'Usuario'.$nome.'cadastrado com sucesso!');
        }
    }

    define('HOST','localhost');
    define('DATABASE','form_cadastro');
    define('USER','root');
    define('PASSWORD','');
?>