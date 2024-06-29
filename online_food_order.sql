-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 12:50 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_food_order`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `phone`, `email`, `message`) VALUES
('Rakibul ', '01686142011', 'rakibulhodalabib@gmail.com', 'Biriani is so tasty.'),
('Labib', '01721074601', 'fuaddk2009@gamil.com', 'Biriani is so tasty.'),
('Anis', '01933060404', 'anis@gmail.com', 'Service is praiseworthy.'),
('Nabil', '01933060405', 'labib10849@gmail.com', 'Nice Service');

-- --------------------------------------------------------

--
-- Table structure for table `food_order`
--

CREATE TABLE `food_order` (
  `customer_name` varchar(255) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `food_order`
--

INSERT INTO `food_order` (`customer_name`, `food_name`, `phone_number`, `quantity`) VALUES
('Nabil', 'Laban', '01393354495', 1),
('Mahi', 'Lassi', '01393354497', 1),
('Rafi', 'Matha', '01721054601', 1),
('Anis', 'Roshogolla', '01912345211', 2),
('Shopon', 'Biriani', '01912345215', 2),
('Labib', 'Biriani', '01912345676', 1),
('Labib', 'Doi', '01933060405', 1),
('Anis', 'Khichuri', '01933060421', 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `manufacturing_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_name`, `category`, `manufacturing_date`) VALUES
('11 jater vorta', 'Breakfast', '2024-05-24'),
('Buter Dal', 'Breakfast', '2024-05-23'),
('Dim Pus', 'Breakfast', '2024-05-24'),
('Dim Vaji', 'Breakfast', '2024-05-23'),
('Doi', 'Dessert', '2024-05-22'),
('Gorur Kala Vuna', 'Lunch and Dinner', '2024-05-24'),
('Khashir Rejala', 'Lunch and Dinner', '2024-05-24'),
('Kichuri', 'Breakfast', '2024-05-24'),
('Laban', 'Drinks', '2024-05-24'),
('Lassi', 'Drinks', '2024-05-24'),
('Lemonade', 'Drinks', '2024-05-24'),
('Mango Juice', 'Drinks', '2024-05-23'),
('Murgir Roast', 'Lunch and Dinner', '2024-05-23'),
('Panta Vat', 'Breakfast', '2024-05-23'),
('Payes', 'Dessert', '2024-05-24'),
('Porota', 'Breakfast', '2024-05-24'),
('Rosogolla', 'Dessert', '2024-05-24'),
('Ruti', 'Breakfast', '2024-05-24'),
('Shorshe Ilish', 'Lunch and Dinner', '2024-05-24'),
('Sobji', 'Breakfast', '2024-05-23'),
('Sobji Kichuri', 'Breakfast', '2024-05-24'),
('Tehari', 'Lunch and Dinner', '2024-05-24'),
('White Rice', 'Lunch and Dinner', '2024-05-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`phone`);

--
-- Indexes for table `food_order`
--
ALTER TABLE `food_order`
  ADD PRIMARY KEY (`phone_number`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_name`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
