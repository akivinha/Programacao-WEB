<?php
    @$usuario = $_POST["usuario"];
    @$senha = $_POST["senha"];

    if($usuario == "zezinho" && $senha == "123"){
        //pode acessar
        session_start();
        $_SESSION["usuario"] = $usuario;
        $_SESSION["senha"] = md5($senha);

        //echo "<p> Usuário: $usuario </p>";
        //echo "<p> Senha: $senha </p>";
        //echo "<p> Senha:" . md5($senha) . "</p>";

        header("Location: principal.php");
    }else{
        //nao pode acessar
        echo "<h1>Você não pode acessar<h1>";
        die();
    }
?>