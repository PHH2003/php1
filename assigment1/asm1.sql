-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2023 lúc 02:31 PM
-- Phiên bản máy phục vụ: 10.4.28-MariaDB
-- Phiên bản PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `asm1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categorys`
--

CREATE TABLE `categorys` (
  `maloai` int(11) NOT NULL,
  `tenloai` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `categorys`
--

INSERT INTO `categorys` (`maloai`, `tenloai`) VALUES
(4, 'Điện thoại'),
(5, 'Laptop'),
(6, 'Tai nghe'),
(7, 'Phụ kiện'),
(8, 'Đồng hồ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `mahh` int(11) NOT NULL,
  `tenhh` varchar(100) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `soluong` float NOT NULL,
  `hinh` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `trangthai` tinyint(1) NOT NULL,
  `maloai` int(11) NOT NULL,
  `ngaytao` varchar(100) NOT NULL,
  `ngaysua` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`mahh`, `tenhh`, `gia`, `soluong`, `hinh`, `mota`, `trangthai`, `maloai`, `ngaytao`, `ngaysua`) VALUES
(5, 'Điện thoại di động Apple iPhone 12 - 64GB - chính hãng VN/A', 17790000.00, 110, 'apple-iphone-12-mini-3.png', 'Mua iPhone 12 giá rẻ chính hãng \\r\\nVào ngày 13/10 vừa qua, Apple đã chính thức cho ra mắt thế hệ iPhone 12 mới với 4 phiên bản, và trong đó mẫu iPhone 12 tiêu chuẩn, với nhiều cải tiến về cả bên ngoài lẫn bên trong, hứa hẹn sẽ lại tiếp tục nối tiếp sự thành công từ chiếc iPhone 11 tiền nhiệm.\\r\\n\\r\\nThiết kế được làm mới lại hoàn toàn\\r\\nNhắc tới Apple, người dùng sẽ luôn nghĩ tới những thiết bị iPhone đẳng cấp, mang trên mình một thiết kế vô cùng sang trọng, hiện đại và thời thượng. Và iPhone 12 Series của năm nay cũng không phải là một ngoại lệ. Mẫu iPhone 12 64GB sở hữu một thiết kế đã được “lột xác” hoàn toàn so với các thế hệ tiền nhiệm trước đây với cạnh được vát phẳng, vuông thành sắc cạnh, mang tới một cảm giác cực kì bền bỉ và chắc chắn. Thiết kế này khiến cho người dùng có thể dễ dàng liên tưởng tới những mẫu iPhone huyền thoại trước đây đã làm nên tên tuổi của Apple như iPhone 4 hoặc iPhone 5.', 0, 4, '2022-03-09', '2022-03-09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categorys`
--
ALTER TABLE `categorys`
  ADD PRIMARY KEY (`maloai`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`mahh`),
  ADD KEY `FK_category_product` (`maloai`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categorys`
--
ALTER TABLE `categorys`
  MODIFY `maloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `mahh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `FK_category_product` FOREIGN KEY (`maloai`) REFERENCES `categorys` (`maloai`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
