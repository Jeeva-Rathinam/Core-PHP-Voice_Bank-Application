-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 05, 2019 at 10:28 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voice_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `voice_bank_data`
--

DROP TABLE IF EXISTS `voice_bank_data`;
CREATE TABLE IF NOT EXISTS `voice_bank_data` (
  `voice_id` int(50) NOT NULL AUTO_INCREMENT,
  `voice_name` varchar(50) NOT NULL,
  `voice_gender` varchar(50) NOT NULL,
  `voice_genres` varchar(50) NOT NULL,
  `voice_voice_modulation` varchar(50) NOT NULL,
  `voice_languages` varchar(50) NOT NULL,
  `voice_jingle_moods` varchar(50) NOT NULL,
  `voice_ivr` varchar(50) NOT NULL,
  `voice_audio_file` varchar(50) NOT NULL,
  `voice_quantity` varchar(50) NOT NULL,
  `voice_status` enum('0','1') CHARACTER SET utf8 NOT NULL COMMENT '0-active,1-inactive',
  PRIMARY KEY (`voice_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voice_bank_data`
--

INSERT INTO `voice_bank_data` (`voice_id`, `voice_name`, `voice_gender`, `voice_genres`, `voice_voice_modulation`, `voice_languages`, `voice_jingle_moods`, `voice_ivr`, `voice_audio_file`, `voice_quantity`, `voice_status`) VALUES
(1, '1_tamil_voice.mp3', 'Male', 'Corporate', 'Normal', 'Tamil', 'Melodious', '', '1_tamil_voice.mp3', '100', '1'),
(2, '2_tamil_voice.mp3', 'Male', 'Corporate', 'Normal', 'Tamil', 'Melodious', '', '2_tamil_voice.mp3', '100', '1'),
(3, '2_tamil_voice.mp3', 'Male', 'Corporate', 'Normal', 'Tamil', 'Melodious', '', '2_tamil_voice.mp3', '100', '1'),
(4, '3_tamil_voice.mp3', 'Female', 'TMT Bars', 'Bass', 'Tamil', 'Melodious', '', '3_tamil_voice.mp3', '100', '1'),
(5, '4_tamil_voice.mp3', 'Kids', 'FMCG', 'Over The Top | Hi-Energy', 'Malayalam', 'Fast | Pace | Hi-Energy', '', '4_tamil_voice.mp3', '100', '1'),
(6, '2_tamil_voice.mp3', 'Male', 'Textiles', 'Bass', 'English', 'Fast | Pace | Hi-Energy', '', '2_tamil_voice.mp3', '100', '1');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
