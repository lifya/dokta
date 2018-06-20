-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 20 Jun 2018 pada 17.14
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nipus` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `bidangilmu`
--

CREATE TABLE `bidangilmu` (
  `idbidangilmu` varchar(11) NOT NULL,
  `namabidangilmu` varchar(25) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(15) NOT NULL,
  `namaDosen` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(15) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jurusan` varchar(20) NOT NULL,
  `angkatan` int(4) NOT NULL,
  `email` varchar(25) NOT NULL,
  `noHP` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `subjek`
--

CREATE TABLE `subjek` (
  `idSubjek` varchar(11) NOT NULL,
  `idBidangIlmu` varchar(11) NOT NULL,
  `NamaSubyek` varchar(25) NOT NULL,
  `Deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tandaterimata`
--

CREATE TABLE `tandaterimata` (
  `id` int(11) NOT NULL,
  `nipus` varchar(15) NOT NULL,
  `tanggal` date NOT NULL,
  `namaMahasiswa` varchar(25) NOT NULL,
  `nimMahasiswa` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tugasakhir`
--

CREATE TABLE `tugasakhir` (
  `idTA` int(11) NOT NULL,
  `nim` varchar(15) NOT NULL,
  `idbidangilmu` varchar(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `tahun` int(4) NOT NULL,
  `dosenPembimbing1` varchar(25) NOT NULL,
  `dosenPembimbing2` varchar(25) NOT NULL,
  `abstrak` text NOT NULL,
  `dokumenPDF` varchar(40) NOT NULL,
  `status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(25) NOT NULL,
  `role` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nipus`);

--
-- Indexes for table `bidangilmu`
--
ALTER TABLE `bidangilmu`
  ADD PRIMARY KEY (`idbidangilmu`);

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
  ADD PRIMARY KEY (`idSubjek`);

--
-- Indexes for table `tandaterimata`
--
ALTER TABLE `tandaterimata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tugasakhir`
--
ALTER TABLE `tugasakhir`
  ADD PRIMARY KEY (`idTA`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tandaterimata`
--
ALTER TABLE `tandaterimata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tugasakhir`
--
ALTER TABLE `tugasakhir`
  MODIFY `idTA` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
