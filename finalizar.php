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

if (isset($_POST["btnLoja"])) {
    header("location: loja.php");
}

$compraConfirmada = false; // Variável para controlar a exibição do alerta de sucesso

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Lógica de processamento do formulário (por exemplo, salvar os dados no banco de dados)
    // Depois de processar, confirmamos a compra
    $compraConfirmada = true;  // Definimos que a compra foi confirmada
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Compra</title>
    <link rel="stylesheet" href="finalizar.css">
</head>

<body>

    <header>
        <nav>
            <h4>Tigrinho Store</h4>
            <div class="navbar">
                <form action="#" method="POST" class="input-reset">
                    <input type="submit" value="Loja" name="btnLoja" class="btn-apostar">
                    <input type="submit" value="Sair" name="btnSair" class="btn-sair">
                </form>
            </div>
        </nav>
    </header>

    <!-- Formulário de Compra -->
    <form action="#" method="post">
        <h2>Informações de Compra</h2>

        <?php
        $nomeProduto = $_GET['produto'];
        echo "<h3>" . $nomeProduto . "</h3>";
        ?>

        <input type="text" name="nome" placeholder="Nome Completo" required>
        <input type="email" name="email" placeholder="E-mail" required>
        <input type="text" name="endereco" placeholder="Endereço" required>
        <input type="number" name="cep" placeholder="CEP" required>

        <select name="metodo_pagamento" required>
            <option value="" disabled selected>Selecione o Método de Pagamento</option>
            <option value="cartao_credito">Cartão de Crédito</option>
            <option value="boleto">Boleto</option>
            <option value="pix">PIX</option>
        </select>

        <input type="submit" value="Confirmar Compra">
    </form>

    <!-- Alerta de confirmação de compra -->
    <?php if ($compraConfirmada): ?>
        <div class="alerta">
            Compra realizada com sucesso! Obrigado pela sua compra.
        </div>
    <?php endif; ?>

    <script>
        // Exibir o alerta com JavaScript
        window.onload = function() {
            <?php if ($compraConfirmada): ?>
                document.querySelector('.alerta').style.display = 'block'; // Exibe o alerta
            <?php endif; ?>
        };
    </script>

</body>

</html>
