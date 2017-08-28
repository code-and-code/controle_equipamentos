# ************************************************************
# Sequel Pro SQL dump
# Version 4096
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.7.16)
# Database: equipamento
# Generation Time: 2017-07-21 17:35:12 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dump of table nfes
# ------------------------------------------------------------

CREATE TABLE `nfes` (
	`id` INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`nfe` INT(11) NOT NULL,
	`data_entrada` DATE NOT NULL,
	`centro_custo_id` INT(11) NULL DEFAULT NULL,
	`file` VARCHAR(255) NULL DEFAULT NULL,
	`created_at` TIMESTAMP NULL DEFAULT NULL,
	`updated_at` TIMESTAMP NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)COLLATE='utf8_general_ci' ENGINE=InnoDB AUTO_INCREMENT=5;

# Dump of table centro_custo
# ------------------------------------------------------------

CREATE TABLE `centro_custo` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table computadores
# ------------------------------------------------------------

CREATE TABLE `computadores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `placa_mae` varchar(255) DEFAULT NULL,
  `processador` varchar(255) DEFAULT NULL,
  `memoria` varchar(255) DEFAULT NULL,
  `hd` varchar(255) DEFAULT NULL,
  `placa_video` varchar(255) DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `computador_equipamento_id_foreign` (`equipamento_id`),
  KEY `computador_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `computador_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `insert_computador` AFTER INSERT ON `computadores` FOR EACH ROW BEGIN
	    	CALL atualiza_equipamento (new.equipamento_id, -1);
		END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `update_computador` BEFORE UPDATE ON `computadores` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (old.equipamento_id, 1);
      		CALL atualiza_equipamento (new.equipamento_id, -1);
	END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `delete_computador` BEFORE DELETE ON `computadores` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (OLD.equipamento_id, 1);
   	END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table equipamentos
# ------------------------------------------------------------

CREATE TABLE `equipamentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
  `qtd` int(11) DEFAULT '0',
  `categoria_id` int(11) unsigned NOT NULL,
  `marca_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `equipamento_categoria_id_foreign` (`categoria_id`),
  KEY `equipamento_marca_id_foreign` (`marca_id`),
  CONSTRAINT `equipamento_categoria_id_foreign` FOREIGN KEY (`categoria_id`) REFERENCES `categorias` (`id`) ON DELETE CASCADE,
  CONSTRAINT `equipamento_marca_id_foreign` FOREIGN KEY (`marca_id`) REFERENCES `marcas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table entradas
# ------------------------------------------------------------

CREATE TABLE `entradas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nfe_id` int(11) DEFAULT NULL,
  `qtd` int(11) DEFAULT '0',
  `equipamento_id` int(11) unsigned NOT NULL,
  `centro_custo_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `insert_entrada` AFTER INSERT ON `entradas` FOR EACH ROW BEGIN
	    	CALL atualiza_equipamento (new.equipamento_id, new.qtd);
		END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `delete_entrada` BEFORE DELETE ON `entradas` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (OLD.equipamento_id, -OLD.qtd);
   	END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table saidas
# ------------------------------------------------------------

CREATE TABLE `saidas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `qtd` int(11) DEFAULT '0',
  `data_saida` datetime DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  `setor_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `insert_saida` AFTER INSERT ON `saidas` FOR EACH ROW BEGIN
	    	CALL atualiza_equipamento (new.equipamento_id, -new.qtd);
		END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `delete_saida` BEFORE DELETE ON `saidas` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (OLD.equipamento_id, OLD.qtd);
   	END */;;
DELIMITER ;



# Dump of table funcionarios
# ------------------------------------------------------------

CREATE TABLE `funcionarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `telefone` varchar(255) DEFAULT NULL,
  `ramal` varchar(255) DEFAULT NULL,
  `setor_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `funcionario_setor_id_foreign` (`setor_id`),
  CONSTRAINT `funcionario_setor_id_foreign` FOREIGN KEY (`setor_id`) REFERENCES `setores` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table historios
# ------------------------------------------------------------

CREATE TABLE `historios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(255) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table licencas
# ------------------------------------------------------------

