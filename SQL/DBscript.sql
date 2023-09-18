create database proj_web;
use proj_web;

create table usuarios(id_usuario int not null auto_increment,
					  nome varchar(100) not null,
                      email varchar(100) not null,
                      senha varchar(100) not null,
                      primary key(id_usuario));
                      
create table jogos (id_jogos int not null auto_increment,
					nome varchar(100) not null,
                    preco double not null,
                    plataforma varchar(100) not null,
                    img  varchar(100) not null,
                    primary key(id_jogos));

create table carrinho(id_usuario int not null,
					  id_jogo int not null,
					  quantidade int not null,
                      foreign key(id_usuario) references usuarios(id_usuario),
                      foreign key(id_jogo) references jogos(id_jogos));

create table pagamento(id_pagamento int not null auto_increment,
					   id_usuario int not null,
					   forma_pagamento varchar(20) not null,
                       preco_total int not null,
                       data_hora datetime not null,
                       primary key(id_pagamento));

insert into jogos(nome, preco, plataforma, img)
values("Grand Theft Auto V",59.99,"PS4","Images/GTA.jpg"),
	  ("Red Dead Redemption 2",150.00,"PS4","Images/Red.jpg"),
      ("FIFA 23",399.00,"PS5","Images/FIFA.jpg"),
      ("The Last Of Us 2",225.00,"PS4","Images/last.png");



















