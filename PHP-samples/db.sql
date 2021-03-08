CREATE DATABASE IF NOT EXISTS db;
USE db;
CREATE TABLE pais (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome_pais VARCHAR (100)
);

INSERT INTO pais (nome_pais) VALUES ("Brasil"), ("Estados Unidos"), ("Canadá"), ("Argentina");

CREATE TABLE estado (
    id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome_estado VARCHAR (100),
    id_pais INTEGER,
    FOREIGN KEY (id_pais) REFERENCES pais(id)
);

INSERT INTO estado (nome_estado, id_pais) VALUES ("Rio Grande do Sul", 1), ("Santa Catarina", 1), ("Paraná", 1);

-- Questão a
SELECT nome_estado FROM estado WHERE nome_estado LIKE "Paraná";
-- Questão b
SELECT nome_estado, nome_pais FROM estado, pais WHERE estado.id_pais = pais.id;
-- Questão c
ALTER TABLE pais ADD sigla VARCHAR(2);
-- Questão d
CREATE TABLE cidade (
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
    nome_cidade VARCHAR (100),
    id_estado INTEGER,
    FOREIGN KEY (id_estado) REFERENCES estado(id)
)




