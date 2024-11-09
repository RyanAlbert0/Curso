<?php
    include('../../Conexoes/conexao_sistema.php');
    
    $id = $_GET['id'];
    
    $sql_codigo = "SELECT * FROM itens WHERE ID = '$id'";
    $resultado = $mysqli->query($sql_codigo);

    $item = $resultado->fetch_assoc();

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $quantidade = $_POST['quantidade'];

        $sql_codigo = "UPDATE itens SET nome='$nome', quantidade='$quantidade' where id = '$id'";

        if($mysqli->query($sql_codigo) === TRUE){
            header('Location: index.php');
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
    <title>Editar Elementos</title>
    <link rel="stylesheet" href="../CSS/editar.css">
</head>
<body>
    <h1>Editar Item</h1>
    <form action="" method='post'>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <label for="">Nome</label>
        <input type="text" name='nome' value="<?php echo $item['nome']; ?>" required>
        <label for="">Quantidade</label>
        <input type="number" name='quantidade' value="<?php echo $item['quantidade']; ?>" required>

        <input type="submit" value='Save'>
    </form>
    <a href="painel.php"> Voltar </a>
</body>
</html>