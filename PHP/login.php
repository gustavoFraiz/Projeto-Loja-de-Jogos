<?php
    //session_start();
    include "conexao.php";

    $email = $_POST["email-login"];
    $senha = $_POST["senha-login"];

    $query = "SELECT * FROM usuarios WHERE email = '".$email."';";
    $tabela = mysqli_query($con, $query);

    // json_encode("email/senha") == erro / json_encode("1") == sucesso
    // verifica o retorno da query
    if (mysqli_num_rows($tabela) == 0) {
        $objetoJSON = json_encode("email");
        echo $objetoJSON;
    }
    else {
        $registro = mysqli_fetch_assoc($tabela);
        //verifica se a senha esta correta
        if (password_verify($senha, $registro["senha"])){
            // inicia session
            session_start();
            $_SESSION["id"] = $registro["id_usuario"];
            $_SESSION["nome"] = $registro["nome"];

            $objetoJSON = json_encode("1");
            echo $objetoJSON;
        }
        // senha errada, retorna erro
        else {
            $objetoJSON = json_encode("senha");
            echo $objetoJSON;
        }
    }
?>