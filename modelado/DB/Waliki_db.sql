#CREACION DE BASE DE DATOS
CREATE DATABASE db_waliki;

DROP DATABASE db_waliki;
USE db_waliki;

#Creacion de Tabla PACIENTE
CREATE TABLE tbl_paciente (
  id_pacie INT(11) NOT NULL AUTO_INCREMENT,
  dni_pacie VARCHAR(11) NOT NULL,
  nombres_pacie VARCHAR(80) NOT NULL,
  apellidos_pacie VARCHAR(150) NOT NULL,
  fecha_nacimiento_pacie  VARCHAR(150) NOT NULL,
  sexo_pacie VARCHAR(12) NOT NULL,
  direccion_pacie  VARCHAR(200) DEFAULT NULL,
  distrito_pacie  VARCHAR(40) DEFAULT NULL,
  provincia_pacie VARCHAR(30) DEFAULT NULL,
  email_pacie VARCHAR(150) NOT NULL,
  telefono_pacie VARCHAR(40) DEFAULT NULL,
  avatar_pacie VARCHAR(200) DEFAULT NULL,
  status_pacie TINYINT(1) DEFAULT NULL,
  fecha_creacion_pacie DATETIME DEFAULT NULL,
  PRIMARY KEY (id_pacie)
) ENGINE=InnoDB AUTO_INCREMENT=394 DEFAULT CHARSET=utf8;

#Creacion de Tabla ATENCION PACIENTE
CREATE TABLE tbl_atepaciente(
    id_atepacie INT (11) NOT NULL AUTO_INCREMENT,
    numero_hicli VARCHAR(20) DEFAULT NULL,
    codigo_sis VARCHAR(45) DEFAULT NULL
)

#Creacion de Tabla CONSULTORIO
CREATE TABLE tbl_consultorio(
    id_consu INT(11) NOT NULL AUTO_INCREMENT,
    nombre_consu VARCHAR(200) NOT NULL,
    descripcion_consu VARCHAR(255) NOT NULL,
    estado_consu TINYINT(1) DEFAULT NULL,
    PRIMARY KEY (id_consu)
)ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

#Creacion de Tabla PERSONAL SALUD
CREATE TABLE personal_salud(
    id_persa INT(11) NOT NULL AUTO_INCREMENT,
    dni_persa VARCHAR(20) NOT NULL,
    nombre_persa VARCHAR(80) NOT NULL,
    apellidos_persa VARCHAR(150) NOT NULL,
    email_persa VARCHAR(150) NOT NULL,
    fec_nac_persa VARCHAR(20) NOT NULL,
    sexo_persa VARCHAR(12)NOT NULL,
    telefono_persa VARCHAR(40) NOT NULL,
    direccion_persa VARCHAR(200) DEFAULT NULL,
    departamento_persa VARCHAR(20) DEFAULT NULL,
    provincia_persa VARCHAR(30) DEFAULT NULL,
    distrito_persa VARCHAR(30) DEFAULT NULL,
    num_colegiatura_persa VARCHAR(20) DEFAULT NULL,
    profesion_persa VARCHAR(100) NOT NULL,
    avatar_persa VARCHAR(200) NOT NULL,
    biografia_persa TEXT NOT NULL,
    estado_persa TINYINT(1) DEFAULT NULL,
    fec_creacion_persa DATETIME DEFAULT NULL,
    PRIMARY KEY (id_persa)
)ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;


