

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 2</title>
</head>
<body>
    
    <h1>Página 2</h1>

    <?php
        $nome = $_COOKIE["nome"];
        $can = $_COOKIE["caneta"];
        $_COOKIE["caneta"] = "Fabercastell";
    ?>

<p> Nome: <?= $nome?> </p>
<p> Caneta: <?=$can?> </p>

<p><a href="cookie3.php">Próxima página</a></p>
</body>
</html>