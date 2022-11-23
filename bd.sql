/* user (id)
email
senha
msg () */

CREATE TABLE usuario (
    idUser INT(3) AUTO_INCREMENT,
    nomeUser VARCHAR(40) NOT NULL,
    emailUser VARCHAR(40) NOT NULL,
    senhaUser VARCHAR(20) NOT NULL,
    /* msgUser VARCHAR(20) NOT NULL, */
    PRIMARY KEY (idUser)
);

CREATE TABLE msgUser (
    idMsg INT(3) AUTO_INCREMENT,
    contentMsg VARCHAR(200) NOT NULL,
    PRIMARY KEY (idMsg),
    FOREIGN KEY (idUser) REFERENCES usuario (idUser)
);