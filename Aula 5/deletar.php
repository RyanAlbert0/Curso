<?php 
    include('../Conexoes/conexao_estoque.php');
    $id = $_GET['id'];
    $sql_codigo = "DELETE FROM itens WHERE ID = '$id'";

    if($mysqli->query($sql_codigo) === TRUE){
        header('Location: index.php');
    }
    else{
        echo 'Erro ao apagar a linha. Entre em contato com o administrador' . $mysqli->error;
    }
?>