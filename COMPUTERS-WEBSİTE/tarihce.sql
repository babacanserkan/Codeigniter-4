-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 01:13 AM
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
-- Database: `tarihce`
--

-- --------------------------------------------------------

--
-- Table structure for table `computers`
--

CREATE TABLE `computers` (
  `id` int(11) NOT NULL,
  `url` varchar(100) NOT NULL,
  `baslik` varchar(255) NOT NULL,
  `icerik` text NOT NULL,
  `resim` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `computers`
--

INSERT INTO `computers` (`id`, `url`, `baslik`, `icerik`, `resim`) VALUES
(1, 'mekanik_hesap_makineleri', 'Mekanik Hesap Makineleri ', 'Mekanik Hesap Makineleri ve Bilgisayarın İlk Adımları\r\nBu dönemde, Charles Babbage\'in çalışmaları ve ilk mekanik hesap makineleriyle bilgisayarın temelleri atıldı. Ancak, gerçek anlamda çalışan bir bilgisayar henüz geliştirilmemişti.', '1704929862_0ccf2abc276ef483c2cc.jpg'),
(2, 'elektron_tüpleri', 'Elektron Tüpleri', ' Elektron Tüpleri ve İlk Elektronik Bilgisayar Denemeleri\r\nBu on yıl, elektron tüplerinin keşfiyle birlikte ilk elektronik bilgisayar denemelerinin yapıldığı bir döneme işaret eder. Ancak, bu bilgisayarlar büyük, hantal ve güvenilir değildi.', '1704930689_3fc101bb44bfbe72916f.png'),
(3, 'ticari_kullanımlar', 'Ticari Kullanımlar', '1920-1930: Elektronik Bilgisayarların Gelişimi ve İlk Ticari Kullanımlar\r\nBu dönemde, elektronik bilgisayarların gelişimi hız kazandı. İlk ticari bilgisayarlar ortaya çıktı ve işletmelerde hesaplamaların otomatikleştirilmesi için kullanılmaya başlandı.', '1704930793_5e9ed16a3be4ac321f23.jpg'),
(4, 'hızlı_bilgisayar_gelişimi', 'Hızlı Bilgisayar Gelişimi', '1930-1940: II. Dünya Savaşı ve Hızlı Bilgisayar Gelişimi\r\nII. Dünya Savaşı, bilgisayar teknolojisinin hızla gelişmesine yol açtı. İlk programlanabilir bilgisayarlar üretildi ve askeri hesaplamalarda kullanıldı.', '1704930818_bc6ae2b828c2525286b9.jpg'),
(5, 'transistör_devri', 'Transistör Devri', '1940-1950: Transistör Devri ve Mainframe Bilgisayarlar\r\nTransistörlerin icadı, bilgisayar teknolojisinin daha küçük ve daha güvenilir hale gelmesini sağladı. Mainframe bilgisayarlar, büyük organizasyonlarda kullanılmak üzere tasarlandı.', '1704930842_bb352459312c76665473.jpg'),
(6, 'kişisel_hesaplama', 'Kişisel Hesaplama', '1950-1960: Bilgisayarlar Kişisel Hesaplamaya Doğru\r\nBu dönem, bilgisayarların kişisel kullanıma daha fazla açıldığı bir dönemi işaret eder. İlk kişisel bilgisayarlar geliştirildi ve işletmelerde ve evlerde yaygınlaşmaya başladı.', '1704930862_9edc7c414a6f661a6c10.webp'),
(7, 'entegre_devreler', ' Entegre Devreler', '1960-1970: Entegre Devreler ve Minibayarlar\r\nEntegre devrelerin ortaya çıkışı, bilgisayarların daha küçük ve taşınabilir hale gelmesine olanak tanıdı. Minibayarlar, bu dönemde popülerlik kazandı ve işletmelerde kullanıldı.', '1704930929_e7ad207b4398ea0dbb93.jpg'),
(8, 'mikro_i̇şlemciler', ' Mikro İşlemciler', '1970-1980: Mikro İşlemciler ve Ev Bilgisayarları\r\nMikro işlemcilerin gelişimi, bilgisayarların küçülmesini ve ev bilgisayarlarının ortaya çıkmasını sağladı. Bu dönemde kişisel bilgisayarlar, ev kullanıcıları için daha erişilebilir hale geldi.', '1704930948_43180781e7117ab47119.webp'),
(9, 'bilgisayar_ağları', 'Bilgisayar Ağları', '1980-1990: Bilgisayar Ağları ve Kişisel Bilgisayarların Yaygın Kullanımı\r\nBu on yıl, bilgisayar ağlarının yaygınlaşması ve kişisel bilgisayarların ev ve iş kullanıcıları arasında yaygınlaşmasıyla dikkat çeker. Grafik arayüzleri ve kullanıcı dostu işletim sistemleri ortaya çıktı.', '1704931027_f1e00a458405e491b8e9.webp'),
(10, 'i̇nternet_çağı_ve_dijital_devrim', ' İnternet Çağı ve Dijital Devrim', '1990-2000: İnternet Çağı ve Dijital Devrim\r\nİnternetin geniş çapta kullanılmaya başlaması, bu dönemi karakterize eder. Bilgisayarlar arasındaki iletişim arttı, akıllı cihazlar gelişti ve bilgisayarlar günlük hayatın ayrılmaz bir parçası haline geldi.', '1704931051_61ce4dfa42b512bd2e77.jpg');

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
-- Indexes for table `computers`
--
ALTER TABLE `computers`
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
-- AUTO_INCREMENT for table `computers`
--
ALTER TABLE `computers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
