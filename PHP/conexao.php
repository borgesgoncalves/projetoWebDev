<?php
$servername = "localhost"; // Pode ser diferente dependendo da configuração do seu servidor
$username = "root"; // Nome de usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP é geralmente vazia
$dbname = "in_veste";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
?>