-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Anamakine: localhost
-- Üretim Zamanı: 15 May 2019, 09:03:27
-- Sunucu sürümü: 5.7.25
-- PHP Sürümü: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `gittigidiyor`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `beverage_cupboard`
--

CREATE TABLE `beverage_cupboard` (
  `id` int(11) NOT NULL,
  `door` int(11) NOT NULL DEFAULT '0',
  `cover` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `beverage_cupboard`
--

INSERT INTO `beverage_cupboard` (`id`, `door`, `cover`) VALUES
(1, 3, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `beverage_rack`
--

CREATE TABLE `beverage_rack` (
  `id` int(11) NOT NULL,
  `cupboard_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `max_quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Tablo döküm verisi `beverage_rack`
--

INSERT INTO `beverage_rack` (`id`, `cupboard_id`, `quantity`, `max_quantity`) VALUES
(1, 1, 16, 20),
(2, 1, 13, 20),
(3, 1, 20, 20);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `beverage_cupboard`
--
ALTER TABLE `beverage_cupboard`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `beverage_rack`
--
ALTER TABLE `beverage_rack`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `beverage_cupboard`
--
ALTER TABLE `beverage_cupboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `beverage_rack`
--
ALTER TABLE `beverage_rack`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
