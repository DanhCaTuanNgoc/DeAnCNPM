-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2024 at 05:05 PM
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
  `link` varchar(255) DEFAULT NULL
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
(23, '8654', 114, 2);

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
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `id_gh` int(11) NOT NULL,
  `id_khachhang` int(11) NOT NULL,
  `ma_gh` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL,
  `cart_date` date,
  `cart_payment` varchar(50) NOT NULL,
  `cart_shipping` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`id_gh`, `id_khachhang`, `ma_gh`, `trang_thai`) VALUES
(10, 11, '2946', 0),
(11, 11, '8262', 0),
(12, 11, '6879', 0),
(13, 11, '3410', 0),
(14, 11, '2870', 0),
(15, 11, '4500', 0),
(16, 14, '8654', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `id_sp` int(11) NOT NULL AUTO_INCREMENT,
  `ten_sp` varchar(200) NOT NULL,
  `ma_sp` varchar(100) NOT NULL,
  `gia_sp` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `hinh_anh` varchar(50),
  `tom_tat` TEXT NOT NULL,
  `noi_dung` LONGTEXT NOT NULL,
  `id_dm` int(11) NOT NULL,
  `tinh_trang` int(11) NOT NULL,
  PRIMARY KEY (`id_sp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`id_sp`, `ten_sp`, `ma_sp`, `gia_sp`, `so_luong`, `hinh_anh`, `tom_tat`, `noi_dung`, `id_dm`, `tinh_trang`) VALUES
(110, 'Áo t', 'fd', 100000, 10, 'chatluong.png', 'Áo', 'Tốt', 47, 1),
(112, 'quần Dài Yonex', 'quanyoxex', 100000, 20, 'quanyonex.png', 'quần', 'quần Yonex', 47, 0),
(113, 'quần Yonex', 'fd', 100000, 20, 'yoxex.png', 'ok', 'quần Yonex', 47, 1),
(114, 'áo thun', 'ao thun', 100000, 10, 'aothun.png', 'ao', 'ao', 47, 1);

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
(1,'Liên hệ website chúng tôi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giaohang`
--

CREATE TABLE `tbl_giaohang` (
  `id_shipping` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `note` varchar(200),  
  `id_dangky` int(11) NOT NULL,
 PRIMARY KEY (`id_shipping`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_lienhe`
--

INSERT INTO `tbl_giaohang` (`id_shipping`, `name`,`phone`,`address`,`note`) VALUES
(1,'Quốc Nguyễn',0931454176,'HCM','');

--
-- Table structure for table `tbl_momo`
--

CREATE TABLE `tbl_momo` (
  `partner_code` varchar(50) NOT NULL,
  `order_id` int(20) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `order_info` varchar(100),
  `order_type` varchar(50) NOT NULL,
  `trans_id` int(20) NOT NULL,
  `pay_type` varchar(50) NOT NULL,
  `code_cart` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_momo`
--

INSERT INTO `tbl_momo` (`partner_code`, `order_id`, `amount`,`order_info`,`order_type`,`trans_id`,`pay_type`,`code_cart`) VALUES
('0', 0, '0','','',0,'napas',''),
('1', 1, '0','','',1,'banking','');
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
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`id_gh`);

  --
-- Indexes for table `tbl_giaohang`
--
ALTER TABLE `tbl_giaohang`
  MODIFY `id_shipping` int(11) NOT NULL AUTO_INCREMENT;

-- --
-- -- Indexes for table `tbl_sanpham`
-- --
-- ALTER TABLE `tbl_sanpham`
--   ADD PRIMARY KEY (`id_sp`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_chitiet_gh`
--
ALTER TABLE `tbl_chitiet_gh`
  MODIFY `id_ctgh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

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
  MODIFY `id_gh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `id_sp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
