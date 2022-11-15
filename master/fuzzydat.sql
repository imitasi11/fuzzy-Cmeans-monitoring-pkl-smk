-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02 Agu 2019 pada 11.26
-- Versi Server: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fuzzydat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `No_B` int(11) NOT NULL AUTO_INCREMENT,
  `Tgl_Data` date NOT NULL,
  `Jual` int(11) NOT NULL,
  `Sisa` int(11) NOT NULL,
  `Order2` int(11) NOT NULL,
  `Stok` int(11) NOT NULL,
  `Ordernew` int(11) NOT NULL,
  PRIMARY KEY (`No_B`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`No_B`, `Tgl_Data`, `Jual`, `Sisa`, `Order2`, `Stok`, `Ordernew`) VALUES
(1, '2019-05-07', 1200, 100, 1300, 0, 0),
(2, '2019-05-15', 943, 157, 1000, 100, 0),
(3, '2019-08-01', 500, 200, 543, 157, 0),
(4, '2019-08-02', 500, 700, 1000, 200, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `hasil`
--

CREATE TABLE IF NOT EXISTS `hasil` (
  `No_B` int(11) NOT NULL,
  `Riil` int(11) NOT NULL,
  `Fuzzy` int(11) NOT NULL,
  PRIMARY KEY (`No_B`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `hasil`
--

INSERT INTO `hasil` (`No_B`, `Riil`, `Fuzzy`) VALUES
(1, 1300, 0),
(2, 1000, 904),
(3, 543, 845),
(4, 1000, 699);

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfix`
--

CREATE TABLE IF NOT EXISTS `konfix` (
  `order_r` int(11) NOT NULL,
  `order_min` int(11) NOT NULL,
  `order_max` int(11) NOT NULL,
  `jual_r` int(11) NOT NULL,
  `jual_min` int(11) NOT NULL,
  `jual_max` int(11) NOT NULL,
  `stok_r` int(11) NOT NULL,
  `stok_min` int(11) NOT NULL,
  `stok_max` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfix`
--

INSERT INTO `konfix` (`order_r`, `order_min`, `order_max`, `jual_r`, `jual_min`, `jual_max`, `stok_r`, `stok_min`, `stok_max`) VALUES
(600, 500, 1300, 600, 500, 1200, 200, 5, 200);

-- --------------------------------------------------------

--
-- Struktur dari tabel `login1`
--

CREATE TABLE IF NOT EXISTS `login1` (
  `Nourut` int(11) NOT NULL AUTO_INCREMENT,
  `Userid` varchar(50) NOT NULL,
  `statuser` int(11) NOT NULL,
  `pass1` varchar(8) NOT NULL,
  `pass2` varchar(8) NOT NULL,
  PRIMARY KEY (`Nourut`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `login1`
--

INSERT INTO `login1` (`Nourut`, `Userid`, `statuser`, `pass1`, `pass2`) VALUES
(1, 'owner', 1, '12345678', '12345678'),
(2, 'Koki', 2, 'koki1234', 'koki1234');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
