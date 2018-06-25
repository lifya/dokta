-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2018 at 01:38 AM
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

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`nipus`, `nama`, `email`, `alamat`) VALUES
('09021181520025', 'Pipit Kurniasari', 'pipit kurnia sari', 'jln blitanf');

-- --------------------------------------------------------

--
-- Table structure for table `bidang_ilmu`
--

CREATE TABLE `bidang_ilmu` (
  `idBidangIlmu` varchar(11) NOT NULL,
  `namaBidangIlmu` varchar(40) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bidang_ilmu`
--

INSERT INTO `bidang_ilmu` (`idBidangIlmu`, `namaBidangIlmu`, `deskripsi`) VALUES
('B001', 'Kecerdasan Buatan', 'Kecerdasan buatan'),
('B002', 'Basis Data', 'Basis Data'),
('B003', 'Jaringan Komputer', 'Jaringan Komputer');

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

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `nama`, `email`, `alamat`) VALUES
('0902333', 'Suherman', 'sherman@gmail.com', 'jlan kermata'),
('0902334', 'Sulasih', 'sulasih@gmail.com', 'jl. Mawar');

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

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `jurusan`, `angkatan`, `email`, `noHp`) VALUES
('09021181520023', 'Achi Aprilia A', 'IF', 2015, 'achiaprilia.aa@gmail.com', '089666878989'),
('09021181520026', 'Apoli', 'IF', 2015, 'apoli@gmail.com', '089666878989'),
('09021181520027', 'Insyirah', 'IF', 2014, 'insyirah@gmail.com', '08966878989'),
('09021181520028', 'Daffa', 'IF', 2015, 'daffa@gmail.com', '089666878989'),
('09021181520029', 'Ilham', 'IF', 2013, 'daffa@gmail.com', '08966878989');

-- --------------------------------------------------------

--
-- Table structure for table `subjek`
--

CREATE TABLE `subjek` (
  `idSubjek` varchar(11) NOT NULL,
  `idBidangIlmu` varchar(11) NOT NULL,
  `namaSubjek` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjek`
--

INSERT INTO `subjek` (`idSubjek`, `idBidangIlmu`, `namaSubjek`, `deskripsi`) VALUES
('S001', 'B001', 'Pemrosesan Bahasa Alami', 'PBA'),
('S002', 'B001', 'Jaringan Syaraf Tiruan', 'JST'),
('S003', 'B001', 'Sistem Pakar', 'SP'),
('S004', 'B002', 'Temu Kembali Informasi', 'TKI'),
('S005', 'B001', 'Logika Samar', 'LS'),
('S006', 'B001', 'Sistem Pendukung Keputusan', 'SPK'),
('S007', 'B002', 'Data Warehouse', 'DW'),
('S008', 'B002', 'Data Mart', 'DM'),
('S009', 'B003', 'Manajemen Jaringan Komputer', 'MJK');

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

--
-- Dumping data for table `tanda_terima_ta`
--

INSERT INTO `tanda_terima_ta` (`nim`, `nipus`, `tanggal`, `nama`) VALUES
('09021181520023', '09021181520025', '2018-06-13', 'Achi Aprilia A'),
('09021181520026', '09021181520025', '2018-06-13', 'Sulasih'),
('09021181520027', '09021181520025', '2018-06-13', 'Sulamun');

-- --------------------------------------------------------

--
-- Table structure for table `tugas_akhir`
--

CREATE TABLE `tugas_akhir` (
  `nim` varchar(15) NOT NULL,
  `idSubjek` varchar(11) NOT NULL,
  `judul` varchar(60) NOT NULL,
  `tahun` smallint(4) NOT NULL,
  `dosenPembimbing1` varchar(15) NOT NULL,
  `dosenPembimbing2` varchar(15) NOT NULL,
  `abstrak` text NOT NULL,
  `dokumenPDF` varchar(40) NOT NULL,
  `status` enum('rejected','confirmed','none') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tugas_akhir`
--

INSERT INTO `tugas_akhir` (`nim`, `idSubjek`, `judul`, `tahun`, `dosenPembimbing1`, `dosenPembimbing2`, `abstrak`, `dokumenPDF`, `status`) VALUES
('09021181520023', 'S001', 'Perbandingan Algoritma', 2014, '0902333', '0902334', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\n          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\n          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\n          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\n          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\n          proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'mmmm.pdf', 'confirmed'),
('09021181520026', 'S002', 'Kombinasi Algortima', 2014, '0902333', '0902334', 'mmmmm', 'mmmm.pdf', 'confirmed'),
('09021181520028', 'S003', 'Optimasi algoritma', 2014, '0902333', '0902334', 'jjj', 'mmmm.pdf', 'confirmed'),
('09021181520029', 'S004', 'Pengaruh algoritma dalam', 2013, '0902334', '0902333', 'kkkk', 'mm.pdf', 'confirmed');

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
('09021181520026', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520027', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520028', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
('09021181520029', '89486881ff40c7ac9930f73811091fda', 'Mahasiswa'),
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
  ADD PRIMARY KEY (`idBidangIlmu`);

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
  ADD PRIMARY KEY (`idSubjek`),
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
  ADD PRIMARY KEY (`nim`),
  ADD KEY `dosenPembimbing1` (`dosenPembimbing1`),
  ADD KEY `dosenPembimbing2` (`dosenPembimbing2`),
  ADD KEY `idSubjek` (`idSubjek`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `admin_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `mahasiswa_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `subjek`
--
ALTER TABLE `subjek`
  ADD CONSTRAINT `subjek_ibfk_1` FOREIGN KEY (`idBidangIlmu`) REFERENCES `bidang_ilmu` (`idBidangIlmu`);

--
-- Constraints for table `tanda_terima_ta`
--
ALTER TABLE `tanda_terima_ta`
  ADD CONSTRAINT `tanda_terima_ta_ibfk_1` FOREIGN KEY (`nipus`) REFERENCES `admin` (`nipus`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tugas_akhir`
--
ALTER TABLE `tugas_akhir`
  ADD CONSTRAINT `tugas_akhir_ibfk_1` FOREIGN KEY (`idSubjek`) REFERENCES `subjek` (`idSubjek`),
  ADD CONSTRAINT `tugas_akhir_ibfk_2` FOREIGN KEY (`dosenPembimbing1`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `tugas_akhir_ibfk_3` FOREIGN KEY (`dosenPembimbing2`) REFERENCES `dosen` (`nip`),
  ADD CONSTRAINT `tugas_akhir_ibfk_4` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
