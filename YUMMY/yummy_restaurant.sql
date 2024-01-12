-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2024 at 06:13 PM
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
-- Database: `yummy_restaurant`
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
(1, 'deneme', '123');

-- --------------------------------------------------------

--
-- Table structure for table `menüler`
--

CREATE TABLE `menüler` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menüler`
--

INSERT INTO `menüler` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(3, 'marigarita', 'Marigarita', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos eveniet ratione iste minus optio minima labore expedita autem magnam totam quis sint tenetur sapiente sequi aperiam asperiores, maxime eligendi laboriosam delectus? Voluptatem est explicabo natus.\r\n', '1704716008_0bc48928c7ffbf616c54.png'),
(4, 'çakallı_menemen', 'Çakallı menemen', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, optio!\r\n', '1704716235_ba5bf1fcb0cbab0ff0f5.png'),
(5, 'sarma', 'Sarma', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, optio!\r\n', '1704716381_b283e71c4fea12466c8f.png'),
(6, 'döner', 'Döner', ' Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, optio!\r\n', '1704716404_38d6a011e4ba74e75ca0.png'),
(7, 'pizza', 'Pizza', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, optio!', '1704716415_c6fdee97c07f2478723f.png'),
(8, 'sushi', 'Sushi', 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Esse, optio!', '1704716429_6cbdb1127194037229f1.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menüler`
--
ALTER TABLE `menüler`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `menüler`
--
ALTER TABLE `menüler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
