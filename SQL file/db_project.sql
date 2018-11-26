-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2018 at 10:16 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `post_table`
--

CREATE TABLE `post_table` (
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_table`
--

INSERT INTO `post_table` (`postid`, `userid`, `title`, `content`, `category`) VALUES
(1, 1, 'à¦‰à¦¤à§à¦¤à¦°à¦¾à¦§à¦¿à¦•à¦¾à¦°à§‡à¦° à¦ªà¦Ÿà¦­à§‚à¦®à¦¿', '<p>à¦à¦–à¦¨à¦•à¦¾à¦° à¦ªà§à¦°à¦¤à¦¿à¦Ÿà¦¿ à¦—à§‡à¦® à¦†à¦§à§à¦¨à¦¿à¦• à¦šà¦¿à¦¤à§à¦°à¦•à¦²à¦¾à¦° à¦®à¦¤à§‹à¥¤ à¦ªà§à¦°à¦¤à§à¦¯à§‡à¦•à§‡ à¦¤à¦¾à¦° à¦¨à¦¿à¦œà§‡à¦° à¦¦à§ƒà¦·à§à¦Ÿà¦¿à¦­à¦™à§à¦—à¦¿ à¦¦à¦¿à§Ÿà§‡ à¦ªà§à¦°à§‡à¦•à§à¦·à¦¾à¦ªà¦Ÿ à¦¬à§à¦¯à¦¾à¦–à§à¦¯à¦¾ à¦•à¦°à§‡à¥¤ &lsquo;à¦…à§à¦¯à¦¾à¦¸à¦¾à¦¸à¦¿à¦¨à§à¦¸ à¦•à§à¦°à¦¿à¦¡ à¦“à¦¡à¦¿à¦¸à¦¿&rsquo; à¦¸à§‡ à¦°à¦•à¦® à¦à¦•à¦Ÿà¦¿ à¦—à§‡à¦®à¥¤ à¦–à§à¦°à¦¿à¦·à§à¦Ÿà¦ªà§‚à¦°à§à¦¬ à§ªà§©à§§ à¦¸à¦¾à¦²à§‡à¦° à¦¦à¦¿à¦•à§‡ à¦…à§à¦¯à¦¾à¦¥à§‡à¦¨à§à¦¸ à¦“ à¦¸à§à¦ªà¦¾à¦°à§à¦Ÿà¦¾à¦° à¦®à¦§à§à¦¯à§‡ à¦ªà§‡à¦²à§‹à¦ªà§‹à¦¨à§‡à¦¸à¦¿à¦¯à¦¼à¦¾à¦¨ à¦¯à§à¦¦à§à¦§à§‡à¦° à¦•à¦¾à¦²à§à¦ªà¦¨à¦¿à¦• à¦‡à¦¤à¦¿à¦¹à¦¾à¦¸ à¦¨à¦¿à§Ÿà§‡ à¦à¦Ÿà¦¿ à¦à¦‡ à¦—à§‡à¦® à¦¸à¦¿à¦°à¦¿à¦œà§‡à¦° à¦à¦•à¦¾à¦¦à¦¶à¦¤à¦® à¦•à¦¿à¦¸à§à¦¤à¦¿à¥¤ à¦¯à§‡à¦–à¦¾à¦¨à§‡ à¦–à§‡à¦²à§‹à¦¯à¦¼à¦¾à¦¡à¦¼à§‡à¦°à¦¾ à¦à¦•à¦œà¦¨ à¦ªà§à¦°à§à¦· à¦¬à¦¾ à¦¨à¦¾à¦°à§€ à¦­à¦¾à¦¡à¦¼à¦¾à¦Ÿà§‡ à¦¸à§ˆà¦¨à§à¦¯à¦•à§‡ à¦¨à¦¿à¦¯à¦¼à¦¨à§à¦¤à§à¦°à¦£ à¦•à¦°à§‡à¥¤ à¦¯à¦¾à¦°à¦¾ à¦‰à¦­à¦¯à¦¼ à¦ªà¦•à§à¦·à§‡à¦° à¦œà¦¨à§à¦¯ à¦²à¦¡à¦¼à¦¾à¦‡ à¦•à¦°à§‡, à¦•à¦¾à¦°à¦£ à¦¤à¦¾à¦¦à§‡à¦° à¦•à¦¾à¦›à§‡ à¦¤à¦¾à¦¦à§‡à¦° à¦ªà¦°à¦¿à¦¬à¦¾à¦°à¦•à§‡ à¦à¦•à¦¤à§à¦° à¦•à¦°à¦¾à¦‡ à¦à¦•à¦Ÿà¦¾ à¦®à§à¦–à§à¦¯ à¦•à¦¾à¦œà¥¤ à¦à¦¬à¦¾à¦° à¦†à¦—à§‡à¦° à¦—à§‡à¦®à¦—à§à¦²à§‹à¦° à¦šà§‡à¦¯à¦¼à§‡ à¦®à§‚à¦² à¦­à§‚à¦®à¦¿à¦•à¦¾ à¦ªà¦¾à¦²à¦¨à¦•à¦¾à¦°à§€à¦° à¦‰à¦ªà¦¾à¦¦à¦¾à¦¨ à¦†à¦°à¦“ à¦¬à§‡à¦¶à¦¿ à¦‰à¦¨à§à¦¨à¦¤ à¦•à¦°à¦¾à¦° à¦šà§‡à¦·à§à¦Ÿà¦¾ à¦•à¦°à¦¾ à¦¹à§Ÿà§‡à¦›à§‡à¥¤ à¦à¦° à¦ªà¦¾à¦¶à¦¾à¦ªà¦¾à¦¶à¦¿ à¦–à§‡à¦²à¦¾à¦Ÿà¦¿à¦¤à§‡ à¦•à¦¥à§‹à¦ªà¦•à¦¥à¦¨à§‡à¦° à¦¬à¦¿à¦•à¦²à§à¦ª, à¦…à¦¨à§à¦¸à¦¨à§à¦§à¦¾à¦¨ à¦¶à¦¾à¦–à¦¾ à¦à¦¬à¦‚ à¦à¦•à¦¾à¦§à¦¿à¦• à¦¸à¦®à¦¾à¦ªà§à¦¤à¦¿ à¦°à¦¯à¦¼à§‡à¦›à§‡, à¦¯à¦¾ à¦—à§‡à¦®à¦Ÿà¦¿à¦•à§‡ à¦­à¦¿à¦¨à§à¦¨à¦®à¦¾à¦¤à§à¦°à¦¾à¦° à¦¨à¦¾à¦¨à§à¦¦à¦¨à¦¿à¦•à¦¤à¦¾à¦° à¦›à§‡à¦¾à¦à§Ÿà¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡à¥¤</p>\r\n', 'à¦—à§‡à¦®à¦¸'),
(2, 1, 'à¦¶à§à¦°à¦®à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦¨à¦¤à§à¦¨ à¦¦à§à§Ÿà¦¾à¦°, à¦•à¦°à§à¦®à¦•à§à¦·à¦® à¦¤à¦°à§à¦£ à¦¨à§‡à¦¬à§‡ à¦œà¦¾à¦ªà¦¾à¦¨', '<p>à¦¨à¦¬à¦œà¦¾à¦¤à¦•à¦•à§‡ à¦•à§‹à¦²à§‡ à¦¨à¦¿à§Ÿà§‡ à¦•à¦ªà¦¾à¦²à§‡ à¦šà§à¦®à§ à¦–à§‡à§Ÿà§‡ à¦¤à¦¾à¦° à¦¶à¦¤à¦¬à¦°à§à¦· à¦†à§Ÿà§à¦° à¦ªà§à¦°à¦¾à¦°à§à¦¥à¦¨à¦¾ à¦•à¦°à¦¿ à¦†à¦®à¦°à¦¾ à¦•à¦®à¦¬à§‡à¦¶à¦¿ à¦¸à¦¬à¦¾à¦‡à¥¤ à¦¤à¦¬à§‡ à¦à¦Ÿà¦¾à¦“ à¦®à¦¾à¦¨à¦¿, à§§à§¦à§¦ à¦¬à¦›à¦° à¦•à¦œà¦¨à¦‡à¦¬à¦¾ à¦¬à¦¾à¦à¦šà§‡à¥¤ à¦œà¦¾à¦ªà¦¾à¦¨à§‡à¦° à¦•à§à¦·à§‡à¦¤à§à¦°à§‡ à¦…à¦¬à¦¶à§à¦¯ à¦¶à¦¤ à¦¬à¦›à¦° à¦¬à§‡à¦à¦šà§‡ à¦¥à¦¾à¦•à¦¾à¦Ÿà¦¾ à¦¤à§‡à¦®à¦¨ à¦†à¦¶à§à¦šà¦°à§à¦¯à¦œà¦¨à¦• à¦•à¦¿à¦›à§ à¦¨à§Ÿà¥¤ à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡ à¦¦à§‡à¦¶à¦Ÿà¦¿à¦° à¦—à§œ à¦†à§Ÿà§ à§®à§ª à¦¬à¦›à¦° à¦¹à¦²à§‡à¦“ à§§à§¦à§¦ à¦¬à¦¾ à¦¤à¦¾à¦° à¦…à¦§à¦¿à¦• à¦¬à§Ÿà¦¸à§€ à¦®à¦¾à¦¨à§à¦·à§‡à¦° à¦¸à¦‚à¦–à§à¦¯à¦¾ à¦ªà§à¦°à¦¾à§Ÿ à§­à§¦ à¦¹à¦¾à¦œà¦¾à¦°à¥¤ à¦†à¦° à¦à¦‡ à¦¬à§Ÿà¦¸à§à¦• à¦œà¦¨à¦—à§‹à¦·à§à¦ à§€à¦‡ à¦®à¦¾à¦¥à¦¾à¦¬à§à¦¯à¦¥à¦¾à¦° à¦•à¦¾à¦°à¦£ à¦¹à§Ÿà§‡ à¦¦à¦¾à¦à§œà¦¿à§Ÿà§‡à¦›à§‡ à¦ªà§à¦°à¦§à¦¾à¦¨à¦®à¦¨à§à¦¤à§à¦°à§€ à¦¶à¦¿à¦¨à¦œà§‹ à¦†à¦¬à§‡à¦° à¦œà¦¨à§à¦¯à¥¤ à¦¦à§‡à¦¶à§‡à¦° à¦•à¦²à¦•à¦¾à¦°à¦–à¦¾à¦¨à¦¾à¦° à¦šà¦¾à¦•à¦¾ à¦¸à¦šà¦² à¦°à¦¾à¦–à¦¤à§‡ à¦¬à¦¿à¦¦à§‡à¦¶ à¦¥à§‡à¦•à§‡ à¦•à¦°à§à¦®à§€ à¦¨à§‡à¦“à§Ÿà¦¾à¦° à¦˜à§‹à¦·à¦£à¦¾ à¦¦à¦¿à§Ÿà§‡à¦›à§‡ à¦œà¦¾à¦ªà¦¾à¦¨à¥¤ à¦†à¦° à¦à¦‡ à¦¸à§à¦¯à§‹à¦— à¦•à¦¾à¦œà§‡ à¦²à¦¾à¦—à¦¾à¦¤à§‡ à¦ªà¦¾à¦°à§‡ à¦¬à¦¾à¦‚à¦²à¦¾à¦¦à§‡à¦¶à§‡à¦° à¦®à¦¤à§‹ à¦œà¦¨à¦¬à¦¹à§à¦² à¦¦à§‡à¦¶à¦—à§à¦²à§‹à¥¤ à¦¶à§à¦°à¦®à¦¬à¦¾à¦œà¦¾à¦°à§‡ à¦¨à¦¤à§à¦¨ à¦¦à§à§Ÿà¦¾à¦° à¦–à§à¦²à¦¤à§‡ à¦ªà¦¾à¦°à§‡à¥¤</p>\r\n', 'à¦…à¦°à§à¦¥à¦¨à§€à¦¤à¦¿'),
(3, 2, 'à¦¨à¦¤à§à¦¨ à¦®à¦¾à¦§à§à¦¯à¦® à¦¨à¦¿à§Ÿà§‡ à¦†à¦¡à§à¦¡à¦¾à§Ÿ à¦¤à¦¾à¦à¦°à¦¾', '<p>à¦—à¦¤à¦•à¦¾à¦² à¦°à§‹à¦¬à¦¬à¦¾à¦° à¦¬à¦¿à¦•à§‡à¦²à§‡ à¦¹à¦ à¦¾à§Ž à¦ªà§à¦°à¦¥à¦® à¦†à¦²à§‹ à¦•à¦¾à¦°à§à¦¯à¦¾à¦²à§Ÿà§‡ à¦…à¦¤à¦¿à¦¥à¦¿ à¦¹à§Ÿà§‡ à¦à¦²à§‡à¦¨ à¦à¦•à¦à¦¾à¦à¦• à¦šà§‡à¦¨à¦¾ à¦®à§à¦–à¥¤ à¦›à¦¿à¦²à§‡à¦¨ à¦ªà¦°à¦¿à¦šà¦¾à¦²à¦• à¦—à¦¿à§Ÿà¦¾à¦¸à¦‰à¦¦à§à¦¦à¦¿à¦¨ à¦¸à§‡à¦²à¦¿à¦®, à¦¨à§à¦¹à¦¾à¦¶ à¦¹à§à¦®à¦¾à§Ÿà§‚à¦¨, à¦…à¦­à¦¿à¦¨à§Ÿà¦¶à¦¿à¦²à§à¦ªà§€ à¦¤à¦¾à¦¹à¦¸à¦¾à¦¨, à¦¨à§à¦¸à¦°à¦¾à¦¤ à¦‡à¦®à¦°à§‹à¦œ à¦¤à¦¿à¦¶à¦¾, à¦®à¦¿à¦¶à§Œà¦°à§€ à¦“ à¦ªà§à¦°à¦¯à§‹à¦œà¦• à¦¶à¦¾à¦¹à¦°à¦¿à§Ÿà¦¾à¦° à¦¶à¦¾à¦•à¦¿à¦²à¥¤ à¦¬à¦¸à¦²à§‡à¦¨ à¦†à¦¡à§à¦¡à¦¾à§Ÿà¥¤ à¦†à¦¡à§à¦¡à¦¾à§Ÿ à¦‰à¦ à§‡ à¦à¦² à¦¬à¦°à§à¦¤à¦®à¦¾à¦¨à§‡à¦° à¦†à¦§à§à¦¨à¦¿à¦• à¦ªà§à¦°à¦šà¦¾à¦°à¦®à¦¾à¦§à§à¦¯à¦® à¦¨à¦¿à§Ÿà§‡ à¦•à¦¥à¦¾, à¦à¦‡ à¦®à¦¾à¦§à§à¦¯à¦®à§‡à¦° à¦¨à¦¾à¦¨à¦¾à¦¨ à¦•à¦¨à¦Ÿà§‡à¦¨à§à¦Ÿà§‡à¦° à¦•à¦¥à¦¾à¥¤</p>\r\n\r\n<p>à¦—à¦¤à¦•à¦¾à¦² à¦à¦‡ à¦†à¦¡à§à¦¡à¦¾à¦° à¦•à¦¾à¦°à¦£ à¦›à¦¿à¦² à¦¬à¦¾à§Ÿà§‹à¦¸à§à¦•à§‹à¦ª à¦…à¦°à¦¿à¦œà¦¿à¦¨à¦¾à¦²à§‡à¦° à¦œà¦¨à§à¦¯ à¦¤à§ˆà¦°à¦¿ à¦šà¦¾à¦°à¦Ÿà¦¿ à¦¨à¦¤à§à¦¨ à¦“à§Ÿà§‡à¦¬ à¦«à¦¿à¦²à§à¦®à§‡à¦° à¦®à§à¦•à§à¦¤à¦¿à¥¤ à¦¨à¦¤à§à¦¨ à¦›à¦¬à¦¿à¦—à§à¦²à§‹à¦° à¦¨à¦¾à¦® à¦¨à¦¿à¦ƒà¦¶à§à¦¬à¦¾à¦¸, à¦ªà¦¿à¦¤à§à¦œà¦¾ à¦­à¦¾à¦‡, à¦°à§‚à¦ªà¦•à¦¥à¦¾ à¦“ à¦ªà§à¦°à§€à¦¤à¦¿à¥¤ à¦à¦° à¦®à¦§à§à¦¯à§‡ à§§à§­ à¦¨à¦­à§‡à¦®à§à¦¬à¦° à¦®à§à¦•à§à¦¤à¦¿ à¦ªà§‡à§Ÿà§‡à¦›à§‡ à¦¨à¦¿à¦ƒà¦¶à§à¦¬à¦¾à¦¸ à¦“ à§¨à§ª à¦¨à¦­à§‡à¦®à§à¦¬à¦° à¦ªà¦¿à¦¤à§à¦œà¦¾ à¦­à¦¾à¦‡à¥¤ à¦†à¦—à¦¾à¦®à§€ à§¬ à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦° à¦°à§‚à¦ªà¦•à¦¥à¦¾ à¦à¦¬à¦‚ à§§à§© à¦¡à¦¿à¦¸à§‡à¦®à§à¦¬à¦° à¦ªà§à¦°à§€à¦¤à¦¿ à¦®à§à¦•à§à¦¤à¦¿ à¦ªà¦¾à¦¬à§‡à¥¤</p>\r\n', 'à¦¬à¦¿à¦¨à§‹à¦¦à¦¨');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `userid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`userid`, `name`, `username`, `email`, `password`, `status`) VALUES
(1, 'Nurul Hasan', 'NHasan', 'NHasan@gmail.com', 'NHasan@gmail.com', 1),
(2, 'Nayem hasan', 'MHasan', 'MHasan@gmail.com', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `view`
--

CREATE TABLE `view` (
  `id` int(11) NOT NULL,
  `postid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `viewerid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `view`
--

INSERT INTO `view` (`id`, `postid`, `userid`, `viewerid`) VALUES
(1, 2, 1, 0),
(2, 1, 1, 0),
(3, 3, 2, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_table`
--
ALTER TABLE `post_table`
  ADD PRIMARY KEY (`postid`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`userid`);

--
-- Indexes for table `view`
--
ALTER TABLE `view`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_table`
--
ALTER TABLE `post_table`
  MODIFY `postid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `userid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `view`
--
ALTER TABLE `view`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;