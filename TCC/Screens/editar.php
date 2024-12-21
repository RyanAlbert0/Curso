<?php 
    include('../Connection/conexao_ez_store.php');
    
    $nome = $_POST['nome'];
    $resenha = $_POST['resenha'];
    $genero = $_POST['genero'];
    $tamanho = $_POST['tamanho'];
    $lancamento = $_POST['lancamento'];
    $preco = $_POST['preco'];
    $quantidade = $_POST['quantidade'];
    $plataforma = $_POST['plataforma'];
    $id = $_GET['id'];

    $sql_codigo = "UPDATE jogos SET nome = '$nome', resenha='$resenha', genero='$genero', tamanho='$tamanho', lancamento='$lancamento', preco='$preco', quantidade='$quantidade', plataforma='$plataforma' WHERE jogos.id ='$id'";


    var_dump($sql_codigo);
    $resultado = $mysqli->query($sql_codigo);
    var_dump($resultado);
    if ($resultado === TRUE){
        header('Location: painel.php');
    }
    else {
        header('Location: painel.php?erro');

    }

?>