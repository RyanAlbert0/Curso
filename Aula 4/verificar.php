<?php
include('../Conexoes/conexao_loja.php');

session_start();

 $nome = $_POST['pesquisa'];

     // Query
    
     $sql_codigo = "SELECT p.nome, p.marca, quantidade,(p.preco *quantidade) AS valor_venda FROM `vendas` JOIN produtos p ON p.id = vendas.produto_id WHERE p.nome LIKE '%$nome%' ORDER BY p.nome LIMIT 10";

     $sql_query = $mysqli->query($sql_codigo);

     if ($sql_query->num_rows>=1){
        $infos = $sql_query->fetch_all();
        session_start();
        $_SESSION['ITENS'] =  $infos;
        header('location:index.php?ok');
     }
     else{
        header('location:index.php?NoResult');
     }
?>
     
     
