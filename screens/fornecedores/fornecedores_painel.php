<?php 
    require_once '../../connection/conn.php';

    $sql_codigo = 'SELECT * FROM fornecedores';
    $resultado = $mysqli->query($sql_codigo);
    var_dump($resultado);

    if ($resultado->num_rows > 0){
        $infos = $resultado->fetch_all();

    }
    else{

        $infos = [];
    }




















?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fornecedores</title>
</head>
<body>
    <main> 
        <h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Cidade</th>
                    <th>Ações</th>
                </tr>
                <?php 
                if (count($infos) = 0){
                    echo '<tr>
                    <td colspan="4">Nenhum registrado</td>
                    </tr>';
                }
                else 
                {
                    foreach($infos as $item){
                    $id = $infos[0];
                    $nome = $infos[1];
                    $cidade = $infos[2];
                    echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $nome . '</td>
                    <td>' . $cidade . '</td>
                    <td><a href="">Editar </a> | <a href="../../db/criar_fornecedor.php?id='.$id.'">Apagar</a></td>
                    </tr>';
                        }
                }
                ?>
                <tr>
                    <td colspan="4"><a href="formulario.php">+</a></td>
                </tr>
            </table>
        </h1>
    </main>
</body>
</html>