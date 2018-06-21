create database selecaoPET
default character set utf8
default collate utf8_general_ci;
use selecaoPET;

create table comentarios (
	id int primary key auto_increment,
    nome varchar(50) not null,
    conteudo text not null
) default charset = utf8;


select * from comentarios;