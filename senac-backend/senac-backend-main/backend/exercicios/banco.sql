create database meuBanco;

use meuBanco;


create table pessoa (
    idPessoa int AUTO_INCREMENT  PRIMARY KEY,
    nomePessoa varchar(255)
);

create table documento (
    idDocumento int AUTO_INCREMENT  PRIMARY KEY,
    cpf varchar(255),
    pessoaId int
);





insert into pessoa (nomePessoa)values("diego");
insert into pessoa (nomePessoa)values("marcelo");



