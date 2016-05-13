-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014 年 11 月 04 日 14:49
-- 服务器版本: 5.6.12-log
-- PHP 版本: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `project2`
--
CREATE DATABASE IF NOT EXISTS `project2` DEFAULT CHARACTER SET armscii8 COLLATE armscii8_general_ci;
USE `project2`;

-- --------------------------------------------------------

--
-- 表的结构 `b_customer`
--

CREATE TABLE IF NOT EXISTS `b_customer` (
  `cID` varchar(10) NOT NULL DEFAULT '',
  `income` float(20,2) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `b_customer`
--

INSERT INTO `b_customer` (`cID`, `income`, `category`) VALUES
('b0001', 100000.56, 'E-game'),
('b0002', 123412.66, 'E-game'),
('b0003', 900000.00, 'Digital product'),
('b0004', 888888.00, 'Digital product');

-- --------------------------------------------------------

--
-- 表的结构 `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `cID` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `customer`
--

INSERT INTO `customer` (`cID`, `name`, `address`) VALUES
('b0001', 'GG company', '5542 Bacon Street'),
('b0002', 'WP company', '3452 Hobart Street'),
('b0003', 'Gl company', '1110 Fifth Ave.'),
('b0004', 'Sumsung ', '2340 Murray Ave.'),
('h0001', 'Michael Jordan', '5562 Hobart Street'),
('h0002', 'George Bush', '4324 Wightman Street'),
('h0003', 'Brian Reid', '2380 Forbes Ave.'),
('h0004', 'Alfred Vail', '3240 Central Ave.'),
('h0005', 'Robert Cawdrey', '2390 N Bellefield Ave.'),
('h0006', 'George Boole', '4000 Craig Street');

-- --------------------------------------------------------

--
-- 表的结构 `customer_detail`
--

CREATE TABLE IF NOT EXISTS `customer_detail` (
  `cID` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- 表的结构 `h_customer`
--

CREATE TABLE IF NOT EXISTS `h_customer` (
  `cID` varchar(10) NOT NULL DEFAULT '',
  `income` float(10,2) DEFAULT NULL,
  `age` int(3) DEFAULT NULL,
  `marriage` varchar(10) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`cID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `h_customer`
--

INSERT INTO `h_customer` (`cID`, `income`, `age`, `marriage`, `gender`) VALUES
('h0001', 100000.00, 30, 'yes', 'male'),
('h0002', 120000.00, 50, 'no', 'female'),
('h0003', 100000.00, 42, 'yes', 'male'),
('h0004', 88888.00, 23, 'no', 'male'),
('h0005', 90000.00, 25, 'yes', 'female'),
('h0006', 120000.00, 30, 'yes', 'female');

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `pID` varchar(10) NOT NULL DEFAULT '',
  `pname` varchar(40) CHARACTER SET ascii NOT NULL,
  `inventory` int(5) NOT NULL,
  `price` float(10,2) NOT NULL,
  `kind` varchar(10) NOT NULL,
  `cost` float(10,2) NOT NULL,
  PRIMARY KEY (`pID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`pID`, `pname`, `inventory`, `price`, `kind`, `cost`) VALUES
('ca2200', 'Canon PowerShot SX700 HS ', 100, 349.00, 'camera', 200.00),
('ca2209', 'Canon PowerShot ELPH 115 16MP', 100, 129.00, 'camera', 80.00),
('ca2340', 'Canon PowerShot G7 X ', 100, 699.00, 'camera', 340.00),
('ce1314', 'Sumsung Galaxy 3', 100, 1000.00, 'cellphone', 700.00),
('de1110', 'Dell Inspiron i3847-5078BK ', 80, 579.99, 'desktop', 300.00),
('de1210', 'Lenovo C260 19.5-Inch All-in-One ', 90, 349.99, 'desktop', 150.00),
('de2320', 'HP Pavilion 23-g010 23-Inch All-in-One ', 120, 697.00, 'desktop', 400.00),
('la1120', 'HP ENVY 15t i7-4710HQ ', 100, 1099.00, 'laptop', 670.00),
('la2221', 'HP 15-p030nr 15.6-Inch Special Edition ', 100, 599.99, 'laptop', 320.00),
('la2230', 'Apple MacBook Pro MGX72LL/A 13.3-Inch ', 100, 1299.00, 'laptop', 700.00),
('la3330', 'HP Chromebook 14', 20, 299.99, 'laptop', 120.00),
('la4420', 'Dell inspiron 14R-54', 120, 800.00, 'laptop', 500.00);

-- --------------------------------------------------------

--
-- 表的结构 `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `regionID` varchar(10) NOT NULL DEFAULT '',
  `name` varchar(20) NOT NULL,
  `manager` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`regionID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `region`
--

INSERT INTO `region` (`regionID`, `name`, `manager`) VALUES
('CH0012', 'Chicago', 'Vannevar Bush'),
('DA0011', 'Dallas', 'Alan Turing'),
('HO0023', 'Houston', 'Thomas Hobbes'),
('LA0032', 'Los Angeles', 'Isaac Newton'),
('NY2408', 'New York', 'Kevin Xu'),
('PH0023', 'Phoneix', 'Samuel Morse'),
('PHIL1102', 'Philadelphia', 'Bell Michael'),
('PI3920', 'Pittsburgh', 'George Yang'),
('SD0012', 'San Diego', 'Marshall McLuhan');

-- --------------------------------------------------------

--
-- 表的结构 `region_has`
--

CREATE TABLE IF NOT EXISTS `region_has` (
  `storeID` varchar(10) NOT NULL DEFAULT '',
  `regionID` varchar(10) NOT NULL,
  PRIMARY KEY (`storeID`),
  KEY `regionID` (`regionID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `region_has`
--

INSERT INTO `region_has` (`storeID`, `regionID`) VALUES
('AC1959', 'CH0012'),
('BB16701', 'CH0012'),
('WM1247', 'CH0012'),
('BS28', 'DA0011'),
('EPS189', 'HO0023'),
('YR26755', 'HO0023'),
('FA2300', 'LA0032'),
('FA4430', 'NY2408'),
('SB4114', 'NY2408'),
('WSB137', 'NY2408'),
('SF3330', 'PH0023'),
('SGB100', 'PHIL1102'),
('SWA15541', 'PI3920'),
('WS4409', 'PI3920'),
('WCA600', 'SD0012');

-- --------------------------------------------------------

--
-- 表的结构 `salesperson`
--

CREATE TABLE IF NOT EXISTS `salesperson` (
  `sID` varchar(10) NOT NULL DEFAULT '',
  `sname` varchar(20) NOT NULL,
  `address` varchar(30) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `salary` float(10,2) NOT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `salesperson`
--

INSERT INTO `salesperson` (`sID`, `sname`, `address`, `email`, `salary`) VALUES
('1100', 'Mary', '2209 Hobart Street', 'Mary@gmail.com', 3000.00),
('1111', 'Bob', '2210 Hobart Street', 'Bob@gmail.com', 4000.00),
('1112', 'Newton', '2220 N Bellefield Ave.', 'Newton@hotmail.com', 3000.00),
('1113', 'Alan', '2100 Forbes Ave.', 'Alan@gmail.com', 3300.00),
('1114', 'Robert', '2300 Walnut Street', 'Robert@hotmail.com', 3000.00),
('1115', 'Jerry', '2288 Bacon Street', 'Jerry@yahoo.com', 3300.00),
('1116', 'William', '2300 Wightman Street', 'William@yahoo.com', 3000.00),
('2321', 'Carl', '2909 Fifth Ave.', 'Carl@hotmail.com', 2800.00);

-- --------------------------------------------------------

--
-- 表的结构 `salesperson_detail`
--

CREATE TABLE IF NOT EXISTS `salesperson_detail` (
  `sID` varchar(10) NOT NULL DEFAULT '',
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

-- --------------------------------------------------------

--
-- 表的结构 `store`
--

CREATE TABLE IF NOT EXISTS `store` (
  `storeID` varchar(10) NOT NULL DEFAULT '',
  `address` varchar(40) NOT NULL,
  `manager` varchar(20) DEFAULT NULL,
  `num_of_salesperson` int(10) NOT NULL,
  PRIMARY KEY (`storeID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `store`
--

INSERT INTO `store` (`storeID`, `address`, `manager`, `num_of_salesperson`) VALUES
('AC1959', '1959 Auto Center Dr. ', 'Ben Affleck', 80),
('BB16701', '16701 Beach Blvd.', 'Ewan McGregor', 90),
('BS28', '28 Bridge St. ', 'Jake Gyllenhaal', 70),
('EPS189', '189 E Pine St. ', 'Tobey Maguire ', 70),
('FA2300', '2300 Fifth Ave.', 'Alan Kay', 80),
('FA4430', '4430 Forbes Ave.', 'Jack Chen', 80),
('SB4114', '4114 Sepulveda Blvd.', 'Douglas Engelbart', 90),
('SF3330', '3330 S Figueroa St.', 'Johnny Depp', 80),
('SGB100', '100 S San Gabriel Blvd. ', 'Tom Cruise', 90),
('SWA15541', '15541 S Western Ave.', 'Will Smith', 90),
('WCA600', '600 W Commonwealth Ave. ', 'Orlando Bloom', 100),
('WM1247', '1247 W Main St. ', 'Keanu Reeves', 90),
('WS4409', '4409 Walnut Street', 'Tom Johnson', 100),
('WSB137', '137 W San Bernardino Rd.', 'Alicia Keys', 80),
('YR26755', '26755 Ynez Rd.', 'Chris Evans', 90);

-- --------------------------------------------------------

--
-- 表的结构 `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `orderID` varchar(10) NOT NULL,
  `pID` varchar(10) NOT NULL DEFAULT '',
  `cID` varchar(10) NOT NULL DEFAULT '',
  `sID` varchar(10) NOT NULL DEFAULT '',
  `date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `amount` int(10) DEFAULT NULL,
  PRIMARY KEY (`pID`,`cID`,`sID`,`date`),
  UNIQUE KEY `orderID` (`orderID`),
  KEY `cID` (`cID`),
  KEY `sID` (`sID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `transaction`
--

INSERT INTO `transaction` (`orderID`, `pID`, `cID`, `sID`, `date`, `amount`) VALUES
('3', 'ca2200', 'h0004', '1111', '2014-11-13 05:12:26', 2),
('5', 'ca2340', 'h0001', '2321', '2014-10-14 07:19:33', 2),
('1', 'ce1314', 'h0001', '1100', '2014-11-06 08:21:12', 2),
('7', 'de1110', 'h0003', '1112', '2014-11-27 05:11:37', 2),
('6', 'de1210', 'b0003', '1116', '2014-10-28 15:35:29', 100),
('4', 'la3330', 'h0003', '1115', '2014-11-20 10:33:29', 1),
('2', 'la4420', 'h0002', '2321', '2014-11-02 07:38:08', 1);

-- --------------------------------------------------------

--
-- 表的结构 `work_in`
--

CREATE TABLE IF NOT EXISTS `work_in` (
  `sID` varchar(10) NOT NULL DEFAULT '',
  `storeID` varchar(10) NOT NULL,
  PRIMARY KEY (`sID`),
  KEY `storeID` (`storeID`)
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- 转存表中的数据 `work_in`
--

INSERT INTO `work_in` (`sID`, `storeID`) VALUES
('1111', 'AC1959'),
('1116', 'BS28'),
('1112', 'EPS189'),
('1114', 'EPS189'),
('1100', 'FA4430'),
('1113', 'SWA15541'),
('2321', 'WS4409'),
('1115', 'YR26755');

--
-- 限制导出的表
--

--
-- 限制表 `b_customer`
--
ALTER TABLE `b_customer`
  ADD CONSTRAINT `b_customer_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`);

--
-- 限制表 `customer_detail`
--
ALTER TABLE `customer_detail`
  ADD CONSTRAINT `customer_detail_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`);

--
-- 限制表 `h_customer`
--
ALTER TABLE `h_customer`
  ADD CONSTRAINT `h_customer_ibfk_1` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`);

--
-- 限制表 `region_has`
--
ALTER TABLE `region_has`
  ADD CONSTRAINT `region_has_ibfk_2` FOREIGN KEY (`regionID`) REFERENCES `region` (`regionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `region_has_ibfk_1` FOREIGN KEY (`storeID`) REFERENCES `store` (`storeID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 限制表 `salesperson_detail`
--
ALTER TABLE `salesperson_detail`
  ADD CONSTRAINT `salesperson_detail_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `salesperson` (`sID`);

--
-- 限制表 `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`pID`) REFERENCES `product` (`pID`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`cID`) REFERENCES `customer` (`cID`),
  ADD CONSTRAINT `transaction_ibfk_3` FOREIGN KEY (`sID`) REFERENCES `salesperson` (`sID`);

--
-- 限制表 `work_in`
--
ALTER TABLE `work_in`
  ADD CONSTRAINT `work_in_ibfk_2` FOREIGN KEY (`storeID`) REFERENCES `store` (`storeID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `work_in_ibfk_1` FOREIGN KEY (`sID`) REFERENCES `salesperson` (`sID`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
