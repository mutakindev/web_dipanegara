-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2019 at 09:42 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stmikdipanegara`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id`, `nama`, `username`, `password`, `email`) VALUES
(1, 'Diki Hamdani', 'dikihmd', 'diki123', 'dikihamdani.id@gmail.com'),
(2, 'Mutakin', 'mutakindev', 'mutakin01', 'mutakin.ind@gmail.com'),
(3, 'Administrator', 'admin', 'admin', 'admin@stmik-dipanegara.com');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` varchar(100) NOT NULL,
  `post_by` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `judul`, `isi`, `waktu`, `gambar`, `post_by`) VALUES
(66, 'Pengembangan Sumber Daya Manusia', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem magnam voluptatem earum obcaecati praesentium, vitae impedit, cum voluptas ut cumque quia sint assumenda odit numquam debitis nisi officia aspernatur? Quae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem quis, impedit commodi hic odio, sequi fugiat eius, corporis deleniti laudantium nostrum delectus eaque doloribus facere dolorum ab obcaecati expedita tempore!', '2019-11-30 07:54:02', '15751004423.png', 'Administrator'),
(67, 'Lomba Computer Club', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem magnam voluptatem earum obcaecati praesentium, vitae impedit, cum voluptas ut cumque quia sint assumenda odit numquam debitis nisi officia aspernatur? Quae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem quis, impedit commodi hic odio, sequi fugiat eius, corporis deleniti laudantium nostrum delectus eaque doloribus facere dolorum ab obcaecati expedita tempore!', '2019-11-30 07:54:20', '15751004604.png', 'Administrator'),
(68, 'Kompetisi Web Development', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem magnam voluptatem earum obcaecati praesentium, vitae impedit, cum voluptas ut cumque quia sint assumenda odit numquam debitis nisi officia aspernatur? Quae. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorem quis, impedit commodi hic odio, sequi fugiat eius, corporis deleniti laudantium nostrum delectus eaque doloribus facere dolorum ab obcaecati expedita tempore!', '2019-11-30 07:54:44', '15751004845.png', 'Administrator');

-- --------------------------------------------------------

--
-- Table structure for table `visitor_counter`
--

CREATE TABLE `visitor_counter` (
  `id` int(11) NOT NULL,
  `access_page` varchar(100) NOT NULL,
  `access_counter` int(11) NOT NULL,
  `access_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `visitor_counter`
--

INSERT INTO `visitor_counter` (`id`, `access_page`, `access_counter`, `access_date`) VALUES
(1, 'Web Portal STMIK Dipanega', 16, '2019-11-29 02:22:50'),
(17, 'Web Portal STMIK Dipanegara index page', 37514, '2019-11-29 07:46:28'),
(64, 'Web Portal STMIK Dipanegara', 41, '2019-11-30 08:02:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `access_page` (`access_page`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `visitor_counter`
--
ALTER TABLE `visitor_counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
