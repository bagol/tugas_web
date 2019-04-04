-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 05, 2019 at 01:10 AM
-- Server version: 10.0.38-MariaDB-0ubuntu0.16.04.1
-- PHP Version: 7.2.16-1+ubuntu16.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kampus_Mulyadih`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kode_matakuliah` varchar(11) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_tlpn` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `kode_matakuliah`, `alamat`, `no_tlpn`) VALUES
('0310087303', 'Kartika Sekarsari', '0003', 'Jl Hidup', '085274942'),
('0405107605', 'Nur Rofiq', '0004', 'Jl Heran', '082525253'),
('0409067203', 'Endang Ruhayat', '0002', 'Jl Kemana', '08762921411'),
('0410106502', 'Maswarni', '0005', 'Jl Kita', '086995353'),
('0413018602', 'Ahmad Fikri Zakaria', '0001', 'Jl Baru', '084714771');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `kode_matakuliah` varchar(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `sks` int(1) NOT NULL,
  `semester` int(2) NOT NULL,
  `fakultas` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`kode_matakuliah`, `nama`, `sks`, `semester`, `fakultas`) VALUES
('MK001', 'Pemrograman Web 1', 2, 5, 'Teknik Informatika'),
('MK002', 'Pemrograman 2', 3, 5, 'Teknik Informartika'),
('MK003', 'Artificial Intellegence', 3, 6, 'Teknik Informatika'),
('MK004', 'Teknik Riset Operasional', 2, 5, 'Teknik Informartika'),
('MK005', 'Jaringan Komputer', 3, 2, 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `tanggal_lahir`, `alamat`, `jenis_kelamin`) VALUES
('2016140234', 'Bagas Kurniawan', '1998-08-18', 'Jl Cendrawasih Raya', 'Pria'),
('2016141010', 'Mulyadih', '1998-07-04', 'Jl.Rawa Sari 01 Cipayung Depok', 'pria'),
('2016141192', 'Yudhistira Adjie Ramadhani', '1998-01-17', 'Jl Bhayangkara E27 No.1', 'pria'),
('2016141203', 'Dicky Muladi', '1998-03-15', 'Taman Fasco Blok A9/19', 'pria'),
('2016141379', 'Rian hadi dwi cahya', '1997-11-10', 'Jl. alam asri raya blok k no.59 villa dago pamulang', 'pria');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`kode_matakuliah`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
