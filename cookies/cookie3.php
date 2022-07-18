<?php
    setcookie("nome", "", time()-3600);
    setcookie("caneta", "", time()-3600);

    unset($_COOKIE["nome"]);
    unset($_COOKIE["caneta"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página 3</title>
</head>
<body>
    <h1>Final</h1>
</body>
</html>