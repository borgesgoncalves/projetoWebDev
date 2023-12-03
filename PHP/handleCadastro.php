<?php

$servername = "localhost"; // Pode ser diferente dependendo da configuração do seu servidor
$username = "root"; // Nome de usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP é geralmente vazia
$dbname = "in_veste";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$endereco = $_POST["endereco"];
$telefone = $_POST["telefone"];
$email = $_POST["email"];
$senha = $_POST["senha"];

$sql = "INSERT INTO cliente (nomeCliente, cpf, endereco, telefone, email, senha) VALUES ('$nome', '$cpf', '$endereco', '$telefone', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    echo "Cadastro realizado com sucesso!";
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>