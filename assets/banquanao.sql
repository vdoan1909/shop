-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 02, 2024 lúc 12:37 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banquanao`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `binh_luan`
--

CREATE TABLE `binh_luan` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `noi_dung` text NOT NULL,
  `ngay_bl` date NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang`
--

CREATE TABLE `don_hang` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `ten_nguoi_nhan` varchar(100) NOT NULL,
  `email_nguoi_nhan` varchar(255) NOT NULL,
  `sdt_nguoi_nhan` varchar(12) NOT NULL,
  `dc_nguoi_nhan` varchar(255) NOT NULL,
  `ghi_chu` text NOT NULL,
  `pttt` varchar(50) NOT NULL,
  `ngay_dat` date NOT NULL DEFAULT current_timestamp(),
  `tong_tien` int(11) NOT NULL,
  `tong_tien_da_tra` int(11) NOT NULL,
  `id_tt_don_hang` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang`
--

INSERT INTO `don_hang` (`id`, `id_kh`, `ten_nguoi_nhan`, `email_nguoi_nhan`, `sdt_nguoi_nhan`, `dc_nguoi_nhan`, `ghi_chu`, `pttt`, `ngay_dat`, `tong_tien`, `tong_tien_da_tra`, `id_tt_don_hang`) VALUES
(23, 3, 'Tôi k lấy', 'toiklay@gmail.com', '0333555999', 'America', 'Lấy 0 trả tiền', '2', '2024-01-02', 1550000, 1550000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `don_hang_ct`
--

CREATE TABLE `don_hang_ct` (
  `id` int(11) NOT NULL,
  `id_don_hang` int(11) NOT NULL,
  `id_sp_kc` varchar(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `qr` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `don_hang_ct`
--

INSERT INTO `don_hang_ct` (`id`, `id_don_hang`, `id_sp_kc`, `so_luong`, `gia`, `qr`) VALUES
(10, 23, '89,37', 2, 1550000, 'assets/qr/1704192717.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gio_hang`
--

