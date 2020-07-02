-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2020 at 09:17 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gross`
--

-- --------------------------------------------------------

--
-- Table structure for table `allpro`
--

CREATE TABLE `allpro` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(255) NOT NULL,
  `a_cost` varchar(255) NOT NULL,
  `a_img` varchar(255) NOT NULL,
  `a_imgpath` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allpro`
--

INSERT INTO `allpro` (`a_id`, `a_name`, `a_cost`, `a_img`, `a_imgpath`, `deleted`) VALUES
(1, 'Pumpkin-1kg', '3.0', '5a1c5074b6a9e3.8611320315118050447482.png', 'uplode/5a1c5074b6a9e3.8611320315118050447482.png', 1),
(2, 'PAPRIKA MIX-1KG', '6.45', 'kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 'uplode/kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 1),
(3, 'MASHROOMS-1KG', '9.50', 'kisspng-common-mushroom-stock-photography-edible-mushroom-fresh-white-mushrooms-5aabbd075851b0.8013645815212044873618.png', 'uplode/kisspng-common-mushroom-stock-photography-edible-mushroom-fresh-white-mushrooms-5aabbd075851b0.8013645815212044873618.png', 1),
(4, 'GARLIC 2 OR 4 BULBS', '4.60', '5a1ce7f53b33d7.6231403415118438292425.png', 'uplode/5a1ce7f53b33d7.6231403415118438292425.png', 1),
(5, 'GREEN PEA-1KG', '12.90', 'kisspng-snap-pea-green-pea-split-pea-bean-pea-5ce166150ed864.8607762115582756050608.png', 'uplode/kisspng-snap-pea-green-pea-split-pea-bean-pea-5ce166150ed864.8607762115582756050608.png', 1),
(6, 'AUBERGINE-500G', '2.95', 'kisspng-eggplant-leaf-vegetable-fruit-food-comer-é-poder-polenghi-5b6307dfcdc149.7211493715332167358428.png', 'uplode/kisspng-eggplant-leaf-vegetable-fruit-food-comer-é-poder-polenghi-5b6307dfcdc149.7211493715332167358428.png', 1),
(7, 'CELERY-1KG', '5.57', 'kisspng-celery-celeriac-malatang-vegetable-oenanthe-javani-celery-5abb92f0ea7405.9146321215222422889603.png', 'uplode/kisspng-celery-celeriac-malatang-vegetable-oenanthe-javani-celery-5abb92f0ea7405.9146321215222422889603.png', 1),
(8, 'PATATOS', '2.33', 'kisspng-potato-clipping-path-clip-art-potato-5a83ea5feb12d2.4912964815185946559629.png', 'uplode/kisspng-potato-clipping-path-clip-art-potato-5a83ea5feb12d2.4912964815185946559629.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `c_id` int(11) NOT NULL,
  `number` int(30) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `c_cost` varchar(255) NOT NULL,
  `c_image` varchar(255) NOT NULL,
  `c_imgpath` varchar(255) NOT NULL,
  `cart` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `deleted` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`c_id`, `number`, `c_name`, `c_cost`, `c_image`, `c_imgpath`, `cart`, `date`, `deleted`) VALUES
(3, 74, 'BANNANAS 1DOZEN', '10.00', 'BANANA.jpg', 'uplode/BANANA.jpg', 'Added', '2020/06/30 ', '1'),
(4, 14, 'CAPSICUM', '6.45', 'kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 'uplode/kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 'Added', '2020/06/30 ', '1');

-- --------------------------------------------------------

--
-- Table structure for table `fruit`
--

