<?php 
include('../Connection/conexao_ez_store.php');
    session_start();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        

        $sql_codigo = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$pass') ";

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
    <title>Cadastrar cliente</title>
    <link rel="stylesheet" href="../CSS/adicionar.css">
</head>
<body>
    <h1>Cadastrar Cliente</h1>
    <form action="" method='post'>
        <label for="">Nome</label>
        <input type="text" name='nome' required id='input1'>
        <label for="">Email</label>
        <input type="text" name='email' required id='input2'>
        <label for="">Senha</label>
        <input type="text" name='pass' required id='input3'>

        <input type="submit" value='Cadastrar'>
    </form>
    <a href="login.php"> Voltar </a>
</body>
</html>