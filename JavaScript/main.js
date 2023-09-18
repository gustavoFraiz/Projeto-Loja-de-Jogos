function Trocar(valor){
    const titulo = ["Grand Theft Auto V","Red Dead Redemption 2","FIFA 23","The Last of Us Part II"];
    const dev = ["Rockstar Games","Rockstar Games","EA Sports","Naughty Dog"];
    const ano = ["2013","2018","2022","2019"];
    const plataforma = ["PS4 / XBOX","PS4 / XBOX","PS5","PS4"];
    const image = ["Images/GTA.jpg","Images/Red.jpg","Images/FIFA.jpg","Images/last.png"];
    const preco = ["R$59.99","R$150","R$399","R$225"];
    document.getElementById("titulo").innerHTML = titulo[valor];
    document.getElementById("Dev").innerHTML = dev[valor];
    document.getElementById("Ano").innerHTML = ano[valor];
    document.getElementById("plataforma").innerHTML = plataforma[valor];
    document.getElementById("preco").innerHTML = preco[valor];
    var img = document.getElementById("Img");
    img.src = image[valor];
}

function comprar(){
    window.location.href = "jogos.php";
}