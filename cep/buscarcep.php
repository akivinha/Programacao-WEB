<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Busca de CEP online</title>
</head>
<body>
    <h1>Buscar dados do CEP: </h1>
    <form method="post" action="">
        <label for="cep">CEP: </label>
        <input type="text" name="cep" id="cep"/>
        <input type="submit" value="Buscar"/>
    </form>

    <?php

        @$cep = trim($_POST["cep"]);
        if($cep != ""){
            require_once("funcoes.php");
            $end = buscarCEP($cep);
    ?>
    <p>CEP: <?=$end
    
    <?php
    }
    ?>
</body>
</html>