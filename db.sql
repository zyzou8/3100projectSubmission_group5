-- phpMyAdmin SQL Dump
-- version phpStudy 2014
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2020 年 04 月 24 日 09:20
-- 服务器版本: 5.5.53
-- PHP 版本: 5.4.45

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `db`
--

-- --------------------------------------------------------

--
-- 表的结构 `ads`
--

CREATE TABLE IF NOT EXISTS `ads` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `title` varchar(50) NOT NULL COMMENT 'title',
  `link_url` varchar(255) NOT NULL DEFAULT '' COMMENT 'url',
  `thumb` varchar(255) NOT NULL DEFAULT '' COMMENT 'image path',
  `content` text COMMENT 'content',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'status',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='add banner' AUTO_INCREMENT=22 ;

--
-- 转存表中的数据 `ads`
--

INSERT INTO `ads` (`id`, `title`, `link_url`, `thumb`, `content`, `status`) VALUES
(13, 'Our New Dish Is Out!', '?m=article&id=13', 'uploads/1.jpg', '', 1),
(14, 'Fight Virus Together at SeeYou@Shaw', '?m=article&id=14', 'uploads/2.jpg', '', 1),
(15, 'Canteens - Opening Hours Update', '?m=article&id=15', 'uploads/3.jpg', '', 1),
(20, 'New Banner Image!', '', 'uploads/1587718600.jpg', '', 1),
(21, 'Banner testing', '', 'uploads/1587719131.jpg', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'key',
  `title` varchar(255) NOT NULL COMMENT 'title',
  `description` text COMMENT 'des',
  `category` int(11) DEFAULT NULL COMMENT 'category',
  `thumb` varchar(255) DEFAULT NULL COMMENT 'cover',
  `content` text COMMENT '内容',
  `created` int(11) DEFAULT NULL,
  `updated` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'status',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COMMENT='article' AUTO_INCREMENT=21 ;

--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `title`, `description`, `category`, `thumb`, `content`, `created`, `updated`, `status`) VALUES
(1, 'Our New Dish', 'Take a look! You won''t regret!', 1, 'uploads/1587524577.jpg', 'This is a web page where we can look at new dishes and news of restaurants.  Stay tuned for more information:)', 1587524577, NULL, 1),
(2, 'Our Special', 'Our best selections!', 1, 'uploads/1587524606.jpg', 'There is nothing special right now but I am sure something is coming!', 1587524606, NULL, 1),
(7, 'Chung Chi College Student Canteen', 'Fast Food/Dessert/BBQ', 2, 'uploads/1587524767.jpg', 'Tel: 26036623<br>\nLocation: Chung Chi Tang, Chung Chi College, The Chinese University of Hong Kong, Sha Tin</u></font><br><br>\nBusiness hours: 7:30 ~ 21:00 (Monday to Sunday)\n\n<table>\n<tr><td>Seafood Lotus Leaf Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38</td></tr>\n<tr><td>Assorted Vegetable Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38</td></tr>\n<tr><td>Seafood Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$32</td></tr>\n<tr><td>Plain White Mushrooms</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$32</td></tr>\n<tr><td>Fried Dumplings</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$22</td></tr>\n<tr><td>Tuna Fish Sandwich</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$18</td></tr>\n<tr><td>Fried Noodle with Vegetable and Mushroom</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$45</td></tr>\n<tr><td>Fried Noodle with Mushroom</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$32</td></tr>\n<tr><td>Milk Tea</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$13</td></tr>\n<tr><td>Iced Lemon Tea</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$14</td></tr>\n</table>\n', 1587524767, NULL, 1),
(8, 'United College Student Canteen', 'Fast Food/Dessert/Midnight Snack', 2, 'uploads/1587524778.jpg', 'Tel: 26036555<br>\nLocation: G/F, Cheung Chuk Shan Amenities Building, United College, The Chinese University of Hong Kong, Sha Tin<br><br>\nBusiness hours: 11:00 ~ 21:00 (Monday to Saturday) Rest (Sunday)\n\n<table>\n<tr><td>Pack 2</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$25</td></tr>\n<tr><td>Pack 3</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$28</td></tr>\n<tr><td>Mapo Tofu</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$29</td></tr>\n<tr><td>Sweet Chili & Vegetarian beef</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$36</td></tr>\n<tr><td>Mushroom Curry Noodle</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$36</td></tr>\n<tr><td>Red Braised Vegetarian Minced Pork Ball</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42</td></tr>\n<tr><td>Fried Snap Bean</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$24</td></tr>\n<tr><td>XO Carrot Cake</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$16</td></tr>\n<tr><td>Fried Chicken Leg/Wings</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$15</td></tr>\n<tr><td>Gravy Eel with Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$39</td></tr>\n</table>\n', 1587524778, 1587524848, 1),
(9, 'Coffee Corner', 'Fast Food/Snack/Afternoon Tea', 2, 'uploads/1587524788.jpg', 'Tel: 26036009<br>\nLocation: G/F, Benjamin Franklin Centre, Central Campus, The Chinese University of Hong Kong, Sha Tin<br><br>\nBusiness hours: 7:30 ~ 19:30 (Monday to Saturday) Rest (Sunday)\n<table>\n<tr><td>Spaghetti with Tomato Meat Sauce</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n<tr><td>Black Pepper Chicken Spaghetti</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$36.0</td></tr>\n<tr><td>Seafood Baked Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Western-style Baked Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Japanese-style Udon Noodle</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Japanese Fried Chicken Ramen with Egg</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Shrimp Tempura Curry Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Japanese-style Eel Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$45.0</td></tr>\n<tr><td>Fried Mushroom and Beef Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n<tr><td>Cuttlefish Balls Beef Crab Rice Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n</table>', 1587524788, 1587524843, 1),
(10, 'Benjamin Franklin Centre Student Canteen', 'Fast Food/Hot Pot/Afternoon Tea', 2, 'uploads/1587524802.jpg', 'Tel: 29943412<br>\nLocation: G/F, Benjamin Franklin Centre, Central Campus, The Chinese University of Hong Kong, Sha Tin<br><br>\nBusiness hours: 11:00 ~ 21:00 (Monday to Friday) Rest (Saturday)\n<table>\n<tr><td>Hot Soup with Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38</td></tr>\n<tr><td>Spicy Chicken Set</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Korean-style Beef Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n<tr><td>Plum Ribs Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Fried Pork Neck Meat with Sauce</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$39.0</td></tr>\n<tr><td>Spicy Shredded Chicken</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$43.0</td></tr>\n<tr><td>Dan Dan Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$39.0</td></tr>\n<tr><td>Iced Milk Tea</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$6.0</td></tr>\n<tr><td>Hot Lemon Tea</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$6.0</td></tr>\n</table>', 1587524802, 1587524837, 1),
(11, 'WS Pavilion', 'Fast Food/Dessert', 2, 'uploads/1587524814.jpg', 'Tel: 26035568<br>\nLocation: LG2, Lee Woo Sing College, The Chinese University of Hong Kong, Sha Ti<br><br>\nBusiness hours: 7:30 ~ 21:30 (Monday to Friday)  9:00 ~ 21:30 (Saturday)\n<table>\n<tr><td>Spaghetti with Tomato Meat Sauce</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n<tr><td>Black Pepper Chicken Spaghetti</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$36.0</td></tr>\n<tr><td>Seafood Baked Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Western-style Baked Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Japanese-style Udon Noodle</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Japanese Fried Chicken Ramen with Egg</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$42.0</td></tr>\n<tr><td>Shrimp Tempura Curry Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$40.0</td></tr>\n<tr><td>Japanese-style Eel Rice</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$45.0</td></tr>\n<tr><td>Fried Mushroom and Beef Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n<tr><td>Cuttlefish Balls Beef Crab Rice Noodles</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$38.0</td></tr>\n</table>', 1587524814, 1587524832, 1),
(12, 'Wu Yee Sun College Student Canteen', 'Fast Food/Snack', 2, 'uploads/1587524826.jpg', 'Tel: 12584456<br>\nLocation: LG/F, West Wing, Wu Yee Sun College, The Chinese University of Hong Kong, Sha Tin<br><br>\nBusiness hours: 8:00 ~ 21:00 (Monday to Sunday)\n<table>\n<tr><td>Marinated Turnip</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$27.0</td></tr>\n<tr><td>Black Fungus with Vinegar Sauce</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$27.0</td></tr>\n<tr><td>Hot & Sour Soup (per bowl) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$24.0</td></tr>\n<tr><td>Hot & Sour Soup (Regular) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$78.0</td></tr>\n<tr><td>Minced Beef Thick Soup (per bowl) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$24.0</td></tr>\n<tr><td>Minced Beef Thick Soup (Regular) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$78.0</td></tr>\n<tr><td>Mini Braised Pork (per person) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$31.0</td></tr>\n<tr><td>Double-cooked Pork in Shanghainese Style</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$69.0</td></tr>\n<tr><td>Sliver Strands Bread Rolls (Steamed or Deep Fried) </td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$26.0</td></tr>\n<tr><td>Spring Roll in Shanghainese Style</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$26.0</td></tr>\n<tr><td>Braised Bean Starch Sheets with Spicy Chicken Tip</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$68.0</td></tr>\n<tr><td>Deep Fried Fish Skin with Salt & Pepper</td>\n<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$78.0</td></tr>\n</table>', 1587524826, NULL, 1),
(13, 'Our New Dish Is Out!', 'Welcome to UC canteen joyful inn and taste our new dishes!', 3, 'uploads/1587579950.jpg', 'Our new tea and cafe workshop is open now! Enjoy our new taste of different flavors! We have the best afternoon tea you can find within CUHK! Don''t miss it! Come now!\n', 1587534326, NULL, 1),
(14, 'Fight Virus Together at SeeYou@Shaw', 'Let''s continue to support your lunch order with contactless pre-ordering service! Lunch Box Special Delivery Service!', 3, 'uploads/1587579972.jpg', 'We now have lunch box special delivery service!<br>\nWe have variety of daily menu from $38 with complimentary 250ml packed drink. <br>\nWe have freshly made everyday at SeeYou@Shaw kitchen for delivery to CUHK locations.<br>\nPlace order for the next day via Whatsapp at 0000 1234 before 3pm ; enjoy special discount when ordering 10 or more boxes.<br>\nPick-up time and locations(a minimum daily total order of 10 lunch boxes across the campus is required):<br>\n12:45 pm: outside Yasumoto International Academic Park<br>\n1:00 pm: outside Tin Ka Ping Building Car Park<br>\n1:15 pm: SeeYou@Shaw (Shaw College Cafe)<br>\n[Feel free to enquire about other pick-up time and locations within the campus]<br>', 1587534339, 1587534345, 1),
(15, 'Canteens - Opening Hours Update', 'Canteens - Opening Hours on 20 April', 3, 'uploads/33.jpg', 'Please note that there will be changes in the opening hours for (1) the canteens under the purview of Canteens Management Sub-Committee and (2) BMSB Snack Bar. Please refer to the following notice:<br>\nThey are no longer open due to current special circumstance. We are sorry for your inconvenience.<br>', 1587534360, NULL, 1),
(16, 'Change of Business Hours of Student Canteen', 'Change of Business Hours of Student Canteen, S.H. Ho College on 9 April', 3, 'uploads/4.jpg', 'The business hours of Student Canteen has been changed as below, Mondays-Sundays: 11:00 a.m. – 7:00 p.m.<br>\nThe above change is valid from April-1, 2020 until further notice.\nThank you for your kind attention!<br>', 1587534382, NULL, 1),
(17, '20% Discount on Takeaway Menu!', 'Want to treat yourself a great meal at home?', 3, 'uploads/5.jpg', 'Want to treat yourself a great meal at home? S.H. Ho canteen’s Chinese Cuisine Takeaway Menu is definitely your best choice! Order through mobile now to enjoy 20% off on selected set menus and a la carte menus!', 1587534396, NULL, 1),
(18, 'Enjoy 50% Off on A La Carte dinner dine-in menus!', 'Enjoy fabulous dining privileges at New Asia canteen''s Chinese Cuisine and we bring you 50% off* on a la carte dinner menus!', 3, 'uploads/6.jpg', 'Enjoy fabulous dining privileges at New Asia canteen''s Chinese Cuisine and we bring you 50% off* on a la carte dinner menus!\r\nPromotion date: From now till 23 April 2020<br><br>\r\n\r\n*Promotion is valid from now until further notice. Terms and conditions apply, please refer to our staff for details.', 1587534396, NULL, 1),
(19, 'Use S.H. Ho canteen''s APP and Scan and Skip queuing!', 'Download in your app store now!', 3, 'uploads/7.jpg', 'We''ve released our new app for online order! Try it now!', 1587534396, NULL, 1),
(20, 'Monthly Members'' Benefit in Lee Woo Sing canteen!', 'Take a look at your April Benefit', 3, 'uploads/8.jpg', 'Before 11:00am purchase any Extra Value Breakfast (not including Morning Values Picks) or Happy Meal and present your Lee Woo Sing hostel membership card at our student/staff restaurant to get a free FUZE TEA Honey Pear Tea. updated by admin 0424', 1587534396, 1587718411, 1);

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'id',
  `type` int(11) DEFAULT NULL COMMENT 'type to be extracted',
  `title` varchar(255) DEFAULT NULL COMMENT 'title',
  `thumb` varchar(255) DEFAULT NULL COMMENT 'cover',
  `content` text COMMENT 'des',
  `created` int(11) DEFAULT NULL COMMENT 'time',
  `updated` int(11) DEFAULT NULL COMMENT 'time',
  `status` tinyint(4) NOT NULL DEFAULT '1' COMMENT 'status',
  `pid` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COMMENT='category' AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`id`, `type`, `title`, `thumb`, `content`, `created`, `updated`, `status`, `pid`) VALUES
