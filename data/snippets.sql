-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307

-- Generation Time: Aug 10, 2024 at 08:58 PM

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
-- Table structure for table `snippets_forms_code`
--

DROP TABLE IF EXISTS `snippets_forms_code`;
CREATE TABLE IF NOT EXISTS `snippets_forms_code` (
  `snip_code_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_code_rw` text DEFAULT NULL,
  `snip_code_bs` text DEFAULT NULL,
  `snip_code_tw` text DEFAULT NULL,
  PRIMARY KEY (`snip_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_forms_general`
--

DROP TABLE IF EXISTS `snippets_forms_general`;
CREATE TABLE IF NOT EXISTS `snippets_forms_general` (
  `snip_forms_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,

  `snip_forms_class` varchar(32) NOT NULL,
  `snip_forms_title` varchar(256) NOT NULL,
  `snip_forms_desc` varchar(512) NOT NULL,

  PRIMARY KEY (`snip_forms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_forms_images`
--

DROP TABLE IF EXISTS `snippets_forms_images`;
CREATE TABLE IF NOT EXISTS `snippets_forms_images` (
  `snip_image_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_image_rw` varchar(128) DEFAULT NULL,
  `snip_image_bs` varchar(128) DEFAULT NULL,
  `snip_image_tw` varchar(128) DEFAULT NULL,
  PRIMARY KEY (`snip_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_forms_js`
--

DROP TABLE IF EXISTS `snippets_forms_js`;
CREATE TABLE IF NOT EXISTS `snippets_forms_js` (
  `snip_js_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_js_main` text DEFAULT NULL,
  `snip_js_opt` text DEFAULT NULL,
  PRIMARY KEY (`snip_js_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_forms_php`
--

DROP TABLE IF EXISTS `snippets_forms_php`;
CREATE TABLE IF NOT EXISTS `snippets_forms_php` (
  `snip_php_id` smallint(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  `snip_php_call` text NOT NULL,
  `snip_php_func` text NOT NULL,
  PRIMARY KEY (`snip_php_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_form_has_code`
--

DROP TABLE IF EXISTS `snippets_form_has_code`;
CREATE TABLE IF NOT EXISTS `snippets_form_has_code` (
  `snip_form_id` smallint(5) UNSIGNED NOT NULL,
  `snip_code_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`snip_form_id`,`snip_code_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_form_has_image`
--

DROP TABLE IF EXISTS `snippets_form_has_image`;
CREATE TABLE IF NOT EXISTS `snippets_form_has_image` (
  `snip_form_id` smallint(5) UNSIGNED NOT NULL,
  `snip_image_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`snip_form_id`,`snip_image_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_form_has_js`
--

DROP TABLE IF EXISTS `snippets_form_has_js`;
CREATE TABLE IF NOT EXISTS `snippets_form_has_js` (
  `snip_form_id` smallint(5) UNSIGNED NOT NULL,
  `snip_js_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`snip_form_id`,`snip_js_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `snippets_form_has_php`
--

DROP TABLE IF EXISTS `snippets_form_has_php`;
CREATE TABLE IF NOT EXISTS `snippets_form_has_php` (
  `snip_form_id` smallint(5) UNSIGNED NOT NULL,
  `snip_php_id` smallint(5) UNSIGNED NOT NULL,
  PRIMARY KEY (`snip_form_id`,`snip_php_id`)
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `snippets_form_has_code`
--
ALTER TABLE `snippets_form_has_code`
  ADD CONSTRAINT `delCodeRel` FOREIGN KEY (`snip_form_id`) REFERENCES `snippets_forms_general` (`snip_forms_id`) ON DELETE CASCADE;

--
-- Constraints for table `snippets_form_has_image`
--
ALTER TABLE `snippets_form_has_image`
  ADD CONSTRAINT `delImgRel` FOREIGN KEY (`snip_form_id`) REFERENCES `snippets_forms_general` (`snip_forms_id`) ON DELETE CASCADE;

--
-- Constraints for table `snippets_form_has_js`
--
ALTER TABLE `snippets_form_has_js`
  ADD CONSTRAINT `delJsRel` FOREIGN KEY (`snip_form_id`) REFERENCES `snippets_forms_general` (`snip_forms_id`) ON DELETE CASCADE;

--
-- Constraints for table `snippets_form_has_php`
--
ALTER TABLE `snippets_form_has_php`
  ADD CONSTRAINT `delPhpRel` FOREIGN KEY (`snip_form_id`) REFERENCES `snippets_forms_general` (`snip_forms_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
