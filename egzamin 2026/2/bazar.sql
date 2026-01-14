-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 13, 2026 at 04:51 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bazar`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sklep`
--

CREATE TABLE `sklep` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `wlasciciel` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `sklep`
--

INSERT INTO `sklep` (`id`, `nazwa`, `wlasciciel`) VALUES
(1, 'U Gosi', 'Małgorzata Nowak'),
(2, 'Warzywniak u Edzia', 'Edward Wiśniewski'),
(3, 'Eko-Bazar', 'Jan Kowalski');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towar`
--

CREATE TABLE `towar` (
  `id` int(11) NOT NULL,
  `nazwa` varchar(20) DEFAULT NULL,
  `rodzaj` varchar(10) DEFAULT NULL,
  `cena` decimal(20,2) DEFAULT NULL,
  `plik` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `towar`
--

INSERT INTO `towar` (`id`, `nazwa`, `rodzaj`, `cena`, `plik`) VALUES
(1, 'Jabłka Lobo', 'owoc', 3.50, 'jablko.jpg'),
(2, 'Gruszka Konferencja', 'owoc', 5.20, 'gruszka.jpg'),
(3, 'Ziemniaki Irys', 'warzywo', 1.80, 'ziemniak.jpg'),
(4, 'Marchewka Karotka', 'warzywo', 2.50, 'marchew.jpg'),
(5, 'Cebula Czerwona', 'warzywo', 3.00, 'cebula.jpg'),
(6, 'Pomidor Malinowy', 'warzywo', 12.00, 'pomidor.jpg'),
(7, 'Śliwka Węgierka', 'owoc', 4.50, 'sliwka.jpg'),
(8, 'Kasza Gryczana', 'sypkie', 6.00, 'kasza.jpg'),
(9, 'Ryż Biały', 'sypkie', 4.80, 'ryz.jpg'),
(10, 'Orzechy Włoskie', 'bakalie', 25.00, 'orzech.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int(11) NOT NULL,
  `id_towar` int(11) DEFAULT NULL,
  `id_sklep` int(11) DEFAULT NULL,
  `liczba_kg` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zamowienie`
--

INSERT INTO `zamowienie` (`id`, `id_towar`, `id_sklep`, `liczba_kg`) VALUES
(1, 1, 1, 50),
(2, 3, 2, 100),
(3, 6, 3, 15),
(4, 4, 1, 30),
(5, 10, 3, 5);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `sklep`
--
ALTER TABLE `sklep`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `towar`
--
ALTER TABLE `towar`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_towar` (`id_towar`),
  ADD KEY `id_sklep` (`id_sklep`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sklep`
--
ALTER TABLE `sklep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `towar`
--
ALTER TABLE `towar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD CONSTRAINT `zamowienie_ibfk_1` FOREIGN KEY (`id_towar`) REFERENCES `towar` (`id`),
  ADD CONSTRAINT `zamowienie_ibfk_2` FOREIGN KEY (`id_sklep`) REFERENCES `sklep` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
