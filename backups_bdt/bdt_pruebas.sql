/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.21-MariaDB : Database - bdt_gestion_vehiculos
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`bdt_gestion_vehiculos` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `bdt_gestion_vehiculos`;

/*Table structure for table `mantenimientos` */

DROP TABLE IF EXISTS `mantenimientos`;

CREATE TABLE `mantenimientos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idVehiculo` int(11) NOT NULL,
  `fecha_ultimo_mantenimiento` date NOT NULL,
  `km_ultimo_mantenimiento` date NOT NULL,
  `km_proximo_mantenimiento` float DEFAULT NULL,
  `km_ultimo_recorrido` float DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `mantenimientos` */

/*Table structure for table `seguros` */

DROP TABLE IF EXISTS `seguros`;

CREATE TABLE `seguros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idEmpresa` int(11) NOT NULL,
  `aseguradora` varchar(150) DEFAULT NULL,
  `cda_tecnomecanica` varchar(120) DEFAULT NULL,
  `fecha_vencimiento_soat` date NOT NULL,
  `fecha_vencimiento_aseguradora` date DEFAULT NULL,
  `fecha_vencimiento_tecnomecanica` date NOT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `seguros` */

/*Table structure for table `vehiculos` */

DROP TABLE IF EXISTS `vehiculos`;

CREATE TABLE `vehiculos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `placa` varchar(20) NOT NULL,
  `nombre` varchar(80) DEFAULT NULL,
  `flota` varchar(100) DEFAULT NULL,
  `idMarca` int(11) NOT NULL,
  `idTipo` int(11) NOT NULL,
  `idTipoCombustible` int(11) NOT NULL,
  `numero_motor` varchar(120) NOT NULL,
  `numero_chasis` varchar(120) NOT NULL,
  `modelo` varchar(20) DEFAULT NULL,
  `idEmpresaSoat` int(11) DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`),
  UNIQUE KEY `placa` (`placa`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Data for the table `vehiculos` */

insert  into `vehiculos`(`id`,`placa`,`nombre`,`flota`,`idMarca`,`idTipo`,`idTipoCombustible`,`numero_motor`,`numero_chasis`,`modelo`,`idEmpresaSoat`,`fecha_reg`,`estado`) values (1,'hsw20c','MOTO',NULL,1,2,2,'3131231432434','1231132455','2010',1,'2022-07-26 15:27:26',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
