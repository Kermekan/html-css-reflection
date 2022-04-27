-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2022 at 02:22 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netmatters`
--
CREATE DATABASE IF NOT EXISTS `netmatters` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `netmatters`;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `id` int(11) NOT NULL,
  `fullName` varchar(20) NOT NULL,
  `companyName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `telephone` int(14) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `contact_form`:
--

--
-- Dumping data for table `contact_form`
--

INSERT INTO `contact_form` (`id`, `fullName`, `companyName`, `email`, `telephone`, `subject`, `message`) VALUES
(1, 'Othello Deemi', 'Deemi Inc', 'deemi@gmail.com', 2147483647, 'Test Subject', 'This is a test'),
(2, 'Testing', '', 'test@test.com', 795485292, 'Testing', 'This is a test'),
(3, 'AAAa', '', 'aaaa@wawa.com', 0, '', 'aaaaa');

-- --------------------------------------------------------

--
-- Table structure for table `news_entries`
--

CREATE TABLE `news_entries` (
  `id` int(11) NOT NULL,
  `category` varchar(11) NOT NULL,
  `image_src` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `author_image` text NOT NULL,
  `date_published` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- RELATIONSHIPS FOR TABLE `news_entries`:
--

--
-- Dumping data for table `news_entries`
--

INSERT INTO `news_entries` (`id`, `category`, `image_src`, `title`, `paragraph`, `author`, `author_image`, `date_published`) VALUES
(1, 'web', 'assets/images/news-cards/card-1.jpg', 'Happy Christmas from the Netmatters team!', 'As another New Year looms ahead, it is the perfect time to take a moment and look back on the amazin...', 'Netmatters Ltd', 'assets/images/logo/logo-thumbnail.png', '2021-12-22'),
(2, 'web', 'assets/images/news-cards/card-2.jpg', 'Bethany Shakespeare Promoted to HR Manager', 'Netmatters are pleased to announce Bethany\'s promotion to HR Manager! Bethany has been fulfilling th...', 'Netmatters Ltd', 'assets/images/logo/logo-thumbnail.png', '2021-12-20'),
(3, 'web', 'assets/images/news-cards/card-3.jpg', 'SCS Graduates December 2021', 'As we close off the final month for what has been an exceptional year for our Scion Coalition Scheme...', 'Netmatters Ltd', 'assets/images/logo/logo-thumbnail.png', '2021-12-17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `contact_form` ADD FULLTEXT KEY `full_name` (`fullName`);

--
-- Indexes for table `news_entries`
--
ALTER TABLE `news_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news_entries`
--
ALTER TABLE `news_entries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
