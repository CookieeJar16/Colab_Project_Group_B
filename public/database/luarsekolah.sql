-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2024 at 03:20 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `luarsekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(8) NOT NULL,
  `judul` varchar(64) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `judul`, `deskripsi`, `gambar`) VALUES
(1, 'Pembelajaran HTML', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis, voluptatibus.', '1732889760_lostinmind.jpg'),
(2, 'Pembelajaran HTML', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam qui doloremque dolorum aliquam, quisquam officiis.', '1732888280_logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `okupasi` varchar(64) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `rating`, `message`, `okupasi`, `create_at`) VALUES
(1, 'Jajat', 5, 'Sangat puas dengan pelayanan! danpembelajaran yang efective', 'Sistem Informasi', '2024-11-25 12:00:00'),
(2, 'Rohmat', 5, 'Hebat Banget', 'RPL', '2024-11-29 14:18:27'),
(7, 'Gita', 5, 'Website yang sangat bermanfaat! Kursus-kursusnya terstruktur dengan baik dan pengajarnya sangat kompeten. Saya merasa banyak kemajuan setelah mengikuti pelajaran di sini!', 'Pemograman', '2024-11-26 17:00:00'),
(11, 'Lilyy', 5, 'Benar-benar membantu saya meningkatkan kemampuan saya! Fitur-fitur yang ada sangat mendukung, dan pengajaran yang diberikan sangat berkualitas. Pasti akan terus menggunakan platform ini!&quot;', 'UI/UX', '2024-11-26 05:27:22'),
(12, 'hafid', 5, 'Sangat memuaskan! Website ini sangat user-friendly, dan konten belajarnya sangat lengkap. Pembelajaran jadi lebih menyenangkan dan efektif', 'UI/UX', '2024-11-26 05:28:16'),
(13, 'Fidz', 5, 'Platform pembelajaran terbaik! Kualitas materi sangat tinggi, dan saya merasa mudah untuk mengikuti setiap pelajaran. Semuanya dirancang dengan baik. Sangat direkomendasikan!', 'UI/UX', '2024-11-26 05:30:21'),
(14, 'narumi', 4, 'Sedikit Sulit Dipahami untuk pembelajarannya Tapi Sejauh ini bagus saja', 'UI/UX', '2024-11-26 05:39:19'),
(15, 'narumi taiga', 5, 'WOW', 'UI/UX', '2024-11-29 15:00:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(32) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(16) NOT NULL,
  `role` enum('peserta','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `role`) VALUES
(1, 'Hafid Mamesa', 'hafid', '123', 'admin'),
(2, 'Fikri JP', 'fikri', '123', 'peserta');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
