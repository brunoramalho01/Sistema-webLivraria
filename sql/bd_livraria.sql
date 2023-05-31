CREATE TABLE editora(
    id INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    nome VARCHAR(60)
);

CREATE TABLE acervo (
    id INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    idEditora INT NOT NULL,
    titulo VARCHAR(100) NOT NULL,
    autor VARCHAR(60) NULL,
    ano INT NOT NULL,
    preco DOUBLE NOT NULL,
    quantidade INT NOT NULL,
    tipo INT NOT NULL,
    FOREIGN KEY (idEditora) REFERENCES editora(id)
    
);