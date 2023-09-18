<?php
    include "conexao.php";

    $nome = $_POST["Nome-Cadastro"];
    $email = $_POST["Email-Cadastro"];
    $senha = $_POST["Senha-Cadastro"];

    // query procura o email no BD
    $query_verifica_email = "SELECT * FROM usuarios WHERE email = '".$email."';";
    $tabela = mysqli_query($con,$query_verifica_email);
    // se voltar vazio insere novo registro
    if (mysqli_num_rows($tabela) == 0){
        $hashed_pwd = password_hash($senha, PASSWORD_DEFAULT);
        $query_registrar = "INSERT INTO usuarios(nome,email,senha) VALUES ('$nome','$email','$hashed_pwd')";
        mysqli_query($con,$query_registrar);

        $objetoJSON = json_encode("1");
        echo $objetoJSON;
    }
    // retorna erro
    else{
        $objetoJSON = json_encode("0");
        echo $objetoJSON;
    }
?>