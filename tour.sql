-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3307
-- Thời gian đã tạo: Th10 07, 2021 lúc 02:47 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `tour`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `ID_Admin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `MatKhau_Admin` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`ID_Admin`, `MatKhau_Admin`) VALUES
('dat', '123'),
('huy', '123'),
('phuc', '123'),
('tai', '123'),
('tu', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dattour`
--

CREATE TABLE `dattour` (
  `ID_DatTour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NgayDat_DatTour` datetime NOT NULL,
  `TongTien_DatTour` int(11) NOT NULL,
  `Soluong_DatTour` int(11) NOT NULL,
  `TrangThai_DatTour` enum('chờ xử lý','thành công','thất bại') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Khach` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ID_Tour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dattour`
--

INSERT INTO `dattour` (`ID_DatTour`, `NgayDat_DatTour`, `TongTien_DatTour`, `Soluong_DatTour`, `TrangThai_DatTour`, `ID_Khach`, `ID_Tour`) VALUES
('D1', '2021-11-05 12:41:32', 900000, 3, 'chờ xử lý', 'K1', 'T1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khach`
--

CREATE TABLE `khach` (
  `ID_Khach` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten_Khach` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `NamSinh_Khach` date NOT NULL,
  `GioiTinh_Khach` enum('Nam','Nữ') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaChi_Khach` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SDT_Khach` int(20) NOT NULL,
  `Gmail_TaiKhoan` varchar(20) NOT NULL,
  `MatKhau_TaiKhoan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khach`
--

INSERT INTO `khach` (`ID_Khach`, `Ten_Khach`, `NamSinh_Khach`, `GioiTinh_Khach`, `DiaChi_Khach`, `SDT_Khach`, `Gmail_TaiKhoan`, `MatKhau_TaiKhoan`) VALUES
('K1', 'Nguyễn Hữu Tú', '2001-10-06', 'Nam', 'Hà Nội', 321598432, 'dda@gmail.com', '123'),
('K2', 'Nguyễn Mạnh Đức', '2001-10-19', 'Nam', 'Hải Dương', 351314893, 'duc@gmail.com', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour`
--

CREATE TABLE `tour` (
  `ID_Tour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Ten_Tour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `DiaDiem_Tour` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Anh_Tour` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `SoLuong_Tour` int(11) NOT NULL,
  `Gia_Tour` int(11) NOT NULL,
  `NoiDung_Tour` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `TheLoai_Tour` enum('Văn hóa lịch sử','Sinh thái khám phá','Nghỉ dưỡng') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tour`
--

INSERT INTO `tour` (`ID_Tour`, `Ten_Tour`, `DiaDiem_Tour`, `Anh_Tour`, `SoLuong_Tour`, `Gia_Tour`, `NoiDung_Tour`, `TheLoai_Tour`) VALUES
('T1', 'Hồ Gươm', 'Hà Nội', 'ho-guom.jpg', 1005, 300000, 'Trái tim của thủ đô Hà Nội', 'Văn hóa lịch sử'),
('T2', 'Tràng An', 'Ninh Bình', 'trang-an.jpg', 2000, 2000000, 'Cố đô Hoa Lư hùng vỹ', 'Văn hóa lịch sử'),
('T3', 'Nha Trang', 'Khánh Hòa', 'slider-1.jpg', 3080, 2000000, 'Bãi cát trắng tựa nắng vàng', 'Nghỉ dưỡng'),
('T4', 'Phong Nha Kẻ Bàng', 'Quảng Bình', 'phong-nha-ke-bang.jpg', 3100, 3000000, 'Vẻ đẹp kỳ quan đệ nhất động', 'Sinh thái khám phá'),
('T5', 'Hạ Long', 'Quảng Ninh', 'ha-long.jpg', 3100, 5000000, 'Di sản thiên nhiên thế giới', 'Sinh thái khám phá');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID_Admin`);

--
-- Chỉ mục cho bảng `dattour`
--
ALTER TABLE `dattour`
  ADD PRIMARY KEY (`ID_DatTour`),
  ADD KEY `ID_Khach` (`ID_Khach`),
  ADD KEY `ID_Tour` (`ID_Tour`);

--
-- Chỉ mục cho bảng `khach`
--
ALTER TABLE `khach`
  ADD PRIMARY KEY (`ID_Khach`);

--
-- Chỉ mục cho bảng `tour`
--
ALTER TABLE `tour`
  ADD PRIMARY KEY (`ID_Tour`);

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dattour`
--
ALTER TABLE `dattour`
  ADD CONSTRAINT `dattour_ibfk_1` FOREIGN KEY (`ID_Khach`) REFERENCES `khach` (`ID_Khach`),
  ADD CONSTRAINT `dattour_ibfk_2` FOREIGN KEY (`ID_Tour`) REFERENCES `tour` (`ID_Tour`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
