<?php
    session_start();

    // retorna usuario para a pagina principal caso ja esteja logado.
    if (!isset($_SESSION["id"]))
    {
        header("Location: main.php");
    }
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="CSS/carrinho.css">
        <link rel="stylesheet" href="CSS/geral.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <title>Loja | Carrinho</title>
    </head>
    <body>
        <div class="nav">
            <div class="Nav-nome">
                <a class="nome_link" href="main.php">
                    <h1 class="nome">Loja</h1><h1 class="Ponto">.</h1>
                </a>
            </div>
            <div class="nav_links">
                <a class="Jogos" href="jogos.php">
                    Jogos
                </a>
                <a class="Carrinho" href="carrinho.php">
                    Carrinho
                </a>
            </div>
            <div class="nav_direita">
                <?php
                    if (isset($_SESSION["id"]))
                    {
                        echo "<h2>".$_SESSION["nome"]."</h2>";
                        echo "<a href='PHP/logout.php'><span class='material-symbols-outlined'>logout</span></a>";
                    }
                ?>
                <img src="Images/logo.png">
            </div>
        </div>
        <div class="main">
            <div class="Root-Carrinho">
                <h1>Carrinho:</h1>
                <div id="root"></div>
                <div id="total"></div>
            </div>
            <form  id = "formCarrinho">
                <input type="hidden" name="id_jogo" id="id_jogo"/>
                <input type="hidden" name="quantidade" id="quantidade"/>
            </form>
        </div>
        <footer>
            <h3>Rua Iapó, 336, Prado Velho</h3>
            <h3>(41) 999495200</h3>
            <h3>gugafraiz7@gmail.com</h3>
        </footer>
        <script src="JavaScript/carrinho.js"></script>
    </body>
</html>