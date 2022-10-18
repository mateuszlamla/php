-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 14 Paź 2022, 14:54
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `porty_lotnicze`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klienci`
--

CREATE TABLE `klienci` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `nr_odlotu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `klienci`
--

INSERT INTO `klienci` (`id`, `imie`, `nazwisko`, `miasto`, `nr_odlotu`) VALUES
(1, 'Dawid', 'Kowalski', 'Katowice', 3),
(2, 'Jakub', 'Nowak', 'Gdańsk', 1),
(3, 'Paulina', 'Kucharska', 'Wrocław', 4),
(4, 'Łukasz', 'Pomidor', 'Kraków', 7),
(5, 'Żaneta', 'Michoń', 'Katowice', 7),
(6, 'Nadia', 'Michal', 'Katowice', 7),
(7, 'Lucia', 'Mikołów', 'Katowice', 2),
(8, 'Kacper', 'Stępień', 'Gliwice', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odloty`
--

CREATE TABLE `odloty` (
  `id` int(11) NOT NULL,
  `miasto` text COLLATE utf8_polish_ci NOT NULL,
  `data` date NOT NULL,
  `pas_startowy` int(11) NOT NULL,
  `opoznienie` varchar(3) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `odloty`
--

INSERT INTO `odloty` (`id`, `miasto`, `data`, `pas_startowy`, `opoznienie`) VALUES
(1, 'Gdańsk', '2021-05-19', 2, 'nie'),
(2, 'Poznań', '2021-05-20', 3, 'nie'),
(3, 'Katowice', '2021-05-19', 1, 'nie'),
(4, 'Warszawa', '2021-05-19', 3, 'tak'),
(5, 'Warszawa', '2021-05-21', 2, 'nie'),
(6, 'Berlin', '2021-05-20', 2, 'nie'),
(7, 'Wrocław', '2021-05-21', 2, 'nie');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pasy_startowe`
--

CREATE TABLE `pasy_startowe` (
  `id` int(11) NOT NULL,
  `numer_pasa` varchar(3) COLLATE utf8_polish_ci NOT NULL,
  `wolna` varchar(3) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `pasy_startowe`
--

INSERT INTO `pasy_startowe` (`id`, `numer_pasa`, `wolna`) VALUES
(1, '5F', 'tak'),
(2, '12A', 'tak'),
(3, '3G', 'tak');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `klienci`
--
ALTER TABLE `klienci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `odloty`
--
ALTER TABLE `odloty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pasy_startowe`
--
ALTER TABLE `pasy_startowe`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `klienci`
--
ALTER TABLE `klienci`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `odloty`
--
ALTER TABLE `odloty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT dla tabeli `pasy_startowe`
--
ALTER TABLE `pasy_startowe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
