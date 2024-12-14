<?php 

include('../Connection/conexao_ez_store.php');

$id = $_GET['id'];
$sql_codigo = "DELETE FROM jogos WHERE id='$id'";
if ($mysqli->query($sql_codigo) === TRUE){
    header('Location: painel.php');

}



















?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar</title>
</head>
<body>
    
</body>
</html>