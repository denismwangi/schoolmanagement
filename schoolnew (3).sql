-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2021 at 11:14 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolnew`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `sid` int(10) NOT NULL,
  `date` date NOT NULL,
  `aid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`sid`, `date`, `aid`) VALUES
(2, '2020-05-25', 3),
(1, '2020-05-30', 4),
(2, '2020-05-02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `attendancereport`
--

CREATE TABLE `attendancereport` (
  `aid` int(20) NOT NULL,
  `sid` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendancereport`
--

INSERT INTO `attendancereport` (`aid`, `sid`, `status`) VALUES
(3, 'ST1000010001', 'Absent'),
(3, 'ST1000010002', 'Present'),
(4, 'ST1000010001', 'Present'),
(4, 'ST1000010002', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `classroom`
--

CREATE TABLE `classroom` (
  `hno` varchar(50) NOT NULL,
  `title` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `capacity` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classroom`
--

INSERT INTO `classroom` (`hno`, `title`, `location`, `capacity`) VALUES
('4-B', 'Nilwala', 'Block-D', 50);

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `classroom` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `stime` time NOT NULL,
  `etime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`id`, `subject`, `teacher`, `classroom`, `date`, `stime`, `etime`) VALUES
(1, 'SCM4251', 'TC1000020000', '4-B', '2020-05-26', '11:45:00', '12:45:00');

-- --------------------------------------------------------

--
-- Table structure for table `examresult`
--

CREATE TABLE `examresult` (
  `exam` int(11) NOT NULL,
  `student` varchar(50) NOT NULL,
  `marks` int(10) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examresult`
--

INSERT INTO `examresult` (`exam`, `student`, `marks`, `grade`) VALUES
(1, 'ST1000010001', 55, 'C+'),
(1, 'ST1000010002', 77, 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `fees`
--

CREATE TABLE `fees` (
  `feeid` int(123) NOT NULL,
  `sid` varchar(123) NOT NULL,
  `sub_id` varchar(123) NOT NULL,
  `total_billed` varchar(123) NOT NULL,
  `total_paid` varchar(122) NOT NULL,
  `total_balance` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fees`
--

INSERT INTO `fees` (`feeid`, `sid`, `sub_id`, `total_billed`, `total_paid`, `total_balance`) VALUES
(2, 'CT12/40', 'SCMA34', '15350', '0', '15350');

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `fid` int(123) NOT NULL,
  `fname` varchar(122) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `gender` varchar(122) NOT NULL,
  `address` varchar(122) NOT NULL,
  `contact` varchar(122) NOT NULL,
  `email` varchar(122) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`fid`, `fname`, `lname`, `nic`, `gender`, `address`, `contact`, `email`) VALUES
(1, 'Mark', 'Bill', '87877888', 'Female', '853566', '56757668', 'finance@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `notice` varchar(1500) NOT NULL,
  `odience` varchar(100) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `notice`, `odience`, `date`) VALUES
(2, 'Meeting', 'Parent', '2020-05-28 02:53:02'),
(3, 'aaasas', 'All', '2020-05-28 02:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `parent`
--

CREATE TABLE `parent` (
  `pid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `job` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `nic` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `parent`
--

INSERT INTO `parent` (`pid`, `fname`, `lname`, `contact`, `job`, `address`, `gender`, `nic`, `email`) VALUES
(1, 'Kamal ', 'Shantha', '0785566022', 'Engineer', 'Colombo Road\r\nPilimathalawa.', 'Male', '7855485552V', 'par@par.par');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `id` int(11) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `teacher` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `stime` time NOT NULL,
  `class` varchar(50) NOT NULL,
  `etime` time NOT NULL,
  `link` varchar(300) NOT NULL,
  `pass` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`id`, `subject`, `teacher`, `day`, `stime`, `class`, `etime`, `link`, `pass`) VALUES
(1, 'SCM4251', 'TC1000020000', 'Wendsday', '04:15:00', '4-B', '04:15:00', '', ''),
(2, 'SCM4251', 'TC1000020000', 'Thursday', '05:30:00', '4-B', '07:45:00', '', ''),
(3, '6477', 'TC1000020000', 'Tuesday', '11:30:00', '4-B', '11:30:00', 'http://localhost/phpmyadmin/index.php?route=/table/structure&&server=1&db=schoolnew&table=schedule', '2345678'),
(4, '6477', 'TC1000020000', 'Tuesday', '11:30:00', '4-B', '11:30:00', 'http://localhost/phpmyadmin/index.php?route=/table/structure&&server=1&db=schoolnew&table=schedule', '2345678'),
(5, 'SCM4251', 'TC1000020000', 'Tuesday', '11:30:00', '4-B', '11:30:00', 'http://localhost/phpmyadmin/index.php?route=/table/structure&&server=1&db=schoolnew&table=schedule', '2345678');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `sid` varchar(25) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `address` varchar(250) NOT NULL,
  `parent` int(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `classroom` varchar(175) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`sid`, `fname`, `lname`, `bday`, `address`, `parent`, `gender`, `classroom`, `email`) VALUES
('CT12/40', 'Mercy', 'Nkathe', '2021-10-21', '680', 1, 'Female', 'SCM4251', 'mercy@students.max');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `sid` varchar(50) NOT NULL,
  `title` varchar(200) NOT NULL,
  `class` varchar(150) NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`sid`, `title`, `class`, `description`) VALUES
('6477', 'Driving', 'B', '18450'),
('988878', 'Computer packages', '', '4500'),
('SCM4251', 'Driving ', 'C', '14100'),
('SCMA34', 'Driving', 'A', '15350');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `tid` varchar(50) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `skill` varchar(500) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`tid`, `fname`, `lname`, `address`, `contact`, `bday`, `skill`, `gender`, `email`) VALUES
('TC1000020000', 'Mercy', 'Sigu', 'Nittambuwa', '07208978756', '1990-06-19', 'computer package', 'Male', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longtext NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `name`, `image`, `description`) VALUES
(15, 'analytics.PNG', '', 'test'),
(16, 'net.PNG', '', 'test 2'),
(17, 'net.PNG', '', 'test 2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `role` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`role`, `email`, `password`) VALUES
('Teacher', 'admin@admin.com', 'admin'),
('Finance', 'finance@admin.com', 'admin'),
('Student', 'joseph@students.max', 'CT099/44/021'),
('Parent', 'par@par.par', 'par'),
('Student', 'stu@stu.stu', 'stu');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `name`, `location`, `description`) VALUES
(23, 'video.mkv', 'videos/video.mkv', 'gtyt'),
(24, 'video (1).mkv', 'videos/video (1).mkv', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `attendancereport`
--
ALTER TABLE `attendancereport`
  ADD PRIMARY KEY (`aid`,`sid`);

--
-- Indexes for table `classroom`
--
ALTER TABLE `classroom`
  ADD PRIMARY KEY (`hno`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examresult`
--
ALTER TABLE `examresult`
  ADD PRIMARY KEY (`exam`,`student`);

--
-- Indexes for table `fees`
--
ALTER TABLE `fees`
  ADD PRIMARY KEY (`feeid`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`tid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exam`
--
ALTER TABLE `exam`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `fees`
--
ALTER TABLE `fees`
  MODIFY `feeid` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `finance`
--
ALTER TABLE `finance`
  MODIFY `fid` int(123) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `parent`
--
ALTER TABLE `parent`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `schedule`
--
ALTER TABLE `schedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