CREATE TABLE `licencas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table locais
# ------------------------------------------------------------

CREATE TABLE `locais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table marcas
# ------------------------------------------------------------

CREATE TABLE `marcas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table monitores
# ------------------------------------------------------------

CREATE TABLE `monitores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tela` varchar(255) DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `monitor_equipamento_id_foreign` (`equipamento_id`),
  KEY `monitor_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `monitor_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `insert_monitor` AFTER INSERT ON `monitores` FOR EACH ROW BEGIN
	    	CALL atualiza_equipamento (new.equipamento_id, -1);
		END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `update_monitor` BEFORE UPDATE ON `monitores` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (old.equipamento_id, 1);
      		CALL atualiza_equipamento (new.equipamento_id, -1);
	END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `delete_monitor` BEFORE DELETE ON `monitores` FOR EACH ROW BEGIN
			CALL atualiza_equipamento (OLD.equipamento_id, 1);
   	END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table patrimonios
# ------------------------------------------------------------

CREATE TABLE `patrimonios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `num_patrimonial` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `nfe` int(11) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `class` varchar(255) DEFAULT NULL,
  `local_id` int(11) unsigned NOT NULL,
  `funcionario_id` int(11) DEFAULT NULL,
  `centro_custo_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patrimonio_local_id_foreign` (`local_id`),
  KEY `patrimonio_centro_de_custo_id_foreign` (`centro_custo_id`),
  CONSTRAINT `patrimonio_centro_de_custo_id_foreign` FOREIGN KEY (`centro_custo_id`) REFERENCES `centro_custo` (`id`) ON DELETE CASCADE,
  CONSTRAINT `patrimonio_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `locais` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table perifericos
# ------------------------------------------------------------

CREATE TABLE `perifericos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periferico_equipamento_id_foreign` (`equipamento_id`),
  KEY `periferico_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `periferico_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DELIMITER ;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `insert_periferico` AFTER INSERT ON `perifericos` FOR EACH ROW BEGIN
	    	CALL atualiza_equipamento (new.equipamento_id, -1);
	END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `update_periferico` BEFORE UPDATE ON `perifericos` FOR EACH ROW BEGIN
	CALL atualiza_equipamento 		(old.equipamento_id, 1);
      		CALL atualiza_equipamento (new.equipamento_id, -1);
END */;;
/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO" */;;
/*!50003 CREATE */ /*!50017 DEFINER=`root`@`localhost` */ /*!50003 TRIGGER `delete_periferico` BEFORE DELETE ON `perifericos` FOR EACH ROW BEGIN
     CALL atualiza_equipamento (OLD.equipamento_id, 1);
    END */;;
DELIMITER ;
/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;


# Dump of table serial
# ------------------------------------------------------------

CREATE TABLE `serial` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) NOT NULL,
  `data_vencimento` datetime DEFAULT NULL,
  `computator_id` int(11) DEFAULT NULL,
  `licenca_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `serial_licenca_id_foreign` (`licenca_id`),
  CONSTRAINT `serial_licenca_id_foreign` FOREIGN KEY (`licenca_id`) REFERENCES `licencas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table setores
# ------------------------------------------------------------

CREATE TABLE `setores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table usuarios
# ------------------------------------------------------------

CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




--
-- Dumping routines (PROCEDURE) for database 'equipamento'
--
DELIMITER ;;

# Dump of PROCEDURE atualiza_equipamento
# ------------------------------------------------------------

/*!50003 SET SESSION SQL_MODE="NO_AUTO_VALUE_ON_ZERO"*/;;
/*!50003 CREATE*/ /*!50020 DEFINER=`root`@`localhost`*/ /*!50003 PROCEDURE `atualiza_equipamento`(id_equipamento int, qtde int)
BEGIN
       UPDATE equipamentos SET qtd = qtd + qtde WHERE id = id_equipamento;
       
END */;;

/*!50003 SET SESSION SQL_MODE=@OLD_SQL_MODE */;;
DELIMITER ;

/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
