<?php
session_start();
if(isset($_GET['ok'])){
    $itens = $_SESSION['ITENS'];
}
else{
    $itens = [];

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos mais vendidos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main class='container'>
        <h1>Top Vendas</h1>
        <form action='verificar.php' method='post' class='container-input'>
            <input type="text" name='pesquisa' id='pesquisa' placeholder='Insira um filtro'>
            <button type='submit'>🔎</button>
        </form>
        <table>
            <tr>
                <th>Nome</th>
                <th>Marca</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            <!-- CÓDIGO PHP -->
            <?php if (!empty($itens)): ?>
                <?php foreach ($itens as $item): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($item[0]); ?></td>
                        <td><?php echo htmlspecialchars($item[1]); ?></td>
                        <td><?php echo htmlspecialchars($item[2]);?></td>
                        <td><?php echo htmlspecialchars($item[3]); ?></td>
                    </tr>
                <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan='4' style="text-align:center;">Nenhum item encontrado</td>
                    </tr>
                <?php endif; ?>
        </table>
    </main>
</body>
</html>