CREATE TABLE `fruit` (
  `f_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `f_cost` varchar(255) NOT NULL,
  `f_img` varchar(255) NOT NULL,
  `f_imgpath` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fruit`
--

INSERT INTO `fruit` (`f_id`, `f_name`, `f_cost`, `f_img`, `f_imgpath`, `deleted`) VALUES
(1, 'APPLES 1 DOZEN', '11', 'apple.png', 'uplode/apple.png', 1),
(2, 'BANNANAS 1DOZEN', '10.00', 'BANANA.jpg', 'uplode/BANANA.jpg', 1),
(3, 'PAPAYA -1KG', '6.12', 'a-papaya-cut-in-half.jpg', 'uplode/a-papaya-cut-in-half.jpg', 1),
(4, 'CHIKOO-1DZN', '4.34', 'chiku-500x500.jpg', 'uplode/chiku-500x500.jpg', 1),
(5, 'PINAPPLE-1PIC', '5.12', 'PINAPPLE.jpg', 'uplode/PINAPPLE.jpg', 1),
(6, 'ORANGES-1DZN', '7.98', 'ORANGE.jpg', 'uplode/ORANGE.jpg', 1),
(7, 'GUAVA-1PICE', '0.98', 'guava-1296x728-header.jpg', 'uplode/guava-1296x728-header.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `maincat`
--

CREATE TABLE `maincat` (
  `m_id` int(11) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `maincat`
--

INSERT INTO `maincat` (`m_id`, `m_name`, `deleted`) VALUES
(1, 'All products', 1),
(2, 'Fruits', 1),
(3, 'Vegitable', 1),
(4, 'Other', 1);

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `o_id` int(11) NOT NULL,
  `o_name` varchar(255) NOT NULL,
  `o_cost` varchar(255) NOT NULL,
  `o_img` varchar(255) NOT NULL,
  `o_imgpath` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`o_id`, `o_name`, `o_cost`, `o_img`, `o_imgpath`, `deleted`) VALUES
(1, 'Mashrooms', '9.50', 'kisspng-common-mushroom-stock-photography-edible-mushroom-fresh-white-mushrooms-5aabbd075851b0.8013645815212044873618.png', 'uplode/kisspng-common-mushroom-stock-photography-edible-mushroom-fresh-white-mushrooms-5aabbd075851b0.8013645815212044873618.png', 1),
(2, 'MINT-1PSC', '5.60', 'MINT.jpg', 'uplode/MINT.jpg', 1),
(3, 'ONION-1KG', '9.87', 'ONION.jpg', 'uplode/ONION.jpg', 1),
(4, 'CORIENDER-1PSC', '4.56', 'CORIENDER.jpg', 'uplode/CORIENDER.jpg', 1),
(5, 'GREEN PEA-1KG', '12.90', 'kisspng-snap-pea-green-pea-split-pea-bean-pea-5ce166150ed864.8607762115582756050608.png', 'uplode/kisspng-snap-pea-green-pea-split-pea-bean-pea-5ce166150ed864.8607762115582756050608.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(255) NOT NULL,
  `u_num` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_pass` varchar(255) NOT NULL,
  `u_gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_num`, `u_email`, `u_pass`, `u_gender`) VALUES
(1, 'prajakta sathwane', '9096289039', '13psathwane@gmail.com', 'Prajakta123@', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `veg`
--

CREATE TABLE `veg` (
  `v_id` int(11) NOT NULL,
  `v_name` varchar(255) NOT NULL,
  `v_cost` varchar(255) NOT NULL,
  `v_img` varchar(255) NOT NULL,
  `v_imgpath` varchar(255) NOT NULL,
  `deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `veg`
--

INSERT INTO `veg` (`v_id`, `v_name`, `v_cost`, `v_img`, `v_imgpath`, `deleted`) VALUES
(1, 'CABAGE', '6.0', 'cabage.jpg', 'uplode/cabage.jpg', 1),
(2, 'CAPSICUM', '6.45', 'kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 'uplode/kisspng-bell-pepper-cubanelle-stuffed-peppers-chili-pepper-black-pepper-5ab4b7336af8c6.3560813415217928194382.png', 1),
(3, 'AUBERGINI-500G', '3.50', 'kisspng-eggplant-leaf-vegetable-fruit-food-comer-é-poder-polenghi-5b6307dfcdc149.7211493715332167358428.png', 'uplode/kisspng-eggplant-leaf-vegetable-fruit-food-comer-é-poder-polenghi-5b6307dfcdc149.7211493715332167358428.png', 1),
(4, 'CAROOT-1PSC', '1.00', 'CAROOT.jpg', 'uplode/CAROOT.jpg', 1),
(5, 'POTATOS-1KG', '2.33', 'kisspng-potato-clipping-path-clip-art-potato-5a83ea5feb12d2.4912964815185946559629.png', 'uplode/kisspng-potato-clipping-path-clip-art-potato-5a83ea5feb12d2.4912964815185946559629.png', 1),
(6, 'CELERY-1KG', '5.57', 'kisspng-celery-celeriac-malatang-vegetable-oenanthe-javani-celery-5abb92f0ea7405.9146321215222422889603.png', 'uplode/kisspng-celery-celeriac-malatang-vegetable-oenanthe-javani-celery-5abb92f0ea7405.9146321215222422889603.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `allpro`
--
ALTER TABLE `allpro`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `fruit`
--
ALTER TABLE `fruit`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `maincat`
--
ALTER TABLE `maincat`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `veg`
--
ALTER TABLE `veg`
  ADD PRIMARY KEY (`v_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `allpro`
--
ALTER TABLE `allpro`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fruit`
--
ALTER TABLE `fruit`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `maincat`
--
ALTER TABLE `maincat`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `veg`
--
ALTER TABLE `veg`
  MODIFY `v_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
