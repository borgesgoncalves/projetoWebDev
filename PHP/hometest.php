<?php

include('autorizacao.php');
include('conexao.php');

header('Content-Type: text/html; charset=UTF-8');

$query = "SELECT * FROM produto";
$resultado = $conexao->query($query);

if ($resultado) {
    $produtos = array();
    while ($row = $resultado->fetch_assoc()) {
        $produtos[] = $row;
    }
    $resultado->free();
} else {
    echo "Erro na consulta: " . $conexao->error;
}

$conexao->close();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InVeste</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="container">
            <h1>InVeste - Sua roupa, seu estilo</h1>
            <a href="logout.php" id="botaoLogin">Logout</a>
        </div>
    </header>
                
    <div class="main">
        <div class="container">
            <?php foreach ($produtos as $key => $value) { ?>
                <div class="cartao">
                    <img src="data:image/jpeg;base64,<?php echo base64_encode($value['imagem']); ?>"  alt="">
                    <p><?php echo $value['nomeProduto'] ?></p>
                    <p class="preco"><?php echo $value['preco'] ?></p>
                    <a href="?adicionar=<?php echo $key ?>" class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</a>
                </div>
            <?php } ?>
        </div>
                    
        <div class="carrinho">
            <?php if(isset($_GET['adicionar'])){
                $idProduto = (int) $_GET['adicionar'];
                if(isset($produtos[$idProduto])){
                    $id = 'produto_' . $idProduto; // Prefixo para evitar chaves numéricas diretas
                    if (isset($_SESSION[$id])) {
                        $_SESSION[$id]['quantidade']++;
                    } else {
                        $_SESSION[$id] = array(
                            'quantidade' => 1,
                            'nome' => $produtos[$idProduto]['nomeProduto'],
                            'preco' => $produtos[$idProduto]['preco']
                        );}
                    }else{
                        die('Vazio');
                    }
                    echo '<script>alert("o item foi adicionado ao carrinho")</script>';
                }else{
                    die('Voce nao pode adicionar um item que nao existe.');
                }?>
        </div>
    </div>
</body>
</html>