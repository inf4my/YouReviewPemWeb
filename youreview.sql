-- phpMyAdmin SQL Dump
-- version 4.6.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 18, 2017 at 07:41 PM
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
('AVE2', 'AVENGERS', 'avengers.jpg', 'Action', '2017-05-18', 'PS4', 'Pahlawan'),
('AVE5', 'AVENGERS', 'avengers.jpg', 'Action', '2017-05-18', 'PS4', 'Pahlawan'),
('AVE6', 'AVENGERS', 'avengers.jpg', 'Action', '2017-05-18', 'PS4', 'Pahlawan'),
('TRA1', 'Transformers', 'transformers.jpg', 'Sci-Fi', '2017-05-18', 'XBOX', 'Robot'),
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
(1, 'kevin', 'AVE2', 3, 'Game apaan dah ni', NULL),
(3, 'dummy', 'AVE2', 1, 'Anjayy', 0),
(4, 'dummy', 'TRA3', 4, 'Ayee', 0),
(5, 'dummy', 'TRA3', 2, 'dasdsa', 0),
(6, 'Kevon', 'TRA3', 5, 'coba', 0),
(7, 'Kevin', 'TRA3', 5, 'coba', 0),
(8, 'kepon', 'AVE5', 5, 'dasdasdaswkwkwkw', 0);

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
  ADD KEY `score` (`score`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`idgame`) REFERENCES `game` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`score`) REFERENCES `information` (`score`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
