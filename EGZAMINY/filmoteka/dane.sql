-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 12 Paź 2022, 19:05
-- Wersja serwera: 10.4.14-MariaDB
-- Wersja PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `aktorzy`
--

CREATE TABLE `aktorzy` (
  `id` int(11) NOT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `aktorzy`
--

INSERT INTO `aktorzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'asd', 'dsa');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(11) NOT NULL,
  `gatunki_id` int(11) DEFAULT NULL,
  `rezyserzy_id` int(11) DEFAULT NULL,
  `tytul` text DEFAULT NULL,
  `rok` year(4) DEFAULT NULL,
  `ocena` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id`, `gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES
(2, 3, NULL, 'braveheart', 1995, 8),
(3, 1, NULL, 'asdasdasd', 0000, 5),
(5, 3, NULL, 'Zapach kobiety', 1992, 9),
(6, 3, NULL, 'Leon Zawodowiec', 1994, 9),
(7, 3, NULL, 'Leon Zawodowiec', 1994, 9),
(8, 5, NULL, 'Suburbicon', 2017, 5),
(9, 3, NULL, 'braveheart', 1995, 6),
(10, 4, NULL, 'fightclub', 2010, 7);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunki`
--

CREATE TABLE `gatunki` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `gatunki`
--

INSERT INTO `gatunki` (`id`, `nazwa`) VALUES
(1, 'Sci-Fi'),
(2, 'animacja'),
(3, 'dramat'),
(4, 'horror'),
(5, 'komedia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyserzy`
--

CREATE TABLE `rezyserzy` (
  `id` int(11) NOT NULL,
  `imie` text DEFAULT NULL,
  `nazwisko` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `aktorzy`
--
ALTER TABLE `aktorzy`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`),
  ADD KEY `gatunki_id` (`gatunki_id`),
  ADD KEY `rezyserzy_id` (`rezyserzy_id`);

--
-- Indeksy dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `aktorzy`
--
ALTER TABLE `aktorzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD CONSTRAINT `filmy_ibfk_1` FOREIGN KEY (`gatunki_id`) REFERENCES `gatunki` (`id`),
  ADD CONSTRAINT `filmy_ibfk_2` FOREIGN KEY (`rezyserzy_id`) REFERENCES `rezyserzy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
