-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 24, 2021 lúc 11:36 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_webnovel`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `author`
--

INSERT INTO `author` (`id`, `name`) VALUES
(1, 'SkyFarm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'comedy', ''),
(2, 'romance', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `chapter_number` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `novel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `chapter_number`, `image`, `content`, `novel_id`) VALUES
(1, 1, 'https://c1.hako.re/lightnovel/illusts/u75077-98867fd8-d103-44df-8d7e-d3c6933d3b2f.jpg', 'Takanishi Aisa.\r\n\r\nNếu hỏi 10 đứa con trai “Ai là người xinh nhất khối?”, chắc chắn hết 8 người sẽ trả lời “Takanishi Aisa.”\r\n\r\nNói thật thì dù có là bạn thuở nhỏ nhưng gương mặt tròn trịa của cô ấy khá xinh. Gu thời trang phong cách, lại còn học giỏi, thể thao cũng khá nữa, không thể chê vào đâu được.\r\n\r\nVà cô ấy đối xử tốt với tất cả mọi người, dù họ có là ai.\r\n\r\nTrừ tôi, tất nhiên rồi.\r\n\r\n“Sao đấy?”\r\n\r\n“Kh… không có gì.”\r\n\r\nCó lẽ cô ấy biết tôi đang nhìn chằm chằm nên mới hỏi tôi với giọng điệu lạnh như băng, đủ để cuốn bay cái nóng của mùa hè.\r\n\r\nVới hành động này, chắc chắn sẽ có người thắc mắc “Tại sao Takanishi lại cư xử với cậu ta như thế…”. Có một bức tường lớn ngăn cách tôi và Aisa, dù không phải do tôi làm. Cá nhân tôi nghĩ, chắc là vì cô ấy quá nổi tiếng và luôn nổi bật trong mắt mọi người.\r\n\r\n“Vậy à…”\r\n\r\nAisa nói rồi về lại chỗ ngồi của mình, đúng lúc đó có một người tiến về phía tôi.\r\n\r\n“Nè, cậu là bạn thuở nhỏ của Takanishi-san à?”\r\n\r\nNgười đang gọi tôi là Takizawa Akito.\r\n\r\nGã này bất cẩn đến mức không thèm chải mái tóc bù xù của mình nữa, cơ mà cậu ta chỉ là một tên phiền phức được nhiều người biết đến bởi vẻ ngoài điển trai thôi.\r\n\r\nMặc cho sự nổi tiếng của cậu ta, chúng tôi vẫn nhìn thấu lẫn nhau và trở thành bạn. Dù tôi chẳng nhớ lí do vì sao.\r\n\r\n“Thì ba mẹ bọn tớ thân nhau mà.”\r\n\r\nThực ra tôi và Aisa đã luôn thân thiết cho đến hồi tiểu học. Ít nhất đó là những gì tôi nghĩ.\r\n\r\nBố mẹ chúng tôi luôn đi chơi chung, nên tôi nghĩ mình và Aisa rất hợp nhau.\r\n\r\nNhưng giờ đây chỉ có bố mẹ của hai bên là thân thôi.\r\n\r\n“Không biết vì sao nhưng cái cách cô ấy nhìn cậu khác hẳn với mọi người đấy.”\r\n\r\n“Tớ không biết mình đã đắc tội gì nữa…”\r\n\r\nCó lẽ chúng tôi đã rời xa nhau từ khi lên sơ trung. \r\n\r\nMột sự cố bất ngờ nào đó đã xảy ra, và từ đó mọi chuyện thành ra như thế này.\r\n\r\nThần tượng của cả khối, người luôn hòa đồng với mọi người, và người duy nhất cô ấy lạnh nhạt lại chính là tôi.\r\n\r\n“Tớ không nghĩ cô ấy có ác cảm với cậu đâu…”\r\n\r\nAkito nói vậy, nhưng tôi chẳng biết nên nói gì khi nhìn ánh mắt của cô ấy dành cho tôi nữa.\r\n\r\n“Chẳng hiểu luôn…”\r\n\r\n“Takanishi đối xử với người khác một cách hoàn toàn xa lạ mà?”\r\n\r\n“Thật à?”\r\n\r\nĐó là con người của cô ấy. Dù liên tục bị đám đực rựa tỏ tình nhưng cô ấy lại không hứng thú với con trai, đám con gái cũng không ghét cô ấy. Trái lại cô ấy cũng rất nổi tiếng với họ, chủ yếu là vì ngoại hình và tính cách của mình. Kể cả bây giờ, cả nam lẫn nữ vẫn luôn vây quanh cô, dù cho họ có nằm ở top đầu của cái trường này.\r\n\r\n“Khi tớ nhìn vào đó, cảm giác như có một bức tường hay khoảng cách giữa tất cả bọn họ vậy.”\r\n\r\n“Thế à? Tớ chỉ thấy đám người nổi tiếng đang vui vẻ nói chuyện thôi.”\r\n\r\nTôi sợ phải hòa nhập hay thâm chí nhìn vào họ. Chỉ nhìn vào Aisa, vốn luôn ở một mình, cũng đủ khiến tôi cứng người rồi, huống gì đặt chân vào cái đám đông chói lóa như thế.\r\n\r\n“Nếu cậu nghĩ vậy thì tớ cũng không còn gì để nói.”\r\n\r\nSau khi nói một câu tôi không hề hiểu được, Akito lại ngồi về vị trí của mình. \r\n\r\nThật may vì những cuộc trò chuyện vẫn diễn ra như mọi khi, lớp học sắp bắt đầu rồi. \r\n\r\nTôi nhìn Aisa thêm một lần nữa sau khi lảng mắt khỏi Akito. Cô ấy vẫn đang tươi cười với mọi người trong lớp. Nhưng ngay khi chạm phải ánh mắt của tôi, cô ấy lạnh lùng nhìn tôi, khiến cả người tôi như đóng băng.\r\n\r\n“Hở…”\r\n\r\nThôi, chắc tôi không dám mơ tới việc nói chuyện với cô ấy đâu.\r\n\r\nNếu mắc lỗi với cô ấy, tôi sẽ xin lỗi, nhưng kiểu gì cũng bị người ta ghét tjhooi.\r\n\r\nĐó là ngày cuối cùng tôi cảm thấy thoải mái…', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `novel`
--

CREATE TABLE `novel` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` varchar(500) NOT NULL,
  `avatar` varchar(200) NOT NULL,
  `state` varchar(30) NOT NULL,
  `post_date` date NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `novel`
--

INSERT INTO `novel` (`id`, `name`, `description`, `avatar`, `state`, `post_date`, `author_id`, `category_id`) VALUES
(1, 'Osananajimi no Imouto no Kateikyoushi wo Hajimetara Soen Datta Osananajimi ga Kowai', 'Cô bạn thuở nhỏ xinh đẹp Aisa của cậu ta rất nổi tiếng, từ khi cả hai học chung.\r\n\r\nKhông ngạc nhiên lắm khi cả hai xa cách nhau.\r\n\r\nNhưng Aisa chỉ để mắt đến Kouki thôi chăng...?\r\n\r\nLàm gia sư cho em gái của Aisa, Minami, hai người họ lại chạm mặt nhau.\r\n\r\nChuyện tình hài hước lãng mạn giữa cô nàng idol lạnh lùng Aisa và Kouki bắt đầu từ đây.', 'https://res.cloudinary.com/lnvs-v2-2/image/upload/v1621365419/V3/aHR0cHM6Ly9jMS5oYWtvLnJlL2xpZ2h0bm92ZWwvaWxsdXN0cy91NzUwNzctNWM4ZWNhOWEtNmRhOC00ZWJmLWFiYTYtN2EzMzA2MGZlYTI5LmpwZw.jpg', 'Đang tiến hành', '2021-10-24', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_account`
--

CREATE TABLE `user_account` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `user_account`
--

INSERT INTO `user_account` (`username`, `password`, `name`, `dob`, `email`) VALUES
('admin', 'e10adc3949ba59abbe56e057f20f883e', 'update\n', '0000-00-00', 'admin@gmail.com'),
('adminđư', 'ebca581f6eb4f900b1d5ddc483d797f5', 'ádasdasdasdasdasdsad', '2011-11-11', 'hoangminhzzz123@gmail.com'),
('minh', '123456', 'test update', '2000-11-11', 'm@gmail.com'),
('minh12', '14e1b600b1fd579f47433b88e8d85291', '1235555', '0000-00-00', 'minh@gmail.com'),
('mspinka', 'b56d0d1d3cb2ae2d14308ae96d56ead6', 'Hettie Waelchi', '2020-06-29', 'evert18@hotmail.com'),
('sadye79', '01b318cdd7602d820151d66394c5b72a', 'Joannie Runolfsdottir', '2013-10-04', 'scarlett.runte@yahoo.com'),
('smoen', 'fbda3b95064e1b10f6810e9cec612a33', 'Ms. Karli Turner Sr.', '2008-08-07', 'homenick.simeon@spencer.org'),
('srolfson', '800d6e03a85ec972e13b1b2226cbc377', 'Dorthy Padberg V', '2021-07-07', 'christina19@nienowbode.info'),
('tét create', '14e1b600b1fd579f47433b88e8d85291', 'adminh123', '2000-12-31', 'hoangminhzzz123@gmail.com'),
('tillman.maybell', '0b5693dd3e867754adb7fef8f556755d', 'Adeline Crist', '1996-08-12', 'jerde.mariah@gmail.com'),
('vhane', 'e1b08ed79356c7964ddce4221ad324de', 'Prof. Reagan Lakin', '1989-09-19', 'nikki83@hotmail.com'),
('zlarson', 'f1a283acef80eb6fd1da5ecd6a32b656', 'Ilene Runolfsdottir', '2020-05-26', 'haley.darren@gmail.com'),
('zulauf.enrico', 'd10b3bc5ab669768fbb27f0ef7937247', 'Ms. Joanne Grimes', '1996-04-08', 'easter01@kozeyschoen.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user_novel_follow`
--

CREATE TABLE `user_novel_follow` (
  `id` int(11) NOT NULL,
  `novel_id` int(11) NOT NULL,
  `reading_chapter` int(11) DEFAULT NULL,
  `user_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD PRIMARY KEY (`id`),
  ADD KEY `novel_fk` (`novel_id`);

--
-- Chỉ mục cho bảng `novel`
--
ALTER TABLE `novel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_author` (`author_id`,`category_id`) USING BTREE,
  ADD KEY `fk_category` (`category_id`) USING BTREE;

--
-- Chỉ mục cho bảng `user_account`
--
ALTER TABLE `user_account`
  ADD PRIMARY KEY (`username`);

--
-- Chỉ mục cho bảng `user_novel_follow`
--
ALTER TABLE `user_novel_follow`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `fk_novel` (`novel_id`),
  ADD UNIQUE KEY `fk_chapter` (`reading_chapter`),
  ADD KEY `fk_user` (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `author`
--
ALTER TABLE `author`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `user_novel_follow`
--
ALTER TABLE `user_novel_follow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chapter`
--
ALTER TABLE `chapter`
  ADD CONSTRAINT `chapter_ibfk_1` FOREIGN KEY (`novel_id`) REFERENCES `novel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `novel`
--
ALTER TABLE `novel`
  ADD CONSTRAINT `novel_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `novel_ibfk_2` FOREIGN KEY (`author_id`) REFERENCES `author` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `user_novel_follow`
--
ALTER TABLE `user_novel_follow`
  ADD CONSTRAINT `user_novel_follow_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user_account` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_novel_follow_ibfk_2` FOREIGN KEY (`novel_id`) REFERENCES `novel` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_novel_follow_ibfk_3` FOREIGN KEY (`reading_chapter`) REFERENCES `chapter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
