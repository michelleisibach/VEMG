-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 01. Dez 2019 um 18:38
-- Server-Version: 10.1.38-MariaDB
-- PHP-Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `hautbois`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `filme`
--

CREATE TABLE `filme` (
  `Film_ID` int(11) NOT NULL,
  `Name` varchar(100) NOT NULL,
  `Year` varchar(100) NOT NULL,
  `Genre` varchar(100) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Url` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `filme`
--

INSERT INTO `filme` (`Film_ID`, `Name`, `Year`, `Genre`, `Description`, `Url`) VALUES
(1, 'Titanic', '2020', 'Romatic', 'lorme impsum dolor blub', 'titanic-title-banner.jpg'),
(2, 'Hangover', '1835', 'Komödie', 'lorme impsum dolor blub', 'th.jpg'),
(3, 'Benjamin Blümchen', '2005', 'Action', 'lorme impsum dolor blub', 'Masken_BannerNEU.jpg'),
(4, 'Roadhouse', '2000', 'Sitcom', 'lorme impsum dolor blub', 'roadhouse-banner.jpg');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `filme`
--
ALTER TABLE `filme`
  ADD PRIMARY KEY (`Film_ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `filme`
--
ALTER TABLE `filme`
  MODIFY `Film_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
