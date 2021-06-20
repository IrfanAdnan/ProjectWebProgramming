-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 20, 2021 at 05:24 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id16900411_srs`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `PassAdmin` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`PassAdmin`) VALUES
('$2y$10$iLIBL5M5j0Omeh89prdBDOGT5s.yYWJUj58PhNoRfoQgPSK8BTdqm');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE `keluarga` (
  `idpelanggan` int(11) NOT NULL,
  `idkeluarga` int(11) NOT NULL,
  `namaAhliKeluarga` varchar(20) NOT NULL,
  `noTel` varchar(20) NOT NULL,
  `Umur` int(11) NOT NULL,
  `Jantina` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`idpelanggan`, `idkeluarga`, `namaAhliKeluarga`, `noTel`, `Umur`, `Jantina`) VALUES
(3, 125, 'merisa', '01111258158', 21, 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `PassManager` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`PassManager`) VALUES
('$2y$10$iLIBL5M5j0Omeh89prdBDOGT5s.yYWJUj58PhNoRfoQgPSK8BTdqm');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` int(11) NOT NULL,
  `idkeluarga` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idrumah` int(11) NOT NULL,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `namapelanggan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `namaAhliKeluarga` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `noRumah` int(11) NOT NULL,
  `noTelPelanggan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `idkeluarga`, `idrumah`, `nama`, `namapelanggan`, `namaAhliKeluarga`, `noRumah`, `noTelPelanggan`, `email`, `password`) VALUES
(1, '101', 0, 'irfan', 'irfan bin adnan', 'Adnan', 1, '0169344011', 'irfanadnan.business@gmail.com', '$2y$10$45vIt7AK8Kvf8CNsVZx52.y63zKYWC0fLELHZiVlo6Vzfaia988RS'),
(2, '102', 1, 'suhaida', 'nurzatul suhaida', 'Zamri ishak', 1, '0133133159', 'zatulsuhaida98@gmail.com', '$2y$10$0/8PQo4Dd.DtbFf9iqDcfe8OfjK6mA4HMWhD5mz9LUhUOvT4qf5Iq'),
(3, '103', 2, 'merisa', 'merisa A/L ekrap', 'ekrap', 2, '01111258158', 'merisanik00@gmail.com', '$2y$10$2Z35c2LA9P6qIkhpoe9mj.9UB66lrQpYa5pTohl6Rwv0XpGhrpfla');

-- --------------------------------------------------------

--
-- Table structure for table `rumah`
--

CREATE TABLE `rumah` (
  `idrumah` int(11) NOT NULL,
  `jumlahBilik` int(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rumah`
--

INSERT INTO `rumah` (`idrumah`, `jumlahBilik`, `model`, `harga`) VALUES
(12, 2, 'teres', 700),
(13, 6, 'teres', 400),
(15, 5, 'condo', 6700);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD PRIMARY KEY (`idkeluarga`),
  ADD KEY `integer` (`idpelanggan`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`),
  ADD KEY `idrumah` (`idrumah`);

--
-- Indexes for table `rumah`
--
ALTER TABLE `rumah`
  ADD PRIMARY KEY (`idrumah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `keluarga`
--
ALTER TABLE `keluarga`
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `idrumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `keluarga`
--
ALTER TABLE `keluarga`
  ADD CONSTRAINT `keluarga_ibfk_1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idPelanggan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
