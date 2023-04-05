-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.4.24-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para usuarios
CREATE DATABASE IF NOT EXISTS `usuarios` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `usuarios`;

-- Volcando estructura para tabla usuarios.administrativos
CREATE TABLE IF NOT EXISTS `administrativos` (
  `IdEmpleado` int(11) NOT NULL AUTO_INCREMENT,
  `Nombres` varchar(20) NOT NULL,
  `Apellidos` varchar(20) NOT NULL,
  `Usuario` varchar(20) NOT NULL,
  `Contraseña` varchar(20) NOT NULL,
  `Estado` int(11) NOT NULL,
  PRIMARY KEY (`IdEmpleado`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla usuarios.administrativos: ~2 rows (aproximadamente)
INSERT INTO `administrativos` (`IdEmpleado`, `Nombres`, `Apellidos`, `Usuario`, `Contraseña`, `Estado`) VALUES
	(1, 'Mariana', 'Quintero', 'mqcyd', 'mariana', 1),
	(3, 'Mariana', 'Quintero', 'mqcyd', 'mariana', 1);

-- Volcando estructura para tabla usuarios.cesantias
CREATE TABLE IF NOT EXISTS `cesantias` (
  `IdCesantia` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`IdCesantia`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla usuarios.cesantias: ~0 rows (aproximadamente)

-- Volcando estructura para tabla usuarios.eps
CREATE TABLE IF NOT EXISTS `eps` (
  `IdEps` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL,
  PRIMARY KEY (`IdEps`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla usuarios.eps: ~0 rows (aproximadamente)

-- Volcando estructura para tabla usuarios.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `IdUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `Sede` varchar(20) NOT NULL,
  `Cesantías` varchar(20) NOT NULL,
  `Proceso` varchar(20) NOT NULL,
  `Gerencia` varchar(20) NOT NULL,
  `Banner` varchar(20) NOT NULL,
  `Fecha_ingreso` date NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Estado` int(11) NOT NULL,
  `Disponibilidad` int(11) NOT NULL,
  PRIMARY KEY (`IdUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla usuarios.usuarios: ~3 rows (aproximadamente)
INSERT INTO `usuarios` (`IdUsuario`, `Sede`, `Cesantías`, `Proceso`, `Gerencia`, `Banner`, `Fecha_ingreso`, `Clave`, `Estado`, `Disponibilidad`) VALUES
	(1, 'Medellín', 'Protección', 'Soluciones', 'Soluciones', '12', '2023-04-05', '123456', 1, 1),
	(2, 'Medellín', 'Protección', 'Soluciones', 'Soluciones', '2', '2023-04-04', '55448', 0, 0),
	(3, 'Palmira', 'Porvenir', 'Soluciones', 'Soluciones', '11', '2024-05-18', '1234', 1, 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
