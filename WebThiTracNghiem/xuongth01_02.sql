-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 19, 2023 lúc 03:55 PM
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
(31, '1 x 1 = ?', 'cauhoi-removebg-preview.png', 1),
(33, '1 + 3 = ?', '', 1),
(34, '5 + 6 = ?', '', 1),
(35, '5 x 5 = ?', '', 1),
(36, '2 : 2 = ?', '', 1),
(37, '10 + 10 = ?', 'con vịt.png', 1),
(38, 'Lịch sử được hiểu là', '', 9),
(41, 'Để góp phần giải quyết nạn đói, trong hơn một năm đầu sau ngày cách mạng tháng Tám năm 1945 thành công, Chủ tịch Hồ Chí Minh đã ', '', 9),
(42, 'Từ đầu thế kỉ XX, tình hình kinh tế - xã hội ở Việt Nam có sự chuyển biển to lớn và sâu sắc đều do', '', 9),
(44, 'Từ giữa những năm 70 của thế kỉ XX, Ấn Độ và Việt Nam đã tự túc được lương thực là nhờ tiến  hành cuộc cách mạng nào dưới đây?', '', 9),
(45, 'Đặc điểm của phong trào yêu nước và cách mạng ở Việt Nam trong những năm đầu thế kỉ XX đến năm 1930 là gì?', '', 9),
(46, 'Phong trào cách mạng 1930 - 1931 để lại bài học kinh nghiệm nào sau đây cho sự nghiệp giải phóng dân tộc ở Việt Nam?', '', 9),
(47, 'Trong cuộc kháng chiến chống thực dân Pháp xâm lược (1946 - 1954), sự kiện chính trị nào đánh dấu bước phát triển mới trong quá trình trưởng thành và lãnh đạo cách mạng của Đảng?', '', 9),
(48, 'Việc giữ nguyên hiện trạng Mông Cổ được thỏa thuận trong hội nghị Ianta (2-1945), thực chất là', '', 9),
(49, '“Chiến dịch này là một chiến dịch lịch sử của quân đội ta, ta đánh thắng chiến dịch này có ý nghĩa quân sự và ý nghĩa chính trị quan trọng\" là nhận định của Trung ương Đảng và Chủ tịch Hồ Chí Minh về chiến dịch nào trong cuộc kháng chiến chống thực dân Pháp. của nhân dân Việt Nam', '', 9),
(50, 'Việt Nam gia nhập và trở thành thành viên thứ 149 của Liên hợp quốc vào năm?', '', 9),
(51, 'Giữ gìn hòa bình, an ninh quốc tế, góp phần giải quyết các vụ tranh chấp xung đột khu vực.  Đó là', '', 9),
(52, 'Theo nguyên tắc của Liên hợp quốc, các nước phải chung sống hòa bình và sự nhất trí giữa', '', 9),
(53, 'Hiến chương Liên hợp quốc được thông qua tại Hội nghị nào?', '', 9),
(54, 'Hiến chương Liên hợp quốc quy định bộ máy tổ chức của Liên hợp quốc bao gồm bao nhiều cơ quan?', '', 9),
(55, 'Mục đích của tổ chức Liên hợp quốc được nêu trong Hiến chương thành lập là', '', 9),
(56, 'Năm nước ủy viên thường trực của Hội đồng Bản an Liên hợp quốc không bao giờ thay đổi', '', 9),
(57, 'Đại hội đồng Liên hợp quốc đã quyết định “Ngày Liên hợp quốc” là', '', 9),
(58, 'Những quyết định của Hội nghị Ianta và những thỏa thuận của ba cường quốc tại Hội nghị Pốtxđam (Đức) đã dẫn tới hệ quả gi?', '', 9),
(59, 'Theo quyết định của Hội nghị Ianta, vĩ tuyến 38 sẽ trở thành danh giới chia cắt giữa', '', 9),
(60, 'Vấn đề nước Đức được thỏa thuận tại Hội nghị Ianta như thế nào?', '', 9),
(61, 'Theo quy định của Hội nghị Ianta, quân đội nước nào sẽ chiếm đóng các vùng Đông Đức, Đông Âu và Bắc Triều Tiên sau Chiến tranh thế giới thứ hai?', '', 9),
(62, 'Theo quyết định của Hội nghị Ianta phía Tây Đức và các nước Tây Âu sẽ do', '', 9),
(63, 'Việc phân chia khu vực chiếm đóng của các nước trong phe Đồng minh tại Hội nghị Ianta năm 1945 đối với các nước Đông Nam Á và Nam Á', '', 9),
(64, ' Liên Xô phóng thành công vệ tinh nhân tạo năm ?', '', 9),
(65, ' Nước Cộng hoà Nhân dân Trung hoa ra đời vào thời gian nào?  ', '', 9),
(66, 'Ai là Tổng thống người da đen đầu tiên trong lịch sử nước Cộng hoà Nam Phi?  ', '', 9),
(67, 'Cộng động châu Âu (EC) ra đời vào thời gian nào? ', '', 9),
(68, 'Ở Nhật Bản yếu tố nào được coi là vốn quý nhất, là nhân tố quyết định cho sự phát triển của nền kinh tế?  ', '', 9),
(69, ' Nhật Bản trở thành một trong ba trung tâm kinh tế - tài chính của thế giới từ khi nào?    ', '', 9);

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
(1, 'Chuyên đề Toán lớp 1', 'toan 1.jpg'),
(9, 'Chuyên đề Lịch sử lớp 12', 'lich su 12.jpg');

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
(52, '5', '', '2', 30),
(53, '20', '1701183926_cauhoi-removebg-preview.png', '1', 37),
(54, '19', '', '2', 37),
(56, '29', '1701183926_dekiemtra.jpg', '2', 37),
(57, 'Những gì đã diễn ra trong quá khứ', '', '1', 38),
(58, 'Những gì sẽ diễn ra trong tương lai ', '', '2', 38),
(59, 'Những gì đang diễn ra ở hiện tại', '', '2', 38),
(60, 'Ngành khoa học dự đoán tương lai', '', '2', 38),
(61, 'kêu gọi nhân dân “nhường cơm sẻ áo”', '', '1', 41),
(62, 'vận động nhân dân xây dựng chính quyền mới.', '', '2', 41),
(63, 'phát động cuộc cải cách giáo dục.', '', '2', 41),
(64, 'thành lập Nhà Bình dân học vụ.', '', '2', 41),
(65, 'nước Pháp đã hoàn thành việc xâm lược và binh định toàn Việt Nam', '', '2', 42),
(66, 'thực dân Pháp đã duy trì phương thức bóc lột tư bản và phong kiến.', '', '2', 42),
(67, 'tác động từ cuộc khai thác thuộc địa lần thứ nhất của thực dân Pháp.', '', '1', 42),
(68, 'tự bản Pháp đã áp dụng chính sách “dùng người Việt, trị người Việt\".', '', '2', 42),
(69, 'Cách mạng công nghệ', '', '2', 44),
(70, 'Cách mạng chất xám.', '', '2', 44),
(71, 'Cách mạng công nghiệp', '', '2', 44),
(72, 'Cách mạng xanh.', '', '1', 44),
(73, 'Tồn tại song song hai khuynh hướng cứu nước vô sản và dân chủ tư sản.', '', '1', 45),
(74, 'Khuynh hướng vô sản chiếm ưu thế tuyệt đối trong phong trào yêu nước', '', '2', 45),
(75, 'Khuynh hướng dân chủ tư sản chiếm ưu thế trong phong trào dân tộc, dân chủ.', '', '2', 45),
(76, 'Phát triển tuần tự từ hướng phong kiến đến vô sản và dân chủ tư sản', '', '2', 45),
(77, 'Không giải quyết quyền lợi giai cấp để tập trung vào vấn đề dân tộc.', '', '2', 46),
(78, 'Phải xây dựng một mặt trận dân tộc thống nhất rộng rãi.', '', '1', 46),
(79, 'Giải quyết nhiệm vụ dân chủ trước khi thực hiện nhiệm vụ dân tộc.', '', '2', 46),
(80, 'Chỉ phát lệnh khởi nghĩa khi có sự giúp đỡ từ bên ngoài.', '', '2', 46),
(81, 'Đại hội thống nhất Mặt trận Việt Minh và Hội Liên Việt.', '', '2', 47),
(82, 'Đại hội đại biểu lần thứ III của Đảng Lao động Việt Nam.', '', '2', 47),
(83, 'Đại hội đại biểu lần thứ II của Đảng Cộng sản Đông Dương', '', '1', 47),
(84, 'Đại hội Chiến sĩ thi đua và Cán bộ gương mẫu toàn quốc.', '', '2', 47),
(85, 'quyết định sự trung lập cho Mông Cổ.', '', '2', 48),
(86, 'phân chia phạm vi ảnh hưởng ở châu Âu và châu Á.', '', '2', 48),
(87, 'để Mông Cổ phát triển theo con đường tư bản chủ nghĩa.', '', '2', 48),
(88, 'thừa nhận vai trò ảnh hưởng của Liên Xô.', '', '1', 48),
(89, 'Việt Bắc thu - đông năm 1947', '', '2', 49),
(90, 'Điện Biên Phủ năm 1954.', '', '1', 49),
(91, '. Biên giới thu - đông năm 1950.', '', '2', 49),
(92, 'Trung Lào năm 1953', '', '2', 49),
(93, '8-1967', '', '2', 50),
(94, '9-1977', '', '1', 50),
(95, '10-1977', '', '2', 50),
(96, '9-1967', '', '2', 50),
(97, '. nguyên tắc của Liên hợp quốc.', '', '2', 51),
(98, 'vai trò của Liên hợp quốc', '', '1', 51),
(99, 'trách nhiệm của Hội đồng Bảo an Liên hợp quốc.', '', '2', 51),
(100, 'vai trò của Đại hội đồng Liên hợp quốc.', '', '2', 51),
(101, 'tất cả các nước tham gia Liên hợp quốc.', '', '2', 52),
(102, 'tất cả các nước trong phe Đồng minh', '', '2', 52),
(103, 'các nước bị chiến tranh tàn phá', '', '2', 52),
(104, 'năm nước lớn trong Hội đồng Bảo an Liên hợp quốc', '', '1', 52),
(105, 'Hội nghị Ianta', '', '2', 53),
(106, 'Hội nghị Xan Phranxixcô', '', '1', 53),
(107, 'Hội nghị Pốtxđam', '', '2', 53),
(108, 'Hội nghị Pari.', '', '2', 53),
(109, '3', '', '2', 54),
(110, '4', '', '2', 54),
(111, '5', '', '2', 54),
(112, '6', '', '1', 54),
(113, 'Tiêu diệt tận gốc chủ nghĩa phát xít.', '', '2', 55),
(114, 'Duy trì hòa bình và an ninh thế giới, phát triển mối quan hệ hợp tác, hữu nghị giữa các quốc gia', '', '1', 55),
(115, 'Giải quyết nạn đói cho châu Phi.', '', '2', 55),
(116, 'Không can thiệp vào công việc nội bộ của bất kì nước nào.', '', '2', 55),
(117, 'Liên Xô, Mỹ, Anh, Pháp, Trung Quốc.', '', '1', 56),
(118, 'Mĩ, Anh, Pháp, Đức, Nhật.', '', '2', 56),
(119, 'Trung Quốc, Nhật, Ấn Độ, Pháp, Hàn Quốc', '', '2', 56),
(120, 'Anh, Pháp, Nhật, Việt Nam, Mỹ.', '', '2', 56),
(121, 'ngày 1-5 hàng năm.', '', '2', 57),
(122, 'ngày 24-10 hàng năm', '', '1', 57),
(123, 'ngày 26-10 hàng năm', '', '2', 57),
(124, 'ngày 27-10 hàng năm.', '', '2', 57),
(125, 'Mỹ ném bom nguyên tử xuống Nhật Bản làm hơn 10 vạn dân thường chế', '', '2', 58),
(126, 'Hình thành khuôn khổ của trật tự thế giới mới - trật tự hai cực lanta', '', '1', 58),
(127, 'Liên Xô và Mỹ chuyển từ đối thoại sang đối đầu và đi tới tình trạng Chiến tranh lạnh.', '', '2', 58),
(128, 'Hệ thống xã hội chủ nghĩa hình thành và ngày càng mở rộng.', '', '2', 58),
(129, 'hai miền nước Nhật.', '', '2', 59),
(130, 'Trung Quốc lục địa và đại lục.', '', '2', 59),
(131, 'hai miền nước Đức.', '', '2', 59),
(132, 'hai miền Triều Tiên.', '', '1', 59),
(133, 'Nước Đức phải chấp nhận tình trạng tồn tại hai nhà nước với hai chế độ chính trị và con đường phát triển khác nhau.', '', '2', 60),
(134, 'Nước Đức phải trở thành một quốc gia thống nhất, hòa bình, dân chủ và tiêu diệt tận gốc chủ nghĩa phát xít.', '', '2', 60),
(135, 'Nước Đức phải trở thành một quốc gia độc lập, thống nhất, dân chủ và trung lập.', '', '2', 60),
(136, 'Nước Đức phải chấp nhận sự chiếm đóng lâu dài của quân đội Đồng minh.', '', '1', 60),
(137, 'Liên Xô', '', '1', 61),
(138, 'Anh', '', '2', 61),
(139, 'Mĩ', '', '2', 61),
(140, 'Pháp', '', '2', 61),
(141, 'quân đội Mĩ, Anh và Pháp chiếm đóng.', '', '1', 62),
(142, 'quân đội Liên Xô và Trung Quốc chiếm đóng.', '', '2', 62),
(143, 'quân đội Anh và Pháp chiếm đóng', '', '2', 62),
(144, 'quân đội Anh, Pháp và Trung Quốc chiếm đóng.', '', '2', 62),
(145, 'thuộc phạm vi ảnh hưởng của Mĩ và Anh.', '', '2', 63),
(146, 'do Liên Xô chiếm đóng và kiểm soát.', '', '2', 63),
(147, 'vẫn thuộc phạm vi của các nước phương Tây', '', '1', 63),
(148, 'tạm thời quân đội Liên Xô và Mĩ chia nhau kiểm soát và đóng quân.', '', '2', 63),
(149, '1957', '', '1', 64),
(150, '1960', '', '2', 64),
(151, '1947', '', '2', 64),
(152, '1949', '', '2', 64),
(153, ' 1-10-1949', '', '1', 65),
(154, '1-11-1947', '', '2', 65),
(155, '1-11-1949', '', '2', 65),
(156, '1-12-1950', '', '2', 65),
(157, 'Mao Trạch Đông', '', '2', 66),
(158, 'Phi-đen-ca-xtơ-rô', '', '2', 66),
(159, 'Nen-xơn Man-đê-la', '', '1', 66),
(160, 'Ba-ti-xta', '', '2', 66),
(161, '8- 8-1967  ', '', '2', 67),
(162, '1-7-1967', '', '1', 67),
(163, '3-5-1967  ', '', '2', 67),
(164, ' 4-5-1967', '', '2', 67),
(165, 'Yếu tố con người', '', '1', 68),
(166, 'Vai trò của nhà nước trong điều tiết nền kinh tế ', '', '2', 68),
(167, 'Việc áp dụng những thành tựu khoa học – kĩ thuật.  ', '', '2', 68),
(168, 'Các công ti Nhật Bản có sức cạnh tranh cao  ', '', '2', 68),
(169, 'Những năm 70 của thế kỉ XX.', '', '1', 69),
(170, 'Những năm 60 của thế kỉ XX.', '', '2', 69),
(171, 'Những năm 90 của thế kỉ XX.', '', '2', 69),
(172, 'Những năm 80 của thế kỉ XX.', '', '2', 69),
(174, '9', '', '2', 30),
(175, '8', '', '1', 30),
(176, '11', '', '2', 30);

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
(8, 'Đề 1', 5),
(9, 'Đề 2', 5),
(10, 'Đề 3', 5),
(11, 'Đề 4', 5),
(12, 'Đề 1', 1),
(13, 'Đề 2', 1),
(14, 'Đề 1', 4),
(15, 'Đề 2', 4),
(16, 'Đề 1', 5),
(17, 'Đề 2', 5),
(18, 'Đề 3', 5),
(19, 'Đề 4', 5),
(20, 'Đề 1', 14),
(21, 'Đề 2', 14),
(22, 'Đề 3', 14),
(23, 'Đề 4', 14);

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
(49, 8, 26),
(50, 8, 28),
(51, 8, 33),
(52, 9, 33),
(53, 9, 35),
(54, 9, 37),
(55, 10, 37),
(56, 10, 27),
(57, 10, 30),
(58, 11, 30),
(59, 11, 34),
(60, 11, 36),
(61, 12, 26),
(62, 12, 28),
(63, 13, 26),
(64, 13, 33),
(65, 14, 31),
(66, 14, 38),
(67, 14, 30),
(68, 15, 27),
(69, 16, 38),
(70, 16, 47),
(71, 16, 48),
(72, 17, 41),
(73, 17, 46),
(74, 18, 42),
(75, 18, 49),
(76, 19, 44),
(77, 19, 45),
(78, 20, 38),
(79, 20, 41),
(80, 20, 42),
(81, 20, 44),
(82, 20, 45),
(83, 20, 46),
(84, 20, 47),
(85, 20, 48),
(86, 20, 49),
(87, 20, 50),
(88, 20, 51),
(89, 20, 52),
(90, 20, 53),
(91, 20, 54),
(92, 20, 55),
(93, 20, 56),
(94, 20, 57),
(95, 20, 58),
(96, 20, 59),
(97, 20, 60),
(98, 20, 61),
(99, 20, 62),
(100, 20, 63),
(101, 20, 64),
(102, 20, 65),
(103, 20, 66),
(104, 20, 67),
(105, 20, 68),
(106, 20, 69),
(107, 21, 38),
(108, 21, 41),
(109, 21, 42),
(110, 21, 44),
(111, 21, 45),
(112, 21, 46),
(113, 21, 47),
(114, 21, 48),
(115, 21, 49),
(116, 21, 50),
(117, 21, 51),
(118, 21, 52),
(119, 21, 53),
(120, 21, 54),
(121, 21, 55),
(122, 21, 56),
(123, 21, 57),
(124, 21, 58),
(125, 21, 59),
(126, 21, 60),
(127, 21, 61),
(128, 21, 62),
(129, 21, 63),
(130, 21, 64),
(131, 21, 65),
(132, 21, 66),
(133, 21, 67),
(134, 21, 68),
(135, 21, 69),
(136, 22, 38),
(137, 22, 41),
(138, 22, 42),
(139, 22, 44),
(140, 22, 45),
(141, 22, 46),
(142, 22, 47),
(143, 22, 48),
(144, 22, 49),
(145, 22, 50),
(146, 22, 51),
(147, 22, 52),
(148, 22, 53),
(149, 22, 54),
(150, 22, 55),
(151, 22, 56),
(152, 22, 57),
(153, 22, 58),
(154, 22, 59),
(155, 22, 60),
(156, 22, 61),
(157, 22, 62),
(158, 22, 63),
(159, 22, 64),
(160, 22, 65),
(161, 22, 66),
(162, 22, 67),
(163, 22, 68),
(164, 22, 69),
(165, 23, 38),
(166, 23, 41),
(167, 23, 42),
(168, 23, 44),
(169, 23, 45),
(170, 23, 46),
(171, 23, 47),
(172, 23, 48),
(173, 23, 49),
(174, 23, 50),
(175, 23, 51),
(176, 23, 52),
(177, 23, 53),
(178, 23, 54),
(179, 23, 55),
(180, 23, 56),
(181, 23, 57),
(182, 23, 58),
(183, 23, 59),
(184, 23, 60),
(185, 23, 61),
(186, 23, 62),
(187, 23, 63),
(188, 23, 64),
(189, 23, 65),
(190, 23, 66),
(191, 23, 67),
(192, 23, 68),
(193, 23, 69);

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
(1, 'Thi cuối kỳ 2 ', 'sach-giao-khoa-toan-lop-3.jpg', '2023-12-06 15:20:00', '2023-12-13 16:20:00', 60, 2),
(4, 'Thi giữa kì 1', 'sgk-toan-lop-4.jpg', '2023-12-06 12:00:00', '2023-12-13 12:30:00', 30, 2),
(5, 'Thi thử THPT Quốc Gia 2024', 'thi thử thpt quoc gia 2024.png', '2023-12-19 21:05:00', '2023-12-19 22:05:00', 60, 4),
(14, 'Thi cuối kì 1 Lịch Sử 12', 'lich su 12.jpg', '2023-12-19 21:38:00', '2023-12-19 22:38:00', 60, 4);

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
  MODIFY `id_ch` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT cho bảng `chuyende`
--
ALTER TABLE `chuyende`
  MODIFY `id_cd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT cho bảng `dapan`
--
ALTER TABLE `dapan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT cho bảng `dethi`
--
ALTER TABLE `dethi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `dethi_cauhoi`
--
ALTER TABLE `dethi_cauhoi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=194;

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
  ADD CONSTRAINT `ketqua_ibfk_2` FOREIGN KEY (`id_nguoi_dung`) REFERENCES `taikhoan` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
