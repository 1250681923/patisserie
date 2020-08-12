-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2020-03-14 05:29:36
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `php_5932`
--
CREATE DATABASE IF NOT EXISTS `php_5932` DEFAULT CHARACTER SET gb2312 COLLATE gb2312_chinese_ci;
USE `php_5932`;

-- --------------------------------------------------------

--
-- 表的结构 `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `category` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=75 ;

--
-- 转存表中的数据 `category`
--

INSERT INTO `category` (`c_id`, `category`) VALUES
(69, '戚风蛋糕'),
(67, '生日蛋糕'),
(66, '班戟'),
(62, '水果慕斯'),
(71, '马卡龙');

-- --------------------------------------------------------

--
-- 表的结构 `hy`
--

DROP TABLE IF EXISTS `hy`;
CREATE TABLE IF NOT EXISTS `hy` (
  `hy_id` int(4) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `tel` varchar(50) DEFAULT NULL,
  `post_address` varchar(100) DEFAULT NULL,
  `je` int(4) NOT NULL DEFAULT '0',
  `question` varchar(100) DEFAULT NULL,
  `ans` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`hy_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=56 ;

--
-- 转存表中的数据 `hy`
--

INSERT INTO `hy` (`hy_id`, `userid`, `password`, `email`, `name`, `sex`, `tel`, `post_address`, `je`, `question`, `ans`) VALUES
(52, 't001', 't001', '43433@qq.com', '李千秋', '男', '15912551233', '明永门小区物资大厦2201', 0, NULL, NULL),
(45, 'rig', 'rig', '3434343@qq.com', '刘星', '男', '13901220144', NULL, 0, NULL, NULL),
(47, 'cry_pig', 'cry_pig', '43434@qq.com', '刘铮', '', '15901220144', NULL, 0, NULL, NULL),
(50, 'skyline', 'skyline', '5545@qq.com', '周通', '男', '13812115411', '南昌市红光大街1011号', 0, NULL, NULL),
(51, 'frid', 'frid', '3434343@qq.com', '张雁', '女', '43243243', '南京市昆明路', 0, NULL, NULL),
(53, 'snake', 'snake', '33333@qq.com', '李老师', '男', '15912551233', '南京市蟠龙区江河大道', 0, NULL, NULL),
(55, '111', '111', '2@11.com', '111', '男', '13542556543', NULL, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- 表的结构 `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `content` text,
  `c_id` int(4) DEFAULT NULL,
  `t_id` int(11) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  `small_id` int(4) DEFAULT NULL,
  `kc` int(4) NOT NULL DEFAULT '0',
  `is_tj` int(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=150 ;

--
-- 转存表中的数据 `product`
--

INSERT INTO `product` (`product_id`, `name`, `price`, `content`, `c_id`, `t_id`, `pic`, `small_id`, `kc`, `is_tj`) VALUES
(119, '上海三牛万年青饼干1500g', 36, '上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干上海三牛万年青饼干', 69, NULL, 'upload/1554619514.jpg', NULL, 0, 0),
(118, '依梵蒂膨化食品粗粮夹心米果', 30, '依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果依梵蒂膨化食品粗粮夹心米果', 69, NULL, 'upload/1554619455.jpg', NULL, 0, 0),
(117, '口水娃蚕豆兰花豆1500g散装休闲坚果', 38, '口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果口水娃蚕豆兰花豆1500g散装休闲坚果', 69, NULL, 'upload/1554520908.jpg', NULL, 0, 0),
(122, '马卡龙', 19, '马卡龙', 66, NULL, 'upload/1554619786.jpg', NULL, 0, 0),
(123, '小熊蛋糕', 118, '小熊蛋糕', 62, NULL, 'upload/1554619906.jpg', NULL, 0, 0),
(127, '经典蛋糕', 188, '小蛋糕', 67, 9, 'upload/1554620331.jpg', NULL, 0, 0),
(129, '马卡龙', 80, '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">马卡龙，又称作玛卡龙、法式小圆饼，是一种用</span><a target="_blank" href="https://baike.baidu.com/item/%E8%9B%8B%E7%99%BD/8324766">蛋白</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">、</span><a target="_blank" href="https://baike.baidu.com/item/%E6%9D%8F%E4%BB%81%E7%B2%89/2949248">杏仁粉</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">、</span><a target="_blank" href="https://baike.baidu.com/item/%E7%99%BD%E7%A0%82%E7%B3%96/28831">白砂糖</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">和</span><a target="_blank" href="https://baike.baidu.com/item/%E7%B3%96%E9%9C%9C/9269812">糖霜</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">制作，并夹有水果酱或</span><a target="_blank" href="https://baike.baidu.com/item/%E5%A5%B6%E6%B2%B9/695">奶油</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">的法式甜点。口感丰富，外脆内柔，外观五彩缤纷，精致小巧。</span>', 71, 7, 'upload/1554791863.jpg', NULL, 0, 0),
(131, '马卡龙', 70, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	马卡龙刚传到<a target="_blank" href="https://baike.baidu.com/item/%E6%B3%95%E5%9B%BD/1173384">法国</a>时，与如今的马卡龙还是有很大区别的：只是单片，没有夹心。蛋白杏仁饼传到法国后，特别是进入19世纪后，大批法国厨师竞相制作这种甜品，单片渐渐变成夹心；同时，富有想象力的法国大厨们也尝试加入不同的水果和果酱，――甚至是咖啡、巧克力来创造五彩缤纷的颜色。就这样，杏仁饼变成了21世纪的马卡龙。<span class="sup--normal" style="font-size:12px;line-height:0;vertical-align:baseline;color:#3366CC;">&nbsp;[1]</span><a name="ref_[1]_16836782"></a>&nbsp;<a name="ref_1"></a>\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	像这样，在法国发扬光大的马卡龙，被贴上了浓浓的法式标签。因此，马卡龙不单单是一种甜点、一种美食，它更承载着一种文化。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	马卡龙历史上曾是贵族食物，是奢华的象征。但随着历史的发展，马卡龙渐渐进入寻常百姓家，以其缤纷的色彩、清新细腻的口感和小巧玲珑的造型，博得人们，特别是女生们的喜爱。\r\n</div>', 71, 1, 'upload/110.jpg', NULL, 0, 0),
(132, '马卡龙', 99, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	马卡龙层次感分明，外酥内软。咬一口，首先尝到的是很薄但酥脆的外壳，接着是又软又绵密的内层。和奶油的质感不同，杏仁饼的韧劲将馅料撑起，又给软腻的馅料增加了嚼劲。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	一枚完美的马卡龙，表面光滑，无坑疤，在灯光照射下泛着淡淡光泽，饼身下缘还会出现一圈漂亮的蕾丝裙边。由于不同装饰材料，如抹茶粉、水果粉的加入，使得马卡龙呈现出缤纷的颜色。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	制作饼身大概需要75克<a target="_blank" href="https://baike.baidu.com/item/%E7%99%BD%E7%A0%82%E7%B3%96/28831">白砂糖</a>以及90克的糖粉，而在制作内馅过程中还添加60克左右的白砂糖进去，因此许多人认为马卡龙口感过甜。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	马卡龙之所以日趋流行、招人喜欢，很重要一个原因就在于五彩缤纷，十分漂亮的外观。但这些漂亮的外观其实都是食用色素的功劳。也有人尝试把各种天然粉末加到面糊中去，比如抹茶粉、巧克力粉等等。\r\n</div>', 71, 4, 'upload/22.jpg', NULL, 0, 0),
(133, '马卡龙', 130, '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">马卡龙的馅料多种多样，有甜（香草馅，水果馅等），有酸（莓果，</span><a target="_blank" href="https://baike.baidu.com/item/%E6%9F%A0%E6%AA%AC/1067">柠檬</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，</span><a target="_blank" href="https://baike.baidu.com/item/%E7%99%BE%E9%A6%99%E6%9E%9C/1484850">百香果</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">等），有咸（芝士，某些坚果，鱼子酱，鲑鱼等），还有辣（墨西哥辣椒馅），如同人生，丰富多彩。馅料比马卡龙壳更重要，它赋予了马卡龙以灵魂，馅料的好坏直接决定了马卡龙的好坏。</span>', 71, 5, 'upload/33.jpg', NULL, 0, 0),
(134, '水果慕斯', 166, '<div class="__kindeditor_paste__">\r\n	<div class="dl clearfix mt20" style="margin:20px 0px 0px;padding:0px;font-family:tahoma, arial, &quot;font-size:16px;">\r\n		<div class="dd" style="margin:0px;padding:0px;">\r\n			<p>\r\n				A.细砂糖80公克，<a href="https://www.xinshipu.com/jiachangzuofa/885/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">蛋黄</span></a>2个，<a href="https://www.xinshipu.com/jiachangzuofa/7637/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">香草精</span></a>1公克，<a href="https://www.xinshipu.com/jiachangzuofa/7245/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">吉利丁</span></a>4片，<a href="https://www.xinshipu.com/jiachangzuofa/3396/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">鲜奶</span></a>350公克，<a href="https://www.xinshipu.com/jiachangzuofa/5392/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">打发鲜奶油</span></a>500公克，B.<a href="https://www.xinshipu.com/jiachangzuofa/6733/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">水蜜桃</span></a>2片，<a href="https://www.xinshipu.com/zuofadaquan/3120/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">奇异果</span></a>1粒，糖渍<a href="https://www.xinshipu.com/zuofadaquan/5276/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">红樱桃</span></a>5粒，C.<a href="https://www.xinshipu.com/zuofadaquan/4619/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">香草</span></a><a href="https://www.xinshipu.com/jiachangzuofa/6759/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">戚风蛋糕</span></a>2片\r\n			</p>\r\n		</div>\r\n	</div>\r\n	<div class="dl clearfix mt20" style="margin:20px 0px 0px;padding:0px;font-family:tahoma, arial, &quot;font-size:16px;">\r\n		<div class="dt cg2" style="margin:0px;padding:0px;color:#A69F96;">\r\n			做法\r\n		</div>\r\n		<div class="dd" style="margin:0px;padding:0px;">\r\n			<p>\r\n				1.将细砂糖、蛋黄、香草精放入钢盆中拌匀。\r\n			</p>\r\n			<p>\r\n				2.将吉利丁泡水至软化，放入作法1中，再续将鲜奶煮开倒入拌匀至所有材料溶化。\r\n			</p>\r\n			<p>\r\n				3.将作法2隔冰水降温至约10℃（手摸起来有冰凉的感觉），加入打发的鲜奶油轻轻拌匀。\r\n			</p>\r\n			<p>\r\n				4.将材料B的所有水果切成丁，放入作法3中拌匀。\r\n			</p>\r\n			<p>\r\n				5.8', 62, 2, 'upload/55.jpg', NULL, 0, 0),
(135, '慕斯蛋糕', 899, '<span id="__kindeditor_bookmark_start_0__"></span>\r\n<div class="dl clearfix mt20" style="margin:20px 0px 0px;padding:0px;font-family:tahoma, arial, &quot;font-size:16px;">\r\n	<div class="dt cg2" style="margin:0px;padding:0px;color:#A69F96;">\r\n		做法\r\n	</div>\r\n	<div class="dd" style="margin:0px;padding:0px;">\r\n		<p>\r\n			1.将细砂糖、蛋黄、香草精放入钢盆中拌匀。\r\n		</p>\r\n		<p>\r\n			2.将吉利丁泡水至软化，放入作法1中，再续将鲜奶煮开倒入拌匀至所有材料溶化。\r\n		</p>\r\n		<p>\r\n			3.将作法2隔冰水降温至约10℃（手摸起来有冰凉的感觉），加入打发的鲜奶油轻轻拌匀。\r\n		</p>\r\n		<p>\r\n			4.将材料B的所有水果切成丁，放入作法3中拌匀。\r\n		</p>\r\n		<p>\r\n			5.8', 62, 3, 'upload/66.jpg', NULL, 0, 0),
(136, '慕斯蛋糕', 588, '<div class="__kindeditor_paste__">\r\n	<div class="dl clearfix mt20" style="margin:20px 0px 0px;padding:0px;font-family:tahoma, arial, &quot;font-size:16px;">\r\n		<div class="dd" style="margin:0px;padding:0px;">\r\n			<p>\r\n				A.细砂糖80公克，<a href="https://www.xinshipu.com/jiachangzuofa/885/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">蛋黄</span></a>2个，<a href="https://www.xinshipu.com/jiachangzuofa/7637/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">香草精</span></a>1公克，<a href="https://www.xinshipu.com/jiachangzuofa/7245/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">吉利丁</span></a>4片，<a href="https://www.xinshipu.com/jiachangzuofa/3396/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">鲜奶</span></a>350公克，<a href="https://www.xinshipu.com/jiachangzuofa/5392/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">打发鲜奶油</span></a>500公克，B.<a href="https://www.xinshipu.com/jiachangzuofa/6733/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">水蜜桃</span></a>2片，<a href="https://www.xinshipu.com/zuofadaquan/3120/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">奇异果</span></a>1粒，糖渍<a href="https://www.xinshipu.com/zuofadaquan/5276/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">红樱桃</span></a>5粒，C.<a href="https://www.xinshipu.com/zuofadaquan/4619/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">香草</span></a><a href="https://www.xinshipu.com/jiachangzuofa/6759/" target="_blank" class="orange-bottom"><span class="ingredient" style="color:#FA7E3E;">戚风蛋糕</span></a>2片\r\n			</p>\r\n		</div>\r\n	</div>\r\n	<div class="dl clearfix mt20" style="margin:20px 0px 0px;padding:0px;font-family:tahoma, arial, &quot;font-size:16px;">\r\n		<div class="dt cg2" style="margin:0px;padding:0px;color:#A69F96;">\r\n			做法\r\n		</div>\r\n		<div class="dd" style="margin:0px;padding:0px;">\r\n			<p>\r\n				1.将细砂糖、蛋黄、香草精放入钢盆中拌匀。\r\n			</p>\r\n			<p>\r\n				2.将吉利丁泡水至软化，放入作法1中，再续将鲜奶煮开倒入拌匀至所有材料溶化。\r\n			</p>\r\n			<p>\r\n				3.将作法2隔冰水降温至约10℃（手摸起来有冰凉的感觉），加入打发的鲜奶油轻轻拌匀。\r\n			</p>\r\n			<p>\r\n				4.将材料B的所有水果切成丁，放入作法3中拌匀。\r\n			</p>\r\n			<p>\r\n				5.8', 62, 1, 'upload/77.jpg', NULL, 0, 0),
(137, '班级', 20, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	班戟(ban [jǐ])是pancake的粤语音译，是一种以面糊在烤盘或平底锅上烹饪制成的薄扁状饼，又称<a target="_blank" href="https://baike.baidu.com/item/%E8%96%84%E7%85%8E%E9%A5%BC/6066414">薄煎饼</a>、热香饼。最早的班戟制作可以追溯到公元15世纪。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	美式的班戟有（不含酸酵粉的）白面粉、鸡蛋和牛奶三种关键成分；英式的班戟与法国点心可丽饼相像，但没有装饰性的“蕾丝”花边图案。\r\n</div>', 66, 1, 'upload/01.jpg', NULL, 0, 0),
(138, '班戟', 41, '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">美式的热香饼有三种关键成分：（不含酸酵粉的）白面粉、</span><a target="_blank" href="https://baike.baidu.com/item/%E9%B8%A1%E8%9B%8B">鸡蛋</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">和牛奶。烘焙用的</span><a target="_blank" href="https://baike.baidu.com/item/%E5%A5%B6%E6%B2%B9">奶油</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">面糊一般非常湿滑柔软，需要把煎锅倾斜着薄薄一层地摊在底部。烹饪时可能会出现些气泡，出气泡的地方会</span>\r\n<div class="lemma-picture text-pic layout-right" style="border:1px solid #E0E0E0;margin:0px 0px 3px;color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">\r\n	<a class="image-link" href="https://baike.baidu.com/pic/%E7%8F%AD%E6%88%9F/1168888/0/b3f6cea20bf364e2cbefd0f3?fr=lemma&amp;ct=single" target="_blank"><img class="" src="https://bkimg.cdn.bcebos.com/pic/37d3d539b6003af33d80bc1f352ac65c1038b692?x-bce-process=image/resize,m_lfit,w_220,h_220,limit_1" alt="班戟" style="width:200px;height:179px;" /></a><span class="description" style="color:#555555;font-size:12px;font-family:宋体;line-height:15px;">班戟</span>\r\n</div>\r\n<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">在最后出锅的白白的热香饼上留下些黑色的斑点，这种烹饪法不涉及</span><a target="_blank" href="https://baike.baidu.com/item/%E5%8F%91%E9%85%B5">发酵</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">。吃这种热香饼时可在顶上涂些传统的柠檬汁和糖之类的甜品，或者把一些开胃小食卷进去作为一道主菜来食用。</span>', 66, 3, 'upload/02.jpg', NULL, 0, 0),
(149, '班戟', 30, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1、蛋、糖打匀，牛奶和面粉分次加入，打成面粉糊，放入牛油溶液搅匀，待用；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	2、烧热平底锅，放一点油，将一勺面粉糊倒入锅中，搪成圆形，煎成薄饼，用同样的方法再煎12块，待凉；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	3、芒果去皮切片，打起鲜忌廉；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	4、将适量的鲜忌廉涂在薄饼上，再放上<a target="_blank" href="https://baike.baidu.com/item/%E8%8A%92%E6%9E%9C">芒果</a>，包成长卷形，表面洒上糖霜即成。\r\n</div>\r\n<div class="anchor-list " style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<br />\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<span style="font-weight:700;">食材准备</span>\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	普通面粉 75g 、绵白糖 35g 、鸡蛋 2枚 、黄油 20g 、牛奶 250ml、芒果 1片、奇异果 1个 、鲜奶油 10g 、　油 1茶匙（5ml）\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<span style="font-weight:700;">做法</span>\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1、鸡蛋在碗中打散。奇异果和芒果去掉果皮，分别切成4cm长的条。黄油在室温下溶化。鲜奶油打发。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	2、普通面粉用细筛网过筛后，与绵白糖、打好的蛋液、溶化的黄油、牛奶混合，搅拌成均匀没有颗粒的面糊。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	3、平底锅刷上一层油，中火烧至六成热，舀入一勺面糊，转动平底锅，使面糊均匀地摊在锅底，摊成圆形薄饼。\r\n</div>', 66, 3, 'upload/03.jpg', NULL, 0, 0),
(140, '班戟', 38, '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">英式的热香饼与法国点心可丽饼和意大利食品crespelle很相像，只是没有那些装饰性的「蕾丝」花边图案。而苏格兰当地的热香饼，也被叫作Scotch pancake或drop scone，则更像是美国的品种。香港式薄烤饼多由街头流动小贩售卖，以砂糖、花生碎为馅料，故又称砂糖夹饼。吃时对折，然后切成两个扇形，像件蛋糕，据说是源自马来西亚，1960年代曾经盛极一时。外脆内软，有点松糕的烟韧。</span>', 66, 6, 'upload/04.jpg', NULL, 0, 0),
(141, '生日蛋糕', 125, '<div class="lemma-summary" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="para">\r\n		生日蛋糕是一道美食，是过生日的必需品，它最早起源于<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E6%96%B9/1726251">西方</a>，后来才慢慢的传入中国。最早的蛋糕是用几样简单的材料做出来的，这些蛋糕是古老宗教神话与奇迹式迷信的象征。\r\n	</div>\r\n	<div class="para">\r\n		蛋糕种类繁多，比较常见的有<a target="_blank" href="https://baike.baidu.com/item/%E6%85%95%E6%96%AF%E8%9B%8B%E7%B3%95/10639896">慕斯蛋糕</a>、乳酪蛋糕、艺术蛋糕、无糖蛋糕、法式蛋糕、欧式蛋糕、婚礼蛋糕、祝寿蛋糕、巧克力蛋糕、儿童蛋糕、烤芝士蛋糕、冰淇淋蛋糕、奶油水果、经典蛋糕、鲜奶蛋糕、大型蛋糕、冻芝士蛋糕、数码蛋糕等。\r\n	</div>\r\n	<div>\r\n		<br />\r\n	</div>\r\n</div>\r\n<div class="lemmaWgt-promotion-leadPVBtn" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="configModuleBanner" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="basic-info cmn-clearfix" style="margin:20px 0px 35px;background:url(&quot;color:#333333;font-family:arial, 宋体, sans-serif;">\r\n</div>', 67, 1, 'upload/05.jpg', NULL, 0, 0),
(142, '生日蛋糕', 235, '<div class="lemma-summary" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="para">\r\n		生日蛋糕是一道美食，是过生日的必需品，它最早起源于<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E6%96%B9/1726251">西方</a>，后来才慢慢的传入中国。最早的蛋糕是用几样简单的材料做出来的，这些蛋糕是古老宗教神话与奇迹式迷信的象征。\r\n	</div>\r\n	<div class="para">\r\n		蛋糕种类繁多，比较常见的有<a target="_blank" href="https://baike.baidu.com/item/%E6%85%95%E6%96%AF%E8%9B%8B%E7%B3%95/10639896">慕斯蛋糕</a>、乳酪蛋糕、艺术蛋糕、无糖蛋糕、法式蛋糕、欧式蛋糕、婚礼蛋糕、祝寿蛋糕、巧克力蛋糕、儿童蛋糕、烤芝士蛋糕、冰淇淋蛋糕、奶油水果、经典蛋糕、鲜奶蛋糕、大型蛋糕、冻芝士蛋糕、数码蛋糕等。\r\n	</div>\r\n	<div>\r\n		<br />\r\n	</div>\r\n</div>\r\n<div class="lemmaWgt-promotion-leadPVBtn" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="configModuleBanner" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="basic-info cmn-clearfix" style="margin:20px 0px 35px;background:url(&quot;color:#333333;font-family:arial, 宋体, sans-serif;">\r\n</div>', 67, 4, 'upload/06.jpg', NULL, 0, 0),
(143, '生日蛋糕', 565, '<div class="lemma-summary" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="para">\r\n		生日蛋糕是一道美食，是过生日的必需品，它最早起源于<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E6%96%B9/1726251">西方</a>，后来才慢慢的传入中国。最早的蛋糕是用几样简单的材料做出来的，这些蛋糕是古老宗教神话与奇迹式迷信的象征。\r\n	</div>\r\n	<div class="para">\r\n		蛋糕种类繁多，比较常见的有<a target="_blank" href="https://baike.baidu.com/item/%E6%85%95%E6%96%AF%E8%9B%8B%E7%B3%95/10639896">慕斯蛋糕</a>、乳酪蛋糕、艺术蛋糕、无糖蛋糕、法式蛋糕、欧式蛋糕、婚礼蛋糕、祝寿蛋糕、巧克力蛋糕、儿童蛋糕、烤芝士蛋糕、冰淇淋蛋糕、奶油水果、经典蛋糕、鲜奶蛋糕、大型蛋糕、冻芝士蛋糕、数码蛋糕等。\r\n	</div>\r\n	<div>\r\n		<br />\r\n	</div>\r\n</div>\r\n<div class="lemmaWgt-promotion-leadPVBtn" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="configModuleBanner" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="basic-info cmn-clearfix" style="margin:20px 0px 35px;background:url(&quot;color:#333333;font-family:arial, 宋体, sans-serif;">\r\n</div>', 67, 5, 'upload/07.jpg', NULL, 0, 0),
(144, '生日蛋糕', 454, '<div class="lemma-summary" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="para">\r\n		生日蛋糕是一道美食，是过生日的必需品，它最早起源于<a target="_blank" href="https://baike.baidu.com/item/%E8%A5%BF%E6%96%B9/1726251">西方</a>，后来才慢慢的传入中国。最早的蛋糕是用几样简单的材料做出来的，这些蛋糕是古老宗教神话与奇迹式迷信的象征。\r\n	</div>\r\n	<div class="para">\r\n		蛋糕种类繁多，比较常见的有<a target="_blank" href="https://baike.baidu.com/item/%E6%85%95%E6%96%AF%E8%9B%8B%E7%B3%95/10639896">慕斯蛋糕</a>、乳酪蛋糕、艺术蛋糕、无糖蛋糕、法式蛋糕、欧式蛋糕、婚礼蛋糕、祝寿蛋糕、巧克力蛋糕、儿童蛋糕、烤芝士蛋糕、冰淇淋蛋糕、奶油水果、经典蛋糕、鲜奶蛋糕、大型蛋糕、冻芝士蛋糕、数码蛋糕等。\r\n	</div>\r\n	<div>\r\n		<br />\r\n	</div>\r\n</div>\r\n<div class="lemmaWgt-promotion-leadPVBtn" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="configModuleBanner" style="color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n</div>\r\n<div class="basic-info cmn-clearfix" style="margin:20px 0px 35px;background:url(&quot;color:#333333;font-family:arial, 宋体, sans-serif;">\r\n</div>', 67, 3, 'upload/08.jpg', NULL, 0, 0),
(145, '戚风蛋糕', 56, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	戚风蛋糕是一款甜点，属海绵蛋糕类型，制作原料主要有菜油、鸡蛋、糖、面粉、发粉等。但是由于缺乏牛油蛋糕的浓郁香味，戚风蛋糕通常需要味道浓郁的汁、或加上巧克力、水果等配料。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	由于菜油不像<a target="_blank" href="https://baike.baidu.com/item/%E7%89%9B%E6%B2%B9/7103688">牛油</a>（传统蛋糕都是用牛油的）那样容易打泡，因此需要靠把鸡蛋清打成泡沫状，来提供足够的空气以支撑蛋糕的体积。戚风蛋糕含足量的菜油和鸡蛋，因此质地非常的湿润，不像传统牛油蛋糕那样容易变硬。戚风蛋糕也含较少的饱和脂肪。\r\n</div>', 69, 1, 'upload/1.jpg', NULL, 0, 0),
(146, '戚风蛋糕', 565, '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">戚风蛋糕组织膨松，水分含量高，味道清淡不腻，口感滋润嫩爽，是最受欢迎的蛋糕之一。这里要说明的是，戚风蛋糕的质地异常松软，若是将同样重量的全蛋搅拌式海绵蛋糕面糊与戚风蛋糕的面糊同时烘烤，那么戚风蛋糕的体积可能是前者的两倍。戚风蛋糕口感</span><a target="_blank" href="https://baike.baidu.com/item/%E7%BB%B5%E8%BD%AF">绵软</a><span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">，香甜。是外出旅行的和电影院必不可少的休闲美食。</span>', 69, 2, 'upload/2.jpg', NULL, 0, 0),
(147, '戚风蛋糕', 959, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1.<a target="_blank" href="https://baike.baidu.com/item/%E9%B8%A1%E8%9B%8B/6405">鸡蛋</a>提前从冰箱取出，将蛋清、蛋黄分离，低筋面粉加入玉米淀粉、<a target="_blank" href="https://baike.baidu.com/item/%E6%B3%A1%E6%89%93%E7%B2%89">泡打粉</a>、盐混合均匀，过筛备用；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	2.在蛋黄中加入20克白糖，搅打均匀，然后分3-4次加入色拉油、牛奶，搅打至蛋黄液体均匀、浓稠，没有油、水分离的现象；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	3.轻轻加入面粉，快速切拌均匀，液体不能出现面粉颗粒。此时可以将烤箱预热到180度；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	4.<a target="_blank" href="https://baike.baidu.com/item/%E8%9B%8B%E6%B8%85">蛋清</a>中加入柠檬汁，用<a target="_blank" href="https://baike.baidu.com/item/%E6%89%93%E8%9B%8B%E5%99%A8">打蛋器</a>打出鱼眼形的大泡，然后加入20克白糖，剩余的40克白糖每搅打1-2分钟加入一次，分两次加入，直到蛋白硬性发泡。提起打蛋器，顶部的蛋白成三角状竖立，不会弯曲；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	5.取出1/3的蛋清和之前拌好的蛋黄混合，用橡皮刮刀切拌均匀，然后将混合好的面糊倒入蛋清中，迅速的切拌均匀；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	6.立即倒入蛋糕模子中，放入烤箱中层，用180度上下火烘烤40分钟，烤好后取出立即倒扣，晾凉后即可脱模；\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	很多装饰类的蛋糕（奶油水果蛋糕）、奶酪蛋糕、幕斯蛋糕都会用戚风蛋糕做底衬，所以戚风蛋糕在甜点里比较基础和重要。\r\n</div>', 69, 4, 'upload/3.jpg', NULL, 0, 0),
(148, '戚风蛋糕', 56, '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	1、准备材料。面粉需要过筛，蛋白蛋黄分离，盛蛋白的盆要保证无油无水，最好使用不锈钢盆，用打蛋器把蛋白打到呈鱼眼泡状的时候，加入1/3的细砂糖(20克)。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	2、继续搅打到蛋白开始变浓稠，呈较粗泡沫时，再加入1/3糖。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	3、再继续搅打，到蛋白比较浓稠，表面出现纹路的时候，加入剩下的1/3糖。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	4、再继续打一会儿，当提起打蛋器，蛋白能拉出弯曲的尖角的时候，表示已经到了湿性发泡的程度。如果是做戚风蛋糕卷，蛋白打发到这个程度就可以了。但如果制作常规的戚风蛋糕，就还需要继续搅打。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	5、当提起打蛋器的时候，蛋白能拉出一个短小直立的尖角，就表明达到了干性发泡的状态，可以停止搅打了。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	6、蛋白打发的程度非常关键，打到干性发泡以后，就不要继续搅打了，如果搅打过头，蛋白开始呈块状，会造成戚风制作的失败。把打好的蛋白放入冰箱冷藏，开始制作蛋黄糊。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	7、把5个蛋黄加入30克细砂糖，用<a target="_blank" href="https://baike.baidu.com/item/%E6%89%93%E8%9B%8B%E5%99%A8">打蛋器</a>轻轻打散。不要把蛋黄打发（如果蛋黄被打到颜色变浅，体积变大，就说明被打发了。蛋黄打发会导致戚风蛋糕成品中出现较大的孔洞，不够细腻）。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	8、依次加入40克色拉油和40克牛奶，搅拌均匀，再加入过筛后的面粉，用橡皮刮刀轻轻翻拌均匀。不要过度搅拌，以免面粉起筋。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	9、盛1/3蛋白到蛋黄糊中，用橡皮刮刀轻轻翻拌均匀(从底部往上翻拌，不要划圈搅拌，以免蛋白消泡)，翻拌均匀后，把蛋黄糊全部倒入盛蛋白的盆中，用同样的手法翻拌均匀，直到蛋白和蛋黄糊充分混合。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	10、混合好后的状态应该是比较浓稠均匀的浅黄色。将混合好的蛋糕糊倒入模具，抹平，用手端住模具在桌上用力震两下，把内部的大气泡震出来。\r\n</div>', 69, 4, 'upload/4.jpg', NULL, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `shop_order`
--

DROP TABLE IF EXISTS `shop_order`;
CREATE TABLE IF NOT EXISTS `shop_order` (
  `order_id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `telephone` varchar(200) DEFAULT NULL,
  `email` varchar(200) DEFAULT NULL,
  `content` text,
  `ordertime` date DEFAULT NULL,
  `hy_id` int(4) DEFAULT NULL,
  `order_number` varchar(100) DEFAULT NULL,
  `order_state` varchar(100) NOT NULL DEFAULT '已下单',
  `post_way` varchar(200) DEFAULT NULL,
  `product_id` int(4) DEFAULT NULL,
  `order_num` int(4) DEFAULT NULL,
  `order_price` int(4) DEFAULT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=72 ;

--
-- 转存表中的数据 `shop_order`
--

INSERT INTO `shop_order` (`order_id`, `name`, `address`, `telephone`, `email`, `content`, `ordertime`, `hy_id`, `order_number`, `order_state`, `post_way`, `product_id`, `order_num`, `order_price`, `pro_name`) VALUES
(65, '李老师', '南京市蟠龙区江河大道', '15912551233', '33333@qq.com', '早点送到', '2019-04-09', 53, '201904091439541464', '已确认', '', 129, 10, 80, '充电宝'),
(66, '丽丽', '', '13344445555', '', '123', '2019-04-24', 54, '201904241355031898', '已下单', '', 127, 1, 1888, '送显示器i7吃鸡电脑主机'),
(67, '李千秋', '明永门小区物资大厦2201', '15912551233', '', '', '2019-04-27', 52, '201904270024421556', '已下单', '', 129, 1, 80, '充电宝'),
(68, '李千秋', '明永门小区物资大厦2201', '15912551233', '', '', '2019-04-27', 52, '201904270024421556', '已下单', '', 125, 1, 82, '纯棉衬衫女装长袖2019'),
(69, '111', '333', '13542556543', '', '111', '2020-03-13', 55, '202003132059261416', '已下单', '', 116, 2, 799, '美国HARISON汉臣迷你健身车折叠动感单车'),
(70, '111', '333', '13542556543', '', '111', '2020-03-13', 55, '202003132059261416', '已下单', '', 118, 2, 30, '依梵蒂膨化食品粗粮夹心米果'),
(71, '111', '333', '13542556543', '', '111', '2020-03-13', 55, '202003132059261416', '已下单', '', 129, 1, 80, '马卡龙');

-- --------------------------------------------------------

--
-- 表的结构 `taste`
--

DROP TABLE IF EXISTS `taste`;
CREATE TABLE IF NOT EXISTS `taste` (
  `c_id` int(4) NOT NULL AUTO_INCREMENT,
  `taste` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=12 ;

--
-- 转存表中的数据 `taste`
--

INSERT INTO `taste` (`c_id`, `taste`) VALUES
(1, '乳脂奶油'),
(2, '慕斯'),
(3, '慕斯乳酪'),
(4, '巧克力'),
(5, '坚果'),
(6, '水果'),
(7, '含酒'),
(8, '咖啡'),
(9, '冰淇淋');

-- --------------------------------------------------------

--
-- 表的结构 `web_admin`
--

DROP TABLE IF EXISTS `web_admin`;
CREATE TABLE IF NOT EXISTS `web_admin` (
  `admin_id` int(4) NOT NULL AUTO_INCREMENT,
  `web_admin` varchar(25) DEFAULT NULL,
  `password` varchar(25) DEFAULT NULL,
  `qx` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `power` varchar(50) NOT NULL DEFAULT '子管理员',
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=gb2312 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `web_admin`
--

INSERT INTO `web_admin` (`admin_id`, `web_admin`, `password`, `qx`, `name`, `power`) VALUES
(1, 'admin', 'admin', '系统管理,新闻管理,商品管理,订单管理,用户管理', NULL, '超级管理员'),
(6, '110', '110', '新闻管理,商品管理,用户管理', '赵虹', '子管理员'),
(5, '120', '120', '新闻管理,商品管理', '陈涛', '子管理员');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
