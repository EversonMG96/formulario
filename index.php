<?php 
    include('config.php');
    require_once'src/classes/mysql.php';
    Mysql::test();
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
        <h2>Cadastre-se</h2>
        <form action="" method="post">
            <div><input type="text" name="nome" placeholder="Nome" required></div> 
            <div><input type="text" name="email" placeholder="Email" required></div>
            <div><input type="text" name="senha" placeholder="Senha" required></div>
            <div><input type="submit" name="acao" value="cadastrar"></div>
            <div><input type="hidden" name="form" placeholder="f_form"></div>
        </form>
    </div>  
</body>
</html>

