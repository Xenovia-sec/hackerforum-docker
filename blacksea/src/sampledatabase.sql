-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 21 Haz 2022, 07:50:43
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `electric_systems`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `e_users`
--

CREATE TABLE `e_users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(40) NOT NULL,
  `country` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `e_company` varchar(40) NOT NULL,
  `l_invoice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `e_users`
--

INSERT INTO `e_users` (`id`, `name`, `surname`, `email`, `address`, `city`, `country`, `phone`, `e_company`, `l_invoice`) VALUES
(1, 'B********', 'A********', 'B****A******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421112222', 'BKKE', 250),
(2, 'A*******', 'C*******', 'A****C******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421112233', 'BKKE', 400);
(3, 'Y*******', 'B*******', 'Y******B*******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+9054215512233', 'BKKE', 600);
(4, 'K*******', 'M*******', 'K******M*******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421162733', 'BKKE', 150);
(5, 'N*******', 'Z*******', 'N******Z*******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905428812293', 'BKKE', 300);
(6, 'T*******', 'B*******', 'T****B******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421332239', 'BKKE', 450);
(7, 'M*******', 'T*******', 'M****T******@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421412536', 'BKKE', 800);
(8, 'O***', 'A***', 'O***A****@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421119876', 'BKKE', 900);
(9, 'B****', 'K***', 'B****K***@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+90542111456', 'BKKE', 152);
(10, 'F*****', 'K*****', 'F*****K*****@bkkelektrik.com', 'Terakki, Dr. Oğuz Gürcan Sk (Soğuksu Sk.), 67100 Zonguldak Merkez/Zonguldak', 'Zonguldak', 'Türkiye', '+905421134567', 'BKKE', 235);
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `e_users`
--
ALTER TABLE `e_users`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `e_users`
--
ALTER TABLE `e_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
