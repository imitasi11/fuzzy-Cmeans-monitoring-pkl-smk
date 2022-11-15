-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 29, 2021 at 12:17 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cmeansdat`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `nama` varchar(30) NOT NULL,
  `NIK` int(11) NOT NULL,
  `NISN` int(11) NOT NULL,
  `Alamat` varchar(100) NOT NULL,
  `Jeniskelamin` int(11) NOT NULL,
  `tempatlahir` int(11) NOT NULL,
  `tanggallahir` varchar(15) NOT NULL,
  `nohp` varchar(50) NOT NULL,
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `konfix`
--

CREATE TABLE IF NOT EXISTS `konfix` (
  `Iterasi` float NOT NULL,
  `Bobot` float NOT NULL,
  `Eps` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfix`
--

INSERT INTO `konfix` (`Iterasi`, `Bobot`, `Eps`) VALUES
(7, 500, 0.001);

-- --------------------------------------------------------

--
-- Table structure for table `lrandom`
--

CREATE TABLE IF NOT EXISTS `lrandom` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nik` int(11) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3089 ;

-- --------------------------------------------------------

--
-- Table structure for table `mrandom`
--

CREATE TABLE IF NOT EXISTS `mrandom` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2954 ;

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE IF NOT EXISTS `random` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nik` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=188 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbclustering`
--

CREATE TABLE IF NOT EXISTS `tbclustering` (
  `idcluster` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `hasil` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idcluster`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=100 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbline`
--

CREATE TABLE IF NOT EXISTS `tbline` (
  `idline` int(3) NOT NULL AUTO_INCREMENT,
  `nmline` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`idline`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbline`
--

INSERT INTO `tbline` (`idline`, `nmline`) VALUES
(1, 'line 1');

-- --------------------------------------------------------

--
-- Table structure for table `tbtesting`
--

CREATE TABLE IF NOT EXISTS `tbtesting` (
  `idtesting` int(10) NOT NULL AUTO_INCREMENT,
  `tahun` varchar(4) DEFAULT NULL,
  `nik` int(11) DEFAULT NULL,
  `jml_mangkir` float DEFAULT NULL,
  `sp` float DEFAULT NULL,
  `masa_kerja` float DEFAULT NULL,
  PRIMARY KEY (`idtesting`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=13 ;

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE IF NOT EXISTS `tbusers` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`username`, `pass`, `level`) VALUES
('admin', '80177534a0c99a7e3645b52f2027a48b', 'Admin'),
('pim', 'a5634c55503681032c9c5433237a86cf', 'Pimpinan');

-- --------------------------------------------------------

--
-- Table structure for table `t_akhir`
--

CREATE TABLE IF NOT EXISTS `t_akhir` (
  `iterasi` int(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

--
-- Dumping data for table `t_akhir`
--

INSERT INTO `t_akhir` (`iterasi`) VALUES
(1),
(2),
(3),
(4),
(5),
(6),
(7),
(8),
(9),
(10);

-- --------------------------------------------------------

--
-- Table structure for table `t_centroid_p1`
--

CREATE TABLE IF NOT EXISTS `t_centroid_p1` (
  `iterasi` varchar(3) DEFAULT NULL,
  `nik` varchar(6) DEFAULT NULL,
  `u1_w` decimal(10,8) DEFAULT NULL,
  `u2_w` decimal(10,8) DEFAULT NULL,
  `u3_w` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_centroid_p2`
--

CREATE TABLE IF NOT EXISTS `t_centroid_p2` (
  `iterasi` varchar(3) DEFAULT NULL,
  `nik` varchar(6) DEFAULT NULL,
  `u1_wa1` decimal(10,8) DEFAULT NULL,
  `u1_wa2` decimal(10,8) DEFAULT NULL,
  `u1_wa3` decimal(10,8) DEFAULT NULL,
  `u2_wa1` decimal(10,8) DEFAULT NULL,
  `u2_wa2` decimal(10,8) DEFAULT NULL,
  `u2_wa3` decimal(10,8) DEFAULT NULL,
  `u3_wa1` decimal(10,8) DEFAULT NULL,
  `u3_wa2` decimal(10,8) DEFAULT NULL,
  `u3_wa3` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_matrik_partisi`
--

CREATE TABLE IF NOT EXISTS `t_matrik_partisi` (
  `iterasi` varchar(3) DEFAULT NULL,
  `nik` varchar(6) DEFAULT NULL,
  `c1` decimal(10,8) DEFAULT NULL,
  `c2` decimal(10,8) DEFAULT NULL,
  `c3` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `t_objective`
--

CREATE TABLE IF NOT EXISTS `t_objective` (
  `iterasi` varchar(3) DEFAULT NULL,
  `nik` varchar(6) DEFAULT NULL,
  `h1` decimal(10,8) DEFAULT NULL,
  `h2` decimal(10,8) DEFAULT NULL,
  `h3` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
