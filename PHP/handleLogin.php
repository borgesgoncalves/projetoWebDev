<?php
$servername = "localhost"; // Pode ser diferente dependendo da configuração do seu servidor
$username = "root"; // Nome de usuário padrão do XAMPP
$password = ""; // Senha padrão do XAMPP é geralmente vazia
$dbname = "in_veste";

$conexao = mysqli_connect($servername, $username, $password, $dbname);

if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

$stmt = $conexao->prepare("SELECT * FROM cliente WHERE email = ? AND senha = ?");
    $stmt->bind_param("ss", $email, $senha);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        session_start();
        $_SESSION['email'] = $email; // Armazene informações do usuário na sessão se necessário

        header("Location: info.php"); // Redirecionar
        exit(); // Certifique-se de sair do script após o redirecionamento
    } else {
        echo "Email ou senha incorretos";
    }

    $stmt->close();
    $conexao->close();
}
?>