-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 09, 2022 at 02:00 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `powergym`
--

-- --------------------------------------------------------

--
-- Table structure for table `osoby`
--

CREATE TABLE `osoby` (
  `id_osoba` int(11) NOT NULL,
  `imie` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(40) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `osoby`
--

INSERT INTO `osoby` (`id_osoba`, `imie`, `nazwisko`, `email`) VALUES
(1, 'Mateusz', 'Kosowski', 'mateusz@gmail.com'),
(2, 'Martyna', 'Macuga', 'martyna@tlen.pl'),
(3, 'Krystian', 'Koczynasz', 'krystian@onet.pl'),
(5, 'Martyna', 'Macuga', 'martyna@gmail.com'),
(6, 'Eryk', 'Dudkiewicz', 'eryk@onet.pl'),
(7, 'Mateusz', 'Kosowski', 'mateusz-kosowski2003@tlen.pl'),
(8, 'Mariola', 'Wymyślona', 'mariolka@tlen.pl');

-- --------------------------------------------------------

--
-- Table structure for table `rezerwacje`
--

CREATE TABLE `rezerwacje` (
  `id_rezerwacja` int(255) NOT NULL,
  `osoba` int(255) NOT NULL,
  `zajecia` int(255) NOT NULL,
  `data` varchar(11) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `rezerwacje`
--

INSERT INTO `rezerwacje` (`id_rezerwacja`, `osoba`, `zajecia`, `data`) VALUES
(1, 1, 1, '2022-02-08'),
(2, 2, 4, '2022-02-10'),
(18, 1, 4, '2022-02-17'),
(21, 5, 5, '2022-02-18'),
(22, 6, 1, '2022-02-08'),
(23, 7, 5, '2022-02-18'),
(24, 7, 4, '2022-03-09'),
(25, 3, 3, '2022-11-10'),
(26, 8, 5, '2022-02-23'),
(27, 8, 7, '2022-02-28'),
(28, 7, 6, '2022-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `zajecia`
--

CREATE TABLE `zajecia` (
  `id_zajecia` int(255) NOT NULL,
  `nazwa` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `opis` varchar(2000) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zajecia`
--

INSERT INTO `zajecia` (`id_zajecia`, `nazwa`, `opis`) VALUES
(1, 'MMA', 'Mieszane sztuki walki - dyscyplina sportowa, w której zawodnicy walczą przy dużym zakresie dozwolonych technik. Walka toczy się przy jak najmniejszych ograniczeniach, ale jednoczesnym zminimalizowaniu ryzyka śmierci i poważnych, trwałych obrażeń ciała lub kalectwa. Podczas zajęć grupowych prowadzonych pod czułym okiem naszego trenera Boba Sappa nauczysz się podstawowych technik i zasad MMA.'),
(2, 'K-1', 'Walki na zmodyfikowanych zasadach japońskiego kick-boxingu wzbogaconych o techniki z innych stylów. Starcie toczy się wyłącznie w „stójce” (zakaz walki w parterze). Dozwolone są wszelkie ciosy bokserskie (plus uderzenie obrotowe grzbietem pięści, ang. backfist) oraz kopnięcia (w tym kolanem). Pole rażenia to zarówno głowa, korpus, jak i nogi przeciwnika. Na zajęciach indywidualnych i grupowych, nasz trener Bob Sapp nauczy Cię podstawowych technik zarówno defensywnych jak i ofensywnych.'),
(3, 'Wrestling', 'Styl walki prezentowany przez zawodników bazuje na klasycznych zapasach i wolnoamerykance. Jest też wzbogacony o widowiskowe ruchy unikatowe dla wrestlingu, takie jak dźwignie, rzuty i akcje powietrzne. Niektóre manewry w rzeczywistości wymagają współpracy obu wrestlerów. Czasem w walkach wykorzystywane są różnego rodzaju przedmioty, takie jak krzesła, stoły i drabiny. Na naszych zajęciach grupowych prowadzonych przez byłego zawodnika Wrestligu - Boba Sappa, nauczysz się wielu ciekawych ruchów oraz sztuczek.'),
(4, 'Fitness', 'Rodzajów zajęć fitness jest wiele, w naszej ofercie zajęć grupowych znajduje się DANCE AEROBIK. To zajęcia, w których najważniejszy jest układ choreograficzny. Kroki bazują na określonych stylach tanecznych. Przykładami mogą być:  funky, hip-hop, sexy class, latino aerobik itp. Głównym celem ćwiczeń jest poprawa koordynacji, kondycji, pamięci ruchowej i wytrzymałości. Nasz układ oddechowy oraz krwionośny odniosą duże korzyści. Bardzo popularną odmianą tego typu zajęć jest zumba, będąca połączeniem tańca i aerobiku. Nasza instruktorka Anna Lewandowska pokazuje kroki, a ćwiczący je powtarzają.'),
(5, 'Cardio', 'Trening cardio to ćwiczenia wytrzymałościowe dotleniające organizm, poprawiające pracę układu krążenia oraz kondycję organizmu. Trening cardio nazywany jest też treningiem tlenowym. Zwiększa ilość oddechów na minutę oraz przyspiesza tętno, co sprawia, że komórki i tkanki mięśniowe są lepiej dotlenione. W naszej placówce zajęcia tego typu są prowadzone grupowo pod kontrolą trenerki Anny Lewandowskiej.'),
(6, 'Siłowe', 'Trening siłowy to jeden z najczęściej stosowanych rodzajów ćwiczeń na siłowni, ponieważ pomaga rozbudować i wzmocnić mięśnie. Ćwiczenia oporowe prowadzą do wzrostu siły mięśniowej poprzez zmuszanie ich do wykonywania pracy większej niż zwykle. Ponadto zwiększa metabolizm organizmu, co pozwala skutecznie zredukować tkankę tłuszczową. Efektem będzie zgrabna i estetyczna sylwetka z zarysowanymi mięśniami. W dążeniu do wymarzonych osiągów i wyglądu ciała pomoże Ci nasz wykfalifikowany trener Mariusz Pudzianowski, zarówno na zajęciach indywidualnych jak i grupowych.'),
(7, 'Obwodowe', 'Trening obwodowy łączy cechy treningu siłowego i wytrzymałościowego, dzięki czemu pomaga spalić tłuszcz, wymodelować sylwetkę oraz poprawić kondycję organizmu. Poprzez to że nie stosuje się przy nim dużego obciążenia, nie prowadzi do znacznego przyrostu mięśni. Trening obwodowy polega na ustaleniu od kilku do kilkunastu ćwiczeń, które wykonuje się bez przerwy, przechodząc bezpośrednio z jednego ćwiczenia do drugiego. Natomiast przerwy na odpoczynek wykonuje się dopiero po skończeniu całego obwodu. Osobą odpowiadającą za ćwiczenia obwodowe w naszej siłowni jest Dwayne Johnson.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `osoby`
--
ALTER TABLE `osoby`
  ADD PRIMARY KEY (`id_osoba`);

--
-- Indexes for table `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD PRIMARY KEY (`id_rezerwacja`),
  ADD KEY `osoba` (`osoba`),
  ADD KEY `zajecia` (`zajecia`);

--
-- Indexes for table `zajecia`
--
ALTER TABLE `zajecia`
  ADD PRIMARY KEY (`id_zajecia`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `osoby`
--
ALTER TABLE `osoby`
  MODIFY `id_osoba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `rezerwacje`
--
ALTER TABLE `rezerwacje`
  MODIFY `id_rezerwacja` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `zajecia`
--
ALTER TABLE `zajecia`
  MODIFY `id_zajecia` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rezerwacje`
--
ALTER TABLE `rezerwacje`
  ADD CONSTRAINT `rezerwacje_ibfk_1` FOREIGN KEY (`osoba`) REFERENCES `osoby` (`id_osoba`),
  ADD CONSTRAINT `rezerwacje_ibfk_2` FOREIGN KEY (`zajecia`) REFERENCES `zajecia` (`id_zajecia`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
