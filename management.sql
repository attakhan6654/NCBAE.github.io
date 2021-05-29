-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2020 at 01:12 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_address` varchar(30) NOT NULL,
  `admin_image` varchar(2) NOT NULL,
  `admin_name` varchar(25) NOT NULL,
  `admin_password` varchar(15) NOT NULL,
  `admin_phone` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_address`, `admin_image`, `admin_name`, `admin_password`, `admin_phone`) VALUES
(1, 'no#3', '', 'atta', 'khan', '03346006654');

-- --------------------------------------------------------

--
-- Table structure for table `attends`
--

CREATE TABLE `attends` (
  `attends_id` int(31) NOT NULL,
  `student_id` int(31) NOT NULL,
  `schedule_id` int(31) NOT NULL,
  `condition` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `attends`
--

INSERT INTO `attends` (`attends_id`, `student_id`, `schedule_id`, `condition`) VALUES
(1, 1, 1, 'Upsent'),
(2, 2, 1, 'Upsent'),
(3, 3, 1, 'Present'),
(4, 1, 2, 'Upsent'),
(5, 2, 2, 'Upsent'),
(6, 3, 2, 'Upsent'),
(7, 2, 10, 'Present'),
(8, 2, 8, 'Present'),
(9, 2, 7, 'Present'),
(10, 1, 0, 'Present'),
(11, 2, 11, 'Present'),
(12, 1, 12, 'Present'),
(13, 2, 13, 'Present'),
(14, 3, 14, 'Upsent'),
(15, 1, 15, 'Upsent'),
(16, 4, 15, 'Present'),
(17, 1, 16, 'Present'),
(18, 1, 16, 'Present'),
(19, 1, 16, 'Upsent'),
(20, 4, 16, 'Present'),
(21, 7, 16, 'Upsent'),
(22, 7, 17, 'Present'),
(23, 1, 17, 'Present'),
(24, 4, 17, 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `admin_id` int(11) NOT NULL,
  `class_id` int(30) NOT NULL,
  `class_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`admin_id`, `class_id`, `class_name`) VALUES
(1, 1, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `admin_id` int(11) NOT NULL,
  `roomm` varchar(30) NOT NULL,
  `room_id` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `schedule_id` int(31) NOT NULL,
  `class_id` int(31) NOT NULL,
  `subject_id` int(31) NOT NULL,
  `teacher_id` int(31) NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_time` time(1) NOT NULL,
  `sh_end_time` time NOT NULL,
  `admin_id` int(31) NOT NULL,
  `room_id` int(25) NOT NULL,
  `Semester_id` int(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`schedule_id`, `class_id`, `subject_id`, `teacher_id`, `schedule_date`, `schedule_time`, `sh_end_time`, `admin_id`, `room_id`, `Semester_id`) VALUES
(1, 9, 7, 11, '2020-01-29', '12:59:00.0', '00:00:00', 1, 8, 11),
(10, 9, 8, 12, '2020-02-21', '16:50:00.0', '00:00:00', 1, 8, 11),
(11, 9, 5, 12, '2020-02-22', '17:10:00.0', '00:00:00', 1, 0, 11),
(12, 10, 8, 12, '2020-02-24', '19:38:00.0', '00:00:00', 11, 8, 11),
(14, 11, 9, 11, '2020-02-25', '15:25:00.0', '00:00:00', 11, 20, 4),
(16, 10, 10, 13, '2020-02-26', '14:21:00.0', '00:00:00', 1, 21, 4),
(17, 10, 8, 13, '2020-02-26', '20:46:00.0', '00:00:00', 1, 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE `semester` (
  `semester` int(1) NOT NULL,
  `semester_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`semester`, `semester_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8);

-- --------------------------------------------------------

--
-- Table structure for table `stdattends`
--

CREATE TABLE `stdattends` (
  `attends_id` int(31) NOT NULL,
  `student_id` int(31) NOT NULL,
  `schedule_id` int(31) NOT NULL,
  `condition` varchar(31) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `stdattends`
--

INSERT INTO `stdattends` (`attends_id`, `student_id`, `schedule_id`, `condition`) VALUES
(1, 1, 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student` int(11) NOT NULL,
  `address` varchar(30) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `class_id` int(11) NOT NULL,
  `CNIC` varchar(15) NOT NULL,
  `image` varchar(11) NOT NULL,
  `no` varchar(11) NOT NULL,
  `Semester_id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `student_name` varchar(30) NOT NULL,
  `student_password` varchar(15) NOT NULL,
  `student_reg_no` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `admin_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`admin_id`, `subject_id`, `subject_name`) VALUES
(1, 1, 'php');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `admin_id` int(11) NOT NULL,
  `Eperience` varchar(5) NOT NULL,
  `image` varchar(11) NOT NULL,
  `Qualification` varchar(4) NOT NULL,
  `teacher_address` varchar(30) NOT NULL,
  `teacher_gmail` varchar(30) NOT NULL,
  `teacher_id` int(11) NOT NULL,
  `teacher_name` varchar(30) NOT NULL,
  `teacher_phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attends`
--
ALTER TABLE `attends`
  ADD PRIMARY KEY (`attends_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`schedule_id`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`semester_id`);

--
-- Indexes for table `stdattends`
--
ALTER TABLE `stdattends`
  ADD PRIMARY KEY (`attends_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `attends`
--
ALTER TABLE `attends`
  MODIFY `attends_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `schedule_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `semester_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `stdattends`
--
ALTER TABLE `stdattends`
  MODIFY `attends_id` int(31) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
