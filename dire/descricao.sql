/*quando entrar em um computador diferente */

CREATE DATABASE culturis;

--apos isso fazer 
CREATE TABLE usuarios(
    id int AUTO_INCREMENT NOT NULL,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    senha VARCHAR(32) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
)

CREATE TABLE usuarios(
    id int AUTO_INCREMENT NOT NULL,
    titulo VARCHAR(255) NOT NULL,
    link_imagem VARCHAR(255) NOT NULL,
    descrição TEXT NOT NULL,
    linkcar VARCHAR(20) NOT NULL,
    PRIMARY KEY(id)
)

/* inserir dados */





