-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2022 at 05:14 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_ti`
--

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  `nilai_tugas` varchar(20) NOT NULL,
  `nilai_quis` varchar(20) NOT NULL,
  `nilai_uts` varchar(20) NOT NULL,
  `nilai_uas` varchar(20) NOT NULL,
  `total` varchar(20) NOT NULL,
  `grade` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `alamat`, `agama`, `no_telepon`, `nilai_tugas`, `nilai_quis`, `nilai_uts`, `nilai_uas`, `total`, `grade`) VALUES
(123457, 'afif', 'woro', 'ortodoks', '0895628784', '1600', '1600', '1975', '2000', '7175', 'A'),
(192873, 'Kentuuwu', 'yoera', 'islam', '02938465', '80', '87', '82', '80', '82.25', 'A'),
(12345543, 'kentos genjos', 'waluyuto', 'protestan', '01928776', '80', '80', '82', '80', '80.5', 'A'),
(12345554, 'udinaniah', 'qwerty', 'islam', '08956287554', '80', '87', '82', '77', '81.5', 'A'),
(20025678, 'oden afifah', 'waluyojati', 'ortodoks', '1234567890', '16', '17.4', '19.5', '20', '18.225', 'E'),
(200201024, 'ken putri surani', 'gadingrejo', 'islam', '0895628784', '80', '80', '82', '77', '80', 'B'),
(200201027, 'ahmad taufik', 'tanggamus', 'islam', '0897654321', '15.4', '16', '20.5', '20', '71.9', 'B'),
(200201080, 'yogi saputra', 'tanggamus', 'protestan', '0897654321', '16', '17.4', '19.75', '20', '79', 'B'),
(1234567877, 'udinah', 'woroyu', 'protestan', '12345678901', '77', '87', '80', '80', '324', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mhs`
--
ALTER TABLE `mhs`
  MODIFY `nim` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1234567878;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
