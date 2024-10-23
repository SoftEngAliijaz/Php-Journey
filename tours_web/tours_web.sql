-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 25, 2022 at 07:31 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tours_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bookingID` mediumint(8) NOT NULL,
  `excursionID` mediumint(8) NOT NULL,
  `customerID` mediumint(8) NOT NULL,
  `excursion_date` datetime NOT NULL,
  `num_guests` mediumint(2) NOT NULL,
  `total_booking_cost` decimal(7,2) NOT NULL,
  `booking_notes` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingID`, `excursionID`, `customerID`, `excursion_date`, `num_guests`, `total_booking_cost`, `booking_notes`) VALUES
(1, 1, 1, '2022-10-20 00:00:00', 2, '140.00', NULL),
(2, 1, 4, '2022-12-26 00:00:00', 3, '210.00', NULL),
(3, 1, 4, '2022-12-28 00:00:00', 5, '350.00', 'Odio ut sunt assume');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` mediumint(8) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password_hash` char(255) NOT NULL,
  `customer_forename` varchar(255) NOT NULL,
  `customer_surname` varchar(255) NOT NULL,
  `customer_email` varchar(64) NOT NULL,
  `date_of_birth` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `username`, `password_hash`, `customer_forename`, `customer_surname`, `customer_email`, `date_of_birth`) VALUES
(1, 'fred1985', '$2y$10$qOrhpkdI0Mib.Hizs7.6A.hApiW2HfJIH/iut2Q87m/NbSJRcdbx6', 'Fred', 'Brown', 'fred@test.com', '1985-11-13 00:00:00'),
(3, 'wamewesi', '$2y$10$.HqI8/FcM2KXu9RGXvCWceh59xUZth1AjczZn/c/EIwB34E8IF70C', 'Harper', 'Pace', 'dytejyjur@mailinator.com', '1979-01-18 00:00:00'),
(4, 'jafimical12', '$2y$10$gj7QEIuT1Z.GrSk37IefXeVCiQrytTjvefVwW5hVqyujgSSLmpDf2', 'Burton', 'Huber', 'tour@test.com', '2003-10-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `excursions`
--

CREATE TABLE `excursions` (
  `excursionID` mediumint(8) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `excursion_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price_per_person` decimal(7,2) NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `excursions`
--

INSERT INTO `excursions` (`excursionID`, `image`, `excursion_name`, `description`, `price_per_person`, `location`) VALUES
(1, 'place (1).jfif', 'Amalfi Coast coach tour', 'Take in all the beauty of the Amalfi Coast on a day trip from Sorrento.Explore the villages of Positano, Amalfi, and Ravello during the tour.', '70.00', 'Sorrento'),
(2, 'place (2).jfif', 'Boat trip to Capri island', 'Full-day tour of Capri island from Sorrento. Admire views along the coast as you cruise to the island.  Visit the island towns of beautiful Capri', '100.00', 'Sorrento'),
(3, 'place (3).jfif', 'Bumburet Valley Tour', '3 days Bumburet Valley Tour with all facilities food, photography, transport', '120.00', 'Bumburet '),
(4, 'place (4).jfif', 'Hunza Valley Tour', 'Take in all the beauty of the Amalfi Coast on a day trip from Sorrento.Explore the villages of Positano, Amalfi, and Ravello during the tour.', '90.00', 'Hunza'),
(5, 'place (5).jfif', 'Swat Valley Tour', 'Full-day tour of Capri island from Sorrento. Admire views along the coast as you cruise to the island.  Visit the island towns of beautiful Capri', '140.00', 'Swat'),
(6, 'place (6).jfif', 'Chitral Kalash', '3 days Bumburet Valley Tour with all facilities food, photography, transport', '120.00', 'Chitral'),
(7, 'place (4).jfif', 'Fairy Meadows Tour', 'Take in all the beauty of the Amalfi Coast on a day trip from Sorrento.Explore the villages of Positano, Amalfi, and Ravello during the tour.', '85.00', 'Gilgit Baltistan'),
(8, 'place (2).jfif', 'Neelum Valley Tour', 'Full-day tour of Capri island from Sorrento. Admire views along the coast as you cruise to the island.  Visit the island towns of beautiful Capri', '135.00', 'Swat');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bookingID`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `excursions`
--
ALTER TABLE `excursions`
  ADD PRIMARY KEY (`excursionID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bookingID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `excursions`
--
ALTER TABLE `excursions`
  MODIFY `excursionID` mediumint(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
