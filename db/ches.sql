-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2016 at 11:42 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ches`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `shortdesc` varchar(300) NOT NULL,
  `longdesc` varchar(1000) NOT NULL,
  `blogdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `uname` varchar(30) NOT NULL,
  `blogimg` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `shortdesc`, `longdesc`, `blogdate`, `uname`, `blogimg`, `name`) VALUES
(1, 'sadasd', 'aaa', 'aaa', '2016-03-26 14:24:45', 'bhu', 'images/6.png', 'Bhuvan Shah'),
(2, 'sadasd', 'aaa', 'aaa', '2016-03-26 14:25:09', 'bhu', 'images/6.png', 'Bhuvan Shah'),
(3, 'Yash1', 'Always1', 'Will Always Be 1', '2016-03-26 14:26:06', 'yash11138', 'images/5.png', 'Yash Rajeshkumar Parikh'),
(4, 'asda', 'asdas', 'asdasd', '2016-03-26 16:03:24', 'yash11138', 'images/grabbing.png', 'Yash Rajeshkumar Parikh'),
(5, 'WOW', 'mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);', 'mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);mysqli_close($conn);', '2016-03-26 16:04:31', 'bhu', 'images/index-3_img01.jpg', 'Bhuvan Shah');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `eventid` int(11) NOT NULL,
  `eventdate` date NOT NULL,
  `venue` varchar(100) NOT NULL,
  `eventname` varchar(100) NOT NULL,
  `prize` varchar(50) NOT NULL,
  `eventimg` varchar(100) NOT NULL,
  `eventdesc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventid`, `eventdate`, `venue`, `eventname`, `prize`, `eventimg`, `eventdesc`) VALUES
(1, '2016-03-11', 'skada', 'Yash1', '21700 $', 'images/ip.PNG', 'dsafsdanf. ndsinfjs sjnf sd\r\nnmfksd f bns df\r\ns dfknsi'),
(3, '2016-03-31', 'dsad', 'New 1', '17000 $', 'images/Home Ethernet settings.PNG', 'fsdfsda\r\nfsd\r\ngdf\r\nsg\r\ndfg'),
(5, '2016-08-17', 'asda', 'asdasd', 'asd1as5d1', 'images/case.jpg', 'dsasad\r\nfsdafsdafsdaf\r\nsfasdf\r\n\r\nsadfsad'),
(6, '2016-03-03', 'aaa', 'sadas', 'aaa', 'images/grabbing.png', '1416416113211');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `uname` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `proj` varchar(100) NOT NULL,
  `interests` varchar(100) NOT NULL,
  `contact` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `design` varchar(50) NOT NULL,
  `imgpath` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`uname`, `password`, `name`, `proj`, `interests`, `contact`, `email`, `design`, `imgpath`) VALUES
('bhu', 'abf89d6fda9dab3ababf822610c6a9e8a6038179', 'Bhuvan Shah', 'asd', 'asd', 2147483647, 'yash111381@gmail.com', 'Nothing', 'images/6.png'),
('pra', 'f3e41b35b5347dcb333523bdc90e96aeef96d538', 'Pranali Dndekar', 'asd', 'asd', 64642, 'yash999888777@gmail.com', 'Noth', 'images/sass.PNG'),
('yash11138', '54fe0aca831aad2ac7b50e3a1743a3771af3d234', 'Yash Rajeshkumar Parikh', 'Data Security and Mining', 'Data Science, Android', 2147483647, 'yash999888777@gmail.com', 'CEO', 'images/Capture.JPEG.PNG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`eventid`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`uname`),
  ADD UNIQUE KEY `pass` (`password`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `eventid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
