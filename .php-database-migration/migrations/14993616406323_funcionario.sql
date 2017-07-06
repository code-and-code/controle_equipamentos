-- // funcionario
-- Migration SQL that makes the change goes here.

CREATE TABLE funcionarios (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) DEFAULT NULL,
  email varchar(255) DEFAULT NULL,
  telefone varchar(255) DEFAULT NULL,
  ramal varchar(255) DEFAULT NULL,
  setor_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id),
    INDEX funcionario_setor_id_foreign (setor_id),
    CONSTRAINT funcionario_setor_id_foreign FOREIGN KEY (setor_id) REFERENCES setores (id) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table funcionarios;
-- @UNDO
-- SQL to undo the change goes here.
