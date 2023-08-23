-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.27-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table db_aqnweb.tb_banner
CREATE TABLE IF NOT EXISTS `tb_banner` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `small_title` varchar(255) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `bg_image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sort` int(50) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- Dumping data for table db_aqnweb.tb_banner: ~3 rows (approximately)
INSERT INTO `tb_banner` (`id`, `small_title`, `title`, `desc`, `image`, `bg_image`, `link`, `sort`, `created_date`) VALUES
	(1, 'Welcome to', 'Asia Quattro Net', 'ACCELERATING DIGITAL LIFESTYLE BY ENGAGING THE MOBILE.', 'sm-pic1.png', 'slide1.jpeg', NULL, 1, '2023-08-23 13:21:46'),
	(2, NULL, 'Integrating Business, Technology', 'TELECOMMUNICATION AND EXPERIENCES', 'sm-pic2.png', 'slide2.jpg', NULL, 2, '2023-08-23 13:21:56'),
	(3, NULL, 'Helping Business Growing Rapidly', 'IN INDONESIA', 'sm-pic2.png', 'slide3.jpg', NULL, 3, '2023-08-23 14:15:17');

-- Dumping structure for table db_aqnweb.tb_clients
CREATE TABLE IF NOT EXISTS `tb_clients` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_clients: ~0 rows (approximately)

-- Dumping structure for table db_aqnweb.tb_home
CREATE TABLE IF NOT EXISTS `tb_home` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `header` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `sort` int(50) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_home: ~0 rows (approximately)

-- Dumping structure for table db_aqnweb.tb_karyawan
CREATE TABLE IF NOT EXISTS `tb_karyawan` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `posisi` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_karyawan: ~0 rows (approximately)

-- Dumping structure for table db_aqnweb.tb_konten
CREATE TABLE IF NOT EXISTS `tb_konten` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_konten: ~0 rows (approximately)

-- Dumping structure for table db_aqnweb.tb_partners
CREATE TABLE IF NOT EXISTS `tb_partners` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `desc` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_partners: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
