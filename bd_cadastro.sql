create database bd_cadastro;
use bd_cadastro;


create table tb_usuario(
id_usuario int auto_increment primary key,
nm_usuario varchar(45) not null,
nm_email varchar(45) not null,
nm_senha varchar(45) not null,
nm_login varchar(45) not null,
nr_fone int,
img_foto blob
);