-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th8 04, 2023 lúc 12:23 PM
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
-- Cơ sở dữ liệu: `xproject`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `address` varchar(200) DEFAULT NULL,
  `salary` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`id`, `fullname`, `address`, `salary`) VALUES
(1, 'Gunilla Bettis', '02127 7th Pass', 1307),
(2, 'Anett Whitlock', '4 Esch Point', 1360),
(3, 'Nara Pigeram', '77 Gulseth Lane', 4072),
(4, 'Matt Union', '00 Swallow Drive', 2640),
(5, 'Lucienne Schoffler', '7 Anderson Road', 5882),
(6, 'Kylie Blaycock', '0 Arizona Street', 1639),
(7, 'Joleen Ruperti', '6392 Fairfield Alley', 9779),
(8, 'Anselm Standingford', '3 Hagan Avenue', 3012),
(9, 'Kelley Schult', '5894 Waywood Parkway', 1238),
(10, 'Fallon Willoughey', '0 Myrtle Junction', 9731),
(11, 'Darryl Care', '3 Leroy Hill', 4499),
(12, 'Eveline Toping', '9 Monterey Plaza', 5330),
(13, 'Elihu Duckering', '15872 Northwestern Place', 3133),
(14, 'Loria O\'Neal', '1 Waxwing Lane', 3931),
(15, 'Elinore Feedham', '3913 Mariners Cove Park', 1780),
(16, 'Basilio Sadlier', '94300 Green Street', 4406),
(17, 'Con Mattaus', '7691 Vidon Place', 9112),
(18, 'Curran Wilkin', '28926 Wayridge Road', 4465),
(19, 'Garvin Penchen', '6 Fair Oaks Point', 5423),
(20, 'Carmine Rawson', '3 Truax Parkway', 9055),
(21, 'Virgilio Beric', '64859 Hooker Parkway', 2155),
(22, 'Dore Brackley', '3 Straubel Terrace', 6558),
(23, 'Jessey Trunkfield', '1634 Buhler Pass', 6436),
(24, 'Shari Matiashvili', '2 Dorton Street', 3676),
(25, 'Joeann Mindenhall', '968 Vahlen Junction', 3269),
(26, 'Genna Henstone', '5653 Goodland Hill', 9299),
(27, 'Elysia Dreghorn', '1006 Cardinal Trail', 7484),
(28, 'Chelsie Allix', '8364 Towne Crossing', 8620),
(29, 'Jaynell Shoebottom', '90 Norway Maple Point', 2472),
(30, 'Shayne Maevela', '8084 Westend Avenue', 2654),
(31, 'Mildred Oakley', '9766 8th Trail', 6239),
(32, 'Josh Prosch', '1 Cambridge Circle', 6023),
(33, 'Jolie Ribou', '413 Huxley Pass', 2388),
(34, 'Sharlene Brood', '8917 Pine View Alley', 2619),
(35, 'Wyn Haslock', '4 Hazelcrest Terrace', 3802),
(36, 'Barty McKiernan', '11 Cherokee Trail', 2851),
(37, 'Sloan Piscot', '8170 Debs Circle', 8236),
(38, 'Philippa Lavin', '7 Goodland Lane', 6342),
(39, 'Bourke Colebourne', '521 Morningstar Plaza', 4668),
(40, 'Cherilyn Kollas', '49376 Magdeline Junction', 6396),
(41, 'Ollie Wishart', '79219 Pond Lane', 3090),
(42, 'Mallissa Krale', '29451 Carpenter Circle', 5129),
(43, 'Valentijn Labeuil', '01 Chinook Terrace', 4392),
(44, 'Marilyn Corcut', '00872 Mallard Court', 7665),
(45, 'Carine Linstead', '6 Sutherland Hill', 4790),
(46, 'Caleb Burchfield', '82388 Center Terrace', 9640),
(47, 'Basia Senogles', '75997 Fairview Terrace', 2297),
(48, 'Enid Cranefield', '13 Nobel Avenue', 3249),
(49, 'Zechariah Leve', '05 Sunnyside Plaza', 8430),
(50, 'Davide Baudry', '65 Meadow Ridge Point', 6305);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
