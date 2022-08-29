<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dados de Pokemons</title>
</head>
<body>
    <h1>Dados de um pokemon</h1>
    <?php
        $p = file_get_contents("https://pokeapi.co/api/v2/pokemon/4");
        $json = json_decode($p);

        echo "<pre>" . json_encode($json, JSON_PRETTY_PRINT) . "</pre>";
    ?>
</body>
</html>