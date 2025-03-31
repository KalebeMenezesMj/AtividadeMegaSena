<?php

session_start();

if (isset($_SESSION["usuario"])) {

    $usuario = $_SESSION["usuario"];
} else {
    header("location: login.php");
}

if (isset($_POST["btnSair"])) {

    session_unset();
    session_destroy();
    header("location: login.php");
}

if (isset($_POST["btnAposta"])) {

    header("location: index.php");
}




$api_url = 'https://fakestoreapi.com/products';
$response = file_get_contents($api_url);
$products = json_decode($response, true);

if (!$products) {
    echo "Erro ao obter produtos.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Produtos</title>
    <link rel="stylesheet" href="loja.css">
</head>
<header>
    <nav>
        <h4>Tigrinho Store</h4>
        <div class="navbar">
            <form action="#" method="POST">
                
                <input type="submit" value="Apostar" name="btnAposta" class="btn-apostar">
                <input type="submit" value="Sair" name="btnSair" class="btn-sair">

            </form>
        </div>
    </nav>
</header>

<body>
    <div class="container">
        <h1>Produtos Disponíveis</h1>
        <div class="products">
            <?php foreach ($products as $product): ?>
                <div class="product-card">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['title'] ?>" class="product-image">
                    <div class="product-info">
                        <h2 class="product-title"><?= $product['title'] ?></h2>
                        <p class="product-description"><?= $product['description'] ?></p>
                        <p class="product-price">R$ <?= number_format($product['price'], 2, ',', '.') ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>

</html>