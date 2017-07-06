-- // licenca
-- Migration SQL that makes the change goes here.

CREATE TABLE licencas (

  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) NOT NULL,
  serial varchar(255) NOT NULL,
  computator_id int(11) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  computador_id int(11) NULL,
  PRIMARY KEY (id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table licencas;
-- @UNDO
-- SQL to undo the change goes here.
