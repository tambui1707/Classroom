-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 25, 2020 lúc 05:58 PM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `database`
--
CREATE DATABASE IF NOT EXISTS `database` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `database`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reset_password`
--

CREATE TABLE `reset_password` (
  `id` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `reset_password`
--

INSERT INTO `reset_password` (`id`, `code`, `email`) VALUES
(18, '15fb1e15e069d3', ''),
(19, '15fb1e161493f7', ''),
(20, '15fb1e163d6e57', ''),
(21, '15fb1f6428ca44', ''),
(22, '15fb1f7fc4af9f', ''),
(23, '15fb1f96346759', ''),
(24, '15fb1f9f1afc3d', ''),
(25, '15fb2050e05b12', ''),
(26, '15fb205282602b', ''),
(27, '15fb20531d1fc5', ''),
(28, '15fb20621e88bd', ''),
(30, '15fb20971a66cb', ''),
(31, '15fb21ed9e00ce', 'anhthang1401@gmail.com'),
(32, '15fb220ae0a71e', 'buingocsang63@gmail.com'),
(33, '15fb231a1d6dc1', 'caotinthanh.96@gmail.com'),
(34, '15fb232367ca45', 'ctthanh2318@gmail.com'),
(37, '15fb351898f70d', 'buingockhaitam01@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `date_of_birth` date NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `date_of_birth`, `phone`, `email`, `username`, `password`, `level`) VALUES
(31, 'Bui', 'Tam', '2001-07-17', '0911768220', '51900772@student.tdtu.edu.vn', '51900772', '8aec95b421fbf822d26e539e1cb65103', 0),
(34, 'Bui', 'Sang', '1963-03-26', '0911768220', 'buingocsang63@gmail.com', 'sang63', '81dc9bdb52d04dc20036dbd8313ed055', 0),
(40, 'TDTU', 'admin', '2001-07-17', '0911768220', 'buingockhaitam01@gmail.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `reset_password`
--
ALTER TABLE `reset_password`
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
-- AUTO_INCREMENT cho bảng `reset_password`
--
ALTER TABLE `reset_password`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
