CREATE DATABASE login_db;

USE login_db;

CREATE TABLE usuarios (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL UNIQUE,
    senha VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    data_nasc DATE NOT NULL
);

INSERT INTO usuarios (nome, senha) VALUES ('admin','123');