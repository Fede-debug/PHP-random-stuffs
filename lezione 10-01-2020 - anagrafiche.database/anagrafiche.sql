-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 10, 2020 alle 11:34
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
-- Database: `anagrafiche`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `persone`
--

CREATE TABLE `persone` (
  `id` int(11) NOT NULL,
  `cognome` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_nascita` date NOT NULL,
  `via_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `civico_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `cap_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `comune_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `provincia_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `regione_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `stato_residenza` varchar(255) COLLATE utf8_bin NOT NULL,
  `codice_fiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `via_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `civico_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `cap_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `comune_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `provincia_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `regione_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `stato_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `persone`
--

INSERT INTO `persone` (`id`, `cognome`, `nome`, `data_nascita`, `via_residenza`, `civico_residenza`, `cap_residenza`, `comune_residenza`, `provincia_residenza`, `regione_residenza`, `stato_residenza`, `codice_fiscale`, `via_domicilio`, `civico_domicilio`, `cap_domicilio`, `comune_domicilio`, `provincia_domicilio`, `regione_domicilio`, `stato_domicilio`, `email`, `telefono`) VALUES
(1, 'Rossi', 'Mario', '1970-01-01', 'Via Verdi', '6', '01900', 'Roma', 'RM', 'Lazio', 'Italia', 'RSSMRR70A01A234X', 'Via Verdi', '6', '01900', 'Roma', 'RM', 'Lazio', 'Italia', 'mario.rossi@tecnofor.it', '3331234567'),
(2, 'Astori', 'Antonio', '1982-03-05', 'Via Michelangelo', '18', '09015', 'Torino', 'TO', 'Piemonte', 'Italia', 'TREHKGFRE56JH54F', 'via Michelangelo', '18', '09015', 'Torino', 'TO', 'Piemonte', 'Italia', 'antonio.astori@gmail.com', '0831512345');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `persone`
--
ALTER TABLE `persone`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `persone`
--
ALTER TABLE `persone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
