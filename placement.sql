-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2024 at 11:02 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_details`
--

CREATE TABLE `apply_details` (
  `studentRoll` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `state` varchar(50) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `jobType` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `apply_details`
--

INSERT INTO `apply_details` (`studentRoll`, `firstName`, `lastName`, `email`, `phoneNo`, `gender`, `address`, `state`, `jobTitle`, `companyName`, `jobType`, `location`) VALUES
(1, 'Archima', 'Mandal', 'a@gmail.com', 2147483647, 'Female', 'Kolkata', 'West Bengal', 'Web Developer', 'Cognizant', 'Experienced', 'Kolkata'),
(4, 'Priyanka', 'Karmakar', 'p@gmail.com', 2147483647, 'Female', 'Kolkata', 'West Bengal', 'Software Engineer', 'TCS', 'Fresher/Experienced', 'New Delhi'),
(6, 'Srijani', 'Ghosh', 'srijani@gmail.com', 2147483647, 'Female', 'Chetla, Kolkata', 'West Bengal', 'Fullstack Developer', 'IBM', 'Intermediate', 'Kolkata'),
(7, 'Ritama ', 'Roy', 'ritama@gmail.com', 2147483647, 'Female', 'Malda', 'West Bengal', 'Web Designer', 'Capgemini', 'Intermediate', 'New Delhi');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firstName`, `lastName`, `email`, `description`) VALUES
(1, 'Srijani', 'Karmakar', 'srijani@gmail.com', 'Very Helpful!');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `jobID` int(11) NOT NULL,
  `jobTitle` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `jobType` varchar(50) NOT NULL,
  `applicationDeadline` int(10) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `jobDescription` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jobID`, `jobTitle`, `companyName`, `jobType`, `applicationDeadline`, `skills`, `city`, `jobDescription`) VALUES
(1, 'Software Developer', 'Infosys', 'Fresher', 2024, 'Html, JS, Ajax, .Net', 'Hyderabad', 'Extremely good communication skills. Able to work in US Shifts. Ability to multi-tasking.'),
(2, 'Fullstack Developer', 'IBM', 'Intermediate', 2024, 'Python, Angular, SQL, DOT NET Core, MySQL, MongoDB', 'Kolkata', 'Experience with Microservice and Event-Driven architecture is beneficial. Good communication skills.'),
(3, 'Web Developer', 'Cognizant', 'Experienced', 2024, 'HTML, CSS, Bootstrap5 and JavaScript', 'Kolkata', 'Directing Website updates. Editing, writing, or designing Website content, and directing team member'),
(4, 'Software Engineer', 'TCS', 'Fresher/Experienced', 2024, 'Node.js, React, MySQL, Java, Python, C#', 'New Delhi', 'As a Software Engineer, you are responsible for design, developing, & maintaining high qualification'),
(5, 'Web Designer', 'Capgemini', 'Intermediate', 2025, 'UX Design, HTML/CSS Coding, Web Animation', 'Ahmedabad, New Delhi', 'Create website layouts, graphics, visuals. Focus on providing a positive user experience');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `studentRoll` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `phoneNo` int(10) NOT NULL,
  `address` varchar(70) NOT NULL,
  `state` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `pgMarks` int(10) NOT NULL,
  `gMarks` int(10) NOT NULL,
  `hsMarks` int(10) NOT NULL,
  `sMarks` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`studentRoll`, `firstName`, `lastName`, `dob`, `email`, `phoneNo`, `address`, `state`, `gender`, `pgMarks`, `gMarks`, `hsMarks`, `sMarks`) VALUES
(1, 'Archima', 'Mandal', '2002-04-29', 'a@gmail.com', 2147483647, 'Kolkata', 'West Bengal', 'Female', 9, 8, 81, 97),
(2, 'Sayantika', 'Sen', '2013-12-31', 's@gmail.com', 2147483647, 'Haripal', 'West Bengal', 'Female', 8, 6, 34, 66),
(3, 'Sangita', 'Bera', '2024-02-29', 'sangita@gmail.com', 2147483647, 'Medinipur', 'West Bengal', 'Female', 5, 8, 96, 55),
(4, 'Priyanka', 'Karmakar', '2002-05-06', 'p@gmail.com', 2147483647, 'Garia, Kolkata', 'West Bengal', 'Female', 7, 8, 85, 74),
(5, 'Kankana', 'Bose', '2002-10-05', 'k@gmail.com', 2147483647, 'Garia, Kolkata', 'West Bengal', 'Female', 7, 9, 90, 88),
(6, 'Srijani', 'Ghosh', '2001-11-08', 'srijani@gmail.com', 2147483647, 'Chetla, Kolkata', 'West Bengal', 'Female', 5, 7, 88, 99),
(7, 'Ritama ', 'Roy', '2003-05-09', 'ritama@gmail.com', 2147483647, 'Malda', 'West Bengal', 'Female', 7, 9, 99, 92);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `phone_no` int(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `usertype` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `phone_no`, `email`, `usertype`, `password`) VALUES
(1, 'admin', 1234567890, 'admin@gmail.com', 'admin', '1234'),
(2, 'student', 1023456789, 'student@gmail.com', 'student', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_details`
--
ALTER TABLE `apply_details`
  ADD PRIMARY KEY (`studentRoll`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`jobID`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`studentRoll`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_details`
--
ALTER TABLE `apply_details`
  MODIFY `studentRoll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `jobID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `studentRoll` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
