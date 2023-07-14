-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 14, 2021 at 01:39 PM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f&s bus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Admin_ID` varchar(20) NOT NULL,
  `Admin_name` varchar(255) NOT NULL,
  `Admin_email` varchar(255) NOT NULL,
  `Admin_password` varchar(20) NOT NULL,
  `Admin_gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Admin_ID`, `Admin_name`, `Admin_email`, `Admin_password`, `Admin_gender`) VALUES
(1, 'ad1', 'Diong', 'jb1202@gmail.com', 'jb1202', 'male'),
(2, 'ad2', 'Cindy', 'ck0403@gmail.com', 'ck0403', 'female'),
(3, 'ad3', 'Lee', 'kf0224@gmail.com', 'kf0224', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

DROP TABLE IF EXISTS `bus`;
CREATE TABLE IF NOT EXISTS `bus` (
  `Bus_ID` int NOT NULL AUTO_INCREMENT,
  `Bus_operator` varchar(50) NOT NULL,
  `Bus_plate_number` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `Seat_no` int NOT NULL,
  PRIMARY KEY (`Bus_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`Bus_ID`, `Bus_operator`, `Bus_plate_number`, `Seat_no`) VALUES
(1, 'LA Express', 'ABC 3344', 30),
(2, 'Starmart', 'ABC 1234', 30),
(3, 'KKKL Express', 'ABC 4567', 30);

-- --------------------------------------------------------

--
-- Table structure for table `bus_ticket`
--

DROP TABLE IF EXISTS `bus_ticket`;
CREATE TABLE IF NOT EXISTS `bus_ticket` (
  `Ticket_ID` int NOT NULL AUTO_INCREMENT,
  `Bus_ID` int NOT NULL,
  `Departure_point` varchar(255) NOT NULL,
  `Arrival_point` varchar(255) NOT NULL,
  `Departure_date` date NOT NULL,
  `Departure_time` time NOT NULL,
  `Arrival_time` time NOT NULL,
  `Duration` int NOT NULL,
  `Pricing` int NOT NULL,
  `Seat_available` int NOT NULL,
  PRIMARY KEY (`Ticket_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bus_ticket`
--

INSERT INTO `bus_ticket` (`Ticket_ID`, `Bus_ID`, `Departure_point`, `Arrival_point`, `Departure_date`, `Departure_time`, `Arrival_time`, `Duration`, `Pricing`, `Seat_available`) VALUES
(1, 1, 'Penang', 'Pahang', '2021-11-04', '10:00:00', '14:00:00', 4, 25, 28),
(3, 3, 'Johor', 'Kuala Lumpur', '2021-10-21', '16:24:00', '18:24:00', 2, 30, 29),
(5, 1, 'Penang', 'Melaka', '2021-11-11', '15:19:00', '09:19:00', 6, 12, 30),
(6, 1, 'Penang', 'Melaka', '2021-12-03', '18:18:00', '21:19:00', 3, 12, 30);

-- --------------------------------------------------------

--
-- Table structure for table `customer_profile`
--

DROP TABLE IF EXISTS `customer_profile`;
CREATE TABLE IF NOT EXISTS `customer_profile` (
  `Customer_ID` int NOT NULL AUTO_INCREMENT,
  `Username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `tel_no` varchar(50) NOT NULL,
  PRIMARY KEY (`Customer_ID`),
  UNIQUE KEY `Username` (`Username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `customer_profile`
--

INSERT INTO `customer_profile` (`Customer_ID`, `Username`, `password`, `first_name`, `last_name`, `email`, `tel_no`) VALUES
(1, 'LOLOLXD02', 'lolol021202', 'Diong', 'Jien Bing', 'diongdiong2014@gmail.com', '01165543940'),
(2, 'ck0403', 'ck0403', 'Cindy', 'Xin Yi', 'ck0403@gmail.com', '01132239898'),
(3, 'brlkflee', 'brlkf0224', 'Lee ', 'Khoon Fang', 'brlkflee@gmail.com', '01112378912');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `Feedback_ID` int NOT NULL AUTO_INCREMENT,
  `Customer_ID` int NOT NULL,
  `Feedback` varchar(255) NOT NULL,
  PRIMARY KEY (`Feedback_ID`),
  KEY `feedback_fk` (`Customer_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`Feedback_ID`, `Customer_ID`, `Feedback`) VALUES
(1, 1, 'Good service. Same as its name fast and safe. I reach my destination safely and punctually.');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_ticket`
--

DROP TABLE IF EXISTS `purchase_ticket`;
CREATE TABLE IF NOT EXISTS `purchase_ticket` (
  `Purchase_ID` int NOT NULL AUTO_INCREMENT,
  `Ticket_ID` int NOT NULL,
  `Customer_ID` int NOT NULL,
  `Bus_ID` int NOT NULL,
  `Seat_number` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  PRIMARY KEY (`Purchase_ID`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `purchase_ticket`
--

INSERT INTO `purchase_ticket` (`Purchase_ID`, `Ticket_ID`, `Customer_ID`, `Bus_ID`, `Seat_number`, `Date`) VALUES
(1, 1, 1, 1, 'A01', '2021-10-08'),
(2, 3, 4, 3, 'B01', '2021-10-09'),
(14, 2, 1, 2, 'A02', '2021-11-14'),
(13, 1, 1, 1, 'B03', '2021-11-14'),
(12, 1, 1, 1, 'B02', '2021-11-14'),
(15, 2, 1, 2, 'A03', '2021-11-14');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
