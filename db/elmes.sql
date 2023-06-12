-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 12, 2023 at 02:53 PM
-- Server version: 8.0.33-0ubuntu0.22.04.2
-- PHP Version: 8.1.2-1ubuntu2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elmes`
--

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `jeniskelamin` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggallahir` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nomortelepon` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `email`, `divisi`, `jabatan`, `jeniskelamin`, `tanggallahir`, `alamat`, `nomortelepon`) VALUES
(7, 'Nadhila Okta Santika Widhasari', 'nadhilaokta38@gmail.com', 'Sekretariat', 'Sekretaris', 'Perempuan', '2001-10-08', 'Surabaya', '085806774145'),
(8, 'asdasd', 'asdasdasd@gmai', 'Manajemen', 'Bendahara Penerima', 'Laki-laki', '2023-06-13', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `notulensi`
--

CREATE TABLE `notulensi` (
  `id_notulensi` int NOT NULL,
  `id_rapat` int DEFAULT NULL,
  `notulensi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `statuss` varchar(50) NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notulensi`
--

INSERT INTO `notulensi` (`id_notulensi`, `id_rapat`, `notulensi`, `statuss`) VALUES
(1, 4, 'Penulis artikel adalah orang atau individu yang bertindak dalam mengarang sebuah tulisan, menggabungkan beberapa kata menjadi kalimat yang menarik dan enak dibaca sehingga membuat pembaca dapat mengetahui apa yang tidak mereka ketahui sebelumnya. Sebuah artikel berasal dari pengalaman seseorang, imajinasi, pengetahuan umum atau penelitian ilmiah.\r\n\r\nPenulis artikel bermacam-macam kriterianya, yakni sebagai berikut:\r\n\r\nPenulis artikel buku\r\nPenulis artikel berita\r\nPenulis artikel pemasaran\r\nPenulis artikel daring\r\nPenulis artikel narasi\r\nPenulis artikel naskah', 'Menunggu'),
(2, 5, 'asdasdaasdasda', 'Menunggu'),
(3, 4, 'sdadasdasdasd', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `rapat`
--

CREATE TABLE `rapat` (
  `id_rapat` int NOT NULL,
  `judulrapat` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `divisi` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `waktu` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `pelaksanaan` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tempat` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `status` varchar(50) COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'Menunggu'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rapat`
--

INSERT INTO `rapat` (`id_rapat`, `judulrapat`, `divisi`, `tanggal`, `waktu`, `pelaksanaan`, `tempat`, `status`) VALUES
(4, 'Pembahasan RABS', 'Hubungan Masyarakat', '2023-06-08', '07,00 - 09.00', 'Offline', 'Gedung A', 'Menunggu'),
(5, 'Rapat 1', 'Manajemen', '2023-06-21', 'asd', 'Offline', 'Asd', 'Menunggu'),
(6, 'Rapat 2', 'Keuangan', '2023-06-14', 'asdasd', 'Offline', 'asdasd', 'Menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_registrasi` int NOT NULL,
  `username` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(50) COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_registrasi`, `username`, `email`, `password`, `level`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'admin'),
(4, 'will', 'williadwi8@gmail.com', '123', 'user'),
(5, 'nadhilaokta', 'nadhilaokta38@gmail.com', '12345', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `notulensi`
--
ALTER TABLE `notulensi`
  ADD PRIMARY KEY (`id_notulensi`),
  ADD KEY `id_rapat` (`id_rapat`);

--
-- Indexes for table `rapat`
--
ALTER TABLE `rapat`
  ADD PRIMARY KEY (`id_rapat`) USING BTREE;

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `notulensi`
--
ALTER TABLE `notulensi`
  MODIFY `id_notulensi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rapat`
--
ALTER TABLE `rapat`
  MODIFY `id_rapat` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `notulensi`
--
ALTER TABLE `notulensi`
  ADD CONSTRAINT `notulensi_ibfk_1` FOREIGN KEY (`id_rapat`) REFERENCES `rapat` (`id_rapat`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
