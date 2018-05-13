-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 13. Mei 2018 jam 12:09
-- Versi Server: 5.5.8
-- Versi PHP: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `tugas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `genre` varchar(100) DEFAULT NULL,
  `platform` varchar(100) DEFAULT NULL,
  `released` varchar(100) DEFAULT NULL,
  `developer` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data untuk tabel `games`
--

INSERT INTO `games` (`id`, `name`, `genre`, `platform`, `released`, `developer`) VALUES
(5, 'Kill All Zombies', 'Shooter', 'Ps3', '2014', 'Beatshapers'),
(6, 'Observer', 'Horror', 'Ps4', '2017', 'Blooper Team'),
(8, '2Dark', 'Horror', 'Ps4', '2017', 'Bigben Inc.'),
(9, 'Lumo', 'Advanture', 'Ps4', '2016', 'Rising Star'),
(15, '7 Days ToDie', 'Survival', 'Ps4', '2016', 'The Fun Pimps'),
(16, 'Absolvers', 'Rpg', 'Ps4', '2017', 'Sloclap'),
(17, 'AIPD', 'Shooter', 'Ps4', '2016', 'Blazing'),
(18, 'Airport Arc', 'Simulation', 'Ps4', '2016', 'UIG Ent.'),
(19, 'Aqua Moto', 'Racing', 'Ps4', '2017', 'Zordix');
