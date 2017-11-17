-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2017-11-16 17:14:36
-- 服务器版本： 5.7.17-log
-- PHP Version: 7.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yiyi`
--

-- --------------------------------------------------------

--
-- 表的结构 `cate`
--

CREATE TABLE `cate` (
  `cate_id` int(11) NOT NULL COMMENT '类目id',
  `cate_name` char(120) CHARACTER SET utf8 NOT NULL COMMENT '类目名称',
  `parent_cate_id` int(11) DEFAULT '0' COMMENT '父级类目id',
  `addtimes` datetime NOT NULL COMMENT '添加时间',
  `updatetimes` datetime NOT NULL COMMENT '修改时间',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '状态'
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- 转存表中的数据 `cate`
--

INSERT INTO `cate` (`cate_id`, `cate_name`, `parent_cate_id`, `addtimes`, `updatetimes`, `status`) VALUES
(35, '达芙妮', 24, '2017-11-16 16:45:58', '2017-11-16 16:45:58', 1),
(34, '阿迪达斯', 24, '2017-11-16 16:44:50', '2017-11-16 16:44:50', 1),
(33, '美特斯邦威', 24, '2017-11-16 16:44:39', '2017-11-16 16:44:39', 1),
(32, '七匹狼', 24, '2017-11-16 16:44:15', '2017-11-16 16:44:15', 1),
(31, '围巾', 23, '2017-11-16 16:42:20', '2017-11-16 16:42:20', 1),
(30, '吊坠', 23, '2017-11-16 16:42:05', '2017-11-16 16:42:05', 1),
(29, '项链', 23, '2017-11-16 16:41:54', '2017-11-16 16:41:54', 1),
(28, '牛仔裤', 22, '2017-11-16 16:40:59', '2017-11-16 16:40:59', 1),
(27, '礼服', 22, '2017-11-16 16:40:49', '2017-11-16 16:40:49', 1),
(26, '晚礼服', 22, '2017-11-16 16:40:39', '2017-11-16 16:40:39', 1),
(25, '休闲装', 22, '2017-11-16 16:40:27', '2017-11-16 16:40:27', 1),
(24, '品牌', 0, '2017-11-16 16:39:00', '2017-11-16 16:39:00', 1),
(23, '配饰', 0, '2017-11-16 16:38:31', '2017-11-16 16:38:31', 1),
(22, '服装', 0, '2017-11-16 16:37:57', '2017-11-16 16:37:57', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cate`
--
ALTER TABLE `cate`
  ADD PRIMARY KEY (`cate_id`);

--
-- 在导出的表使用AUTO_INCREMENT
--

--
-- 使用表AUTO_INCREMENT `cate`
--
ALTER TABLE `cate`
  MODIFY `cate_id` int(11) NOT NULL AUTO_INCREMENT COMMENT '类目id', AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
