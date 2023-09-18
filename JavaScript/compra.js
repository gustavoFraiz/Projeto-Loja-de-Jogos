fetch("PHP/compra.php",{
    METHOD: "GET"
}).then(async function(resposta){
    var objeto = await resposta.json();
    valorTotal(objeto);
});

var total = 0;

function valorTotal(valor){
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
    cont += '<div>Valor total: R$ ' + total + '</div>';
    cont += '</div>';

    document.getElementById("total").innerHTML += cont;
}

function change(valor){
    if (valor == 0){

        var cont = "";
        
        cont += '<h1 class="h11">Cartao de Credito:</h1>';
        cont += '<form id="compra">';
            cont += '<span class="material-symbols-outlined">credit_card</span>';
            cont += '<input type="text" name="cartao" class="input-cartao" placeholder="Cartao de credito"><br><nr>';
            cont += '<input type="text" name="validade" class="input-validade" placeholder="Validade">';
            cont += '<input type="text" name="cod_seguranca" class="input-validade" placeholder="Cod seguranca"><br>';
            cont += '<input type="text" name="nome" class="input-nome" placeholder="Nome Completo"><br>';
            cont += '<input type="hidden" name="valor" id="valor">';
            cont += '<input type="hidden" name="metodo" value="cartao">';
            cont += '<button type="button" class="button" onclick="comprar()">Comprar</button>';
            cont += '<button class="button-voltar" onclick="voltar()">Voltar</button>';
        cont += '</form>';

        document.getElementById("root-root").innerHTML = "";
        document.getElementById("root-root").innerHTML += cont;
    }
    if (valor == 1){
        var cont ="";

        cont += '<h1 class="h11">Pix</h1>';
        cont += '<img class="img-img" src="Images/pix.jpg">';
        cont += '<button type="button" class="button" onclick="comprar()">Comprar</button>';
        cont += '<button class="button-voltar" onclick="voltar()">Voltar</button>';
        document.getElementById("root-root").innerHTML = "";
        document.getElementById("root-root").innerHTML += cont;
    }
}

function voltar(){
    window.location.reload();
}

function comprar(){
    document.getElementById("valor").value = total;
    var form = document.getElementById("compra");
    var dados = new FormData(form);

    fetch("PHP/addcompra.php",{
        method: "POST",
        body: dados
    }).then(async function (resposta){
        var objet = await resposta.json();
        alert(objet);
        window.location.href = "main.php";
    }); 
}