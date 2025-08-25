<?php

CREATE DATABASE formulario_inscricao;
USE formulario_inscricao;

CREATE TABLE inscricoes (
    cpf VARCHAR(14) PRIMARY KEY, -- chave primária
    tipo_evento ENUM('Metanoia','Encontro com DEUS','Peniel','Arcampamento','Outros') NOT NULL,
    nome VARCHAR(150) NOT NULL,
    menor_idade ENUM('SIM','NÃO') NOT NULL,
    idade INT NOT NULL,
    sexo ENUM('Masculino','Feminino') NOT NULL,
    data_nascimento DATE NOT NULL,
    endereco TEXT NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    estado VARCHAR(50) NOT NULL,
    telefone VARCHAR(20) NOT NULL,
    email VARCHAR(150) NOT NULL,
    igreja VARCHAR(150) NOT NULL,
    cargo_igreja VARCHAR(100) NOT NULL,
    camiseta ENUM('PP','P','M','G','GG','EXG','G1') NOT NULL,
    contato1 VARCHAR(100) NOT NULL,
    contato2 VARCHAR(100) NOT NULL,
    contato3 VARCHAR(100) NOT NULL,
    saude TEXT NOT NULL,
    data_inscricao DATE NOT NULL
);

?>