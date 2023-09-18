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
        <title>Loja | Login</title>
    </head>
    <body>
        <!-- Titulo -->
        <div class="container_titulo">  
            <h1 class="titulo">Loja<p>.</p></h1>
        </div>
        <!-- Main -->
        <div class="main">
            <div class="main_conteudo">
                <!--Bem-vindo-->
                <div class="painel">
                    <div class="painel_conteudo">
                        <h1>Bem-<br>Vindo<p>.</p></h1> 
                        <div>
                            <h2>Não possui um cadastro?</h2>
                            <a href="cadastro.php">
                                <button class="button_registro">Registre-se</button>
                            </a>
                        </div>
                    </div>
                </div>
                <!--Login-->
                <div class="painel">
                    <div class="painel_conteudo">
                        <h1>Login<p>.</p></h1>
                        <form id="formLogin">
                            <div class="input_wrap">
                                <h3>Email.</h3>
                                <input type="email" id="email_login" name="email-login" placeholder="Email">
                                <div class="container_erro" id="erro_email"></div>
                            </div>
                            <div class="input_wrap">
                                <h3>Senha.</h3>
                                <input type="password" id="senha_login" name="senha-login" placeholder="Senha">
                                <div class="container_erro" id="erro_senha"></div>
                            </div>
                            <button type="button" class="input-Button" onclick="login()">Entrar</button>
                            <script type="text/javascript" src="JavaScript/login.js"></script>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>