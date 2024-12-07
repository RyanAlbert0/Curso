<?php 
// Variáveis de ambiente
$servidor= 'localhost';
$banco_de_dados = 'ez_games';
$user = 'root';
$senha = '';

// Criar conexão com banco de dados

$mysqli = new mysqli($servidor,$user,$senha);

// Verificar a conexão

if ($mysqli -> error)
{
    die('Falha ao conectar'.$mysqli->error);
}

$sql_check_db = "SHOW DATABASES LIKE '$banco_de_dados'";
$resultado = $mysqli->query($sql_check_db);
if ($resultado->num_rows == 0){
    $sql_codigo = "CREATE DATABASE $banco_de_dados";
    if($mysqli->query($sql_codigo) === TRUE){

        echo("Banco de dados criado com sucesso");
    }
    else {
        die("Erro ao criar o banco de dados" . $mysqli->error);
    }

}
else{

echo "Banco de dados já existe! \n";
}

$mysqli->select_db($banco_de_dados);

$tabelas = [
    "usuarios" =>"
    CREATE TABLE usuarios(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        senha VARCHAR(8) NOT NULL,
        email VARCHAR(30) NOT NULL)
    ",
    "jogos" => "
    CREATE TABLE jogos(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        resenha VARCHAR(400) NOT NULL,
        genero VARCHAR(50) NOT NULL,
        tamanho VARCHAR(10) NOT NULL,
        lancamento VARCHAR(10) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        quantidade INT NOT NULL,
        plataforma INT NOT NULL,
        id_usuarios INT,
        FOREIGN KEY (id_usuarios) REFERENCES usuarios(id)
    )
    "
];

foreach ($tabelas as $nome =>$sql){
    $sql_check_table = "SHOW TABLES LIKE '$nome'";
    $resultado = $mysqli->query($sql_check_table);
    if ($resultado->num_rows == 0){
        if ($mysqli->query($sql) === TRUE){
            echo "Tabela '$nome' criada com sucesso.";
      }
      else{

         echo "Erro ao criar a tabela '$nome' : ".$mysqli->error."\n";
    }
    }
    else{
        echo "Tabela '$nome' já existe<br>";
    }
}

// $mysqli->close();
?>