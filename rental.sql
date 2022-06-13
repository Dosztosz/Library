-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2022, 13:59
-- Wersja serwera: 10.4.24-MariaDB
-- Wersja PHP: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `rental`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `name_category` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `costumes`
--

CREATE TABLE `costumes` (
  `id_product` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `name_costume` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `costumes`
--

INSERT INTO `costumes` (`id_product`, `number`, `name_costume`, `size`, `price`, `quantity`, `category_id`, `img`) VALUES
(1, '1', 'Indianin', '104', '30', '4', '1', 'background.jpg'),
(2, '60', 'Rycerz', '116', '30', '2', '1', ''),
(3, '259', 'Marsjanin', '128', '30', '19', '1', ''),
(4, '360', 'Star Wars', 'Duży', '30', '14', '1', ''),
(15, 'ds', 'ds', '104', '30', '1', 'strój', 'IMG_0224.jpg'),
(16, 'ds', 'ds', '128', '30', '1', 'strój', 'IMG_0224.jpg'),
(17, 'ds', 'ds', '152', '30', '1', 'strój', 'IMG_0224.jpg'),
(21, '45', 'krasnolud', '104', '30 zł', '1', 'strój', 'gimli.jpg'),
(22, '45', 'krasnolud', '128', '30 zł', '1', 'strój', 'gimli.jpg'),
(23, '45', 'krasnolud', '152', '30 zł', '1', 'strój', 'gimli.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rentals`
--

CREATE TABLE `rentals` (
  `id_rent` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `date_rent` date NOT NULL,
  `date_return` date NOT NULL,
  `costume_id` varchar(5) NOT NULL,
  `price` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `rentals`
--

INSERT INTO `rentals` (`id_rent`, `name`, `date_rent`, `date_return`, `costume_id`, `price`, `phone`, `address`, `status`) VALUES
(1, 'Tomasz Dębosz', '2022-05-26', '2022-05-28', '1', '30', '+48506409529', 'Józefa Romana 25', 'overdue'),
(2, 'Borkosz Mariusz', '2022-05-26', '2022-05-29', '2', '30', '+48506432329', 'Nowohucka 35 32-700 Bochnia', 'overdue'),
(3, 'dsadsa', '2022-05-29', '2022-05-29', '3', 'sadasdas', 'dsadsa', 'address', 'overdue'),
(4, 'JarosĹaw Krawczyk', '2022-05-30', '2022-06-01', '1', '30 zĹ', '+48 506 409 529', 'address', 'overdue'),
(5, 'Kuba Samek', '2022-05-31', '2022-06-02', '1', '30 zł', '+48 506 409 529', 'Jóżefa Romana 25', 'overdue'),
(6, 'Tomasz Dębosz', '2022-05-29', '2022-05-31', '3', '30 zł', '+48 506 409 529', 'Józefa Romana 25', 'overdue');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sizes`
--

CREATE TABLE `sizes` (
  `id_sizes` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `sizes`
--

INSERT INTO `sizes` (`id_sizes`, `size`) VALUES
(1, '104'),
(2, '116'),
(3, '128'),
(4, '140'),
(5, '152'),
(6, 'duzy');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `power` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id_users`, `user`, `pass`, `power`) VALUES
(1, 'admin', 'admin', '3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeksy dla tabeli `costumes`
--
ALTER TABLE `costumes`
  ADD PRIMARY KEY (`id_product`);

--
-- Indeksy dla tabeli `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id_rent`);

--
-- Indeksy dla tabeli `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id_sizes`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `costumes`
--
ALTER TABLE `costumes`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id_rent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id_sizes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
