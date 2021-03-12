-- first create Database
CREATE DATABASE form

-- after create table
CREATE TABLE contact
(
nome varchar(30) NOT NULL,
sobrenome varchar(60) NULL,
email varchar(60) NOT NULL,
telefone varchar(18) NULL,
mensagem varchar(250) NOT NULL,
data datetime DEFAULT CURRENT_TIMESTAMP NOT NULL
);

