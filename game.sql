-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2020 at 09:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemain`
--

CREATE TABLE `pemain` (
  `Nama` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Email` varchar(100) CHARACTER SET latin1 NOT NULL,
  `Score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemain`
--

INSERT INTO `pemain` (`Nama`, `Email`, `Score`) VALUES
('', '', 0),
('Wiwin ', 'wiwinnurhidayah14@gmail.com', 100),
('jojo', 'wiwinnur10@gmail.com', 10),
('jojo', 'wiwinnur10@gmail.com', 10),
('jojo', 'wiwinnur10@gmail.com', 0),
('hihi', 'wiwinnurhidayah14@gmail.com', 20);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
