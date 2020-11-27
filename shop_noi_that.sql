-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2019 at 09:48 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shop_noi_that`
--

-- --------------------------------------------------------

--
-- Table structure for table `banner_slide_show`
--

CREATE TABLE `banner_slide_show` (
  `type` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `des` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `link` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `banner_slide_show`
--

INSERT INTO `banner_slide_show` (`type`, `des`, `link`, `id`) VALUES
('Khuyến mãi', 'Sale 50% off', 'Upload/banner_slide_show/slide1.jpg', 1),
('Chicago', 'Thank you, Chicago!', 'Upload/banner_slide_show/slide2.jpg', 2),
('New York', 'We love the Big Apple!', 'Upload/banner_slide_show/slide3.jpg', 3);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `CateID` int(11) NOT NULL,
  `CateName` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CateID`, `CateName`) VALUES
(1, 'Ghế'),
(2, 'Kệ sách'),
(3, 'Tủ quần áo'),
(4, 'Đèn để bàn');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `GroupID` int(11) NOT NULL,
  `GroupName` varchar(50) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`GroupID`, `GroupName`) VALUES
(1, 'Admin'),
(2, 'Moder'),
(3, 'Khách hàng');

-- --------------------------------------------------------

--
-- Table structure for table `orderitems`
--

CREATE TABLE `orderitems` (
  `OrderID` int(11) NOT NULL,
  `ProdID` int(11) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `orderitems`
--

INSERT INTO `orderitems` (`OrderID`, `ProdID`, `Quantity`) VALUES
(1, 3, 2),
(1, 4, 3),
(1, 18, 1),
(1, 17, 1),
(1, 14, 1),
(2, 1, 4),
(2, 2, 2),
(2, 3, 7),
(2, 4, 2),
(2, 9, 1),
(3, 1, 1),
(3, 4, 1),
(3, 5, 1),
(4, 1, 3),
(4, 4, 6),
(4, 5, 1),
(4, 15, 2),
(4, 17, 1),
(4, 18, 1),
(4, 3, 1),
(4, 2, 1),
(5, 1, 4),
(5, 2, 3),
(5, 3, 1),
(5, 4, 8),
(5, 6, 1),
(5, 7, 3),
(5, 5, 1),
(6, 1, 4),
(6, 2, 3),
(6, 3, 2),
(6, 4, 13),
(7, 1, 3),
(7, 4, 3),
(7, 3, 1),
(8, 2, 1),
(8, 3, 2),
(8, 4, 2),
(8, 1, 1),
(9, 2, 2),
(9, 3, 2),
(9, 4, 4),
(9, 1, 3),
(9, 5, 2),
(9, 13, 1),
(9, 17, 5),
(10, 2, 1),
(10, 3, 3),
(10, 4, 2),
(10, 1, 1),
(10, 10, 1),
(10, 11, 1),
(10, 15, 1),
(11, 1, 1),
(11, 3, 1),
(11, 2, 1),
(11, 4, 3),
(12, 1, 2),
(12, 2, 2),
(12, 4, 1),
(12, 3, 1),
(13, 3, 3),
(13, 4, 5),
(13, 1, 4),
(13, 2, 3),
(13, 16, 1),
(13, 19, 1),
(14, 1, 1),
(14, 2, 1),
(14, 3, 1),
(14, 4, 1),
(15, 1, 4),
(15, 3, 4),
(15, 4, 1),
(15, 2, 1),
(15, 17, 1),
(15, 18, 1),
(15, 19, 3),
(16, 4, 1),
(16, 3, 1),
(16, 9, 5),
(16, 11, 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `AddedDate` date NOT NULL,
  `Address` varchar(200) COLLATE utf8_vietnamese_ci NOT NULL,
  `Phone` int(11) NOT NULL,
  `Sum` float NOT NULL,
  `Status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `UserID`, `AddedDate`, `Address`, `Phone`, `Sum`, `Status`) VALUES
(1, 1, '2019-12-07', 'hehe', 123456789, 6850000, 0),
(2, 1, '2019-12-08', 'fg', 123456789, 12860000, 0),
(3, 1, '2019-12-08', 'hehe', 123456789, 3190000, 0),
(4, 1, '2019-12-08', 'hehe', 123456789, 15070000, 0),
(5, 1, '2019-12-08', 'hehe', 123456789, 19760000, 0),
(6, 1, '2019-12-08', 'hehe', 123456789, 22810000, 0),
(7, 1, '2019-12-08', 'hehe', 192, 7220000, 0),
(8, 1, '2019-12-08', 'dhfhdfbdfb', 123456789, 5340000, 0),
(9, 1, '2019-12-08', 'hehe', 123456789, 16270000, 0),
(10, 1, '2019-12-08', 'hehe', 123456789, 7940000, 0),
(11, 1, '2019-12-08', 'hehe', 123456789, 5890000, 0),
(12, 1, '2019-12-08', 'hehe', 192, 5130000, 0),
(13, 1, '2019-12-08', 'hehe', 123456789, 15160000, 0),
(14, 1, '2019-12-08', 'hehe', 192, 3490000, 0),
(15, 1, '2019-12-08', 'hehe', 123456789, 11660000, 0),
(16, 1, '2019-12-08', 'dhfhdfbdfb', 192, 5750000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProdID` int(11) NOT NULL,
  `CateID` int(11) NOT NULL,
  `ProdName` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Des` varchar(1000) COLLATE utf8_vietnamese_ci NOT NULL,
  `Price` double NOT NULL,
  `Discount` double NOT NULL,
  `Quantity` int(11) NOT NULL,
  `Rate` double NOT NULL,
  `ImageURL` varchar(500) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProdID`, `CateID`, `ProdName`, `Des`, `Price`, `Discount`, `Quantity`, `Rate`, `ImageURL`) VALUES
(1, 4, 'Đèn ngủ 01', '<b>Màu sắc:</b> Đen/trắng<br>\r\n\r\n<b>Kích thước: </b>D43xR51xC90/45 (cm)<br>\r\n\r\nKhối lượng thực tế: 7kg<br>\r\n\r\n<b>Chất liệu:</b> Sắt sơn tĩnh điện<br>\r\n\r\n<b>Ý tưởng thiết kế:</b><br>\r\n\r\nĐơn giản nhưng vẫn thanh lịch và tiện dụng chính là BEE.<br>\r\n\r\nGhế Tony thích hợp trong mọi không gian: từ nhà ăn, phòng học đến phòng làm việc.<br>\r\n\r\nTony là một chiếc ghế phổ biến không thể thiếu trong bất cứ gia đình nào.<br>\r\n\r\n<b>Các điểm nổi bật:</b><br>\r\n\r\nThiết kế đơn giản nhưng tinh tế.<br>\r\nChất liệu là sắt sơn điện chống gỉ sét và bền đẹp theo thời gian.<br>', 990000, 0, 10, 0, 'denngu0001.jpg'),
(2, 1, 'Ghế 01', 'dfdfdf', 650000, 0, 20, 0, 'ghe0001.jpg'),
(3, 1, 'Ghế 02', 'dfdfdf', 650000, 0, 20, 0, 'ghe0002.jpg'),
(4, 4, 'Đèn ngủ 02', 'Màu sắc: Đen/trắng\r\n\r\nKích thước: D43xR51xC90/45 (cm)\r\n\r\nKhối lượng thực tế: 7kg\r\n\r\nChất liệu: Sắt sơn tĩnh điện\r\n\r\nÝ tưởng thiết kế:\r\n\r\nĐơn giản nhưng vẫn thanh lịch và tiện dụng chính là BEE.\r\n\r\nGhế Tony thích hợp trong mọi không gian: từ nhà ăn, phòng học đến phòng làm việc.\r\n\r\nTony là một chiếc ghế phổ biến không thể thiếu trong bất cứ gia đình nào.\r\n\r\nCác điểm nổi bật:\r\n\r\nThiết kế đơn giản nhưng tinh tế.\r\nChất liệu là sắt sơn điện chống gỉ sét và bền đẹp theo thời gian.', 1200000, 0, 10, 0, 'denngu0001.jpg'),
(5, 4, 'Đèn ngủ 03', 'Màu sắc: Đen/trắng\r\n\r\nKích thước: D43xR51xC90/45 (cm)\r\n\r\nKhối lượng thực tế: 7kg\r\n\r\nChất liệu: Sắt sơn tĩnh điện\r\n\r\nÝ tưởng thiết kế:\r\n\r\nĐơn giản nhưng vẫn thanh lịch và tiện dụng chính là BEE.\r\n\r\nGhế Tony thích hợp trong mọi không gian: từ nhà ăn, phòng học đến phòng làm việc.\r\n\r\nTony là một chiếc ghế phổ biến không thể thiếu trong bất cứ gia đình nào.\r\n\r\nCác điểm nổi bật:\r\n\r\nThiết kế đơn giản nhưng tinh tế.\r\nChất liệu là sắt sơn điện chống gỉ sét và bền đẹp theo thời gian.', 1000000, 0, 10, 0, 'denngu0001.jpg'),
(6, 1, 'Ghế 03', 'dfdfdf', 650000, 0, 20, 0, 'ghe0003.jpg'),
(7, 1, 'Ghế 04', 'dfdfdf', 650000, 0, 20, 0, 'ghe0004.jpg'),
(8, 1, 'Ghế 05', 'dfdfdf', 650000, 0, 20, 0, 'ghe0005.jpg'),
(9, 1, 'Ghế 06', 'dfdfdf', 650000, 0, 20, 0, 'ghe0006.jpg'),
(10, 1, 'Ghế 07', 'dfdfdf', 650000, 0, 20, 0, 'ghe0007.jpg'),
(11, 1, 'Ghế 08', 'dfdfdf', 650000, 0, 20, 0, 'ghe0008.jpg'),
(12, 1, 'Ghế 09', 'dfdfdf', 650000, 0, 20, 0, 'ghe0009.jpg'),
(13, 1, 'Ghế 10', 'dfdfdf', 650000, 0, 20, 0, 'ghe0010.jpg'),
(14, 1, 'Ghế 11', 'dfdfdf', 650000, 0, 20, 0, 'ghe0011.jpg'),
(15, 1, 'Ghế 12', 'dfdfdf', 650000, 0, 20, 0, 'ghe0012.jpg'),
(16, 1, 'Ghế 13', 'dfdfdf', 650000, 0, 20, 0, 'ghe0013.jpg'),
(17, 1, 'Ghế 14', 'dfdfdf', 650000, 0, 20, 0, 'ghe0014.jpg'),
(18, 1, 'Ghế 15', 'dfdfdf', 650000, 0, 20, 0, 'ghe0015.jpg'),
(19, 1, 'Ghế 16', 'dfdfdf', 650000, 0, 20, 0, 'ghe0016.jpg'),
(20, 1, 'Ghế 17', 'dfdfdf', 650000, 0, 20, 0, 'ghe0017.jpg'),
(21, 1, 'Ghế 18', 'dfdfdf', 650000, 0, 20, 0, 'ghe0018.jpg'),
(22, 1, 'Ghế 19', 'dfdfdf', 650000, 0, 20, 0, 'ghe0019.jpg'),
(23, 1, 'Ghế 20', 'dfdfdf', 650000, 0, 20, 0, 'ghe0020.jpg'),
(24, 1, 'Ghế 21', 'dfdfdf', 650000, 0, 20, 0, 'ghe0021.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `GroupID` int(11) NOT NULL,
  `FullName` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `UserName` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `PassWord` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `GroupID`, `FullName`, `UserName`, `PassWord`, `Email`) VALUES
(1, 3, 'Lê Trần Trí Thức', 'lethuc', 'lethuc', 'test@test.com'),
(2, 3, 'Hello', 'hello', 'hello', 'hello@hello.com'),
(3, 1, 'admin', 'admin', 'admin', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`CateID`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`GroupID`);

--
-- Indexes for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD KEY `fk_OrderID` (`OrderID`),
  ADD KEY `fk_ProdID` (`ProdID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`),
  ADD KEY `fk_UserID` (`UserID`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProdID`),
  ADD KEY `fk_CateID` (`CateID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`),
  ADD KEY `fk_GroupID` (`GroupID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner_slide_show`
--
ALTER TABLE `banner_slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `CateID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `GroupID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ProdID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orderitems`
--
ALTER TABLE `orderitems`
  ADD CONSTRAINT `fk_OrderID` FOREIGN KEY (`OrderID`) REFERENCES `orders` (`OrderID`),
  ADD CONSTRAINT `fk_ProdID` FOREIGN KEY (`ProdID`) REFERENCES `products` (`ProdId`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_UserID` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_CateID` FOREIGN KEY (`CateID`) REFERENCES `categories` (`CateID`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `fk_GroupID` FOREIGN KEY (`GroupID`) REFERENCES `groups` (`GroupID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
