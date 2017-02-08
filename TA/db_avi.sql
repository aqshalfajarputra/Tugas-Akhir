-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2016 at 04:07 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_avi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `aduser` varchar(20) NOT NULL,
  `adpw` varchar(20) NOT NULL,
  `adid` int(20) NOT NULL AUTO_INCREMENT,
  `adname` text NOT NULL,
  `ademail` text NOT NULL,
  PRIMARY KEY (`adid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`aduser`, `adpw`, `adid`, `adname`, `ademail`) VALUES
('admin', 'admin', 3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_content`
--

CREATE TABLE IF NOT EXISTS `tb_content` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `p_name` text NOT NULL,
  `p_price` varchar(30) NOT NULL,
  `p_img` text NOT NULL,
  `p_info` longtext NOT NULL,
  `p_label` varchar(20) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `tb_content`
--

INSERT INTO `tb_content` (`p_id`, `p_name`, `p_price`, `p_img`, `p_info`, `p_label`) VALUES
(11, 'Black 40L-33', 'US $ 345', '3f.jpg', 'This is our black suit with stylish model', 'Office'),
(19, 'Grey 20G-04', 'US $ 325', '4f.jpg', 'This is our new model by matching some stuff', 'Office'),
(23, 'Tropical Brown', 'US $ 335', '2v.jpg', 'Brownish with Tropical Flower Pattern\r\n<br>\r\nSize : \r\nM, L', 'Vintage'),
(26, 'Meenie Polka', 'US $ 329', '1v.jpg', 'Fill your desire in old memory with this sweet polkadot pattern.\r\n<br>\r\nSize : \r\nS, M, L', 'Vintage'),
(31, 'Old Violet', 'US $ 320', '3v.jpg', 'This is violet\r\n<br>\r\nSize : S, M , L', 'Vintage'),
(38, 'Grey 20G-03', 'US $ 335', '2f.jpg', 'This is our grey suit', 'Office'),
(43, 'Ocean Blue', 'US $ 335', '4v.PNG', 'Oceanic Blue pattern', 'Vintage'),
(47, 'Elegant Casual', 'US $ 325', '1f.jpg', 'This is Okey', 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `tb_member`
--

CREATE TABLE IF NOT EXISTS `tb_member` (
  `username` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `memberid` int(20) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  PRIMARY KEY (`memberid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_member`
--

INSERT INTO `tb_member` (`username`, `password`, `memberid`, `nama`, `email`) VALUES
('admin', 'd033e22ae348aeb5660f', 4, 'uye', 'aqshalfajarputra0226@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
