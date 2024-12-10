-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 01:47 PM
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
(2, 'Pembelajaran HTML', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam qui doloremque dolorum aliquam, quisquam officiis.', '1732888280_logo1.png'),
(5, 'Pembelajaran Laravel', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati accusamus similique vel distinctio tenetur ab et veniam minima est atque?', '1733231545_49d3248eca653b50ee29fd326aabe0bf6492c493.jpg'),
(7, 'Pembelajaran Java', 'Belajar Java', '1733396896_lost-in-mind.jpg');

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
(1, 'Jajat', 5, 'Benar-benar membantu saya meningkatkan kemampuan saya! Fitur-fitur yang ada sangat mendukung, dan pengajaran yang diberikan sangat berkualitas. Pasti akan terus menggunakan platform ini!', 'Sistem Informasi', '2024-12-06 10:17:02'),
(2, 'Rohmat', 5, 'Terima kasih banyak atas rating 5 bintang! Kami merasa terhormat dapat menjadi bagian dari perjalanan pembelajaran Anda. Kami akan terus memperbaiki diri untuk memberikan pengalaman yang tak terlupakan', 'RPL', '2024-11-29 16:08:27'),
(7, 'Gita', 5, 'Website yang sangat bermanfaat! Kursus-kursusnya terstruktur dengan baik dan pengajarnya sangat kompeten. Saya merasa banyak kemajuan setelah mengikuti pelajaran di sini!', 'Pemograman', '2024-11-26 17:00:00'),
(11, 'Lilyy', 5, 'Benar-benar membantu saya meningkatkan kemampuan saya! Fitur-fitur yang ada sangat mendukung, dan pengajaran yang diberikan sangat berkualitas. Pasti akan terus menggunakan platform ini!&quot;', 'UI/UX', '2024-11-26 05:27:22'),
(12, 'hafid', 5, 'Sangat memuaskan! Website ini sangat user-friendly, dan konten belajarnya sangat lengkap. Pembelajaran jadi lebih menyenangkan dan efektif', 'UI/UX', '2024-11-26 05:28:16'),
(13, 'Fidz', 5, 'Platform pembelajaran terbaik! Kualitas materi sangat tinggi, dan saya merasa mudah untuk mengikuti setiap pelajaran. Semuanya dirancang dengan baik. Sangat direkomendasikan!', 'UI/UX', '2024-11-26 05:30:21'),
(14, 'narumi', 4, 'Sedikit Sulit Dipahami untuk pembelajarannya Tapi Sejauh ini bagus saja', 'UI/UX', '2024-11-26 05:39:19'),
(15, 'narumi taiga', 5, 'Terima kasih atas penilaian sempurna! Kami sangat senang Anda menikmati pengalaman belajar di platform kami. Kami akan terus berusaha untuk memberikan materi berkualitas dan fitur terbaik untuk membantu Anda sukses!', 'UI/UX', '2024-11-29 16:08:15'),
(21, 'Samsul', 5, 'Saya sangat terkesan dengan kualitas materi dan pengajaran yang disediakan di platform ini. Setiap topik dijelaskan dengan sangat jelas dan mudah dipahami, dan banyak fitur interaktif yang membuat proses belajar jadi lebih menarik. Dosen atau pengajarnya juga sangat berkompeten dan ramah, selalu siap membantu jika ada pertanyaan. Platform ini benar-benar mempermudah saya untuk menguasai materi dengan cara yang menyenangkan dan efektif. Sangat direkomendasikan bagi siapa saja yang ingin belajar dengan cara yang fleksibel dan menyenangkan!\r\n\r\n', 'UI/UX', '2024-12-05 12:14:14'),
(22, 'Joni', 5, 'Setelah mencoba beberapa platform belajar, saya akhirnya menemukan yang sempurna. Pengalaman belajar di sini sangat menyenangkan! Navigasi situs yang mudah, video yang berkualitas tinggi, dan materi yang terstruktur dengan baik membuat saya tidak merasa kewalahan. Saya bisa belajar dengan kecepatan saya sendiri, dan itu sangat penting bagi saya. Saya pasti akan terus belajar di sini dan sangat merekomendasikan platform ini kepada teman-teman saya!', 'Sistem Informasi', '2024-12-05 13:01:15');

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
(2, 'Fikri JP', 'fikri', '123', 'peserta'),
(19, 'Sasa Susanti', 'sasa', '123', 'peserta');

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
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
