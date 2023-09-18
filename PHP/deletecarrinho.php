<?php
    session_start();
    include "conexao.php";

    $jogo = $_POST["id_jogo"];
    $quantidade = $_POST["quantidade"];


    if($quantidade == 1){
        $query2 = "DELETE FROM carrinho WHERE id_jogo = '".$jogo."' AND id_usuario = '" .$_SESSION["id"]. "';";
        mysqli_query($con,$query2);
        $objetoJSON = json_encode("Removido com sucesso");
        echo $objetoJSON;
    }
    else{
        $query = "UPDATE carrinho SET quantidade = quantidade - 1 WHERE id_jogo = '".$jogo."' AND id_usuario = '" .$_SESSION["id"]. "';";
        mysqli_query($con,$query);
        $objetoJSON = json_encode("Removido com sucesso");
        echo $objetoJSON;
    }
?>