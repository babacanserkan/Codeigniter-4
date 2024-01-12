-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2024 at 10:33 PM
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
-- Database: `mitolojikdinler`
--

-- --------------------------------------------------------

--
-- Table structure for table `dinler`
--

CREATE TABLE `dinler` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinler`
--

INSERT INTO `dinler` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(1, 'budi̇zm', 'BUDİZM', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloremque libero nesciunt eligendi recusandae, repellat porro exercitationem aliquam, similique dolorem quo velit corporis, quaerat magni temporibus architecto iusto ab rerum officia accusamus sunt non ex voluptatum rem? Veniam dolor consequatur deleniti vel vero! Omnis, maiores quod similique ea, culpa at eligendi inventore obcaecati quam, qui pariatur rem rerum! Facere quisquam ipsa obcaecati maxime laborum quas voluptatibus officia error necessitatibus. Dolor esse tempora officiis quos impedit et error perferendis eaque nemo minima earum, doloremque expedita omnis animi repellat porro reprehenderit. Veniam unde consequatur molestias quod dicta autem, repudiandae velit nisi aliquam excepturi quo neque doloremque. Sequi, minima ipsum. Dolorem dignissimos soluta qui esse delectus, libero eligendi animi debitis perspiciatis et cumque. Soluta laboriosam aperiam praesentium. Repellat tempore laudantium quasi veniam cumque necessitatibus inventore unde doloribus, suscipit, quia et reiciendis molestiae nulla quo vero ut. Accusamus vitae deleniti nam, quos iusto amet!\r\n', '1704832517_994ab3c401591fa71dfa.png'),
(2, 'yahudi̇li̇k', 'YAHUDİLİK', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloremque libero nesciunt eligendi recusandae, repellat porro exercitationem aliquam, similique dolorem quo velit corporis, quaerat magni temporibus architecto iusto ab rerum officia accusamus sunt non ex voluptatum rem? Veniam dolor consequatur deleniti vel vero! Omnis, maiores quod similique ea, culpa at eligendi inventore obcaecati quam, qui pariatur rem rerum! Facere quisquam ipsa obcaecati maxime laborum quas voluptatibus officia error necessitatibus. Dolor esse tempora officiis quos impedit et error perferendis eaque nemo minima earum, doloremque expedita omnis animi repellat porro reprehenderit. Veniam unde consequatur molestias quod dicta autem, repudiandae velit nisi aliquam excepturi quo neque doloremque. Sequi, minima ipsum. Dolorem dignissimos soluta qui esse delectus, libero eligendi animi debitis perspiciatis et cumque. Soluta laboriosam aperiam praesentium. Repellat tempore laudantium quasi veniam cumque necessitatibus inventore unde doloribus, suscipit, quia et reiciendis molestiae nulla quo vero ut. Accusamus vitae deleniti nam, quos iusto amet!\r\n', '1704832540_657995f0bd7ef0f15f0d.png'),
(3, 'sümer', 'SÜMER', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloremque libero nesciunt eligendi recusandae, repellat porro exercitationem aliquam, similique dolorem quo velit corporis, quaerat magni temporibus architecto iusto ab rerum officia accusamus sunt non ex voluptatum rem? Veniam dolor consequatur deleniti vel vero! Omnis, maiores quod similique ea, culpa at eligendi inventore obcaecati quam, qui pariatur rem rerum! Facere quisquam ipsa obcaecati maxime laborum quas voluptatibus officia error necessitatibus. Dolor esse tempora officiis quos impedit et error perferendis eaque nemo minima earum, doloremque expedita omnis animi repellat porro reprehenderit. Veniam unde consequatur molestias quod dicta autem, repudiandae velit nisi aliquam excepturi quo neque doloremque. Sequi, minima ipsum. Dolorem dignissimos soluta qui esse delectus, libero eligendi animi debitis perspiciatis et cumque. Soluta laboriosam aperiam praesentium. Repellat tempore laudantium quasi veniam cumque necessitatibus inventore unde doloribus, suscipit, quia et reiciendis molestiae nulla quo vero ut. Accusamus vitae deleniti nam, quos iusto amet!\r\n', '1704832590_8e531b9913464aaded3d.png'),
(4, 'pagani̇zm', 'PAGANİZM', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus doloremque libero nesciunt eligendi recusandae, repellat porro exercitationem aliquam, similique dolorem quo velit corporis, quaerat magni temporibus architecto iusto ab rerum officia accusamus sunt non ex voluptatum rem? Veniam dolor consequatur deleniti vel vero! Omnis, maiores quod similique ea, culpa at eligendi inventore obcaecati quam, qui pariatur rem rerum! Facere quisquam ipsa obcaecati maxime laborum quas voluptatibus officia error necessitatibus. Dolor esse tempora officiis quos impedit et error perferendis eaque nemo minima earum, doloremque expedita omnis animi repellat porro reprehenderit. Veniam unde consequatur molestias quod dicta autem, repudiandae velit nisi aliquam excepturi quo neque doloremque. Sequi, minima ipsum. Dolorem dignissimos soluta qui esse delectus, libero eligendi animi debitis perspiciatis et cumque. Soluta laboriosam aperiam praesentium. Repellat tempore laudantium quasi veniam cumque necessitatibus inventore unde doloribus, suscipit, quia et reiciendis molestiae nulla quo vero ut. Accusamus vitae deleniti nam, quos iusto amet!\r\n', '1704832613_dcc88b09857bec3ca3b5.png');

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
-- Indexes for table `dinler`
--
ALTER TABLE `dinler`
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
-- AUTO_INCREMENT for table `dinler`
--
ALTER TABLE `dinler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
