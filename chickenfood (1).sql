-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2023 lúc 03:02 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `chickenfood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdh`
--

CREATE TABLE `chitietdh` (
  `maDH` int(11) NOT NULL,
  `maSP` int(11) NOT NULL,
  `tenSP` varchar(200) NOT NULL,
  `HinhAnh` text NOT NULL,
  `soLuong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `chitietdh`
--

INSERT INTO `chitietdh` (`maDH`, `maSP`, `tenSP`, `HinhAnh`, `soLuong`, `gia`, `tongTien`) VALUES
(2, 1, 'combo 2 đùi gà', '', 4, 80000, 240000),
(0, 1, 'Combo ga + khoai tây', '', 2, 80000, 240000),
(42, 0, 'Milo', '', 1, 10000, 10000),
(42, 0, 'Bánh trứng', '', 2, 15000, 30000),
(42, 0, 'Đùi gà chiên', '', 4, 15000, 60000),
(43, 0, 'Milo', '', 1, 10000, 10000),
(43, 0, 'Bánh trứng', '', 2, 15000, 30000),
(43, 0, 'Đùi gà chiên', '', 4, 15000, 60000),
(43, 0, 'Mỳ ý gà', '', 1, 46000, 46000),
(44, 0, 'Đùi gà chiên', '', 5, 15000, 75000),
(45, 0, 'Đùi gà chiên', '', 5, 15000, 75000),
(46, 6, 'Hamburger', '', 1, 30000, 30000),
(47, 4, 'Gà viên', '', 1, 30000, 30000),
(47, 20, 'Thanh bí ngô ', '', 1, 17000, 17000),
(47, 114, 'Trà đào', '', 1, 10000, 10000),
(48, 4, 'Gà viên', '', 1, 30000, 30000),
(48, 20, 'Thanh bí ngô ', '', 1, 17000, 17000),
(48, 114, 'Trà đào', '', 1, 10000, 10000),
(49, 25, 'Nước khoáng ', '', 1, 12000, 12000),
(49, 5, 'Gà miếng', '', 2, 27000, 54000),
(49, 18, 'Bánh trứng', '', 1, 15000, 15000),
(50, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(51, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(52, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(53, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(53, 4, 'Gà viên', '', 1, 30000, 30000),
(54, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(54, 4, 'Gà viên', '', 1, 30000, 30000),
(55, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(55, 4, 'Gà viên', '', 1, 30000, 30000),
(56, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(56, 4, 'Gà viên', '', 1, 30000, 30000),
(56, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(57, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(57, 4, 'Gà viên', '', 1, 30000, 30000),
(57, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(58, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(58, 4, 'Gà viên', '', 1, 30000, 30000),
(58, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(59, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(59, 4, 'Gà viên', '', 1, 30000, 30000),
(59, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(60, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(60, 4, 'Gà viên', '', 1, 30000, 30000),
(60, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(61, 0, 'Đùi gà nướng', '', 1, 15000, 15000),
(61, 4, 'Gà viên', '', 1, 30000, 30000),
(61, 3, 'Gà nướng nguyên con', '', 1, 100000, 100000),
(62, 6, 'Hamburger', '', 1, 30000, 30000),
(63, 6, 'Hamburger', 'images/ga6.jpg', 1, 30000, 30000),
(63, 2, 'Đùi gà nướng', 'images/ga2.jpg', 2, 15000, 30000),
(63, 25, 'Nước khoáng ', 'images/ga20.jpg', 1, 12000, 12000),
(64, 6, 'Hamburger', 'images/ga6.jpg', 1, 30000, 30000),
(65, 6, 'Hamburger', 'images/ga6.jpg', 1, 30000, 30000),
(66, 6, 'Hamburger', 'images/ga6.jpg', 1, 30000, 30000),
(67, 0, 'Gà xiên que', 'images/ga12.jpg', 1, 30000, 30000),
(68, 2, 'Đùi gà nướng', 'images/ga2.jpg', 1, 15000, 15000),
(69, 2, 'Đùi gà nướng', 'images/ga2.jpg', 1, 15000, 15000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dangky`
--

CREATE TABLE `dangky` (
  `id` int(11) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `ngaysinh` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodt` varchar(12) NOT NULL,
  `tk` varchar(255) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `LoaiTK` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `dangky`
--

INSERT INTO `dangky` (`id`, `hoten`, `ngaysinh`, `email`, `sodt`, `tk`, `mk`, `diachi`, `LoaiTK`) VALUES
(6, 'Đoàn Phú', '2003-03-27', 'phudoan2703@gmail.com', '0935298142', 'phudoan', 'xuanquy0702', 'Quy Nhon, Binh Dinh', 0),
(2, 'Xuân Quý', '1999-09-08', 'doanthixuanquy0702@gmail.com', '0935298142', 'xuanquy', '1234', 'Quy Nhon, Binh Dinh', 0),
(3, 'Đỗ Thành Nam', '2003-04-30', 'namdo3004@gmail.com', '0254136526', 'namdo', '1245nam', 'Bong Son, Binh Dinh', 0),
(4, 'Rah Lan Nganh', '2003-02-10', 'rahlannganh@gmail.com', '0254545696', 'fill', 'fill1452', 'Pleiku, Gia Lai', 0),
(5, 'Nguyen Van Lam', '2003-04-12', 'vanlam@gmail.com', '0121451202', 'vanlam', 'vanlam123', 'Phu Cat, Binh Dinh', 0),
(7, 'ADMIN', '2003-05-01', 'admin@gmail.com', '0902678789', 'admin', 'maychuadmin', 'Quy Nhơn, Bình Định', 0),
(9, 'ksor h ngọc', '2003-02-20', 'ksorhngockrpa@gmail.com', '0377331865', 'Ngọc Ngọc', 'ksorhngoc', 'TP.Quy Nhơn', 0),
(10, 'ksor H\' Ngọc', '0000-00-00', 'ksorhngockrpa@gmail.com', '0377331865', 'Ngoc ks', 'ksorhngoc22082003', 'tp. Quy Nhơn', 1),
(11, 'yen', '2003-12-12', 'Hoangyen@gmail.com', '9086509', 'hoang yen', 'hoangyen123', 'tp. Quy Nhơn', 2),
(12, 'lam', '2003-11-02', '1 ksorhngoc4451051124@gmail.com', '18001008', 'Ngoc Ksor', '12345', '', 0),
(13, 'lam', '0000-00-00', '1 ksorhngoc4451051124@gmail.com', '18001008', 'Lam Lam', '12345', '', 0),
(14, 'lam', '2003-03-04', '1 ksorhngoc4451051124@gmail.com', '18001008', 'Lam nhu', '12345', '', 0),
(15, 'mai đinh như ngọc', '2004-12-03', '1 ksorhngockrpa@gmail.com', '18001008', 'nhu quynh', '12345', '', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `danhmuc_id` int(11) NOT NULL,
  `Danhmuc` varchar(255) NOT NULL,
  `Madanhmuc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`danhmuc_id`, `Danhmuc`, `Madanhmuc`) VALUES
(1, 'Ưa chuộng', 'DAV'),
(2, 'Món mới', 'O'),
(3, 'Thức ăn nhẹ', 'DAT'),
(4, 'Nước uống', 'N');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `maDH` int(11) UNSIGNED ZEROFILL NOT NULL,
  `maKH` int(11) NOT NULL,
  `tenKH` varchar(200) NOT NULL,
  `SDT` int(11) NOT NULL,
  `diaChi` varchar(200) NOT NULL,
  `SoluongSP` int(11) NOT NULL,
  `trangThai` int(11) NOT NULL,
  `tongTien` int(11) NOT NULL,
  `phuongThucTT` int(11) NOT NULL,
  `ThoiGian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`maDH`, `maKH`, `tenKH`, `SDT`, `diaChi`, `SoluongSP`, `trangThai`, `tongTien`, `phuongThucTT`, `ThoiGian`) VALUES
(00000000001, 1, '', 0, '', 4, 6, 190000, 0, NULL),
(00000000002, 2, 'Ngoc', 377, 'Quy Nhon', 2, 6, 190000, 0, NULL),
(00000000003, 3, 'Thư Vũ', 987654, '8a, Phạm Ngọc Thạch, Bình Định\r\n', 1, 0, 90000, 0, NULL),
(00000000004, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 6, 10000, 1, NULL),
(00000000005, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 5, 6, 70000, 1, NULL),
(00000000006, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 5, 4, 70000, 1, NULL),
(00000000007, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 5, 3, 70000, 1, NULL),
(00000000008, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 5, 5, 70000, 1, NULL),
(00000000009, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 5, 2, 70000, 1, NULL),
(00000000010, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 2, 85000, 1, NULL),
(00000000011, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 2, 85000, 1, NULL),
(00000000012, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 2, 85000, 1, NULL),
(00000000013, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 2, 85000, 1, NULL),
(00000000014, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 2, 85000, 1, NULL),
(00000000015, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 1, 85000, 1, NULL),
(00000000016, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 6, 1, 85000, 1, NULL),
(00000000017, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000018, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000019, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000020, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000021, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000022, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000023, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000024, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000025, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000026, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000027, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000028, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000029, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000030, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000031, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000032, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000033, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000034, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000035, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000036, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000037, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000038, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000039, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000040, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000041, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000042, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 7, 1, 100000, 1, NULL),
(00000000043, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 8, 1, 146000, 1, NULL),
(00000000044, 9, 'hương', 18001008, 'TP.Quy Nhơn', 5, 1, 75000, 1, NULL),
(00000000045, 9, 'hương', 18001008, 'TP.Quy Nhơn', 5, 1, 75000, 1, NULL),
(00000000046, 9, 'lam', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000047, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 3, 2, 57000, 1, NULL),
(00000000048, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 57000, 1, NULL),
(00000000049, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 4, 1, 81000, 1, NULL),
(00000000050, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 15000, 1, NULL),
(00000000051, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 15000, 1, NULL),
(00000000052, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 15000, 1, NULL),
(00000000053, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 2, 1, 45000, 1, NULL),
(00000000054, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 2, 1, 45000, 1, NULL),
(00000000055, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 2, 1, 45000, 1, NULL),
(00000000056, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000057, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000058, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000059, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000060, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000061, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 3, 1, 145000, 1, NULL),
(00000000062, 9, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000063, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 4, 1, 72000, 1, NULL),
(00000000064, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000065, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000066, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000067, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, NULL),
(00000000068, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 15000, 1, NULL),
(00000000069, 9, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 15000, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhanvien`
--

CREATE TABLE `nhanvien` (
  `ma` int(5) NOT NULL,
  `ten` varchar(200) NOT NULL,
  `hinh` varchar(100) NOT NULL,
  `GT` varchar(5) NOT NULL,
  `DiaChi` varchar(200) NOT NULL,
  `SDT` int(10) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `chucvu` varchar(100) NOT NULL,
  `luongCB` int(10) NOT NULL,
  `khen/phat` varchar(255) NOT NULL,
  `tongLuong` int(10) NOT NULL,
  `ghiChu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `nhanvien`
--

INSERT INTO `nhanvien` (`ma`, `ten`, `hinh`, `GT`, `DiaChi`, `SDT`, `Email`, `chucvu`, `luongCB`, `khen/phat`, `tongLuong`, `ghiChu`) VALUES
(1, 'ksor H\' Ngọc', 'images/ga1.jpg', 'Nữ', 'TP. Quy Nhơn', 987654, 'ksuookn@gmail.com', '0', 3000000, '', 0, ''),
(2, 'Hoàng Yến', '', 'Nữ', 'TP. Quy Nhơn', 377, 'hoangyen123@gmail.com', 'nhân viên giao hang', 3000000, '', 0, '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `cartegory_id` int(11) NOT NULL,
  `Tensp` varchar(255) NOT NULL,
  `Gia` varchar(255) NOT NULL,
  `Hinh` text NOT NULL,
  `Mota` varchar(5000) NOT NULL,
  `Baoquan` varchar(5000) NOT NULL,
  `Madanhmuc` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`cartegory_id`, `Tensp`, `Gia`, `Hinh`, `Mota`, `Baoquan`, `Madanhmuc`) VALUES
(1, 'Đùi gà chiên', '15000', 'images/ga1.jpg', 'Đùi gà tươi được tẩm bột chiên giòn đậm vị', 'Dùng ngay', 'DAT'),
(2, 'Đùi gà nướng', '15000', 'images/ga2.jpg', 'Đùi gà tươi được tẩm ướp nướng', 'Ăn trực tiếp, an ngon hơn khi nóng', 'DAV'),
(3, 'Gà nướng nguyên con', '100000', 'images/ga3.jpg', 'Gà nguyên con tẩm ướp và nướng', 'Ngon hơn khi ăn nóng', 'DAT'),
(4, 'Gà viên', '30000', 'images/ga4.jpg', 'Những phần thịt ức gà được tạo hình viên rồi tẩm bột chiên', 'Ngon hơn khi dùng ngay', 'DAT'),
(5, 'Gà miếng', '27000', 'images/ga5.jpg', 'Ức gà được thái mỏng chiên giòn', 'Ngon hơn khi ăn nóng', 'DAV'),
(6, 'Hamburger', '30000', 'images/ga6.jpg', 'Thành phần: 2 lát bánh mì, rau, cà chua, gà miếng, sốt ', 'Ngon hơn khi ăn nóng', 'DAT'),
(7, 'Cơm gà', '40000', 'images/ga7.jpg', 'Cơm nóng hổi cùng gà miếng và gà viên', 'Ngon hơn khi ăn nóng', 'DAV'),
(8, 'Mỳ ý gà', '46000', 'images/ga8.jpg', 'Mỳ ý sốt đậm đà cùng với gà viên', 'Ngon hơn khi ăn nóng', 'DAT'),
(13, 'Cơm đùi gà', '34000', 'images/ga9.jpg', 'Cơm nóng hổi cùng đùi gà chiên giòn', 'Ngon hơn khi ăn nóng', 'DAT'),
(14, 'Cơm gà phi-lê', '50000', 'images/ga10.jpg', 'Cơm nóng cùng với gà ph lê', 'Dùng trực tiếp trong ngày', 'DAV'),
(15, 'Salad', '5000', 'images/ga10.jpg', 'Rau sạch tươi ngon cùng nước sốt', 'Dùng ngay để có hương vị tốt', 'DAT'),
(115, 'Gà xiên que', '30000', 'images/ga12.jpg', 'Gà viên xiên que nướng', 'Ngon hơn khi ăn nóng', 'DAV'),
(17, 'Phomai viên', '65000', 'images/ga13', 'phomai viên tâm bột chiên giòn', 'Ngon hơn khi ăn nóng', 'DAV'),
(18, 'Bánh trứng', '15000', 'images/ga14.jpg', 'Bánh trứng đế giòn tan cùng lớp trứng béo ngậy', 'Ngon hơn khi dùng trực tiếp', 'O'),
(19, 'Viên khoai môn', '20000', 'images/ga15.jpg', 'Khoai môn nghiền mịn vo tròn sau đó chiên giòn', 'Ngon hơn khi dùng trực tiếp', 'O'),
(20, 'Thanh bí ngô ', '17000', 'images/ga16.jpg', 'Bí ngô nghiền lăn dài sau đó chiên giòn', 'Ngon hơn khi dùng trực tiếp', 'O'),
(21, 'Viên khoai môn to', '35000', 'images/ga17.jpg', 'Như viên khoai môn nhưng to', 'Ngon hơn khi ăn nóng', 'O'),
(23, 'Thanh bí ngô phomai', '30000', 'images/ga18.jpg-', 'Thanh bí ngô có nhân phomai tan chảy', 'Ăn trực tiếp vì bảo quản sẽ mất vị ngon sản phẩm', 'O'),
(24, 'Canh rong biển', '40.000', 'images/ga19.jpg', 'Rong biển tươi nấu cùng thịt gà', 'Ngon hơn khi ăn nóng', 'O'),
(25, 'Nước khoáng ', '12000', 'images/ga20.jpg', 'Nước Aquafina đóng chai', 'Bảo quản trong ngăn mát tủ lạnh', 'N'),
(102, 'Pepsi', '10000', 'images/ga24', 'Pepsi lon lạnh ', 'Trong ngăn mát tủ lạnh', 'N'),
(103, '7-up', '10000', 'images/ga23', '7-up lon lạnh', 'Trong ngăn mát tủ lạnh', 'N'),
(104, 'Milo', '10000', 'images/ga21.jpg', 'Milo bổ sung năng lượng', 'Trong ngăn mát tủ lạnh', 'N'),
(114, 'Trà đào', '10000', 'images/ga22.jpg', 'Trà đào tươi mát', 'Nên bỏ trong tủ lạnh 30 độ', 'N');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangky`
--
ALTER TABLE `dangky`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`danhmuc_id`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`maDH`);

--
-- Chỉ mục cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  ADD PRIMARY KEY (`ma`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`cartegory_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangky`
--
ALTER TABLE `dangky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
