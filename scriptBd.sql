CREATE DATABASE didnetworking_desarrollos;
CREATE TABLE TIPOS(
  idtipo int4 not null primary key,
  tipo varchar(50) not null unique,
  idestado int4 not null default 1,
  fecha_creacion timestamp not null default now()
);

INSERT INTO TIPOS(idtipo,tipo)VALUES(1,'Cedula');
INSERT INTO TIPOS(idtipo,tipo)VALUES(2,'NIT');
INSERT INTO TIPOS(idtipo,tipo)VALUES(3,'Cedula extrangeria');
INSERT INTO TIPOS(idtipo,tipo)VALUES(4,'Pasaporte');

CREATE TABLE USUARIOS(
  idusuario int4 not null primary key,
  idtipo int4 not null references tipos(idtipo),
  identificacion varchar(15) not null,
  nombres varchar(100) not null,
  apellidos varchar(100) not null,
  telefono varchar(20) not null,
  direccion varchar(100) not null,
  email varchar(100) not null,
  idestado int4 not null default 1,
  fecha_creacion timestamp not null default now()
);