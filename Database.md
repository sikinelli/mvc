-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2019 at 07:11 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mvc`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `blog_id` int(3) NOT NULL,
  `blog_naslov` varchar(255) NOT NULL,
  `blog_datum` date NOT NULL,
  `blog_autor` varchar(255) NOT NULL,
  `blog_status` text NOT NULL,
  `blog_opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`blog_id`, `blog_naslov`, `blog_datum`, `blog_autor`, `blog_status`, `blog_opis`) VALUES
(1, 'Moje Drvo U Lisabonu', '2019-01-08', 'Arijana', 'neaktivan', ''),
(6, 'Amplitudo d.o.o.', '2019-03-26', 'Sinisa', 'aktivan', '');

-- --------------------------------------------------------

--
-- Table structure for table `karijera`
--

CREATE TABLE `karijera` (
  `karijera_id` int(3) NOT NULL,
  `karijera_naslov` varchar(255) NOT NULL,
  `karijera_pocetak` date NOT NULL,
  `karijera_kraj` date NOT NULL,
  `karijera_status` text NOT NULL,
  `karijera_opis` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karijera`
--

INSERT INTO `karijera` (`karijera_id`, `karijera_naslov`, `karijera_pocetak`, `karijera_kraj`, `karijera_status`, `karijera_opis`) VALUES
(1, 'IT programer', '2019-03-05', '2019-03-30', 'aktivan', ''),
(2, 'Graficki Dizajner', '2019-03-03', '2019-03-30', 'aktivan', ''),
(4, 'WEB dizajner', '2011-08-19', '2019-03-27', 'neaktivan', ''),
(5, 'Frontend developer', '2011-08-19', '2011-08-19', 'aktivan', '');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `proizvod_id` int(3) NOT NULL,
  `proizvod_naziv` varchar(255) NOT NULL,
  `proizvod_datum` date NOT NULL,
  `proizvod_status` text NOT NULL,
  `glavni_tekst` text NOT NULL,
  `kratak_opis` varchar(255) NOT NULL,
  `uvodni_tekst` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`proizvod_id`, `proizvod_naziv`, `proizvod_datum`, `proizvod_status`, `glavni_tekst`, `kratak_opis`, `uvodni_tekst`) VALUES
(5, 'Monitor', '2019-03-20', 'neaktivan', '', 'Monitor', 'Monitor'),
(8, 'LCD', '2019-03-28', 'neaktivan', '', '', ''),
(9, 'Stampac', '2019-03-26', 'neaktivan', '<p>StampacStampacStampacStampacStampac</p>', 'StampacStampacStampacStampacStampacStampac', 'StampacStampacStampac'),
(11, 'Procesor', '2019-03-26', 'aktivan', '', 'Procesor', 'Procesor');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `user_firstname`, `user_lastname`, `user_email`, `user_image`, `user_status`, `randSalt`) VALUES
(1, 'admin', '12345', 'Sinisa', 'Becic', 'sinisa.becic@yahoo.com', '', 'backhend developer', '$2y$10$iusesomecrazystrings22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `karijera`
--
ALTER TABLE `karijera`
  ADD PRIMARY KEY (`karijera_id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`proizvod_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `blog_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `karijera`
--
ALTER TABLE `karijera`
  MODIFY `karijera_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `proizvod_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
