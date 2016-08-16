-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2016 at 04:55 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangoaicuisine`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE IF NOT EXISTS `chitietdonhang` (
  `DonHangID` int(12) NOT NULL,
  `SanPhamID` int(12) NOT NULL,
  `SanPhamGia` double(10,0) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE IF NOT EXISTS `donhang` (
  `DonHangID` int(12) NOT NULL,
  `UserID` int(12) NOT NULL,
  `Ngay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE IF NOT EXISTS `loai` (
  `LoaiID` int(11) NOT NULL,
  `TenLoai` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`LoaiID`, `TenLoai`) VALUES
(1, 'Món mặn'),
(2, 'Món Ngọt'),
(3, 'Món Ăn Vặt');

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE IF NOT EXISTS `sanpham` (
  `SanPhamID` int(11) NOT NULL,
  `TenSanPham` varchar(50) NOT NULL,
  `Gia` int(12) NOT NULL,
  `DoCay` tinyint(1) NOT NULL,
  `ThichHopAnChay` tinyint(1) NOT NULL,
  `HinhSanPham1` varchar(255) NOT NULL,
  `HinhSanPham2` varchar(255) NOT NULL,
  `HinhSanPham3` varchar(255) NOT NULL,
  `HinhSanPham4` varchar(255) NOT NULL,
  `HinhSanPham5` varchar(255) NOT NULL,
  `LoaiID` int(11) NOT NULL,
  `MoTaSanPham` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`SanPhamID`, `TenSanPham`, `Gia`, `DoCay`, `ThichHopAnChay`, `HinhSanPham1`, `HinhSanPham2`, `HinhSanPham3`, `HinhSanPham4`, `HinhSanPham5`, `LoaiID`, `MoTaSanPham`) VALUES
(1, 'Bột Chiên Trứng', 35000, 0, 1, 'botchientrung.jpg', 'botchientrung2.jpg', 'botchientrung3.jpg', 'botchientrung.jpg', 'botchientrung.jpg', 1, 'Bột chiên trứng rất là ngon và giàu protein'),
(2, 'Bánh Tráng Trộn', 25000, 1, 0, 'banhtrangtron.jpg', 'banhtrangtron.jpg', 'banhtrangtron.jpg', 'banhtrangtron.jpg', 'banhtrangtron.jpg', 3, 'Bánh trsng trộn homemade'),
(3, 'Bún Thịt Nướng', 50000, 1, 0, 'bunthitnuong.jpg', 'bunthitnuong.jpg', 'bunthitnuong.jpg', 'bunthitnuong.jpg', 'bunthitnuong.jpg', 1, 'Bún Thịt Nướng ngon ơi là ngon'),
(4, 'Mì Xào Bò', 45000, 0, 0, 'mixaobo.jpg', 'mixaobo.jpg', 'mixaobo.jpg', 'mixaobo.jpg', 'mixaobo.jpg', 1, 'Mì Xào Đuối Quá!'),
(5, 'Xôi Gà', 25000, 0, 0, 'xoiga.jpg', 'xoiga.jpg', 'xoiga.jpg', 'xoiga.jpg', 'xoiga.jpg', 1, 'Xôi gà ta ngon hết sảy'),
(6, 'Cóc Ngâm', 20000, 1, 1, 'cocngam.jpg', 'cocngam.jpg', 'cocngam.jpg', 'cocngam.jpg', 'cocngam.jpg', 3, 'Cóc ngâm không chất bảo quản'),
(8, 'Xoài Ngâm', 20000, 1, 1, 'xoaingam.jpg', 'xoaingam.jpg', 'xoaingam.jpg', 'xoaingam.jpg', 'xoaingam.jpg', 3, 'Xoài ngâm không chất bảo quản'),
(9, 'Chè Củ Sen', 15000, 0, 1, 'checusen.jpg', 'checusen.jpg', 'checusen.jpg', 'checusen.jpg', 'checusen.jpg', 2, 'Chè củ sen giòn ngọt'),
(12, 'Chè Bắp', 15000, 0, 1, 'chebap.jpg', 'chebap.jpg', 'chebap.jpg', 'chebap.jpg', 'chebap.jpg', 2, 'Chè bắp thơm ngon'),
(13, 'Chè Thập Cẩm', 20000, 0, 1, 'chethapcam.jpg', 'chethapcam.jpg', 'chethapcam.jpg', 'chethapcam.jpg', 'chethapcam.jpg', 2, 'Chè thập cẩm 5 loại đậu'),
(16, 'Cà Na Ngâm', 25000, 1, 1, 'canangam.jpg', 'canangam.jpg', 'canangam.jpg', 'canangam.jpg', 'canangam.jpg', 3, 'Cà na ngâm rất là cay');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `UserID` int(12) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Role` int(1) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Phone` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`UserID`, `UserName`, `Password`, `Role`, `Email`, `Phone`) VALUES
(8, 'thanh', '1234', 0, 'kimthanh8606@yahoo.com', '0909990384'),
(9, 'admin', '123', 1, 'admin@gmail.com', '09766786777'),
(10, 'kim', '123', 0, 'kim@gmail.com', '0909990333');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`SanPhamID`),
  ADD KEY `DonHangID` (`DonHangID`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`DonHangID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`LoaiID`),
  ADD KEY `LoaiID` (`LoaiID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`SanPhamID`),
  ADD KEY `LoaiID` (`LoaiID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `DonHangID` int(12) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `loai`
--
ALTER TABLE `loai`
  MODIFY `LoaiID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `SanPhamID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(12) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`SanPhamID`) REFERENCES `sanpham` (`SanPhamID`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`DonHangID`) REFERENCES `donhang` (`DonHangID`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`LoaiID`) REFERENCES `loai` (`LoaiID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
