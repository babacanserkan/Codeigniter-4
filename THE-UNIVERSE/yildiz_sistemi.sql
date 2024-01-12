-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 10, 2024 at 01:57 PM
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
-- Database: `yildiz_sistemi`
--

-- --------------------------------------------------------

--
-- Table structure for table `gezegenler`
--

CREATE TABLE `gezegenler` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gezegenler`
--

INSERT INTO `gezegenler` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(5, 'ay', 'AY', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704847976_fd029b1472a6720c0718.png'),
(6, 'güneş', 'GÜNEŞ', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704848362_77692c17fca009eb9baf.png'),
(7, 'mars', 'MARS', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704848440_3b8c080ddb99d32e1767.png'),
(8, 'uranus', 'URANUS', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704848469_20f745c2c287a110fb6e.png'),
(9, 'dünya', 'DÜNYA', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704848564_6bac65ce1fd955473082.png'),
(10, 'jupyter', 'JUPYTER', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis esse asperiores ea voluptatem, rerum quam cumque obcaecati velit ad qui nam doloremque pariatur hic officiis inventore tempore dolores. Ipsa veritatis magni suscipit quibusdam nihil eos minima iure, quisquam consequatur sequi quas autem ab sint maxime eaque, consectetur laudantium odio tenetur.\r\n', '1704848580_5fdbc9224fd31f12f5c4.png');

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gezegenler`
--
ALTER TABLE `gezegenler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gezegenler`
--
ALTER TABLE `gezegenler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
