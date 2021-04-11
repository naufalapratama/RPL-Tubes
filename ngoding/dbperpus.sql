-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2021 at 11:25 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbperpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `email_adm` varchar(50) NOT NULL,
  `id_pinjam` varchar(50) NOT NULL,
  `username_adm` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`email_adm`, `id_pinjam`, `username_adm`, `password`, `role_id`) VALUES
('tes123@gmail.com', '1', 'tes123', 'e10adc3949ba59abbe56e057f20f883e', 1),
('testes@gmail.com', '2', 'testes', 'e10adc3949ba59abbe56e057f20f883e', 1),
('yes@gmail.com', '3', 'yesyes', 'e10adc3949ba59abbe56e057f20f883e', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `photo` varchar(10) NOT NULL,
  `username_adm` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `nama_pengarang`, `judul_buku`, `penerbit`, `deskripsi`, `photo`, `username_adm`) VALUES
(1, 'Pidi Baiq', 'Dilan: Dia adalah Dilanku tahun 1990', 'Mizan Publishing', 'Film Dilan 1990 ini merupakan film yang diadaptasi dari novel berjudul Dilan: Dia adalah Dilanku Tahun 1990. Film Dilan 1990 ini dirilis pada 25 Januari 2018. Film ini ditulis oleh Pidi Baiq dan Titien Wattimena, serta disutradarai oleh Fajar Bustomi dan ', '', 'tes123'),
(3, 'J. K. Rowling', 'Harry Potter and The Chamber Of Secrets', 'Bloomsbury', 'gggooodddddd', '2.jpg', 'tes123'),
(4, 'Rahma Ainun Nisa', 'kalkulus 3', 'Pejuang Jaya', 'bagus banget ini buku', 'pats.jpg', 'tes123'),
(5, 'J. K. Rowling', 'Harry Potter and The Chamber Of Secrets', 'Bloomsbury', 'Pada novel seri kedua ini, harry potter lagi – lagi melewati liburan musim panas bersama keluarga Dursley yang menyebalkan. Akan tetapi, tiba-tiba muncul makhluk aneh bin ajaib bernama Dobby. Dobby adalah sejenis peri rumah yang melayani pada suatu tuan r', '2.jpg', 'tes123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_denda` int(50) NOT NULL,
  `id_pinjam` varchar(50) NOT NULL,
  `info_denda` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjam`
--

CREATE TABLE `tbl_peminjam` (
  `email_cust` varchar(50) NOT NULL,
  `id_pinjam` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_peminjam` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(50) NOT NULL,
  `email_cust` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jumlah_buku` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`email_adm`);

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD PRIMARY KEY (`id_denda`);

--
-- Indexes for table `tbl_peminjam`
--
ALTER TABLE `tbl_peminjam`
  ADD PRIMARY KEY (`email_cust`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id_denda` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD CONSTRAINT `tbl_denda_ibfk_1` FOREIGN KEY (`id_denda`) REFERENCES `tbl_peminjaman` (`id_pinjam`);

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tbl_buku` (`id_buku`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
