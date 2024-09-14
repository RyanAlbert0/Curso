<?php
    include('../Conexoes/conexao_loja.php');

    // Query
    
    $sql_codigo = "SELECT p.nome, p.marca, quantidade,(p.preco *quantidade) AS valor_venda FROM `vendas` JOIN produtos p ON p.id = vendas.produto_id ORDER BY valor_venda DESC LIMIT 3";

    $sql_query = $mysqli->query($sql_codigo);
    
    $infos = $sql_query->fetch_all();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Top Vendas</title>
</head>
<body>
    <main>
        <div>
            <h1>Top 3 produtos mais vendidos</h1><br>
        </div>
        <div>
            <?php    
            foreach ($infos as $linha){
            $nome = $linha[0];
            $marca = $linha[1];
            $quantidade = $linha[2];
            $valor = $linha[3];
            echo '<div>' . 'Nome do Produto: ' .$nome . '</div>';
            echo '<div>' . 'Marca do Produto: '  .$marca . '</div>';
            echo '<div>' . 'Quantidade Vendida: '  .$quantidade . ' unidades' . '</div>';
            echo '<div>' . 'Valor da Receita: ' . 'R$ ' .$valor . '</div>';
            echo '<div> . </div>';
            }
            ?>

        </div>
    </main>
</body>
</html>