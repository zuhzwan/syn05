-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 08, 2015 at 05:26 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lab`
--

-- --------------------------------------------------------

--
-- Table structure for table `sn_pasien`
--

CREATE TABLE IF NOT EXISTS `sn_pasien` (
  `id_pasien` int(50) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(50) NOT NULL,
  `alamat_pasien` varchar(100) NOT NULL,
  `reg_pasien` varchar(50) NOT NULL,
  `umur_pasien` varchar(50) NOT NULL,
  `jenis_pasien` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sn_pasien`
--

INSERT INTO `sn_pasien` (`id_pasien`, `nama_pasien`, `alamat_pasien`, `reg_pasien`, `umur_pasien`, `jenis_pasien`, `tanggal`) VALUES
(7, 'Arini Mursidah', 'Sambogununjg', '234', '22', 'Umum', '2015-12-07'),
(6, 'Syaiful Nazar', 'Sambogununjg', '34589', '20', 'Umum', '2015-12-07'),
(8, 'Anim', 'Sambo', '2340', '18', 'Jamkesmas', '2015-12-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
