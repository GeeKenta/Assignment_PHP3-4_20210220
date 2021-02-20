-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 20, 2021 at 01:03 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Takeuchi_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `bm_table`
--

CREATE TABLE `bm_table` (
  `id` int(12) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` text NOT NULL,
  `comment` text NOT NULL,
  `indate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bm_table`
--

INSERT INTO `bm_table` (`id`, `name`, `url`, `comment`, `indate`) VALUES
(4, 'dagdagdaなるほどね！', 'gadj.com', 'iuida', '2021-02-20 21:50:51'),
(7, 'da', 'gda', 'gda', '2021-02-19 22:59:30'),
(8, '吾輩は猫である', 'url_not found.com', 'comments to come', '2021-02-19 23:00:22'),
(9, 'da', 'da', 'da', '2021-02-20 15:38:06'),
(10, 'da', 'da', 'da', '2021-02-20 15:46:33'),
(11, 'da', 'ga', 'da', '2021-02-20 19:15:27'),
(12, 'だきょうしない', 'uuu', 'da', '2021-02-20 21:50:06'),
(13, 'だ', 'uuu', 'da', '2021-02-20 20:51:40'),
(14, '新日本', 'shinnihon', 'super!', '2021-02-20 21:40:08'),
(15, 'かっとばせ', 'きよはらくん', 'おもろい', '2021-02-20 21:42:33'),
(16, 'はじめてです', 'よろしくです', 'おもろかったよ', '2021-02-20 21:47:38'),
(17, 'お名前です', 'たのむで', 'よいね', '2021-02-20 21:47:55'),
(18, 'そうゆうことね', 'なるほど', 'りょかい', '2021-02-20 21:51:20'),
(19, '1igaito567', 'interesting', 'deshita', '2021-02-20 21:54:55'),
(20, 'てすと', 'テスト', 'test', '2021-02-20 22:00:23');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(12) NOT NULL,
  `u_name` varchar(64) NOT NULL,
  `lid` varchar(128) NOT NULL,
  `lpw` varchar(64) NOT NULL,
  `kanri_flag` int(1) NOT NULL,
  `life_flag` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `u_name`, `lid`, `lpw`, `kanri_flag`, `life_flag`) VALUES
(2, 'Briantやっとできた', 'briantなんとかなった', 'kintetsu', 0, 0),
(3, 'Hori32', 'hori23', 'lotte', 1, 0),
(4, 'akiyama', 'akiyama', 'lions', 1, 0),
(5, 'kiyohara', 'kiyohara', 'lions', 1, 0),
(6, 'yoshinaga吉永', 'yoshinaga吉永', 'hawks', 1, 0),
(7, 'Stevens', 'stevens', 'kintetsu', 1, 0),
(8, 'Boomer', 'boomer', 'braves', 1, 0),
(10, 'Stevens', 'stevens', 'kintetsu', 1, 1),
(11, 'Stevens', 'akiyama', 'lions', 1, 1),
(12, 'Stevens2', 'akiyama2', 'kintetsu2', 1, 1),
(13, 'Stevens', 'akiyama', 'kintetsu', 1, 1),
(14, 'ochiai', 'ochiai', 'dragons', 1, 1),
(15, 'ishiichan', 'ishiichan', 'kintetsu', 1, 1),
(16, 'ishiichan', 'stevens', 'da', 1, 1),
(17, 'briant2', 'briant', 'kintetsu', 1, 1),
(18, 'あたらしい', 'よろしく', 'おねがい', 1, 1),
(19, 'aarashii', 'nakaka', 'getdaze', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bm_table`
--
ALTER TABLE `bm_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bm_table`
--
ALTER TABLE `bm_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
