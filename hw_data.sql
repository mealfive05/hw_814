-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2019 年 08 月 14 日 17:50
-- 伺服器版本： 10.3.15-MariaDB
-- PHP 版本： 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `homework`
--

-- --------------------------------------------------------

--
-- 資料表結構 `members`
--

CREATE TABLE `members` (
  `account` varchar(40) NOT NULL,
  `mName` varchar(40) NOT NULL,
  `password` varchar(20) NOT NULL,
  `root` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `members`
--

INSERT INTO `members` (`account`, `mName`, `password`, `root`) VALUES
('jonas', '阿翰', 'jonas', 1),
('sleigh', '阿凱', 'sleigh', 2);

-- --------------------------------------------------------

--
-- 資料表結構 `message`
--

CREATE TABLE `message` (
  `messageId` int(11) NOT NULL,
  `title` varchar(60) NOT NULL,
  `content` text NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 傾印資料表的資料 `message`
--

INSERT INTO `message` (`messageId`, `title`, `content`, `updated_at`, `created_at`) VALUES
(1, '鬼月沒禁忌！錢小豪：我剛才和兒子去潛水', '港星錢小豪從影40年，演過許多經典恐怖片，近來適逢鬼月，被問到有什麼禁忌不能做時，他直言「沒有禁忌」，還透露才剛帶孩子去潛水。\r\n\r\n錢小豪認為自己的作品中，最恐怖的是和陳友合作、2013年上映的《殭屍》，「以前拍殭屍多半輕鬆，甚至有些是搞笑題材，但《殭屍》完全不同，不光殭屍與場景氛圍到位，戲裡呈現出的陰暗面，令人不禁而顫才是最恐怖的！」', '2019-08-12 00:00:00', '2019-08-11 00:00:00'),
(2, '周杰倫監製賽車電影 幕後花絮首曝光', '周杰倫監製的賽車電影《叱咤風雲》從宣布開拍到如今已快2年，幕後花絮首度曝光，幾十輛百萬賽車在國際專業賽道、山路飆速，非常刺激，周董老婆昆凌更演出女車神，擔任監製周杰倫甚至更常常坐鎮現場，跟導演討論劇本，對老婆昆凌主演的電影品質嚴格把關。\r\n\r\n幾十輛百萬賽車在國際專業賽道、山路飆速，場面浩大震撼，這是由天王周杰倫監製的賽車電影《叱咤風雲》。開拍至今快兩年，首度釋出幕後花絮，裡頭不只真實賽車競速畫面大量曝光，還能看到周杰倫和導演討論劇本，甚至老婆昆凌的賽車場面。', '2019-08-13 00:00:00', '2019-08-12 00:00:00'),
(3, '測試', '測試看看', '2019-08-14 09:49:21', '2019-08-14 09:49:21'),
(4, '威力彩開獎囉', '頭獎得主是我!', '2019-08-14 09:49:43', '2019-08-14 09:49:36');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`messageId`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `message`
--
ALTER TABLE `message`
  MODIFY `messageId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
