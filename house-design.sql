-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 01, 2023 at 08:52 AM
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
-- Database: `house-design`
--

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `area` int(3) NOT NULL,
  `s_length` int(5) NOT NULL,
  `s_width` int(5) NOT NULL,
  `wall_dimension` int(5) NOT NULL,
  `beds` int(3) NOT NULL,
  `baths` int(3) NOT NULL,
  `garages` int(3) NOT NULL,
  `kitchens` int(3) NOT NULL,
  `floors` int(3) NOT NULL,
  `description` varchar(255) NOT NULL,
  `map_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maps`
--

INSERT INTO `maps` (`id`, `name`, `area`, `s_length`, `s_width`, `wall_dimension`, `beds`, `baths`, `garages`, `kitchens`, `floors`, `description`, `map_img`) VALUES
(1, '9Marla Plot', 9, 25, 50, 1250, 2, 2, 1, 1, 1, 'The following is a description of a 50x50 house plan with a lounge and dining area, a front lawn with two flower beds, a single kitchen, two bathrooms, and a garage.', 'oVPH3Jz6db_1685604439.jpg'),
(2, '200 marla plot', 100, 53455, 0, 123478, 1, 1, 1, 1, 1, 'g56', 'Q1OxM!CO3l_1686116428.jpg'),
(41, '23 mrla plot', 23, 25, 50, 1250, 5, 5, 1, 2, 1, 'hello', 'i2Z@khgca2_1688885853.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `material_rates`
--

CREATE TABLE `material_rates` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `unit` varchar(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `material_rates`
--

INSERT INTO `material_rates` (`id`, `image`, `name`, `price`, `unit`, `date`) VALUES
(1, 'vH81n7vS3v_1689193090.jpg', 'Cement- Askari', '1135.00', 'Bag', '2023-07-12 20:49:53'),
(2, 'ZHubAOffDd_1689193126.jpg', 'Bricks', '13.50', 'Per Brick', '2023-07-12 20:49:58'),
(3, 'RHav6E$6Sq_1689193382.jpg', 'Crush', '95.00', 'Cubic ft', '2023-07-12 20:50:02'),
(4, 'kpGYn34C1y_1689193437.jpg', 'Sand', '110.00', 'Cubic ft', '2023-07-12 20:50:09'),
(5, 'n!uS$uoBYK_1689212658.jpg', 'Steel Bar-60', '272.00', 'Kg', '2023-07-13 01:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `requestform`
--

CREATE TABLE `requestform` (
  `s.no` int(10) NOT NULL,
  `plane_id` int(50) NOT NULL,
  `phone` varchar(253) NOT NULL,
  `email` varchar(253) NOT NULL,
  `message` varchar(253) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requestform`
--

INSERT INTO `requestform` (`s.no`, `plane_id`, `phone`, `email`, `message`, `date`) VALUES
(1, 27, '03109762055', 'khobaiblaiq@gmail.com', 'aaa', '2023-05-27 13:41:40');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `material_rates`
--
ALTER TABLE `material_rates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requestform`
--
ALTER TABLE `requestform`
  ADD PRIMARY KEY (`s.no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `material_rates`
--
ALTER TABLE `material_rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `requestform`
--
ALTER TABLE `requestform`
  MODIFY `s.no` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
