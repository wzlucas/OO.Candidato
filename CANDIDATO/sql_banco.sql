CREATE TABLE candidato (
    id int AUTO_INCREMENT NOT NULL,
    nome varchar(70) NOT NULL,
    email varchar(70) NOT NULL,
    numero varchar(15) NOT NULL,
    cpf varchar(30) NOT NULL,
    descricao varchar(70),
    endereco varchar(70),
    PRIMARY KEY(id)
)