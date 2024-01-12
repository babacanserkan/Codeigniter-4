-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 01:56 AM
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
-- Database: `kahvecesitleri`
--

-- --------------------------------------------------------

--
-- Table structure for table `kahveler`
--

CREATE TABLE `kahveler` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kahveler`
--

INSERT INTO `kahveler` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(2, 'espresso', 'Espresso', 'Espresso, yoğun lezzeti ve kısa hazırlık süresi ile bilinen bir kahve çeşididir. Öğütülmüş kahve çekirdekleri üzerinden hızla geçen sıcak su ile hazırlanır. Sonuç olarak, güçlü bir aromaya ve koyu renge sahiptir.', '1705011031_5b8c5f4e612547ce733b.png'),
(3, 'americano', 'Americano', 'Amerikano, bir espresso üzerine sıcak su eklenerek yapılan bir kahve çeşididir. Bu, kahvenin daha hafif ve içimi daha kolay olmasını sağlar. Amerikano, espresso severler için daha uzun bir içim deneyimi sunar.', '1705011068_00e6a0437b05958005f6.png'),
(4, 'cappuccino', 'Cappuccino', 'Cappuccino, eşit oranlarda espresso, buharla ısıtılmış süt ve süt köpüğünün bir araya getirilmesiyle hazırlanan bir kahvedir. Üç katmanı olan bu içki, zengin bir lezzet profili sunar.', '1705013498_c24ba98b9b8c55b4856e.png'),
(5, 'latte', 'Latte', 'Latte, genellikle bir espresso üzerine sıcak süt ve ince bir süt köpüğünün eklenmesiyle yapılır. Daha hafif bir içim sunan bu kahve çeşidi, genellikle sütlü kahve sevenler tarafından tercih edilir.', '1705013587_03b9dc00a40fb0073105.png'),
(6, 'macchiato', 'Macchiato', 'Macchiato, bir espresso üzerine sadece bir miktar süt köpüğü veya süt ilavesi ile yapılan bir kahvedir. Bu, kahve tadını daha belirgin hale getirir ve yoğun bir lezzet sunar.\r\n\r\n', '1705013659_621540b7fbe457ba7298.png'),
(7, 'mocha', 'Mocha', 'Mocha, sıcak çikolata, espresso ve sütün mükemmel bir kombinasyonudur. Bu içki, tatlı sevenler için idealdir ve yoğun, çikolatalı bir lezzet profili sunar.\r\n\r\n', '1705013862_53159193ab0458c99a50.png'),
(8, 'turkish_coffee', 'Turkish Coffee', 'Türk kahvesi, ince öğütülmüş kahve çekirdekleriyle birlikte şeker ve suyun karıştırılmasıyla yapılır. Geleneksel olarak cezvede pişirilen bu kahve, yoğun ve köpüklü bir içimiyle bilinir.\r\n\r\n', '1705013880_f9f8b9ac9d4fb80ed524.png'),
(9, 'affogato', 'Affogato', 'Affogato, genellikle bir top vanilya dondurma veya dondurma üzerine sıcak espresso dökülerek yapılan bir tatlı kahvedir. Sıcak ve soğuk kontrastıyla dikkat çeker.\r\n\r\n', '1705013897_2c043e1af1621062ece2.png'),
(10, 'flat_white', 'Flat White', 'Flat White, bir espresso üzerine sıcak süt ve ince bir süt köpüğünün eklenmesiyle hazırlanan bir kahvedir. Bu içki, süt oranının daha yüksek olduğu bir yapıya sahiptir.\r\n\r\n', '1705013912_5bb46a3edf746de1d614.png'),
(11, 'cold_brew', 'Cold Brew', 'Cold Brew, soğuk su ile uzun süre demlenmiş öğütülmüş kahvedir. Daha yumuşak ve düşük asidik bir lezzete sahiptir. Genellikle buz ile servis edilir ve sıcak hava günlerinde tercih edilir.', '1705013931_875384bfe3f6a155324a.png');

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
(1, 'yonetici', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kahveler`
--
ALTER TABLE `kahveler`
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
-- AUTO_INCREMENT for table `kahveler`
--
ALTER TABLE `kahveler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
