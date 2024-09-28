<?php
    include('../Conexoes/conexao_estoque.php');
    
    $sql_codigo = 'SELECT * FROM itens';
    $resultado = $mysqli->query($sql_codigo);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padaria</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Padaria dos Sonhos</h1>
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
                    echo '<td>' . $item['Nome'] . '</td>';
                    echo '<td>'. $item['Quantidade'] . '</td>';
                    echo '<td> <a href="editar.php?id='. $item['ID'] . '">editar</a> </td>';
                    echo '<td>deletar</td>';
                echo '</tr>';
                }    
            }
            
            ?>

        </table>
    </main>
    
</body>
</html>