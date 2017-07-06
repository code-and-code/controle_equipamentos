-- // computador
-- Migration SQL that makes the change goes here.

CREATE TABLE computadores (
  id int(11) unsigned NOT NULL AUTO_INCREMENT,
  placa_mae varchar(255) DEFAULT NULL,
  processador varchar(255) DEFAULT NULL,
  memoria varchar(255) DEFAULT NULL,
  hd varchar(255) DEFAULT NULL,
  placa_video varchar(255) DEFAULT NULL,
  valor DECIMAL (10,2) DEFAULT NULL,
  nfe int (11) DEFAULT NULL,
  data_compra date DEFAULT NULL,
  equipamento_id int(11) unsigned NOT NULL,
  patrimonio_id int(11) unsigned NOT NULL,
  created_at datetime DEFAULT NULL,
  updated_at datetime DEFAULT NULL,
  PRIMARY KEY (id),

   INDEX computador_equipamento_id_foreign (equipamento_id),
   INDEX computador_patrimonio_id_foreign (patrimonio_id),

   CONSTRAINT computador_equipamento_id_foreign FOREIGN KEY (equipamento_id) REFERENCES equipamentos (id) ON DELETE CASCADE,
   CONSTRAINT computador_patrimonio_id_foreign FOREIGN KEY (patrimonio_id) REFERENCES patrimonios (id) ON DELETE CASCADE

 ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
-- @UNDO
-- SQL to undo the change goes here.
drop table computadores;
-- @UNDO
-- SQL to undo the change goes here.
