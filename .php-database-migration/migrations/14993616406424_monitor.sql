-- // monitor
-- Migration SQL that makes the change goes here.

CREATE TABLE monitores (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  tela varchar(255) DEFAULT NULL,
  valor DECIMAL (10,2) DEFAULT NULL,
  nfe int (11) DEFAULT NULL,
  data_compra date DEFAULT NULL,
  equipamento_id int(11) unsigned NOT NULL,
  patrimonio_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id),

   INDEX monitor_equipamento_id_foreign (equipamento_id),
   INDEX monitor_patrimonio_id_foreign (patrimonio_id),

   CONSTRAINT monitor_equipamento_id_foreign FOREIGN KEY (equipamento_id) REFERENCES equipamentos (id) ON DELETE CASCADE,
   CONSTRAINT monitor_patrimonio_id_foreign FOREIGN KEY (patrimonio_id) REFERENCES patrimonios (id) ON DELETE CASCADE

 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table monitores;
-- @UNDO
-- SQL to undo the change goes here.
