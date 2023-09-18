<?php
    session_start();
    include "conexao.php";

    $valor = $_POST["valor"];
    $metodo = $_POST["metodo"];

    // Registra a compra
    $query = "INSERT INTO pagamento(id_usuario, forma_pagamento, preco_total, data_hora) VALUES (".$_SESSION["id"].", '$metodo', '$valor', now());";
    mysqli_query($con,$query);

    // Limpa o carrinho
    $query2 = "DELETE FROM carrinho WHERE  id_usuario = ".$_SESSION["id"].";";
    mysqli_query($con,$query2);

    $objetoJSON = json_encode("Compra concluida com sucesso.");
    echo $objetoJSON;


?>