(1, 1, 'Main', '', NULL, 1587523691, NULL, 1, 0),
(2, 1, 'Menu', '', NULL, 1587523695, NULL, 1, 0),
(3, 1, 'News', '', NULL, 1587534233, NULL, 1, 0);

-- --------------------------------------------------------

--
-- 表的结构 `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(60) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `sex` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `address` text,
  `email` varchar(60) DEFAULT NULL,
  `qq` varchar(20) DEFAULT NULL,
  `tel` varchar(128) DEFAULT NULL,
  `money` decimal(10,2) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `type` int(11) DEFAULT '1',
  `created` int(10) unsigned NOT NULL DEFAULT '0',
  `updated` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`username`),
  KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=32 ;

--
-- 转存表中的数据 `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `sex`, `address`, `email`, `qq`, `tel`, `money`, `thumb`, `type`, `created`, `updated`, `status`) VALUES
(1, 'admin', '0192023a7bbd73250516f069df18b500', 1, '', 'admin@qq.com', '123456789', '13500000000', '1058.00', 'uploads/1515755597.png', 2, 1508940455, 1515755597, 1),
(25, 'test', '81dc9bdb52d04dc20036dbd8313ed055', 0, NULL, NULL, NULL, NULL, NULL, 'admin/images/headpic.png', 1, 1587612023, NULL, 1),
(26, '1234', '81dc9bdb52d04dc20036dbd8313ed055', 0, NULL, NULL, NULL, NULL, NULL, 'admin/images/headpic.png', 1, 1587644332, NULL, 1),
(27, 'test1234', '81dc9bdb52d04dc20036dbd8313ed055', 0, NULL, '', NULL, NULL, NULL, 'admin/images/headpic.png', 1, 1587650984, NULL, 1),
(29, '456', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, '123456@gmail.com', NULL, NULL, NULL, 'admin/images/headpic.png', 1, 1587653077, NULL, 1),
(31, '555', '5b1b68a9abf4d2cd155c81a9225fd158', 0, NULL, '555555@gmail.com', NULL, NULL, NULL, 'admin/images/headpic.png', 1, 1587654986, 1587655294, 1);

-- --------------------------------------------------------

--
-- 表的结构 `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `updated` int(11) NOT NULL,
  `created` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 转存表中的数据 `messages`
--

INSERT INTO `messages` (`id`, `uid`, `name`, `tel`, `content`, `updated`, `created`, `status`) VALUES
(5, 1, 'hello!', '', 'new dish!', 0, 1587652387, 1),
(8, 1, 'admin test', '', 'i''m admin account!', 0, 1587653338, 1),
(12, 31, 'my first post ', '', 'message testing modified!', 1587655156, 1587655085, 1);

-- --------------------------------------------------------

--
-- 表的结构 `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `keywords` text,
  `description` text,
  `copyright` text,
  `address` varchar(255) DEFAULT '0',
  `url` varchar(255) DEFAULT NULL,
  `tel` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `setting`
--

INSERT INTO `setting` (`id`, `title`, `keywords`, `description`, `copyright`, `address`, `url`, `tel`, `email`) VALUES
(1, 'CU c@nteen', '', '', 'All rights reserved by Group 5', '', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
