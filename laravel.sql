-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-05-05 10:49:39
-- 伺服器版本： 10.4.18-MariaDB
-- PHP 版本： 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `laravel`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `tittle` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `img` longtext NOT NULL,
  `content` longtext NOT NULL,
  `views` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`id`, `tittle`, `date`, `img`, `content`, `views`) VALUES
(1, 'aaaa', '0000-00-00', 'https://www.taiwan.net.tw/pic.ashx?qp=/0040112/13_0040112_1.jpg&sizetype=2', 'ABCDEFGHIJKLMNOPQRSTUVWXYZ', 9999),
(2, 'abc', '2021-05-05', 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2', 'asdadasdasdasdasdasd', 0),
(4, 'abc', '2021-05-05', 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2', 'asdadasdasdasdasdasd', 0),
(5, 'abc', '2021-05-05', 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2', 'asdadasdasdasdasdasd', 0),
(6, 'abc', '2021-05-05', 'https://www.taiwan.net.tw/pic.ashx?qp=/0040115/13_0040115.jpg&sizetype=2', 'asdadasdasdasdasdasd', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
