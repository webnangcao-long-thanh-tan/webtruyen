-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2021 at 05:10 PM
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
  `Id_admin` int(11) NOT NULL,
  `Username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Id_admin`, `Username`, `Password`) VALUES
(4, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda'),
(5, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `Id_banner` int(11) NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `Id_binhluan` int(11) NOT NULL,
  `NoiDung` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdThanhVien` int(11) NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `giotruyen`
--

CREATE TABLE `giotruyen` (
  `Id_giotruyen` int(11) NOT NULL,
  `IdThanhVien` int(11) NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `noidungtruyen`
--

CREATE TABLE `noidungtruyen` (
  `Id_ndtruyen` int(11) NOT NULL,
  `HinhAnh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTruyen` int(11) NOT NULL,
  `IdTap` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `slideshow`
--

CREATE TABLE `slideshow` (
  `Id_slide` int(11) NOT NULL,
  `Hinh` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `taptruyen`
--

CREATE TABLE `taptruyen` (
  `Id_tap` int(11) NOT NULL,
  `TenTap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTruyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `Id_tv` int(11) NOT NULL,
  `Username` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DienThoai` varchar(12) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`Id_tv`, `Username`, `Password`, `Email`, `Name`, `DienThoai`) VALUES
(3, 'longtk', '202cb962ac59075b964b07152d234b70', 'nduclong7@gmail.com', 'duc long', '0902336908'),
(7, 'duclong', 'd9b1d7db4cd6e70935368a1efb10e377', 'nduclong7@gmail.com', 'nguyenlong', '987654321'),
(8, 'longnguyen', 'd9b1d7db4cd6e70935368a1efb10e377', 'nduclong7@gmail.com', 'nguyenlong', '12346789'),
(9, 'longtk123', '14e1b600b1fd579f47433b88e8d85291', 'nduclong8@gmail.com', 'longtk', '1234567890'),
(10, 'longtkk', 'd9b1d7db4cd6e70935368a1efb10e377', 'nduclong@gmail.com', 'nguyenduclong', '123456789'),
(11, 'longqwe123', 'd9b1d7db4cd6e70935368a1efb10e377', 'nduclong8@gmail.com', 'longqwe', '123456987');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `Id_TL` int(11) NOT NULL,
  `TenTL` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`Id_TL`, `TenTL`) VALUES
(24, '4-koma'),
(25, 'Action'),
(26, 'Adventure'),
(30, 'Chanbara'),
(31, 'Comedy'),
(32, 'Demetia'),
(33, 'Parody'),
(34, 'Drama'),
(35, 'Fantasy'),
(36, 'Gekiga'),
(37, 'Harry Stu'),
(38, 'Historical'),
(39, 'Horror'),
(40, 'Josei'),
(41, 'Kodomo'),
(42, 'Mafia'),
(43, 'Martial Arts'),
(44, 'Sci-fi');

-- --------------------------------------------------------

--
-- Table structure for table `truyen`
--

CREATE TABLE `truyen` (
  `Id_truyen` int(11) NOT NULL,
  `Ten` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IdTL` int(11) NOT NULL,
  `HinhAnh` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `LuotXem` int(11) NOT NULL DEFAULT 0,
  `MoTa` varchar(1000) NOT NULL,
  `NgayPost` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truyen`
--

INSERT INTO `truyen` (`Id_truyen`, `Ten`, `IdTL`, `HinhAnh`, `LuotXem`, `MoTa`, `NgayPost`) VALUES
(7, 'Conan', 25, 'conan.jpg', 1230, 'CONAN', '2021-01-13'),
(12, 'Dragon Quest', 26, 'dragonquest.jpg', 900, 'dấu ấn rồng thiêng', '2021-01-02'),
(14, 'Avenger', 25, 'avenger.jpg', 3000, 'Biệt đội báo thù', '2021-01-03'),
(16, 'Getbackers', 42, 'getbackers.jpg', 5000, 'Getbackers', '2020-12-20'),
(18, 'Boruto', 43, 'boruto.jpg', 1000, 'boruto', '2021-01-15'),
(23, 'Kimetsu no yaiba', 26, 'kimetsu no yaiba.jpg', 6000, 'kimetsu no yaiba', '2021-01-14'),
(24, 'Justice League', 44, 'justiceleague.jpg', 2000, 'Liên minh công lý', '2021-01-14'),
(25, 'OnePunch Man', 35, 'onepunchman.jpg', 3000, 'Onepunch Man', '2021-01-14'),
(26, 'Inuyasha', 35, 'inuyasha.jpg', 900, 'inuyasha', '2021-01-15'),
(27, 'Attack on Titan', 35, 'attack on titan.jpg', 5000, 'Đại chiến titan', '2020-12-12'),
(28, 'Hitman', 42, 'hitman.jpg', 3000, 'Hitman', '2020-11-11'),
(29, 'Shin', 41, 'shin.jpg', 3000, 'Shin cậu bé bút chì', '2021-01-15'),
(30, 'Gintama', 35, 'gintama.jpg', 1000, 'Gintama', '2020-12-05'),
(31, 'Hero acamedia', 25, 'heroacamedia.jpg', 2000, 'Học viện anh hùng', '2021-01-15'),
(32, 'Dragon-ball', 26, 'dragonbal.jpg', 3000, 'Dragonball', '2021-01-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Id_admin`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`Id_banner`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`Id_binhluan`),
  ADD KEY `thanhvienbinhluan` (`IdThanhVien`),
  ADD KEY `truyenbinhluan` (`IdTruyen`);

--
-- Indexes for table `giotruyen`
--
ALTER TABLE `giotruyen`
  ADD PRIMARY KEY (`Id_giotruyen`),
  ADD KEY `giotruyenthanhvien` (`IdThanhVien`),
  ADD KEY `giotruyentruyen` (`IdTruyen`);

--
-- Indexes for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  ADD PRIMARY KEY (`Id_ndtruyen`),
  ADD KEY `noidungtruyen` (`IdTruyen`),
  ADD KEY `tapnoidungtruyen` (`IdTap`);

--
-- Indexes for table `slideshow`
--
ALTER TABLE `slideshow`
  ADD PRIMARY KEY (`Id_slide`);

--
-- Indexes for table `taptruyen`
--
ALTER TABLE `taptruyen`
  ADD PRIMARY KEY (`Id_tap`),
  ADD KEY `taptruyen` (`IdTruyen`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`Id_tv`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`Id_TL`);

--
-- Indexes for table `truyen`
--
ALTER TABLE `truyen`
  ADD PRIMARY KEY (`Id_truyen`),
  ADD KEY `IdTLTruyen` (`IdTL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `Id_banner` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `Id_binhluan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `giotruyen`
--
ALTER TABLE `giotruyen`
  MODIFY `Id_giotruyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  MODIFY `Id_ndtruyen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `slideshow`
--
ALTER TABLE `slideshow`
  MODIFY `Id_slide` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taptruyen`
--
ALTER TABLE `taptruyen`
  MODIFY `Id_tap` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `Id_tv` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `Id_TL` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `truyen`
--
ALTER TABLE `truyen`
  MODIFY `Id_truyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `binhluan_ibfk_2` FOREIGN KEY (`IdThanhVien`) REFERENCES `thanhvien` (`Id_tv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `giotruyen`
--
ALTER TABLE `giotruyen`
  ADD CONSTRAINT `giotruyen_ibfk_1` FOREIGN KEY (`IdThanhVien`) REFERENCES `thanhvien` (`Id_tv`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `giotruyen_ibfk_2` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `noidungtruyen`
--
ALTER TABLE `noidungtruyen`
  ADD CONSTRAINT `noidungtruyen_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `noidungtruyen_ibfk_2` FOREIGN KEY (`IdTap`) REFERENCES `taptruyen` (`Id_tap`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `taptruyen`
--
ALTER TABLE `taptruyen`
  ADD CONSTRAINT `taptruyen_ibfk_1` FOREIGN KEY (`IdTruyen`) REFERENCES `truyen` (`Id_truyen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `truyen`
--
ALTER TABLE `truyen`
  ADD CONSTRAINT `truyen_ibfk_1` FOREIGN KEY (`IdTL`) REFERENCES `theloai` (`Id_TL`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
