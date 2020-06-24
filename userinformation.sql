-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 24 jun 2020 om 12:24
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
-- Tabelstructuur voor tabel `userinformation`
--

CREATE TABLE `userinformation` (
  `id` int(8) UNSIGNED ZEROFILL NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `email` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `opleiding` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `userinformation`
--

INSERT INTO `userinformation` (`id`, `firstname`, `lastname`, `email`, `username`, `password`, `opleiding`) VALUES
(00000001, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', 'test', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09', ''),
(00000002, 'test', 'test', 'test1@gmail.com', 'test1', 'bnZmMmRLVGpKLzBITEJRZ3BpNi92Zz09', ''),
(00000003, 'sadfasdf', 'sdafdsaf', 'fsadf@sdfsadf.com', 'sdafas', 'NHZGQkpCL2dZNDErTXNZRkszazVpZz09', ''),
(00000005, 'root', 'root', 'root@root.nl', 'root', 'TGZBcUdCd0tzT09tbzhLb1V5Q2FoQT09', ''),
(00000006, 'Rianne', 'Ter Linde', 'rianne@terlinde.eu', 'Rianne', 'L3E0a2J4bHR6SVZyR1VrSHdhQkczQT09', ''),
(00000007, 'ricardo', 'ter', 'ricardo@terlinde.eu', 'ricardo', 'R0FzOUllbkdJN05NZVM2VlBlR2xOUT09', ''),
(00000009, 'admin', 'admin', 'admin@admin.nl', 'admin', 'OVUwd001SGRwZVZTOTVURjAweW0rdz09', ''),
(00000010, 'noah', 'noah', 'noah.noah@noah.noah', 'noah', 'NVVGN05TancwSFZPcXpsTjYvUzZGQT09', '');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `userinformation`
--
ALTER TABLE `userinformation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
