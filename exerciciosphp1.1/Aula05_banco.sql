
/* Aula05_banco.sql */

CREATE DATABASE IF NOT EXISTS banco;

USE banco;

CREATE TABLE IF NOT EXISTS cliente(
	idCli INT(11) AUTO_INCREMENT PRIMARY KEY,
	nomeCli VARCHAR(40) NOT NULL,
	CPF INT(11) NOT NULL,
	emailCli VARCHAR(40) NOT NULL,
	estado BOOLEAN NOT NULL,
	usuCli VARCHAR(20),
	senCli VARCHAR(20)
);

CREATE TABLE IF NOT EXISTS acesso(
	idAcesso INT(11) AUTO_INCREMENT PRIMARY KEY,
	idCli INT(11) NOT NULL,
	FOREIGN KEY (idCli) REFERENCES cliente(idCli)
);

INSERT INTO cliente(nomeCli,CPF,emailCli,estado,usuCli,senCli) VALUES
	("Alberdan Coelho",12345678900,"albcoe@mail.com",true,"albinho","1111"),
	("Ketlhen Fiozi",12345678911,"ketfio@mail.com",true,"ketket","2222"),
	("Zilda Romuel",12345678922,"zildarom@mail.com",true,"zizi","3333");













