-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2023 lúc 02:44 PM
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
(78, 8, 'Mỳ ý gà', 'images/ga8.jpg', 1, 46000, 46000),
(78, 1, 'Đùi gà chiên', 'images/ga1.jpg', 3, 15000, 45000),
(79, 8, 'Mỳ ý gà', 'images/ga8.jpg', 1, 46000, 46000),
(79, 1, 'Đùi gà chiên', 'images/ga1.jpg', 3, 15000, 45000),
(80, 5, 'Gà miếng', 'images/ga5.jpg', 1, 27000, 27000),
(81, 6, 'Hamburger', 'images/ga6.jpg', 1, 30000, 30000),
(82, 7, 'Cơm gà', 'images/ga7.jpg', 6, 40000, 240000),
(83, 8, 'Mỳ ý gà', 'images/ga8.jpg', 2, 46000, 92000),
(84, 18, 'Bánh trứng', 'images/ga14.jpg', 2, 15000, 30000),
(85, 115, 'Gà xiên que', 'images/ga12.jpg', 1, 30000, 30000),
(86, 114, 'Trà đào', 'images/ga22.jpg', 5, 10000, 50000);

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
(10, 'ksor H\' Ngọc', '0000-00-00', 'ksorhngockrpa@gmail.com', '0377331865', 'Ngoc ks', 'ksorhngoc22082003', 'tp. Quy Nhơn', 1),
(11, 'yen', '2003-12-12', 'Hoangyen@gmail.com', '9086509', 'hoang yen', 'hoangyen123', 'tp. Quy Nhơn', 2),
(12, 'lam', '2003-11-02', '1 ksorhngoc4451051124@gmail.com', '18001008', 'Ngoc Ksor', '12345', '', 0),
(15, 'mai đinh như ngọc', '2004-12-03', '1 ksorhngockrpa@gmail.com', '18001008', 'nhu quynh', '12345', '', 2),
(16, 'thu ha', '0000-00-00', '', '0377331865', 'Ha thu', '12345', '', 3);

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
(00000000078, 12, 'lam', 18001008, 'TP.Quy Nhơn', 4, 1, 91000, 1, '2023-11-29'),
(00000000079, 12, 'lam', 18001008, 'TP.Quy Nhơn', 4, 1, 91000, 1, '2023-11-28'),
(00000000080, 12, 'mai đinh như ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 27000, 1, '2023-11-29'),
(00000000081, 12, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, '2023-11-30'),
(00000000082, 12, 'hương', 18001008, 'TP.Quy Nhơn', 6, 1, 240000, 1, '2023-11-30'),
(00000000083, 12, 'lam', 18001008, 'TP.Quy Nhơn', 2, 1, 92000, 1, '2023-11-30'),
(00000000084, 12, 'lam', 18001008, 'TP.Quy Nhơn', 2, 1, 30000, 1, '2023-11-30'),
(00000000085, 12, 'ksor h ngọc', 18001008, 'TP.Quy Nhơn', 1, 1, 30000, 1, '2023-11-30'),
(00000000086, 12, 'hương', 18001008, 'TP.Quy Nhơn', 5, 1, 50000, 1, '2023-11-30');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `danhmuc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `maDH` int(11) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT cho bảng `nhanvien`
--
ALTER TABLE `nhanvien`
  MODIFY `ma` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `cartegory_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
