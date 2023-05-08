-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2023 at 10:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reglog`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phonenum` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phonenum`, `email`, `address`, `date`) VALUES
(1, 'MUHAMMAD NASHRUL BIN HAMZAH', '0136604918', 'nashrulhamzah01@gmail.com', 'No.1671,Jalan Bayu 9,Taman Seri Bayu 2', '2023-01-21'),
(2, 'izzah', '09282828', 'oooo@gmail.com', 'Kuala Lumpurr', '2023-01-31'),
(3, 'Brian Lim', '01923211', 'brian@gmail.com', 'No.1671,Jalan Bayu 9,Taman Seri Bayu 2', '2023-01-23'),
(4, 'Mount', '01928833', 'mount@gmail.com', 'Kota Bharu', '2023-02-08'),
(5, 'Hakimi', '0193725747', 'hakimi@gmail.com', 'Segamat', '2023-02-03'),
(6, 'Luqman', '0163636631', 'luqman@yahoo.com', 'Bangi', '2023-02-10'),
(7, 'Hasan', '0122121212', 'hasan@gmail.com', 'Tumpat', '2023-03-02'),
(8, 'Stuart', '018377211', 'stuart@gmail.com', 'Kuala Lumpur', '2023-03-03'),
(9, 'Yap', '019288331', 'yap@gmail.com', 'Ipoh', '2023-02-10'),
(10, 'Ikmal', '0192773112', 'ikmal@gmail.com', 'Kuala Lumpur', '2023-02-08');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `password` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `name`, `username`, `email`, `phonenumber`, `password`) VALUES
(4, 'anderson', 'anderson1', 'ab@gmail.com', 0, '123'),
(5, 'kima', 'kim', 'aaa@gmail.com', 0, '098'),
(6, 'MUHAMMAD NASHRUL BIN HAMZAH', 'nashrul', 'nashrulhamzah01@gmail.com', 136604918, 'melaka'),
(7, 'Amirah', 'Amirah2', 'am@yahoo.com', 1928822, 'abu'),
(8, 'james', 'jame3', 'uu@gmail.com', 123333, 'qaz'),
(9, 'chai', 'chai2', 'ch@ss.com', 99292, '1qa'),
(10, 'Sam', 'sam2', 'aa@ss.com', 981, 'opq'),
(11, 'Fatimah', 'fatimah1', 'fatimah@gmail.com', 192222331, 'selangor'),
(12, 'izzah', 'izzah12', 'izzah@gmail.com', 1233442332, 'izzah'),
(13, 'Brian', 'Brian1', 'brian@gmail.com', 12732921, 'uthm'),
(14, 'syamsul', 'syamsul2', 'syamsul@gmail.com', 18376361, 'kazar'),
(15, 'mount', 'mount3', 'mount@gmail.com', 18377422, 'pahang'),
(16, 'Stuart', 'Stuar1', 'stuart@gmail.com', 123466542, 'selangor'),
(17, 'Yap', 'yap1', 'yap@gmail.com', 192772112, 'perak'),
(18, 'Ikmal', 'ikmal1', 'ikmal@gmail.com', 192883711, 'perlis'),
(19, 'Feroz', 'feroz1', 'feroz@gmail.com', 12355421, 'johor1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
