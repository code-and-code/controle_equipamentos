-- // equipamento
-- Migration SQL that makes the change goes here.

CREATE TABLE equipamentos (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  nome varchar(255) DEFAULT NULL,
  modelo varchar(255) DEFAULT NULL,
  categoria_id int(11) unsigned NOT NULL,
  marca_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id),

    INDEX equipamento_categoria_id_foreign (categoria_id),
    CONSTRAINT equipamento_categoria_id_foreign FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE,

    INDEX equipamento_marca_id_foreign (marca_id),
    CONSTRAINT equipamento_marca_id_foreign FOREIGN KEY (marca_id) REFERENCES marcas (id) ON DELETE CASCADE

 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table equipamentos;
-- @UNDO
-- SQL to undo the change goes here.