CREATE TABLE `gio_hang` (
  `id` int(11) NOT NULL,
  `id_kh` int(11) NOT NULL,
  `id_sp_kc` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `kich_co`
--

CREATE TABLE `kich_co` (
  `id` int(11) NOT NULL,
  `kich_co` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `kich_co`
--

INSERT INTO `kich_co` (`id`, `kich_co`, `trang_thai`) VALUES
(1, 28, 1),
(2, 29, 1),
(3, 30, 1),
(4, 31, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phuong_thuc_thanh_toan`
--

CREATE TABLE `phuong_thuc_thanh_toan` (
  `id` int(11) NOT NULL,
  `pttt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `phuong_thuc_thanh_toan`
--

INSERT INTO `phuong_thuc_thanh_toan` (`id`, `pttt`) VALUES
(1, 'Trực tiếp'),
(2, 'Trực tuyến');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham_kichco`
--

CREATE TABLE `sanpham_kichco` (
  `id` int(11) NOT NULL,
  `id_sp` int(11) NOT NULL,
  `id_kc` int(11) NOT NULL,
  `so_luong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham_kichco`
--

INSERT INTO `sanpham_kichco` (`id`, `id_sp`, `id_kc`, `so_luong`, `gia`, `trang_thai`) VALUES
(1, 6, 1, 30, 750000, 1),
(2, 6, 2, 20, 750000, 1),
(3, 6, 3, 40, 750000, 1),
(4, 6, 4, 50, 750000, 1),
(5, 7, 1, 30, 600000, 1),
(6, 7, 3, 30, 600000, 1),
(7, 7, 4, 40, 600000, 1),
(8, 7, 2, 100, 600000, 1),
(9, 8, 1, 30, 500000, 1),
(10, 8, 2, 20, 500000, 1),
(11, 8, 3, 40, 500000, 1),
(12, 8, 4, 60, 500000, 1),
(13, 9, 1, 50, 700000, 1),
(14, 9, 2, 20, 700000, 1),
(15, 9, 3, 30, 700000, 1),
(16, 9, 4, 100, 700000, 1),
(17, 10, 1, 100, 600000, 1),
(18, 10, 2, 80, 600000, 1),
(19, 10, 3, 70, 600000, 1),
(20, 10, 4, 90, 600000, 1),
(21, 11, 1, 80, 500000, 1),
(22, 11, 2, 30, 500000, 1),
(23, 11, 3, 70, 500000, 1),
(24, 11, 4, 120, 500000, 1),
(25, 12, 1, 60, 650000, 1),
(26, 12, 2, 75, 650000, 1),
(27, 12, 3, 90, 650000, 1),
(28, 12, 4, 30, 650000, 1),
(29, 13, 1, 80, 600000, 1),
(30, 13, 2, 90, 600000, 1),
(31, 13, 3, 160, 600000, 1),
(32, 13, 4, 80, 600000, 1),
(33, 14, 1, 120, 900000, 1),
(34, 14, 2, 30, 900000, 1),
(35, 14, 3, 150, 900000, 1),
(36, 14, 4, 70, 900000, 1),
(37, 15, 1, 20, 600000, 1),
(38, 15, 2, 90, 600000, 1),
(39, 15, 3, 75, 600000, 1),
(40, 15, 4, 90, 600000, 1),
(41, 16, 1, 120, 900000, 1),
(42, 16, 2, 50, 900000, 1),
(43, 16, 3, 50, 900000, 1),
(44, 16, 4, 70, 900000, 1),
(45, 17, 1, 60, 800000, 1),
(46, 17, 2, 70, 800000, 1),
(47, 17, 3, 70, 800000, 1),
(48, 17, 4, 40, 800000, 1),
(49, 18, 1, 200, 500000, 1),
(50, 18, 2, 30, 500000, 1),
(51, 18, 3, 70, 500000, 1),
(52, 18, 4, 80, 500000, 1),
(53, 19, 1, 80, 1000000, 1),
(54, 19, 2, 60, 1000000, 1),
(55, 19, 3, 10, 1000000, 1),
(56, 19, 4, 75, 1000000, 1),
(57, 20, 1, 30, 950000, 1),
(58, 20, 2, 50, 950000, 1),
(59, 20, 3, 80, 950000, 1),
(60, 20, 4, 50, 950000, 1),
(61, 21, 1, 60, 750000, 1),
(62, 21, 2, 80, 750000, 1),
(63, 21, 3, 100, 750000, 1),
(64, 21, 4, 90, 750000, 1),
(65, 22, 1, 100, 950000, 1),
(66, 22, 2, 30, 950000, 1),
(67, 22, 3, 60, 950000, 1),
(68, 22, 4, 90, 950000, 1),
(69, 23, 1, 50, 1500000, 1),
(70, 23, 2, 80, 1500000, 1),
(71, 23, 3, 40, 1500000, 1),
(72, 23, 4, 120, 1500000, 1),
(73, 24, 1, 70, 1000000, 1),
(74, 24, 2, 65, 1000000, 1),
(75, 24, 3, 40, 1000000, 1),
(76, 24, 4, 50, 1000000, 1),
(77, 25, 1, 80, 1200000, 1),
(78, 25, 2, 90, 1200000, 1),
(79, 25, 3, 70, 1200000, 1),
(80, 25, 4, 85, 1200000, 1),
(81, 26, 1, 80, 900000, 1),
(82, 26, 2, 70, 900000, 1),
(83, 26, 3, 90, 900000, 1),
(84, 26, 4, 80, 900000, 1),
(85, 27, 1, 70, 890000, 1),
(86, 27, 2, 90, 890000, 1),
(87, 27, 3, 80, 890000, 1),
(88, 27, 4, 70, 890000, 1),
(89, 28, 1, 80, 950000, 1),
(90, 28, 2, 70, 950000, 1),
(91, 28, 3, 50, 950000, 1),
(92, 28, 4, 70, 950000, 1),
(93, 29, 1, 90, 900000, 1),
(94, 29, 2, 85, 900000, 1),
(95, 29, 3, 30, 900000, 1),
(96, 29, 4, 40, 900000, 1),
(97, 30, 1, 60, 650000, 1),
(98, 30, 2, 80, 650000, 1),
(99, 30, 3, 30, 650000, 1),
(100, 30, 4, 50, 650000, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_pham`
--

CREATE TABLE `san_pham` (
  `id` int(11) NOT NULL,
  `anh` varchar(255) NOT NULL,
  `ten` varchar(100) NOT NULL,
  `mo_ta` text NOT NULL,
  `id_the_loai` int(11) NOT NULL,
  `id_thuong_hieu` int(11) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`id`, `anh`, `ten`, `mo_ta`, `id_the_loai`, `id_thuong_hieu`, `trang_thai`) VALUES
(6, 'MDS010-023-Amiri-Jean-01.jpg', 'Amiri Logo-Patch Distressed Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(7, 'MDS015-403-Amiri-Jean-01.jpg', 'Amiri Distressed Logo-Print Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(8, 'F0M01161SD-ABL-01.jpg', 'Amiri Distressed Logo-Print Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(9, 'MDS052-030-Amiri-Jean-01.jpg', 'Amiri MX1 Camo Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(10, 'MDS030-403-Amiri-Jeans-01.jpg', 'Amiri Patchwork Distressed Slim Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(11, 'MDS004-030-Amiri-Jeans-01.jpg', 'Amiri Mid-Rise Ripped Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(12, 'MDS013-408-Amiri-Jeans-01-1.jpg', 'Amiri Hand Painted Slit Knee Jean Clay Indigo', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(13, 'MDS148-Amiri-Trousers-01.jpg', 'Amiri Old English Ripped Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(14, 'MDS028-Amiri-Jeans-01.jpg', 'Amiri Star Patch Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(15, 'w9m01187sd-01.jpg', 'Amiri Crystal Patch Distressed Skinny Jeans', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 2, 1, 1),
(16, 'MSS007-Amiri-Shirt-01.jpg', 'Amiri Wes Lang Dream Bowling Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(17, 'MSS011-Amiri-Shirt-01.jpg', 'Amiri Army Stencil Camp Short-Sleeve Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(18, 'MSS001-Amiri-Shirt-01-416x555.jpg', 'Amiri Paint Splatter Bowling Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(19, 'MSS004-420-Amiri-Shirt-01.jpg', 'Amiri Tropical Star Camp Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(20, 'MSS004-665-Amiri-Shirt-01.jpg', 'Amiri Tropical Star Camp Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(21, 'MSS005-440-Amiri-shirt-01.jpg', 'Amiri Blue Silk Faded Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(22, 'MSSX007-001-amiri-shirt-01-416x555.jpg', 'Amiri Rattlesnake Printed Silk Twill Shirt', 'Amiri – Hãng thời trang đường phố cao cấp đến từ Mỹ được sáng lập bởi Mike Amiri vào năm 2014. Là một trong những thương hiệu thời trang tuy non trẻ nhưng lại sớm giữ được vị trí sáng giá trong làng thời trang thế giới. Thương hiệu không chỉ mang đến những thiết kế trẻ trung mà còn khơi dậy những nét đẹp độc đáo của phong cách thời trang Rock ‘n’ Roll.', 1, 1, 1),
(23, '646850Y2C16-saint-laurent-shirt-01-416x555.jpg', 'Saint Laurent Floral Print Silk Shirt', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa cho nam và nữ. Sau khi Yves Saint Laurent nghỉ hưu vào năm 2002, Tom Ford từng thiết kế cho thương hiệu này. Hiện nay, nhà thiết kế Hedi Slimane đang giữ vai trò giám đốc sáng tạo. Từ khi Hedi Slimane gia nhập YSL năm 2012, nhà thiết kế này đã bỏ từ “Yves” ra khỏi tên thương hiệu và có nhiều cải cách đột phá, mang lại hình ảnh mới mẻ cho Saint Laurent.', 1, 2, 1),
(24, '646850Y2C86-1095-01-416x555.jpg', 'Saint Laurent Floral Printed Silk Shirt', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(25, '564172Y1B39-1095C-01-416x555.jpg', 'Saint Laurent Shirts', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(26, '564172Y341U-1095-01-416x555.jpg', 'Saint Laurent Wool Muslin Nino Head Shirts', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(27, '564172Y562U-1055-01-416x555.jpg', 'Saint Laurent Gold Floral Print Shirt', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(28, '583282Y227W-1000-01-416x555.jpg', 'Saint Laurent Glittery Collar Shirt', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(29, '520149Y1A78-1095-01-416x555.jpg', 'Saint Laurent Speckled Leopard Shirt', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 1, 2, 1),
(30, '587035YF8691080-01-416x555.jpg', 'Saint Laurent Black Cotton Jeans', 'Thương hiệu Yves Saint Laurent hay còn gọi là YSL được thành lập bởi nhà thiết kế Yves Saint Laurent và Pierre Bergé. Ngay từ khi ra mắt, YSL đã khiến mọi người sửng sốt khi cho phụ nữ mặc vest và áo choàng dài. Ngoài ra, thương hiệu này còn táo bạo khi sử dụng các chất liệu trong suốt trong thời gian này. Chính nhờ sự táo bạo và phá cách, YSL được nhiều thành viên quý tộc lẫn giới thượng lưu yêu thích. Năm 1966, Yves Saint Laurent giới thiệu bộ sưu tập Le Smoking huyền thoại. Ông được ghi nhận với một loạt các cải tiến khác bao gồm reefer jacket (1962), sheer blouse(1966), và jumpsuit (1968), thời trang công sở cũng như sự kết hợp giữa ready-to-wear và haute coulture. Yves Saint Laurent thiết lập tiêu chuẩn mới cho thời trang thế giới khi điều chỉnh các bộ tuxedo nam cho nữ, cũng từ đây, phong cách menswear bùng nổ và làm điên đảo giới mộ điệu thời trang. Năm 1978, Yves Saint Laurent lần đầu tiên cho ra đời một dòng mỹ phẩm. Trong những năm 1980-1990, thương hiệu tiếp tục mở rộng sản xuất các loại nước hoa c', 2, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tai_khoan`
--

CREATE TABLE `tai_khoan` (
  `id` int(11) NOT NULL,
  `anh` varchar(255) DEFAULT NULL,
  `ten` varchar(100) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `mat_khau` varchar(255) NOT NULL,
  `dia_chi` varchar(255) DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT 0,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`id`, `anh`, `ten`, `email`, `mat_khau`, `dia_chi`, `role`, `trang_thai`) VALUES
(1, NULL, NULL, 'admin@gmail.com', '1', NULL, 1, 1),
(2, '212c07c4ee1847461e09.jpg', 'Bố Đoàn Đại CA', 'dddoan1909@gmail.com', '1', 'America', 0, 1),
(3, NULL, NULL, 'accdemo1909@gmail.com', '1', NULL, 0, 1),
(7, NULL, NULL, 'doannvph33201@fpt.edu.vn', '1', NULL, 0, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `the_loai`
--

CREATE TABLE `the_loai` (
  `id` int(11) NOT NULL,
  `ten_loai` varchar(50) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `the_loai`
--

INSERT INTO `the_loai` (`id`, `ten_loai`, `trang_thai`) VALUES
(1, 'Áo', 1),
(2, 'Quần', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuong_hieu`
--

CREATE TABLE `thuong_hieu` (
  `id` int(11) NOT NULL,
  `ten_thuong_hieu` varchar(100) NOT NULL,
  `trang_thai` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `thuong_hieu`
--

INSERT INTO `thuong_hieu` (`id`, `ten_thuong_hieu`, `trang_thai`) VALUES
(1, 'Amiri', 1),
(2, 'Saint Laurent', 1),
(3, 'Louis Vuitton', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `trang_thai_don_hang`
--

CREATE TABLE `trang_thai_don_hang` (
  `id` int(11) NOT NULL,
  `trang_thai_don_hang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `trang_thai_don_hang`
--

INSERT INTO `trang_thai_don_hang` (`id`, `trang_thai_don_hang`) VALUES
(1, 'Chờ xử lý'),
(2, 'Đã xác nhận'),
(3, 'Đang vận chuyển'),
(4, 'Đã hoàn thành'),
(5, 'Đã huỷ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_bl` (`id_kh`),
  ADD KEY `fk_sp_bl` (`id_sp`);

--
-- Chỉ mục cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_dh` (`id_kh`),
  ADD KEY `fk_ttdh_dh` (`id_tt_don_hang`);

--
-- Chỉ mục cho bảng `don_hang_ct`
--
ALTER TABLE `don_hang_ct`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_dh_dhct` (`id_don_hang`);

--
-- Chỉ mục cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_kh_gh` (`id_kh`),
  ADD KEY `fk_spkc_gh` (`id_sp_kc`);

--
-- Chỉ mục cho bảng `kich_co`
--
ALTER TABLE `kich_co`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phuong_thuc_thanh_toan`
--
ALTER TABLE `phuong_thuc_thanh_toan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `sanpham_kichco`
--
ALTER TABLE `sanpham_kichco`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_sp_spkc` (`id_sp`),
  ADD KEY `fk_kc_spkc` (`id_kc`);

--
-- Chỉ mục cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_tl_sp` (`id_the_loai`),
  ADD KEY `fk_th_sp` (`id_thuong_hieu`);

--
-- Chỉ mục cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `don_hang_ct`
--
ALTER TABLE `don_hang_ct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT cho bảng `kich_co`
--
ALTER TABLE `kich_co`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `phuong_thuc_thanh_toan`
--
ALTER TABLE `phuong_thuc_thanh_toan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `sanpham_kichco`
--
ALTER TABLE `sanpham_kichco`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `tai_khoan`
--
ALTER TABLE `tai_khoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `the_loai`
--
ALTER TABLE `the_loai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `thuong_hieu`
--
ALTER TABLE `thuong_hieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `trang_thai_don_hang`
--
ALTER TABLE `trang_thai_don_hang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `binh_luan`
--
ALTER TABLE `binh_luan`
  ADD CONSTRAINT `fk_kh_bl` FOREIGN KEY (`id_kh`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `fk_sp_bl` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `don_hang`
--
ALTER TABLE `don_hang`
  ADD CONSTRAINT `fk_kh_dh` FOREIGN KEY (`id_kh`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `fk_ttdh_dh` FOREIGN KEY (`id_tt_don_hang`) REFERENCES `trang_thai_don_hang` (`id`);

--
-- Các ràng buộc cho bảng `don_hang_ct`
--
ALTER TABLE `don_hang_ct`
  ADD CONSTRAINT `fk_dh_dhct` FOREIGN KEY (`id_don_hang`) REFERENCES `don_hang` (`id`);

--
-- Các ràng buộc cho bảng `gio_hang`
--
ALTER TABLE `gio_hang`
  ADD CONSTRAINT `fk_kh_gh` FOREIGN KEY (`id_kh`) REFERENCES `tai_khoan` (`id`),
  ADD CONSTRAINT `fk_spkc_gh` FOREIGN KEY (`id_sp_kc`) REFERENCES `sanpham_kichco` (`id`);

--
-- Các ràng buộc cho bảng `sanpham_kichco`
--
ALTER TABLE `sanpham_kichco`
  ADD CONSTRAINT `fk_kc_spkc` FOREIGN KEY (`id_kc`) REFERENCES `kich_co` (`id`),
  ADD CONSTRAINT `fk_sp_spkc` FOREIGN KEY (`id_sp`) REFERENCES `san_pham` (`id`);

--
-- Các ràng buộc cho bảng `san_pham`
--
ALTER TABLE `san_pham`
  ADD CONSTRAINT `fk_th_sp` FOREIGN KEY (`id_thuong_hieu`) REFERENCES `thuong_hieu` (`id`),
  ADD CONSTRAINT `fk_tl_sp` FOREIGN KEY (`id_the_loai`) REFERENCES `the_loai` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
