<?php

    require "autoload.php";

    date_default_timezone_set("America/Sao_Paulo");

    $permissao = new Permissao();
    $usuario = new Usuario();

    $usuario->preencherDados("Fulano", 555111111, 0);

    $resposta = $usuario->cadastrar();

    if($resposta == "200") {
    } else {
        echo "Algo deu errado.";
    }
?>