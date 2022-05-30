-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mariadb106.server723887.nazwa.pl:3306
-- Czas generowania: 30 Maj 2022, 08:45
-- Wersja serwera: 10.6.7-MariaDB-log
-- Wersja PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Baza danych: `server723887_rental`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `costumes`
--

CREATE TABLE `costumes` (
  `id` int(11) NOT NULL,
  `number` varchar(100) NOT NULL,
  `name_costume` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `category_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `costumes`
--

INSERT INTO `costumes` (`id`, `number`, `name_costume`, `size`, `price`, `quantity`, `category_id`) VALUES
(1, '1', 'Indianin', '104', '30', '1', '1'),
(2, '1', 'Indianin', '116', '30', '1', '1'),
(3, '1', 'Indianin', '128', '30', '1', '1'),
(4, '1', 'Indianin', 'Duży', '30', '1', '1');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rentals`
--

CREATE TABLE `rentals` (
  `id` int(11) NOT NULL,
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

INSERT INTO `rentals` (`id`, `name`, `date_rent`, `date_return`, `costume_id`, `price`, `phone`, `address`, `status`) VALUES
(1, 'Tomasz Dębosz', '2022-05-26', '2022-05-28', '1', '30', '+48506409529', 'Józefa Romana 25', 'rented'),
(2, 'Borkosz Mariusz', '2022-05-26', '2022-05-29', '2', '30', '+48506432329', 'Nowohucka 35 32-700 Bochnia', 'rented'),
(3, 'dsadsa', '2022-05-29', '2022-05-30', '3', 'sadasdas', 'dsadsa', 'address', 'overdue'),
(4, 'JarosĹaw Krawczyk', '2022-05-30', '2022-06-01', '1', '30 zĹ', '+48 506 409 529', 'address', 'done'),
(5, 'Kuba Samek', '2022-05-31', '2022-06-02', '1', '30 zł', '+48 506 409 529', 'Jóżefa Romana 25', 'rented'),
(6, 'Tomasz Dębosz', '2022-05-29', '2022-05-31', '3', '30 zł', '+48 506 409 529', 'Józefa Romana 25', 'rented');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `sizes`
--

CREATE TABLE `sizes` (
  `id` int(11) NOT NULL,
  `size` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `sizes`
--

INSERT INTO `sizes` (`id`, `size`) VALUES
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
  `id` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `power` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `user`, `pass`, `power`) VALUES
(1, 'dosztosz', 'dosztosz', '3');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `costumes`
--
ALTER TABLE `costumes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `rentals`
--
ALTER TABLE `rentals`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `sizes`
--
ALTER TABLE `sizes`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `costumes`
--
ALTER TABLE `costumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `sizes`
--
ALTER TABLE `sizes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;
