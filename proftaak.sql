-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Gegenereerd op: 22 jun 2020 om 11:47
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
  `email` text NOT NULL,
  `items` text NOT NULL,
  `tijd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `rooster`
--

INSERT INTO `rooster` (`id`, `voornaam`, `achternaam`, `email`, `items`, `tijd`) VALUES
(00000023, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000024, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000025, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000026, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000027, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000028, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000029, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000030, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000031, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000032, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000033, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000001;00000001', ''),
(00000034, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000035, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000036, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000037, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000038, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000039, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000040, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000041, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000042, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000043, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000044, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000045, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000046, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000047, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000048, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000049, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
(00000050, 'Ricardo', 'bettonvil', 'ricardobettonvil@gmail.com', '00000004;00000001', ''),
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
  `tijdstip` varchar(100) NOT NULL,
  `Beschrijving` text NOT NULL,
  `productImg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `tijden`
--

INSERT INTO `tijden` (`id`, `tijdstip`, `Beschrijving`, `productImg`) VALUES
(00000001, 'groen shirt', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/fredShirtGroen.jpg'),
(00000002, 'witte trui', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/truiLyleWit.jpg'),
(00000003, 'neonoranje vest', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/stoneIslandVestNeonoranje.jpg'),
(00000004, 'zwarte schoenen', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/lacosteZwarteSchoenen.jpg'),
(00000005, 'zwarte broek', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/zwarteBroekAdidas.jpg'),
(00000006, 'witte polo', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/DamesPoloFredWit.jpg'),
(00000007, 'regenboog trui', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/lacosteTruiDames.jpg'),
(00000008, 'roze schoenen', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/gazelleDamesRoze.png'),
(00000009, 'regenboog shirt', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/AdidasRainbowShirt.png'),
(00000010, 'navy lange polo', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/navyLongPoloLyle.jpg'),
(00000011, 'rode sport broek', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/RodeDamesBroekLacoste.jpg'),
(00000012, 'grijs shirt ', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/grayShirtStone.jpg'),
(00000013, 'navy vest', 'Het is al geruime tijd een bekend gegeven dat een lezer, tijdens het bekijken van de layout van een pagina, afgeleid wordt door de tekstuele inhoud. Het belangrijke punt van het gebruik van Lorem Ipsum is dat het uit een min of meer normale verdeling van letters bestaat, in tegenstelling tot \"Hier uw tekst, hier uw tekst\" wat het tot min of meer leesbaar nederlands maakt. Veel desktop publishing pakketten en web pagina editors gebruiken tegenwoordig Lorem Ipsum als hun standaard model tekst, en een zoekopdracht naar \"lorem ipsum\" ontsluit veel websites die nog in aanbouw zijn. Verscheidene versies hebben zich ontwikkeld in de loop van de jaren, soms per ongeluk soms expres (ingevoegde humor en dergelijke).', 'images/navyVestFred.jpg');

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
(00000008, 'noah', 'alba', 'noah.alba@hotmail.com', 'noah', 'TGZBcUdCd0tzT09tbzhLb1V5Q2FoQT09');

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
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT voor een tabel `userinformation`
--
ALTER TABLE `userinformation`
  MODIFY `id` int(8) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
