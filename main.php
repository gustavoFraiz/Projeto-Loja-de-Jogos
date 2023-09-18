<?php
    session_start();
?>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Loja | Principal</title>
        <link rel="stylesheet" href="CSS/main.css">
        <link rel="stylesheet" href="CSS/geral.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
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
            <div class="container_slide">
                <div class="container_capa">
                    <img class="capa" id="Img" src="Images/GTA.jpg">
                </div>
                <div class="container_direita">
                    <div class="container_info">
                        <h1 id="titulo">Grand Theft Auto V</h1>
                        <div class="dev_info">
                            <h3 id="Dev">Rockstar Games</h3>
                            <h3 id="Ano">2013</h3>
                        </div>
                        <h3 id="plataforma">PS4 / XBOX</h3><!-- <br><br> -->
                        <!-- <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                            <span class="material-symbols-outlined">star</span>
                        <span class="material-symbols-outlined">star</span><br> -->
                        <h1 class="preco" id="preco">R$59.99</h1>
                        <button class="Botao-Carrinho" onclick="comprar()">Comprar</button>
                    </div>
                    <div class="seletor_slide">
                        <div class="Button-Jogo">
                            <button class="Button-Round" onclick="Trocar(0)"></button>
                            <button class="Button-Round" onclick="Trocar(1)"></button>
                            <button class="Button-Round" onclick="Trocar(2)"></button>
                            <button class="Button-Round" onclick="Trocar(3)"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <h3>Rua Iapó, 336, Prado Velho</h3>
            <h3>(41) 999495200</h3>
            <h3>gugafraiz7@gmail.com</h3>
        </footer>
        <script src="JavaScript/main.js"></script>
    </body>
</html>