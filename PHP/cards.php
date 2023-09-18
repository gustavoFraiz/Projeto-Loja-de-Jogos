<?php

    include "conexao.php";

    $query = "SELECT * FROM jogos";
    $registros = mysqli_query($con,$query);

    $i = 0;

    while($registro = mysqli_fetch_assoc($registros)){
        $resposta[$i]["id_jogos"]  = $registro["id_jogos"];
        $resposta[$i]["nome"] = $registro["nome"];
        $resposta[$i]["preco"] = $registro["preco"];
        $resposta[$i]["plataforma"] = $registro["plataforma"];
        $resposta[$i]["img"] = $registro["img"];

        $i++;
    }

    $objetoJSON = json_encode($resposta);
    echo $objetoJSON;
?>