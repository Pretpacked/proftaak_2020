-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Gegenereerd op: 25 jun 2020 om 11:28
-- Serverversie: 5.7.19
-- PHP-versie: 7.1.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proftaak`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `rooster`
--

CREATE TABLE `rooster` (
  `id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `voornaam` text NOT NULL,
  `achternaam` text NOT NULL,
  `tijden` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `tijd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rooster`
--

INSERT INTO `rooster` (`id`, `voornaam`, `achternaam`, `tijden`, `email`, `tijd`) VALUES
(00000058, 'ricardo', 'ter linde', '15:00 tot 18:00', 'ricardo@terlinde.eu', '8:00:00'),
(00000059, 'root', 'root', '00000014;00000014;00000021', 'root@root.nl', '2020/06/25 10:31:41'),
(00000060, 'root', 'root', '00000014;00000014;00000021', 'root@root.nl', '2020/06/25 10:49:58'),
(00000061, 'root', 'root', '00000014;00000014;00000021', 'root@root.nl', '2020/06/25 10:52:18');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tijden`
--

CREATE TABLE `tijden` (
  `id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `vakken` varchar(255) NOT NULL,
  `tijdstip` varchar(100) NOT NULL,
  `Beschrijving` text NOT NULL,
  `productImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tijden`
--

INSERT INTO `tijden` (`id`, `vakken`, `tijdstip`, `Beschrijving`, `productImg`) VALUES
(00000014, 'Nederlands', '6 juli 2020 - 12:30 tot 13:50', 'Toets Nederlands ', 'images/6juli_nl.JPG'),
(00000015, 'Nederlands', '8 juli 2020 - 14:00 tot 15:30', 'Nederlands toets', 'images/8juli_nl.JPG'),
(00000016, 'Nederlands', '10 juli 2020 - 14:30 tot 16:00', 'Nederlands toets', 'images/10juli_nl.JPG'),
(00000017, 'Engels', '7 juli 2020 - 13:00 tot 14:45', 'Engels toets', 'images/7juli_eng.JPG'),
(00000018, 'Engels', '8 juli 2020 - 11:00 tot 12:45', 'Engels toets', 'images/8juli_eng.JPG'),
(00000019, 'Engels', '9 juli 2020 - 12:00 tot 13:45', 'Engels toets', 'images/9juli_eng.JPG'),
(00000020, 'Rekenen', '6 juli 2020 - 14:30 tot 16:00', 'Rekenen toets', 'images/rekenen_6jul.JPG'),
(00000021, 'Rekenen', '7 juli 2020 - 15:30 tot 17:00', 'Rekenen toets', 'images/rekenen_7jul.JPG'),
(00000022, 'Rekenen', '7 juli 2020 - 15:30 tot 17:00', 'Rekenen toets', 'images/rekenen_7jul.JPG');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `userinformation`
--

CREATE TABLE `userinformation` (
  `id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `studie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userinformation`
--

INSERT INTO `userinformation` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `studie`) VALUES
(00000001, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', 'test', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09', ''),
(00000002, 'test', 'test', 'test1@gmail.com', 'test1', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09', ''),
(00000003, 'sadfasdf', 'sdafdsaf', 'fsadf@sdfsadf.com', 'sdafas', 'NHZGQkpCL2dZNDErTXNZRkszazVpZz09', ''),
(00000005, 'root', 'root', 'root@root.nl', 'root', 'TGZBcUdCd0tzT09tbzhLb1V5Q2FoQT09', ''),
(00000006, 'Rianne', 'Ter Linde', 'rianne@terlinde.eu', 'Rianne', 'L3E0a2J4bHR6SVZyR1VrSHdhQkczQT09', ''),
(00000007, 'ricardo', 'ter', 'ricardo@terlinde.eu', 'ricardo', 'R0FzOUllbkdJN05NZVM2VlBlR2xOUT09', ''),
(00000009, 'admin', 'admin', 'admin@admin.nl', 'admin', 'OVUwd001SGRwZVZTOTVURjAweW0rdz09', ''),
(00000010, 'noah', 'noah', 'noah.noah@noah.noah', 'noah', 'NVVGN05TancwSFZPcXpsTjYvUzZGQT09', ''),
(00000011, 'Lars', 'van Breugel', 'larsvanbreugel@hotmail.com', 'lars', 'cFNmL0lod3NKQkpBSFlSQ0g3d1padz09', ''),
(00000012, 'pen', 'pen', 'pen@pen.nl', 'pen', 'c0dxdGJTbjNsWXRJVTNObCtWMi81UT09', 'pen');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `rooster`
--
ALTER TABLE `rooster`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tijden`
--
ALTER TABLE `tijden`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Beschrijving` (`id`);

--
-- Indexen voor tabel `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `rooster`
--
ALTER TABLE `rooster`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT voor een tabel `tijden`
--
ALTER TABLE `tijden`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT voor een tabel `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
