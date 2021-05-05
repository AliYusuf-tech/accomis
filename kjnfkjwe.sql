Skip to content
Search or jump to…

Pull requests
Issues
Marketplace
Explore

@AliYusuf-tech
davepartner
/
sql-list-of-local-governments-and-states-in-Nigeria
2
7368
Code
Issues
Pull requests
Actions
Projects
Wiki
Security
Insights
sql-list-of-local-governments-and-states-in-Nigeria/list-of-states-in-nigeria
@davepartner
davepartner Update list-of-states-in-nigeria
Latest commit f17b348 on Feb 8, 2018
 History
 1 contributor
81 lines (71 sloc)  1.64 KB

-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 28, 2017 at 10:18 AM
-- Server version: 5.7.9-log
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rawjobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
CREATE TABLE IF NOT EXISTS `states` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COMMENT='States in Nigeria.';

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `name`,`status`) VALUES
(1, 'Abia','null'),
(2, 'Adamawa','null'),
(3, 'Akwa Ibom','null'),
(4, 'Anambra','null'),
(5, 'Bauchi','null'),
(6, 'Bayelsa','null'),
(7, 'Benue','null'),
(8, 'Borno','null'),
(9, 'Cross River','null'),
(10, 'Delta','null'),
(11, 'Ebonyi','null'),
(12, 'Edo','null'),
(13, 'Ekiti','null'),
(14, 'Enugu','null'),
(15, 'FCT','null'),
(16, 'Gombe','null'),
(17, 'Imo','null'),
(18, 'Jigawa','null'),
(19, 'Kaduna','null'),
(20, 'Kano','null'),
(21, 'Katsina','null'),
(22, 'Kebbi','null'),
(23, 'Kogi','null'),
(24, 'Kwara','null'),
(25, 'Lagos','null'),
(26, 'Nasarawa','null'),
(27, 'Niger','null'),
(28, 'Ogun','null'),
(29, 'Ondo','null'),
(30, 'Osun','null'),
(31, 'Oyo','null'),
(32, 'Plateau','null'),
(33, 'Rivers','null'),
(34, 'Sokoto','null'),
(35, 'Taraba','null'),
(36, 'Yobe','null'),
(37, 'Zamfara');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
© 2021 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
Loading complete
