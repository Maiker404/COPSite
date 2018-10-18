CREATE DATABASE COP;
use COP;

create table usuario(
cod_usu int primary key auto_increment,
nome_usu varchar(100),
cpf_usu varchar(12), -- 000.000.000-00--
telefone_usu varchar(11), -- 69 9 9999-9999--
dataNascimento_usu date, -- AAAA-MM-DD--
tipo_usu varchar(20)
);

create table projeto(
cod_pro int primary key auto_increment,
nome_pro varchar(100),
descrição_pro varchar(300),
dataInicio_pro date, -- AAAA-MM-DD--
dataEntrega_pro date, -- AAAA-MM-DD--
admin_fk int references usuario(cod_usu)

);
create table tarefa(
cod_tar int primary key auto_increment,
nome_tar varchar(100),
descrição_tar varchar(300),
dataInicio_tar date,
DataEntrega_tar date,
encarregado_fk int references usuario(cod_usu)
);

create table projetoEquipe(
cod_proEqu int primary key auto_increment,
projeto_fk int references projeto(cod_pro),
usuario_fk int references usuario(cod_usu)

);
