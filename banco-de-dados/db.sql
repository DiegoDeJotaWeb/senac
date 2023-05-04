CREATE DATABASE IF NOT EXISTS loja;

-- drop database loja;

use loja;

CREATE TABLE cliente1 
( 

 nome VARCHAR(200),  
 cpf CHAR(14),  
 logradouro VARCHAR(250),  
 telefone CHAR(14) 
); 

insert into cliente1(nome,cpf,logradouro,telefone)values("Diego","666.666.666-66","Rua tal","(11)66666-6666");
insert into cliente1(nome,cpf,logradouro,telefone)values("Maicon","666.666.666-66","Rua tal","(11)66666-6666");
insert into cliente1(nome,cpf,logradouro,telefone)values("Pedro","666.666.666-66","Rua tal","(11)66666-6666");


SELECT nome FROM cliente
WHERE nome BETWEEN "Diego" AND "Marcelo";

CREATE TABLE cliente 
( 
idCliente INT PRIMARY KEY AUTO_INCREMENT,
 nome VARCHAR(200),  
 cpf CHAR(14),  
 logradouro VARCHAR(250),  
 telefone CHAR(14) 
); 

insert into cliente(nome,cpf,logradouro,telefone)values("Diego","666.666.666-66","Rua tal","(11)66666-6666");
insert into cliente(nome,cpf,logradouro,telefone)values("Diego","666.666.666-66","Rua tal","(11)66666-6666");
insert into cliente(nome,cpf,logradouro,telefone)values("Maicon","999.999.999-99","Rua tal","(11)99999-9999");
insert into cliente(nome,cpf,logradouro,telefone)values("Pedro","111.111.111-111","Rua do bigode","(11)11111-1111");
insert into cliente(nome,cpf,logradouro,telefone)values("Marcelo","222.222.222-222","Rua do minhoca","(11)22222-2222");
insert into cliente(nome,cpf,logradouro,telefone)values("Andre","333.333.333-333","Rua do bigode 2","(11)33333-3333");

select * from cliente;



CREATE TABLE compra 
( 
 idCompra INT PRIMARY KEY AUTO_INCREMENT,  
 numeroNota INT,  
 valorCompra FLOAT,  
 dataCompra DATE,  
 clienteId INT
); 

insert into compra(numeroNota,valorCompra,dataCompra,clienteId)values(100,"100.00","2023-04-26",1);
insert into compra(numeroNota,valorCompra,dataCompra,clienteId)values(101,"10.00","2023-04-03",2);
insert into compra(numeroNota,valorCompra,dataCompra,clienteId)values(102,"69.00","2023-04-10",3);
insert into compra(numeroNota,valorCompra,dataCompra,clienteId)values(103,"13.00","2023-03-05",4);
insert into compra(numeroNota,valorCompra,dataCompra,clienteId)values(104,"55.00","2023-03-21",5);

select * from compra;



CREATE TABLE produto 
( 
 idProduto INT PRIMARY KEY AUTO_INCREMENT, 
 nomeProduto INT,  
 descricaoProduto INT,  
 valorProduto INT,  
 estoqueId INT
); 


CREATE TABLE estoque 
( 
 idEstoque INT PRIMARY KEY AUTO_INCREMENT,  
 quantidadeEstoque INT 
); 

ALTER TABLE compra ADD FOREIGN KEY(clienteId) REFERENCES cliente (idCliente);


ALTER TABLE produto ADD FOREIGN KEY(estoqueId) REFERENCES estoque (idEstoque);

select valorCompra FROM compra WHERE numeroNota BETWEEN 100 AND 101;

select * FROM compra WHERE numeroNota BETWEEN 100 AND 102;

SELECT nome FROM cliente
WHERE nome BETWEEN "Diego" AND "Marcelo";
-- fdfdf
SELECT  DISTINCT  nome FROM cliente where nome not like "D%";

SELECT *
FROM  compra
INNER JOIN cliente 
ON compra.idCompra=cliente.idCliente WHERE numeroNota BETWEEN 100 AND 103;






