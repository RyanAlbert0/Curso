<?php
    session_start();
    include('../../Conexoes/conexao_sistema.php');
    if(!isset($_SESSION)){
        header("location: login.php?noaccount");
    };
    
// }
// else{
    if($_GET['cadastrado'] == 'sim'){
        $nome = $_SESSION['nome'];
        $sql_codigo_usuario = "SELECT id FROM cliente WHERE nome = '$nome'";
        $resultado_id = $mysqli->query($sql_codigo_usuario);
        $conteudo = $resultado_id->fetch_assoc();
        $id = $conteudo['id'];}
        else{
            $id = $_SESSION['id'];
            
            $resultado_nome = $mysqli->query($sql_codigo_usuario);
            $nome_usuario = $resultado_nome->fetch_assoc();
                $nome = $nome_usuario['nome'];
        }

    
    $sql_codigo = "SELECT * FROM jogos WHERE id_user='$id'";
    
    $resultado = $mysqli->query($sql_codigo);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo da EZ's Store</title>
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
    <link rel="stylesheet" href="../CSS/painel.css">
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
    <div>
    <?php
    echo '<a type="submit" class="log_out_btn" href="logout.php">Log Out</a>'
    ?>
    </div>
</body>
</html>