CREATE DATABASE hotel;
USE hotel;

CREATE TABLE cliente (
id_cliente INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_cliente VARCHAR (80) NOT NULL,
email VARCHAR (50) NOT NULL UNIQUE,
telefone VARCHAR (15) NOT NULL UNIQUE
);

INSERT INTO cliente (id_cliente, nome_cliente, email, telefone)
VALUES (1, "Jhalim Rhabei", "jhalim.habibi@gmail.com", "(11)9999-9999");

INSERT INTO cliente (id_cliente, nome_cliente, email, telefone)
VALUES (2, "Oscar Alho", "oscar.vampiro@hotmail.com.br", "(21)8888-8888");

INSERT INTO cliente (id_cliente, nome_cliente, email, telefone)
VALUES (3, "Cuca Beludo", "beludo_cuca@live.com", "(18)7777-7777");

CREATE TABLE funcionario (
id_funci INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
nome_funci VARCHAR (80) NOT NULL,
funcao VARCHAR (80) NOT NULL
);

INSERT INTO funcionario (id_funci, nome_funci, funcao)
VALUES (1, "Dayde Costa", "Gerente");

INSERT INTO funcionario (id_funci, nome_funci, funcao)
VALUES (2, "Alan Berrola", "Faxineiro");

INSERT INTO funcionario (id_funci, nome_funci, funcao)
VALUES (3, "Déssio Pinto", "Recepcionista");

CREATE TABLE quarto (
id_quarto INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
numero_quarto INT (4) NOT NULL,
tipo INT (1) NOT NULL,
valor FLOAT (10,2) NOT NULL
);
/*tipos a, comercio, suite*/

INSERT INTO quarto (id_quarto, numero_quarto, tipo, valor)
VALUES (1, 2589, 1, 350.50);

INSERT INTO quarto (id_quarto, numero_quarto, tipo, valor)
VALUES (2, 8905, 2, 850.79);

INSERT INTO quarto (id_quarto, numero_quarto, tipo, valor)
VALUES (3, 1900, 3, 1999.99);

CREATE TABLE reserva (
id_reserva INT (10) NOT NULL PRIMARY KEY AUTO_INCREMENT,
id_cliente_fk INT (10) REFERENCES cliente (id_cliente),
id_funci_fk INT (10) REFERENCES funcionario (id_funci),
id_quarto_fk INT (10) REFERENCES quarto (id_quarto),
dataEntrada DATE,
dataSaida DATE,
valorFinal FLOAT (10,2),
situacao BIT NOT NULL /*0 pendente, 1 pago*/
);

INSERT INTO reserva (id_reserva, id_cliente_fk, id_funci_fk, id_quarto_fk, dataEntrada, dataSaida, valorFinal, situacao)
VALUES (0000000001, 1, 1, 1, '2013-09-23', '2013-09-29',  2103.00, 0);

INSERT INTO reserva (id_reserva, id_cliente_fk, id_funci_fk, id_quarto_fk, dataEntrada, dataSaida, valorFinal, situacao)
VALUES (0000000002, 2, 2, 2, '2014-10-01', '2014-10-19', 15314.22, 1);

CREATE TABLE usuarios (
id_funci_fk INT (10) NOT NULL PRIMARY KEY REFERENCES funcionario (id_funci),
usuario VARCHAR (50) NOT NULL UNIQUE,
senha VARCHAR (255) NOT NULL,
nivel INT (1) NOT NULL
);

INSERT INTO usuarios (id_funci_fk, usuario, senha, nivel)
VALUES (1, 'daydec', '123456', '9');

INSERT INTO usuarios (id_funci_fk, usuario, senha, nivel)
VALUES (2, 'berrola_', '654321', '1');

INSERT INTO usuarios (id_funci_fk, usuario, senha, nivel)
VALUES (3, 'dede_pinto', '789362', '2');

/*1)*/
SELECT id_reserva, numero_quarto, nome_funci FROM reserva
INNER JOIN quarto ON quarto.id_quarto = reserva.id_quarto_fk
INNER JOIN funcionario ON funcionario.id_funci = reserva.id_funci_fk
WHERE id_funci_fk = 1;

/*2)*/
SELECT id_reserva, nome_cliente, numero_quarto FROM reserva
INNER JOIN quarto ON quarto.id_quarto = reserva.id_quarto_fk
INNER JOIN cliente ON cliente.id_cliente = reserva.id_cliente_fk
WHERE id_cliente_fk = 1;

/*3)*/
SELECT id_reserva, numero_quarto, nome_funci, nome_cliente, situacao FROM reserva
INNER JOIN quarto ON quarto.id_quarto = reserva.id_quarto_fk
INNER JOIN funcionario ON funcionario.id_funci = reserva.id_funci_fk
INNER JOIN cliente ON cliente.id_cliente = reserva.id_cliente_fk
WHERE situacao = 1;

/*4)*/
SELECT id_reserva, numero_quarto, nome_funci, nome_cliente, situacao FROM reserva
INNER JOIN quarto ON quarto.id_quarto = reserva.id_quarto_fk
INNER JOIN funcionario ON funcionario.id_funci = reserva.id_funci_fk
INNER JOIN cliente ON cliente.id_cliente = reserva.id_cliente_fk
WHERE situacao =  0;