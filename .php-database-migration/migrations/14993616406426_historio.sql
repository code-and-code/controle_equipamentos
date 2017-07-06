-- // historio
-- Migration SQL that makes the change goes here.

CREATE TABLE historios (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  type_id int (255) DEFAULT NULL,
  type_name varchar(255) DEFAULT NULL,
  descricao varchar(255) DEFAULT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table historios;
-- @UNDO
-- SQL to undo the change goes here.
