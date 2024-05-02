-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Mag 01, 2024 alle 23:52
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klips`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `klip`
--

CREATE TABLE `klip` (
  `idutente` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `gioco` varchar(50) NOT NULL,
  `nGG` int(11) NOT NULL,
  `titolo` varchar(100) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `klip`
--

INSERT INTO `klip` (`idutente`, `id`, `gioco`, `nGG`, `titolo`, `path`) VALUES
(6, 2, 'league', 2, '', 'Grafiche/video-background.mp4'),
(6, 3, '', 4, '', 'Grafiche/video-background.mp4');

-- --------------------------------------------------------

--
-- Struttura della tabella `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(50) DEFAULT NULL,
  `bio` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `foto`, `bio`) VALUES
(5, 'test', 'test@test.it', '$2y$10$P1Vxpw0IsnTR5Ocd0Flki..Ywpx1xAjDZF2E/mnxAAx.TayJn7zrG', '', 'ciao sono una biografia'),
(6, 'test2', 'test2@test2.it', '$2y$10$ARVQIrdhlmzpqO3ciPI3buEs.8tu.GN8SAJBd13EXhi/LHqvFbZZ6', 'Grafiche/propic.jpg', 'ciao sono una biografia');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `klip`
--
ALTER TABLE `klip`
  ADD PRIMARY KEY (`id`),
  ADD KEY `foreign key utente` (`idutente`);

--
-- Indici per le tabelle `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `klip`
--
ALTER TABLE `klip`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la tabella `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `klip`
--
ALTER TABLE `klip`
  ADD CONSTRAINT `foreign key utente` FOREIGN KEY (`idutente`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
