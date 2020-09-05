-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 06 Wrz 2020, 01:36
-- Wersja serwera: 10.4.13-MariaDB
-- Wersja PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `testportal`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` enum('0','1') NOT NULL DEFAULT '0',
  `created_at` datetime DEFAULT current_timestamp(),
  `avatar` varchar(255) NOT NULL DEFAULT 'http://localhost/userdata/avatars/default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `admin`, `created_at`, `avatar`) VALUES
(1, 'admin', '$2y$10$Et47XSBrU2irj09trI6iteQe6TPC6NvopgXJ3H.rDX2/LAjz6bBWi', '1', '2020-09-05 11:04:17', 'http://localhost/userdata/avatars/default.png'),
(2, 'Uzytkownik 2', 'dsaasd', '0', '2020-09-06 01:01:10', 'http://localhost/userdata/avatars/default.png'),
(3, 'Uzytkownik 3', 'asdasdas', '0', '2020-09-06 01:01:10', 'http://localhost/userdata/avatars/default.png'),
(4, 'Uzytkownik 4', '', '0', '2020-09-06 01:01:38', 'http://localhost/userdata/avatars/default.png'),
(5, 'Uzytkownik 5', '', '0', '2020-09-06 01:01:38', 'http://localhost/userdata/avatars/default.png');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
