-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Gegenereerd op: 12 jun 2026 om 10:18
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
-- Tabelstructuur voor tabel `Accomodations`
--

CREATE TABLE `Accomodations` (
  `AccomodationID` int NOT NULL,
  `Type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'The type of accomodation',
  `Stars` int NOT NULL COMMENT 'The quality the accomodation has',
  `Lodging` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL COMMENT 'The kind of lodging the accomodation has in terms of food coverage',
  `RentalCar` varchar(50) DEFAULT NULL COMMENT 'The availability of rental cars',
  `Persons` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Accomodations`
--

INSERT INTO `Accomodations` (`AccomodationID`, `Type`, `Stars`, `Lodging`, `RentalCar`, `Persons`) VALUES
(1, 'Hotel', 5, 'Logies en ontbijt', 'Optionele huurauto', 6),
(2, 'Hotel', 5, 'All inclusive', NULL, 6),
(3, 'Vakantiehuis', 4, 'Logies', 'Inclusief huurauto', 4),
(4, 'Appartement', 5, 'All inclusive', NULL, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Flights`
--

CREATE TABLE `Flights` (
  `FlightID` int NOT NULL,
  `FlightNumber` int NOT NULL,
  `Transfers` int NOT NULL,
  `Duration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Flights`
--

INSERT INTO `Flights` (`FlightID`, `FlightNumber`, `Transfers`, `Duration`) VALUES
(1, 929, 1, 6),
(2, 938, 2, 8),
(3, 878, 1, 3),
(4, 697, 1, 4);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Review`
--

CREATE TABLE `Review` (
  `ReviewID` int NOT NULL,
  `UserID` int NOT NULL,
  `ReviewScore` int NOT NULL,
  `ReviewText` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Review`
--

INSERT INTO `Review` (`ReviewID`, `UserID`, `ReviewScore`, `ReviewText`) VALUES
(1, 3, 8, 'As one of my first experiences flying, I loved how clear the traveling agency communicated the details of the journey the hotel was also great, I will definetely visit again.'),
(2, 2, 9, 'I really enjoyed the vacation park with my family of 4 kids, they really enjoyed all the various waterslides and the flight there was quite comfortable. I will definetely be looking at other trips I can find on the website.'),
(3, 5, 5, 'Ok, so like the plane was like so ordinary and hotel wasn\'t even that fancy, I also got sunburn which is so the hotels fault for not offering me free sunlotion to use. Like that\'s soo rude.'),
(4, 4, 7, 'Great appartment, I had a good stay while I was away on businness trip, good service though the food wasn\'t too good of quality. A shame too since it was all inclusive.'),
(5, 2, 9, 'Great hotel reception, good food and a pleasant trip all together. I did feel like there was something missing, but I sadly can\'t place my finger on what that would be. ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `Trip`
--

CREATE TABLE `Trip` (
  `TripID` int NOT NULL,
  `Location` varchar(255) NOT NULL,
  `AccomodationID` int NOT NULL,
  `FlightID` int NOT NULL,
  `ReviewID` int NOT NULL,
  `Transport` varchar(50) NOT NULL,
  `Price` double NOT NULL,
  `Sale_option` varchar(50) DEFAULT NULL COMMENT 'Of het scherp geprijsd is, en of kassakorting heeft. Bij geen van beide gewoon leeg laten',
  `Image` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL COMMENT 'The image of the location'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `Trip`
--

INSERT INTO `Trip` (`TripID`, `Location`, `AccomodationID`, `FlightID`, `ReviewID`, `Transport`, `Price`, `Sale_option`, `Image`) VALUES
(1, 'Zakynthos', 1, 1, 3, 'Via Eindhoven', 905, NULL, './assets/img/Zakynthos-beach.jpg'),
(2, 'Zakynthos', 2, 2, 1, 'Via Eindhoven', 905, NULL, './assets/img/Zakynthos-beach-2.jpg'),
(3, 'Barcelona', 3, 3, 2, 'Via Düsseldorf', 785, NULL, './assets/img/Barcelona.jpg'),
(4, 'Mallorca', 4, 2, 4, 'Via Schiphol', 901, NULL, './assets/img/Mallorca-image-1.png'),
(5, 'Aruba', 2, 1, 5, 'Via Amsterdam', 895, NULL, './assets/img/Aruba.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `User`
--

CREATE TABLE `User` (
  `UserID` int NOT NULL,
  `Username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Role` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Gegevens worden geëxporteerd voor tabel `User`
--

INSERT INTO `User` (`UserID`, `Username`, `Password`, `Role`) VALUES
(1, 'CarmitchAdmin', 'INMS2026', 'admin'),
(2, 'TheTripConneseur42', 'ILoveTraveling#247', 'user'),
(3, 'RookieTraveler69', 'WhatsAFlightNumber979', 'user'),
(4, 'BusinessGuy', 'ILoveMoney247', 'user'),
(5, 'InstaModel1', 'SoTrendy4Real', 'user');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `Accomodations`
--
ALTER TABLE `Accomodations`
  ADD PRIMARY KEY (`AccomodationID`);

--
-- Indexen voor tabel `Flights`
--
ALTER TABLE `Flights`
  ADD PRIMARY KEY (`FlightID`);

--
-- Indexen voor tabel `Review`
--
ALTER TABLE `Review`
  ADD PRIMARY KEY (`ReviewID`),
  ADD KEY `FK_UserID` (`UserID`);

--
-- Indexen voor tabel `Trip`
--
ALTER TABLE `Trip`
  ADD PRIMARY KEY (`TripID`),
  ADD KEY `FK_AccomodationID` (`AccomodationID`),
  ADD KEY `FK_FlightID` (`FlightID`);

--
-- Indexen voor tabel `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `Accomodations`
--
ALTER TABLE `Accomodations`
  MODIFY `AccomodationID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `Flights`
--
ALTER TABLE `Flights`
  MODIFY `FlightID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT voor een tabel `Review`
--
ALTER TABLE `Review`
  MODIFY `ReviewID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `Trip`
--
ALTER TABLE `Trip`
  MODIFY `TripID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `User`
--
ALTER TABLE `User`
  MODIFY `UserID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `Review`
--
ALTER TABLE `Review`
  ADD CONSTRAINT `FK_UserID` FOREIGN KEY (`UserID`) REFERENCES `User` (`UserID`);

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
