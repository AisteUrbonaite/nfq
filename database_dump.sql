-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018 m. Vas 18 d. 21:28
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nfq`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `status_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_bin NOT NULL,
  `last_name` varchar(255) COLLATE utf8_bin NOT NULL,
  `tel_number` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_bin NOT NULL,
  `address` varchar(255) COLLATE utf8_bin NOT NULL,
  `city` varchar(255) COLLATE utf8_bin NOT NULL,
  `post_code` int(11) NOT NULL,
  `country` varchar(255) COLLATE utf8_bin NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Sukurta duomenų kopija lentelei `orders`
--

INSERT INTO `orders` (`id`, `service_id`, `status_id`, `name`, `last_name`, `tel_number`, `email`, `address`, `city`, `post_code`, `country`, `order_date`) VALUES
(1, 1, 1, 'Tomas', 'Antanaitis', 862312521, 'urbonaite.aiste@gmail.com', 'Liepų g. 13', 'Kaunas', 21345, 'Lietuva', '2018-02-18'),
(2, 1, 1, 'Antanas', 'Antanauskas', 832514235, 'Antantanauskas@gmail.com', 'Taikos g. 123', 'Jonava', 53214, 'Lietuva', '2018-02-18'),
(3, 1, 1, 'Lina', 'Tamašauskaitė', 861365244, 'l.tamasauskaite@gmail.com', 'Laisvės al. 201a', 'Vilnius', 74102, 'Lietuva', '2018-02-18'),
(4, 1, 1, 'Lukas', 'Lukauskis', 862102123, 'Lukas123@gmail.com', 'Laimės g. 13a', 'Jurbarkas', 10235, 'Lietuva', '2018-02-18'),
(5, 1, 1, 'Juozapas ', 'Taranda', 862514785, 'taranda@yahoo.com', 'Sukilėlių pr. 1', 'Kaišadorys', 12312, 'Lietuva', '2018-02-18'),
(6, 1, 1, 'Ieva', 'Bačianskaitė', 862510101, 'bac.ieva@takas.lt', 'Meilės g. 52', 'Lazdijai', 77777, 'Lietuva', '2018-02-18'),
(7, 1, 1, 'Toma', 'Stankutė', 869574123, 'st.toma@gmail.com', 'Saulės g. 1', 'Alytus', 55566, 'Lietuva', '2018-02-18'),
(8, 1, 1, 'Valė', 'Adomaitienė', 863952145, 'adom@gmail.com', 'Rožių g. 4', 'Tauragė', 11234, 'Lietuva', '2018-02-18'),
(9, 1, 1, 'Laura', 'Laurutaitė', 862142520, 'laur@gmail.com', 'Peštukų g. 7', 'Skuodas', 123, 'Lietuva', '2018-02-18'),
(10, 1, 1, 'Augustė', 'Dauskurdienė', 862103210, 'daug@gmail.com', 'RImgaudų g. 5', 'Joniškis', 12311, 'Lietuva', '2018-02-18'),
(11, 1, 1, 'Juozas', 'Pažėra', 862513252, 'jpaz@gmail.com', 'Taikos g. 14', 'Lazdijai', 52123, 'Lietuva', '2018-02-18'),
(12, 1, 1, 'Karolis ', 'Karalius', 862121212, 'king123@mail.com', 'Pelėdos g. 185-5', 'Kaunas', 10123, 'Lietuva', '2018-02-18'),
(13, 1, 1, 'Simona', 'Katinaitė', 864122236, 'kat@yahoo.com', 'Augustinų al. 11', 'Kaunas', 85213, 'Lietuva', '2018-02-18'),
(14, 1, 1, 'Vitalijus', 'Tanalovič', 862145323, 'tan@gmail.com', 'Gedimino pr. 52', 'Vilnius', 74125, 'Lietuva', '2018-02-18'),
(15, 1, 1, 'Saulė ', 'Antauskaitinaitė', 862112315, 'antausk@mail.com', 'Vilties pr. 41a', 'Kaunas', 13289, 'Lietuva', '2018-02-18'),
(16, 1, 1, 'Mantas', 'Atrikauskas', 861201475, 'mantisz@yahoo.com', 'Ramunių g. 11', 'Panevėžys', 20313, 'Lietuva', '2018-02-18'),
(17, 1, 1, 'Laimis', 'Laikuskis', 869874521, '1ad@mail.lt', 'Dariaus ir Girėno pr. 101', 'Marijampolė', 358, 'Lietuva', '2018-02-18'),
(18, 1, 1, 'Karolis', 'Starkus', 867854120, 'St.k@gmail.com', 'Atogražų g. 7', 'Lentvaris', 41258, 'Lietuva', '2018-02-18'),
(19, 1, 1, 'Raminta', 'Lauskaitė', 869541236, 'raminta@gmail.com', 'Vilniaus g 7', 'Klaipėda', 866218512, 'Lietuva', '2018-02-18'),
(20, 1, 1, 'Džeimsas', 'Starkauskaitis', 869321457, 'star@mail.com', 'Apuolės g. 9', 'Kaunas', 52136, 'Lietuva', '2018-02-18'),
(21, 1, 1, 'Vainius', 'Vainauskas', 863214569, 'vain@mail.com', 'Stalo g. 3', 'Lazdijai', 863952362, 'Lietuva', '2018-02-18'),
(22, 1, 1, 'Angelė', 'Urbonienė', 868698520, 'urbona@gmail.com', 'Uosių g. 5', 'Kupiškis', 74123, 'Lietuva', '2018-02-18'),
(23, 1, 1, 'Artūras', 'Petrauskas', 869632154, 'petr@gmail.com', 'Taikos g. 85', 'Kaunas', 52135, 'Lietuva', '2018-02-18'),
(24, 1, 1, 'Lukas ', 'Pedonauskas', 863215685, 'pedonlu@zebra.lt', 'Vilties pr. 7', 'Zarasai', 52138, 'Lietuva', '2018-02-18'),
(25, 1, 1, 'Lauris', 'Laimutis', 862135898, 'laimutis@mail.com', 'Vargų g. 102', 'Alytus', 869521320, 'Lietuva', '2018-02-18'),
(26, 1, 1, 'Zenonas', 'Klimavičius', 863215963, 'klimze@mail.com', 'Skuodo g. 13', 'Vilnius', 12896, 'Lietuva', '2018-02-18'),
(27, 1, 1, 'Liutauras', 'Salasevičius', 869898747, 'saliut@pastas.lt', 'Skudučių g. 7', 'Plungė', 25689, 'Lietuva', '2018-02-18'),
(28, 1, 1, 'Viktoras', 'Gorovoj', 869825151, 'vgo@mail.com', 'Klaipėdos g. 5', 'Kaunas', 85321, 'Lietuva', '2018-02-18'),
(29, 1, 1, 'Viktoras', 'Venclova', 869632101, 'venc@tinklas.lt', 'Vilniaus g. 101g-9', 'Panevėžys', 12895, 'Lietuva', '2018-02-18'),
(30, 1, 5, 'Kristina', 'Vainauskienė', 869512321, 'vains@mail.com', 'Kalakutų g. 2', 'Aukštadvaris', 15963, 'Lietuva', '2018-02-18'),
(31, 1, 1, 'Laitas', 'Laitauskas', 863210245, 'lait@mail.com', 'Liepų g. 18', 'Kaunas', 98562, 'Lietuva', '2018-02-18');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` text NOT NULL,
  `image_url` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sukurta duomenų kopija lentelei `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image_url`) VALUES
(1, 'Vitaminai \"Vitaminus C\"', '<p><b>\"Vitaminus C\"</b> yra gausiausias vitamino C šaltinis gamtoje (net iki 94 kartų daugiau nei apelsinuose).\r\nVitaminas C:</p>\r\n\r\n<ul>\r\n<li>padeda palaikyti normalią imuninės sistemos veiklą;</li>\r\n<li>padeda palaikyti normalią nervų sistemos veiklą;</li>\r\n<li>padeda apsaugoti ląsteles nuo oksidacinės pažaidos;</li>\r\n<li>padeda palaikyti normalią imuninės sistemos veiklą intensyvaus fizinio krūvio metu ir po jo;</li>\r\n<li>padeda palaikyti normalią psichologinę funkciją;</li>\r\n<li>padeda palaikyti normalų kolageno, kuris reikalingas normaliai kraujagyslių funkcijai, susidarymą.</li>\r\n\r\n<p><b>Sudedamosios dalys:</b></p>\r\n<p>kraštuotosios malpigijos vaisiai miltelių pavidale, L-askorbo rūgštis , želatina, ryžių sėlenos, lipnumą reguliuojanti medžiaga silicio dioksidas, lipnumą reguliuojanti medžiaga kalcio karbonatas.</p>', 'img/vitamin2.png');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `statuses`
--

CREATE TABLE `statuses` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Sukurta duomenų kopija lentelei `statuses`
--

INSERT INTO `statuses` (`id`, `name`) VALUES
(1, 'new'),
(3, 'completed'),
(4, 'canceled'),
(5, 'in progress');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
