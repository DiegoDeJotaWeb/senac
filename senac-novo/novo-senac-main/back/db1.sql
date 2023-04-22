create database if not exists senac;

use senac;

show databases;

create table fornecedores(
codigo int(4) auto_increment,
nome varchar(30) not null,
email varchar(50),
primary key (codigo)
);

insert into fornecedores(codigo, nome, email) values (null, "Diego Rodrigues", "diego@email.com");
insert into fornecedores(codigo, nome, email) values (null, "Rodrigues Diego", "rodrigues@email.com");
insert into fornecedores(codigo, nome, email) values (null, "Joaquim Diego", "joaquim@email.com");

select * from fornecedores;

select email from fornecedores;

-- commit;
start transaction;
delete from fornecedores where codigo = 3;
rollback;

start transaction;
drop table fornecedores;
rollback;

alter table fornecedores 
add sexo smallint not null after ativo ;

select * from fornecedores order by nome asc;

select * from fornecedores order by codigo asc;

-- commit;
start transaction;
update fornecedores set sexo = 3 where codigo =2;
rollback;

-- commit;
start transaction;
update fornecedores set ativo = 1 where codigo IN (1,2);
rollback;

create table cliente(
codigo int primary key auto_increment,
nome varchar(100) not null,
endereco varchar(200) not null,
telefone varchar(12) not null,
fornecedores_codigo int not null,
foreign key(fornecedores_codigo) references fornecedores(codigo)
)

/*https://pt.stackoverflow.com/questions/211737/qual-%C3%A9-a-finalidade-das-op%C3%A7%C3%B5es-restrict-cascade-set-null-e-no-action*/
