-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-12-22 12:40:49
-- サーバのバージョン： 10.4.32-MariaDB
-- PHP のバージョン: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `kadai_news`
--

CREATE TABLE `kadai_news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `category` text NOT NULL,
  `url` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `kadai_news`
--

INSERT INTO `kadai_news` (`id`, `title`, `category`, `url`, `date`) VALUES
(3, '日本の労働生産性“過去最低”30位に OECD加盟38カ国中　ポルトガル並み', '働く', 'https://news.yahoo.co.jp/articles/7933d10218c4bc7b07ce6fa8b8f4a8ff7faa2358', '2023-12-22'),
(4, '北朝鮮、寧辺施設の第2原子炉で核燃料使用のもよう＝ＩＡＥＡ', '北朝鮮', 'https://news.yahoo.co.jp/pickup/6485839', '2023-12-22');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `kadai_news`
--
ALTER TABLE `kadai_news`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `kadai_news`
--
ALTER TABLE `kadai_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
