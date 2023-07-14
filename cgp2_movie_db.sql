-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 14 日 05:45
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `cgp2_movie_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `cgp2_movie_table`
--

CREATE TABLE `cgp2_movie_table` (
  `id` int(12) NOT NULL,
  `onlineMovieUrl` varchar(64) NOT NULL,
  `title` text NOT NULL,
  `industryCategory1` varchar(64) DEFAULT NULL,
  `industryCategory2` varchar(64) DEFAULT NULL,
  `industryText` varchar(128) DEFAULT NULL,
  `campaignGoal` text DEFAULT NULL,
  `targetType` text DEFAULT NULL,
  `appeal` text DEFAULT NULL,
  `storyTelling1` text DEFAULT NULL,
  `storyTelling2` text DEFAULT NULL,
  `shootingTech` text DEFAULT NULL,
  `editingTech` text DEFAULT NULL,
  `onomatopeLight` text DEFAULT NULL,
  `onomatopeWind` text DEFAULT NULL,
  `onomatopeWater` text DEFAULT NULL,
  `onomatopeSound` text DEFAULT NULL,
  `onomatopeMind` text DEFAULT NULL,
  `onomatopeCondition` text DEFAULT NULL,
  `onomatopeIntuition` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `cgp2_movie_table`
--

INSERT INTO `cgp2_movie_table` (`id`, `onlineMovieUrl`, `title`, `industryCategory1`, `industryCategory2`, `industryText`, `campaignGoal`, `targetType`, `appeal`, `storyTelling1`, `storyTelling2`, `shootingTech`, `editingTech`, `onomatopeLight`, `onomatopeWind`, `onomatopeWater`, `onomatopeSound`, `onomatopeMind`, `onomatopeCondition`, `onomatopeIntuition`) VALUES
(215, 'https://www.youtube.com/watch?v=pFSThdSl1xM', 'マンナンライフ ララクラッシュ誕生　カレン karen', '医療/美容/健康', '健康食品関連', '蒟蒻畑', '認知向上/価値観醸成', '4〜12歳,13〜19歳,20〜34歳 女性,35〜49歳 女性,50歳以上 女性,20〜34歳 男性,35〜49歳 男性,50歳以上 男性', 'ニーズ・市場・社会概況などの外的情報', 'メタファー', '利用体験/評価,アニメーション,CG', '三脚撮影,ステディカム', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(216, 'https://www.youtube.com/watch?v=5EwJtZR0Bww', 'マンナンライフ ララクラッシュ ワニ', '医療/美容/健康', '健康食品関連', '蒟蒻畑', 'エンゲージメント/関与', '4〜12歳,13〜19歳,20〜34歳 女性,35〜49歳 女性,50歳以上 女性', 'ニーズ・市場・社会概況などの外的情報', 'メタファー', 'インタビュー/トーク,機能説明/使用法,アニメーション,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(217, 'https://www.youtube.com/watch?v=LQif-jPcG_c', 'マンナンライフ ララクラッシュ JUMP', '医療/美容/健康', '健康食品関連', '蒟蒻畑', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', 'ニーズ・市場・社会概況などの外的情報', 'シンボリック', '利用体験/評価,CG', '三脚撮影,ドリー,スローモーション', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(218, 'https://www.youtube.com/watch?v=tg1QDjbVnIU', 'マンナンライフ　蒟蒻畑　「食ベリーダンス」 篇', '医療/美容/健康', '健康食品関連', '蒟蒻畑', '認知向上/価値観醸成', '4〜12歳,13〜19歳,20〜34歳 女性,35〜49歳 女性,50歳以上 女性,20〜34歳 男性,35〜49歳 男性,50歳以上 男性', 'ニーズ・市場・社会概況などの外的情報', 'メタファー', 'ミュージックビデオ,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(219, 'https://www.youtube.com/watch?v=1VjUb7nRXyQ', 'マンナンライフ　2013/01/12 ON AIR CM  (15s)　', '医療/美容/健康', '健康食品関連', '蒟蒻畑', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', '価格・特徴・効果などの内的情報', '啓発', '利用体験/評価,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(220, 'https://www.youtube.com/watch?v=99NK17v9Sjg', 'サントリー 伊右衛門 特茶 「脂肪積み木（おいしさ）」篇', '医療/美容/健康', '健康食品関連', '伊右衛門 特茶', '', '35〜49歳 女性,50歳以上 女性,35〜49歳 男性,50歳以上 男性', '価格・特徴・効果などの内的情報', '', 'インタビュー/トーク,機能説明/使用法', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(221, 'https://www.youtube.com/watch?v=upz4Qp-vA4o', 'サントリー 伊右衛門 特茶 特茶　分解メカニズム', '医療/美容/健康', '健康食品関連', '伊右衛門 特茶', '認知向上/価値観醸成', '35〜49歳 女性,50歳以上 女性,35〜49歳 男性,50歳以上 男性', '価格・特徴・効果などの内的情報', 'シンボリック,問題提起', '機能説明/使用法,アニメーション', '三脚撮影,ドリー', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(222, 'https://www.youtube.com/watch?v=2zanZHY3_e0', 'サントリー 伊右衛門 特茶　見かけと体脂肪率', '医療/美容/健康', '健康食品関連', '伊右衛門 特茶', '認知向上/価値観醸成', '35〜49歳 女性,35〜49歳 男性', '価格・特徴・効果などの内的情報', 'メタファー', 'インタビュー/トーク,機能説明/使用法', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(223, 'https://www.youtube.com/watch?v=te68frDMJhY', 'サントリー　ニチレイ　アセロラ　アセロラ体操♪夏篇', '食品/飲料/アルコール', 'お茶/珈琲/ジュース類', 'アセロラ', '認知向上/価値観醸成', '13〜19歳,20〜34歳 女性,20〜34歳 男性', 'ニーズ・市場・社会概況などの外的情報', 'メタファー', 'ミュージックビデオ', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(224, 'https://www.youtube.com/watch?v=P_Uu4OvRC5c', 'サントリー 伊右衛門 特茶　薪割り', '医療/美容/健康', '健康食品関連', '伊右衛門 特茶', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,50歳以上 女性', '価格・特徴・効果などの内的情報', 'メタファー,問題提起', '機能説明/使用法,CG', '三脚撮影,スローモーション', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(225, 'https://www.youtube.com/watch?v=iTJ04TGRVTk', '雪印メグミルク ガセリ菌 　長～くとどまる', '医療/美容/健康', '健康食品関連', 'ガセリ菌ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', '価格・特徴・効果などの内的情報', 'メタファー,シンボリック', '機能説明/使用法,アニメーション,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(226, 'https://www.youtube.com/watch?v=rfGB1_CIWxI', '雪印メグミルク　ガセリ菌SP株', '医療/美容/健康', 'その他', 'ガセリ菌', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,50歳以上 女性,20〜34歳 男性,35〜49歳 男性,50歳以上 男性', '価格・特徴・効果などの内的情報', 'プロモーショナル', 'インタビュー/トーク,アニメーション,インフォグラフィック', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(227, 'https://www.youtube.com/watch?v=nTsoMSyOIio', '雪印メグミルク ナチュレ 恵 ガセリ菌太郎勝つ', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', '', '', 'アニメーション,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(228, 'https://www.youtube.com/watch?v=XjRfzPLQ4fU', '雪印メグミルク 恵 通勤・ヨガ', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', '価格・特徴・効果などの内的情報', '問題提起', 'インタビュー/トーク,利用体験/評価,CG', 'ステディカム', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(229, 'https://www.youtube.com/watch?v=GiSuyUzGRig', '雪印メグミルク　恵　おどろく人', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性', '価格・特徴・効果などの内的情報', 'シンボリック,問題提起', 'インタビュー/トーク,機能説明/使用法', '三脚撮影,クレーン/ジブ', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(230, 'https://www.youtube.com/watch?v=M8u3IMBqVEQ', '雪印メグミルク×S 最後の警官', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,50歳以上 女性', '価格・特徴・効果などの内的情報', 'プロモーショナル,問題提起', 'ドラマ', '三脚撮影,手持ち', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(231, 'https://www.youtube.com/watch?v=P7Q4zclnU6w', '雪印　恵 ガセリ菌 式典', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', 'ニーズ・市場・社会概況などの外的情報', 'シンボリック,プロモーショナル', 'ドラマ', '三脚撮影,手持ち,クレーン/ジブ,ドリー', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(232, 'https://www.youtube.com/watch?v=ukiql3PJ49o', '雪印 恵 菌ヨーグルト　リスクケア中', '食品/飲料/アルコール', '食品/加工食品', 'ヨーグルト', '認知向上/価値観醸成', '20〜34歳 女性,35〜49歳 女性', '価格・特徴・効果などの内的情報', 'プロモーショナル,問題提起', '機能説明/使用法,CG', '手持ち', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(236, 'https://www.youtube.com/watch?v=LGoPq4RYd8w', 'ペプシネックス ゼロ　桃太郎 Episode.1', '食品/飲料/アルコール', 'お茶/珈琲/ジュース類', 'ペプシ', 'エンゲージメント/関与', '20〜34歳 女性,35〜49歳 女性,20〜34歳 男性,35〜49歳 男性', 'ニーズ・市場・社会概況などの外的情報', 'アートフル,メタファー,エンターテイニング', 'ドラマ,シネマティック,インタビュー/トーク,CG', '三脚撮影', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- テーブルの構造 `cgp2_title_table`
--

CREATE TABLE `cgp2_title_table` (
  `id` int(128) NOT NULL,
  `title` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `cgp2_url_table`
--

CREATE TABLE `cgp2_url_table` (
  `id` int(128) NOT NULL,
  `url` varchar(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `cgp2_user_table`
--

CREATE TABLE `cgp2_user_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `admin_flg` int(1) NOT NULL,
  `life_flg` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- テーブルのデータのダンプ `cgp2_user_table`
--

INSERT INTO `cgp2_user_table` (`id`, `name`, `lid`, `lpw`, `admin_flg`, `life_flg`) VALUES
(1, 'テスト１管理者', 'test1', 'test1', 1, 0),
(2, 'テスト2一般', 'test2', 'test2', 0, 0),
(3, 'テスト３', 'test3', 'test3', 0, 0);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `cgp2_movie_table`
--
ALTER TABLE `cgp2_movie_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `cgp2_title_table`
--
ALTER TABLE `cgp2_title_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `cgp2_url_table`
--
ALTER TABLE `cgp2_url_table`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `cgp2_user_table`
--
ALTER TABLE `cgp2_user_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `cgp2_movie_table`
--
ALTER TABLE `cgp2_movie_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=237;

--
-- テーブルの AUTO_INCREMENT `cgp2_title_table`
--
ALTER TABLE `cgp2_title_table`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `cgp2_url_table`
--
ALTER TABLE `cgp2_url_table`
  MODIFY `id` int(128) NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `cgp2_user_table`
--
ALTER TABLE `cgp2_user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
