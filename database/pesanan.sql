-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 03:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pesanan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pes`
--

CREATE TABLE `tb_pes` (
  `kode_booking` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tgl_p` date NOT NULL,
  `tgl_b` date NOT NULL,
  `kd_type` varchar(30) NOT NULL,
  `kd_tujuan` varchar(30) NOT NULL,
  `kd_pesawat` varchar(21) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pes`
--

INSERT INTO `tb_pes` (`kode_booking`, `nama`, `tgl_p`, `tgl_b`, `kd_type`, `kd_tujuan`, `kd_pesawat`) VALUES
('02', 'Gusti', '2023-12-22', '2023-12-22', 'T01', '1', 'E01'),
('09', 'jamilu', '2023-12-22', '2023-12-14', 'T04', '2', 'E02');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesawat`
--

CREATE TABLE `tb_pesawat` (
  `kd_pesawat` varchar(21) NOT NULL,
  `pesawat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_pesawat`
--

INSERT INTO `tb_pesawat` (`kd_pesawat`, `pesawat`) VALUES
('E01', 'Lion Air'),
('E02', 'Batik Air');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tujuan`
--

CREATE TABLE `tb_tujuan` (
  `kd_tujuan` varchar(30) NOT NULL,
  `tujuan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_tujuan`
--

INSERT INTO `tb_tujuan` (`kd_tujuan`, `tujuan`) VALUES
('1', 'Jakarta-Bandung'),
('2', 'Banjarmasin-Jawa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_type`
--

CREATE TABLE `tb_type` (
  `kd_type` varchar(21) NOT NULL,
  `type` varchar(30) NOT NULL,
  `harga` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_type`
--

INSERT INTO `tb_type` (`kd_type`, `type`, `harga`) VALUES
('T01', 'Ekonomi', '2.000.000'),
('T02', 'Ekonomi Premium', '2.500.000'),
('T03', 'Business Class', '8.000.000'),
('T04', 'First Class', '210.000.000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pes`
--
ALTER TABLE `tb_pes`
  ADD PRIMARY KEY (`kode_booking`),
  ADD KEY `kd_tujuan` (`kd_tujuan`),
  ADD KEY `kd_type` (`kd_type`),
  ADD KEY `kd_pesawat` (`kd_pesawat`);

--
-- Indexes for table `tb_pesawat`
--
ALTER TABLE `tb_pesawat`
  ADD PRIMARY KEY (`kd_pesawat`);

--
-- Indexes for table `tb_tujuan`
--
ALTER TABLE `tb_tujuan`
  ADD PRIMARY KEY (`kd_tujuan`);

--
-- Indexes for table `tb_type`
--
ALTER TABLE `tb_type`
  ADD PRIMARY KEY (`kd_type`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pes`
--
ALTER TABLE `tb_pes`
  ADD CONSTRAINT `tb_pes_ibfk_1` FOREIGN KEY (`kd_pesawat`) REFERENCES `tb_pesawat` (`kd_pesawat`),
  ADD CONSTRAINT `tb_pes_ibfk_2` FOREIGN KEY (`kd_type`) REFERENCES `tb_type` (`kd_type`),
  ADD CONSTRAINT `tb_pes_ibfk_3` FOREIGN KEY (`kd_tujuan`) REFERENCES `tb_tujuan` (`kd_tujuan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
