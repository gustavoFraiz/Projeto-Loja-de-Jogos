<?php
    session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Loja | Jogos</title>
        <link rel="stylesheet" href="CSS/jogos1.css">
        <link rel="stylesheet" href="CSS/geral.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
            <div class="Div-Cards">
                <div class="root" id="root"></div>
            </div>
        </div>
        <footer>
            <h3>Rua Iapó, 336, Prado Velho</h3>
            <h3>(41) 999495200</h3>
            <h3>gugafraiz7@gmail.com</h3>
        </footer>
        <form  id = "formCarrinho">
            <input type="hidden" name="id_produto" id="id_produto"/>
        </form>
        <script src="JavaScript/cards.js"></script>
    </body>
</html>