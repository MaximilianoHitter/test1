CREATE DATABASE phpintermedio;
CREATE TABLE usuarios (
    id_usuario INT (5) AUTO_INCREMENT NOT NULL,
    nombre VARCHAR (30) NOT NULL,
    apellido VARCHAR (30) NOT NULL,
    email VARCHAR (50) NOT NULL,
    usuario VARCHAR (30) NOT NULL,
    contrasena VARCHAR (30) NOT NULL,
    PRIMARY KEY (id_clase)
)ENGINE = MyISAM;