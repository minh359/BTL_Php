-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 08, 2021 lúc 07:17 PM
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
(1, 'comedy', '1231'),
(3, 'update123', 'heheh');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chapter`
--

CREATE TABLE `chapter` (
  `id` int(11) NOT NULL,
  `chapter_number` varchar(50) NOT NULL,
  `image` varchar(200) NOT NULL,
  `content` mediumtext NOT NULL,
  `novel_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `chapter`
--

INSERT INTO `chapter` (`id`, `chapter_number`, `image`, `content`, `novel_id`) VALUES
(4, 'chương 1', 'https://ecntt.com/wp-content/uploads/2018/08/PHP.png', '<p>nội dung chương số 1</p>', 17),
(5, 'abc2313123', 'https://ecntt.com/wp-content/uploads/2018/08/PHP.png', '<p>7t8u6ut6</p>', 17),
(6, '1- chapter đầu của truyện 2', 'https://vn-live-01.slatic.net/p/4361f6d2309b6960f7b7495849e2fb41.jpg', '<p>nội dung chương</p>', 30);

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
(17, 'ád', 'ád', 'https://www.facebook.com/photo.php?fbid=1635707739958861&set=pb.100005589514692.-2207520000..&type=3', 'Đang tiến hành', '2021-10-24', 1, 1),
(30, 'Nguyễn', '<p>sadffasf</p>', 'https://ecntt.com/wp-content/uploads/2018/08/PHP.png', 'Hoàn thành', '2021-12-13', 1, 1),
(32, 'Khải', '<p>avc</p>', 'sdfsdfsdf', 'đang tiến hành', '2021-12-09', 1, 3);

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
('', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', ''),
('a1233', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn', '2021-12-15', 'hoangminhzzz123@gmail.com'),
('ád', 'c91c03ea6c46a86cbc019be3d71d0a1a', 'Nguyễn', '2021-12-09', 'hoangminhzzz123@gmail.com'),
('admin', 'c26be8aaf53b15054896983b43eb6a65', 'update123 khải ok ko?', '2021-10-12', 'admin@gmail.com'),
('admin12', '14e1b600b1fd579f47433b88e8d85291', 'Nguyễn Hoàng Minh', '2021-06-15', 'hoangminhzzz123@gmail.com'),
('adminsdadasdasd', '9e632d61c5951ff5f67531a15a1bfbf2', 'đâsdasdasd', '2022-01-01', 'hoangminhzzz123@gmail.com'),
('d', '8277e0910d750195b448797616e091ad', 'd', '0000-00-00', ''),
('dsa', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', ''),
('dsadas', 'd41d8cd98f00b204e9800998ecf8427e', '', '0000-00-00', ''),
('dsadasd', 'ac0b6ef12dcc5614cf0a67900e0dcbd5', 'dsadas', '2021-12-23', 'hoangminhzzz123@gmail.com'),
('kp123', 'e10adc3949ba59abbe56e057f20f883e', 'kp', '2000-02-02', 'hoangminhzzz123@gmail.com'),
('minh', '123456', 'test update', '2000-11-11', 'm@gmail.com'),
('minh12', 'c56d0e9a7ccec67b4ea131655038d604', '1235555', '0000-00-00', 'minh@gmail.com'),
('minh359', 'e0e7caf416fde60c2f4458d2fa1e2ad9', 'Nguyễn Hoàng Minh', '2021-10-25', 'hoangminhzzz123@gmail.com'),
('minh@', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn', '2021-10-25', 'hoangminhzzz123@gmail.com'),
('minhnguyen359', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn', '2014-06-11', 'hoangminhzzz123@gmail.com'),
('mspinka', 'b56d0d1d3cb2ae2d14308ae96d56ead6', 'Hettie Waelchi', '2020-06-29', 'evert18@hotmail.com'),
('nhp', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn', '1995-06-22', 'hoangminhzzz123@gmail.com'),
('sadye79', '01b318cdd7602d820151d66394c5b72a', 'Joannie Runolfsdottir', '2013-10-04', 'scarlett.runte@yahoo.com'),
('smoen', 'fbda3b95064e1b10f6810e9cec612a33', 'Ms. Karli Turner Sr.', '2008-08-07', 'homenick.simeon@spencer.org'),
('srolfson', '800d6e03a85ec972e13b1b2226cbc377', 'Dorthy Padberg V', '2021-07-07', 'christina19@nienowbode.info'),
('tét create', '14e1b600b1fd579f47433b88e8d85291', 'adminh123', '2000-12-31', 'hoangminhzzz123@gmail.com'),
('tillman.maybell', '0b5693dd3e867754adb7fef8f556755d', 'Adeline Crist', '1996-08-12', 'jerde.mariah@gmail.com'),
('vhane', 'e1b08ed79356c7964ddce4221ad324de', 'Prof. Reagan Lakin', '1989-09-19', 'nikki83@hotmail.com'),
('zlarson', 'f1a283acef80eb6fd1da5ecd6a32b656', 'Ilene Runolfsdottir', '2020-05-26', 'haley.darren@gmail.com'),
('zulauf.enrico', 'd10b3bc5ab669768fbb27f0ef7937247', 'Ms. Joanne Grimes', '1996-04-08', 'easter01@kozeyschoen.com'),
('đâs', 'ac0b6ef12dcc5614cf0a67900e0dcbd5', 'đâsd', '2021-12-30', 'dsadas');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `chapter`
--
ALTER TABLE `chapter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `novel`
--
ALTER TABLE `novel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
