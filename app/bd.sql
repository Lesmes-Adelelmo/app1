CREATE DATABASE games_r_us;

USE games_r_us;

CREATE TABLE usuario (
    nick      VARCHAR(50),
	email     VARCHAR(100),
	password  VARCHAR(255) NOT NULL,
    nombre    VARCHAR(50) NOT NULL,     
	apellido1 VARCHAR(100) NOT NULL,
    apellido2 VARCHAR(100),
	tipo_via VARCHAR(100) NOT NULL,
	nombre_via VARCHAR(100) NOT NULL,
	numero VARCHAR(100) NOT NULL,
	telefono  VARCHAR(17) NOT NULL,
	CONSTRAINT pk_usuario PRIMARY KEY(nick, email)
);
