-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 05, 2021 lúc 06:31 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `btl`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chats`
--

CREATE TABLE `chats` (
  `chat_id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `opened` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chats`
--

INSERT INTO `chats` (`chat_id`, `from_id`, `to_id`, `message`, `opened`, `created_at`) VALUES
(1, 11, 8, 'a', 1, '2021-11-03 17:12:17'),
(2, 8, 11, 'a', 1, '2021-11-03 17:13:19'),
(3, 8, 11, 'a', 1, '2021-11-03 17:13:21'),
(4, 8, 11, 'a', 1, '2021-11-03 17:13:22'),
(5, 11, 8, 'a', 1, '2021-11-03 17:20:19'),
(6, 11, 8, 'a', 1, '2021-11-03 17:20:20'),
(7, 11, 8, 'a', 1, '2021-11-03 17:20:21'),
(8, 11, 8, 'a', 1, '2021-11-03 17:20:23'),
(9, 8, 11, 'a\nha', 1, '2021-11-03 18:50:43'),
(10, 8, 10, 'l\n', 0, '2021-11-03 19:13:58'),
(11, 8, 15, 'a', 0, '2021-11-03 19:30:58'),
(12, 8, 15, 'aaa', 0, '2021-11-04 10:04:49'),
(13, 8, 11, 'hi chào cậu\n', 1, '2021-11-04 13:48:01'),
(14, 8, 15, 'chào ngọc', 0, '2021-11-04 19:47:07'),
(15, 8, 11, 'hihi \n', 1, '2021-11-04 20:58:56'),
(16, 11, 8, 'hihi chào lại nè', 0, '2021-11-04 21:00:57'),
(17, 8, 10, 'hello\n', 0, '2021-11-05 21:13:58'),
(18, 8, 24, 'hello\n', 0, '2021-11-05 23:49:24'),
(19, 8, 25, 'hello ngọc\n', 1, '2021-11-05 23:51:29'),
(20, 25, 8, 'hello kiều nha\n', 1, '2021-11-05 23:51:55'),
(21, 8, 25, 'cậu khỏe không nhỉ?', 0, '2021-11-05 23:54:38'),
(22, 8, 25, 'hi hi\n', 0, '2021-11-06 00:01:36'),
(23, 8, 25, 'cậu sẽ đc A chứ', 0, '2021-11-06 00:01:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) NOT NULL,
  `user_1` int(11) NOT NULL,
  `user_2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `user_1`, `user_2`) VALUES
(1, 11, 8),
(2, 8, 10),
(3, 8, 15),
(4, 8, 24),
(5, 8, 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_catalog`
--

CREATE TABLE `menu_catalog` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_catalog`
--

INSERT INTO `menu_catalog` (`id`, `name`, `metaTitle`, `created`, `updated`) VALUES
(5, 'đời sống', 'doi-song', '2021-10-31 13:41:59', '2021-11-03 15:18:25'),
(6, 'công nghệ', 'cong-nghe', '2021-10-31 13:45:43', '2021-11-03 15:18:33'),
(13, 'kế toán', 'ke-toan', '2021-11-03 15:18:42', '2021-11-03 15:18:42'),
(14, 'kinh doanh', 'kinh-doanh', '2021-11-03 15:18:46', '2021-11-03 15:18:46'),
(15, 'du lịch', 'du-lich', '2021-11-03 15:18:49', '2021-11-03 15:18:49'),
(17, 'khoa học giỏi', 'khoa-hoc-gioi', '2021-11-05 17:03:37', '2021-11-05 17:03:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menu_list_blog`
--

CREATE TABLE `menu_list_blog` (
  `id` int(11) NOT NULL,
  `images` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metaTitle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catalog` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `dateTime` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menu_list_blog`
--

INSERT INTO `menu_list_blog` (`id`, `images`, `name`, `metaTitle`, `catalog`, `description`, `content`, `token`, `updated`, `dateTime`, `user`) VALUES
(25, 'public/images/1636131665li.jpg', 'Lâm Thị Kiều', 'Lam-Thi-Kieu', '6', 'sinh viên', '							sinh viên		khoa công nghệ thông tin				', 'O0r7Tx5XTQ', '2021-11-05 17:01:05', '05/11/2021', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(35) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `permission` int(1) NOT NULL,
  `activated` tinyint(1) DEFAULT 0,
  `varkey` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `templates` int(11) NOT NULL DEFAULT 0,
  `last_seen` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `avata`, `email`, `password`, `token`, `created`, `updated`, `permission`, `activated`, `varkey`, `templates`, `last_seen`) VALUES
(8, 'lâm thị kiều', 'public/images/1636030902li.jpg', 'likieu2607@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'qJpREB1Wpc', '2021-10-31 12:16:15', '2021-11-05 17:01:39', 0, 1, '', 0, '2021-11-06 00:01:39'),
(10, 'admin', '', 'admin@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'abc1213344s', '2021-10-24 03:36:03', '2021-11-03 14:11:16', 1, 1, '', 0, '2021-11-03 21:11:16'),
(24, 'kk', '', 'likie@gmail.com', '698d51a19d8a121ce581499d7b701668', '', '2021-11-05 11:57:59', '2021-11-05 11:57:59', 0, 0, 'd920928a79acc22f19272ea25e34fdde', 0, '2021-11-05 18:57:59'),
(25, ' ngọc', '', 'ngoc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'jdkds', '2021-11-05 16:50:53', '2021-11-05 17:02:29', 0, 1, '', 2, '2021-11-05 23:51:56');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`chat_id`);

--
-- Chỉ mục cho bảng `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Chỉ mục cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chats`
--
ALTER TABLE `chats`
  MODIFY `chat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `menu_catalog`
--
ALTER TABLE `menu_catalog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `menu_list_blog`
--
ALTER TABLE `menu_list_blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
