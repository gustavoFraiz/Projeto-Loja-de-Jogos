fetch("PHP/cards.php",{
    METHOD: "GET"
}).then(async function(resposta){
    var objeto = await resposta.json();
    listarCards(objeto);
});

function listarCards(produtos){
    for(var i = 0;i<produtos.length;i++){
        var conteudo = "";
        conteudo += '<div class="card">';
        conteudo += '<div class="nome">' + produtos[i].nome + '</div>';
        conteudo += '<div> <img src="'+produtos[i].img+'">';
        conteudo += '<div class="preco">R$ ' + produtos[i].preco + '</div>';
        conteudo += '<div class="plat">' + produtos[i].plataforma + '</div>';
        conteudo += '<button onclick="carrinho('+produtos[i].id_jogos+')"> Comprar </button>';
        conteudo += '</div>';

        document.getElementById("root").innerHTML += conteudo;
    }

}

function carrinho(id){
    document.getElementById("id_produto").value = id;
    var form = document.getElementById("formCarrinho");
    var dados = new FormData(form);

    fetch("PHP/addcarrinho.php",{
        method: "POST",
        body: dados
    }).then(async function (resposta){
        var objet = await resposta.json();
        alert(objet);
    });   
}