function cadastrar(){
    var nome = document.getElementById("Nome-Cadastro");
    var email = document.getElementById("Email-Cadastro");
    var senha = document.getElementById("Senha-Cadastro");
    var conf_senha = document.getElementById("confSenha-Cadastro");

    var erro_nome = document.getElementById("erro_nome");
    var erro_email = document.getElementById("erro_email");
    var erro_senha =  document.getElementById("erro_senha");
    var erro_conf_senha =  document.getElementById("erro_conf_senha");

    // adiciona classe 'erro' aos campos não preenchidos
    if (nome.value == ''){
        nome.classList.add("erro_input");
        erro_nome.innerHTML = "<p class='erro'>Campo obrigatorio.</p>";
    }
    else {
        nome.classList.remove("erro_input");
        erro_nome.innerHTML = "";
    }
    if (email.value == ''){
        email.classList.add("erro_input");
        erro_email.innerHTML = "<p class='erro'>Campo obrigatorio.</p>";
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
    if (conf_senha.value == ''){
        conf_senha.classList.add("erro_input");
        erro_conf_senha.innerHTML = "<p class='erro'>Campo obrigatorio.</p>";
    }
    else {
        conf_senha.classList.remove("erro_input");
        erro_conf_senha.innerHTML = "";
    }

    var form = document.getElementById("Form-Cadastro");
    var dados = new FormData(form);

    if (senha.value != '' && conf_senha.value !=  ''){
        if(senha.value == conf_senha.value){
            fetch("PHP/cadastrar.php",{
                method: "POST",
                body: dados
            }).then(async function(resposta){
                var objeto = await resposta.json();
                if (objeto == 1){
                    window.location.href = "index.php";
                }
                else{
                    email.classList.add("erro_input");
                    erro_email.innerHTML = "<p class='erro'>Email ja cadastrado.</p>";
                }
            });
        }
        else{
            senha.classList.add("erro_input");
            conf_senha.classList.add("erro_input");
            erro_senha.innerHTML = "<p class='erro'>As senhas não conferem.</p>";
            erro_conf_senha.innerHTML = "<p class='erro'>As senhas não conferem.</p>";
        }
    }       

}