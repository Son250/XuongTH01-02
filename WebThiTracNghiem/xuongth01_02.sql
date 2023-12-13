-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 13, 2023 lúc 02:43 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xuongth01_02`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

CREATE TABLE `cauhoi` (
  `id_ch` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung câu hỏi (Đề bài)',
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_cd` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id_ch`, `content`, `image`, `id_cd`) VALUES
(26, '1 + 1 = ?', 'con vịt.png', 1),
(27, '2 + 2 = ?', 'cauhoi-removebg-preview.png', 1),
(28, '3 + 3 = ?', 'top10.jpg', 1),
(30, '4 + 4 = ?', 'kythi-removebg-preview.png', 1),
(31, '1 x 1 = ?', 'cauhoi-removebg-preview.png', 9),
(33, '1 + 3 = ?', '', 1),
(34, '5 + 6 = ?', '', 1),
(35, '5 x 5 = ?', '', 1),
(36, '2 : 2 = ?', '', 1),
(37, '10 + 10 = ?', 'con vịt.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyende`
--

CREATE TABLE `chuyende` (
  `id_cd` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên chuyên đề',
  `image_cd` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyende`
--

INSERT INTO `chuyende` (`id_cd`, `name`, `image_cd`) VALUES
(1, 'Chuyên đề thi kì 2 Toán lớp 3', 'sach-giao-khoa-toan-lop-3.jpg'),
(9, 'Chuyên đề thi kì 1 Toán lớp 4', 'Toan-4.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dapan`
--

CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `content_dapan` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung đáp án',
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `right_answer` enum('1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '1 Đúng, 2 Sai',
  `id_question` int(11) NOT NULL COMMENT 'Id câu hỏi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dapan`
--

INSERT INTO `dapan` (`id`, `content_dapan`, `image`, `right_answer`, `id_question`) VALUES
(32, '2', '1700923091_cta-bg.jpg', '1', 26),
(36, '4', NULL, '1', 27),
(46, '5', '', '2', 27),
(47, '7', '', '2', 27),
(48, '10', '', '2', 27),
(51, '6', '1700929858_logo-cong-ty-removebg-preview.png', '2', 26),
(52, '5', '', '2', 30),
(54, '19', '', '2', 37),
(57, '1', '', '1', 31),
(58, '2', '', '2', 31),
(59, '4', '', '2', 31),
(60, '10', '', '2', 31),
(61, '8', '', '1', 30),
(63, '9', '', '2', 30),
(64, '10', '', '2', 30),
(65, '5', '', '2', 33),
(66, '6', '', '2', 33),
(67, '7', '', '2', 33),
(68, '4', '', '1', 33),
(69, '6', '', '1', 28),
(70, '4', '', '2', 28),
(71, '3', '', '2', 28),
(72, '7', '', '2', 28),
(73, '10', '', '2', 34),
(74, '11', '', '1', 34),
(75, '12', '', '2', 34),
(76, '13', '', '2', 34),
(77, '1', '', '1', 36),
(78, '3', '', '2', 36),
(79, '4', '', '2', 36),
(80, '6', '', '2', 36),
(81, '20', '', '1', 37),
(82, '20', '', '2', 35),
(83, '25', '', '1', 35);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dethi`
--

CREATE TABLE `dethi` (
  `id` int(11) NOT NULL,
  `ten_de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_lichthi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dethi`
--

INSERT INTO `dethi` (`id`, `ten_de`, `id_lichthi`) VALUES
(1, 'Đề 1', 1),
(11, 'Đề 4', 5),
(12, 'Đề 1', 1),
(13, 'Đề 2', 1),
(14, 'Đề 1', 5),
(15, 'Đề 2', 5),
(16, 'Đề 3', 5),
(17, 'Đề 4', 5);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dethi_cauhoi`
--

CREATE TABLE `dethi_cauhoi` (
  `id` int(11) NOT NULL,
  `id_dethi` int(11) NOT NULL,
  `id_cauhoi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dethi_cauhoi`
--

INSERT INTO `dethi_cauhoi` (`id`, `id_dethi`, `id_cauhoi`) VALUES
(61, 12, 26),
(62, 12, 28),
(63, 13, 26),
(64, 13, 33),
(65, 14, 31),
(66, 14, 27),
(67, 14, 30),
(68, 14, 33),
(69, 14, 35),
(70, 14, 37),
(71, 14, 26),
(72, 14, 28),
(73, 14, 34),
(74, 14, 36),
(75, 15, 31),
(76, 15, 27),
(77, 15, 30),
(78, 15, 33),
(79, 15, 35),
(80, 15, 37),
(81, 15, 26),
(82, 15, 28),
(83, 15, 34),
(84, 15, 36),
(85, 16, 31),
(86, 16, 27),
(87, 16, 30),
(88, 16, 33),
(89, 16, 35),
(90, 16, 37),
(91, 16, 26),
(92, 16, 28),
(93, 16, 34),
(94, 16, 36),
(95, 17, 31),
(96, 17, 27),
(97, 17, 30),
(98, 17, 33),
(99, 17, 35),
(100, 17, 37),
(101, 17, 26),
(102, 17, 28),
(103, 17, 34),
(104, 17, 36);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `id` int(11) NOT NULL,
  `bo_ket_qua` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Bộ kết quả',
  `id_nguoi_dung` int(11) NOT NULL,
  `id_de_thi` int(11) NOT NULL,
  `id_lichthi` int(11) NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`id`, `bo_ket_qua`, `id_nguoi_dung`, `id_de_thi`, `id_lichthi`, `diem`) VALUES
(1, '2 kết quả', 2, 1, 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên lịch thi(tên kì thi)',
  `image_lt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `time_start` datetime NOT NULL COMMENT 'TG bắt đầu làm bài',
  `time_end` datetime NOT NULL COMMENT 'TG kết thúc làm bài',
  `time` int(11) NOT NULL COMMENT 'TG làm bài (vd: 45p)',
  `so_de_thi` int(11) NOT NULL COMMENT 'Số lượng đề thi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichthi`
--

INSERT INTO `lichthi` (`id`, `name`, `image_lt`, `time_start`, `time_end`, `time`, `so_de_thi`) VALUES
(1, 'Thi cuối kỳ 2 ', 'dt-tieng-viet-3-kn-1683271244.png', '2023-12-13 20:01:00', '2023-12-13 21:01:00', 60, 2),
(4, 'Thi giữa kì 1', 'sach-giao-khoa-toan-lop-3.jpg', '2023-12-06 12:00:00', '2023-12-06 12:30:00', 30, 1),
(5, 'Thi thử THPT Quốc Gia 2024', 'Toan-4.jpg', '2023-12-13 20:20:00', '2023-12-13 22:20:00', 120, 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `role` enum('1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '1 Admin , 2 User'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `username`, `password`, `fullname`, `image`, `email`, `address`, `role`) VALUES
(1, 'admin', '123', 'Admin', NULL, 'admin@gmail.com', 'HN', '1'),
(2, 'hoangnv', '123', 'Ngô Văn Hoàng', NULL, 'dá', 'HN', '2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id_ch`),
  ADD KEY `id_cd` (`id_cd`);

--
-- Chỉ mục cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  ADD PRIMARY KEY (`id_cd`);

--
-- Chỉ mục cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_question` (`id_question`);

--
-- Chỉ mục cho bảng `dethi`
--
ALTER TABLE `dethi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_lichthi` (`id_lichthi`);

--
-- Chỉ mục cho bảng `dethi_cauhoi`
--
ALTER TABLE `dethi_cauhoi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idDeThi` (`id_dethi`),
  ADD KEY `idCauHoi` (`id_cauhoi`);

--
-- Chỉ mục cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_de_thi` (`id_de_thi`),
  ADD KEY `id_nguoi_dung` (`id_nguoi_dung`),
  ADD KEY `id_lichthi` (`id_lichthi`);

--
-- Chỉ mục cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  MODIFY `id_ch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT cho bảng `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `dethi_cauhoi`
--
ALTER TABLE `dethi_cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`id_cd`) REFERENCES `chuyende` (`id_cd`);

--
-- Các ràng buộc cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD CONSTRAINT `dapan_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `cauhoi` (`id_ch`);

--
-- Các ràng buộc cho bảng `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `dethi_ibfk_1` FOREIGN KEY (`id_lichthi`) REFERENCES `lichthi` (`id`);

--
-- Các ràng buộc cho bảng `dethi_cauhoi`
--
ALTER TABLE `dethi_cauhoi`
  ADD CONSTRAINT `dethi_cauhoi_ibfk_1` FOREIGN KEY (`id_dethi`) REFERENCES `dethi` (`id`),
  ADD CONSTRAINT `dethi_cauhoi_ibfk_2` FOREIGN KEY (`id_cauhoi`) REFERENCES `cauhoi` (`id_ch`);

--
-- Các ràng buộc cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  ADD CONSTRAINT `ketqua_ibfk_1` FOREIGN KEY (`id_de_thi`) REFERENCES `dethi` (`id`),
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `taikhoan` (`id`),
  ADD CONSTRAINT `ketqua_ibfk_3` FOREIGN KEY (`id_lichthi`) REFERENCES `lichthi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
