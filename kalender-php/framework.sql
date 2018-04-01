-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Gegenereerd op: 28 mrt 2018 om 10:47
-- Serverversie: 5.6.38
-- PHP-versie: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Kalender`
--


--
-- Tabelstructuur voor tabel `birthday`
--

CREATE TABLE `birthday` (
  `birthday_id` int(11) NOT NULL,
  `birthday_name` varchar(60) NOT NULL,
  `birthday_day` varchar(60) NOT NULL,
  `birthday_month` varchar(60) NOT NULL,
  `birthday_year` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


INSERT INTO `birthday` (`birthday_id`, `birthday_name`, `birthday_day`, `birthday_month`, `birthday_year`) VALUES
(1, 'Marko Damen', 25, 6, 2001);

-- --------------------------------------------------------

--
-- Indexen voor tabel `song`
--
ALTER TABLE `birthday`
  ADD PRIMARY KEY (`birthday_id`);

--
-- AUTO_INCREMENT voor een tabel `song`
--
ALTER TABLE `birthday`
  MODIFY `birthday_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
