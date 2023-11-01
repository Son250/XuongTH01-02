-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 01, 2023 lúc 09:52 AM
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
  `id` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung câu hỏi (Đề bài)',
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cauhoi`
--

INSERT INTO `cauhoi` (`id`, `content`, `image`) VALUES
(1, 'Cho dãy số liệu: 8; 1998; 195; 2007; 1000; 71 768; 9999; 17 .\r\nDãy trên có tất cả:', NULL),
(3, 'Mai có 7 viên bi, Hồng có 15 viên bi. Hỏi Hồng phải cho Mai bao nhiêu viên bi để số bi của hai bạn bằng nhau', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chuyende`
--

CREATE TABLE `chuyende` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Tên chuyên đề'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chuyende`
--

INSERT INTO `chuyende` (`id`, `name`) VALUES
(1, 'Chuyên đề thi kì 2 Toán lớp 3');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dapan`
--

CREATE TABLE `dapan` (
  `id` int(11) NOT NULL,
  `content` varchar(500) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Nội dung đáp án',
  `image` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `right_answer` enum('1','2') COLLATE utf8_unicode_ci NOT NULL COMMENT '1 Đúng, 2 Sai',
  `id_question` int(11) NOT NULL COMMENT 'Id câu hỏi'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dapan`
--

INSERT INTO `dapan` (`id`, `content`, `image`, `right_answer`, `id_question`) VALUES
(1, '11 số', NULL, '2', 1),
(2, '9 số', NULL, '2', 1),
(3, '8 số', NULL, '1', 1),
(4, '10 số', NULL, '2', 1),
(5, '3 viên', NULL, '2', 3),
(6, '5 viên', NULL, '2', 3),
(7, '4 viên', NULL, '1', 3),
(8, '6 viên', NULL, '2', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dethi`
--

CREATE TABLE `dethi` (
  `id` int(11) NOT NULL,
  `bo_cau_hoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Bộ câu hỏi',
  `id_lichthi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `dethi`
--

INSERT INTO `dethi` (`id`, `bo_cau_hoi`, `id_lichthi`) VALUES
(1, '2 câu', 1);

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
(1, 'Thi cuối kỳ 2 ', '2023-11-30 15:00:00', '2023-11-30 16:45:00', 45, 2);

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
(1, 'Admin', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Viết Sơn', NULL, 'admin@gmail.com', 'HN', '1'),
(2, 'hoangnv', '202cb962ac59075b964b07152d234b70', 'Ngô Văn Hoàng', NULL, NULL, 'HN', '2');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ketqua`
--
ALTER TABLE `ketqua`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `lichthi`
--
ALTER TABLE `lichthi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `dapan`
--
ALTER TABLE `dapan`
  ADD CONSTRAINT `dapan_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `cauhoi` (`id`);

--
-- Các ràng buộc cho bảng `dethi`
--
ALTER TABLE `dethi`
  ADD CONSTRAINT `dethi_ibfk_1` FOREIGN KEY (`id_lichthi`) REFERENCES `lichthi` (`id`);

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
