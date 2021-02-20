-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 13, 2020 alle 12:22
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
-- Struttura della tabella `comuni`
--

CREATE TABLE `comuni` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `provincia` varchar(255) COLLATE utf8_bin NOT NULL,
  `regione` varchar(255) COLLATE utf8_bin NOT NULL,
  `stato` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `comuni`
--

INSERT INTO `comuni` (`id`, `nome`, `provincia`, `regione`, `stato`) VALUES
(1, 'Cagliari', 'CA', 'Sardegna', 'Italia'),
(2, 'Nuoro', 'NU', 'Sardegna', 'Italia');

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
  `id_comune_residenza` int(11) DEFAULT NULL,
  `codice_fiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `via_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `civico_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `cap_domicilio` varchar(255) COLLATE utf8_bin NOT NULL,
  `id_comune_domicilio` int(11) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `telefono` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `persone`
--

INSERT INTO `persone` (`id`, `cognome`, `nome`, `data_nascita`, `via_residenza`, `civico_residenza`, `cap_residenza`, `id_comune_residenza`, `codice_fiscale`, `via_domicilio`, `civico_domicilio`, `cap_domicilio`, `id_comune_domicilio`, `email`, `telefono`) VALUES
(3, 'Cocco', 'Carlo', '1981-04-01', 'Via Nuova Italia', '17', '08042', 2, 'CCCCRL81D01E441Z', 'Via Bacaredda', '44', '11111', 2, 'info@carlococco.com', '3701225555'),
(9, 'Rossi', 'Mario', '1950-01-01', 'Via dei Fori Imperiali', '1', '0100', 2, 'RSSMRR80B03A441X', 'Via dei Fori Imperiali', '1', '0100', 2, 'mario.rossi@tecnofor.it', '1234567890'),
(10, 'Cocco', 'Carlo', '1981-04-01', 'Via Nuova Italia', '17', '08042', 2, 'CCCCRL81D01E441Z', 'Via Bacaredda', '44', '09127', 1, 'info@carlococco.com', '3701225555');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `comuni`
--
ALTER TABLE `comuni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `persone`
--
ALTER TABLE `persone`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_id_comune_residenza` (`id_comune_residenza`),
  ADD KEY `fk_id_comune_domicilio` (`id_comune_domicilio`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `comuni`
--
ALTER TABLE `comuni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `persone`
--
ALTER TABLE `persone`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `persone`
--
ALTER TABLE `persone`
  ADD CONSTRAINT `fk_id_comune_domicilio` FOREIGN KEY (`id_comune_domicilio`) REFERENCES `comuni` (`id`),
  ADD CONSTRAINT `fk_id_comune_residenza` FOREIGN KEY (`id_comune_residenza`) REFERENCES `comuni` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
