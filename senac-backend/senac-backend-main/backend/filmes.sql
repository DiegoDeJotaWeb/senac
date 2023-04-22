create database tbl_filmes;
use tbl_filmes;
CREATE TABLE FILMES (
  titulo varchar(100) NOT NULL,
  genero varchar(25) NOT NULL,
  ano int NOT NULL
);


INSERT INTO FILMES VALUES ('Harry Potter 7 - Part 2', 'Aventura', 2011);
INSERT INTO FILMES VALUES ('Velozes e Furiosos 5', 'Ação', 2011);
INSERT INTO FILMES VALUES ('James Bond - 007 - Skyfall', 'Ação', 2012);
INSERT INTO FILMES VALUES ('As Crônicas de Nárnia', 'Aventura', 2010);
INSERT INTO FILMES VALUES ('Carros 2', 'Animação', 2011);
INSERT INTO FILMES VALUES ('UP', 'Animação', 2009);
INSERT INTO FILMES VALUES ('Vingadores', 'Ação', 2012);
INSERT INTO FILMES VALUES ('Gato de Botas 2', 'Animação', 2023);
INSERT INTO FILMES VALUES ('Avatar', 'Aventura', 2009);
INSERT INTO FILMES VALUES ('Coração de Tinta', 'Aventura', 2008);
INSERT INTO FILMES VALUES ('Lágoa Azul', 'Romance', 1991);


SELECT * FROM FILMES;

SELECt ano, count(*) from FILMES group by ano order by count(ano);
select titulo from filmes where ano = 2010;

select * from filmes  order by titulo;