-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 17 mei 2022 om 09:01
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lottery`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `participants`
--

CREATE TABLE `participants` (
  `idparticipant` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `preposition` varchar(12) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `participant_answers`
--

CREATE TABLE `participant_answers` (
  `idanswers` int(11) NOT NULL,
  `firstanswer` int(11) NOT NULL,
  `secondanswer` int(11) NOT NULL,
  `thirdanswer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quizparticipation`
--

CREATE TABLE `quizparticipation` (
  `idparticipation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quizquestions`
--

CREATE TABLE `quizquestions` (
  `firstquestion` varchar(255) NOT NULL,
  `secondquestion` varchar(255) NOT NULL,
  `thirdquestion` varchar(255) NOT NULL,
  `fourthquestion` varchar(255) NOT NULL,
  `fifthquestion` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quizquestion_choices`
--

CREATE TABLE `quizquestion_choices` (
  `firstquestion_choices` varchar(255) NOT NULL,
  `secondquestion_choices` varchar(255) NOT NULL,
  `thirdquestion_choices` varchar(255) NOT NULL,
  `fourthquestion_choices` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `quizzes`
--

CREATE TABLE `quizzes` (
  `idquiz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`idparticipant`);

--
-- Indexen voor tabel `participant_answers`
--
ALTER TABLE `participant_answers`
  ADD PRIMARY KEY (`idanswers`);

--
-- Indexen voor tabel `quizparticipation`
--
ALTER TABLE `quizparticipation`
  ADD PRIMARY KEY (`idparticipation`);

--
-- Indexen voor tabel `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`idquiz`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `participant_answers`
--
ALTER TABLE `participant_answers`
  MODIFY `idanswers` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `quizparticipation`
--
ALTER TABLE `quizparticipation`
  MODIFY `idparticipation` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `idquiz` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
