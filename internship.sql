-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 11:50 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internship`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Password` varchar(40) NOT NULL,
  `mob` text NOT NULL,
  `gender` varchar(5) NOT NULL,
  `Basics_of_Web_development_World` varchar(2) NOT NULL,
  `Introduction_to_HTML_and_CSS` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Name`, `Email`, `Password`, `mob`, `gender`, `Basics_of_Web_development_World`, `Introduction_to_HTML_and_CSS`) VALUES
(4, 'Anchal Nigam', 'anchalnigamm@gmail.com', '643b33d20fbe52d48538f4cd7b24f593', '9026224948', 'F', '1', '1'),
(5, 'sunita', 'sunita@gmail.com', '2380290cdae994b378ed783d7e563b67', '9026224948', 'F', '1', '1'),
(6, 'shyam', 'shyam@gmail.com', 'cffba1722dd649bd7a72a37e48358b0f', '9026224948', 'M', '1', '1'),
(7, 'Debjani', 'debjani@gmail.com', '55afb21cd8a852af644cffca40995792', '9026224948', 'F', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`id`, `name`, `details`) VALUES
(1, 'Basics of Web development World', 'In this workshop,You will get your feet wet so that you can quickly get into building web sites.You will learn about the basics of web,servers,domain name,hosting and many more.'),
(2, 'Introduction to HTML and CSS', 'In this workshop,you will learn about the building block of web world i.e.HTML & CSS.After finishing this workshop,you will make your first webpage.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
