-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 10 Feb 2025 pada 06.33
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `practicaltestdb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_adminags` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_adminags`, `username`, `password`) VALUES
('1', 'admin', '1234');

-- --------------------------------------------------------

--
-- Struktur dari tabel `distributor`
--

CREATE TABLE `distributor` (
  `id` int(11) NOT NULL,
  `distributor_name` varchar(255) NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `state_region` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `distributor`
--

INSERT INTO `distributor` (`id`, `distributor_name`, `city`, `state_region`, `country`, `phone`, `email`) VALUES
(1, 'aSAAS', 'SADA', NULL, NULL, NULL, NULL),
(2, 'asdnasl', 'asdkasdn', NULL, NULL, NULL, NULL),
(3, 'asdas', 'assdas', 'asdas', NULL, '12312', 'theodoxa.dava@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tablebeans`
--

CREATE TABLE `tablebeans` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tablebeans`
--

INSERT INTO `tablebeans` (`id`, `name`, `description`, `price`) VALUES
(1, 'Cubita', 'Chibta Coffee is sun-dried and hand-sorted. It originates from an elevation of over 2000 meters in the Andes Mountains of Ecuador, which is located closest to the sun on the Equator. Superb aroma and rich flavor.', '12.00'),
(2, 'Colombian Supremo', 'This smooth, full-flavored coffee from Colombia boasts a sweet delicate aroma and a rich, balanced flavor. A classic coffee appropriate for any occasion.', '14.00'),
(3, 'Pure Kona Fancy', 'Grown on the Big Island of Hawaii, this coffee is known for its tantalizing aroma. The medium-bodied brew offers a rich flavor with subtle winy tones.', '16.00'),
(4, 'Kenyan', 'The complex coffee from the highlands of East Africa features a winy, full flavor coupled with an inviting aroma. A delightfully delicate selection for coffee lovers.', '24.00'),
(5, 'Costa Rican', 'Arabicas normally set aside for the demanding Northern European market produce this lively, well-balanced coffee distinguished by its snappy, clean taste.', '12.00'),
(6, 'Kona Peaberry', 'Occasionally coffee fruit produces a single, rather than a double, bean. These \"peaberries\" provide all the flavor and aroma of their larger, regular cousins, but in a smaller package.', '10.00'),
(7, 'Sumatra', 'The woodsy, cocoa-like finish of this smooth, full-bodied coffee is reminiscent of rich, dark chocolate. Its unique characteristics can only be captured from the rich soils of Indonesia.', '14.00'),
(8, 'Kona Blend', '25% Kona, 25% Sumatra and 50% Colombian. This combination unites the fragrant aroma of Kona with the full body of Sumatra and the dry spice of Colombian.', '12.00'),
(9, 'Kona Espresso', 'Some like it dark roasted to give it the smoky, bittersweet taste that espresso drinkers crave.', '13.00'),
(10, 'Italian Roast', 'Roasted in the Southern Italian tradition, this boldly flavored dark roast is a perfect choice for either a hearty cup of drip coffee or a shot of espresso.', '12.00'),
(11, 'Chibta', 'Chibta Coffee is sun-dried and hand-sorted. It originates from an elevation of over 2000 meters in the Andes Mountains of Ecuador, which is located closest to the sun on the Equator. Superb aroma and rich flavor.', '12.00'),
(12, 'Colombian Supremo', 'This smooth, full-flavored coffee from Colombia boasts a sweet delicate aroma and a rich, balanced flavor. A classic coffee appropriate for any occasion.', '13.50'),
(13, 'Pure Kona Fancy', 'Grown on the Big Island of Hawaii, this coffee is known for its tantalizing aroma. The medium-bodied brew offers a rich flavor with subtle winy tones.', '15.90'),
(14, 'Kenyan', 'The complex coffee from the highlands of East Africa features a winy, full flavor coupled with an inviting aroma. A delightfully delicate selection for coffee lovers.', '24.00'),
(15, 'Costa Rican', 'Arabicas normally set aside for the demanding Northern European market produce this lively, well-balanced coffee distinguished by its snappy, clean taste.', '12.30'),
(16, 'Kona Peaberry', 'Occasionally coffee fruit produces a single, rather than a double, bean. These \"peaberries\" provide all the flavor and aroma of their larger, regular cousins, but in a smaller package.', '10.00'),
(17, 'Sumatra', 'The woodsy, cocoa-like finish of this smooth, full-bodied coffee is reminiscent of rich, dark chocolate. Its unique characteristics can only be captured from the rich soils of Indonesia.', '14.00'),
(18, 'Kona Blend', '25% Kona, 25% Sumatra and 50% Colombian. This combination unites the fragrant aroma of Kona with the full body of Sumatra and the dry spice of Colombian.', '12.15'),
(19, 'Kona Espresso', 'Some like it dark roasted to give it the smoky, bittersweet taste that espresso drinkers crave.', '13.00'),
(20, 'Italian Roast', 'Roasted in the Southern Italian tradition, this boldly flavored dark roast is a perfect choice for either a hearty cup of drip coffee or a shot of espresso.', '11.90');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `distributor`
--
ALTER TABLE `distributor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indeks untuk tabel `tablebeans`
--
ALTER TABLE `tablebeans`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `distributor`
--
ALTER TABLE `distributor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tablebeans`
--
ALTER TABLE `tablebeans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
