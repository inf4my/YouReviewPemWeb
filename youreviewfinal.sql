-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2017 at 07:31 AM
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
('AVE2', 'For Honor', 'forhonor_knight_mobile.jpg', 'Action', '2017-05-18', 'PS4, Xbox One', 'Game perang-perangan pake senjata'),
('AVE5', 'Fallout: New Vegas', '1462729837971.png', 'Action', '2017-05-18', 'PS3, Xbox 360', 'Game RPG, bisa jadi koboi'),
('AVE6', 'LA Noire', 'l_a__noire_by_filthymonkey-d3jehc7.jpg', 'Action', '2017-05-18', 'PS3, PC', 'Game jadi detektif'),
('TRA1', 'Metal Gear Solid V: The Phantom Pain', 'Untitled-11.jpg', 'Action', '2017-05-18', 'PC, PS3, PS4, Xbox 360, Xbox one', 'Tembak-tembakan'),
('TRA3', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot'),
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
(1, 'kevinlionery', 'AVE2', 3, 'Lumayanlah', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
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
