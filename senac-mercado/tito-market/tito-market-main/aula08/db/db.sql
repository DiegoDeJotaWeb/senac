use aula08;

create table tbl_clientes(
	idCliente INT AUTO_INCREMENT PRIMARY KEY,
	nomeCliente varchar(255),
	sobrenomeCliente varchar(255),
	dataNascimentoCliente date,
    newsletterCliente varchar(255),
    generoID int,
    situacaoID int    
);


create table tbl_enderecos(
	idEndereco int auto_increment primary key,
	enderecoEndereco varchar(255),
	numeroEndereco varchar(11),
	cidadeEndereco varchar(11),
	bairroEndereco varchar(11)
);

create table tbl_contato_telefone(
	idContatoTelefone int auto_increment primary key,
	numeroContatoTelefone int,
	usuarioID int,
    situacaoID int
);

create table tbl_contato(
	idContatoTelefone int auto_increment primary key,
	numeroContatoTelefone int,
    tipoId int,
	usuarioID int,
    situacaoID int
);

create table tbl_contato_email(
	idContatoEmail int auto_increment primary key,
	emailContatoEmail varchar(30),
	usuarioID int,
    situacaoID int
);

create table tbl_genero(
	idGenero int auto_increment primary key,
	nomeGenero varchar(30)
);

select * from tbl_genero;

create table tbl_documentos(
	idDocumento int auto_increment primary key,
	documento varchar(255),
	usuarioID varchar(255),
    tipoDocumentoID char(14), 
    usuarioID int,
    situacaoID INT DEFAULT 1
);

create table tbl_tipo_documento(
idTipoDocumento int auto_increment primary key,
tipoDocumento varchar(20)
);
INSERT INTO tbl_tipo_documento(tipoDocumento)VALUES(CPF);
select * from tbl_tipo_documento;

CREATE TABLE acessos(
idAcesso int auto_increment primary key,
usuario varchar(30),
senha varchar(120),
tipoAcesso char(10),
usuarioID int,
situacaoID int
);

CREATE TABLE tbl_admins(
	idAdmin INT AUTO_INCREMENT PRIMARY KEY,
	nomeAdmin varchar(255),
	sobrenomeAdmin varchar(255),
	dataNascimentoAdmin date,
    situacaoID int  
);







