-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2018 at 09:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seputar_smk`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `ID_BERITA` int(11) NOT NULL,
  `ID_USER` int(11) DEFAULT NULL,
  `JUDUL_BERITA` text,
  `TGL_BERITA` datetime DEFAULT NULL,
  `URL_BERITA` text,
  `DESKRIPSI_BERITA` text,
  `GAMBAR_BERITA` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`ID_BERITA`, `ID_USER`, `JUDUL_BERITA`, `TGL_BERITA`, `URL_BERITA`, `DESKRIPSI_BERITA`, `GAMBAR_BERITA`) VALUES
(1, 1, 'Pak Jokowi Main Mobile Legends ? Bagaimana Ceritanya ?', '2018-10-25 10:05:27', 'berita/Pak-Jokowi-Main-Mobile-Legends---Bagaimana-Ceritanya--.html', 'IDNation.net- Di awali dari bertemunya antara Andrew Tobias alias JessNoLimit dengan pak presiden Joko Widodo atau yang akrab disebut dengan Jokowi, nampaknya pak presiden tertarik untuk mencoba bermain Mobile Legends.', 'Placeholder'),
(2, 1, 'Pemain Pro CS:GO Ini Menggunakan Program Illegal Saat Turnamen !', '2018-10-25 10:08:12', 'berita/Pemain-Pro-CS:GO-Ini-Menggunakan-Program-Illegal-Saat-Turnamen--.html', '\nIDNation.net â€“ Baru-baru ini dunia eSport CS:GO diwarnai dengan drama, pada tournament eXTREMES LAND  saat tim OpTic India melawan Revolution diketahui bahwa salah satu anggota dari OpTic India  yaitu forsaken menggunakan program illegal saat match berlangsung.', 'Placeholder');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID_USER` int(11) NOT NULL,
  `NAMA_USER` varchar(100) DEFAULT NULL,
  `USERNAME` varchar(16) DEFAULT NULL,
  `PASSWORD` varchar(16) DEFAULT NULL,
  `GAMBAR_USER` text NOT NULL,
  `HAK` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID_USER`, `NAMA_USER`, `USERNAME`, `PASSWORD`, `GAMBAR_USER`, `HAK`) VALUES
(1, 'Nafi\'ul Anam', 'namlim1', 'anam1234', 'img/users/539eb066ced83848e9faf52c84e43e295d83b716.jpg', 'Admin'),
(2, 'Moh. Ilham', 'ilham', '1234', 'img/users/default.png', 'Author');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`ID_BERITA`),
  ADD KEY `FK_MENGOLAH` (`ID_USER`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID_USER`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `ID_BERITA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `FK_MENGOLAH` FOREIGN KEY (`ID_USER`) REFERENCES `users` (`ID_USER`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
