/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.5.5-10.4.22-MariaDB : Database - bdt_gestion_vehiculos
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

/*Table structure for table `marcas` */

DROP TABLE IF EXISTS `marcas`;

CREATE TABLE `marcas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8;

/*Data for the table `marcas` */

insert  into `marcas`(`id`,`nombre`,`descripcion`,`fecha_reg`,`estado`) values (1,'Abarth',NULL,'2022-07-27 21:18:58',1),(2,'Alfa Romeo',NULL,'2022-07-27 21:18:58',1),(3,'Aston Martin',NULL,'2022-07-27 21:18:58',1),(4,'Audi',NULL,'2022-07-27 21:18:58',1),(5,'Bentley',NULL,'2022-07-27 21:18:58',1),(6,'BMW',NULL,'2022-07-27 21:18:58',1),(7,'Cadillac',NULL,'2022-07-27 21:18:58',1),(8,'Caterham',NULL,'2022-07-27 21:18:58',1),(9,'Chevrolet',NULL,'2022-07-27 21:18:58',1),(10,'Citroen',NULL,'2022-07-27 21:18:58',1),(11,'Dacia',NULL,'2022-07-27 21:18:58',1),(12,'Ferrari',NULL,'2022-07-27 21:18:58',1),(13,'Fiat',NULL,'2022-07-27 21:18:58',1),(14,'Ford',NULL,'2022-07-27 21:18:58',1),(15,'Honda',NULL,'2022-07-27 21:18:58',1),(16,'Infiniti',NULL,'2022-07-27 21:18:58',1),(17,'Isuzu',NULL,'2022-07-27 21:18:58',1),(18,'Iveco',NULL,'2022-07-27 21:18:58',1),(19,'Jaguar',NULL,'2022-07-27 21:18:58',1),(20,'Jeep',NULL,'2022-07-27 21:18:58',1),(21,'Kia',NULL,'2022-07-27 21:18:58',1),(22,'KTM',NULL,'2022-07-27 21:18:58',1),(23,'Lada',NULL,'2022-07-27 21:18:58',1),(24,'Lamborghini',NULL,'2022-07-27 21:18:58',1),(25,'Lancia',NULL,'2022-07-27 21:18:58',1),(26,'Land Rover',NULL,'2022-07-27 21:18:58',1),(27,'Lexus',NULL,'2022-07-27 21:18:58',1),(28,'Lotus',NULL,'2022-07-27 21:18:58',1),(29,'Maserati',NULL,'2022-07-27 21:18:58',1),(30,'Mazda',NULL,'2022-07-27 21:18:58',1),(31,'Mercedes-Benz',NULL,'2022-07-27 21:18:58',1),(32,'Mini',NULL,'2022-07-27 21:18:58',1),(33,'Mitsubishi',NULL,'2022-07-27 21:18:58',1),(34,'Morgan',NULL,'2022-07-27 21:18:58',1),(35,'Nissan',NULL,'2022-07-27 21:18:58',1),(36,'Opel',NULL,'2022-07-27 21:18:58',1),(37,'Peugeot',NULL,'2022-07-27 21:18:58',1),(38,'Piaggio',NULL,'2022-07-27 21:18:58',1),(39,'Porsche',NULL,'2022-07-27 21:18:58',1),(40,'Renault',NULL,'2022-07-27 21:18:58',1),(41,'Rolls-Royce',NULL,'2022-07-27 21:18:58',1),(42,'Seat',NULL,'2022-07-27 21:18:58',1),(43,'Skoda',NULL,'2022-07-27 21:18:58',1),(44,'Smart',NULL,'2022-07-27 21:18:58',1),(45,'SsangYong',NULL,'2022-07-27 21:18:58',1),(46,'Subaru',NULL,'2022-07-27 21:18:58',1),(47,'Suzuki',NULL,'2022-07-27 21:18:58',1),(48,'Tata',NULL,'2022-07-27 21:18:58',1),(49,'Tesla',NULL,'2022-07-27 21:18:58',1),(50,'Toyota',NULL,'2022-07-27 21:18:58',1),(51,'Volkswagen',NULL,'2022-07-27 21:18:58',1),(52,'Volvo',NULL,'2022-07-27 21:18:58',1);

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

/*Table structure for table `tipo_combustible` */

DROP TABLE IF EXISTS `tipo_combustible`;

CREATE TABLE `tipo_combustible` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `tipo_combustible` */

insert  into `tipo_combustible`(`id`,`nombre`,`descripcion`,`fecha_reg`,`estado`) values (1,'Gasolina',NULL,'2022-07-27 21:13:21',1),(2,'Diesel',NULL,'2022-07-27 21:13:25',1),(3,'Gas Natural Vehicular (GNV)',NULL,'2022-07-27 21:13:44',1),(4,'Gasolina-Gas',NULL,'2022-07-27 21:13:54',1),(5,'Eléctrico',NULL,'2022-07-27 21:14:05',1),(6,'Biodiesel',NULL,'2022-07-27 21:14:13',1);

/*Table structure for table `tipos` */

DROP TABLE IF EXISTS `tipos`;

CREATE TABLE `tipos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

/*Data for the table `tipos` */

insert  into `tipos`(`id`,`nombre`,`descripcion`,`fecha_reg`,`estado`) values (1,'Tipo 1','Aquellos cuya clasificación comienza por 0 y la clasificación 66. Por ejemplo Motos','2022-07-27 21:12:02',1),(2,'Tipo 2','Aquellos cuya clasificación comienza por 10, 11, 20, 24, 30, 31, 32, 40, 41. Por ejemplo Turismos, vehículos comerciales.','2022-07-27 21:12:22',1),(3,'Tipo 3','Aquellos cuya clasificación comienza por 5. Por ejemplo Tractores, Vehículos Especiales.','2022-07-27 21:12:38',1),(4,'Tipo 4',NULL,'2022-07-27 21:11:44',1);

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

/*Table structure for table `vehiculos_clases` */

DROP TABLE IF EXISTS `vehiculos_clases`;

CREATE TABLE `vehiculos_clases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(150) NOT NULL,
  `descripcion` text DEFAULT NULL,
  `fecha_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `estado` tinyint(4) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `vehiculos_clases` */

insert  into `vehiculos_clases`(`id`,`nombre`,`descripcion`,`fecha_reg`,`estado`) values (1,'Clase 1',NULL,'2022-07-27 21:19:23',1),(2,'Clase 2',NULL,'2022-07-27 21:19:30',1);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
