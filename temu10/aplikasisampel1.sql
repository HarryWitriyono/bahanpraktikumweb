-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2024 at 04:48 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aplikasisampel1`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `KodeLogin` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`KodeLogin`, `Password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `npm` char(10) NOT NULL,
  `namamahasiswa` varchar(30) NOT NULL,
  `sex` char(1) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggallahir` date NOT NULL,
  `alamat` text NOT NULL,
  `kodeprodi` char(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`npm`, `namamahasiswa`, `sex`, `tempatlahir`, `tanggallahir`, `alamat`, `kodeprodi`) VALUES
('1234567890', 'Udin Sedunia', 'L', 'Bengkulu', '1969-12-10', '	  Tes Alamat', '12345'),
('2055201016', 'Astri Yunika', 'P', 'Talang Rasau', '2001-11-05', '	  Jl. Raya Lais, Ds. Talang Rasau, Kab. Bengkulu Utara	  	  	  	  	  	  	  	  	  	  ', '55201'),
('2055201027', 'Melinia Safitri', 'P', 'BOGOR', '2000-11-04', 'Desa.Tanjung Besar kec.Kaur Selatan kab. Kaur', '55201'),
('2155201059', 'MUHFI SYAHRIAL', 'L', 'Napal Putih', '2001-04-23', 'Jl. Poros Pangeran Ali No.12 RT.01/RW.02 Kel. Napal Putih, Kec. Napal Putih, Kab. Bengkulu Utara 36388', '55201'),
('2155201132', 'TIARA AYU LESTARI', 'P', 'Bengkulu', '2002-05-23', 'Jalan Surabaya Permai RT.10 / RW 2 No.4, Perumnas Surabaya Permai', '55201'),
('2257201003', 'WIDYA ARIYANTI', 'P', 'NAPAL PUTIH', '2003-11-26', 'Desa Napal putih, kec. Napal putih, kab. Bengkulu Utara, bengkulu	  ', '57201'),
('2257201006', 'CALVIN LEORENZA', 'L', 'TALANG ALAI', '2003-03-30', 'Jl.Raya Kelutum Simpang Pino Km.13 Kel. Kembang Seri Kec Pino Raya', '57201'),
('2345678901', 'Mhsw Tes', 'P', 'Bengkulu', '0000-00-00', 'tes', '55201');

-- --------------------------------------------------------

--
-- Table structure for table `prodi`
--

CREATE TABLE `prodi` (
  `kodeprodi` char(5) NOT NULL,
  `namaprodi` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prodi`
--

INSERT INTO `prodi` (`kodeprodi`, `namaprodi`) VALUES
('12345', 'tes'),
('55201', 'Teknik Informatika'),
('57201', 'Sistem Informasi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`KodeLogin`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `kodeprodi` (`kodeprodi`);

--
-- Indexes for table `prodi`
--
ALTER TABLE `prodi`
  ADD PRIMARY KEY (`kodeprodi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`kodeprodi`) REFERENCES `prodi` (`kodeprodi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
