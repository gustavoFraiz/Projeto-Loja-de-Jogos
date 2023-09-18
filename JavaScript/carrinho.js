fetch("PHP/carrinho.php",{
    METHOD: "GET"
}).then(async function(resposta){
    var objeto = await resposta.json();
    listarCarrinho(objeto);
    valorTotal(objeto);
});


function listarCarrinho(produtos){
    for(var i =0;i<produtos.length;i++){
        var conteudo = "";
        conteudo += '<li class="card">';
        conteudo += '<ul class="nome">' + produtos[i].nome + ':</ul>';
        conteudo += '<ul class="quantidade">Quantidade: ' + produtos[i].quantidade + '</ul>';
        conteudo += '<ul class="preco">Preco: ' + produtos[i].preco + '</ul>';
        conteudo += '</li>';
        conteudo += '<button class="botao" onclick="deletar('+produtos[i].id_jogo+','+ produtos[i].quantidade +')"> Remover </button>';
        document.getElementById("root"). innerHTML += conteudo;
    }
}


function valorTotal(valor){
    let total = 0;
    for(var i = 0;i<valor.length;i++){
        var cont = "";
        const soma = [];
        var val = valor[i].preco * valor[i].quantidade;
        soma.push(val);
        for (var j = 0; j<soma.length;j++){
            total += soma[j];
        }

    }
    cont += '<div class="tot">';
    cont += '<div>Valor total: R$ ' + total + '.</div>';
    cont += '<button class="button-comprar" onclick="trocar()">Comprar</button>';
    cont += '</div>';

    document.getElementById("total").innerHTML += cont;
}


function deletar(id,quantidade){
    document.getElementById("id_jogo").value = id;
    document.getElementById("quantidade").value = quantidade;

    var form = document.getElementById("formCarrinho");
    var dados = new FormData(form);

    fetch("PHP/deletecarrinho.php",{
        method: "POST",
        body: dados
    }).then(async function (resposta){
        var objet = await resposta.json();
        alert(objet);
        window.location.reload();
    }); 
}

function trocar(){
    window.location.href = "compra.php";
}