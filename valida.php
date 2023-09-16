<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valida</title>
</head>
<body>
    <?php
    $page = $_POST["page"];
    if($page==1){
        $usuario = $_POST["username"];
        $senha = $_POST["password"];
        if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
            if(strlen($senha) < 8){
                header("Location: pagLogin.php?erro=1");
            }else{
                header("Location: cadastrados.php");
            }
        }else{
            header("Location: pagLogin.php?erro=2");
        }
    }
    if($page==2){
        $nome = $_POST["name"];
        $usuario = $_POST["username"];
        $senha = $_POST["password"];
        if(filter_var($usuario, FILTER_VALIDATE_EMAIL)){
            if(strlen($senha) < 8){
                header("Location: pagCadastro.php?erro=1");
            }else{
                header("Location: pagLogin.php?alert=1");
            }
        }else{
            header("Location: pagCadastro.php?erro=2");
        }
    }
    ?>
</body>
</html>