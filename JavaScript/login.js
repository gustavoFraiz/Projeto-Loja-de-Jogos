function login(){
    var email = document.getElementById("email_login");
    var senha = document.getElementById("senha_login");

    var erro_email = document.getElementById("erro_email");
    var erro_senha = document.getElementById("erro_senha");

    // adiciona classe 'erro' aos campos não preenchidos
    if (email.value == ''){
        email.classList.add("erro_input");
        erro_email.innerHTML = "<p class='erro'>Campo obrigatorio.</p>"
    }
    else {
        email.classList.remove("erro_input");
        erro_email.innerHTML = "";
    }
    if (senha.value == ''){
        senha.classList.add("erro_input");
        erro_senha.innerHTML = "<p class='erro'>Campo obrigatorio.</p>";
    }
    else {
        senha.classList.remove("erro_input");
        erro_senha.innerHTML = "";
    }

    // verifica se ambos os campos estão preenchidos antes de enviar
    if (email.value != '' && senha.value != ''){
        var form = document.getElementById("formLogin");
        var dados = new FormData(form);

        fetch("PHP/login.php",{
            method: "POST",
            body: dados
        }).then(async function(resposta){
            var objeto = await resposta.json();
            // msg erro email
            if(objeto == "email"){
                email.classList.add("erro_input");
                erro_email.innerHTML = "<p class='erro'>Email não cadastrado.</p>";
            }
            // msg erro senha
            else if(objeto == "senha"){
                senha.classList.add("erro_input");
                erro_senha.innerHTML = "<p class='erro'>Senha incorreta.</p>";
            }
            // sucesso, redireciona para pagina principal
            else{
                window.location.href = "main.php";
            }
        });
    }
}