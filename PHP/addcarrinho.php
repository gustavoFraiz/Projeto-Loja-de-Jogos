<?php
    session_start();
    include "conexao.php";
    $jogo = $_POST["id_produto"];

    $query = "SELECT id_jogo FROM carrinho WHERE id_jogo = '".$jogo."' AND id_usuario = '" .$_SESSION["id"]. "';";
    $registro = mysqli_query($con,$query);
    $check = mysqli_fetch_assoc($registro);

    if($check == null){
        $query2 = "INSERT INTO carrinho(id_usuario, id_jogo, quantidade) VALUES ('".$_SESSION['id']."', '".$jogo."', 1)";
        mysqli_query($con,$query2);
        $objetoJSON = json_encode("Adicionado com sucesso");
        echo $objetoJSON;
    }
    else{
        $query3 = "UPDATE carrinho SET quantidade = quantidade + 1 WHERE id_jogo = '".$jogo."'";
        mysqli_query($con,$query3);
    }


    
?>