<?php 

require_once '../connection/conn.php';

$id = $_GET['$id'];
$sql_codigo = "DELETE FROM fornecedores WHERE id='$id'";
if ($mysqli->query($sql_codigo) === TRUE){
    header('location: ../screens/fornecedores/fornecedores_painel.php');

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