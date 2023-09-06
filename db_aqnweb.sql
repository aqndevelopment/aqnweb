-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.5.0.6677
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_aqnweb
CREATE DATABASE IF NOT EXISTS `db_aqnweb` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `db_aqnweb`;

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
INSERT IGNORE INTO `tb_banner` (`id`, `small_title`, `title`, `desc`, `image`, `bg_image`, `link`, `sort`, `created_date`) VALUES
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

-- Dumping data for table db_aqnweb.tb_clients: ~12 rows (approximately)
INSERT IGNORE INTO `tb_clients` (`id`, `image`, `nama`, `link`, `desc`, `created_date`) VALUES
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

-- Dumping data for table db_aqnweb.tb_karyawan: ~28 rows (approximately)
INSERT IGNORE INTO `tb_karyawan` (`id`, `image`, `nama`, `posisi`, `desc`, `sort`, `created_date`) VALUES
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
	(14, 'Adit.jpg', 'Aditya Pratama', 'Frontend Developer', NULL, 0, '2023-08-24 09:41:54'),
	(15, 'fahmi.jpg', 'Achmad Fahmi Rosyad', 'Frontend Developer', NULL, 0, '2023-08-24 09:41:59'),
	(16, 'riyadi.jpg', 'Riyadi', 'Mobile Developer', NULL, 0, '2023-08-24 09:49:02'),
	(17, 'Elly.jpg', 'Elly Sianti', 'Finance & Accounting', NULL, 0, '2023-08-24 09:49:44'),
	(18, 'yuli.jpg', 'Yulianthy Anggraeni', 'Finance', NULL, 0, '2023-08-24 09:50:21'),
	(19, 'Dian.jpg', 'Maria Dianita', 'Finance', NULL, 0, '2023-08-24 09:50:29'),
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
  `sub_title` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `slugs` varchar(255) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `tags` varchar(255) DEFAULT NULL,
  `created_date` datetime DEFAULT current_timestamp(),
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE KEY `slugs` (`slugs`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_bin ROW_FORMAT=DYNAMIC;

-- Dumping data for table db_aqnweb.tb_partners: ~11 rows (approximately)
INSERT IGNORE INTO `tb_partners` (`id`, `image`, `nama`, `sub_title`, `link`, `slugs`, `desc`, `tags`, `created_date`) VALUES
	(1, 'A10_Logo-300x225.png', 'Secure Application Services', NULL, NULL, 'secure-application-services', '<h3>A10</h3><p>A10 Networks (NYSE: ATEN) provides secure application services for on-premises, multi-cloud and edge-cloud environments at hyperscale. A10 Networks mission is to enable service providers and enterprises to deliver business-critical applications that are secure, available and efficient for multi-cloud transformation and 5G readiness. A10 delivers better business outcomes that support investment protection, new business models and help future-proof infrastructures, empowering customers to provide the most secure and available digital experience. Founded in 2004, A10 Networks is based in San Jose, Calif. and serves customers globally.</p>', 'telco,solutions,services', '2023-08-24 06:57:52'),
	(2, 'Baicells-300x225.jpg', 'Baicells', NULL, NULL, 'baicells', '<p>Baicells is an international company, providing disruptively priced and technically innovative 4G LTE and 5G NR Access Solutions that connect more than 50 countries across the globe. Baicells’ ever-expanding goal to “Connect the Unconnected” has led to the establishment of offices across five of the seven continents and the development of over 300 patents since our inception in 2014. Working alongside its ecosystem partners, Baicells is setting the pace for 5G and future technologies with wireless solutions. These solutions can serve rural outdoor, urban outdoor, commercial indoor, unlicensed and licensed LTE, and a wide variety of vertical opportunities. Combining open-cloud, mobile edge computing and affordable Radio Access Network devices, Baicells strives to revamp the economics of the Information and Communications Technology Industry in the coming years.</p>', 'telco,solutions,services', '2023-08-24 06:58:43'),
	(3, 'brightcove-300x225.jpg', 'Online Video', NULL, NULL, 'online-video', '<h3>Brightcove</h3>\r\n<p>With over 50 industry-defining patents, Brightcove lives and breathes video. The company provides its game-changing video capabilities to over 3,300 customers globally. This roster includes industry leaders spanning verticals, from media titans like Showtime Networks and Vox Media, food and beverage giants such as Chick-Fil-A and Dunkin Brands, authorities in entertainment like the Academy of Motion Picture Arts and Sciences, virtual education company MasterClass, sports partners like the USGA, and many more. When video is done right, it can have a powerful and lasting effect. Hearts open. Minds change. Creativity thrives. Since 2004, Brightcove has been helping customers discover and experience the incredible power of video through its award-winning technology, empowering organizations in more than 70 countries across the globe to touch audiences in bold and innovative ways. Brightcove achieves this by developing technologies once thought impossible, providing customer support without parallel or excuses, and leveraging the expertise and resources of a global infrastructure. Video is the world’s most compelling, exciting medium. Visit www.brightcove.com for more information. Video That Means Business.™️</p>', 'telco,solutions,services', '2023-08-24 06:58:52'),
	(4, 'flash-network-300x225.jpg', 'Mobile Internet', NULL, NULL, 'mobile-internet', '<h3>Flash Network</h3><p>Flash Networks is a leading provider of optimization solutions that enable operators to improve RAN spectral efficiency, boost network speed, optimize video and web traffic and generate over-the-top revenues from the mobile Internet.</p><p>Using field proven, proprietary, and patent pending technology Flash Networks’ xtraAir Signaling and Radio Connection Optimization reduces the number of RRC (radio resource control) state changes and concurrent radio connections enabling up to 35% more users to be served using the same network resources. As a result, radio spectral efficiency is improved enabling operators to delay investment in additional infrastructure to meet the demand for more radio connections.</p><p>With offices in North America, Europe, Israel, Latin America, and Asia, Flash Networks services over 500 million subscribers daily and is proud to count among its customers top-tier mobile carriers including Orange, SKT, TIM, T-Mobile, Telefonica, Vodafone, and many other leading carriers.</p><p>Flash Networks is part of Lumine Group, a portfolio within Volaris Group, a subsidiary of Constellation Software Inc. (TSX:CSU).</p>', 'telco,solutions,services', '2023-08-24 06:59:03'),
	(5, 'Galvanize_Logo-300x225.png', 'Cloud Base Security', NULL, NULL, 'cloud-base-security', '<h3>Galvanize>/h3>\r\n<p>Galvanize is the leading provider of award-winning, cloud-based security, risk management, compliance, and audit software for some of the world’s largest organizations. The integrated HighBond platform provides visibility into risk,', 'telco,solutions,services', '2023-08-24 06:59:17'),
	(6, 'polystar-e1587613232632.jpg', 'Optimising Network Perfomance', NULL, NULL, 'optimising-network-perfomance', '<h3>Polystar</h3><p>Polystar, an Elisa company, is a leading provider of real-time monitoring and analytics platforms to more than 100 CSPs worldwide. The company´s solutions deliver tailored insights into network, service and OTT application performance. These insights allow stakeholders to enhance customer experience, operational efficiency, and identify new revenue streams from data monetisation.</p><p>Polystar’s products enable the smooth introduction of new technologies and services, including 5G, NFV and IoT, helping CSPs build and operate cost efficient, secure and reliable networks. Powered by Elisa Automate, Polystar also ensures proactive management of networks through automation of operational processes, driven by machine learning. CSPs benefit from faster fault resolution and more efficient use of both operational and network resources.</p><p>Polystar was founded in Stockholm in 1983. The company has experienced continuous growth and has evolved to become a global company, serving customers and partners in over 50 countries. We take quality and information security seriously (we are ISO 9001 and ISO 27001 certified) and our financial record and stability is recognised by AAA ratings from the industry. Since June 2019, Polystar has been part of Elisa.</p>', 'telco,solutions,services', '2023-08-24 06:59:34'),
	(7, 'redknee.jpg', 'Telco Solutions & Services', NULL, NULL, 'telco-solutions-services', '<h3>RedKnee</h3><p>Redknee Solutions Inc. is based in Toronto, Canada, and is a global provider of OSS/BSS software products solutions and services to the telecommunications industry.</p><p>Redknee monetizes today’s digital world, providing a complete portfolio of mission-critical monetization and subscriber management solutions and services that allow communications service providers to charge for things in new and innovative ways.</p>', 'telco,solutions,services', '2023-08-24 06:59:48'),
	(8, 'Sqream_Logo-300x225.png', 'Data Acceleration', NULL, NULL, 'data-acceleration', '<h3>SQREAM</h3><p>SQream is the data acceleration platform empowering organizations to analyze the full scope of their massive data – from terabytes to petabytes – enabling them to achieve previously unattainable critical insights down to just within minutes.</p><p>Global enterprises integrate SQream into their existing data pipeline to analyze more data than ever, for improved performance, reduced footprint, and cost-efficient scaling of the amount of data being analyzed.</p><p>Polystar was founded in Stockholm in 1983. The company has experienced continuous growth and has evolved to become a global company, serving customers and partners in over 50 countries. We take quality and information security seriously (we are ISO 9001 and ISO 27001 certified) and our financial record and stability is recognised by AAA ratings from the industry. Since June 2019, Polystar has been part of Elisa.</p>', 'telco,solutions,services', '2023-08-24 06:59:59'),
	(9, 'Velocix_Logo-300x225.png', 'Content Delivery', NULL, NULL, 'content-delivery', '<h3>Velocix</h3><p>Velocix is the world’s leading provider of content delivery, origin and storage, and stream personalization software and is Making Video Personal, on every connected screen. Velocix technology is used to engage, entertain, and inform millions of people around the globe, every single day. Velocix help consumers connect with the content they love by building products that are more responsive to personal viewing preferences, making every video experience more rewarding. Velocix work closely with customers, including telecommunications, cable, and online video service providers, to help them navigate a rapidly change.</p>', 'telco,solutions,services', '2023-08-24 07:00:09'),
	(10, 'viavi-300x225.jpg', 'Network Solutions', NULL, NULL, 'network-solutions', '<h3>Viavi</h3><p> VIAVI Solutions is a global provider of network test, monitoring and assurance solutions for communications service providers, enterprises, network equipment manufacturers, government and avionics. We help these customers harness the power of instruments, automation, intelligence and virtualization to Command the network. VIAVI is also a leader in light management solutions for 3D sensing, anti-counterfeiting, consumer electronics, industrial, automotive, and defense applications.</p>', 'telco,solutions,services', '2023-08-24 07:00:16'),
	(11, 'yoose-300x225.jpg', 'Location Based Advertising', NULL, NULL, 'location-based-advertising', '<h3>Yoose</h3><p>YOOSE is a global audience intelligence platform that aims to connect marketers with their most valuable consumer segments. Yoose have been delivering innovative and powerful mobile campaigns for global brands since 2008. Evolving beyond location based solutions, YOOSE understands how a combination of location and audience profiling is changing the way brands interact with their consumers. We combine cutting edge innovative technology with deep expertise, experience and passion to help global brands and advertisers capture the opportunities of this fast-paced, ever-changing world of location based mobile advertising.</p>', 'telco,solutions,services', '2023-08-24 07:00:25');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
