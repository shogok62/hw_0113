-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- ホスト: 127.0.0.1
-- 生成日時: 2023-01-12 17:42:56
-- サーバのバージョン： 10.4.27-MariaDB
-- PHP のバージョン: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_hw_0106`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_hw_0106_t`
--

CREATE TABLE `gs_hw_0106_t` (
  `id` int(12) NOT NULL,
  `action` char(128) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` char(64) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `content` text CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `gs_hw_0106_t`
--

INSERT INTO `gs_hw_0106_t` (`id`, `action`, `name`, `content`, `indate`) VALUES
(1, '0?0?', '木村匠吾', '気候変動マーチ', '2023-01-06 23:47:11'),
(2, 'rT\rm;R?', '木村匠吾', '化石燃料廃止', '2023-01-06 23:47:53'),
(3, 'b?f?', '木村匠吾', '自民党LGBTQ冊子撤回', '2023-01-07 00:00:46'),
(4, '0?0?', '木村匠吾', 'エジプト大使館前（アラーさん解放）', '2023-01-07 00:01:04'),
(5, 'y>Q?R?_7O\Z', '木村匠吾', '人新世の「資本論」の勉強会をWGメンバーに対して実施（60分）', '2023-01-07 00:01:44'),
(6, '0?0?', '木村匠吾', '国際政治', '2023-01-13 00:40:04'),
(7, 'rT\rm;R?', '政策提言', '子ども政策', '2023-01-13 01:32:18');

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_hw_0106_t`
--
ALTER TABLE `gs_hw_0106_t`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_hw_0106_t`
--
ALTER TABLE `gs_hw_0106_t`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
