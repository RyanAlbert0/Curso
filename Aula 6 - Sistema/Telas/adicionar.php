<?php 
    include('../../Conexoes/conexao_sistema.php');
    session_start();
    $id = $_SESSION['id'];

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "INSERT INTO itens (nome, quantidade, id_user) VALUES ('$nome', '$quantidade', '$id') ";

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
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Adicionar Item</h1>
    <form action="" method='post'>
        <label for="">Nome</label>
        <input type="text" name='nome' required>
        <label for="">Quantidade</label>
        <input type="number" name='quantidade' required>

        <input type="submit" value='Save'>
    </form>
    <a href="painel.php"> Voltar </a>
</body>
</html>