-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               10.2.3-MariaDB-log - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for youreview
CREATE DATABASE IF NOT EXISTS `youreview` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `youreview`;

-- Dumping structure for table youreview.game
CREATE TABLE IF NOT EXISTS `game` (
  `id` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `daterelease` date NOT NULL,
  `alson` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table youreview.game: ~6 rows (approximately)
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` (`id`, `title`, `image`, `genre`, `daterelease`, `alson`, `description`) VALUES
	('AVE2', 'For Honor', 'forhonor_knight_mobile.jpg', 'Action', '2017-05-18', 'PS4, Xbox One', 'Game perang-perangan pake senjata'),
	('AVE5', 'Fallout: New Vegas', '1462729837971.png', 'Action', '2008-10-19', 'PS3, Xbox 360, PC', 'Game RPG, bisa jadi koboi'),
	('AVE6', 'LA Noire', 'l_a__noire_by_filthymonkey-d3jehc7.jpg', 'Action', '2017-05-18', 'PS3, PC', 'Game jadi detektif'),
	('TRA1', 'Metal Gear Solid V: The Phantom Pain', 'Untitled-11.jpg', 'Action', '2017-05-18', 'PC, PS3, PS4, Xbox 360, Xbox one', 'Tembak-tembakan'),
	('TRA3', 'Persona 5', 'p5.jpg', 'JRPG', '2017-04-04', 'PS4, PS3', 'Simulasi anak sekolahan'),
	('TRA4', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;

-- Dumping structure for table youreview.information
CREATE TABLE IF NOT EXISTS `information` (
  `score` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL,
  PRIMARY KEY (`score`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table youreview.information: ~5 rows (approximately)
/*!40000 ALTER TABLE `information` DISABLE KEYS */;
INSERT INTO `information` (`score`, `comment`) VALUES
	(1, 'Sangat Tidak Bagus'),
	(2, 'Tidak Bagus'),
	(3, 'Cukup'),
	(4, 'Bagus'),
	(5, 'Sangat Bagus');
/*!40000 ALTER TABLE `information` ENABLE KEYS */;

-- Dumping structure for table youreview.review
CREATE TABLE IF NOT EXISTS `review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `idgame` varchar(200) NOT NULL,
  `score` int(11) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  `likes` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `idgame` (`idgame`),
  KEY `score` (`score`),
  KEY `name` (`name`),
  CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idgame`) REFERENCES `game` (`id`),
  CONSTRAINT `review_ibfk_2` FOREIGN KEY (`score`) REFERENCES `information` (`score`),
  CONSTRAINT `review_ibfk_3` FOREIGN KEY (`name`) REFERENCES `user` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

-- Dumping data for table youreview.review: ~5 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`id`, `name`, `idgame`, `score`, `reviews`, `likes`) VALUES
	(1, 'kevinlionery', 'AVE2', 3, 'Lumayanlah', 2),
	(2, 'inf4my', 'AVE2', 5, 'Mantab', 4),
	(8, 'inf4my', 'AVE5', 4, 'Bagus lah', 1),
	(9, 'inf4my', 'TRA1', 5, 'Seru banget', 1),
	(10, 'jamalkun', 'AVE2', 3, 'Lumayan lah', 0);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

-- Dumping structure for table youreview.user
CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(200) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table youreview.user: ~4 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`username`, `password`, `salt`, `namalengkap`, `tanggallahir`, `alamat`) VALUES
	('admin', '2c6754131b172df76c2fd80ab2143ec4', '5926e98291def', 'admin', '1996-04-20', 'BMR'),
	('inf4my', '04f943fb38f7424b8b52c6fa44a8a94b', '592697356fbeb', 'Naufal Irfan', '1996-02-04', 'Tangerang'),
	('jamalkun', 'bcfbafe0d458da543aba46d1be98ce2a', '5926c3451d8e4', 'Jamal-kun', '1945-04-20', 'Tangerang'),
	('kevinlionery', '123', '123', 'Kevin Lionery', '1995-12-02', 'Taman Ubud Indah');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
