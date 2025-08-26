CREATE DATABASE biblioteca_kaua;

USE biblioteca_kaua;

CREATE TABLE autores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    nacionalidade VARCHAR(45) NOT NULL,
    ano_nascimento DATE NOT NULL
);

CREATE TABLE livros(
    id INT AUTO_INCREMENT PRIMARY KEY,
    titulo VARCHAR(45) NOT NULL,
    genero VARCHAR(45) NOT NULL,
    ano_publicacao DATE NOT NULL,
    id_autor INT,

    FOREIGN KEY (id_autor) REFERENCES autores(id) 
);

CREATE TABLE leitores(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL UNIQUE,
    telefone VARCHAR(11) NOT NULL UNIQUE
);

CREATE TABLE emprestimos(
    id INT AUTO_INCREMENT PRIMARY KEY,
    data_emprestimo DATE NOT NULL,
    data_devolucao DATE NOT NULL,
    id_livro INT,
    id_leitor INT,

    FOREIGN KEY (id_livro) REFERENCES livros(id),
    FOREIGN KEY (id_leitor) REFERENCES leitores(id)
);