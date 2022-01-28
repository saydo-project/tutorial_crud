-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 07:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `himatika`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_himatika`
--

CREATE TABLE `tb_himatika` (
  `id` int(5) NOT NULL,
  `nama_mahasiswa` varchar(55) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `NIM` varchar(10) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `divisi` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_himatika`
--

INSERT INTO `tb_himatika` (`id`, `nama_mahasiswa`, `tanggal_lahir`, `NIM`, `jurusan`, `agama`, `divisi`, `status`) VALUES
(19, 'Sayid Ridho', '2002-11-23', '2011020', 'Informatika', 'Islam', 'divisi Intelektual minat dan bakat', 'Anggota'),
(20, 'Bayu Yudha Pratama', '2002-08-26', '2011033', 'Informatika', 'Islam', 'divisi Pendidikan', 'Ketua');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_himatika`
--
ALTER TABLE `tb_himatika`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_himatika`
--
ALTER TABLE `tb_himatika`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
