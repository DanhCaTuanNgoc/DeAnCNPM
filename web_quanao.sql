-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 02, 2024 lúc 04:03 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_quanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_ad` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_ad`, `user_name`, `password`, `admin_status`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_chitiet_gh`
--

CREATE TABLE `tbl_chitiet_gh` (
  `id_ctgh` int(11) NOT NULL,
  `ma_gh` varchar(100) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong_mua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_chitiet_gh`
--

INSERT INTO `tbl_chitiet_gh` (`id_ctgh`, `ma_gh`, `id_sp`, `so_luong_mua`) VALUES
(14, '2946', 113, 1),
(15, '8262', 114, 1),
(16, '6879', 112, 1),
(17, '3410', 113, 2),
(18, '3410', 112, 2),
(19, '2870', 113, 2),
(20, '2870', 112, 2),
(21, '2870', 110, 3),
(22, '4500', 104, 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_dangky`
--

CREATE TABLE `tbl_dangky` (
  `id_dangky` int(11) NOT NULL,
  `ten_khachhang` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dia_chi` varchar(200) NOT NULL,
  `mat_khau` varchar(100) NOT NULL,
  `dien_thoai` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `ten_khachhang`, `email`, `dia_chi`, `mat_khau`, `dien_thoai`) VALUES
(11, 'Lương Thanh Tuấn', 'luongthanhtuan525@gmail.com', 'PJ3X+GH8, KDC 13E, Đô thị mới Nam Thành Phố, Ấp 5, Bình Chánh, TP. Hồ Chí Minh', '202cb962ac59075b964b07152d234b70', '0363296105'),
(13, 'thanh thanh', 'luongthanhtuan474@gmail.com', 'luongthanhtuan525@gmail.comluongthanhtuan525@gmail.comluongthanhtuan525@gmail.comluongthanhtuan525@gmail.com', '202cb962ac59075b964b07152d234b70', '213414124');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmucqa`
--

CREATE TABLE `tbl_danhmucqa` (
  `id_dm` int(11) NOT NULL,
  `name_sp` varchar(100) NOT NULL,
  `thu_tu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmucqa`
--

INSERT INTO `tbl_danhmucqa` (`id_dm`, `name_sp`, `thu_tu`) VALUES
(47, 'ao yonex', 1),
(48, 'ao mc', 2),
(51, 'ao fc', 2),
(52, 'ao mu', 44);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_danhmuctt`
--

CREATE TABLE `tbl_danhmuctt` (
  `id_tt` int(11) NOT NULL,
  `name_tt` varchar(255) NOT NULL,
  `thu_tu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_danhmuctt`
--

INSERT INTO `tbl_danhmuctt` (`id_tt`, `name_tt`, `thu_tu`) VALUES
(7, 'd', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_gh` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `ma_gh` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_gh`, `id_khachhang`, `ma_gh`, `trang_thai`) VALUES
(10, 11, '2946', 0),
(11, 11, '8262', 0),
(12, 11, '6879', 0),
(13, 11, '3410', 0),
(14, 11, '2870', 0),
(15, 11, '4500', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(200) NOT NULL,
  `ma_sp` varchar(100) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `tom_tat` tinytext NOT NULL,
  `noi_dung` text NOT NULL,
  `tinh_trang` varchar(50) NOT NULL,
  `id_dm` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `ma_sp`, `gia_sp`, `so_luong`, `hinh_anh`, `tom_tat`, `noi_dung`, `tinh_trang`, `id_dm`) VALUES
(104, 'ao mu sieu dep', 'mu_1', 1, 1, 'aoMU.png', '1', '1', '1', 52),
(105, 'ao mu sieu dep', 'mu_2', 2, 2, 'aoMU.png', '1', '1', '1', 52),
(106, 'ao mu sieu dep', 'mu_3', 3, 3, 'aoMU.png', '1', '1', '1', 52),
(107, 'Ao Yonex dep', 'yn_1', 1, 1, 'aoYONEX.png', '1', '1', '1', 47),
(108, 'Ao Yonex dep', 'yn_2', 2, 2, 'aoYONEX.png', '1', '1', '1', 47),
(109, 'ao mu sieu dep', 'yn_3', 300, 3, 'aoYONEX.png', '1', '1', '1', 47),
(110, 'ao mu dang cap', 'mu_4', 4, 4, 'aoMU.png', '1', '1', '1', 52),
(113, 'ao mc sieu depp', 'mc_4', 44, 4, 'aoMC.png', '1', '1', '1', 48);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Chỉ mục cho bảng `tbl_chitiet_gh`
--
ALTER TABLE `tbl_chitiet_gh`
  ADD PRIMARY KEY (`id_ctgh`);

--
-- Chỉ mục cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Chỉ mục cho bảng `tbl_danhmucqa`
--
ALTER TABLE `tbl_danhmucqa`
  ADD PRIMARY KEY (`id_dm`) USING BTREE;

--
-- Chỉ mục cho bảng `tbl_danhmuctt`
--
ALTER TABLE `tbl_danhmuctt`
  ADD PRIMARY KEY (`id_tt`);

--
-- Chỉ mục cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Chỉ mục cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tbl_chitiet_gh`
--
ALTER TABLE `tbl_chitiet_gh`
  MODIFY `id_ctgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmucqa`
--
ALTER TABLE `tbl_danhmucqa`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `tbl_danhmuctt`
--
ALTER TABLE `tbl_danhmuctt`
  MODIFY `id_tt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
