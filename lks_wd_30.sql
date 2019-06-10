-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2018 at 11:26 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lks_wd_30`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `file` longblob NOT NULL,
  `category` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `slug`, `penerbit`, `description`, `file`, `category`) VALUES
(6, 'Mengenali diri', 'mengenali-diri-60', 'Daud El Nizar', 'Menjelaskan bagaimana mengetahui potensi diri dan kelemahan diri kita', 0x6a7067, 2),
(10, 'KUHAP dan KUHP', 'kuhap-dan-kuhp-470', 'John F.', 'Buku mengenai peraturan peraturan yang berlaku di dalam lembaga yudikatif, terbit pada tanggal 12 februari 2018 ', 0x6a706567, 3),
(11, 'Kiat Melatih kepercayaan diri', 'kiat-melatih-kepercayaan-diri-746', 'Ilham Ramadhan', 'buku psikologi ini mengenai motivasi dan kiat bagaimana sih cara melatih kepercayaan diri itu', 0x6a7067, 2),
(12, 'Trik cepat Membangun web Responsive', 'trik-cepat-membangun-web-responsive-53', 'Nuris Akbar', 'buku ini berisi tentang cara membuat design dasar dari website khusus untuk pemula', 0x6a7067, 1),
(13, 'Kumpulan obat herbal', 'kumpulan-obat-herbal-569', 'Didik Setiawan', 'Di buku ini kita akan melihat cara membuat obat herbal pada tumbuhan disekitar kita', 0x6a7067, 4),
(14, 'Trik Cepat memahami bahasa PHP', 'trik-cepat-memahami-bahasa-php-631', 'Standy B. Syakur', 'di buku ini kita akan belajar tentang memahami bahasa Hypertext Preprocessor atau dikenal dengan PHP', 0x6a7067, 1),
(15, 'Tip dan Trik menjadi master php', 'tip-dan-trik-menjadi-master-php-934', 'Adi Prasetyo', 'Di sini di jelaskan bagaimana memahami bahasa php lebak expert lagi di terbitkan pada tahun 2017 kemarin', 0x6a7067, 1),
(16, 'Cara Hidup Sehat', 'cara-hidup-sehat-530', 'Hendra S.', 'Mengenali kemampuan tubuh dalam beraktivitas dan menjaga pola hidup sehat', 0x706e67, 4);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category`) VALUES
(1, 'informatika'),
(2, 'psikologi'),
(3, 'hukum'),
(4, 'kedokteran');

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` int(11) NOT NULL,
  `books_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` smallint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `level`) VALUES
(8, 'Sulaeman', 'user', '$2y$10$tCmBw3q3w6N76J3s6JjzcuD12RAA0xf0QR7KoQyX/fok4kaRLfISq', 1),
(9, 'eman', 'admin', '$2y$10$m202KgjuRhQ0SI0plWa1luk51JVw2dAHSWddMK5Su9pDNNGLK95DG', 2),
(10, 'test', 'test', '$2y$10$nfoq3zgJUYYMhUgblmR/6egCbdDBfA2yYCnM2f/23TntbaxEU8cNi', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category` (`category`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id`),
  ADD KEY `books_id` (`books_id`),
  ADD KEY `users_id` (`users_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_1` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `pinjam_ibfk_2` FOREIGN KEY (`books_id`) REFERENCES `books` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
