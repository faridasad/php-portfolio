-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 21, 2022 at 07:27 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Fared', 'deraf31');

-- --------------------------------------------------------

--
-- Table structure for table `profs`
--

CREATE TABLE `profs` (
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profs`
--

INSERT INTO `profs` (`name`) VALUES
('Full-Stack Developer'),
('Mentor');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(55) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`name`, `category`, `image`, `link`, `id`) VALUES
('MilliON', 'WEB GAME', './images/millionaire.jpg', 'https://millionaire-game-react.netlify.app/', 1),
('Where in the World?', 'WEB APP', './images/where-in-the-world.jpg', 'https://wherefromtheworld.netlify.app/', 2),
('IP Tracker', 'WEB APP', './images/ip-tracker.jpg', 'https://ip-address-trackerapp.netlify.app/', 3),
('Shortly', 'WEB APP', './images/shortly.jpg', 'https://shortly-landing-react.netlify.app/', 4),
('Mew Transfer', 'WEB APP', './images/mew-transfer.jpg', 'https://github.com/faridasad/mew-transfer', 5),
('Quick Translate', 'Chrome Extension', './images/quick-translate.jpg', 'https://github.com/faridasad/quick-translate-extension', 6);

-- --------------------------------------------------------

--
-- Table structure for table `stack`
--

CREATE TABLE `stack` (
  `name` varchar(20) NOT NULL,
  `image` varchar(555) NOT NULL,
  `datalabel` varchar(20) NOT NULL,
  `id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stack`
--

INSERT INTO `stack` (`name`, `image`, `datalabel`, `id`) VALUES
('HTML', './images/html5.svg', 'blueviolet', 1),
('CSS', './images/css3.svg', 'blueviolet', 2),
('SASS', './images/sass.svg', 'pink', 3),
('JavaScript', './images/javascript.svg', 'gold', 4),
('TypeScript', './images/typescript.svg', 'blue', 5),
('React', './images/react.svg', 'blueviolet', 6),
('Node.js', './images/node-js.svg', 'lime', 7),
('MongoDB', './images/mongodb.svg', 'lime', 8),
('Figma', './images/figma.svg', 'pink', 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(55) NOT NULL,
  `aboutme` text NOT NULL,
  `image` varchar(555) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `aboutme`, `image`, `id`) VALUES
('Fared', 'Haqqımda yoxdu.', './images/hero-bg.gif', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stack`
--
ALTER TABLE `stack`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `stack`
--
ALTER TABLE `stack`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
