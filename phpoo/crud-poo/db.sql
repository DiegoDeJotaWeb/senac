create database crudPoo;
use crudPoo;
create table cadastro(
id int(10) not null,
nome varchar(100) not null,
mae varchar(100) not null,
pai varchar(100) not null,
email varchar(100) not null,
telefone varchar(100) not null,
dataEntrega date not null,
endereco text not null 
);

ALTER TABLE `cadastro`
ADD primary key (`id`);

ALTER TABLE `cadastro`
MODIFY `id` int(10) NOT NULL auto_increment, auto_increment=3;

select * from cadastro;
