-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 13. Feb 2017 um 15:35
-- Server-Version: 10.1.13-MariaDB
-- PHP-Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `mowe`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `movies`
--

CREATE TABLE `movies` (
  `mid` int(11) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `myear` float NOT NULL,
  `musk` float NOT NULL,
  `mrate` float NOT NULL,
  `mgenre1` varchar(50) NOT NULL,
  `mgenre2` varchar(50) DEFAULT NULL,
  `mgenre3` varchar(50) DEFAULT NULL,
  `mlenge` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `myear`, `musk`, `mrate`, `mgenre1`, `mgenre2`, `mgenre3`, `mlenge`) VALUES
(1, 'Die Verurteilten', 1994, 12, 9.4, 'Krimi', 'Drama', '', '2h 22m'),
(2, 'Der Pate', 1972, 16, 9.2, 'Krimi', 'Drama', '', '2h 55m'),
(3, 'Der Pate 2', 1974, 16, 9.0, 'Krimi', 'Drama', '', '3h 22m'),
(4, 'The Dark Night', 2008, 16, 8.9, 'Action', 'Krimi', 'Drama', '2h 32m'),
(5, 'Die zwölf Geschworenen', 1957, 12, 8.9, 'Krimi', 'Drama', '', '1h 36m'),
(6, 'Schindlers Liste', 1993, 12, 8.9, 'Biography', 'Drama', 'History', '3h 15m'),
(7, 'Pulp Fiction', 1994, 16, 8.9, 'Krimi', 'Drama', '', '2h 34m'),
(8, 'Der Herr der Ringe - Die Rückkehr des Königs', 2003, 12, 8.9, 'Krimi', 'Drama', '', '3h 21m'),
(9, 'Zwei glorreiche Halunken', 1966, 18, 8.8, 'Western', '', '', '2h 41m'),
(10, 'Fight Club', 1999, 18, 8.8, 'Drama', '', '', '2h 19m');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `users`
--

-- INSERT INTO `users` (`uid`, `username`, `password`) VALUES
-- (1, 'test', '827ccb0eea8a706c4c34a16891f84e7b'),
-- (2, 'qwe', '76d80224611fc919a5d54f0ff9fba446'),
-- (3, 'rehne', '81dc9bdb52d04dc20036dbd8313ed055'),
-- (4, 'qweqwe', 'efe6398127928f1b2e9ef3207fb82663');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`mid`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `movies`
--
ALTER TABLE `movies`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT ; */
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS ; */
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION ; */
