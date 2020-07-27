-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 27 Tem 2020, 15:24:34
-- Sunucu sürümü: 10.4.8-MariaDB
-- PHP Sürümü: 7.2.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `basephp`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `ID` int(10) UNSIGNED NOT NULL,
  `USERNAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `PASSWORD` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `_NAME_` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SURNAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `DEPARTMENT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `CREATE_AT` timestamp NOT NULL DEFAULT current_timestamp(),
  `LOGIN_AT` timestamp NULL DEFAULT NULL,
  `LOGIN_IP` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`ID`, `USERNAME`, `PASSWORD`, `_NAME_`, `SURNAME`, `EMAIL`, `DEPARTMENT`, `CREATE_AT`, `LOGIN_AT`, `LOGIN_IP`) VALUES
(1, 'admin', '12345678', 'System', 'Administrator', NULL, 'admin', '2020-05-15 23:46:49', NULL, NULL),
(2, 'timemrah', '718poplata', 'Mehmet Emrah', 'Tunçel', 'timemrah@gmail.com', 'admin', '2020-06-04 14:05:57', NULL, NULL);

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `USERNAME` (`USERNAME`),
  ADD UNIQUE KEY `EMAIL` (`EMAIL`),
  ADD KEY `_NAME_` (`_NAME_`),
  ADD KEY `DEPARTMENT` (`DEPARTMENT`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
