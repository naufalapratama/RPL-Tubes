-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2021 at 06:51 AM
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
-- Table structure for table `tbl_buku`
--

CREATE TABLE `tbl_buku` (
  `id_buku` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `nama_pengarang` varchar(50) NOT NULL,
  `judul_buku` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `stok` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_buku`
--

INSERT INTO `tbl_buku` (`id_buku`, `id_kategori`, `username`, `nama_pengarang`, `judul_buku`, `penerbit`, `deskripsi`, `photo`, `stok`) VALUES
(1, 2, 'tes123', 'J. K. Rowling', 'Harry Potter and The Chamber Of Secrets', 'Gramedia', 'Gramediaaaaaaaaaay', '9fe4ce51dc6e1eb73488c8b00331f2b41.jpg', '13'),
(2, 5, 'tes123', 'Pidi Baiq', 'Dilan: Dia adalah Dilanku tahun 1991', 'Bloomsbury', 'Film Dilan 1990 ini merupakan film yang diadaptasi dari novel berjudul Dilan: Dia adalah Dilanku Tahun 1990. Film Dilan 1990 ini dirilis pada 25 Januari 2018. Film ini ditulis oleh Pidi Baiq dan Titien Wattimena, serta disutradarai oleh Fajar Bustomi dan Pidi Baiq. Selain itu, dibintangi oleh Iqbaal Ramadhan, Vanesha Prescilla dan masih banyak lainnya.\r\n\r\nDilan 1990 ini mengisahkan tentang pertemuan yang dialami oleh dua orang remaja SMA. Namun, perkenalan mereka pun tidak biasa dikarenakan keunikannya. Film ini mengangkat sebuah kisah romansa dari remaja SMA di Bandung yang bernama Dilan dan Milea.\r\nMilea (Vanesha Prescilla) bertemu dengan Dilan (Iqbaal Ramadhan) di sebuah SMA di Bandung pada tahun 1990. Ketika itu, Milea seorang anak pindahan dari Jakarta ke Bandung. Lalu, perkenalan yang tidak biasa membawa Milea mengenal keunikan Dilan, pintar, baik hati, romantis.\r\n\r\nCara yang dilakukan Dilan dalam mendekati Milea tidak sama dengan teman-teman lelaki lain. Ia melakukan hal yang berbeda dan terbilang unik. Bahkan, berbeda dengan seorang Beni (Brandon Salim), yang merupakan pacar Milea di Jakarta.\r\n\r\nPerjalanan hubungan yang mereka lalui tidak selalu mulus. Beni, Anhar (Giulio Parengkuan), Kang Adi (Refal Hady) mewarnai perjalanan itu. Dilan membuat Milea percaya ia bisa tiba di tujuan dengan selamat.\r\n\r\nBagaimana kelanjutan kisah Dilan dan Milea? Apakah mereka akan bersatu atau tidak? Langsung saja saksikan kisahnya dengan menonton film Dilan 1990.', 'unnamed.jpg', '5'),
(3, 1, 'tes123', 'Eriko Ono', 'Miiko 1', 'Shogakukan', 'Kocchi Muite! Miiko (Japanese: ??????!???, lit. \"Look This Way, Miiko!\") is a Japanese sh?jo comedy manga series by Eriko Ono. It has been published by Shogakukan in Ciao since 1995 and collected in 32 bound volumes. It is a sequel to an earlier series, Miiko desu! (?????!, \"I\'m Miiko!\"),[2] and depicts the home and school life of a cheerful and energetic fourth-grade girl named Miiko.\r\n\r\nKocchi Muite! Miiko was adapted as a 42-episode anime television series by Toei Animation, which was broadcast on TV Asahi from February 14, 1998 to February 6, 1999, as part of the Anime Syuukan DX! Mi-Pha-Pu anime series.', 'download_(2).jpg', '5');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_denda`
--

CREATE TABLE `tbl_denda` (
  `id_denda` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`id_kategori`, `kategori`) VALUES
(1, 'Komik'),
(2, 'Majalah'),
(3, 'Ilmu Komputer'),
(4, 'Manajemen'),
(5, 'Novel');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_peminjaman`
--

CREATE TABLE `tbl_peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `tanggal_peminjaman` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `jumlah_buku` varchar(10) NOT NULL,
  `status` varchar(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_peminjaman`
--

INSERT INTO `tbl_peminjaman` (`id_pinjam`, `id_buku`, `email`, `tanggal_peminjaman`, `tanggal_pengembalian`, `jumlah_buku`, `status`, `date_created`) VALUES
(1, 1, 'pengguna@gmail.com', '2021-07-01', '2021-07-03', '1', 'pending', '2021-07-01 04:09:46'),
(3, 1, 'pengguna@gmail.com', '2021-07-01', '2021-07-03', '1', 'pending', '2021-07-01 04:11:20'),
(4, 1, 'pengguna@gmail.com', '2021-07-01', '2021-07-03', '1', 'pending', '2021-07-01 04:11:38'),
(5, 1, 'pengguna@gmail.com', '2021-07-01', '2021-07-02', '1', 'pending', '2021-07-01 04:13:21'),
(6, 3, 'pengguna@gmail.com', '2021-07-01', '2021-07-03', '1', 'pending', '2021-07-01 04:14:43'),
(7, 2, 'pengguna2@gmail.com', '2021-07-01', '2021-07-01', '1', 'pending', '2021-07-01 04:41:48');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengguna`
--

CREATE TABLE `tbl_pengguna` (
  `username` varchar(50) NOT NULL,
  `role_id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `no_telp` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `nim` int(11) NOT NULL,
  `tahun_angkatan` year(4) NOT NULL,
  `prodi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pengguna`
--

INSERT INTO `tbl_pengguna` (`username`, `role_id`, `email`, `nama`, `password`, `no_telp`, `alamat`, `nim`, `tahun_angkatan`, `prodi`) VALUES
('pengguna2', 2, 'pengguna2@gmail.com', 'Pengguna lalal', 'e10adc3949ba59abbe56e057f20f883e', '0812345678', 'Jl. Mangga 13', 13312435, 2020, 'S1 Informatika'),
('pengguna1', 2, 'pengguna@gmail.com', 'PENGGUNA', 'e10adc3949ba59abbe56e057f20f883e', '081312114267', 'jl. mangga no.12 Jakarta Pusat Indonesia', 13312435, 2018, 'S1 Informatika'),
('tes123', 1, 'tes123@gmail.com', 'ADMIN', 'e10adc3949ba59abbe56e057f20f883e', '0812345678', 'jl. Apel no.43 Jakarta Selatan', 0, 0000, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role`) VALUES
(1, 'admin'),
(2, 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indexes for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD PRIMARY KEY (`id_denda`),
  ADD UNIQUE KEY `id_pinjam` (`id_pinjam`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `tbl_pengguna`
--
ALTER TABLE `tbl_pengguna`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_buku`
--
ALTER TABLE `tbl_buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  MODIFY `id_denda` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_denda`
--
ALTER TABLE `tbl_denda`
  ADD CONSTRAINT `tbl_denda_ibfk_1` FOREIGN KEY (`id_pinjam`) REFERENCES `tbl_peminjaman` (`id_pinjam`);

--
-- Constraints for table `tbl_peminjaman`
--
ALTER TABLE `tbl_peminjaman`
  ADD CONSTRAINT `tbl_peminjaman_ibfk_1` FOREIGN KEY (`id_buku`) REFERENCES `tbl_buku` (`id_buku`);

--
-- Constraints for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD CONSTRAINT `tbl_role_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `tbl_pengguna` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
