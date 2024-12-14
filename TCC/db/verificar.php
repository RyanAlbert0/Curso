<?php
include('../Connection/conexao_ez_store.php');

session_start();

$usuario = $_POST['email'];
$senha = $_POST['pass'];

if(isset($usuario) && isset($senha)){
    $sql_codigo = "SELECT * FROM usuarios WHERE email = '$usuario' AND senha = '$senha'";

    $sql_query = $mysqli->query($sql_codigo);

    $quantidade_linhas = $sql_query->num_rows;

    if ($quantidade_linhas == 1){
        $resultado = $sql_query->fetch_assoc();
        $_SESSION['id'] = $resultado['id'];

        header('Location:../Screens/painel.php?cadastrado=sim');
    }
    else
    {
        header('Location:../Screens/login.php?error');
        console.log('Erros.' . $resultado . ' e ' . $_SESSION );
    }
}

?>