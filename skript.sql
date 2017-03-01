-- phpMyAdmin SQL Dump
-- version 4.6.5.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Erstellungszeit: 01. Mrz 2017 um 20:36
-- Server-Version: 5.6.34
-- PHP-Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Datenbank: `mowe`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `genre`
--

CREATE TABLE `genre` (
  `genre` int(11) NOT NULL,
  `genrename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `genre`
--

INSERT INTO `genre` (`genre`, `genrename`) VALUES
(1, 'Abenteuer'),
(2, 'Action'),
(3, 'Animation'),
(4, 'Drama'),
(5, 'Fantasy'),
(6, 'Komödie'),
(7, 'Horror'),
(8, 'Kriegsfilm'),
(9, 'Krimi'),
(10, 'Liebesfilm'),
(11, 'Martial-Arts'),
(12, 'Musik'),
(13, 'Science-fiction'),
(14, 'Sport'),
(15, 'Thriller'),
(16, 'Western');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `moviehatgenre`
--

CREATE TABLE `moviehatgenre` (
  `moviemid` int(11) NOT NULL,
  `moviegenre0` int(11) DEFAULT NULL,
  `moviegenre1` int(11) DEFAULT NULL,
  `moviegenre2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `moviehatgenre`
--

INSERT INTO `moviehatgenre` (`moviemid`, `moviegenre0`, `moviegenre1`, `moviegenre2`) VALUES
(1, 9, 4, 0),
(2, 9, 4, 0),
(3, 9, 4, 0),
(4, 2, 9, 4),
(5, 9, 4, 0),
(6, 2, 1, 5),
(7, 9, 4, 15),
(8, 4, 8, 0),
(9, 16, 0, 0),
(10, 9, 4, 15);

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
  `mlenge` varchar(50) NOT NULL,
  `mdesc` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `movies`
--

INSERT INTO `movies` (`mid`, `mname`, `myear`, `musk`, `mrate`, `mlenge`, `mdesc`) VALUES
(1, 'Die Verurteilten', 1994, 12, 9.3, '2h 22min', 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.'),
(2, 'Der Pate', 1972, 16, 9.2, '2h 55min', 'The aging patriarch of an organized crime dynasty transfers control of his clandestine empire to his reluctant son.'),
(3, 'Der Pate 2', 1974, 16, 9, '3h 22min', 'The early life and career of Vito Corleone in 1920s New York is portrayed while his son, Michael, expands and tightens his grip on the family crime syndicate.'),
(4, 'The Dark Knight', 2008, 16, 9, '2h 32min', 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, the caped crusader must come to terms with one of the greatest psychological tests of his ability to fight injustice.'),
(5, 'Die zwölf Geschworenen', 1957, 12, 8.9, '1h 36min', 'A jury holdout attempts to prevent a miscarriage of justice by forcing his colleagues to reconsider the evidence.'),
(6, 'Das Imperium schlägt zurück', 1980, 6, 8.8, '2h 4min', 'After the rebels have been brutally overpowered by the Empire on their newly established base, Luke Skywalker takes advanced Jedi training with Master Yoda, while his friends are pursued by Darth Vader as part of his plan to capture Luke.'),
(7, 'Das Schweigen der Lämmer', 1991, 16, 8.6, '1h 58min', 'A young F.B.I. cadet must confide in an incarcerated and manipulative killer to receive his help on catching another serial killer who skins his victims.'),
(8, 'Der Soldat James Ryan', 1998, 16, 8.6, '2h 49min', 'Following the Normandy Landings, a group of U.S. soldiers go behind enemy lines to retrieve a paratrooper whose brothers have been killed in action.'),
(9, 'Spiel mir das Lied vom Tod', 1968, 16, 8.6, '2h 55min', 'A mysterious stranger with a harmonica joins forces with a notorious desperado to protect a beautiful widow from a ruthless assassin working for the railroad.'),
(10, 'Departed - Unter Feinden', 2006, 16, 8.5, '2h 31min', 'An undercover cop and a mole in the police attempt to identify each other while infiltrating an Irish gang in South Boston.');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `unname` varchar(50) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `uadresse` varchar(50) NOT NULL,
  `ustadt` varchar(50) NOT NULL,
  `uland` varchar(50) NOT NULL,
  `ualter` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genre`);

--
-- Indizes für die Tabelle `moviehatgenre`
--
ALTER TABLE `moviehatgenre`
  ADD KEY `fk_to_movie` (`moviemid`),
  ADD KEY `fk_to_genre` (`moviegenre0`);

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
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `moviehatgenre`
--
ALTER TABLE `moviehatgenre`
  ADD CONSTRAINT `fk_to_genre` FOREIGN KEY (`moviegenre0`) REFERENCES `genre` (`genre`),
  ADD CONSTRAINT `fk_to_movie` FOREIGN KEY (`moviemid`) REFERENCES `movies` (`mid`);
