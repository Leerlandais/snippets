-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 09, 2024 at 02:05 PM
-- Server version: 11.2.2-MariaDB
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `snippets`
--

-- --------------------------------------------------------

--
-- Table structure for table `snippets_forms`
--

DROP TABLE IF EXISTS `snippets_forms`;
CREATE TABLE IF NOT EXISTS `snippets_forms` (
  `snip_forms_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_forms_class` varchar(31) NOT NULL,
  `snip_forms_title` varchar(63) NOT NULL,
  `snip_forms_desc` varchar(255) NOT NULL,
  `snip_forms_rw` text NOT NULL,
  `snip_forms_bs` text NOT NULL,
  `snip_forms_tw` text NOT NULL,
  PRIMARY KEY (`snip_forms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_users`
--

DROP TABLE IF EXISTS `snippets_users`;
CREATE TABLE IF NOT EXISTS `snippets_users` (
  `snip_user_id` tinyint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_user_login` varchar(64) NOT NULL,
  `snip_user_pass` varchar(255) NOT NULL,
  `snip_user_surname` varchar(255) NOT NULL,
  `snip_user_email` varchar(128) NOT NULL,
  `snip_user_recovery` varchar(255) NOT NULL,
  `snip_user_permissions` tinyint(3) UNSIGNED NOT NULL DEFAULT 1,
  PRIMARY KEY (`snip_user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
