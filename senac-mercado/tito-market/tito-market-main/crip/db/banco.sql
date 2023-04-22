CREATE TABLE tbl_acessos(
id int auto_increment primary key,
usuario varchar(20),
senha varchar(120),
id_situacao int
);

create table tbl_situcao(
	idSituacao int auto_increment primary key
);

select * from tbl_acessos;