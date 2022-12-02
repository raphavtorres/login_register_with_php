CREATE TABLE usuario (
    idUser INT(3) AUTO_INCREMENT,
    nomeUser VARCHAR(40) NOT NULL,
    emailUser VARCHAR(40) NOT NULL,
    senhaUser VARCHAR(20) NOT NULL,
    categoriaUser VARCHAR(10) NOT NULL,
    PRIMARY KEY (idUser)
);

CREATE TABLE tarefa (
    idUser INT(3),
    idTarefa INT(3) AUTO_INCREMENT,
    contentTarefa VARCHAR(200) NOT NULL,
    PRIMARY KEY (idTarefa),
    FOREIGN KEY (idUser) REFERENCES usuario (idUser)
);

INSERT INTO usuario VALUES (1, 'Raphael Torres', 'raphaeltorres@gmail.com', '123');



mysql -u root
create database projeto;
use projeto;