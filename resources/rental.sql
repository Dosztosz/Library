-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 05 Paź 2022, 15:32
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

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
  `number` int(3) DEFAULT NULL,
  `name_costume` varchar(31) DEFAULT NULL,
  `size` varchar(29) DEFAULT NULL,
  `price` int(2) DEFAULT NULL,
  `quantity` int(1) DEFAULT NULL,
  `category_id` int(1) DEFAULT NULL,
  `img` varchar(7) DEFAULT NULL,
  `product_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `costumes`
--

INSERT INTO `costumes` (`number`, `name_costume`, `size`, `price`, `quantity`, `category_id`, `img`, `product_id`) VALUES
(1, 'Indianin', '116, 128, 140, Duzy', 30, 1, 1, '1.jpg', 1),
(2, 'Księżniczka', '116, 128, 140,', 30, 1, 1, '2.jpg', 2),
(3, 'Sisi-Księżniczka', '116, 128, 140,', 30, 1, 1, '3.jpg', 3),
(4, 'Klaun - Pajac', '104, 116, 128, 140,', 30, 1, 1, '4.jpg', 4),
(5, 'Pelerynka czarodzieja', '116, 128, 140, Duzy', 30, 0, 1, '5.jpg', 5),
(6, 'Afrykanka', '128, 140,', 30, 1, 1, '6.jpg', 6),
(7, 'Pelerynka muchomor', '116, 128,', 30, 1, 1, '7.jpg', 7),
(8, 'Kaczuszka', '116, 128, 140,', 30, 1, 1, '8.jpg', 8),
(9, 'Kosmitka - Paź', '128, 140,', 30, 1, 1, '9.jpg', 9),
(10, 'Calineczka', '116, 128, 140,', 30, 1, 1, '10.jpg', 10),
(11, 'Kominiarczyk', '116, 128, 140, Duzy', 30, 1, 1, '11.jpg', 11),
(12, 'Gwiazdeczka', '116, 128, 140,', 30, 1, 1, '12.jpg', 12),
(13, 'Tulipanek', '116, 128, 140,', 30, 1, 1, '13.jpg', 13),
(14, 'Leśny ludek - Smerf', '128, 140,', 30, 1, 1, '14.jpg', 14),
(15, 'Czerwony kapturek / 1', '116, 128, 140,', 30, 1, 1, '15.jpg', 15),
(16, 'Czerwony kapturek / 2', '116, 128,', 30, 1, 1, '16.jpg', 16),
(17, 'Wiosna', '116, 128, 140, 152,', 30, 1, 1, '17.jpg', 17),
(18, 'Wróżka', '104, 90, 128, 140,', 30, 1, 1, '18.jpg', 18),
(19, 'Smok', '104, 116, 128,', 30, 1, 1, '19.jpg', 19),
(20, 'Pantera', '104, 116, 128, Duzy', 30, 1, 1, '20.jpg', 20),
(21, 'Diabeł - Książe', '104, 116, 128, 140, Duzy', 30, 1, 1, '21.jpg', 21),
(22, 'Tygrysek', '140', 30, 1, 1, '22.jpg', 22),
(23, 'Myszka chłopak', '128', 30, 1, 1, '23.jpg', 23),
(24, 'Muszkieter', '116, 128, 140,', 30, 1, 1, '24.jpg', 24),
(25, 'Kot w butach', '116, 128, 140,', 30, 1, 1, '25.jpg', 25),
(26, 'Śnieżynka', '104, 116, 128, 140,', 30, 1, 1, '26.jpg', 26),
(27, 'Jesień ( peleryna - sukienka )', '128', 30, 1, 1, '27.jpg', 27),
(28, 'Słoń', '104, 128, Duzy', 30, 1, 1, '28.jpg', 28),
(29, 'Kot - pelerynka', '128, 140,', 30, 1, 1, '29.jpg', 29),
(30, 'Królowna Śnieżka', '104, 116, 128, 140, Duzy', 30, 1, 1, '30.jpg', 30),
(31, 'Piłka', '116', 30, 1, 1, '31.jpg', 31),
(32, 'Strażak', '104, 116, 128, 140,', 30, 1, 1, '32.jpg', 32),
(33, 'Kleopatra', '116, 128, Duzy', 30, 1, 1, '33.jpg', 33),
(34, 'Napoleon', '116, 128, 140,', 30, 1, 1, '34.jpg', 34),
(35, 'Cezar', '116', 30, 1, 1, '35.jpg', 35),
(36, 'Hrabianka', '128', 30, 1, 1, '36.jpg', 36),
(37, 'Paw', '128', 30, 1, 1, '37.jpg', 37),
(38, 'Królowa Bona', '116, 128, 140,', 30, 1, 1, '38.jpg', 38),
(39, 'Sierotka Marysia', '116, 128, 140,', 30, 1, 1, '39.jpg', 39),
(40, 'Pirat', '104, 116, 128, 140, 152, Duzy', 30, 1, 1, '40.jpg', 40),
(41, 'Supermen', '128, 140, Duzy', 30, 1, 1, '41.jpg', 41),
(42, 'Batman - Nietoperz', '104, 116, 128, 140,', 30, 1, 1, '42.jpg', 42),
(43, 'Strój krakowski chł.', '140', 30, 1, 1, '43.jpg', 43),
(44, 'Strój krakowski dziew.', '116, 128,', 30, 1, 1, '44.jpg', 44),
(45, 'Pszczółka', '104, 116, 128, 140,', 30, 1, 1, '45.jpg', 45),
(46, 'Stańczyk', '128', 30, 1, 1, '46.jpg', 46),
(47, 'Kogucik', '116, 128,', 30, 1, 1, '47.jpg', 47),
(48, 'Pająk - Spider Maan', '104, 90, 116, 128, 140,', 30, 1, 1, '48.jpg', 48),
(49, 'Pipi', '128', 30, 1, 1, '49.jpg', 49),
(50, 'Kowbojka', '116, 128, Duzy', 30, 1, 1, '50.jpg', 50),
(51, 'Piratka', '128, 140,', 30, 1, 1, '51.jpg', 51),
(52, 'Wiedźma', '104, 116, 128, 140, Duzy', 30, 1, 1, '52.jpg', 52),
(53, 'Ptak - Kruk - Gil', '128', 30, 1, 1, '53.jpg', 53),
(54, 'Wiking - Pastuszek', '116, 128,', 30, 1, 1, '54.jpg', 54),
(55, 'Wojownik', '116, 128, 140,', 30, 1, 1, '55.jpg', 55),
(56, 'Krasnal', '104, 116, 128, 140, Duzy', 30, 1, 1, '56.jpg', 56),
(57, 'Człowiek mocy', '104, 4-116, 128, 140,', 30, 1, 1, '57.jpg', 57),
(58, 'Pierrot', '128', 30, 1, 1, '58.jpg', 58),
(59, 'Rzymianka', '116, 128, 140,', 30, 1, 1, '59.jpg', 59),
(60, 'Miś Uszatek', '116, 128, 152, Duzy', 30, 1, 1, '60.jpg', 60),
(61, 'Biedronka', '104, 116, 128,', 30, 1, 1, '61.jpg', 61),
(62, 'Kot / Myszka', '128', 30, 1, 1, '62.jpg', 62),
(63, 'Motyl', '104, 116, 128, 140,', 30, 1, 1, '63.jpg', 63),
(64, 'Maria', '104, 116, 128, 140, 152, Duzy', 30, 1, 1, '64.jpg', 64),
(65, 'Rycerz', '116, 128, 140, Duzy', 30, 1, 1, '65.jpg', 65),
(66, 'Elza z krainy lodu', '128, 140,', 30, 1, 1, '66.jpg', 66),
(67, 'Mikołaj', 'Duzy', 30, 1, 1, '67.jpg', 67),
(68, 'Choinka', '104, 116, 140,', 30, 1, 1, '68.jpg', 68),
(69, 'Ninja', '116, 128, 140, Duzy', 30, 1, 1, '69.jpg', 69),
(70, 'Bałwanek', '104, 116, 128, 140,', 30, 1, 1, '70.jpg', 70),
(71, 'Aniołek', '104, 116, 128, 140, 152, Duzy', 30, 1, 1, '71.jpg', 71),
(72, 'Dworzanin', '128, Duzy', 30, 1, 1, '72.jpg', 72),
(73, 'Noc - Czarownica', '104, Duzy', 30, 1, 1, '73.jpg', 73),
(74, 'Sind Bad / Ali Baba', '128', 30, 1, 1, '74.jpg', 74),
(75, 'Zając / Królik', '116, 128, 140,', 30, 1, 1, '75.jpg', 75),
(76, 'Antyterrorysta', '104, 128,', 30, 1, 1, '76.jpg', 76),
(77, 'Cyganka', '116, 128, Duzy', 30, 1, 1, '77.jpg', 77),
(78, 'Piekarczyk', '128', 30, 1, 1, '78.jpg', 78),
(79, 'Paź', '104', 30, 1, 1, '79.jpg', 79),
(80, 'Łabędź / Bocian', '128', 30, 1, 1, '80.jpg', 80),
(81, 'Anna z krainy lodu', '116, 128, 140,', 30, 1, 1, '81.jpg', 81),
(82, 'Koszula Cygana', '128, 140, Duzy', 30, 1, 1, '82.jpg', 82),
(83, 'Czarodziejka z kosmosu', '128, 140,', 30, 1, 1, '83.jpg', 83),
(84, 'Sukienka perłowa', '104, 116,', 30, 1, 1, '84.jpg', 84),
(85, 'Telimena', '116, 128, 140,', 30, 1, 1, '85.jpg', 85),
(86, 'Madam Pompadur', '116, 128, 140,', 30, 1, 1, '86.jpg', 86),
(87, 'Król', '104, 116, 128, 140, 152, Duzy', 30, 1, 1, '87.jpg', 87),
(88, 'Lis', '104, 128,', 30, 1, 1, '88.jpg', 88),
(89, 'Szeryf', '104, 116, 128, 140, Duzy', 30, 1, 1, '89.jpg', 89),
(90, 'Zosia', '116, 128, 140,', 30, 1, 1, '90.jpg', 90),
(91, 'Sukienka różowa z kokardami', '128', 30, 1, 1, '91.jpg', 91),
(92, 'Hiszpanka / Biedronka', '116, 128, 140,', 30, 1, 1, '92.jpg', 92),
(93, 'Zorro', '116, 128, 140,', 30, 1, 1, '93.jpg', 93),
(94, 'Alladynka z czapką', '116, 128,', 30, 1, 1, '94.jpg', 94),
(95, 'Faraon', '116, 128, 140,', 30, 1, 1, '95.jpg', 95),
(96, 'Egipcjanka', '116, 128, 140, Duzy', 30, 1, 1, '96.jpg', 96),
(97, 'Robin Hood', '104, 116, 128,', 30, 1, 1, '97.jpg', 97),
(98, 'Indianka', '116, 128, 140, Duzy', 30, 1, 1, '98.jpg', 98),
(99, 'Arab - Józef', '104, 116, 128, 140,', 30, 1, 1, '99.jpg', 99),
(100, 'Wilk', '104, 116, 128,', 30, 1, 1, '100.jpg', 100),
(101, 'Wiewiórka', '104, 116,', 30, 1, 1, '101.jpg', 101),
(102, 'Brąz sukienka - wiewiórka', 'Duzy', 30, 1, 1, '102.jpg', 102),
(103, 'Elf', '104, 90, 116, 128,', 30, 1, 1, '103.jpg', 103),
(104, 'Pająk / Wiatr', '128', 30, 1, 1, '104.jpg', 104),
(105, 'Diabeł sreb. / Czarodziej', '140', 30, 1, 1, '105.jpg', 105),
(106, 'Niebo / Księżniczka', 'Duzy', 30, 1, 1, '106.jpg', 106),
(107, 'Chińczyk', '116, 128, Duzy', 30, 1, 1, '107.jpg', 107),
(108, 'Spódnica tiul', '128', 30, 1, 1, '108.jpg', 108),
(109, 'Disco', '116, 128, 140,', 30, 1, 1, '109.jpg', 109),
(110, 'Królowa lodu', '116, 128, 140,', 30, 1, 1, '110.jpg', 110),
(111, 'Karateka', '128, 140, Duzy', 30, 1, 1, '111.jpg', 111),
(112, 'Wylma', 'Duzy', 30, 1, 1, '112.jpg', 112),
(113, 'Ogrodniczki Pajaca', 'Duzy', 30, 1, 1, '113.jpg', 113),
(114, 'Frak damski', 'Duzy', 30, 1, 1, '114.jpg', 114),
(115, 'Grizella', 'Duzy', 30, 1, 1, '115.jpg', 115),
(116, 'Kapitan Hak', '116, 128, 140,', 30, 1, 1, '116.jpg', 116),
(117, 'Pajęczyca', 'Duzy', 30, 1, 1, '117.jpg', 117),
(118, 'Hiszpanka', 'Duzy', 30, 1, 1, '118.jpg', 118),
(119, 'Piratka', 'Duzy', 30, 1, 1, '119.jpg', 119),
(120, 'Muszkieter', 'Duzy', 30, 1, 1, '120.jpg', 120),
(121, NULL, NULL, 30, 1, 1, '121.jpg', 121),
(122, 'Klaun - Pajac', '152, Duzy', 30, 1, 1, '122.jpg', 122),
(123, 'Drakula', '104, 116, Duzy', 30, 1, 1, '123.jpg', 123),
(124, 'Kardynał', 'Duzy', 30, 1, 1, '124.jpg', 124),
(125, 'Duch', '104, 116, 128, 140,', 30, 1, 1, '125.jpg', 125),
(126, 'Torreador', '116, 128, 140,', 30, 1, 1, '126.jpg', 126),
(127, 'Kurteczka disco', '128, 140,', 30, 1, 1, '127.jpg', 127),
(128, 'Królowa', '116, 128,', 30, 1, 1, '128.jpg', 128),
(129, 'Madame Butterfly/Chinka', '116, 128, Duzy', 30, 1, 1, '129.jpg', 129),
(130, 'Marsjanka', '116, 128, 140,', 30, 1, 1, '130.jpg', 130),
(131, 'Zima', '116, 128, 140,', 30, 1, 1, '131.jpg', 131),
(132, 'Balerina', '104, 116,', 30, 1, 1, '132.jpg', 132),
(133, 'Pająk złoty', '116', 30, 1, 1, '133.jpg', 133),
(134, 'Osiołek', '128', 30, 1, 1, '134.jpg', 134),
(135, 'Mis Puchatek', '104, 128, 152,', 30, 1, 1, '135.jpg', 135),
(136, 'Tygrysek II', '128', 30, 1, 1, '136.jpg', 136),
(137, 'Pelerynka biała', '104, 116, 128, 140,', 30, 1, 1, '137.jpg', 137),
(138, 'Suknia ślubna', 'Duzy', 30, 1, 1, '138.jpg', 138),
(139, 'Futbolista', '116, 128, 140,', 30, 1, 1, '139.jpg', 139),
(140, 'Marynarz - kobieta', 'Duzy', 30, 1, 1, '140.jpg', 140),
(141, 'Komplet czerwono biały', '140', 30, 1, 1, '141.jpg', 141),
(142, 'Sukienka niebiesko/złota', '128', 30, 1, 1, '142.jpg', 142),
(143, 'Królowa - fiolet', '128', 30, 1, 1, '143.jpg', 143),
(144, 'Królowa - złota', '128', 30, 1, 1, '144.jpg', 144),
(145, 'Truskawka', '116', 30, 1, 1, '145.jpg', 145),
(146, 'Alladynka - niebieska', '128, 140,', 30, 1, 1, '146.jpg', 146),
(147, 'Hinduska', '116', 30, 1, 1, '147.jpg', 147),
(148, 'Mikołaj mały', '104, 116, 140,', 30, 1, 1, '148.jpg', 148),
(149, 'Rycerz Disney', '104, 116, 140,', 30, 1, 1, '149.jpg', 149),
(150, 'Elza z kapturem i rękawami', '116, 128, 140,', 30, 1, 1, '150.jpg', 150),
(151, 'Księżniczka różowa- ( szersza )', '104, 116, 128,', 30, 1, 1, '151.jpg', 151),
(152, 'Zielony strój', '116, 128, 140, 152, Duzy', 30, 1, 1, '152.jpg', 152),
(153, 'Żołnierz', '104, 116, 128, 140, 152, Duzy', 30, 1, 1, '153.jpg', 153),
(154, 'Pająk krzyżak', '104, 140,', 30, 1, 1, '154.jpg', 154),
(155, 'Kucharz', '128', 30, 1, 1, '155.jpg', 155),
(156, 'Pies dalmateńczyk', '104', 30, 1, 1, '156.jpg', 156),
(157, 'Batman czerwony', '128', 30, 1, 1, '157.jpg', 157),
(158, 'Nietoperz / Batman', '104, 116, 140, Duzy', 30, 1, 1, '158.jpg', 158),
(159, 'Rybka', '116, Duzy', 30, 1, 1, '159.jpg', 159),
(160, 'Witch', '104, 116,', 30, 1, 1, '160.jpg', 160),
(161, 'Kot dziewczynka', '104, 116, 128, 140,', 30, 1, 1, '161.jpg', 161),
(162, 'Dinozaur - smok', '104', 30, 1, 1, '162.jpg', 162),
(163, 'Złota Bella', '116, 128, 140,', 30, 1, 1, '163.jpg', 163),
(164, 'Jaśmina', '104, 116, 128, 140,', 30, 1, 1, '164.jpg', 164),
(165, 'Sulejka / Hinduska', '116, 128, 140,', 30, 1, 1, '165.jpg', 165),
(166, 'Mulan / Gejsza', '140', 30, 1, 1, '166.jpg', 166),
(167, 'Lew', '104, 116, 128, 140,', 30, 1, 1, '167.jpg', 167),
(168, 'Diabeł - futro', '128', 30, 1, 1, '168.jpg', 168),
(169, 'Frak damski złoty', 'Duzy', 30, 1, 1, '169.jpg', 169),
(170, 'Spódnica Murzynki', '128, 140,', 30, 1, 1, '170.jpg', 170),
(171, 'Kościotrup', '116, 128, 140, 152,', 30, 1, 1, '171.jpg', 171),
(172, 'Tunika czarna', '140', 30, 1, 1, '172.jpg', 172),
(173, 'Spódnica zielona', '116', 30, 1, 1, '173.jpg', 173),
(174, 'Sukienka czerwona z kapel.', '128', 30, 1, 1, '174.jpg', 174),
(175, 'Pastuszek 1', '104, 116, 128, 140, Duzy', 30, 1, 1, '175.jpg', 175),
(176, 'Szary polar', '116, 128, 140,', 30, 1, 1, '176.jpg', 176),
(177, 'Czarny polar', '116, 128, 140,', 30, 1, 1, '177.jpg', 177),
(178, 'Brązowy polar', '116, 128, 140,', 30, 1, 1, '178.jpg', 178),
(179, 'Brązowe płótno', '116, 128, 140,', 30, 1, 1, '179.jpg', 179),
(180, 'Niebieskie płótno / Policjant', '116, 128, 140,', 30, 1, 1, '180.jpg', 180),
(181, 'Sowa - pelerynka', '128', 30, 1, 1, '181.jpg', 181),
(182, 'Ptak Sikorka', '128', 30, 1, 1, '182.jpg', 182),
(183, 'Żółw Ninja', '116, 128,', 30, 1, 1, '183.jpg', 183),
(184, 'Sukienka - Paola', '128', 30, 1, 1, '184.jpg', 184),
(185, 'Sukienka - Miss', '140', 30, 1, 1, '185.jpg', 185),
(186, 'Scooby Doo', '116, 140,', 30, 1, 1, '186.jpg', 186),
(187, 'Czerwony Kapturek', 'Duzy', 30, 1, 1, '187.jpg', 187),
(188, NULL, NULL, 30, 1, 1, '188.jpg', 188),
(189, 'Kopciuszek ubogi', '140', 30, 1, 1, '189.jpg', 189),
(190, 'Kopciuszek ubogi', '140', 30, 1, 1, '190.jpg', 190),
(191, 'Rzymianin', '128', 30, 1, 1, '191.jpg', 191),
(192, 'Księżniczka - złota', '128', 30, 1, 1, '192.jpg', 192),
(193, 'Księżniczka - lux', '128', 30, 1, 1, '193.jpg', 193),
(194, 'Księżniczka - extra', '116', 30, 1, 1, '194.jpg', 194),
(195, 'Księżniczka - złota - lux', '116', 30, 1, 1, '195.jpg', 195),
(196, 'Balerina - różowa', '128, 140,', 30, 1, 1, '196.jpg', 196),
(197, 'Balerina - złota', '116', 30, 1, 1, '197.jpg', 197),
(198, 'Balerina - lux', '116', 30, 1, 1, '198.jpg', 198),
(199, 'Peleryna czarna - sukienka', '140', 30, 1, 1, '199.jpg', 199),
(200, 'Peleryna czarna', 'Duzy', 30, 1, 1, '200.jpg', 200),
(201, 'Strach - Pan', '128', 30, 1, 1, '201.jpg', 201),
(202, 'Strach - Pani', '128', 30, 1, 1, '202.jpg', 202),
(203, 'Wilk - wiatr - dziad II', '128', 30, 1, 1, '203.jpg', 203),
(204, 'Dworzanin / Lokaj', '128', 30, 1, 1, '204.jpg', 204),
(205, 'Wrona - peleryna czarna', '128', 30, 1, 1, '205.jpg', 205),
(206, 'Bella czerwona', '116, 128,', 30, 1, 1, '206.jpg', 206),
(207, 'Punk - kurtka', '128', 30, 1, 1, '207.jpg', 207),
(208, 'Spider Meen', '116, 140,', 30, 1, 1, '208.jpg', 208),
(209, 'Peleryna czerwono / czarna', 'Duzy', 30, 1, 1, '209.jpg', 209),
(210, 'Sukienka niebieska', 'Duzy', 30, 1, 1, '210.jpg', 210),
(211, 'Sukienka czarna', 'Duzy', 30, 1, 1, '211.jpg', 211),
(212, 'Wróżka czarna', '140', 30, 1, 1, '212.jpg', 212),
(213, 'Batman / Nietoperz', '116, 128, 140, Duzy', 30, 1, 1, '213.jpg', 213),
(214, 'Sukienka różowa', '128', 30, 1, 1, '214.jpg', 214),
(215, 'Hallowen peleryna', 'Duzy', 30, 1, 1, '215.jpg', 215),
(216, 'Księżniczka żółto złota', '128', 30, 1, 1, '216.jpg', 216),
(217, 'Księżniczka różowo biała', '128', 30, 1, 1, '217.jpg', 217),
(218, 'Płaszcz złoty', 'Duzy', 30, 1, 1, '218.jpg', 218),
(219, 'Alladynka', 'Duzy', 30, 1, 1, '219.jpg', 219),
(220, 'Hallowen peleryna / 1', 'Duzy', 30, 1, 1, '220.jpg', 220),
(221, 'Sukienka Pajęczyca', 'Duzy', 30, 1, 1, '221.jpg', 221),
(222, 'Muchomor', '128', 30, 1, 1, '222.jpg', 222),
(223, 'Frak czarny długi', 'Duzy', 30, 1, 1, '223.jpg', 223),
(224, 'Kamizelka srebrna', 'Duzy', 30, 1, 1, '224.jpg', 224),
(225, 'Zakonnica', '152, Duzy', 30, 1, 1, '225.jpg', 225),
(226, 'Clown', 'Duzy', 30, 1, 1, '226.jpg', 226),
(227, 'Frak długi bordo', 'Duzy', 30, 1, 1, '227.jpg', 227),
(228, 'Sukienka bąz', 'Duzy', 30, 1, 1, '228.jpg', 228),
(229, 'Sukienka lata 60 - te', 'Duzy', 30, 1, 1, '229.jpg', 229),
(230, 'Chinka', 'Duzy', 30, 1, 1, '230.jpg', 230),
(231, 'Nutka Pan', 'Duzy', 30, 1, 1, '231.jpg', 231),
(232, 'Sukienka czerwona', 'Duzy', 30, 1, 1, '232.jpg', 232),
(233, 'Sukienka dyskotekowa', 'Duzy', 30, 1, 1, '233.jpg', 233),
(234, 'Kosmitka', 'Duzy', 30, 1, 1, '234.jpg', 234),
(235, 'Sukienka party', 'Duzy', 30, 1, 1, '235.jpg', 235),
(236, 'Egipcjanka', 'Duzy', 30, 1, 1, '236.jpg', 236),
(237, 'Clown płaszcz', 'Duzy', 30, 1, 1, '237.jpg', 237),
(238, 'Kamerdyner kamizelka', 'Duzy', 30, 1, 1, '238.jpg', 238),
(239, 'Sukienka lata 60-te / 1', 'Duzy', 30, 1, 1, '239.jpg', 239),
(240, 'Pokojówka', 'Duzy', 30, 1, 1, '240.jpg', 240),
(241, 'Lokaj', 'Duzy', 30, 1, 1, '241.jpg', 241),
(242, 'Pingwin', '104, Duzy', 30, 1, 1, '242.jpg', 242),
(243, 'Biedronka peleryna', 'Duzy', 30, 1, 1, '243.jpg', 243),
(244, 'Punk bluza', 'Duzy', 30, 1, 1, '244.jpg', 244),
(245, 'Kaczor', 'Duzy', 30, 1, 1, '245.jpg', 245),
(246, 'Zima smutna', 'Duzy', 30, 1, 1, '246.jpg', 246),
(247, 'Mikołaj żółty', 'Duzy', 30, 1, 1, '247.jpg', 247),
(248, 'Bocian / Łabędź ze spodniami', '116, 128,', 30, 1, 1, '248.jpg', 248),
(249, 'Sukienka wieczorowa - krótka', 'Duzy', 30, 1, 1, '249.jpg', 249),
(250, 'Sukienka wieczorowa - długa', 'Duzy', 30, 1, 1, '250.jpg', 250),
(251, 'Józef - brązowy', '128, 140, Duzy', 30, 1, 1, '251.jpg', 251),
(252, 'Lata 70 te - 80 te', 'Duzy', 30, 1, 1, '252.jpg', 252),
(253, 'Żółte płótno / Słońce', '128, 140,', 30, 1, 1, '253.jpg', 253),
(254, 'Ptak - Sójka', '116', 30, 1, 1, '254.jpg', 254),
(255, 'Ptak - Kruk - Wrona', '128', 30, 1, 1, '255.jpg', 255),
(256, 'Gejsza', '152', 30, 1, 1, '256.jpg', 256),
(257, 'Sukienka Aster', '140', 30, 1, 1, '257.jpg', 257),
(258, 'Ptak - Sikorka - Kanarek', '116, 128,', 30, 1, 1, '258.jpg', 258),
(259, 'Żabka', '104', 30, 1, 1, '259.jpg', 259),
(260, 'Renifer', '116', 30, 1, 1, '260.jpg', 260),
(261, 'Ptak - Orzeł', '104, 128, 140,', 30, 1, 1, '261.jpg', 261),
(262, 'Spódniczka - żółta', '128, 140,', 30, 1, 1, '262.jpg', 262),
(263, 'Ptak - Wróbel', '116, 128,', 30, 1, 1, '263.jpg', 263),
(264, 'Baletnica - spódniczka tiul', '128, 140,', 30, 1, 1, '264.jpg', 264),
(265, 'Słonecznikowa królewna', '104, 90, 116,', 30, 1, 1, '265.jpg', 265),
(266, 'Ratownik międzynarodowy', '128', 30, 1, 1, '266.jpg', 266),
(267, 'Królewna - różowa', '104, 128, 140, 152,', 30, 1, 1, '267.jpg', 267),
(268, 'Ważka', '104', 30, 1, 1, '268.jpg', 268),
(269, 'Spódniczka kwiat', '116, 140,', 30, 1, 1, '269.jpg', 269),
(270, 'Hiszpańska tancerka', '104, 152,', 30, 1, 1, '270.jpg', 270),
(271, 'Błękitna królowa', '104, 152,', 30, 1, 1, '271.jpg', 271),
(272, 'Tygrys', '104, 116, 128,', 30, 1, 1, '272.jpg', 272),
(273, 'Biała koszula', 'Duzy', 30, 1, 1, '273.jpg', 273),
(274, 'Rzymianin', 'Duzy', 30, 1, 1, '274.jpg', 274),
(275, 'Owieczka', '116', 30, 1, 1, '275.jpg', 275),
(276, 'Zebra', '116', 30, 1, 1, '276.jpg', 276),
(277, 'Strój Disco - różowy', '128', 30, 1, 1, '277.jpg', 277),
(278, 'Miś Panda', '116', 30, 1, 1, '278.jpg', 278),
(279, 'Żyrafa', '116, Duzy', 30, 1, 1, '279.jpg', 279),
(280, 'Krokodyl', '104, 116,', 30, 1, 1, '280.jpg', 280),
(281, 'Koń', '104', 30, 1, 1, '281.jpg', 281),
(282, 'Pies', '104', 30, 1, 1, '282.jpg', 282),
(283, 'Kangur', '116', 30, 1, 1, '283.jpg', 283),
(284, 'Jaś wędrowniczek', '104', 30, 1, 1, '284.jpg', 284),
(285, 'Gejsza', '152, Duzy', 30, 1, 1, '285.jpg', 285),
(286, 'Oficer', '116', 30, 1, 1, '286.jpg', 286),
(287, 'Nietoperz', '104', 30, 1, 1, '287.jpg', 287),
(288, 'Królowa Flamenco', '140, Duzy', 30, 1, 1, '288.jpg', 288),
(289, 'Wampir - Dracula', '116', 30, 1, 1, '289.jpg', 289),
(290, 'Policjant', '104, 116, 128, 140, 152,', 30, 1, 1, '290.jpg', 290),
(291, 'Wojownik czerwony', '128, 152,', 30, 1, 1, '291.jpg', 291),
(292, 'Sukienka żółta ( BELLA )', '116, 128, 140, 152, Duzy', 30, 1, 1, '292.jpg', 292),
(293, 'Sukienka różowa( BELLA )', '128, 140, Duzy', 30, 1, 1, '293.jpg', 293),
(294, 'Królowa Fiona', '104', 30, 1, 1, '294.jpg', 294),
(295, 'Dworska suknia', 'Duzy', 30, 1, 1, '295.jpg', 295),
(296, 'Syrenka dziewczynka', '104, 116,', 30, 1, 1, '296.jpg', 296),
(297, 'Wąż dziewczynka', '140', 30, 1, 1, '297.jpg', 297),
(298, 'Gajowy / Robin Hood', '128', 30, 1, 1, '298.jpg', 298),
(299, 'Sukienka czerwona', 'Duzy', 30, 1, 1, '299.jpg', 299),
(300, 'Śmierć', '116, 128, Duzy', 30, 1, 1, '300.jpg', 300),
(301, 'Dworskie suknie', '116, 128, 140,', 30, 1, 1, '301.jpg', 301),
(302, 'Teletubiś', '116', 30, 1, 1, '302.jpg', 302),
(303, 'Sukienka żółta extra', '116', 30, 1, 1, '303.jpg', 303),
(304, 'Księżniczka Disney', '104, 116,', 30, 1, 1, '304.jpg', 304),
(305, 'Księżniczka', '104, 116, 128, 140, 152,', 30, 1, 1, '305.jpg', 305),
(306, 'Mikołaj dziewczyna', '128, 152, Duzy', 30, 1, 1, '306.jpg', 306),
(307, 'Kot Garfield', '116', 30, 1, 1, '307.jpg', 307),
(308, 'Kosmitka', '116, 128,', 30, 1, 1, '308.jpg', 308),
(309, 'Sukienka czerwona Disney', '104, 116, 128,', 30, 1, 1, '309.jpg', 309),
(310, 'Sukienka różowa', '116', 30, 1, 1, '310.jpg', 310),
(311, 'Kopciuszek Disney', '104, 90, 116, 128, 152,', 30, 1, 1, '311.jpg', 311),
(312, 'Suknia dworska bordowa', '116, 128, 140, 152, Duzy', 30, 1, 1, '312.jpg', 312),
(313, 'Suknia dworska niebieska', '116, 140, Duzy', 30, 1, 1, '313.jpg', 313),
(314, 'Sukienka różowa 1', '104, 152,', 30, 1, 1, '314.jpg', 314),
(315, 'Prosiaczek', '140', 30, 1, 1, '315.jpg', 315),
(316, 'Księżniczka biała', '116', 30, 1, 1, '316.jpg', 316),
(317, 'Suknia dworska złota', '116', 30, 1, 1, '317.jpg', 317),
(318, 'Sukienka niebieska', '116, 128,', 30, 1, 1, '318.jpg', 318),
(319, 'Jedai - Gwiezdne wojny', '116, 128, 140,', 30, 1, 1, '319.jpg', 319),
(320, 'Szlachcic', 'Duzy', 30, 1, 1, '320.jpg', 320),
(321, 'Suknia dworska', '152, Duzy', 30, 1, 1, '321.jpg', 321),
(322, 'Barbie', '104', 30, 1, 1, '322.jpg', 322),
(323, 'Dworzanin', '116, 128, 140, 152, Duzy', 30, 1, 1, '323.jpg', 323),
(324, 'Vader - Gwiezdne wojny', '128, 140, Duzy', 30, 1, 1, '324.jpg', 324),
(325, 'Dama dworu', '116', 30, 1, 1, '325.jpg', 325),
(326, 'Batman + rękawice', '128', 30, 1, 1, '326.jpg', 326),
(327, 'Harry Potter', '116, 128,', 30, 1, 1, '327.jpg', 327),
(328, 'Księżniczka / Żebraczka', '104, 116,', 30, 1, 1, '328.jpg', 328),
(329, 'Myszka Miki', '104, 116,', 30, 1, 1, '329.jpg', 329),
(330, 'Barbie', '104, 90, 116,', 30, 1, 1, '330.jpg', 330),
(331, 'Panna młoda Disney', '104', 30, 1, 1, '331.jpg', 331),
(332, 'Księżniczka', '104, 90, Duzy', 30, 1, 1, '332.jpg', 332),
(333, 'Sukienka Piękna i Bestia', '140, Duzy', 30, 1, 1, '333.jpg', 333),
(334, 'Elizabeth Piraci z Karaibów', '128, Duzy', 30, 1, 1, '334.jpg', 334),
(335, 'Sukienka Kopciuszek', '104, 116,', 30, 1, 1, '335.jpg', 335),
(336, 'Księżniczka - bordo', '116', 30, 1, 1, '336.jpg', 336),
(337, 'Pelerynka - Disney', '128', 30, 1, 1, '337.jpg', 337),
(338, 'Śmierć / Diabeł', '116', 30, 1, 1, '338.jpg', 338),
(339, 'Rajdowiec', '116, 140,', 30, 1, 1, '339.jpg', 339),
(340, 'Dworska - bordo', '104', 30, 1, 1, '340.jpg', 340),
(341, 'Kopciuszek', '104, 128, Duzy', 30, 1, 1, '341.jpg', 341),
(342, 'Koszula chłopska', '128', 30, 1, 1, '342.jpg', 342),
(343, 'Meksykanin', 'Duzy', 30, 1, 1, '343.jpg', 343),
(344, 'Suknia złota z welonem', '128, 140,', 30, 1, 1, '344.jpg', 344),
(345, 'Suknia żółta z narzutką', 'Duzy', 30, 1, 1, '345.jpg', 345),
(346, 'Suknia dworska zielona', 'Duzy', 30, 1, 1, '346.jpg', 346),
(347, 'Cheerliderka', '128', 30, 1, 1, '347.jpg', 347),
(348, 'Baba Jaga', '116, 128,', 30, 1, 1, '348.jpg', 348),
(349, 'Tygrys', '140', 30, 1, 1, '349.jpg', 349),
(350, 'Kombinezon czerwony', 'Duzy', 30, 1, 1, '350.jpg', 350),
(351, 'Bob Budowniczy', '116', 30, 1, 1, '351.jpg', 351),
(352, 'Hinduska', 'Duzy', 30, 1, 1, '352.jpg', 352),
(353, 'Suknia dworska czerwona', 'Duzy', 30, 1, 1, '353.jpg', 353),
(354, 'Pielęgniarka', '128, Duzy', 30, 1, 1, '354.jpg', 354),
(355, 'Księżniczka Różyczka', '104, 1 x 80-', 30, 1, 1, '355.jpg', 355),
(356, 'Mieszczanka', '140', 30, 1, 1, '356.jpg', 356),
(357, 'Śnieżynka', '128', 30, 1, 1, '357.jpg', 357),
(358, 'Śpiąca Królewna', '128', 30, 1, 1, '358.jpg', 358),
(359, 'Dworzanin 1', '152', 30, 1, 1, '359.jpg', 359),
(360, 'Królewicz', '128', 30, 1, 1, '360.jpg', 360),
(361, 'Pajęczarka', '140, 152', 30, 1, 1, '361.jpg', 361),
(362, 'Wróżka', '104', 30, 1, 1, '362.jpg', 362),
(363, 'Dynia', '116, 128,', 30, 1, 1, '363.jpg', 363),
(364, 'Kot - sukienka', '104, 90, 152,', 30, 1, 1, '364.jpg', 364),
(365, NULL, NULL, 30, 1, 1, '365.jpg', 365),
(366, 'Czerwone spodnie', '140', 30, 1, 1, '366.jpg', 366),
(367, 'Czarownica fioletowa', '104, 90, 116, 140', 30, 1, 1, '367.jpg', 367),
(368, 'Disney różowa ( długi rękaw )', '116', 30, 1, 1, '368.jpg', 368),
(369, 'Toga sędziowska', '140', 30, 1, 1, '369.jpg', 369),
(370, 'Power Rangers różowa dziew.', '140', 30, 1, 1, '370.jpg', 370),
(371, 'Sportakus', '104', 30, 1, 1, '371.jpg', 371),
(372, 'Muszkieterka', '116, Duzy', 30, 1, 1, '372.jpg', 372),
(373, 'Lekarz', '116, 128, Duzy', 30, 1, 1, '373.jpg', 373),
(374, 'Lekarz spódnica', 'Duzy', 30, 1, 1, '374.jpg', 374),
(375, 'Peleryna zielona', 'Duzy', 30, 1, 1, '375.jpg', 375),
(376, 'Wilkołak', '140', 30, 1, 1, '376.jpg', 376),
(377, 'Góralka', '128, 140,', 30, 1, 1, '377.jpg', 377),
(378, 'Marynarz z czapką', '116, 128, 140, Duzy', 30, 1, 1, '378.jpg', 378),
(379, 'Kosmita-Astronauta', '116, 128, 140,', 30, 1, 1, '379.jpg', 379),
(380, 'Księżniczka różowa', '128', 30, 1, 1, '380.jpg', 380),
(381, 'Ptak egzotyczny dz.', '140', 30, 1, 1, '381.jpg', 381),
(382, 'Diablica', '140', 30, 1, 1, '382.jpg', 382),
(383, 'Dracula dz.', '140', 30, 1, 1, '383.jpg', 383),
(384, 'Hallowen dz.', '128', 30, 1, 1, '384.jpg', 384),
(385, 'Ben Ten', '116', 30, 1, 1, '385.jpg', 385),
(386, 'Iron Man', '140', 30, 1, 1, '386.jpg', 386),
(387, 'Marchewka', '128', 30, 1, 1, '387.jpg', 387),
(388, 'Dzwoneczek', '104, 116, 140, 152, Duzy', 30, 1, 1, '388.jpg', 388),
(389, 'Krowa z maską', '152, Duzy', 30, 1, 1, '389.jpg', 389),
(390, 'Księżniczka - 3 kolory', '128', 30, 1, 1, '390.jpg', 390),
(391, 'Tęcza / Słońce', '116', 30, 1, 1, '391.jpg', 391),
(392, 'Hannah Montana', '128', 30, 1, 1, '392.jpg', 392),
(393, 'Księżniczka Różyczka', '104, 116,', 30, 1, 1, '393.jpg', 393),
(394, 'Piratka LUX', 'Duzy', 30, 1, 1, '394.jpg', 394),
(395, 'Toy Story + maska', '104', 30, 1, 1, '395.jpg', 395),
(396, 'Jasmina fioletowa', '140', 30, 1, 1, '396.jpg', 396),
(397, 'Chińczyk', '128', 30, 1, 1, '397.jpg', 397),
(398, 'Klon z maską Gwiezdne wojny', '116, 128, 140', 30, 1, 1, '398.jpg', 398),
(399, 'Czarownica - śpiąca królewna', 'Duzy', 30, 1, 1, '399.jpg', 399),
(400, 'George Dobranocny Ogród', '116', 30, 1, 1, '400.jpg', 400),
(401, 'Piratka z Karaibów Lux', 'Duzy', 30, 1, 1, '401.jpg', 401),
(402, 'Pirat super', 'Duzy', 30, 1, 1, '402.jpg', 402),
(403, 'Indianin super', 'Duzy', 30, 1, 1, '403.jpg', 403),
(404, 'Strój Lata XX', 'Duzy', 30, 1, 1, '404.jpg', 404),
(405, 'Suknia dworska dł. rękaw', '116', 30, 1, 1, '405.jpg', 405),
(406, 'Zakonnik', '128, Duzy', 30, 1, 1, '406.jpg', 406),
(407, 'Więzień', 'Duzy', 30, 1, 1, '407.jpg', 407),
(408, 'Transformers z maską', '104', 30, 1, 1, '408.jpg', 408),
(409, 'Bella czerwona', '128', 30, 1, 1, '409.jpg', 409),
(410, 'Księżniczka żółta', '104, 116', 30, 1, 1, '410.jpg', 410),
(411, 'Hello Kitty', '104, 116', 30, 1, 1, '411.jpg', 411),
(412, 'Piratka różowa', 'Duzy', 30, 1, 1, '412.jpg', 412),
(413, 'Marynarz sexi / kobieta /', 'Duzy', 30, 1, 1, '413.jpg', 413),
(414, 'Pelerynka Śnieżynka', '140', 30, 1, 1, '414.jpg', 414),
(415, 'Pielęgniarka sexi', 'Duzy', 30, 1, 1, '415.jpg', 415),
(416, 'Oficer', 'Duzy', 30, 1, 1, '416.jpg', 416),
(417, 'Roszpunka', '104, 90, 116, 140', 30, 1, 1, '417.jpg', 417),
(418, 'Anioł upadły + czarne skrzydła', '152, Duzy', 30, 1, 1, '418.jpg', 418),
(419, 'Elza z krainy lodu', '104, 116, 128, 140,', 30, 1, 1, '419.jpg', 419),
(420, 'Iniemamocni', '140', 30, 1, 1, '420.jpg', 420),
(421, 'Jednorożec', '116', 30, 1, 1, '421.jpg', 421),
(422, 'Policjant drogówka', '104', 30, 1, 1, '422.jpg', 422),
(423, 'Obi-Wan Kenobi', '128', 30, 1, 1, '423.jpg', 423),
(424, 'Elza I', '104, 128,', 30, 1, 1, '424.jpg', 424),
(425, 'Ana I', '116, 128,', 30, 1, 1, '425.jpg', 425),
(426, 'Rzepka', '116', 30, 1, 1, '426.jpg', 426),
(427, 'Psi Patrol - Marshall', '116', 30, 1, 1, '427.jpg', 427),
(428, 'Psi Patrol - Chase', '128', 30, 1, 1, '428.jpg', 428),
(429, 'Biedronka \" Miraculum \"', '116', 30, 1, 1, '429.jpg', 429),
(430, 'Pidżamersi zielony, czerwony', '116, 128,', 30, 1, 1, '430.jpg', 430),
(431, 'My Little Pony', '90, 104', 30, 1, 1, '431.jpg', 431);

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
  `size` varchar(10) NOT NULL,
  `price` varchar(10) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(40) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `rentals`
--

INSERT INTO `rentals` (`id_rent`, `name`, `date_rent`, `date_return`, `costume_id`, `size`, `price`, `phone`, `address`, `status`) VALUES
(1, 'Tomasz Dębosz', '2022-05-26', '2022-05-28', '1', '', '30', '+48506409529', 'Józefa Romana 25', 'overdue'),
(2, 'Borkosz Mariusz', '2022-05-26', '2022-05-29', '2', '', '30', '+48506432329', 'Nowohucka 35 32-700 Bochnia', 'overdue'),
(3, 'dsadsa', '2022-05-29', '2022-05-29', '3', '', 'sadasdas', 'dsadsa', 'address', 'overdue'),
(4, 'JarosĹaw Krawczyk', '2022-05-30', '2022-06-01', '1', '', '30', '+48 506 409 529', 'address', 'overdue'),
(5, 'Kuba Samek', '2022-05-31', '2022-06-02', '1', '', '30', '+48 506 409 529', 'Jóżefa Romana 25', 'overdue'),
(6, 'Tomasz Dębosz', '2022-05-29', '2022-05-31', '3', '', '30', '+48 506 409 529', 'Józefa Romana 25', 'overdue'),
(15, 'Tomasz Dębosz', '2022-10-05', '2022-10-06', '5', '128', '30', '732067591', 'Józefa Romana 25', 'rented'),
(16, 'dsa', '2022-10-05', '2022-10-07', '5', '128', '30', 'dasdas', 'dsadsadas', 'rented');

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
  ADD PRIMARY KEY (`product_id`);

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
  MODIFY `product_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=432;

--
-- AUTO_INCREMENT dla tabeli `rentals`
--
ALTER TABLE `rentals`
  MODIFY `id_rent` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

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
