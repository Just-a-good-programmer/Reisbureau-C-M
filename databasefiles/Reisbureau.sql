-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 19 mei 2026 om 10:02
-- Serverversie: 8.4.8
-- PHP-versie: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carmitchreizen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Trip`
--

CREATE TABLE `Trip` (
  `TripID` int NOT NULL,
  `Location` varchar(255) NOT NULL,
  `AccomodationID` int NOT NULL,
  `FlightID` int NOT NULL,
  `Price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Trip`
--
ALTER TABLE `Trip`
  ADD PRIMARY KEY (`TripID`),
  ADD KEY `FK_AccomodationID` (`AccomodationID`),
  ADD KEY `FK_FlightID` (`FlightID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Trip`
--
ALTER TABLE `Trip`
  MODIFY `TripID` int NOT NULL AUTO_INCREMENT;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Trip`
--
ALTER TABLE `Trip`
  ADD CONSTRAINT `FK_AccomodationID` FOREIGN KEY (`AccomodationID`) REFERENCES `Accomodations` (`AccomodationID`),
  ADD CONSTRAINT `FK_FlightID` FOREIGN KEY (`FlightID`) REFERENCES `Flights` (`FlightID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
