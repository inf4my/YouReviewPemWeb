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

-- Dumping data for table youreview.game: ~6 rows (approximately)
/*!40000 ALTER TABLE `game` DISABLE KEYS */;
INSERT INTO `game` (`id`, `title`, `image`, `genre`, `daterelease`, `alson`, `description`) VALUES
	('AVE2', 'For Honor', 'forhonor_knight_mobile.jpg', 'Action', '2017-05-18', 'PS4, Xbox One', 'Game perang-perangan pake senjata'),
	('AVE5', 'Fallout: New Vegas', '1462729837971.png', 'Action', '2017-05-18', 'PS3, Xbox 360', 'Game RPG, bisa jadi koboi'),
	('AVE6', 'LA Noire', 'l_a__noire_by_filthymonkey-d3jehc7.jpg', 'Action', '2017-05-18', 'PS3, PC', 'Game jadi detektif'),
	('TRA1', 'Metal Gear Solid V: The Phantom Pain', 'Untitled-11.jpg', 'Action', '2017-05-18', 'PC, PS3, PS4, Xbox 360, Xbox one', 'Tembak-tembakan'),
	('TRA3', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot'),
	('TRA4', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot');
/*!40000 ALTER TABLE `game` ENABLE KEYS */;

-- Dumping data for table youreview.information: ~5 rows (approximately)
/*!40000 ALTER TABLE `information` DISABLE KEYS */;
INSERT INTO `information` (`score`, `comment`) VALUES
	(1, 'Sangat Tidak Bagus'),
	(2, 'Tidak Bagus'),
	(3, 'Cukup'),
	(4, 'Bagus'),
	(5, 'Sangat Bagus');
/*!40000 ALTER TABLE `information` ENABLE KEYS */;

-- Dumping data for table youreview.review: ~7 rows (approximately)
/*!40000 ALTER TABLE `review` DISABLE KEYS */;
INSERT INTO `review` (`id`, `name`, `idgame`, `score`, `reviews`, `likes`) VALUES
	(1, 'kevin', 'AVE2', 3, 'Game apaan dah ni', NULL),
	(3, 'dummy', 'AVE2', 1, 'Anjayy', 0),
	(4, 'dummy', 'TRA3', 4, 'Ayee', 0),
	(5, 'dummy', 'TRA3', 2, 'dasdsa', 0),
	(6, 'Kevon', 'TRA3', 5, 'coba', 0),
	(7, 'Kevin', 'TRA3', 5, 'coba', 0),
	(8, 'kepon', 'AVE5', 5, 'dasdasdaswkwkwkw', 0),
	(9, 'inf4my', 'AVE5', 5, 'Gile bagus banget', 0);
/*!40000 ALTER TABLE `review` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
