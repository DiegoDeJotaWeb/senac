create database if not exists school default character set utf8 default collate utf8_general_ci;
use school;
create table if not exists student(
id int unsigned not null auto_increment, 
name varchar(60), 
primary key(id)
) default charset = utf8;


CREATE DATABASE usuario;
USE usuario;
CREATE TABLE usuarios(
  idUsuario INT PRIMARY KEY AUTO_INCREMENT,
  nomeUsuario varchar(255),
  emailUsuario varchar(255),
  senhaUsuario varchar(255)
);

select *from usuarios;

insert into usuarios(nomeUsuario,emailUsuario,senhaUsuario)values("Jhenny","jhenny@email.com","1234");