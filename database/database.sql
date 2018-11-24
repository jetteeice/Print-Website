-- phpMyAdmin SQL Dump\
-- version 4.8.3\
-- https://www.phpmyadmin.net/\
--\
-- Host: localhost:8889\
-- Generation Time: Nov 24, 2018 at 05:14 PM\
-- Server version: 5.7.23\
-- PHP Version: 7.2.8\
\
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";\
SET time_zone = "+00:00";\
\
--\
-- Database: `Websitedatabase`\
--\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `artists`\
--\
\
CREATE TABLE `artists` (\
  `artist_id` int(11) NOT NULL,\
  `first_name` varchar(255) NOT NULL,\
  `last_name` varchar(255) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `artists`\
--\
\
INSERT INTO `artists` (`artist_id`, `first_name`, `last_name`) VALUES\
(3, 'David', 'Tartakover'),\
(4, 'Alphonse', 'Mucha'),\
(5, 'Henri', 'de Toulouse Lautrec'),\
(6, 'Jules', 'Cheret'),\
(7, 'Leonetto', 'Cappiello'),\
(8, 'Paul', 'Colin');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `artist_poster`\
--\
\
CREATE TABLE `artist_poster` (\
  `artist_poster_id` int(11) NOT NULL,\
  `poster_id` int(11) NOT NULL,\
  `artist_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `artist_poster`\
--\
\
INSERT INTO `artist_poster` (`artist_poster_id`, `poster_id`, `artist_id`) VALUES\
(15, 9, 3),\
(16, 10, 4),\
(17, 11, 5),\
(18, 12, 6),\
(19, 13, 7),\
(20, 14, 8);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `gallery`\
--\
\
CREATE TABLE `gallery` (\
  `picture` varchar(255) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `gallery`\
--\
\
INSERT INTO `gallery` (`picture`) VALUES\
('image/Unbenanntes_Werk.png');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `posters`\
--\
\
CREATE TABLE `posters` (\
  `poster_id` int(11) NOT NULL,\
  `title` varchar(255) NOT NULL,\
  `price` varchar(255) NOT NULL,\
  `size` varchar(255) NOT NULL,\
  `is_reserved` int(11) NOT NULL,\
  `photo` varchar(255) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `posters`\
--\
\
INSERT INTO `posters` (`poster_id`, `title`, `price`, `size`, `is_reserved`, `photo`) VALUES\
(9, 'Israel Festival', '25\'80', '31 x 46 cm', 0, 'photo/tartakover.jpg'),\
(10, 'Salon des cent ', '50\'80', '51 x 77 cm', 0, 'photo/mucha.jpg'),\
(11, 'Au Moulin Rouge', '30\'80', '51 x 46 cm', 0, 'photo/henri.jpg'),\
(12, 'Les Girard', '30\'80', '51 x 46 cm', 0, 'photo/cheret.jpg'),\
(13, 'Cognac Monnet ', '50\'80', '51 x 77 cm', 0, 'photo/cappiello.jpg'),\
(14, 'Cigarettes Tigra', '60\'80', '18 x 24 cm', 0, 'photo/colin.jpg');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `printery`\
--\
\
CREATE TABLE `printery` (\
  `printery_id` int(11) NOT NULL,\
  `name` varchar(255) NOT NULL,\
  `adress` varchar(255) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `printery`\
--\
\
INSERT INTO `printery` (`printery_id`, `name`, `adress`) VALUES\
(21, 'InfoPrint ab', 'Wiesenweg 41'),\
(22, 'Tryckopia AB', 'Ebba Rams\'e4ys V\'e4g 80'),\
(23, 'Ark-Tryckaren Lars Johansson', 'Anna V\'e4g 5'),\
(24, 'Arkitektkopia J\'f6nk\'f6ping', 'Munkgatan 40'),\
(25, 'Kopia', 'Klostergatan'),\
(26, 'Druckerei Hermann', 'Nordh\'e4user Str. 32');\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `printery_poster`\
--\
\
CREATE TABLE `printery_poster` (\
  `printery_poster_id` int(11) NOT NULL,\
  `poster_id` int(11) NOT NULL,\
  `printery_id` int(11) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `printery_poster`\
--\
\
INSERT INTO `printery_poster` (`printery_poster_id`, `poster_id`, `printery_id`) VALUES\
(27, 9, 21),\
(28, 10, 22),\
(29, 11, 23),\
(30, 12, 24),\
(31, 13, 25),\
(32, 14, 26);\
\
-- --------------------------------------------------------\
\
--\
-- Table structure for table `user`\
--\
\
CREATE TABLE `user` (\
  `username` varchar(255) NOT NULL,\
  `password` varchar(42) NOT NULL\
) ENGINE=InnoDB DEFAULT CHARSET=utf8;\
\
--\
-- Dumping data for table `user`\
--\
\
INSERT INTO `user` (`username`, `password`) VALUES\
('fireyukon', '477c76e602c8cd28ffe7613110a4ec7c'),\
('cakepune', '0b4dbe904394456d0500f92a6db3b3ed'),\
('crelas', 'ebacf61946ee81f386960ad2a09a147e'),\
('olwen', 'e3afed0047b08059d0fada10f400c1e5');\
\
--\
-- Indexes for dumped tables\
--\
\
--\
-- Indexes for table `printery`\
--\
ALTER TABLE `printery`\
  ADD PRIMARY KEY (`printery_id`);}