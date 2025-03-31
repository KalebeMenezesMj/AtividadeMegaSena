<?php

if (isset($_POST["btnUser"])) {

    session_start();

    $_SESSION["usuario"] = $_POST["usuario"];
    header("location: index.php");
}

if (isset($_COOKIE["email"])) {

    $email = $_COOKIE["email"];
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Casa de Aposta</title>
</head>

<body>

    <div id="borda">
        <div class="form-usuario">
            <form action="#" method="POST">
                <label for="usuario">Digite um email</label><br>
                <input type="text" id="email" name="email" required><br>

                <label for="senha">Digite sua senha</label><br>
                <input type="password" id="senha" name="senha" required><br><br>

                <input type="submit" value="Entrar" name="btnUser">
            </form>
        </div>
    </div>


    <?php

    if ($_POST) {

        $email = "aluno@fatec.edu.br";
        $senha = "alunoweb2";

        $email = $_POST['usuario'];
        $senha = $_POST['senha'];
    }

    ?>


</body>

</html>