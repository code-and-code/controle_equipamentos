-- // periferico
-- Migration SQL that makes the change goes here.

CREATE TABLE perifericos (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  descricao varchar(255) DEFAULT NULL,
  valor DECIMAL (10,2) DEFAULT NULL,
  nfe int (11) DEFAULT NULL,
  data_compra date DEFAULT NULL,
  equipamento_id int(11) unsigned NOT NULL,
  patrimonio_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id),

    INDEX periferico_equipamento_id_foreign (equipamento_id),
    INDEX periferico_patrimonio_id_foreign (patrimonio_id),

    CONSTRAINT periferico_equipamento_id_foreign FOREIGN KEY (equipamento_id) REFERENCES equipamentos (id) ON DELETE CASCADE,
    CONSTRAINT periferico_patrimonio_id_foreign FOREIGN KEY (patrimonio_id) REFERENCES patrimonios (id) ON DELETE CASCADE

 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table perifericos;
-- @UNDO
-- SQL to undo the change goes here.
