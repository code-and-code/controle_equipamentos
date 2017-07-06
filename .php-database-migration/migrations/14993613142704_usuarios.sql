-- // usuario
-- Migration SQL that makes the change goes here.
CREATE TABLE usuarios (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  email varchar(25) NOT NULL DEFAULT '',
  password varchar(255) NOT NULL DEFAULT '',
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table usuarios;
-- @UNDO
-- SQL to undo the change goes here.


