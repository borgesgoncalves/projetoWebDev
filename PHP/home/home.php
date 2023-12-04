<?php

include('autorizacao.php');

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
  <main>
    <div class="carrinho-icon">
      <a href="file:///C:/xampp/htdocs/carrinho.html">
        <img src="shopping-cart.svg" alt="Carrinho de Compras">
      </a>
    </div>
    <section id="feminino">
      <h2>Roupas Femininas</h2>
      <div class="container">
        <div class="cartao">
          <img src="https://cdn.awsli.com.br/1538/1538522/produto/223877545/7b8ba11d-bef9-4175-9bfd-f1e5575bd3bc-gpgqu9jp2j.jpg" alt="Roupa Feminina 1">
          <p>Vestido verde longo</p>
          <p class="preco">R$99.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://cdn.awsli.com.br/2500x2500/1005/1005299/produto/124877387/60084d6a4e.jpg" alt="Roupa Feminina 2">
          <p>Vestido branco curto</p>
          <p class="preco">R$79.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://cdn.awsli.com.br/1538/1538522/produto/222442251/6f8128b8-d8b5-40-un6hq82jrp.jpeg" alt="Roupa Feminina 3">
          <p>Calça de altaiataria rosa</p>
          <p class="preco">R$59.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
      </div>
    </section>

    <section id="masculino">
      <h2>Roupas Masculinas</h2>
      <div class="container">
        <div class="cartao">
          <img src="https://down-br.img.susercontent.com/file/cf6a0e2c195cb5c4dd458dcba312e3e8" alt="Roupa Masculina 1">
          <p>Calça preta</p>
          <p class="preco">R$79.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://m.media-amazon.com/images/I/71-vztDuRFL._AC_UF1000,1000_QL80_.jpg" alt="Roupa Masculina 2">
          <p>Calça cargo verde militar</p>
          <p class="preco">R$89.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://m.media-amazon.com/images/I/41kV0Km17YL._AC_SY1000_.jpg" alt="Roupa Masculina 3">
          <p>Blusa polo preta</p>
          <p class="preco">R$99.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
      </div>
    </section>

    <section id="infantil">
      <h2>Roupas Infantis</h2>
      <div class="container">
        <div class="cartao">
          <img src="https://a-static.mlcdn.com.br/450x450/vestido-feminino-infantil-mangas-com-elasticocores-variadas-belle-vitrine/bellevitrinekids/9b3a5f8c677411ed845f4201ac185019/bc94b51aea04d05e85528356a8b09fbe.jpeg" alt="Roupa Infantil 1">
          <p>Vestido azul</p>
          <p class="preco">R$89.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://letmebeloja.com.br/wp-content/uploads/2022/02/VESTIDO-INFANTIL-FEMININO-FESTA-PETIT-CHERIE-LET-ME-BE-LOJA-31350-1-scaled.jpg" alt="Roupa Infantil 2">
          <p>Vestido rosa florido</p>
          <p class="preco">R$109.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
        <div class="cartao">
          <img src="https://www.texasfarmstore.com.br/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/2/8/289861.jpg" alt="Roupa Infantil 3">
          <p>Blusa branca básica</p>
          <p class="preco">R$34.99</p>
          <button class="adicionar-ao-carrinho-btn">Adicionar ao Carrinho</button>
        </div>
      </div>
    </section>
  </main>
</body>
</html>
