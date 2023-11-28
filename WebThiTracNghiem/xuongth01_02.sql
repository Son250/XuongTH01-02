-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 28, 2023 lúc 12:31 PM
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
(30, '4 + 4 = ?', 'toan.jpg', 1),
(31, '1 x 1 = ?', 'cauhoi-removebg-preview.png', 9),
(32, '2 x 3 = ?', '', 9),
(33, '1 + 3 = ?', '', 1),
(34, '5 + 6 = ?', '', 1),
(35, '5 x 5 = ?', '', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyende`
--

CREATE TABLE `chuyende` (
  `id_cd` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên chuyên đề'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyende`
--

INSERT INTO `chuyende` (`id_cd`, `name`) VALUES
(1, 'Chuyên đề thi kì 2 Toán lớp 3'),
(9, 'Chuyên đề thi kì 1 Toán lớp 4');

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
(37, '4', '1700929844_dekiemtra.jpg', '2', 26),
(46, '5', '', '2', 27),
(47, '7', '', '2', 27),
(48, '10', '', '2', 27),
(50, '5', '1700929851_hero-img.png', '2', 26),
(51, '6', '1700929858_logo-cong-ty-removebg-preview.png', '2', 26),
(52, '5', '', '2', 30);

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
(2, 'Đề 1', 4);

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
(2, 1, 26),
(3, 1, 28),
(4, 1, 27),
(5, 1, 30),
(6, 1, 26),
(7, 1, 28),
(8, 1, 33),
(9, 1, 27),
(10, 1, 30),
(11, 1, 34),
(12, 1, 31),
(13, 1, 32),
(14, 1, 27),
(15, 1, 30),
(16, 1, 35),
(17, 1, 31),
(18, 1, 32),
(19, 2, 26);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua`
--

CREATE TABLE `ketqua` (
  `id` int(11) NOT NULL,
  `bo_ket_qua` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Bộ kết quả',
  `id_nguoi_dung` int(11) NOT NULL,
  `id_de_thi` int(11) NOT NULL,
  `diem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ketqua`
--

INSERT INTO `ketqua` (`id`, `bo_ket_qua`, `id_nguoi_dung`, `id_de_thi`, `diem`) VALUES
(1, '2 kết quả', 2, 1, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lichthi`
--

CREATE TABLE `lichthi` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên lịch thi(tên kì thi)',
  `time_start` datetime NOT NULL COMMENT 'TG bắt đầu làm bài',
  `time_end` datetime NOT NULL COMMENT 'TG kết thúc làm bài',
  `time` int(11) NOT NULL COMMENT 'TG làm bài (vd: 45p)',
  `so_de_thi` int(11) NOT NULL COMMENT 'Số lượng đề thi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lichthi`
--

INSERT INTO `lichthi` (`id`, `name`, `time_start`, `time_end`, `time`, `so_de_thi`) VALUES
(1, 'Thi cuối kỳ 2 ', '2023-11-26 09:00:00', '0000-00-00 00:00:00', 90, 2),
(4, 'Thi giữa kì 1', '2023-11-25 12:00:00', '0000-00-00 00:00:00', 30, 1);

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
(1, 'admin', 'admin123', 'Admin', NULL, 'admin@gmail.com', 'HN', '1'),
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
  ADD KEY `id_nguoi_dung` (`id_nguoi_dung`);

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
  MODIFY `id_ch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT cho bảng `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `dethi_cauhoi`
--
ALTER TABLE `dethi_cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
