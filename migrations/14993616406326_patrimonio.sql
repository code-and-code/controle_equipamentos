-- // patrimonio
-- Migration SQL that makes the change goes here.

CREATE TABLE patrimonios (

  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  num_patrimonial varchar(255) DEFAULT NULL,
  serial varchar(255) DEFAULT NULL,
  categoria_id int(11) unsigned NOT NULL,
  local_id int(11) unsigned NOT NULL,
  funcionario_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  computador_id int(11) NULL,
  PRIMARY KEY (id),

    INDEX patrimonio_categoria_id_foreign (categoria_id),
    INDEX patrimonio_local_id_foreign (local_id),
    INDEX patrimonio_funcionario_id_foreign(funcionario_id),

    CONSTRAINT patrimonio_categoria_id_foreign FOREIGN KEY (categoria_id) REFERENCES categorias (id) ON DELETE CASCADE,
    CONSTRAINT patrimonio_local_id_foreign FOREIGN KEY (local_id) REFERENCES locais (id) ON DELETE CASCADE,
    CONSTRAINT patrimonio_funcionario_id_foreign FOREIGN KEY (funcionario_id) REFERENCES funcionarios (id) ON DELETE CASCADE

) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table patrimonios;
-- @UNDO
-- SQL to undo the change goes here.
