<?php
    include('../Conexoes/conexao_estoque.php');
    
    $id = $_GET['id'];
    
    $sql_codigo = "SELECT * FROM itens WHERE ID = '$id'";
    $resultado = $mysqli->query($sql_codigo);

    $item = $resultado->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Editar Item</h1>
    <form action="" method='post'></form>
        <label for="">Nome</label>
        <input type="text" name='nome' value="<?php echo $item['Nome']; ?>" required>
        <label for="">Quantidade</label>
        <input type="number" name='quantidade' value="<?php echo $item['Quantidade']; ?>" required>

        <input type="submit" value='Save'>
    </form>
    <a href="index.php"> Voltar </a>
</body>
</html>