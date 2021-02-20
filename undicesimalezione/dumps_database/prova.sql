-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 07, 2020 alle 21:23
-- Versione del server: 5.7.24
-- Versione PHP: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prova`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `automobile`
--

CREATE TABLE `automobile` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `marca` varchar(50) COLLATE utf8_bin NOT NULL,
  `aliquota_iva` decimal(2,2) NOT NULL DEFAULT '0.22',
  `prezzo_netto` int(11) NOT NULL,
  `percentuale_sconto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `automobile`
--

INSERT INTO `automobile` (`id`, `nome`, `marca`, `aliquota_iva`, `prezzo_netto`, `percentuale_sconto`) VALUES
(1, 'Uno', 'Fiat', '0.22', 15000, 6),
(2, 'F-40', 'Ferrari', '0.22', 159000, NULL),
(3, '10', 'Lancia', '0.22', 8000, NULL),
(15, 'Megan', 'Renault', '0.22', 15000, 13),
(16, 'Maggiolino', 'Clementoni', '0.22', 5, NULL),
(17, 'Panda', 'Fiat', '0.22', 12000, 15),
(18, 'C1', 'Citroen', '0.22', 7000, NULL),
(19, 'C2', 'Citroen', '0.22', 9000, NULL),
(20, 'C3', 'Citroen', '0.22', 12000, NULL);

-- --------------------------------------------------------

--
-- Struttura della tabella `cantanti`
--

CREATE TABLE `cantanti` (
  `id` int(11) NOT NULL,
  `Nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `Cognome` varchar(50) COLLATE utf8_bin NOT NULL,
  `Data_nascita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `cantanti`
--

INSERT INTO `cantanti` (`id`, `Nome`, `Cognome`, `Data_nascita`) VALUES
(1, 'John', 'Lennon', '1940-10-09'),
(2, 'Michael', 'Jackson', '1958-08-29'),
(3, 'Freddie', 'Mercury', '1946-10-05'),
(4, 'David', 'Bowie', '1947-01-08'),
(5, 'George', 'Michael', '1963-06-25'),
(6, 'Jimi', 'Hendrix', '1942-11-27');

-- --------------------------------------------------------

--
-- Struttura della tabella `colori`
--

CREATE TABLE `colori` (
  `id` int(11) NOT NULL,
  `colore` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `colori`
--

INSERT INTO `colori` (`id`, `colore`) VALUES
(1, 'rosso'),
(2, 'giallo'),
(3, 'arancione'),
(4, 'verde'),
(5, 'bianco');

-- --------------------------------------------------------

--
-- Struttura della tabella `frutta`
--

CREATE TABLE `frutta` (
  `id` int(11) NOT NULL,
  `frutto` varchar(50) COLLATE utf8_bin NOT NULL,
  `id_colore` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `frutta`
--

INSERT INTO `frutta` (`id`, `frutto`, `id_colore`) VALUES
(1, 'mela', 1),
(2, 'pera', 2),
(3, 'ananas', 2),
(4, 'ciliegia', 1),
(5, 'fragola', 1),
(6, 'mandarino', 3),
(7, 'melone', 5),
(8, 'arancia', 3),
(9, 'kiwi', 4);

-- --------------------------------------------------------

--
-- Struttura della tabella `studenti`
--

CREATE TABLE `studenti` (
  `studente_id` int(11) NOT NULL,
  `cognome` varchar(50) COLLATE utf8_bin NOT NULL,
  `nome` varchar(50) COLLATE utf8_bin NOT NULL,
  `data_nascita` date NOT NULL,
  `indirizzo` varchar(50) COLLATE utf8_bin NOT NULL,
  `eta` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `studenti`
--

INSERT INTO `studenti` (`studente_id`, `cognome`, `nome`, `data_nascita`, `indirizzo`, `eta`, `user_id`) VALUES
(1, 'Rossi', 'Roberto', '1990-05-01', 'via roma 82', 29, 345),
(2, 'Loddo', 'Ludovico', '1995-05-02', 'via ariosto 12', 24, 897),
(3, 'Diana', 'Andrea', '1985-03-01', 'via dante 42', 34, 359),
(4, 'Congiu', 'Franco', '1979-03-12', 'via assemini 132', 40, 8797),
(5, 'Brown', 'Frank', '2000-01-08', 'via giotto 123', 19, 448);

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_bin NOT NULL,
  `password` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`user_id`, `username`, `password`) VALUES
(87, 'adre12pog', 'pass34rd'),
(123, 'frank19', '45ghkr'),
(6754, 'lollo23', 'hyrhfhf'),
(448, 'pogress69', 'failfish'),
(897, 'retro45', 'raddude');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `automobile`
--
ALTER TABLE `automobile`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `cantanti`
--
ALTER TABLE `cantanti`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `colori`
--
ALTER TABLE `colori`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `frutta`
--
ALTER TABLE `frutta`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `studenti`
--
ALTER TABLE `studenti`
  ADD PRIMARY KEY (`studente_id`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `automobile`
--
ALTER TABLE `automobile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT per la tabella `cantanti`
--
ALTER TABLE `cantanti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `colori`
--
ALTER TABLE `colori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `frutta`
--
ALTER TABLE `frutta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `studenti`
--
ALTER TABLE `studenti`
  MODIFY `studente_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
