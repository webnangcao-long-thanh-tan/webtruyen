-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 03, 2021 at 03:19 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `comic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Id` int(11) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id`, `Username`, `Password`) VALUES
(4, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(5, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id` int(11) NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `Id` int(11) NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdThanhVien` int(11) NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giotruyen`
--

CREATE TABLE `giotruyen` (
  `Id` int(11) NOT NULL,
  `IdThanhVien` int(11) NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noidungtruyen`
--

CREATE TABLE `noidungtruyen` (
  `Id` int(11) NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTruyen` int(11) NOT NULL,
  `IdTap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Id` int(11) NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taptruyen`
--

CREATE TABLE `taptruyen` (
  `Id` int(11) NOT NULL,
  `TenTap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `Id` int(11) NOT NULL,
  `Username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `Id` int(11) NOT NULL,
  `TenTL` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`Id`, `TenTL`) VALUES
(7, 'Shōnen'),
(8, 'Shoujo'),
(9, 'Kodomo'),
(10, 'Seinen'),
(11, 'Josei'),
(12, 'Seijin'),
(13, 'Thiếu nhi'),
(14, 'Shoujo-ai'),
(15, 'Doujinshi'),
(16, 'Gekiga'),
(17, 'Horror'),
(18, 'Martial arts'),
(19, 'School life'),
(20, 'Comedy'),
(21, 'Ecchi'),
(22, 'Fantasy'),
(23, 'Adventure');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `Id` int(11) NOT NULL,
  `Ten` int(11) NOT NULL,
  `IdTL` int(11) NOT NULL,
  `HinhAnh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuotXem` int(11) NOT NULL DEFAULT 0,
  `MoTa` varchar(1000) NOT NULL,
  `NgayPost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `thanhvienbinhluan` (`IdThanhVien`),
  ADD KEY `truyenbinhluan` (`IdTruyen`);

--
-- Indexes for table `giotruyen`
--
ALTER TABLE `giotruyen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `giotruyenthanhvien` (`IdThanhVien`),
  ADD KEY `giotruyentruyen` (`IdTruyen`);

--
-- Indexes for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `noidungtruyen` (`IdTruyen`),
  ADD KEY `tapnoidungtruyen` (`IdTap`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `taptruyen`
--
ALTER TABLE `taptruyen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `taptruyen` (`IdTruyen`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `IdTLTruyen` (`IdTL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giotruyen`
--
ALTER TABLE `giotruyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taptruyen`
--
ALTER TABLE `taptruyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IdThanhVien`) REFERENCES `thanhvien` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giotruyen`
--
ALTER TABLE `giotruyen`
  ADD CONSTRAINT `giotruyen_ibfk_1` FOREIGN KEY (`IdThanhVien`) REFERENCES `thanhvien` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giotruyen_ibfk_2` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  ADD CONSTRAINT `noidungtruyen_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noidungtruyen_ibfk_2` FOREIGN KEY (`IdTap`) REFERENCES `taptruyen` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taptruyen`
--
ALTER TABLE `taptruyen`
  ADD CONSTRAINT `taptruyen_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`IdTL`) REFERENCES `theloai` (`Id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
