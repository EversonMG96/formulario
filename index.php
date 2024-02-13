<? 
    require_once 'config.php';
    Mysql::conexion();
    
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <link rel="shortcut icon" href="src/images/favicon.ico" type="image/x-icon">
    <title>Formulário de Cadastro</title>
</head>
<body>
    <div class="form_cd"> 
        
        <?php 
            

            if(isset($_POST['acao']) && $_POST['form'] == 'f_form') {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];

                if($nome == '') {
                    Form::alert('erro', 'nome vazio!');
                } else if($email == '') {
                    Form::alert('erro', 'email vazio!');
                } else if($senha == '') {
                    Form::alert('erro', 'senha vazia!'); 
                }else {
                    Form::Cadastrar($nome, $email, $senha);
                    Form::alert('sucesso', 'Usuario'.$nome.'cadastrado com sucesso!');
                }
            }

        ?>

        <h2>Cadastre-se</h2>
        <form method="post">
            <div><input type="text" name="nome" placeholder="Nome" required></div> 
            <div><input type="text" name="email" placeholder="Email" required></div>
            <div><input type="text" name="senha" placeholder="Senha" required></div>
            <div><input type="submit" name="acao" value="Cadastrar"></div>
            <div><input type="hidden" name="form" placeholder="f_form"></div>
        </form>
    </div>  
</body>
</html>

