-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 12:45 AM
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
-- Database: `doga`
--

-- --------------------------------------------------------

--
-- Table structure for table `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kulad` varchar(10) NOT NULL,
  `sifre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kulad`, `sifre`) VALUES
(1, 'yonetici', '123');

-- --------------------------------------------------------

--
-- Table structure for table `sehirler`
--

CREATE TABLE `sehirler` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sehirler`
--

INSERT INTO `sehirler` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(1, 'karadeni̇z', 'KARADENİZ', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843247_1371a5716c3bad079227.jpg'),
(2, 'akdeni̇z', 'AKDENİZ', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843264_0d728544c5ef035c2c12.jpg'),
(3, 'si̇i̇rt', 'SİİRT', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843283_f56c28a8a456a4a1291c.jpg'),
(4, 'gi̇resun', 'GİRESUN', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843487_f559c08ee803f679e550.jpg'),
(5, 'kars', 'KARS', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843499_c33b17a980cd9432dd3b.jpg'),
(6, 'iğdir', 'IĞDIR', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843537_1b39148b20adb3a73ec3.jpg'),
(7, 'mani̇sa', 'MANİSA', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843655_59dd143de640b298f914.jpg'),
(8, 'istanbul', 'ISTANBUL', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843670_e9818dc6448dc440f2cb.jpg'),
(9, 'ankara', 'ANKARA', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843733_210da3bef1224dbd6c4f.jpg'),
(10, 'konya', 'KONYA', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Porro culpa ex ipsum consequatur reprehenderit saepe, voluptates doloribus. Quos temporibus placeat quibusdam obcaecati, consequuntur facilis voluptatum in eum ex ea assumenda doloremque quidem adipisci perferendis laudantium, iure, omnis rerum cumque! Nihil.\r\n', '1704843755_6718356359924e353662.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sehirler`
--
ALTER TABLE `sehirler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sehirler`
--
ALTER TABLE `sehirler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
