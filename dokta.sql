-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2018 at 05:26 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dokta`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `nipus` varchar(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bidang_ilmu`
--

CREATE TABLE `bidang_ilmu` (
  `id` int(11) NOT NULL,
  `namaBidang` varchar(35) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(15) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `email` varchar(35) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(35) DEFAULT NULL,
  `jurusan` varchar(25) DEFAULT NULL,
  `angkatan` int(4) DEFAULT NULL,
  `email` varchar(35) DEFAULT NULL,
  `noHp` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `id` int(11) NOT NULL,
  `idBidangIlmu` int(11) NOT NULL,
  `namaSubjek` varchar(35) NOT NULL,
  `deskripsi` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tanda_terima_ta`
--

CREATE TABLE `tanda_terima_ta` (
  `nim` varchar(15) NOT NULL,
  `nipus` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `nama` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `id` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `idBidangIlmu` int(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `tahun` int(4) NOT NULL,
  `dosenPembimbing1` varchar(15) NOT NULL,
  `dosenPembimbing2` varchar(15) NOT NULL,
  `abstrak` text NOT NULL,
  `dokumenPDF` varchar(50) NOT NULL,
  `status` enum('confirmed','reject') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(32) NOT NULL,
  `role` enum('Mahasiswa','Admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `role`) VALUES
('09021181520023', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520025', '89486881ff40c7ac9930f73811091fda', 'Admin'),
('09021281520103', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nipus`);

--
-- Indexes for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `subjek`
--
ALTER TABLE `subjek`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idBidangIlmu` (`idBidangIlmu`);

--
-- Indexes for table `tanda_terima_ta`
--
ALTER TABLE `tanda_terima_ta`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `nipus` (`nipus`);

--
-- Indexes for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nim` (`nim`),
  ADD KEY `idBidangIlmu` (`idBidangIlmu`),
  ADD KEY `dosenPembimbing1` (`dosenPembimbing1`),
  ADD KEY `dosenPembimbing2` (`dosenPembimbing2`),
  ADD KEY `idBidangIlmu_2` (`idBidangIlmu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjek`
--
ALTER TABLE `subjek`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bidang_ilmu`
--
ALTER TABLE `bidang_ilmu`
  ADD CONSTRAINT `bidang_ilmu_ibfk_1` FOREIGN KEY (`id`) REFERENCES `tugas_akhir` (`idBidangIlmu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjek`
--
ALTER TABLE `subjek`
  ADD CONSTRAINT `subjek_ibfk_1` FOREIGN KEY (`idBidangIlmu`) REFERENCES `bidang_ilmu` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tanda_terima_ta`
--
ALTER TABLE `tanda_terima_ta`
  ADD CONSTRAINT `tanda_terima_ta_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `admin` (`nipus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_akhir_ibfk_2` FOREIGN KEY (`dosenPembimbing1`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tugas_akhir_ibfk_3` FOREIGN KEY (`dosenPembimbing2`) REFERENCES `dosen` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
