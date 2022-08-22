<?php
    session_start();
    if(!isset($_SESSION["usuario"]) ||
       !isset($_SESSION["senha"])){
        //erro, nao pode acessar a pagina
        echo"<p>Faça login primeiro</p>";
        die();
       }
?>