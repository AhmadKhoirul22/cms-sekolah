-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 10, 2025 at 02:42 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penda`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

DROP TABLE IF EXISTS `guru`;
CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) NOT NULL,
  `kompetensi` varchar(100) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `nama`, `kompetensi`, `mata_pelajaran`) VALUES
(7, 'ahmad k', 'Matematika', 'Matematikaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(50) NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(6, 'Berita'),
(7, 'Event'),
(8, 'PPDB'),
(11, 'Pengumuman');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

DROP TABLE IF EXISTS `konten`;
CREATE TABLE IF NOT EXISTS `konten` (
  `id_konten` int NOT NULL AUTO_INCREMENT,
  `judul` text NOT NULL,
  `keterangan` text NOT NULL,
  `tanggal` date NOT NULL,
  `slug` text NOT NULL,
  `id_user` int NOT NULL,
  `id_kategori` int NOT NULL,
  `foto` varchar(50) NOT NULL,
  PRIMARY KEY (`id_konten`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `tanggal`, `slug`, `id_user`, `id_kategori`, `foto`) VALUES
(13, 'test konten lagi wakk', '<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</strong></p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\n<p>&nbsp;</p>', '2024-12-26', 'test-konten-lagi-wakk', 6, 7, '20241226065945.jpg'),
(11, 'Pramuka Day', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>&nbsp;</p>', '2024-12-26', 'Pramuka-Day', 6, 6, '20241226065819.jpg'),
(7, 'test konten ', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>\r\n<p>&nbsp;</p>', '2024-12-26', 'test-konten-', 6, 8, '20241226064530.jpg'),
(22, 'Konten 5', '<p>Konten 5</p>', '2025-05-09', 'Konten-5', 6, 6, '20250509092704.jpg'),
(21, 'Konten 4', '<p>Konten 4</p>', '2025-05-09', 'Konten-4', 6, 6, '20250509092626.jpg'),
(23, 'konten 6', '<p>konten 6</p>', '2025-05-09', 'konten-6', 6, 6, '20250509092738.jpg'),
(24, 'Konten 7', '<p>konten 7</p>', '2025-05-09', 'konten-7', 6, 7, '20250509092815.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ppdb`
--

DROP TABLE IF EXISTS `ppdb`;
CREATE TABLE IF NOT EXISTS `ppdb` (
  `id` int NOT NULL AUTO_INCREMENT,
  `program_pembiasaan` text NOT NULL,
  `persyaratan` text NOT NULL,
  `ekstrakulikuler` text NOT NULL,
  `foto` varchar(200) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `tahun_ajaran` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ppdb`
--

INSERT INTO `ppdb` (`id`, `program_pembiasaan`, `persyaratan`, `ekstrakulikuler`, `foto`, `judul`, `link`, `tahun_ajaran`) VALUES
(1, '<ol>\r\n<li>sholat dhuha</li>\r\n<li>upacara</li>\r\n<li>makan bersama</li>\r\n</ol>', '<ol>\r\n<li>fotokopi kk</li>\r\n<li>fotokopi ktp</li>\r\n<li>fotokopi akta kelahiran</li>\r\n</ol>', '<ol>\r\n<li>futsal</li>\r\n<li>volly</li>\r\n<li>badminton</li>\r\n<li>sepak bola</li>\r\n<li>pramuka</li>\r\n</ol>', 'ooo', 'PPDB', 'https://s.id/ppdb_espemo25', '2025/2026');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

DROP TABLE IF EXISTS `profile`;
CREATE TABLE IF NOT EXISTS `profile` (
  `id_profile` int NOT NULL AUTO_INCREMENT,
  `nama_profile` varchar(50) NOT NULL,
  `alamat_profile` text NOT NULL,
  `keterangan_profile` text NOT NULL,
  `telp_profile` varchar(100) NOT NULL,
  `email_profile` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `youtube` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `foto` varchar(120) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id_profile`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama_profile`, `alamat_profile`, `keterangan_profile`, `telp_profile`, `email_profile`, `youtube`, `facebook`, `instagram`, `foto`) VALUES
(1, 'SMP PENDA <br> MOJOGEDANG', 'Desa Mojogedang, Kec. Mojogedang, Kab. Karanganyar', 'SMP Penda Mojogedang adalah salah satu Sekolah Menengah Pertama favorit di Kecamatan Mojogedang. Serta merupakan sekolah yang berpendidikan karakter, berwawasan, disiplin, tanggung jawab, dan bermoral baik.', '(0271) 6494020', 'espemo97@gmail.com', 'https://www.youtube.com/', 'https://www.facebook.com/', 'https://www.instagram.com/', 'ghh.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `password`, `nama`, `level`) VALUES
(6, 'ahmad@gmail.com', '61243c7b9a4022cb3f8dc3106767ed12', 'ahmad', 'ADMIN'),
(7, 'hudabedoyo2018@gmail.com', '0075a4e7a2e71083262da135ecdbdd14', 'huda', 'KONTRIBUTOR');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
