<?php
    include('../../Conexoes/conexao_sistema.php');
    session_start();
    $id = $_SESSION['id'];
    $sql_codigo = "SELECT * FROM itens WHERE id='$id'";
    $sql_codigo_usuario = "SELECT nome FROM cliente WHERE id='$id'";
    $resultado = $mysqli->query($sql_codigo);

    $resultado_nome = $mysqli->query($sql_codigo_usuario);
    $nome_usuario = $resultado_nome->fetch_assoc();
    $nome = $nome_usuario['nome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wishlist</title>
</head>
<body>
<h1>Carrinho - <?php echo $nome ?></h1>
    <main class="container">
        <table>
            <tr class='cabecalho'>
                <th>Nome</th>
                <th>Quantidade</th>
                <th>Ações</th>
            </tr>
            <?php
            if ($resultado->num_rows >= 1){
                while ($item = $resultado->fetch_assoc()){
                echo '<tr class="corpo">';
                    echo '<td>' . $item['nome'] . '</td>';
                    echo '<td>'. $item['quantidade'] . '</td>';
                    echo '<td> <a href="editar.php?id='. $item['id'] . '">editar</a> </td>';
                    echo '<td> <a href="deletar.php?id='. $item['id'] . '">deletar</a> </td>';
                echo '</tr>';
                }    
            }
            
            ?>
            <tr>
                <td colspan='4' class='adic'>
                    <?php
                    echo '<a type="submit" class="add_txt" href="adicionar.php">+</a>'
                    ?>
                </td>
            </tr>
        </table>
    </main>
</body>
</html>