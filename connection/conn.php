<?php 

// Variáveis de ambiente

$servidor= 'localhost';
$banco_de_dados = 'nique_loja';
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
    $sql_codigo = "CREATE DATABASE '$banco_de_dados'";
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
    "fornecedores" =>"
    CREATE TABLE fornecedores(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        cidade VARCHAR(50) NOT NULL)
    ",
    "produtos" => "
    CREATE TABLE produtos(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NOT NULL,
        marca VARCHAR(50) NOT NULL,
        tamanho VARCHAR(10) NOT NULL,
        preco DECIMAL(10,2) NOT NULL,
        quantidade INT NOT NULL,
        id_fornecedor INT,
        FOREIGN KEY (id_fornececdores) REFERENCES fornecedores(id))
        ",
    "usuarios" =>"
    CREATE TABLE usuarios(
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100) NO NULL,
        telefone VARCHAR(15) NOT NULL,
        data_nasc DATE NOT NULL,
        cpf VARCHAR(11) NOT NULL,
        cep VARCHAR(8) NO NULL)
        ",
    "vendas" =>"
    CREATE TABLE vendas(
        id INT AUTO_INCREMENT PRIMARY KEY,
        data_venda DATE NOT NULL,
        id_produto INT NOT NULL,
        id_usuario INT NOT NULL,
        FOREIGN KEY (id_produto) REFERENCES produtos(id),
        FOREIGN KEY (id_usuario) REFERENCES usuarios(id))
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