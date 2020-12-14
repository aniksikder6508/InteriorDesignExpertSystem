-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2020 at 05:33 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `interiordesign_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `user_name`, `user_pass`) VALUES
(1, 'monim', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` int(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_email` varchar(255) NOT NULL,
  `client_phone` varchar(255) NOT NULL,
  `client_location` varchar(255) NOT NULL,
  `client_profile` varchar(255) NOT NULL,
  `client_pass` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `flag` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_email`, `client_phone`, `client_location`, `client_profile`, `client_pass`, `room_name`, `flag`) VALUES
(1, 'monim', 'sparklingmonim@gmail.com', '', 'dhaka bangladesh', 'person.JPG', '1234', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `designer`
--

CREATE TABLE `designer` (
  `designer_id` int(255) NOT NULL,
  `designer_name` varchar(255) NOT NULL,
  `designer_email` varchar(255) NOT NULL,
  `designer_phone` varchar(255) NOT NULL,
  `designer_location` varchar(255) NOT NULL,
  `designer_profile` varchar(255) NOT NULL,
  `designer_pass` varchar(255) NOT NULL,
  `designer_dob` varchar(255) NOT NULL,
  `room_name` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designer`
--

INSERT INTO `designer` (`designer_id`, `designer_name`, `designer_email`, `designer_phone`, `designer_location`, `designer_profile`, `designer_pass`, `designer_dob`, `room_name`, `salary`) VALUES
(1, 'monim', 'monim@gmail.com', '019125485', 'tangail', 'fsd.hjsdhf', '1234', 'sdf', 'sdf', '1000'),
(2, 'monim', 'sparklingmonim@gmail.com', '01723030645', 'khilkhet,panir pamp, kalihati,tangail', 'person.JPG ', '1234', '2020-05-02', 'dining', ''),
(3, 'monim', 'sparklingmonim@gmail.com', '01723030645', 'khilkhet,panir pamp, kalihati,tangail', 'person.JPG ', '1234', '2020-05-15', 'living', ''),
(4, 'monim', 'sparklingmonim@gmail.com', '01723030645', 'khilkhet,panir pamp, kalihati,tangail', 'IMG_20180917_075839.jpg ', '1234', '2020-05-02', 'office', '');

-- --------------------------------------------------------

--
-- Table structure for table `dining_room`
--

CREATE TABLE `dining_room` (
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dining_room`
--

INSERT INTO `dining_room` (`image`) VALUES
('person.JPG'),
('person.JPG'),
('IMG_20180917_075240.jpg'),
('20190129_174208.jpg'),
('18446536_309779719436089_5512349408863053673_n.jpg'),
('20190129_203759.jpg'),
('20190129_203759.jpg'),
('20190129_131503.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `drowing`
--

CREATE TABLE `drowing` (
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `living`
--

CREATE TABLE `living` (
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`image`) VALUES
('IMG_20180927_234914.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `designer`
--
ALTER TABLE `designer`
  ADD PRIMARY KEY (`designer_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
