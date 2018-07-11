-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 09:21 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsc_495`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `UserID` int(11) NOT NULL,
  `FirstName` varchar(120) NOT NULL,
  `LastName` varchar(120) DEFAULT NULL,
  `Username` varchar(120) DEFAULT NULL,
  `Password` varchar(120) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`UserID`, `FirstName`, `LastName`, `Username`, `Password`) VALUES
(0, 'testname', 'testlast', 'tlasting', 'aldskfjldskfjasd;lkf'),
(1, 'Chris', 'Hollen', 'CHollen', 'Test'),
(2, 'lkasdjfa;lj', 'a;lsdkfjas;lkjf', 'lkfjasd;lfkj', 'dlkfjaldskjf'),
(3, 'Christine', 'Hainly', 'CHainly', 'Testing123'),
(4, 'test', 'last', 'Tlast', 'testing');

-- --------------------------------------------------------

--
-- Table structure for table `workout_table`
--

CREATE TABLE `workout_table` (
  `WorkoutID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `workout_date` date DEFAULT NULL,
  `exercise_name` varchar(250) DEFAULT NULL,
  `sets` int(11) DEFAULT NULL,
  `weight` int(11) DEFAULT NULL,
  `reps` int(11) DEFAULT NULL,
  `notes` varchar(1000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `workout_table`
--
ALTER TABLE `workout_table`
  ADD PRIMARY KEY (`WorkoutID`),
  ADD KEY `UserID` (`UserID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `workout_table`
--
ALTER TABLE `workout_table`
  ADD CONSTRAINT `workout_table_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user_table` (`UserID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
