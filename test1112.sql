-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2016 at 06:28 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cate`
--

INSERT INTO `cate` (`id`, `cate_name`, `customer_id`, `created_at`, `updated_at`) VALUES
(1, 'Di động', 1, '0000-00-00', '2016-12-07'),
(2, 'Thiết bị', 2, '0000-00-00', '0000-00-00'),
(3, 'Truyền hình', 1, '0000-00-00', '0000-00-00'),
(4, 'Khuyến mãi', 0, '0000-00-00', '0000-00-00'),
(5, 'Hỗ trợ khách hàng', 0, '0000-00-00', '0000-00-00'),
(11, 'Gói cước cơ bản', 0, '0000-00-00', '0000-00-00'),
(12, 'Tiện ích', 0, '0000-00-00', '0000-00-00'),
(13, 'Dịch vụ', 0, '0000-00-00', '0000-00-00'),
(14, 'Giải pháp', 0, '0000-00-00', '0000-00-00'),
(16, 'Trả sau', 2, '2016-12-07', '2016-12-07');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) unsigned NOT NULL,
  `customer_name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `customer_name`) VALUES
(1, 'Cá nhân'),
(2, 'Doanh nghiệp');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) unsigned NOT NULL,
  `post_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subcate_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_content` longtext CHARACTER SET utf8 NOT NULL,
  `post_sum` longtext CHARACTER SET utf8 NOT NULL,
  `post_view` int(255) NOT NULL,
  `post_high` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `post_name`, `subcate_id`, `user_id`, `post_content`, `post_sum`, `post_view`, `post_high`) VALUES
(1, 'Gói cước cơ bản', 2, 0, 'Cước gọi rẻ: 880 đồng/phút nội mạng, 980 đồng/phút liên mạng.\r\nThanh toán cước đơn giản, đa dạng\r\nTại nhà\r\nQua hệ thống ATM\r\nTại các điểm thu cước của MobiFone\r\nHệ thống thanh toán trực tuyến\r\nTài khoản Fastpay\r\nNhiều ưu đãi\r\nChương trình chúc mừng sinh nhật, tặng quà cho khách hàng đặc biệt\r\nChương trình kết nối dài lâu (chương trình điểm thưởng của MobiFone): bạn sẽ được hưởng các dịch vụ chăm sóc đặc biệt tại các khu nghỉ dưỡng, khách sạn hàng đầu của Việt Nam, tại các bệnh viện quốc tế,…', 'Hệ thống thanh toán trực tuyến', 100, '1'),
(2, 'Gói cước theo đối tượng', 2, 0, 'Q-Student là gói cước thông tin di động trả trước với các ưu đãi dành riêng cho Sinh viên đang theo học hệ chính quy tại các trường đại học, cao đẳng, trung cấp (bao gồm cả trường trung cấp dạy nghề) trên toàn quốc. Với Q-Student, các bạn sinh viên không còn phải lo lắng về cước phí di động hàng tháng.', 'Q-Student là gói cước thông tin di động trả trước với các ưu đãi dành riêng cho Sinh viên', 10, '0');

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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcate`
--

INSERT INTO `subcate` (`id`, `subcate_name`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 'Gói cước', 2, '0000-00-00', '2016-12-09'),
(2, 'Dịch vụ', 1, '0000-00-00', '0000-00-00'),
(3, 'Thoại2', 1, '0000-00-00', '2016-12-09'),
(6, 'Gói cước1', 5, '2016-12-10', '2016-12-10');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL,
  `user_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_pass` varchar(255) NOT NULL,
  `user_level` int(1) NOT NULL DEFAULT '2',
  `user_info` longtext CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cate`
--
ALTER TABLE `cate`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `subcate`
--
ALTER TABLE `subcate`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
