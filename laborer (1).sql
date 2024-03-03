-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 03, 2024 at 11:27 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laborer`
--

-- --------------------------------------------------------

--
-- Table structure for table `l_user`
--

DROP TABLE IF EXISTS `l_user`;
CREATE TABLE IF NOT EXISTS `l_user` (
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `w_type` varchar(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `charge` varchar(200) NOT NULL,
  `photo` varchar(200) NOT NULL,
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `l_user`
--

INSERT INTO `l_user` (`username`, `pass`, `name`, `w_type`, `status`, `charge`, `photo`) VALUES
('nitin@', '123', 'nitin', 'color', 'yes', '500', ''),
('nitin123@', '123', '', 'color', 'yes', '400', ' profile_image/nitin123@nitin.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
