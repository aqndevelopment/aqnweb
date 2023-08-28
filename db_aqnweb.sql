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
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_clients: ~11 rows (approximately)
INSERT INTO `tb_clients` (`id`, `image`, `nama`, `link`, `desc`, `created_date`) VALUES
	(1, '3-logo.jpg', '3', NULL, NULL, '2023-08-24 08:17:14'),
	(2, 'Axis_logo_2015.svg_.jpg', 'axis', NULL, NULL, '2023-08-24 08:17:22'),
	(3, 'husky-logo.jpg', 'husky', NULL, NULL, '2023-08-24 08:17:31'),
	(4, 'Indosat-Ooredoo-Hutchison-Logo.jpg', 'indosat', NULL, NULL, '2023-08-24 08:26:03'),
	(5, 'Logo-Kemendikbud.jpg', 'kemendikbud', NULL, NULL, '2023-08-24 08:26:16'),
	(6, 'logo-telkomsel-baru-1.jpg', 'telkomsel', NULL, NULL, '2023-08-24 08:26:24'),
	(7, 'Mahkamah_Agung_insignia.svg_.jpg', 'Mahkamah Agung', NULL, NULL, '2023-08-24 08:26:31'),
	(8, 'Sankyu-logo.jpg', 'Sankyu', NULL, NULL, '2023-08-24 08:26:38'),
	(9, 'tokopedia-logo-40654CCDD6-seeklogo.com_.jpg', 'tokopedia', NULL, NULL, '2023-08-24 08:26:50'),
	(10, 'wahana-logo.jpg', 'wahana', NULL, NULL, '2023-08-24 08:26:58'),
	(11, 'WhatsApp-Image-2023-07-14-at-16.43.50-1024x1024.jpeg', NULL, NULL, NULL, '2023-08-24 08:27:05'),
	(12, 'XL-Axiata-Logo.jpg', NULL, NULL, NULL, '2023-08-24 08:27:12');

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
  `sort` int(50) NOT NULL DEFAULT 0,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_karyawan: ~27 rows (approximately)
