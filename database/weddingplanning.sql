-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 08:41 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `weddingplanning`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `user_name` varchar(250) NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `contact_no` int(11) NOT NULL,
  `cus_pwd` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `email`, `user_name`, `first_name`, `last_name`, `address`, `contact_no`, `cus_pwd`) VALUES
(1, 'blcchanaka@gmail.com', 'blcp', 'Chanaka', 'Wickramasinghe', '97B Rathmalana', 111111, '$2y$10$dalFRS/GO3wFMA.RjA7fuu4xbcqwpUEMx.htwQ96b.0Hd0m4pc.bu'),
(2, 'abc@gmail.com', 'John', 'John', 'Marcus', '76A', 112456878, '$2y$10$NuCdvEucnFZR54jfJ7SaY.GgDZfkYX9.OWtCh1BO6P03h9neO8zfW'),
(3, 'admin@weddingplanner.lk', 'admin', 'Chanaka', 'Wickramasinghe', '97B Rathmalana', 765555651, '$2y$10$IZJlUDKj86KUast3LRKVO.QWQuuGF30O1VRLPV93LPFPUIgmvbCUy'),
(4, 'nishith@gmail.com', 'nishith', 'Nishith', 'Pinnawala', '97B Rathmalana123', 77777777, '$2y$10$Lr1LrzSPSgBVsjm.qv1DMOSAad/0tnUa2eDBVwTuFuSFErPiOmnAi'),
(5, 'chanaka@gmail.com', 'chanaka', 'Chanaka', 'Wickramasinghe', '97B Rathmalana', 4555555, '$2y$10$njKXPCs22tyMokJiHxUVXe7X8JtafTVMv4qIMq2aMiHKHYNSLqMGy'),
(6, 'shehani@gmail.com', 'shehani', 'Shehani', 'Fernando', '97B Rathmalana', 545455454, '$2y$10$iVDQDdNcgppJqpwevNYxHuTD4.798NdARyMy3KyPa42nW7uaUIMN2'),
(7, 'osanda@gmail.com', 'osanda123', 'Osanda', 'Gamage', '97B Rathmalana', 64644646, '$2y$10$KWxFJRIvtyKLXYZU5iBJruxH0K0SwBUFGTIgMasJUBk1cOqT0PCia'),
(8, 'induwara@gmail.com', 'induwara', 'Induwara', 'Gurusinghe', '97B Rathmalana', 454545445, '$2y$10$gq8MjD6X.UkvW6TIEaJoTe4lA89jKqiBQQWOLKCz1I5gJjJOajg6e');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(150) DEFAULT NULL,
  `product_type` varchar(150) DEFAULT NULL,
  `inner_type` varchar(150) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `img_location` varchar(500) DEFAULT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_type`, `inner_type`, `quantity`, `price`, `img_location`, `description`) VALUES
(1, 'LoveGod', 'dressing', 'bride_d', 5, 1200, '5bb3a696627ff2.35427062.jpg', 'Lovegod is a classy lace mermaid gown featuring a scalloped V-neckline. The lace-covered bodice gently scatters down the dress creating an organic and romantic feel. The delicate back features the classic covered button detail that goes straight down the spine. The enchanting hem and train of the gown showcase a gorgeous scalloped detail. Tying it all together is a lovely sheer back with lace appliques. '),
(2, 'Cleopatra', 'dressing', 'bride_d', 5, 1000, '5ba798e00eca89.87560578.jpg', ''),
(3, 'Empress', 'dressing', 'bride_d', 5, 1000, '5ba79adf882776.69740066.jpg', ''),
(4, 'Lexus', 'dressing', 'groom_d', 5, 1000, '5ba7a7aecfeb21.90820866.jpg', ''),
(5, 'Emperor', 'dressing', 'groom_d', 5, 1000, '5ba7a5c096e067.39218362.jpg', ''),
(6, 'Guardiyan', 'dressing', 'groom_d', 5, 1000, '5ba7a5da959d17.21751103.jpg', ''),
(7, 'Twisted Vine', 'jewellery', 'bride_r', 5, 200, '5ba7aad4ef92f2.60220218.jpg', ''),
(8, 'Sienna', 'jewellery', 'bride_r', 5, 300, '5ba7aaf4e53eb7.39652034.jpg', ''),
(9, 'Celtic Eternity Knot', 'jewellery', 'groom_r', 5, 400, '5ba7ab261693e9.61988891.jpg', ''),
(10, 'Borealis Diamond', 'jewellery', 'groom_r', 5, 500, '5ba7ab468e17e1.01288538.jpg', ''),
(11, 'Aquamarine Twist Pendant', 'jewellery', 'necklace', 5, 600, '5ba7ab6a2f0ce4.05332802.jpg', ''),
(12, 'Sapphire Twist Pendant', 'jewellery', 'necklace', 5, 700, '5ba7ab86b9ca65.04079678.jpg', ''),
(13, 'Round Diamond Stud Earrings', 'jewellery', 'earring', 5, 250, '5ba7abd24fa9a8.51458140.png', ''),
(14, 'Amethyst Stud Earrings', 'jewellery', 'earring', 5, 300, '5ba7abeaa691d5.29851576.png', ''),
(15, 'Sapphire Bezel Bracelet', 'jewellery', 'bracelet', 5, 350, '5ba7ac131c08d9.57796856.jpg', ''),
(16, 'Diamond Bezel Bracelet', 'jewellery', 'bracelet', 5, 500, '5ba7ac423c5a21.96190478.jpg', ''),
(17, 'Dream Photography', 'photography', 'Null', 0, 400, '5ba7b12d44a352.43816185.png', ''),
(18, 'Vintage Photography', 'photography', 'Null', 0, 450, '5ba7b147a483c0.14824620.png', ''),
(19, 'Arka Photo', 'photography', 'Null', 0, 300, '5ba7b15aa20cb5.39754697.png', ''),
(20, 'Kristy Harrison', 'photography', 'Null', 0, 450, '5ba7b171a27053.27623901.png', ''),
(21, 'Hilton', 'venue', 'Null', 0, 1000, '5ba7b25d410cc2.81890547.png', ''),
(22, 'Galadari', 'venue', 'Null', 0, 1200, '5ba7b26e612036.23828120.png', ''),
(23, 'Cinnamond Grand', 'venue', 'Null', 0, 1000, '5ba7b281c7a4c2.54740648.png', ''),
(24, 'Mt. Lavinia Hotel', 'venue', 'Null', 0, 1000, '5ba7b2977ee3a0.87325885.png', ''),
(25, 'Mercedes-Benz C-Class', 'weddingcar', 'Null', 5, 150, '5ba7b3b161d267.61456520.png', ''),
(26, 'Ford Mustang GT Convertible', 'weddingcar', 'Null', 1, 250, '5ba7b3c64b2f81.05099970.png', ''),
(27, 'Jaguar F-Type', 'weddingcar', 'Null', 1, 250, '5ba7b3dc010bf2.98899167.png', ''),
(28, 'BMW 4 Series Convertible', 'weddingcar', 'Null', 2, 300, '5ba7b3ee694ee9.20640162.png', ''),
(29, 'hello', 'dressing', 'bride_d', 5, 1000, '5ba9eb06cc9e90.79068413.jpg', ''),
(30, 'Lexus', 'jewellery', 'groom_d', 5, 55555, '5ba9f582d81fe6.68876024.jpg', ''),
(31, 'test', 'Wedding Dress', 'bride_d', 5, 1111, '5bafa3ce120ce2.26921568.jpg', ''),
(32, 'Platinum', '', '', 1, 1500, '', ''),
(33, 'Gold', '', '', 1, 1300, '', ''),
(34, 'Silver', '', '', 1, 1000, '', ''),
(35, 'test', 'Jewellery', 'bride_r', 3, 100, '5bb5a2feccd1f6.54994865.jpg', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
