-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2018 at 08:43 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `akdm`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_kelas`
--

CREATE TABLE IF NOT EXISTS `detail_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nim` varchar(11) NOT NULL,
  `angkatan` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_kelas`
--

INSERT INTO `detail_kelas` (`id_kelas`, `nim`, `angkatan`) VALUES
(2, '2000', '2014'),
(2, '1001', '2014'),
(3, '1001', '2016'),
(3, '2000', '2017'),
(4, '1001', '2017'),
(4, '2000', '2017');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `alamat`, `foto`) VALUES
('1001', 'Totok', 'Yogyakarta', 'Tulips.jpg'),
('2000', 'COKY', 'JAKARTA', 'Koala.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `master_kelas`
--

CREATE TABLE IF NOT EXISTS `master_kelas` (
  `nama_kelas` varchar(15) NOT NULL,
  `nama_matakuliah` varchar(25) NOT NULL,
  `jadwal` varchar(25) NOT NULL,
  `id_kelas` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id_kelas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `master_kelas`
--

INSERT INTO `master_kelas` (`nama_kelas`, `nama_matakuliah`, `jadwal`, `id_kelas`) VALUES
('S.2.2', 'basis data', 'selasa, 14.00', 2),
('U.2.1', 'bahasa Inggris', 'rabu, 08.00', 3),
('lab basis data', 'praktik web', 'kamis, 13.00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `matakuliah` varchar(100) NOT NULL,
  `sks` int(1) NOT NULL,
  `nilai_huruf` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
