CREATE SCHEMA zendaccessmanager;
USE zendaccessmanager;

CREATE TABLE cad_usuario (
  idusuario INT PRIMARY KEY AUTO_INCREMENT,
  nome VARCHAR(255) NOT NULL,
  setor INT
);