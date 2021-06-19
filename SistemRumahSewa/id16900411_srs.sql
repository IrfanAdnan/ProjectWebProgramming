-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 19, 2021 at 11:50 AM
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
(2, 102, 'Zamri ishak', '0133133159', 21, 'lelaki'),
(3, 103, 'Ran A/L E ekrap', '01111258158', 21, 'perempuan'),
(1, 117, 'Adnan', '012345646', 50, 'lelaki'),
(1, 122, 'hanif ', '0163011804', 25, 'lelaki');

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
(1, '101', 0, 'irfan', 'irfan bin adnan', 'Adnan', 0, '0169344011', 'irfanadnan.business@gmail.com', '$2y$10$qC7JE3btRORCuGgpBwHEieQEMHxugOvly7W/N74/35cFP99n8cni6'),
(2, '102', 1, 'suhaida', 'nurzatul suhaida', 'Zamri ishak', 1, '0133133159', 'zatulsuhaida98@gmail.com', '$2y$10$4OkEILYyZGPlU5OcVZboj.iHHWlBPHhIDhKxDT9wBBn.KHp9frs3u'),
(3, '103', 2, 'merisa', 'merisa a/p ran', 'Ran A/L E ekrap', 2, '01111258158', 'merisanik00@gmail.com', '$2y$10$XJa2fwrASLP1S/0QDHTVReBXQu.v9O/s2VyGxfcsVjBy.Ny9A62g6');

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
(0, 6, 'banglo', 500),
(1, 4, 'teres', 300),
(4, 4, 'banglo', 600),
(10, 8, 'banglo', 700);

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
  MODIFY `idkeluarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rumah`
--
ALTER TABLE `rumah`
  MODIFY `idrumah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

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
