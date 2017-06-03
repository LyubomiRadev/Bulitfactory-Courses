-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2017 at 02:13 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `article_title` char(255) NOT NULL,
  `content` text NOT NULL,
  `author` varchar(64) NOT NULL,
  `published` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `article_title`, `content`, `author`, `published`) VALUES
(1, 'Updating', 'Hello from Lyubomir', 'Lyubomir Dimitrov Radev', '2017-05-12 10:27:46'),
(2, 'Article Two', 'pfoiaoifh aos d', 'Kaloian Metodiev', '2017-05-05 14:34:31'),
(3, 'Article Three', 'It works here', 'Ivan Ivanov', '2017-05-05 14:35:00'),
(4, 'Article Four', '', 'Todor Stoqnov Pehlivanov', '2017-05-05 14:35:12'),
(5, 'Article Five', 'asjfdaoshfiuabfijasbnd', 'Pavel Panov', '2017-05-05 14:35:24'),
(6, 'Inserted Title', 'Text', 'Lyubomir', '2017-05-16 12:11:06'),
(7, 'Testing', 'fasdasdas', 'Lyubomir', '2017-05-16 12:11:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
