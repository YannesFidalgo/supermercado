<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="pags.css">
</head>
<body>
    <img src="imgs/coroa.png" alt="iconeCoroa">
    <h2>GRAN MERC`S COMPANY</h2>
    <form action="valida.php" method="post">
        <h1>Cadastro</h1>
        <input name="name" type="text" placeholder="Digite seu nome">
        <input name="username" type="email" placeholder="Digite seu email">
        <input name="password" type="password" placeholder="Digite sua senha">
        <input class="btn" type="submit" value="Cadastrar">
        <input type="hidden" name="page" value="2">
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
                    alert("O email não é válido!")
                </script>
            <?php
        }
    ?>
</body>
</html>
