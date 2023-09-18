<?php
    session_start();

    // retorna usuario para a pagina principal caso ja esteja logado.
    if (isset($_SESSION["id"]))
    {
        header("Location: main.php");
    }
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/login_cadastro.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
        <script defer src="JavaScript/cadastrar.js"></script>

        <title>Loja | Cadastro</title>
    </head>
    <body>
        <!-- Titulo -->
        <div class="container-titulo">
            <h1 class="titulo">Loja<p>.</p></h1>
        </div>
        <!-- Main -->
        <div class="main">
            <!--Caixa de cadastro-->
            <div class="painel_cadastro">
                <div class="painel_conteudo"> 
                    <h1>Cadastro<p>.</p></h1>
                    <form id="Form-Cadastro">
                        <div class="input_wrap">
                            <h3>Nome Completo.</h3>
                            <input type="text" id="Nome-Cadastro" name="Nome-Cadastro" placeholder="Nome">
                            <div class="container_erro" id="erro_nome"></div>
                        </div>
                        <div class="input_wrap">
                            <h3>Email.</h3>
                            <input type="email" id="Email-Cadastro" name="Email-Cadastro" placeholder="Email">
                            <div class="container_erro" id="erro_email"></div>
                        </div>
                        <div class="input_wrap">
                            <h3>Senha.</h3>
                            <input type="password" id="Senha-Cadastro" name="Senha-Cadastro" placeholder="Senha">
                            <div class="container_erro" id="erro_senha"></div>
                        </div>
                        <div class="input_wrap">
                            <h3>Confirmar Senha.</h3>
                            <input type="password" id="confSenha-Cadastro" name="confSenha-Cadastro" placeholder="Senha">
                            <div class="container_erro" id="erro_conf_senha"></div>
                        </div>
                        <button class="input-Button" type="button" onclick="cadastrar()">Cadastrar</button>
                    </form> 
                    <div class="wrap_login">
                        <h2>Já possui uma conta?</h2>
                        <a href="index.php">
                            <button class="button_registro">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>