INSERT INTO `tb_karyawan` (`id`, `image`, `nama`, `posisi`, `desc`, `sort`, `created_date`) VALUES
	(1, 'Budi.jpg', 'Priyadi Budi Susilo', 'Head of Product', 'Budi is AQN attack-midfielder as he hold responsibility of Product & Project Management for IT/Telecom category of SI business, the origin and hardcore of AQN business. He directly face partners and clients for any technical discussions. As IT lecturer, h', 1, '2023-08-24 09:16:53'),
	(2, 'wantie.jpg', 'Wantie Kristian', 'Head of Sales', 'Wantie is AQN striker as she is the Head of Account Management for all clients and products. Her experiences in IT and telecommunications has been long and she is the table turning deal breaker of AQN', 2, '2023-08-24 09:18:10'),
	(3, 'Saut.jpg', 'Saut Simanjuntak', 'Head of Support', 'Saut sets the example for how our support team can continue the standard of excellence it is known for. From his very first day, Saut has helped to create a positive working culture in the office. His team have used him as the standard, especially as the ', 3, '2023-08-24 09:28:33'),
	(4, 'Ade.jpg', 'Ade Kurnia', 'Technical Support Manager', 'Leaving his rich farmland family business, Ade choose to become one of Technical Support Leader in AQN. A wing-defender position that is key for both defending AQN solution kept performing and makes customer happy.', 4, '2023-08-24 09:29:42'),
	(5, 'Renata.jpg', 'Renata Melvanora', 'Project Manager', NULL, 5, '2023-08-24 09:30:26'),
	(6, 'Imam.jpg', 'M. Imam Hanafi', 'IT Support', NULL, 0, '2023-08-24 09:32:03'),
	(7, 'zully.jpg', 'Zullyana', 'Support Engineer', NULL, 0, '2023-08-24 09:33:45'),
	(8, 'naris.jpg', 'Naris Laksono', 'Support Engineer', NULL, 0, '2023-08-24 09:34:08'),
	(9, 'mega.jpg', 'Megawati', 'Junior RF Engineer', NULL, 0, '2023-08-24 09:34:48'),
	(10, 'nowo.jpg', 'Nowo P. Nurindro', 'Quality Assurance Tester', NULL, 0, '2023-08-24 09:35:53'),
	(11, 'farisy.png', 'Farisy', 'Sales Executive', NULL, 0, '2023-08-24 09:36:15'),
	(12, 'andi.jpg', 'Andi Galuh', 'Sr.Lead Developer', NULL, 0, '2023-08-24 09:36:48'),
	(13, 'ojan.jpg', 'Fauzan Rabbani', 'Backend Developer', NULL, 0, '2023-08-24 09:41:34'),
	(14, 'adit.jpg', 'Aditya Pratama', 'Frontend Developer', NULL, 0, '2023-08-24 09:41:54'),
	(15, 'fahmi.jpg', 'Achmad Fahmi Rosyad', 'Frontend Developer', NULL, 0, '2023-08-24 09:41:59'),
	(16, 'riyadi.jpg', 'Riyadi', 'Mobile Developer', NULL, 0, '2023-08-24 09:49:02'),
	(17, 'Elly.jpg', 'Elly Sianti', 'Finance & Accounting', NULL, 0, '2023-08-24 09:49:44'),
	(18, 'yuli.jpg', 'Yulianthy Anggraeni', 'Finance', NULL, 0, '2023-08-24 09:50:21'),
	(19, 'dian.jpg', 'Maria Dianita', 'Finance', NULL, 0, '2023-08-24 09:50:29'),
	(20, 'Subandriyo.jpg', 'Subandryo', 'Security', NULL, 0, '2023-08-24 09:53:10'),
	(21, 'Dhofier.jpg', 'Dhofier Farisi', 'Messenger', NULL, 0, '2023-08-24 09:53:14'),
	(22, 'Riah.jpg', 'Riah Prameshwari', 'GA Staff', NULL, 0, '2023-08-24 09:53:26'),
	(23, 'intan.jpg', 'Intan Inayatillah', 'Support Engineer', NULL, 0, '2023-08-24 09:53:31'),
	(24, 'christina.jpg', 'Christina Natalia', 'Support Engineer', NULL, 0, '2023-08-24 09:53:37'),
	(25, 'aguspian.jpg', 'M. Aguspian Farizi', 'Support Engineer', NULL, 0, '2023-08-24 09:53:45'),
	(26, 'diki.jpg', 'Diky Bulo', 'Support Engineer', NULL, 0, '2023-08-24 09:53:49'),
	(27, 'sultan.jpg', 'Sultan Rizky Abdurahman', 'Support Engineer', NULL, 0, '2023-08-24 09:53:57'),
	(28, 'sadam.jpg', 'Ananda Sadam Firdaus', 'Support Engineer', NULL, 0, '2023-08-24 09:54:04');

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
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_partners: ~11 rows (approximately)
INSERT INTO `tb_partners` (`id`, `image`, `nama`, `link`, `desc`, `created_date`) VALUES
	(1, 'A10_Logo-300x225.png', NULL, NULL, NULL, '2023-08-24 06:57:52'),
	(2, 'Baicells-300x225.jpg', NULL, NULL, NULL, '2023-08-24 06:58:43'),
	(3, 'brightcove-300x225.jpg', NULL, NULL, NULL, '2023-08-24 06:58:52'),
	(4, 'flash-network-300x225.jpg', NULL, NULL, NULL, '2023-08-24 06:59:03'),
	(5, 'Galvanize_Logo-300x225.png', NULL, NULL, NULL, '2023-08-24 06:59:17'),
	(6, 'polystar-e1587613232632.jpg', NULL, NULL, NULL, '2023-08-24 06:59:34'),
	(7, 'redknee.jpg', NULL, NULL, NULL, '2023-08-24 06:59:48'),
	(8, 'Sqream_Logo-300x225.png', NULL, NULL, NULL, '2023-08-24 06:59:59'),
	(9, 'Velocix_Logo-300x225.png', NULL, NULL, NULL, '2023-08-24 07:00:09'),
	(10, 'viavi-300x225.jpg', NULL, NULL, NULL, '2023-08-24 07:00:16'),
	(11, 'yoose-300x225.jpg', NULL, NULL, NULL, '2023-08-24 07:00:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
