-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2024 at 06:26 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_quanao`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_ad` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `admin_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_ad`, `user_name`, `password`, `admin_status`) VALUES
(4, 'admin', '202cb962ac59075b964b07152d234b70', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_baiviet`
--

CREATE TABLE `tbl_baiviet` (
  `id` int(11) NOT NULL,
  `tenbaiviet` varchar(255) NOT NULL,
  `tomtat` mediumtext NOT NULL,
  `noidung` longtext NOT NULL,
  `id_danhmuc` int(11) NOT NULL,
  `tinhtrang` int(11) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_baiviet`
--

INSERT INTO `tbl_baiviet` (`id`, `tenbaiviet`, `tomtat`, `noidung`, `id_danhmuc`, `tinhtrang`, `hinhanh`, `link`) VALUES
(2, 'MU chậm sa thải Ten Hag', 'Summary for MU chậm sa thải Ten Hag', 'Content for MU chậm sa thải Ten Hag', 1, 1, 'tin1.jpg', 'https://www.24h.com.vn/bong-da/nong-bang-xep-hang-ngoai-hang-anh-mu-te-nhat-lich-su-chelsea-lung-lay-top-4-c48a1608578.html'),
(3, 'BXH Ngoại hạng Anh: MU tệ nhất lịch sử, Chelsea lung lay top 4', 'Summary for BXH Ngoại hạng Anh', 'Content for BXH Ngoại hạng Anh', 1, 1, 'tin2.jpg', 'https://www.24h.com.vn/bong-da/ten-hag-biet-cui-dau-ai-da-cuu-thay-tam-song-sot-qua-giong-bao-c48a1608663.html'),
(4, 'Ten Hag cúi đầu: Ai đã cứu thầy tạm sống sót?', 'Summary for Ten Hag cúi đầu', 'Content for Ten Hag cúi đầu', 1, 1, 'tin3.jpg', 'https://www.24h.com.vn/bong-da/lewandowski-ghi-3-ban-dinh-cao-bat-kip-haaland-dua-chiec-giay-vang-c48a1608595.html'),
(5, 'Lewandowski ghi 3 bàn đỉnh cao, bắt kịp Haaland đua Chiếc Giày Vàng', 'Summary for Lewandowski', 'Content for Lewandowski', 1, 1, 'tin4.jpg', 'https://www.24h.com.vn/bong-da/xau-ho-dan-sao-mu-thua-ong-gia-36-tuoi-rashford-bi-nghi-noi-xau-ten-hag-c48a1608619.html'),
(6, 'Xấu hổ: Dàn sao MU thua ông già 36 tuổi, Rashford bị nghi nói xấu Ten Hag', 'Summary for MU thua ông già 36 tuổi', 'Content for MU thua ông già 36 tuổi', 1, 1, 'tin5.jpg', 'https://www.24h.com.vn/bong-da/video-bong-da-brighton-tottenham-hang-cong-thang-hoa-ngoai-hang-anh-c48a1608573.html'),
(8, 'Video bóng đá: Brighton - Tottenham, hàng công thăng hoa', 'Summary for Brighton vs Tottenham', 'Content for Brighton vs Tottenham', 1, 1, 'tin7.jpg', 'https://www.24h.com.vn/bong-da/video-bong-da-sociedad-atletico-alvarez-ghi-ban-giay-51-la-liga-c48a1608577.html'),
(9, 'Video futsal: Brazil - Argentina, đăng quang kịch tính chung kết Futsal World Cup', 'Summary for Brazil vs Argentina Futsal', 'Content for Brazil vs Argentina Futsal', 1, 1, 'tin8.jpg', 'https://www.24h.com.vn/bong-da/video-futsal-brazil-argentina-dang-quang-kich-tinh-chung-ket-futsal-world-cup-c48a1608596.html'),
(10, 'Video bóng đá: Sociedad - Atletico, Alvarez ghi bàn giây 51', 'Summary for Sociedad vs Atletico', 'Content for Sociedad vs Atletico', 1, 1, 'tin9.jpg', 'https://www.24h.com.vn/bong-da/video-bong-da-sociedad-atletico-alvarez-ghi-ban-giay-51-la-liga-c48a1608577.html');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chitiet_gh`
--

CREATE TABLE `tbl_chitiet_gh` (
  `id_ctgh` int(11) NOT NULL,
  `ma_gh` varchar(100) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `so_luong_mua` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_chitiet_gh`
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
(22, '4500', 104, 10),
(23, '8654', 114, 2),
(24, '7090', 115, 1),
(25, '8179', 116, 1),
(26, '3916', 117, 1),
(27, '8287', 117, 3),
(28, '5195', 119, 1),
(29, '4131', 118, 1),
(30, '2652', 119, 1),
(31, '2652', 117, 1),
(32, '2652', 115, 1),
(33, '72', 118, 1),
(34, '9416', 118, 1),
(35, '5720', 118, 1),
(36, '2943', 118, 1),
(37, '9742', 118, 1),
(38, '1329', 118, 1),
(39, '5938', 118, 1),
(40, '5293', 118, 1),
(41, '8959', 118, 1),
(42, '679', 118, 1),
(43, '4313', 117, 1),
(44, '1710', 117, 1),
(45, '5420', 117, 1),
(46, '6677', 117, 1),
(47, '809', 117, 1),
(48, '7771', 117, 1),
(49, '9110', 117, 1),
(50, '9450', 117, 1),
(51, '3409', 117, 1),
(52, '5213', 117, 1),
(53, '8036', 117, 1),
(54, '8375', 117, 1),
(55, '6532', 117, 1),
(56, '6932', 117, 1),
(57, '9226', 117, 1),
(58, '6338', 117, 1),
(59, '7105', 117, 1),
(60, '3237', 117, 1),
(61, '410', 117, 1),
(62, '3772', 117, 1),
(63, '9125', 117, 1),
(64, '9521', 117, 1),
(65, '3195', 117, 1),
(66, '747', 117, 1),
(67, '1950', 117, 1),
(68, '6839', 117, 1),
(69, '2742', 117, 1),
(70, '1716', 117, 1),
(71, '1668', 117, 1),
(72, '7804', 117, 1),
(73, '4963', 117, 1),
(74, '913', 117, 1),
(75, '5125', 117, 1),
(76, '8263', 117, 1),
(77, '1693', 117, 1),
(78, '7777', 117, 1),
(79, '8808', 117, 1),
(80, '8785', 117, 2),
(81, '8785', 117, 2),
(82, '6436', 116, 2),
(83, '3347', 116, 2),
(84, '3282', 115, 1),
(85, '2615', 115, 1),
(86, '8658', 115, 2),
(87, '4844', 115, 1),
(88, '5221', 115, 1),
(89, '6297', 116, 1),
(90, '3176', 115, 1),
(91, '7215', 117, 1),
(92, '5113', 119, 1),
(93, '2299', 119, 1),
(94, '7570', 121, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dangky`
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
-- Dumping data for table `tbl_dangky`
--

INSERT INTO `tbl_dangky` (`id_dangky`, `ten_khachhang`, `email`, `dia_chi`, `mat_khau`, `dien_thoai`) VALUES
(11, 'Lương Thanh Tuấn', 'luongthanhtuan525@gmail.com', 'PJ3X+GH8, KDC 13E, Đô thị mới Nam Thành Phố, Ấp 5, Bình Chánh, TP. Hồ Chí Minh', '202cb962ac59075b964b07152d234b70', '0363296105'),
(13, 'thanh thanh', 'luongthanhtuan474@gmail.com', 'luongthanhtuan525@gmail.comluongthanhtuan525@gmail.comluongthanhtuan525@gmail.comluongthanhtuan525@gmail.com', '202cb962ac59075b964b07152d234b70', '213414124'),
(14, 'ngọc tuấn', 'ngoctuan090904@gmail.com', 'Hóc Môn', '202cb962ac59075b964b07152d234b70', '0768893544');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmucqa`
--

CREATE TABLE `tbl_danhmucqa` (
  `id_dm` int(11) NOT NULL,
  `name_sp` varchar(100) NOT NULL,
  `thu_tu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmucqa`
--

INSERT INTO `tbl_danhmucqa` (`id_dm`, `name_sp`, `thu_tu`) VALUES
(47, 'ao yonex', 1),
(48, 'ao mc', 2),
(51, 'ao fc', 2),
(52, 'ao mu', 44);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_danhmuc_baiviet`
--

CREATE TABLE `tbl_danhmuc_baiviet` (
  `id_baiviet` int(11) NOT NULL,
  `tendanhmuc_baiviet` varchar(255) NOT NULL,
  `thutu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_danhmuc_baiviet`
--

INSERT INTO `tbl_danhmuc_baiviet` (`id_baiviet`, `tendanhmuc_baiviet`, `thutu`) VALUES
(0, 'truyentranh2', 34),
(9, 'truyentranh1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giaohang`
--

CREATE TABLE `tbl_giaohang` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(200) DEFAULT NULL,
  `id_dangky` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_giaohang`
--

INSERT INTO `tbl_giaohang` (`id_shipping`, `name`, `phone`, `address`, `note`, `id_dangky`) VALUES
(0, 'Cuong Nguyen', '0768893544', 'Hóc môn', 'ád', 14),
(1, 'Quốc Nguyễn', '931454176', 'HCM', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_gh` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `ma_gh` varchar(100) NOT NULL,
  `cart_date` varchar(100) NOT NULL,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_gh`, `id_khachhang`, `ma_gh`, `cart_date`, `cart_payment`, `cart_shipping`, `trang_thai`) VALUES
(10, 11, '2946', '', '', 0, 0),
(11, 11, '8262', '', '', 0, 0),
(12, 11, '6879', '', '', 0, 0),
(13, 11, '3410', '', '', 0, 0),
(14, 11, '2870', '', '', 0, 0),
(15, 11, '4500', '', '', 0, 0),
(16, 14, '8654', '', '', 0, 0),
(18, 14, '8762', '2024-10-09 08:53:57', '', 0, 0),
(19, 14, '7090', '2024-10-09 08:57:06', '', 0, 0),
(20, 14, '8179', '2024-10-09 08:59:06', '', 0, 0),
(21, 14, '3916', '2024-10-09 18:36:49', '', 0, 1),
(22, 14, '8287', '2024-10-09 18:37:15', '', 0, 1),
(23, 14, '5195', '2024-10-12 08:30:00', '', 0, 0),
(24, 14, '4131', '2024-10-12 08:41:52', '', 0, 1),
(25, 14, '2652', '2024-10-12 08:49:15', '', 0, 1),
(26, 14, '72', '2024-10-16 08:19:12', '', 0, 1),
(27, 14, '9416', '2024-10-16 08:24:56', '', 0, 1),
(28, 14, '5720', '2024-10-16 08:30:44', '', 0, 1),
(29, 14, '2943', '2024-10-16 08:32:38', '', 0, 1),
(30, 14, '9742', '2024-10-16 08:34:01', '', 0, 1),
(31, 14, '1329', '2024-10-16 08:34:37', '', 0, 1),
(32, 14, '5938', '2024-10-16 08:35:16', '', 0, 1),
(33, 14, '5293', '2024-10-16 08:35:22', 'tienmat', 0, 1),
(34, 14, '8959', '2024-10-16 08:40:28', 'tienmat', 0, 1),
(35, 14, '679', '2024-10-16 08:41:26', 'tienmat', 0, 1),
(36, 14, '4313', '2024-10-16 08:43:41', '', 0, 1),
(37, 14, '1710', '2024-10-16 08:44:05', 'tienmat', 0, 1),
(38, 14, '5420', '2024-10-16 08:47:31', 'tienmat', 0, 1),
(39, 14, '6677', '2024-10-16 08:48:17', 'tienmat', 0, 1),
(40, 14, '809', '2024-10-16 08:48:25', '', 0, 1),
(41, 14, '7771', '2024-10-16 08:49:02', '', 0, 1),
(42, 14, '9110', '2024-10-16 08:49:39', '', 0, 1),
(43, 14, '9450', '2024-10-16 08:49:58', 'tienmat', 0, 1),
(44, 14, '3409', '2024-10-16 08:53:05', '', 0, 1),
(45, 14, '5213', '2024-10-16 08:56:39', '', 0, 1),
(46, 14, '8036', '2024-10-16 08:57:06', '', 0, 1),
(47, 14, '8375', '2024-10-16 08:57:40', '', 0, 1),
(48, 14, '6532', '2024-10-16 08:58:31', '', 0, 1),
(49, 14, '6932', '2024-10-16 09:00:05', '', 0, 1),
(50, 14, '9226', '2024-10-16 09:01:33', '', 0, 1),
(51, 14, '6338', '2024-10-16 09:08:11', '', 0, 1),
(52, 14, '7105', '2024-10-16 09:09:07', 'tienmat', 0, 1),
(53, 14, '3237', '2024-10-16 09:09:55', '', 0, 1),
(54, 14, '410', '2024-10-16 09:12:56', '', 0, 1),
(55, 14, '3772', '2024-10-16 09:13:08', '', 0, 1),
(56, 14, '9125', '2024-10-16 09:14:10', '', 0, 1),
(57, 14, '9521', '2024-10-16 09:14:52', '', 0, 1),
(58, 14, '3195', '2024-10-16 09:16:07', '', 0, 1),
(59, 14, '747', '2024-10-16 09:18:29', '', 0, 1),
(60, 14, '1950', '2024-10-16 09:23:14', '', 0, 1),
(61, 14, '6839', '2024-10-16 09:23:51', '', 0, 1),
(62, 14, '2742', '2024-10-16 09:24:45', '', 0, 1),
(63, 14, '1716', '2024-10-16 09:27:08', '', 0, 1),
(64, 14, '1668', '2024-10-16 09:28:28', '', 0, 1),
(65, 14, '7804', '2024-10-16 09:29:23', '', 0, 1),
(67, 14, '913', '2024-10-16 09:51:51', 'chuyenkhoan', 0, 1),
(68, 14, '5125', '2024-10-16 09:52:18', 'chuyenkhoan', 0, 1),
(70, 14, '1693', '2024-10-16 09:53:20', 'tienmat', 0, 1),
(71, 14, '7777', '2024-10-16 09:53:34', 'tienmat', 0, 1),
(72, 14, '8808', '2024-10-16 09:59:23', 'tienmat', 0, 1),
(73, 14, '8785', '2024-10-16 10:03:26', 'tienmat', 0, 1),
(74, 14, '8785', '2024-10-16 10:03:26', '', 0, 1),
(75, 14, '7154', '2024-10-16 10:03:36', 'tienmat', 0, 1),
(76, 14, '7154', '2024-10-16 10:03:36', '', 0, 1),
(77, 14, '6436', '2024-10-16 10:04:44', 'tienmat', 0, 1),
(78, 14, '3347', '2024-10-16 10:05:27', 'tienmat', 0, 1),
(79, 14, '3282', '2024-10-16 10:06:18', '', 0, 1),
(80, 14, '2615', '2024-10-16 10:10:59', '', 0, 1),
(81, 14, '8658', '2024-10-16 10:14:33', '', 0, 1),
(82, 14, '4844', '2024-10-16 10:20:49', '', 0, 1),
(83, 14, '5221', '2024-10-16 10:25:33', '', 0, 1),
(84, 14, '6297', '2024-10-16 10:29:23', 'tienmat', 0, 1),
(85, 14, '3176', '2024-10-16 10:33:01', '', 0, 1),
(86, 14, '7215', '2024-10-16 10:35:01', '', 0, 1),
(87, 14, '5113', '2024-10-16 10:36:20', '', 0, 1),
(89, 14, '7570', '2024-10-17 11:14:10', 'tienmat', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khuyenmai`
--

CREATE TABLE `tbl_khuyenmai` (
  `id_km` int(11) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `giamgia` varchar(10) NOT NULL,
  `ngay_bat_dau` date NOT NULL,
  `ngay_ket_thuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lienhe`
--

CREATE TABLE `tbl_lienhe` (
  `id` int(11) NOT NULL,
  `thongtinlienhe` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_lienhe` (`id`, `thongtinlienhe`) VALUES
(1, ' liên hệ website chúng tôi \r\n liên hệ mới');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `id_momo` int(20) NOT NULL,
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100) DEFAULT NULL,
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(20) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`id_momo`, `partner_code`, `order_id`, `amount`, `order_info`, `order_type`, `trans_id`, `pay_type`, `code_cart`) VALUES
(0, '0', 0, '0', '', '', 0, 'napas', ''),
(1, '1', 1, '0', '', '', 1, 'banking', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL,
  `ten_sp` varchar(200) NOT NULL,
  `ma_sp` varchar(100) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `so_luong_con_lai` int(11) NOT NULL,
  `hinh_anh` varchar(50) NOT NULL,
  `tom_tat` tinytext NOT NULL,
  `noi_dung` text NOT NULL,
  `id_dm` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `ma_sp`, `gia_sp`, `so_luong`, `so_luong_con_lai`, `hinh_anh`, `tom_tat`, `noi_dung`, `id_dm`, `tinh_trang`) VALUES
(115, 'Áo MU', '10', 300000, 100, 0, 'aoMU.png', 'áo ', 'áo', 52, 1),
(116, 'Áo MC', '5', 400000, 110, 0, 'aoMC.png', 'áo', 'áo', 48, 1),
(117, 'Yonex', '10', 200000, 100, 0, 'aoYONEX.png', 'yonex', 'yonex', 47, 1),
(119, 'Yonex3', '3', 200000, 100, 0, 'aoYONEX.png', '', '', 47, 1),
(121, 'áo mới', '1230', 100000, 9, 8, 'nguyenhaiblog_com.jfif', '9', '9', 52, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thongke`
--

CREATE TABLE `tbl_thongke` (
  `id` int(11) NOT NULL,
  `ngaydat` varchar(20) NOT NULL,
  `donhang` int(11) NOT NULL,
  `doanhthu` varchar(100) NOT NULL,
  `soluongdaban` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_thongke`
--

INSERT INTO `tbl_thongke` (`id`, `ngaydat`, `donhang`, `doanhthu`, `soluongdaban`) VALUES
(1, '2024-10-09', 4, '800000', 4),
(2, '2024-10-01', 1, '100000', 4),
(3, '2024-09-01', 2, '200000', 10),
(4, '2024-08-01', 5, '2500000', 5),
(5, '2024-10-12', 1, '200000', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_thuonghieu`
--

CREATE TABLE `tbl_thuonghieu` (
  `id_thuonghieu` int(11) NOT NULL,
  `tenthuonghieu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vnpay`
--

CREATE TABLE `tbl_vnpay` (
  `id_vnpay` int(11) NOT NULL,
  `vnp_amount` varchar(50) NOT NULL,
  `vnp_bankcode` varchar(50) NOT NULL,
  `vnp_banktranno` varchar(50) NOT NULL,
  `vnp_cardtype` varchar(50) NOT NULL,
  `vnp_orderinfo` varchar(100) NOT NULL,
  `vnp_paydate` varchar(50) NOT NULL,
  `vnp_tmncode` varchar(50) NOT NULL,
  `vnp_transactionno` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_vnpay`
--

INSERT INTO `tbl_vnpay` (`id_vnpay`, `vnp_amount`, `vnp_bankcode`, `vnp_banktranno`, `vnp_cardtype`, `vnp_orderinfo`, `vnp_paydate`, `vnp_tmncode`, `vnp_transactionno`, `code_cart`) VALUES
(1, '1000000', 'NCB', 'VNP14613309', 'ATM', 'Thanh toán đơn hàng', '20241014123808', 'IZK6416P', '14613309', '7303'),
(2, '', '', '', '', '', '', '', '', ''),
(3, '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', ''),
(5, '20000000', 'NCB', 'VNP14616085', 'ATM', 'Thanh toán đơn hàng', '20241016103802', 'IZK6416P', '14616085', '2299'),
(6, '20000000', 'NCB', 'VNP14616085', 'ATM', 'Thanh toán đơn hàng', '20241016103802', 'IZK6416P', '14616085', '2299');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_ad`);

--
-- Indexes for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_danhmuc` (`id_danhmuc`);

--
-- Indexes for table `tbl_chitiet_gh`
--
ALTER TABLE `tbl_chitiet_gh`
  ADD PRIMARY KEY (`id_ctgh`);

--
-- Indexes for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  ADD PRIMARY KEY (`id_dangky`);

--
-- Indexes for table `tbl_danhmucqa`
--
ALTER TABLE `tbl_danhmucqa`
  ADD PRIMARY KEY (`id_dm`);

--
-- Indexes for table `tbl_danhmuc_baiviet`
--
ALTER TABLE `tbl_danhmuc_baiviet`
  ADD PRIMARY KEY (`id_baiviet`);

--
-- Indexes for table `tbl_giaohang`
--
ALTER TABLE `tbl_giaohang`
  ADD PRIMARY KEY (`id_shipping`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_gh`);

--
-- Indexes for table `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  ADD PRIMARY KEY (`id_km`);

--
-- Indexes for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`id_sp`);

--
-- Indexes for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  ADD PRIMARY KEY (`id_thuonghieu`);

--
-- Indexes for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  ADD PRIMARY KEY (`id_vnpay`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_ad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_baiviet`
--
ALTER TABLE `tbl_baiviet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_chitiet_gh`
--
ALTER TABLE `tbl_chitiet_gh`
  MODIFY `id_ctgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tbl_dangky`
--
ALTER TABLE `tbl_dangky`
  MODIFY `id_dangky` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_danhmucqa`
--
ALTER TABLE `tbl_danhmucqa`
  MODIFY `id_dm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_danhmuc_baiviet`
--
ALTER TABLE `tbl_danhmuc_baiviet`
  MODIFY `id_baiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `tbl_khuyenmai`
--
ALTER TABLE `tbl_khuyenmai`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_lienhe`
--
ALTER TABLE `tbl_lienhe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `tbl_thongke`
--
ALTER TABLE `tbl_thongke`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_thuonghieu`
--
ALTER TABLE `tbl_thuonghieu`
  MODIFY `id_thuonghieu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vnpay`
--
ALTER TABLE `tbl_vnpay`
  MODIFY `id_vnpay` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
