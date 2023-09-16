<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="pags.css">
</head>
    <body>
        <img src="imgs/coroa.png" alt="iconeCoroa">
        <h2>GRAN MERC`S COMPANY</h2>
        <form action="valida.php" method="post">
            <h1>Login</h1>
            <input required type="email" name="username" placeholder="Email">
            <input required type="password" name="password" placeholder="senha">
            <input class="btn" type="submit" value="Login">
            <input type="hidden" name="page" value="1">
            <a href="index.php">Voltar</a>
        </form>
        <?php 
        if(isset($_GET["erro"]) && $_GET["erro"]==1){
            ?> 
                <script>
                    alert("Senha menor que 8 dígitos!")
                </script>
            <?php
        }
        if(isset($_GET["erro"]) && $_GET["erro"]==2){
            ?> 
                <script>
                        alert("Email inválido!")
                </script>
            <?php
        }
        if(isset($_GET["alert"]) && $_GET["alert"]==1){
            ?> 
                <script>
                    alert("Cadastro concluído!")
                </script>
            <?php
        }
    ?>
    </body>
</html>
