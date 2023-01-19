-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Φιλοξενητής: 127.0.0.1
-- Χρόνος δημιουργίας: 19 Ιαν 2023 στις 11:37:51
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
(2, 'AdminTest', 'fd12476088b4df81f4634ca9144f6950', 'test@gmail.com', 'admin', 'testadmin', '6989168355', 'Iwannh kragia 4 56121 ampelokipi thessaloniki', '2022-11-30'),
(3, 'Admin0', 'fd12476088b4df81f4634ca9144f6950', 'aooo@gmail.com', 'admindd', 'adminn', '494949494', 'fkjiefi', '2022-12-08'),
(4, 'Admin022', 'fd12476088b4df81f4634ca9144f6950', 'aooeo@gmail.com', 'admindd', 'adminn', '494949493214', 'fkjiefi', '2022-12-08');

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
(3, 'Kwstas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:11', 1),
(4, 'Alex', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:14', 0),
(5, 'Dionisis', 'mdoeddd', 'salougka skg re 6, 51224 thessaloniki', '45923494848', 'Dikomo@gmail.com', 'ssssssssssssssssssssss', '2022-11-30 10:10:21', 1),
(6, 'Antreas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:24', 1),
(7, 'Kuriakos', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:28', 0),
(8, 'Spiros', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:30', 1),
(9, 'Giannis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-28 12:59:16', 0),
(10, 'Teo', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-28 16:17:09', 1),
(11, 'Lampros', 'georgiou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:40', 0),
(12, 'Thanasis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:43', 0),
(13, 'Petros', 'Πέτρου', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:48', 0),
(14, 'Xarhs', 'Δημητριάδης', 'Ιωάννη Κραγιά 4, 51621 Αμπελόκοιπη', '6989168354', 'asisgr01@gmail.com', 'Έχει κάνει τις περισσότερες πωλήσεις τον τελευταίο μήνα.', '2022-11-30 10:10:54', 1),
(15, 'Loukas', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168355', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:10:58', 0),
(16, 'Zisis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:11:05', 1),
(17, 'Sakis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'Δοκιμή ρε', '2022-12-09 10:17:32', 1),
(18, 'Antonis', 'mdoeddd', 'salougka skg re 6, 51224 thessaloniki', '45923494848', 'Dikomo@gmail.com', 'ssssssssssssssssssssss', '2022-11-30 10:11:15', 1),
(19, 'Xaralampos', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:11:23', 1),
(20, 'Rafail', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:11:26', 0),
(22, 'Mixalis', 'Petrou', 'antoniou poliksenis 6, 51224 thessaloniki', '6989168354', 'GiorgosPetrou@gmail.com', 'texttttttttttt', '2022-11-30 10:11:50', 0),
(27, 'Thanos', 'Nikou', 'street 5, 54214 boston USA', '6989146217', 'nikou@gmail.com', 'New customer', '2022-12-01 14:18:03', 1),
(28, 'test', 'test2', 'odos', '696696969', 'test@gmail.com', 'commnet', '2022-12-02 11:59:52', 0),
(29, 'fweqfewq', 'fwqefewqf', 'fewfqwffff', '6969969696', 'fewfew@gmail.com', 'fewqff', '2022-12-02 12:00:20', 1),
(30, 'Γιάννης', 'Πέτρου', 'agamisou 42', '49328481244', 'fjewjfiewjfi@gmail.com', 'mjif4jwjij38f3wj8κομμεντ', '2022-12-06 20:47:45', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT για πίνακα `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
