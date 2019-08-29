-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2019 at 06:48 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cateID` int(6) DEFAULT NULL,
  `cateName` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cateID`, `cateName`) VALUES
(1, 'Clothings'),
(2, 'Shoes');

-- --------------------------------------------------------

--
-- Table structure for table `gender`
--

CREATE TABLE `gender` (
  `genderID` int(6) DEFAULT NULL,
  `genderName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gender`
--

INSERT INTO `gender` (`genderID`, `genderName`) VALUES
(1, 'Men'),
(2, 'Women');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(6) DEFAULT NULL,
  `productName` varchar(100) DEFAULT NULL,
  `productPrice` int(50) DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `des` varchar(200) DEFAULT NULL,
  `cateID` int(6) DEFAULT NULL,
  `genderID` int(6) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `productName`, `productPrice`, `image`, `des`, `cateID`, `genderID`) VALUES
(2, 'T-Shrit', 48, 'image/TShirtWomen.jpg', 'Good cooling properties, sweat absorbent should be used a lot in the hot season, bringing a very comfortable, pleasant and cool feeling, soothing many summer heat.', 1, 2),
(4, 'T-Shrit Men', 60, 'image/TShirtMen2.jpg', 'Ancient t-shirt exclusively designed by the brand. Plain T-shirt, collar and hemming sleeves, use the button on the chest. Cotton material features coolness, good sweat absorbency, large elasticity, b', 1, 1),
(5, 'T-Shrit Woman', 80, 'image/TShirtWomen2.jpg', 'Exclusive designer t-shirt by the brand. Round neck, slender hands, smooth shape, prominent brown contour neckline, front face with textures extremely personality. Designs suitable for streetwear.', 1, 2),
(6, 'Shoes Women', 90, 'image/ShoesWomen.jpg', 'PU leather is also known as synthetic resin, soft plastic leather or plastic plastic ... they are simili covered with a layer of Polyurethane resin (PU). . Along with soft fabric makes users feel soft', 2, 2),
(3, 'Shoes Women', 40, 'image/ShoesWomen2.jpg', 'PU leather is also known as synthetic resin, soft plastic leather or plastic plastic ... they are simili covered with a layer of Polyurethane resin (PU). Due to the properties of PU plastic, PU leathe', 2, 2),
(7, 'Shoes Men', 40, 'image/ShoesMen2.jpg', 'The shoe body is made of Microfiber leather and fabric material Fabric lining dedicated to help cool the legs Shoe soles are made from natural natural rubber', 2, 1),
(1, 'T-Shrit', 100, 'image/TShirtMen.jpg', 'Good', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `pass` varchar(30) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `pass`, `email`) VALUES
(2147483647, 'admin2', '123', 'trungnc2598@gmail.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
