-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2015 at 12:33 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogger_info`
--

CREATE TABLE IF NOT EXISTS `blogger_info` (
`blogger_id` int(11) NOT NULL,
  `blogger_first` text NOT NULL,
  `blogger_last` text NOT NULL,
  `blogger_DOB` date NOT NULL,
  `blogger_gender` text NOT NULL,
  `blogger_mobile` bigint(10) NOT NULL,
  `blogger_username` varchar(32) NOT NULL,
  `blogger_password` varchar(32) NOT NULL,
  `blogger_creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogger_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `blogger_updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `blogger_end_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `Approval` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `blogger_info`
--

INSERT INTO `blogger_info` (`blogger_id`, `blogger_first`, `blogger_last`, `blogger_DOB`, `blogger_gender`, `blogger_mobile`, `blogger_username`, `blogger_password`, `blogger_creation_date`, `blogger_is_active`, `blogger_updated_date`, `blogger_end_date`, `Approval`) VALUES
(4, '', '', '0000-00-00', '', 0, 'admin@xyz.com', '21232f297a57a5a743894a0e4a801fc3', '2015-08-26 08:53:42', 1, '2015-08-26 08:53:42', '2016-09-09 10:32:31', 1),
(6, 'Larry', 'Page', '1994-11-22', 'Male', 9876543210, 'larry@gmail.com', '66f4b449b3a98abf87f2521e35513542', '2015-08-26 10:52:30', 1, '2015-09-09 07:39:44', '2016-09-09 10:32:31', 1),
(7, 'Blake', 'Ross', '2015-09-05', 'Male', 908765456, 'blake@gmail.com', '3aa49ec6bfc910647fa1c5a013e48eef', '2015-09-05 09:55:08', 1, '2015-09-05 09:55:08', '2016-09-09 10:32:31', 1),
(8, 'ABC', 'XYZ', '2015-09-01', 'Male', 123456789, 'xyz@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e', '2015-09-09 10:01:58', 1, '2015-09-09 10:01:58', '2016-09-09 10:32:31', 1),
(9, 'aaa', 'aaa', '2015-09-08', 'Male', 24132654354, 'sdf@sdrf.com', '900150983cd24fb0d6963f7d28e17f72', '2015-09-09 10:09:42', 0, '2015-09-09 10:09:42', '2016-09-09 10:32:31', 0),
(10, 'xyz', 'xyz', '2015-09-17', 'Male', 987654321, 'xyz@gmail.com', 'd16fb36f0911f878998c136191af705e', '2015-09-09 10:32:31', 1, '2015-09-09 10:32:31', '2016-09-09 10:32:31', 1);

-- --------------------------------------------------------

--
-- Table structure for table `blog_detail`
--

CREATE TABLE IF NOT EXISTS `blog_detail` (
`blog_detail_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `blog_detail_image` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `blog_detail`
--

INSERT INTO `blog_detail` (`blog_detail_id`, `blog_id`, `blog_detail_image`) VALUES
(1, 4, '../images/Forest.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `blog_master`
--

CREATE TABLE IF NOT EXISTS `blog_master` (
`blog_id` int(11) NOT NULL,
  `blogger_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_desc` longtext NOT NULL,
  `blog_category` text NOT NULL,
  `blog_author` varchar(32) NOT NULL,
  `blog_is_active` tinyint(1) NOT NULL DEFAULT '1',
  `creation_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `blog_master`
--

INSERT INTO `blog_master` (`blog_id`, `blogger_id`, `blog_title`, `blog_desc`, `blog_category`, `blog_author`, `blog_is_active`, `creation_date`, `updated_date`) VALUES
(4, 6, 'First Post', 'Just a random post.\r\n\r\nInserting Text.', 'Random', 'Larry', 1, '2015-08-31 17:05:10', '2015-08-31 17:05:10'),
(5, 6, 'Post 2', 'Post 2', 'Random', 'Larry', 1, '2015-09-06 21:41:24', '2015-09-06 21:41:24'),
(6, 6, 'Post 3', 'Post 3', 'Random', 'Larry', 1, '2015-09-06 21:41:38', '2015-09-06 21:41:38'),
(7, 6, 'Post', 'Post 4\r\n\r\nUpdated.', 'Random', 'Larry', 1, '2015-09-06 21:41:51', '2015-09-09 09:56:02'),
(8, 6, 'Post', 'Post 5.\r\nUpdated.', 'Random', 'Larry', 1, '2015-09-06 21:42:05', '2015-09-09 09:35:48'),
(9, 6, 'Post 6', 'Post 6', 'Random', 'Larry', 0, '2015-09-06 21:42:17', '2015-09-06 21:42:17'),
(10, 6, 'Random', 'Random', 'Random', 'Larry', 1, '2015-09-07 13:05:30', '2015-09-07 13:05:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogger_info`
--
ALTER TABLE `blogger_info`
 ADD PRIMARY KEY (`blogger_id`);

--
-- Indexes for table `blog_detail`
--
ALTER TABLE `blog_detail`
 ADD PRIMARY KEY (`blog_detail_id`), ADD KEY `blog_id` (`blog_id`);

--
-- Indexes for table `blog_master`
--
ALTER TABLE `blog_master`
 ADD PRIMARY KEY (`blog_id`), ADD KEY `blogger_id` (`blogger_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogger_info`
--
ALTER TABLE `blogger_info`
MODIFY `blogger_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `blog_detail`
--
ALTER TABLE `blog_detail`
MODIFY `blog_detail_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `blog_master`
--
ALTER TABLE `blog_master`
MODIFY `blog_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `blog_detail`
--
ALTER TABLE `blog_detail`
ADD CONSTRAINT `blog_detail_ibfk_1` FOREIGN KEY (`blog_id`) REFERENCES `blog_master` (`blog_id`);

--
-- Constraints for table `blog_master`
--
ALTER TABLE `blog_master`
ADD CONSTRAINT `blog_master_ibfk_1` FOREIGN KEY (`blogger_id`) REFERENCES `blogger_info` (`blogger_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
