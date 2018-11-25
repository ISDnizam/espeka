-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2018 at 05:37 PM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbspk`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nama_karyawan` varchar(255) NOT NULL,
  `nilai_karyawan` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `nilai_karyawan`) VALUES
(7, 'Agus-Slyvi', 395.555555555556),
(8, 'Anies-Sandiaga', 377.5),
(9, 'Ahok-Djarot', 359.16666666666697);

-- --------------------------------------------------------

--
-- Table structure for table `kriteria`
--

CREATE TABLE `kriteria` (
  `id_kriteria` int(11) NOT NULL,
  `nama_kriteria` varchar(255) NOT NULL,
  `tipe_kriteria` varchar(10) NOT NULL,
  `bobot_kriteria` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kriteria`
--

INSERT INTO `kriteria` (`id_kriteria`, `nama_kriteria`, `tipe_kriteria`, `bobot_kriteria`) VALUES
(7, 'Kepemimpinan', 'benefit', 90),
(8, 'Kewibawaan', 'benefit', 85),
(9, 'Moral', 'benefit', 90),
(10, 'Pendidikan', 'benefit', 80),
(11, 'KKN', 'cost', 60),
(12, 'Umur', 'cost', 70);

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id_nilai` int(6) NOT NULL,
  `ket_nilai` varchar(45) NOT NULL,
  `jum_nilai` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `ket_nilai`, `jum_nilai`) VALUES
(7, 'Baik', 80),
(9, 'Sangat Baik', 90),
(11, 'Cukup Baik', 70),
(12, 'Buruk', 60);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_lengkap`, `username`, `password`) VALUES
(1, 'Nizam', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `rangking`
--

CREATE TABLE `rangking` (
  `id_karyawan` int(11) NOT NULL,
  `id_kriteria` int(11) NOT NULL,
  `nilai_rangking` double NOT NULL,
  `nilai_normalisasi` double NOT NULL,
  `bobot_normalisasi` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rangking`
--

INSERT INTO `rangking` (`id_karyawan`, `id_kriteria`, `nilai_rangking`, `nilai_normalisasi`, `bobot_normalisasi`) VALUES
(7, 7, 70, 0.77777777777778, 70),
(7, 8, 80, 0.88888888888889, 75.555555555556),
(7, 9, 90, 1, 90),
(7, 10, 90, 1, 80),
(7, 11, 70, 1, 60),
(7, 12, 70, 1, 70),
(8, 7, 80, 0.88888888888889, 80),
(8, 8, 90, 1, 85),
(8, 9, 80, 0.88888888888889, 80),
(8, 10, 90, 1, 80),
(8, 11, 80, 0.875, 52.5),
(8, 12, 70, 1, 70),
(9, 7, 90, 1, 90),
(9, 8, 80, 0.88888888888889, 75.555555555556),
(9, 9, 70, 0.77777777777778, 70),
(9, 10, 80, 0.88888888888889, 71.111111111111),
(9, 11, 80, 0.875, 52.5),
(9, 12, 70, 1, 70);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kriteria`
--
ALTER TABLE `kriteria`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indexes for table `rangking`
--
ALTER TABLE `rangking`
  ADD PRIMARY KEY (`id_karyawan`,`id_kriteria`),
  ADD KEY `id_kriteria` (`id_kriteria`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kriteria`
--
ALTER TABLE `kriteria`
  MODIFY `id_kriteria` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rangking`
--
ALTER TABLE `rangking`
  ADD CONSTRAINT `rangking_ibfk_1` FOREIGN KEY (`id_karyawan`) REFERENCES `karyawan` (`id_karyawan`),
  ADD CONSTRAINT `rangking_ibfk_2` FOREIGN KEY (`id_kriteria`) REFERENCES `kriteria` (`id_kriteria`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
