-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2016 at 01:50 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `cate`
--

CREATE TABLE IF NOT EXISTS `cate` (
  `id` int(11) unsigned NOT NULL,
  `cate_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `customer_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `cate_name`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'Di động', 1, '0000-00-00', '2016-12-07'),
(2, 'Thiết bị', 1, '0000-00-00', '2016-12-12'),
(3, 'Truyền hình', 1, '0000-00-00', '0000-00-00'),
(4, 'Khuyến mãi', 1, '0000-00-00', '2016-12-12'),
(5, 'Hỗ trợ khách hàng', 1, '0000-00-00', '2016-12-12'),
(11, 'Gói cước cơ bản', 2, '0000-00-00', '2016-12-12'),
(12, 'Tiện ích', 2, '0000-00-00', '0000-00-00'),
(13, 'Dịch vụ', 2, '0000-00-00', '0000-00-00'),
(14, 'Giải pháp', 2, '0000-00-00', '0000-00-00'),
(17, 'My MobiFone', 1, '2016-12-12', '2016-12-12'),
(18, 'Tài khoản DN', 2, '2016-12-12', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) unsigned NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`, `created_at`, `updated_at`) VALUES
(1, 'Cá nhân', '0000-00-00', '0000-00-00'),
(2, 'Doanh nghiệp', '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL,
  `post_title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` longtext CHARACTER SET utf8 NOT NULL,
  `post_sum` longtext CHARACTER SET utf8 NOT NULL,
  `post_view` int(255) NOT NULL,
  `post_high` varchar(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_title`, `subcate_id`, `user_id`, `post_content`, `post_sum`, `post_view`, `post_high`, `created_at`, `updated_at`) VALUES
(4, 'Iphone 7 plus giảm giá sâu', 9, 1, '<p>Iphone 7 plus giảm giá sâu<br></p>', '<p>Iphone 7 plus giảm giá sâu<br></p>', 0, '1', '2016-12-12', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `subcate`
--

CREATE TABLE IF NOT EXISTS `subcate` (
  `id` int(11) unsigned NOT NULL,
  `subcate_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `cate_id` int(11) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate`
--

INSERT INTO `subcate` (`id`, `subcate_name`, `cate_id`, `created_at`, `updated_at`) VALUES
(7, 'Gói cước', 1, '2016-12-12', '2016-12-12'),
(8, 'Dịch vụ', 1, '2016-12-12', '2016-12-12'),
(9, 'iPhone', 2, '2016-12-12', '2016-12-12'),
(10, 'Mua máy Online', 2, '2016-12-12', '2016-12-12'),
(11, 'Giới thiệu', 3, '2016-12-12', '2016-12-12'),
(12, 'MobiTV', 3, '2016-12-12', '2016-12-12'),
(13, 'Tin khuyến mại', 4, '2016-12-12', '2016-12-12'),
(14, 'Thông tin trúng thưởng', 4, '2016-12-12', '2016-12-12'),
(15, 'Tra cứu mã trúng thưởng', 4, '2016-12-12', '2016-12-12'),
(16, 'Hỗ trợ khách hàng', 5, '2016-12-12', '2016-12-12'),
(17, 'Thông tin tài khoản', 5, '2016-12-12', '2016-12-12'),
(18, 'Thoại', 11, '2016-12-12', '2016-12-12'),
(19, 'Truyền dữ liệu', 5, '2016-12-12', '2016-12-12'),
(20, 'Tiện ích', 12, '2016-12-12', '2016-12-12'),
(21, 'Thông tin tài khoản DN', 18, '2016-12-12', '2016-12-12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) unsigned NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT '2',
  `user_info` longtext CHARACTER SET utf8 NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_name`, `user_pass`, `user_level`, `user_info`, `created_at`, `updated_at`) VALUES
(1, 'tai123', '123', 1, 'dasda', '0000-00-00', '2016-12-15'),
(2, 'tai', '123', 2, 'sdffdsf', '2016-12-14', '2016-12-14'),
(3, 'tai2', 'taitaitai', 0, 'taitai', '2016-12-14', '2016-12-14'),
(4, 'nguyenvana', '123456789', 0, 'Hoc sinh', '2016-12-14', '2016-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`id`), ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`), ADD KEY `subcate_id` (`subcate_id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `subcate`
--
ALTER TABLE `subcate`
  ADD PRIMARY KEY (`id`), ADD KEY `cate_id` (`cate_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcate`
--
ALTER TABLE `subcate`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
