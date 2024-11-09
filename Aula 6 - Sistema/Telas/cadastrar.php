<?php 
    include('../../Conexoes/conexao_sistema.php');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        

        $sql_codigo = "INSERT INTO cliente (nome, usuario, senha) VALUES ('$nome', '$user', '$pass') ";

        if($mysqli->query($sql_codigo) === TRUE){
            $_SESSION['nome'] = $nome;
            header('Location: painel.php?cadastrado=sim');
        }
        else{
            echo 'Erro ao atualizar a tabela. Entre em contato com o administrador' . $mysqli->error;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Adicionar Elementos</title>
    <link rel="stylesheet" href="../CSS/adicionar.css">
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="" method='post'>
        <label for="">Nome</label>
        <input type="text" name='nome' required id='input1'>
        <label for="">Usuário</label>
        <input type="text" name='user' required id='input2'>
        <label for="">Senha</label>
        <input type="text" name='pass' required id='input3'>

        <input type="submit" value='Cadastrar'>
    </form>
    <a href="login.php"> Voltar </a>
</body>
</html>