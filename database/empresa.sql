create database empresa;

use empresa;

create table empresa(
cod_empresa int primary key auto_increment
, nome_empresa varchar(60)
, telefone varchar (11)
, descricao varchar(1000)
, email varchar(200)
);

select * from empresa;