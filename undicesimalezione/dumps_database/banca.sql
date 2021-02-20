-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Creato il: Gen 10, 2020 alle 10:23
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
-- Database: `banca`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `conti_bancari`
--

CREATE TABLE `conti_bancari` (
  `id` int(11) NOT NULL,
  `id_titolare` int(11) NOT NULL,
  `numero_conto` varchar(255) COLLATE utf8_bin NOT NULL,
  `filiale` varchar(255) COLLATE utf8_bin NOT NULL,
  `data_apertura` date NOT NULL,
  `saldo` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `conti_bancari`
--

INSERT INTO `conti_bancari` (`id`, `id_titolare`, `numero_conto`, `filiale`, `data_apertura`, `saldo`) VALUES
(1, 1, '26468748964', 'monti dei paschi 42', '1967-09-23', '5678.98'),
(2, 1, '54765753643', 'banco di sardegna 2', '1965-05-02', '-456.89'),
(3, 2, '43654754764', 'città fantasma', '1945-09-04', '4365465.14'),
(4, 3, '45756364253', 'germania kartofeeln', '1934-09-05', '43636.45'),
(5, 4, '43654864753534', 'banco dei pirla', '2002-05-06', '420.69');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `cognome` varchar(255) COLLATE utf8_bin NOT NULL,
  `nome` varchar(255) COLLATE utf8_bin NOT NULL,
  `codice_fiscale` varchar(16) COLLATE utf8_bin NOT NULL,
  `indirizzo` text COLLATE utf8_bin NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `username`, `password`, `cognome`, `nome`, `codice_fiscale`, `indirizzo`, `email`) VALUES
(1, 'm.rossi', 'Password123', 'Rossi', 'Mario', 'GTJRFWETYIH564F5', 'via dei Fori Imper\\iali, 2', 'mario.rossi@gmail.com'),
(2, 'm.verdi', 'verdiii987', 'Verdi', 'Marco', 'GTRE3578GHT45GF', 'via Cagliari,1', 'marco.verdi@outlook.com'),
(3, 'g.bianchi', '@@@bianchi###', 'Bianchi', 'Giulio', 'FT5UHJ5FR6LGH54F', 'via Nuoro, 23', 'giulobianchi@yahoo.net'),
(4, 'anto69', 'anton***lol', 'Neri', 'Antonio', 'GTFKH567HGT4FGHT', 'via Napoli, 420', 'boh54@email.it');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `conti_bancari`
--
ALTER TABLE `conti_bancari`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `numero_conto` (`numero_conto`),
  ADD KEY `fk_id_titolare_as_utenti_id` (`id_titolare`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `codice_fiscale` (`codice_fiscale`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `conti_bancari`
--
ALTER TABLE `conti_bancari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `conti_bancari`
--
ALTER TABLE `conti_bancari`
  ADD CONSTRAINT `fk_id_titolare_as_utenti_id` FOREIGN KEY (`id_titolare`) REFERENCES `utenti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
