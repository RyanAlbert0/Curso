<?php 

require_once '../connection/conn.php';
var_dump($_POST);
$nome = $_POST['nome'];
$cidade = $_POST['cidade'];

$sql_codigo = "INSERT INTO fornedores (nome, cidade) VALUES ('$nome', '$cidade')";

$resultado = $mysqli->query($sql_codigo);

if ($resultado === TRUE){
    header('location: ../screens/fornecedores/fornecedores_painel.php');
};
?>