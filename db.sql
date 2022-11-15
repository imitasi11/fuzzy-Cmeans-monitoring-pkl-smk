-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 12:54 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `daftar`
--

CREATE TABLE IF NOT EXISTS `daftar` (
  `nama` varchar(30) DEFAULT NULL,
  `NIS` varchar(35) DEFAULT NULL,
  `NISN` varchar(20) DEFAULT NULL,
  `namadudi` varchar(100) DEFAULT NULL,
  `Jeniskelamin` varchar(15) DEFAULT NULL,
  `alamatdudi` varchar(20) DEFAULT NULL,
  `tanggallahir` date DEFAULT NULL,
  `kelas` varchar(50) DEFAULT NULL,
  `kode` int(11) NOT NULL AUTO_INCREMENT,
  `jurusan` varchar(30) NOT NULL,
  PRIMARY KEY (`kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `daftar`
--

INSERT INTO `daftar` (`nama`, `NIS`, `NISN`, `namadudi`, `Jeniskelamin`, `alamatdudi`, `tanggallahir`, `kelas`, `kode`, `jurusan`) VALUES
('AGUNG SETIADI', '16006033', '0010450898', 'Universitas Sahid Surakarta', 'Laki-Laki', 'Jl. Adisucipto No. 1', NULL, 'XII', 14, 'TKJ'),
('ALFIAN AGUNG SAPUTRO ', '16006034', '0002975814', 'Solo Radio 92,9 FM', 'Laki-Laki', 'Jl. Menteri Supeno M', NULL, 'XII', 15, 'TKJ');

-- --------------------------------------------------------

--
-- Table structure for table `konfix`
--

CREATE TABLE IF NOT EXISTS `konfix` (
  `Kode` int(11) NOT NULL AUTO_INCREMENT,
  `Iterasi` float NOT NULL,
  `Bobot` float NOT NULL,
  `Eps` float NOT NULL,
  PRIMARY KEY (`Kode`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `konfix`
--

INSERT INTO `konfix` (`Kode`, `Iterasi`, `Bobot`, `Eps`) VALUES
(2, 100, 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `lrandom`
--

CREATE TABLE IF NOT EXISTS `lrandom` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=309 ;

--
-- Dumping data for table `lrandom`
--

INSERT INTO `lrandom` (`idrandom`, `nama`, `nis`, `C1`, `C2`, `C3`) VALUES
(307, 'AGUNG SETIADI', '16006033', 0.333333, 0.333333, 0.333333),
(308, 'ALFIAN AGUNG SAPUTRO ', '16006034', 0.333333, 0.333333, 0.333333);

-- --------------------------------------------------------

--
-- Table structure for table `mrandom`
--

CREATE TABLE IF NOT EXISTS `mrandom` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=309 ;

--
-- Dumping data for table `mrandom`
--

INSERT INTO `mrandom` (`idrandom`, `nis`, `nama`, `C1`, `C2`, `C3`) VALUES
(307, '16006033', 'AGUNG SETIADI', 0.333333, 0.333333, 0.333333),
(308, '16006034', 'ALFIAN AGUNG SAPUTRO ', 0.333333, 0.333333, 0.333333);

-- --------------------------------------------------------

--
-- Table structure for table `random`
--

CREATE TABLE IF NOT EXISTS `random` (
  `idrandom` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  PRIMARY KEY (`idrandom`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=24 ;

--
-- Dumping data for table `random`
--

INSERT INTO `random` (`idrandom`, `nis`, `nama`, `C1`, `C2`, `C3`) VALUES
(22, '16006033', 'AGUNG SETIADI', 0.325, 0.375, 0.3),
(23, '16006034', 'ALFIAN AGUNG SAPUTRO ', 0.35, 0.4, 0.25);

-- --------------------------------------------------------

--
-- Table structure for table `tbclustering`
--

CREATE TABLE IF NOT EXISTS `tbclustering` (
  `idcluster` int(10) NOT NULL AUTO_INCREMENT,
  `tanggal` date DEFAULT NULL,
  `tahun` varchar(4) DEFAULT NULL,
  `nis` int(11) DEFAULT NULL,
  `hasil` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`idcluster`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=1 ;

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
  `nis` varchar(30) DEFAULT NULL,
  `nama` varchar(30) NOT NULL,
  `absensi` float DEFAULT NULL,
  `tugas` float DEFAULT NULL,
  PRIMARY KEY (`idtesting`) USING BTREE
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC AUTO_INCREMENT=16 ;

--
-- Dumping data for table `tbtesting`
--

INSERT INTO `tbtesting` (`idtesting`, `nis`, `nama`, `absensi`, `tugas`) VALUES
(14, '16006033', 'AGUNG SETIADI', 65, 75),
(15, '16006034', 'ALFIAN AGUNG SAPUTRO ', 70, 80);

-- --------------------------------------------------------

--
-- Table structure for table `tbusers`
--

CREATE TABLE IF NOT EXISTS `tbusers` (
  `username` varchar(10) NOT NULL,
  `pass` varchar(255) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  PRIMARY KEY (`username`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `tbusers`
--

INSERT INTO `tbusers` (`username`, `pass`, `level`) VALUES
('Admin', '12345678', 1);

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
  `nis` varchar(6) DEFAULT NULL,
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
  `nis` varchar(6) DEFAULT NULL,
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
  `nis` varchar(6) DEFAULT NULL,
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
  `nis` varchar(6) DEFAULT NULL,
  `h1` decimal(10,8) DEFAULT NULL,
  `h2` decimal(10,8) DEFAULT NULL,
  `h3` decimal(10,8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 ROW_FORMAT=DYNAMIC;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
