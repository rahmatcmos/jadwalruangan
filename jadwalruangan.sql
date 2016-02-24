-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2016 at 09:58 AM
-- Server version: 5.6.26
-- PHP Version: 5.5.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwalruangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id` int(10) unsigned NOT NULL,
  `matakuliah` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dosen` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `hari` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mulai` time NOT NULL,
  `selesai` time NOT NULL,
  `ruangan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id`, `matakuliah`, `dosen`, `hari`, `mulai`, `selesai`, `ruangan`, `created_at`, `updated_at`) VALUES
(4, 'Matematika Diskret (A)', '-', 'selasa', '07:30:00', '10:00:00', 'laboratorium-b', '2016-02-24 08:04:05', '2016-02-24 08:09:01'),
(5, 'Aljabar Linear dan Matriks (A)', '-', 'jum''at', '08:00:00', '09:40:00', 'siskom-3', '2016-02-24 08:04:37', '2016-02-24 08:10:42'),
(6, 'Kalkulus II (A)', '-', 'kamis', '09:30:00', '12:00:00', 'siskom-3', '2016-02-24 08:05:35', '2016-02-24 08:10:22'),
(7, 'Fisika II (A)', '-', 'rabu', '07:30:00', '09:10:00', 'siskom-2', '2016-02-24 08:06:25', '2016-02-24 08:09:56'),
(8, 'Struktur Data (A)', '-', 'selasa', '13:00:00', '14:40:00', 'siskom-3', '2016-02-24 08:07:01', '2016-02-24 08:09:32'),
(9, 'Aljabar Linear Matriks (B)', '-', 'selasa', '10:15:00', '11:50:00', 'siskom-2', '2016-02-24 08:11:48', '2016-02-24 08:11:48'),
(10, 'Kalkulus Lanjut (A)', '-', 'senin', '13:00:00', '15:00:00', 'siskom-2', '2016-02-24 08:13:11', '2016-02-24 08:13:11'),
(11, 'Kalkulus Lanjut (B)', '-', 'kamis', '00:00:00', '12:00:00', 'siskom-2', '2016-02-24 08:13:41', '2016-02-24 08:13:41'),
(12, 'Analisa Algoritma (A)', '-', 'selasa', '13:00:00', '14:40:00', 'laboratorium-a', '2016-02-24 08:16:03', '2016-02-24 08:16:03'),
(13, 'Analisa Algoritma (A)', '-', 'kamis', '13:00:00', '14:40:00', 'laboratorium-a', '2016-02-24 08:16:34', '2016-02-24 08:16:34'),
(14, 'Analisa Algoritma (B)', '-', 'selasa', '14:50:00', '16:30:00', 'laboratorium-a', '2016-02-24 08:17:17', '2016-02-24 08:17:17'),
(15, 'Analisa Algoritma', '-', 'kamis', '14:50:00', '16:30:00', 'laboratorium-a', '2016-02-24 08:17:57', '2016-02-24 08:17:57'),
(16, 'Basis Data (A)', '-', 'selasa', '07:30:00', '10:00:00', 'laboratorium-a', '2016-02-24 08:18:35', '2016-02-24 08:18:35'),
(17, 'Basis Data (B)', '-', 'jum''at', '13:30:00', '16:00:00', 'laboratorium-a', '2016-02-24 08:19:24', '2016-02-24 08:19:24'),
(18, 'Bahasa Inggris (A)', '-', 'rabu', '15:00:00', '17:40:00', 'siskom-2', '2016-02-24 08:20:08', '2016-02-24 08:20:08'),
(19, 'Elektronika (A)', '-', 'senin', '07:30:00', '09:10:00', 'siskom-1', '2016-02-24 08:20:56', '2016-02-24 08:20:56'),
(20, 'Sistem Operasi (A)', '-', 'jum''at', '13:30:00', '15:10:00', 'siskom-2', '2016-02-24 08:22:20', '2016-02-24 08:22:20'),
(21, 'Arsitektur Komputer', '-', 'jum''at', '13:30:00', '16:00:00', 'siskom-1', '2016-02-24 08:23:27', '2016-02-24 08:23:27'),
(22, 'Peripheral dan Interface', '-', 'rabu', '07:30:00', '10:00:00', 'siskom-3', '2016-02-24 08:40:52', '2016-02-24 08:40:52'),
(23, 'Sistem Tertanam', '-', 'senin', '09:30:00', '12:00:00', 'siskom-1', '2016-02-24 08:42:03', '2016-02-24 08:42:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2016_02_24_031052_create_jadwal_ruangan', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin Siskom', 'adminsiskom', 'adminsiskom@siskom.untan.ac.id', '$2y$10$eFUTHcUy1/8OhZeRnrlJ8ekUQc4C.FCRJ03taM20Lnch2OpqPRk8S', 'z3t9Oi9baQ2d4DkOqTWBi3JoaqLu54i9BeGivdmnnLKY0xqNHIQLZhsJOZfA', NULL, '2016-02-24 06:02:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
