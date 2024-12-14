<?php 
include('../Connection/conexao_ez_store.php');

    $id = $_GET['id'];

    $sql_codigo = "SELECT * FROM jogos WHERE id='$id'";
    $resultado = $mysqli->query($sql_codigo);
    $infos = $resultado->fetch_assoc();
    $nome = $infos['nome'];
    $resenha = $infos['resenha'];
    $genero = $infos['genero'];
    $tamanho = $infos['tamanho'];
    $lancamento = $infos['lancamento'];
    $preco = $infos['preco'];
    $quantidade = $infos['quantidade'];
    $plataforma = $infos['plataforma'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
</head>
<body>
    <main>
        <h1>Editar Fornecedor</h1>
        <form action="<?php echo "editar.php?id='$id'"?>" method="post">
            <input type="text" nome='id' id='id' value="<?php echo $id;?>">
            <div>
            <label for="">Nome</label>
            <input type="text" name='nome' value="<?php echo $nome; ?>"required>
            </div>
            <div>
            <label for="">Resenha</label>
            <input type="text" name='resenha' value="<?php echo $resenha; ?>"required>
            </div>
            <div>
            <label for="">Gênero</label>
            <input type="text" name='genero' value="<?php echo $genero; ?>"required>
            </div>
            <div>
            <label for="">Tamanho</label>
            <input type="text" name='tamanho' value="<?php echo $tamanho; ?>"required>
            </div>
            <div>
            <label for="">Lançamento</label>
            <input type="text" name='lancamento' value="<?php echo $lancamento; ?>"required>
            </div>
            <div>
            <label for="">Preço</label>
            <input type="text" name='preco' value="<?php echo $preco; ?>"required>
            </div>
            <div>
            <label for="">Quantidade</label>
            <input type="text" name='quantidade' value="<?php echo $quantidade; ?>"required>
            </div>
            <div>
            <label for="">Plataforma</label>
            <input type="text" name='plataforma' value="<?php echo $plataforma; ?>"required>
            </div>
            <div>
                <button type="submit">Editar</button>
                <a href="painel.php">Voltar</a>
            </div>
    
        </form>
    </main>
</body>
</html>