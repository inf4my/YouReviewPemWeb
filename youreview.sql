-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 02, 2017 at 09:48 AM
-- Server version: 5.7.13-log
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `youreview`
--

-- --------------------------------------------------------

--
-- Table structure for table `game`
--

CREATE TABLE `game` (
  `id` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` varchar(200) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `daterelease` date NOT NULL,
  `alson` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `game`
--

INSERT INTO `game` (`id`, `title`, `image`, `genre`, `daterelease`, `alson`, `description`) VALUES
(' 240', 'Test Fallout again 2', 'Fallout4_Render_SynthGen2.jpg', 'Combat', '2017-05-26', 'PS4, PSP, PC, 3DS, ', 'Coba add game lg'),
(' 4112', 'Persona 4', 'Persona_44.png', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, ', 'Ini game di add (again)'),
(' 414', 'Persona 4', 'Persona_42.png', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, ', 'Ini game di add (again)'),
(' 445', 'Persona 4', 'Persona_43.png', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, ', 'Ini game di add (again)'),
(' 491', 'Persona 4', 'Persona_41.png', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, ', 'Ini game di add (again)'),
(' 496', 'Persona 4', 'Persona_4.png', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, ', 'Ini game di add (again)'),
(' 588', 'Persona 5', 'persona5-1280-3-1490728399817_400w.jpg', 'Adventure', '2017-05-26', 'PS4, PC, Xbox One, Xbox 360, Nintendo Switch, ', 'Ini game di add'),
('AVE2', 'For Honor', 'forhonor_knight_mobile.jpg', 'Action', '2017-05-18', 'PS4, Xbox One', 'Game perang-perangan pake senjata'),
('AVE5', 'Fallout: New Vegas', '1462729837971.png', 'Action', '2008-10-19', 'PS3, Xbox 360, PC', 'Game RPG, bisa jadi koboi'),
('AVE6', 'LA Noire', 'l_a__noire_by_filthymonkey-d3jehc7.jpg', 'Action', '2017-05-18', 'PS3, PC', 'Game jadi detektif'),
('GI102', 'Persona 4 lagi', 'Persona_45.png', 'Action', '2017-05-26', 'PS4, PSP, PC, 3DS, ', 'ddddd'),
('GI144', 'Persona 4 lagi', 'Persona_46.png', 'Action', '2017-05-26', 'PS4, PSP, PC, 3DS, ', 'ddddd'),
('GI171', 'Persona 4 lagi lagi', 'Persona_47.png', 'Action', '2017-05-26', 'PS4, PSP, PC, 3DS, ', 'eeee'),
('gi64', 'Test Fallout lagi', 'Fallout_3_cover_art1.png', 'Action', '2017-05-26', 'PS4, PSP, PC, 3DS, DS, ', 'Coba add game'),
('IN21', 'Test Fallout again', 'Fo4_Mechanist.png', 'Combat', '2017-05-26', 'PS4, PSP, PC, 3DS, DS, ', 'Coba add game'),
('IN45', 'Test Fallout again', 'Fo4_Mechanist2.png', 'Combat', '2017-05-26', 'PS4, PSP, PC, 3DS, DS, ', 'Coba add game'),
('IN56', 'Test Fallout again', 'Fo4_Mechanist1.png', 'Combat', '2017-05-26', 'PS4, PSP, PC, 3DS, DS, ', 'Coba add game'),
('TRA1', 'Metal Gear Solid V: The Phantom Pain', 'Untitled-11.jpg', 'Action', '2017-05-18', 'PC, PS3, PS4, Xbox 360, Xbox one', 'Tembak-tembakan'),
('TRA3', 'Persona 5', 'p5.jpg', 'JRPG', '2017-04-04', 'PS4, PS3', 'Simulasi anak sekolahan'),
('TRA4', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot');

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `score` int(11) NOT NULL,
  `comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`score`, `comment`) VALUES
(1, 'Sangat Tidak Bagus'),
(2, 'Tidak Bagus'),
(3, 'Cukup'),
(4, 'Bagus'),
(5, 'Sangat Bagus');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `idgame` varchar(200) NOT NULL,
  `score` int(11) NOT NULL,
  `reviews` varchar(500) NOT NULL,
  `likes` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`id`, `name`, `idgame`, `score`, `reviews`, `likes`) VALUES
(1, 'kevinlionery', 'AVE2', 3, 'Lumayanlah', 3),
(2, 'inf4my', 'AVE2', 5, 'Mantab', 4),
(8, 'inf4my', 'AVE5', 4, 'Bagus lah', 1),
(9, 'inf4my', 'TRA1', 5, 'Seru banget', 1),
(10, 'jamalkun', 'AVE2', 3, 'Lumayan lah', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `salt` varchar(200) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `salt`, `namalengkap`, `tanggallahir`, `alamat`) VALUES
('aaa', '8b10e2b37ef299589b78d659a96e0436', '59274ead24bda', 'aaa', '2017-05-26', 'aaa'),
('admin', '2c6754131b172df76c2fd80ab2143ec4', '5926e98291def', 'admin', '1996-04-20', 'BMR'),
('inf4my', '04f943fb38f7424b8b52c6fa44a8a94b', '592697356fbeb', 'Lionery Kevin', '1996-02-04', 'Tangerang'),
('jamalkun', 'bcfbafe0d458da543aba46d1be98ce2a', '5926c3451d8e4', 'Jamal-kun', '1945-04-20', 'Tangerang'),
('kevinlionery', '123', '123', 'Kevin Lionery', '1995-12-02', 'Taman Ubud Indah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`score`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idgame` (`idgame`),
  ADD KEY `score` (`score`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idgame`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`score`) REFERENCES `information` (`score`),
  ADD CONSTRAINT `review_ibfk_3` FOREIGN KEY (`name`) REFERENCES `user` (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
