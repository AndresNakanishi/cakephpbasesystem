-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         10.1.31-MariaDB - mariadb.org binary distribution
-- SO del servidor:              Win32
-- HeidiSQL Versión:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para cakephpbasesystem
CREATE DATABASE IF NOT EXISTS `cakephpbasesystem` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `cakephpbasesystem`;

-- Volcando estructura para tabla cakephpbasesystem.methods
CREATE TABLE IF NOT EXISTS `methods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `controller_name` varchar(200) NOT NULL,
  `action_name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.methods: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `methods` ENABLE KEYS */;

-- Volcando estructura para tabla cakephpbasesystem.permissions
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.permissions: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permissions` DISABLE KEYS */;
/*!40000 ALTER TABLE `permissions` ENABLE KEYS */;

-- Volcando estructura para tabla cakephpbasesystem.permission_methods
CREATE TABLE IF NOT EXISTS `permission_methods` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(11) unsigned NOT NULL,
  `method_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_permission_functions_permissions` (`permission_id`),
  KEY `FK_permission_functions_functions` (`method_id`),
  CONSTRAINT `FK_permission_functions_functions` FOREIGN KEY (`method_id`) REFERENCES `methods` (`id`),
  CONSTRAINT `FK_permission_functions_permissions` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.permission_methods: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_methods` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_methods` ENABLE KEYS */;

-- Volcando estructura para tabla cakephpbasesystem.permission_profiles
CREATE TABLE IF NOT EXISTS `permission_profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `permission_id` int(11) unsigned NOT NULL,
  `profile_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_permission_profiles_permissions` (`permission_id`),
  KEY `FK_permission_profiles_profiles` (`profile_id`),
  CONSTRAINT `FK_permission_profiles_permissions` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`),
  CONSTRAINT `FK_permission_profiles_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.permission_profiles: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `permission_profiles` DISABLE KEYS */;
/*!40000 ALTER TABLE `permission_profiles` ENABLE KEYS */;

-- Volcando estructura para tabla cakephpbasesystem.profiles
CREATE TABLE IF NOT EXISTS `profiles` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(8) NOT NULL,
  `name` varchar(30) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `code` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.profiles: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `profiles` DISABLE KEYS */;
INSERT INTO `profiles` (`id`, `code`, `name`) VALUES
	(1, 'GOD', 'God Level'),
	(2, 'ADMIN', 'Administrador'),
	(4, 'USER', 'Miembro');
/*!40000 ALTER TABLE `profiles` ENABLE KEYS */;

-- Volcando estructura para tabla cakephpbasesystem.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `profile_id` int(11) unsigned NOT NULL,
  `username` varchar(60) NOT NULL,
  `email` varchar(120) NOT NULL,
  `name` varchar(60) NOT NULL,
  `surname` varchar(60) NOT NULL,
  `cellphone` varchar(60) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `avatar` varchar(200) DEFAULT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`),
  KEY `FK_users_profiles` (`profile_id`),
  CONSTRAINT `FK_users_profiles` FOREIGN KEY (`profile_id`) REFERENCES `profiles` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;

-- Volcando datos para la tabla cakephpbasesystem.users: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `profile_id`, `username`, `email`, `name`, `surname`, `cellphone`, `password`, `avatar`, `active`, `created_at`, `updated_at`) VALUES
	(5, 1, 'Nakanishi', 'fornovody@gmail.com', 'Ricardo Andres', 'Nakanishi', '', '$2y$10$pXjZTGKvuJW50L2wiyhVXOHk9zOp1KLOZWqBryQuukvPkjipII1By', 'https://ui-avatars.com/api/?size=256&font-size=0.33&background=0D8ABC&color=fff&name=Ricardo Andres+Nakanishi', 1, '2019-01-09 01:42:00', '2019-02-24 03:10:50');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
