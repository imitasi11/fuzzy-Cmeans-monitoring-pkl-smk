-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2019 at 07:58 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kmeans_dat`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `No_B` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_Barang` varchar(15) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Satuan` varchar(10) NOT NULL,
  `Jenis` varchar(30) NOT NULL,
  `Area_P` varchar(100) NOT NULL,
  `minjual` int(11) NOT NULL,
  PRIMARY KEY (`No_B`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`No_B`, `Kode_Barang`, `Nama_Barang`, `Satuan`, `Jenis`, `Area_P`, `minjual`) VALUES
(2, '001', 'Tolak angin sachet', 'strip', 'kapsul', 'karanganyar', 20);

-- --------------------------------------------------------

--
-- Table structure for table `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `Kode_Barang` varchar(15) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `C1` float NOT NULL,
  `C2` float NOT NULL,
  `C3` float NOT NULL,
  `C4` float NOT NULL,
  `Iterasi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `monitoring`
--

CREATE TABLE IF NOT EXISTS `monitoring` (
  `Kode_Barang` varchar(15) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Cluster` varchar(10) NOT NULL,
  `Keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `No_P` int(11) NOT NULL AUTO_INCREMENT,
  `Kode_Barang` varchar(15) NOT NULL,
  `Nama_Barang` varchar(30) NOT NULL,
  `Bulan_1` float NOT NULL,
  `Bulan_2` float NOT NULL,
  PRIMARY KEY (`No_P`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`No_P`, `Kode_Barang`, `Nama_Barang`, `Bulan_1`, `Bulan_2`) VALUES
(1, '001', 'Tolak angin sachet', 100, 150);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
