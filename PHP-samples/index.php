<?php
    $variavel = 198;

    intval($variavel);

    if (!empty($variavel) && $variavel == 198) {
        echo "Variável é válida<br>";
    } else {
        echo "Variável inválida!";
    }

    //--------------------------------------------

    $array = [ "nome" => "Pedro Luiz", "endereco" => "Av Taquara", "telefone" => "(51) 5151-51511" ];

    if (!empty($array["endereco"])) { 
        echo $array["endereco"] . "<br>";
    } else {
        echo "Endereço não encontrado!<br>";
    }

    //--------------------------------------------
    
    $nome = "Romarinho";

    if (!empty($nome) && strcmp($nome, "Romarinho")==0) {
        echo $nome . "<br>";
    } else {
        echo "Variável inválida!";
    }
    
?>