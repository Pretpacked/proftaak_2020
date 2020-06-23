-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 23 jun 2020 om 12:21
-- Serverversie: 10.4.6-MariaDB
-- PHP-versie: 7.3.8

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
  `email` text NOT NULL,
  `items` text NOT NULL,
  `tijd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rooster`
--

INSERT INTO `rooster` (`id`, `voornaam`, `achternaam`, `email`, `items`, `tijd`) VALUES
(00000051, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000052, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000053, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000054, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000055, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000056, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001;00000001', ''),
(00000057, 'root', 'root', 'root@root.nl', '00000001', '');

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
(00000014, 'Nederlands', '1 juli 2020 - 12:30 ', 'Toets Nederlands ', '');

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
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userinformation`
--

INSERT INTO `userinformation` (`id`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(00000001, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', 'test', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09'),
(00000002, 'test', 'test', 'test1@gmail.com', 'test1', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09'),
(00000003, 'sadfasdf', 'sdafdsaf', 'fsadf@sdfsadf.com', 'sdafas', 'NHZGQkpCL2dZNDErTXNZRkszazVpZz09'),
(00000005, 'root', 'root', 'root@root.nl', 'root', 'TGZBcUdCd0tzT09tbzhLb1V5Q2FoQT09'),
(00000006, 'Rianne', 'Ter Linde', 'rianne@terlinde.eu', 'Rianne', 'L3E0a2J4bHR6SVZyR1VrSHdhQkczQT09'),
(00000007, 'ricardo', 'ter', 'ricardo@terlinde.eu', 'ricardo', 'R0FzOUllbkdJN05NZVM2VlBlR2xOUT09'),
(00000008, 'noah', 'alba', 'noah.alba@hotmail.com', 'noah', 'TGZBcUdCd0tzT09tbzhLb1V5Q2FoQT09'),
(00000009, 'admin', 'admin', 'admin@admin.nl', 'admin', 'OVUwd001SGRwZVZTOTVURjAweW0rdz09');

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
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT voor een tabel `tijden`
--
ALTER TABLE `tijden`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
