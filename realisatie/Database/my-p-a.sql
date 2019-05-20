-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 mei 2019 om 16:00
-- Serverversie: 10.1.36-MariaDB
-- PHP-versie: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my-p-a`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `abo`
--

CREATE TABLE `abo` (
  `Abo_ID` int(255) NOT NULL,
  `Soort` varchar(20) NOT NULL,
  `Prijs` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `abo`
--

INSERT INTO `abo` (`Abo_ID`, `Soort`, `Prijs`) VALUES
(1, 'Maand', 2.55);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `agenda`
--

CREATE TABLE `agenda` (
  `User_ID` int(255) NOT NULL,
  `Task_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `factuur`
--

CREATE TABLE `factuur` (
  `Factuur_ID` int(255) NOT NULL,
  `User_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `task`
--

CREATE TABLE `task` (
  `Task_ID` int(255) NOT NULL,
  `Priority` varchar(10) NOT NULL,
  `Description` text NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user`
--

CREATE TABLE `user` (
  `user_ID` int(255) NOT NULL,
  `E_mail` varchar(40) NOT NULL,
  `Voornaam` varchar(25) NOT NULL,
  `Achternaam` varchar(25) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `user`
--

INSERT INTO `user` (`user_ID`, `E_mail`, `Voornaam`, `Achternaam`, `password`) VALUES
(831873443, '', '', '', 'd41d8cd98f00b204e980'),
(831873447, 'beheer@mypa.com', 'beheer', 'van beheer', '21232f297a57a5a74389');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `user_abo`
--

CREATE TABLE `user_abo` (
  `Abo_ID` int(255) NOT NULL,
  `user_ID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `abo`
--
ALTER TABLE `abo`
  ADD PRIMARY KEY (`Abo_ID`);

--
-- Indexen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`User_ID`,`Task_ID`),
  ADD KEY `User_ID` (`User_ID`,`Task_ID`),
  ADD KEY `Task_ID` (`Task_ID`);

--
-- Indexen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD PRIMARY KEY (`Factuur_ID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexen voor tabel `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`Task_ID`);

--
-- Indexen voor tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_ID`),
  ADD UNIQUE KEY `E-mail` (`E_mail`);

--
-- Indexen voor tabel `user_abo`
--
ALTER TABLE `user_abo`
  ADD PRIMARY KEY (`Abo_ID`,`user_ID`),
  ADD KEY `Abo_ID` (`Abo_ID`,`user_ID`),
  ADD KEY `user_ID` (`user_ID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `abo`
--
ALTER TABLE `abo`
  MODIFY `Abo_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT voor een tabel `factuur`
--
ALTER TABLE `factuur`
  MODIFY `Factuur_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `task`
--
ALTER TABLE `task`
  MODIFY `Task_ID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `user`
--
ALTER TABLE `user`
  MODIFY `user_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=831873448;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `agenda`
--
ALTER TABLE `agenda`
  ADD CONSTRAINT `agenda_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`user_ID`),
  ADD CONSTRAINT `agenda_ibfk_2` FOREIGN KEY (`Task_ID`) REFERENCES `task` (`Task_ID`);

--
-- Beperkingen voor tabel `factuur`
--
ALTER TABLE `factuur`
  ADD CONSTRAINT `factuur_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `user` (`user_ID`);

--
-- Beperkingen voor tabel `user_abo`
--
ALTER TABLE `user_abo`
  ADD CONSTRAINT `user_abo_ibfk_1` FOREIGN KEY (`Abo_ID`) REFERENCES `abo` (`Abo_ID`),
  ADD CONSTRAINT `user_abo_ibfk_2` FOREIGN KEY (`user_ID`) REFERENCES `user` (`user_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
