<?php
    session_start();
    include "conexao.php";

    $query = "SELECT * FROM carrinho WHERE id_usuario = ".$_SESSION["id"].";";
    $registros = mysqli_query($con,$query);

    $i = 0;

    while($registro = mysqli_fetch_assoc($registros)){
        $resposta[$i]["id_jogo"] = $registro["id_jogo"];
        $resposta[$i]["quantidade"] = $registro["quantidade"];
        $query2 = "SELECT * FROM jogos WHERE id_jogos = '".$resposta[$i]["id_jogo"]."'";
        $registros2 = mysqli_query($con,$query2);
        while($registro2 = mysqli_fetch_assoc($registros2)){
            $resposta[$i]["nome"] = $registro2["nome"];
            $resposta[$i]["preco"] = $registro2["preco"];
        }

        $i++;
    }
    
    $objetoJSON = json_encode($resposta);
    echo $objetoJSON;
?>