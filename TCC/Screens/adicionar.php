<?php 
    include('../Connection/conexao_ez_store.php');
    session_start();
    $id = $_SESSION['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $resenha = $_POST['resenha'];
        $genero = $_POST['genero'];
        $tamanho = $_POST['tamanho'];
        $lancamento = $_POST['lancamento'];
        $preco = $_POST['preco'];
        $quantidade = $_POST['quantidade'];
        $plataforma = $_POST['plataforma'];

        $sql_codigo = "INSERT INTO jogos (nome, resenha, genero, tamanho, lancamento, preco, quantidade, plataforma, id_usuarios) VALUES ('$nome', '$resenha', '$genero', '$tamanho', '$lancamento', '$preco', '$quantidade', '$plataforma', '$id') ";

        if($mysqli->query($sql_codigo) === TRUE){
            header('Location: painel.php');
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
    <link rel="stylesheet" href="adicionar.css">
</head>
<body>
    <div class='background'>
    <h1>Adicionar Item</h1>
    <form action="" method='post' class="infos">
        <label for="">Nome</label>
        <input type="text" name='nome' required id='input1'>
        <label for="">Resenha</label>
        <input type="text" name='resenha' required id='input2'>
        <label for="">Gênero</label>
        <input type="text" name='genero' required id='input3'>
        <label for="">Tamanho</label>
        <input type="text" name='tamanho' required id='input4'>
        <label for="">Lançamento</label>
        <input type="text" name='lancamento' required id='input5'>
        <label for="">Preço</label>
        <input type="number" name='preco' required id='input6'>
        <label for="">Quantidade</label>
        <input type="number" name='quantidade' required id='input7'>
        <label for="">Plataforma</label>
        <input type="text" name='plataforma' required id='input8'>

        <input type="submit" value='Save' class="butaosubmit">
    </form>
    <a href="painel.php"> Voltar </a>
    </div>
</body>
</html>