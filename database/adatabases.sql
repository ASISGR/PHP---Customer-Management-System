-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 03 Φεβ 2023 στις 12:42:09
-- Έκδοση διακομιστή: 10.4.13-MariaDB
-- Έκδοση PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `adatabases`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `administrator`
--

CREATE TABLE `administrator` (
  `id` int(11) NOT NULL,
  `username` varchar(24) NOT NULL,
  `password` varchar(256) NOT NULL,
  `email` varchar(55) NOT NULL,
  `firstname` varchar(18) NOT NULL,
  `lastname` varchar(24) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(100) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `administrator`
--

INSERT INTO `administrator` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `phone`, `address`, `created_at`) VALUES
(1, 'Admin127', 'fd12476088b4df81f4634ca9144f6950', 'admin@gmail.com', 'tasos', 'dimitriadis', '6989168354', 'Iwannh kragia 4 56121 ampelokipi thessaloniki', '2022-11-30'),
(84, 'jyvuqujoh', 'fd12476088b4df81f4634ca9144f6950', 'zocob@mailinator.com', 'Warren', 'Morrow', '+1 (395) 992-8812', 'Ut iure nisi veniam', '2023-02-02'),
(85, 'mydij', 'fd12476088b4df81f4634ca9144f6950', 'fafywy@mailinator.com', 'Hadley', 'Carroll', '+1 (544) 823-6513', 'Duis nulla pariatur', '2023-02-02'),
(86, 'syjyj', 'fd12476088b4df81f4634ca9144f6950', 'zulymerim@mailinator.com', 'Beverly', 'Beasley', '+1 (438) 508-7834', 'Quaerat consectetur', '2023-02-02'),
(87, 'tunubyluge', 'fd12476088b4df81f4634ca9144f6950', 'bigetaj@mailinator.com', 'Kevyn', 'Lloyd', '+1 (621) 368-5681', 'Vero excepteur maxim', '2023-02-02');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `firstname` varchar(18) NOT NULL,
  `lastname` varchar(24) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(55) NOT NULL,
  `comments` text NOT NULL,
  `registered_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `customers`
--

INSERT INTO `customers` (`id`, `firstname`, `lastname`, `address`, `phone`, `email`, `comments`, `registered_at`, `active`) VALUES
(32, 'CustomerName', 'CustomerLastname', 'Customer Address 9 Greece', '6989168354', 'customer@gmail.com', 'I am just a test customer', '2023-02-02 19:19:51', 0),
(33, 'Jannis', 'Kocher', 'Kirchstrasse 40 Lorch 73547 Deutschland', '4321432152', 'kocher@gmail.com', 'Jannis hat eine Bäckerei', '2023-02-03 11:41:09', 1),
(34, 'Xantha', 'Kim', 'Asperiores consectet', '6342643223', 'pewybypi@mailinator.com', 'Cumque mollitia libe', '2023-02-03 11:41:13', 1),
(35, 'Noelani', 'Galloway', 'Hic perferendis sed ', '634257279', 'sofujugof@mailinator.com', 'Impedit quod rerum ', '2023-02-03 11:41:17', 1),
(36, 'Upton', 'Duran', 'Irure elit aliqua ', '7876432456', 'gepod@mailinator.com', 'Ad fugit recusandae', '2023-02-03 11:41:20', 1),
(37, 'Hamilton', 'Gregory', 'Do perferendis provi', '8563654326', 'wuwywyrily@mailinator.com', 'Vero est excepturi r', '2023-02-03 11:41:23', 1),
(38, 'Robin', 'Barker', 'Quae veritatis dicta', '6342643256642', 'xapic@mailinator.com', 'Voluptatum sunt omn', '2023-02-03 11:41:26', 1),
(39, 'Hammett', 'William', 'Rerum corporis venia', '4323887482', 'hycuse@mailinator.com', 'Nemo dolor quia aliq', '2023-02-03 11:40:56', 0),
(40, 'Marcia', 'William', 'Pariatur Quod maxim', '4353427723', 'cusazyxiba@mailinator.com', 'Doloribus eum mollit', '2023-02-03 11:41:02', 0),
(41, 'Linda', 'Jennings', 'Nulla tenetur est do', '76515252314', 'juqoritef@mailinator.com', 'Accusamus optio Nam', '2023-02-03 11:41:05', 0),
(42, 'Howard', 'Brewer', 'Sunt a voluptatum d', '346565775234', 'witibeto@mailinator.com', 'Amet dolores distin', '2023-02-03 11:41:30', 1);

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Ευρετήρια για πίνακα `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT για άχρηστους πίνακες
--

--
-- AUTO_INCREMENT για πίνακα `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT για πίνακα `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
