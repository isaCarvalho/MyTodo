-- Database: mytodo

-- DROP DATABASE mytodo;

-- heroku pg:psql postgresql-adjacent-20728 --app mytod0

CREATE DATABASE mytodo
    WITH 
    OWNER = postgres
    ENCODING = 'UTF8'
    LC_COLLATE = 'pt_BR.UTF-8'
    LC_CTYPE = 'pt_BR.UTF-8'
    TABLESPACE = pg_default
    CONNECTION LIMIT = -1;
	
create table usuarios (
	id_usuario int primary key,
	nome varchar(255) not null,
	email varchar(255),
	senha varchar(32),
	id_facebook varchar(255)
);

create sequence usuarios_seq increment 1 minvalue 1 start 1;
alter table usuarios alter column id_usuario set default nextval('usuarios_seq');

create table recorrencia (
	id_recorrencia int primary key,
	descricao varchar(255) not null,
	intervalo int not null default -1
);

create sequence recorrencia_seq increment 1 minvalue 1 start 1;
alter table recorrencia alter column id_recorrencia set default nextval('recorrencia_seq');

create table tarefas (
	id_tarefa int primary key,
	nome varchar(255) not null,
	inicio time,
	fim time,
	data date,
	id_usuario int not null references usuarios(id_usuario),
	id_recorrencia int not null references recorrencia(id_recorrencia),
	ativo int
);

create sequence tarefas_seq increment 1 minvalue 1 start 1;
alter table tarefas alter column id_tarefa set default nextval('tarefas_seq');

insert into recorrencia (descricao, intervalo) values 
('nenhuma', 0),
('diaria', 1),
('semanal', 7),
('mensal', 30),
('anual', 356);

update tarefas set ativo = 0 where data < current_date and fim < current_time;
update tarefas set ativo = 1 where data >= current_date and fim >= current_time;