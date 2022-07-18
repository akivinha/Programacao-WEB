<?php
function buscarCEP($cep){
    //remover o - do número
    $cep = str_replace("-", "", $cep);

    //buscar o CEP na API
    $api = file_get_contents("http://viacep.com.br/ws/$cep/json/");

    $json = json_encode($api);

    return $json;
}
?>