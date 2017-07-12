/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table categorias
# ------------------------------------------------------------

DROP TABLE IF EXISTS `categorias`;

CREATE TABLE `categorias` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `categorias` WRITE;
/*!40000 ALTER TABLE `categorias` DISABLE KEYS */;

INSERT INTO `categorias` (`id`, `nome`, `created_at`, `updated_at`)
VALUES
	(1,'computador',NULL,NULL),
	(2,'monitor',NULL,NULL),
	(3,'periferico',NULL,NULL);

/*!40000 ALTER TABLE `categorias` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table equipamentos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `equipamentos`;

CREATE TABLE `equipamentos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `modelo` varchar(255) DEFAULT NULL,
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



# Dump of table funcionarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `funcionarios`;

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



# Dump of table licencas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `licencas`;

CREATE TABLE `licencas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table serial
# ------------------------------------------------------------

DROP TABLE IF EXISTS `serial`;

CREATE TABLE `serial` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `numero`  varchar(255) NOT NULL,
  `data_vencimento` datetime DEFAULT NULL,
  `computator_id` int(11) DEFAULT NULL,
  `licenca_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `serial_licenca_id_foreign` (`licenca_id`),
  CONSTRAINT `serial_licenca_id_foreign` FOREIGN KEY (`licenca_id`) REFERENCES `licencas` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table locais
# ------------------------------------------------------------

DROP TABLE IF EXISTS `locais`;

CREATE TABLE `locais` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table marcas
# ------------------------------------------------------------

DROP TABLE IF EXISTS `marcas`;

CREATE TABLE `marcas` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table patrimonios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `patrimonios`;

CREATE TABLE `patrimonios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `num_patrimonial` varchar(255) DEFAULT NULL,
  `serial` varchar(255) DEFAULT NULL,
  `local_id` int(11) unsigned NOT NULL,
  `funcionario_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `patrimonio_local_id_foreign` (`local_id`),
  KEY `patrimonio_funcionario_id_foreign` (`funcionario_id`),
  CONSTRAINT `patrimonio_funcionario_id_foreign` FOREIGN KEY (`funcionario_id`) REFERENCES `funcionarios` (`id`) ON DELETE CASCADE,
  CONSTRAINT `patrimonio_local_id_foreign` FOREIGN KEY (`local_id`) REFERENCES `locais` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table perifericos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `perifericos`;

CREATE TABLE `perifericos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `descricao` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `nfe` int(11) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `periferico_equipamento_id_foreign` (`equipamento_id`),
  KEY `periferico_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `periferico_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `periferico_patrimonio_id_foreign` FOREIGN KEY (`patrimonio_id`) REFERENCES `patrimonios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table computadores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `computadores`;

CREATE TABLE `computadores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `placa_mae` varchar(255) DEFAULT NULL,
  `processador` varchar(255) DEFAULT NULL,
  `memoria` varchar(255) DEFAULT NULL,
  `hd` varchar(255) DEFAULT NULL,
  `placa_video` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `nfe` int(11) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `computador_equipamento_id_foreign` (`equipamento_id`),
  KEY `computador_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `computador_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `computador_patrimonio_id_foreign` FOREIGN KEY (`patrimonio_id`) REFERENCES `patrimonios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table monitores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `monitores`;

CREATE TABLE `monitores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `tela` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `nfe` int(11) DEFAULT NULL,
  `data_compra` date DEFAULT NULL,
  `equipamento_id` int(11) unsigned NOT NULL,
  `patrimonio_id` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `monitor_equipamento_id_foreign` (`equipamento_id`),
  KEY `monitor_patrimonio_id_foreign` (`patrimonio_id`),
  CONSTRAINT `monitor_equipamento_id_foreign` FOREIGN KEY (`equipamento_id`) REFERENCES `equipamentos` (`id`) ON DELETE CASCADE,
  CONSTRAINT `monitor_patrimonio_id_foreign` FOREIGN KEY (`patrimonio_id`) REFERENCES `patrimonios` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table setores
# ------------------------------------------------------------

DROP TABLE IF EXISTS `setores`;

CREATE TABLE `setores` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table historios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `historios`;

CREATE TABLE `historios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `type_id` int(255) DEFAULT NULL,
  `type_name` varchar(255) DEFAULT NULL,
  `descricao` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


# Dump of table usuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `usuarios`;

CREATE TABLE `usuarios` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(25) NOT NULL DEFAULT '',
  `password` varchar(255) NOT NULL DEFAULT '',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `usuarios` WRITE;
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;

INSERT INTO `usuarios` (`id`, `email`, `password`, `created_at`, `updated_at`)
VALUES
	(1,'admin@admin.com','e10adc3949ba59abbe56e057f20f883e',NULL,NULL);

/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
UNLOCK TABLES;


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
