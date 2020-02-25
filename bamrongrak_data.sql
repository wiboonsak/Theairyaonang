-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 08, 2018 at 10:34 AM
-- Server version: 5.6.36-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bamrongrak_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_images_slide`
--

DROP TABLE IF EXISTS `tbl_images_slide`;
CREATE TABLE `tbl_images_slide` (
  `id` int(5) NOT NULL,
  `imge_name` varchar(50) NOT NULL,
  `url` text NOT NULL,
  `data_status` enum('0','1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_images_slide`
--

INSERT INTO `tbl_images_slide` (`id`, `imge_name`, `url`, `data_status`) VALUES
(8, 'c7abfd9ea94efda1ae148c7be5929f99.jpg', '', '1'),
(9, '5b1cd8b5daf3dea112a2cbeed2548ef2.jpg', '', '1'),
(10, '55afdb1808b310ec2d889c05ff81d41e.jpg', '', '1'),
(11, '407cba845623f58fa312c3b47c562710.jpg', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_data`
--

DROP TABLE IF EXISTS `tbl_news_data`;
CREATE TABLE `tbl_news_data` (
  `id` int(10) NOT NULL,
  `news_title` varchar(100) NOT NULL,
  `news_detail` text NOT NULL,
  `news_date_add` date NOT NULL,
  `news_category` int(5) NOT NULL,
  `news_status` enum('0','1','2') NOT NULL DEFAULT '1',
  `images_news` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news_data`
--

INSERT INTO `tbl_news_data` (`id`, `news_title`, `news_detail`, `news_date_add`, `news_category`, `news_status`, `images_news`) VALUES
(1, 'DIGITAL TWIN เทคโนโลยีเปลี่ยนโลกอุตสาหกรรม', 'Digital Twin แบบจำลองวัตถุทางกายภาพ กระบวนการ และระบบ ให้ออกมาเป็นฝาแฝดดิจิทัล ที่มีคุณสมบัติและพฤติกรรมที่เหมือนกันมากที่สุดเท่าที่จะเป็นไปได้ เพื่อนำไปใช้ในวัตถุประสงค์ต่าง ๆ\r\n\r\nABB นับเป็นบริษัทแรกที่นำเสนอ VR สำหรับการเขียนโปรแกรมหุ่นยนต์ผ่าน RobotStudio® ระบบนี้ทำให้วิศวกรหุ่นยนต์ทำงานได้ง่ายขึ้น ด้วยการโต้ตอบกับโมเดล 3 มิติบน RobotStudio® โดยเสียบเข้ากับแว่นตาเสมือนจริงและดูโมเดล 3 มิติจากทุกทิศทางได้ดีกว่าหน้าจอ 2 มิติบนคอมพิวเตอร์\r\n\r\nโปรแกรมนี้มีความสมจริงอย่างมาก โดยจัดวางให้โปรแกรมเมอร์อยู่ในตำแหน่งที่ดีที่สุดเพื่อให้การทำงานมีประสิทธิภาพสูงสุดและมั่นใจได้ในความปลอดภัยเมื่อนำไปใช้งานจริง การเขียนโปรแกรมด้วย VR จะนำคอนโทรลเลอร์แบบใช้มือถือมาสื่อสารกับโมเดล โดยในโลกเสมือนจริงนี้ทำให้โปรแกรมเมอร์สามารถเดินไปรอบ ๆ หุ่นยนต์ ควบคุมแขนหุ่นยนต์และอุปกรณ์ต่าง ๆ ได้ รวมถึงตรวจสอบหุ่นยนต์จากทุกมุม อีกทั้งยังสามารถทำการปรับเปลี่ยนได้ตามความต้องการ\r\n\r\nVR นี้จะแสดงการทำงานให้เห็นบนหน้าจอคอมพิวเตอร์ จึงตอบสนองต่อการทำงานร่วมกันหลายคนพร้อมกันสำหรับพัฒนาโปรแกรมให้เป็นโซลูชั่นที่ดีที่สุด หรือกระทั่งการทำงานระยะไกลร่วมกันผ่านการเชื่อมต่อของ Skype เพื่อเข้าชม workcell และตรวจสอบระบบจากทางไกล ดังนั้น การนำเทคโนโลยี VR เข้ามาใช้ในระบบอัตโนมัติจะช่วยให้ทำงานได้เร็วขึ้นและง่ายขึ้น อีกทั้งช่วยให้มีความเข้าใจการทำงานของโซลูชั่นที่ออกแบบมาได้ดีขึ้น เพื่อการเทรนนิ่งและรวมไปถึงการปรับปรุงกระบวนการผลิตโดยรวมได้อย่างมีประสิทธิภาพ ตัวอย่างเช่น\r\n\r\nสำหรับสายพานลำเลียงที่มีการเคลื่อนไหว การใช้ VR จะทำให้สามารถดูได้อย่างแม่นยำว่าหุ่นยนต์จะเคลื่อนที่ไปพร้อม ๆ กับการเคลื่อนไหวของสายพานลำเลียงอย่างพอดีหรือไม่ โดยไม่ต้องรบกวนกระบวนการผลิตจริง\r\nความสามารถในการจำลองสายเคเบิลที่จะแน่ใจได้ว่า สายเคเบิลจะไม่รบกวนกระบวนการผลิตและไม่ก่อให้เกิดอันตราย\r\nในการเชื่อมนั้น ผู้เชี่ยวชาญสามารถตรวจสอบลำดับการทำงานได้ใกล้ชิดจากในโมเดล 3D และทำการปรับแต่งเพื่อให้ได้ผลลัพธ์ที่ดีกว่าได้ ก่อนที่จะให้หุ่นยนต์เริ่มทำงานจริง\r\nสำหรับการทาสี ผู้ใช้สามารถทาสีและสร้างเส้นทางของหุ่นยนต์จากการควบคุมด้วยมือได้\r\nด้วยเทคโนโลยี VR ที่ทำให้สามารถวางตัวเองในโมเดล 3 มิติได้นั้นสร้างประโยชน์ให้แก่ผู้ใช้อย่างมาก เสริมความมั่นใจในโซลูชั่นที่ออกแบบจะมีประสิทธิภาพสูงสุด ซึ่งจะเป็นการช่วยลดความเครียดได้ด้วย และทำให้สภาพแวดล้อมในการทำงานของผู้ใช้มีความสนุกมากยิ่งขึ้น', '2018-09-06', 0, '1', ''),
(4, 'รีวิว \'Tech Life 2018\' การเปิดตัวนวัตกรรมระดับโลกที่เบอร์ลิน', 'เลอโนโว เล่นใหญ่! เปิดตัวโน้ตบุ๊กพร้อมกัน 4 รุ่น แถมด้วยของเล่นไฮเทคและอุปกรณ์สมาร์ทโฮมในงาน Lenovo Tech Life ใจกลางมหานครเบอร์ลิน ประเทศเยอรมนี\r\n\r\nอย่างที่ทางแบรนด์พูดมาตลอดว่าต้องการสร้างประสบการณ์ใหม่ให้แก่ผู้บริโภค ครั้งนี้ เลอโนโวก็ได้จัดหนัก จัดเต็ม เปิดตัวนวัตกรรมล่าสุด ซึ่ง ไลฟ์สไตล์ไทยรัฐ มีโอกาสได้เป็นแขกรับเชิญเพียงผู้เดียวในประเทศไทย ที่ได้เดินทางไปเห็นนวัตกรมเหล่านี้ด้วยตาตัวเอง จึงอยากจะมาแชร์เรื่อง Lenovo Tech Life ให้ทุกคนได้รับรู้ร่วมกัน\r\n\r\nอ่านข่าวต่อได้ที่: https://www.thairath.co.th/content/1367790', '2018-09-13', 0, '1', ''),
(8, 'อุตฯ เพิ่มมาตรฐานผู้ผลิต', 'หนุนใช้ประโยชน์ศูนย์ทดสอบยานยนต์ไทย\r\nสถาบันยานยนต์ประกาศภารกิจหลัก เติมเต็มบุคลากร-เครื่องมือ-ส่งเสริมใช้ศูนย์ทดสอบในไทย เพื่อสร้างศักยภาพอุตสาหกรรมยานยนต์ไทย\r\n          \r\nนายศิริรุจ จุลกะรัตน์ รองปลัดกระทรวงอุตสาหกรรม ประธานกรรมการสถาบันยานยนต์ เปิดเผยว่า อุตสาหกรรม ยานยนต์และชิ้นส่วนยานยนต์ถือเป็นรากฐานสำคัญในการพัฒนาทางเศรษฐกิจของประเทศไทย จนสามารถก้าวขึ้นสู่การเป็นฐานการผลิตยานยนต์ในระดับ 1 ใน 12 ของโลกได้\r\n          \r\nโดยปัจจุบันมีผู้ประกอบการข้ามชาติที่ใช้ประเทศไทยเป็นฐานการ ผลิตถึง 24 ราย เป็นรถยนต์ 17 ราย รถจักรยานยนต์อีก 7 ราย ผู้ประกอบการ ชิ้นส่วนยานยนต์กว่า 2,000 ราย\r\n          \r\nความสำเร็จข้างต้นตลอด 20 ปีที่ผ่านมา ถือว่าสถาบันยานยนต์ เป็นส่วนหนึ่งของความสำเร็จ ไม่ว่าจะเป็นเรื่องของการสนับสนุนข้อมูล การวิจัยต่าง ๆ เพื่อให้ภาครัฐได้นำ ข้อมูลไปใช้เป็นแนวทางในการวางแผน พัฒนาผู้ประกอบการภายในประเทศ ให้มีขีดความสามารถในการแข่งขัน พัฒนาบุคลากรในอุตสาหกรรม ยานยนต์ การทดสอบและการพัฒนาผลิตภัณฑ์ รวมถึงเทคโนโลยีต่าง ๆ\r\n          \r\nและจากนี้ไป สถาบันยานยนต์จะทวีบทบาททำงานร่วมกับภาครัฐ ผู้ผลิต ยานยนต์ต่าง ๆ ตลอดจนภาคการศึกษา เพื่อให้อุตสาหกรรมยานยนต์ของไทยสามารถปรับตัวพร้อมรับกับความเปลี่ยนแปลงอุตสาหกรรมยานยนต์ โลกที่จะเกิดขึ้นในอนาคต\r\n          \r\nด้านนายอดิศักดิ์ โรหิตะศุน ผู้ทำการแทนผู้อำนวยการสถาบันยานยนต์ กล่าวว่า อุตสาหกรรมยานยนต์ของไทยยังคงยืนหยัด แข็งแกร่ง สามารถทำหน้าที่เป็นเสาหลักในด้านเศรษฐกิจที่สำคัญของประเทศ ด้วยกำลังการผลิต 3 ล้านคันต่อปี ยอดส่งออกสูงมากกว่า 1 ล้านคันต่อปี\r\n          \r\nส่งผลให้อุตสาหกรรมยานยนต์ของไทยสร้างรายได้คิดเป็นร้อยละ 2 ของ GDP ประเทศ และในทศวรรษหน้าจะต้องมีการปรับตัวและเปลี่ยนแปลงครั้งยิ่งใหญ่ ที่อาจเรียกได้ว่าเป็น decade of change และเพื่อรองรับกับความเปลี่ยนแห่งทศวรรษหน้า สถาบันยานยนต์ ได้มีการทบทวนวิสัยทัศน์ บทบาท ภารกิจใหม่ จากการเป็นองค์กรแห่งความรู้และความเชี่ยวชาญ เพื่อการพัฒนาอุตสาหกรรมยานยนต์ไทย\r\n          \r\nสำหรับวิสัยทัศน์ใหม่ ปี 2561 คือ \"องค์กรชั้นนำด้านการพัฒนาอุตสาหกรรมยานยนต์ และชิ้นส่วนสู่อนาคต ด้วยระบบนิเวศที่เป็นมิตรต่อสิ่งแวดล้อม และทันต่อยุคสมัย\" ดังพันธกิจหลักที่ได้กำหนดไว้ คือ การพัฒนาและยกระดับอุตสาหกรรมยานยนต์ สู่อุตสาหกรรมแห่งอนาคต และการเป็นศูนย์ข้อมูลและความเชี่ยวชาญด้านการพัฒนาอุตสาหกรรมยานยนต์ ด้วยการก่อตั้งศูนย์วิจัยอุตสาหกรรมยานยนต์สมัยใหม่ หรือ Next Generation Automotive Research Center เพื่อศึกษาและวิจัยแนวโน้มเทคโนโลยีและนวัตกรรมของยานยนต์ รวมทั้งความเคลื่อนไหวของอุตสาหกรรมอากาศยานและระบบราง เพื่อให้ผู้รับบริการทั้งภาครัฐ ภาคเอกชน และประชาชน ได้นำไปใช้ให้เกิดประโยชน์ได้อย่างสูงสุด\r\n          \r\nที่ผ่านมาทางสถาบันยานยนต์มีการจัดทำแผนปรับปรุงและพัฒนาศูนย์ทดสอบยานยนต์ เพื่อให้สอดคล้องกับการพัฒนาอุตสาหกรรมยานยนต์ของประเทศ ด้วยการขยายศักยภาพทางเทคโนโลยีเครื่องมือการทดสอบสำหรับมาตรฐานยานยนต์อนาคต การเตรียมความพร้อมของบุคลากรทดสอบของสถาบัน และระบบงานมาตรฐาน เพื่อก้าวสู่การเป็นผู้ให้บริการด้านเทคนิคในระดับสากล\r\n         \r\nและสถาบันมีภารกิจเร่งด่วน 4 เรื่องหลัก ที่สถาบันกำลังโฟกัส คือ 1.การขยายศักยภาพทางเทคโนโลยีเครื่องมือการทดสอบสำหรับมาตรฐานยานยนต์อนาคต 2.การเตรียมความพร้อมของบุคลากรทดสอบของสถาบัน 3.การพัฒนาระบบงานมาตรฐานเพื่อก้าวสู่การเป็นผู้ให้บริการด้านเทคนิคในระดับสากล และ 4.การสนับสนุนให้มีการใช้ประโยชน์ศูนย์ทดสอบยานยนต์และยางล้อแห่งชาติ (ATTRIC) ที่ได้มีการจัดสร้างขึ้นเพื่อการ ปรับปรุงและพัฒนาผลิตภัณฑ์ ยกระดับ ความสามารถในการแข่งขันของผู้ประกอบการไทยให้ได้อย่างต่อเนื่อง\r\n\r\n\r\nที่มา: หนังสือพิมพ์ประชาชาติธุรกิจ ฉบับวันที่ 27 - 30 ก.ย. 2561', '2018-10-05', 0, '1', ''),
(9, 'นำเทคโนโลยีผสานประวัติศาสตร์กับปัจจุบัน บอกเล่าเรื่องราวของ วังหน้า', 'กรมศิลปากร ร่วมกับมูลนิธิพระราชนิเวศน์มฤคทายวัน ในพระอุปถัมภ์สมเด็จพระเจ้าภคินีเธอ เจ้าฟ้าเพชรรัตนราชสุดา สิริโสภาพัณณวดี จัด “นิทรรศการวังน่านิมิต” ถ่ายทอดองค์ความรู้ด้านประวัติศาสตร์ของพระราชวังบวรสถานมงคล หรือวังหน้า ซึ่งเป็นที่ประทับของกรมพระราชวังบวรสถานมงคล ซึ่งเป็นตำแหน่งที่พระมหากษัตริย์ทรงสถาปนาขึ้นสำหรับพระมหาอุปราชและมีฐานะเป็นองค์รัชทายาท ตั้งต้นกรุงรัตนโกสินทร์และสิ้นสุดลงในรัชสมัยพระบาทสมเด็จพระจุลจอมเกล้าเจ้าอยู่หัว โดยนิทรรศการนำเสนอรูปแบบใหม่ที่ใช้สื่อเทคโนโลยีในรูปแบบภาพ (visual language) ถ่ายทอดเรื่องราวจากอดีต เพื่อกระตุ้นให้เกิดการเรียนรู้อย่างต่อเนื่อง', '2018-10-06', 0, '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news_images`
--

DROP TABLE IF EXISTS `tbl_news_images`;
CREATE TABLE `tbl_news_images` (
  `id` int(10) NOT NULL,
  `news_id` int(10) NOT NULL,
  `images_name` varchar(50) NOT NULL,
  `images_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news_images`
--

INSERT INTO `tbl_news_images` (`id`, `news_id`, `images_name`, `images_title`) VALUES
(1, 1, 'b0a7c5ce2260c24e17836c86a03a82fc.jpg', ''),
(2, 1, '9d41729af98d0c2f612fe1f8b22cd75e.jpg', ''),
(3, 1, '4f3b3c9fa9dfa3566f3c156c0fec78f2.jpg', ''),
(15, 8, '238c1ed142d4b8f771889bf6211827d0.jpg', ''),
(16, 4, '0d45ad5271895d3e58f231ab09ae123b.jpg', ''),
(17, 4, 'db0d6a88c9aef3b702a1f6bb5878fef3.jpg', ''),
(18, 9, 'b7536180e2be26ef057e2eb4af4f593b.jpg', ''),
(19, 9, 'e14fc061c1f6642c239729a688653300.jpg', ''),
(20, 9, 'dfa96a1de721b9a50cd673048d6c207d.jpg', ''),
(21, 9, '81dbbb5a38bd2c545ae6bbfefd32b53b.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_data`
--

DROP TABLE IF EXISTS `tbl_user_data`;
CREATE TABLE `tbl_user_data` (
  `id` int(10) NOT NULL,
  `name_sname` varchar(100) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `position_level` smallint(5) NOT NULL COMMENT '1 worker , 2 manager , 3 admin , 4 super_admin , 5=sale 6 firstclass 7 mg ceo , 8 branch manager , 9 it depart',
  `position_name` varchar(100) NOT NULL,
  `brach_id` int(10) NOT NULL,
  `depart_id` int(10) NOT NULL,
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_update` int(10) NOT NULL,
  `data_status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '1 use 0 not use'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_user_data`
--

INSERT INTO `tbl_user_data` (`id`, `name_sname`, `user_name`, `password`, `position_level`, `position_name`, `brach_id`, `depart_id`, `last_login`, `user_update`, `data_status`) VALUES
(1, 'MainAdmin', 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 4, 'bigAdmin', 1, 1, '2018-10-08 03:22:04', 1, '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_catagory`
--

DROP TABLE IF EXISTS `tb_product_catagory`;
CREATE TABLE `tb_product_catagory` (
  `id` int(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `category_title` varchar(100) NOT NULL,
  `category_status` enum('0','1','2') NOT NULL DEFAULT '1',
  `category_order` smallint(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_catagory`
--

INSERT INTO `tb_product_catagory` (`id`, `file_name`, `category_title`, `category_status`, `category_order`) VALUES
(1, 'uploadfile/6e6f82d6f372ebd6bc00fb2e2fa267a5.jpg', 'WIDEN', '1', 1),
(2, 'uploadfile/3d5d1bed930ea74dfb58755de55a6cbb.jpg', 'Atlas Copco', '1', 2),
(3, 'uploadfile/2fa651ba87fb5bc6dd1def32329eabb8.jpg', 'Yale', '1', 3),
(4, 'uploadfile/594222f9066b9d3941a3122b28906959.jpg', 'HILTI', '1', 4),
(5, 'uploadfile/f055033c77fc02e326e4269802f911f4.jpg', 'aaa', '0', 5),
(6, 'uploadfile/8edbc9e67ffc2f50c9b64b8f1b4dfd7d.jpg', 'aa', '0', 5),
(7, 'uploadfile/d9917dc1955a9ee707b27d8a9fc63528.jpg', 'ฟฟฟฟ', '0', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_catalogue`
--

DROP TABLE IF EXISTS `tb_product_catalogue`;
CREATE TABLE `tb_product_catalogue` (
  `id` int(10) NOT NULL,
  `imge_name` varchar(50) NOT NULL,
  `product_id` int(10) NOT NULL,
  `txtTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_catalogue`
--

INSERT INTO `tb_product_catalogue` (`id`, `imge_name`, `product_id`, `txtTitle`) VALUES
(4, 'c5e1d99a5fd58e373380f05b89a169d5.pdf', 5, 'Atlas Copco-Air Compressors (Indoor Type)'),
(5, '18b2cc7ca68274e460f9144c483d5da4.pdf', 6, 'เครื่องไฟสนำม Light tower'),
(6, '86d49048333c6cf250b9a793c2d850db.pdf', 7, 'ปั๊มน้ำ Submersible Pump'),
(7, 'fe7cf7569e8d9ce822d59cbb3cbf8abe.pdf', 8, 'HILTI-Coring Machines Diamond System'),
(9, '87554e0f95d670e8560a37e932886167.pdf', 10, 'Air Dryers & Filters เครื่องทำลมแห้งแบบใช้ไฟฟ้า'),
(11, '71faa95a2c69850689e4ab8ef0bd2eca.pdf', 12, 'Generator เครื่องกำเนิดไฟฟ้า'),
(14, '7148b60bebee727d83a0e7631186f827.pdf', 15, 'เครื่องอัดลมแบบเครื่องยนต์'),
(15, '8fc8ebd53a1afbf6bc53085249133415.pdf', 16, 'Screw Air Compressors'),
(16, '88ea87273cdb677d1f38f8b305e88081.pdf', 1, 'Air-operated double diaphragm pump AODD'),
(17, '1975a6f1a947fc0e74fab1c603e44870.pdf', 17, '08 Hoisting Products'),
(18, '4d7a67a79515fdd35cafb08596fafa1f.pdf', 17, '09 table of Contents for Hoisting'),
(19, '533e9bc8e9411b2c8a814142156f205e.pdf', 17, '10 User Information'),
(20, '4d1f283a9b823d57ba26dc8f39cea20f.pdf', 17, '11 User information'),
(21, 'e49caed968a7c529d8fcd5053a66f02e.pdf', 17, '12 User Information'),
(22, '3fa5eb4ba59e1cb8a1df2946217835e9.pdf', 17, '13 User Information'),
(23, '80a4a704188750a603d14e41bd439840.pdf', 18, '14 Rachet Lever hoist C85'),
(24, '1a38a25ecf9cd133c86ae6689a9c6f1b.pdf', 18, '15 Rachet level hoist C85'),
(25, '4cf2033b964e9816d7f3e3d883deed1c.pdf', 18, '16 Rachet Lever Hoist D95'),
(26, '1975d7ef3b953578cbc488757a4835e5.pdf', 18, '17 Rachet Lever Hoist D95'),
(27, '87e3313f68e04e27eaf5f76e34067abb.pdf', 18, '18 Rachet Lever Hoist AL'),
(28, '1172d886bec2ab6a3cbf7bba4c5e262e.pdf', 18, ' 19 Rachet Lever Hoist PT'),
(29, '845fa9b18b72a859e4e8c81dad9220a4.pdf', 18, '20 Rachet lever hoist UNO plus'),
(30, '6305a3c60d21f94eaa4824215b16ca5d.pdf', 18, '21 Rachet lever hoist Handy'),
(31, 'becfa865dbc15b871197fe5e61216bcd.pdf', 18, 'Ratchet lever hoists- UNO-Capacity 750 - 6000 kg'),
(32, '50069d235b75a1fe95e3d1658c217532.pdf', 20, '22 Yalelift 360 1'),
(33, 'b8c3173f0e0ee1d428bb5ce8da6e371a.pdf', 20, '23 Yaleift 360 2'),
(35, 'c7f5a2936dd72c8d7a87603e32f309bb.pdf', 20, '24 Yalelift 360 3'),
(36, '4f28b8d83a9f61bce588789a4335f7d9.pdf', 20, '25 Yalelift 360 4'),
(37, '3575ab6483a7e140e10a1cbe3c1d4ac5.pdf', 20, '26 Towerlift'),
(38, 'f0648582a8ab7b32881f2219ca0ff863.pdf', 20, '27 Towerlift ES'),
(39, 'bf7ca5454125ef6b304be38b60b32d2a.pdf', 20, '28 VSplus 1'),
(40, 'dcec9e3cf99284e83ee42fc17da7d87f.pdf', 20, '29 VSplus 2'),
(41, '2f286a401fac81fe1221db346f41fdd9.pdf', 20, '30 Compact 1'),
(42, 'b3a41647694b0e65a0096f1fe6ed2ca1.pdf', 20, '31 Compact 2'),
(43, '0a0c6b9cb93327bf12be18b017d1ef46.pdf', 20, '32 Yalelift IT 1'),
(44, '75637b497218f4d37df78eefd1d015b6.pdf', 20, '33 Yalelift IT 2'),
(45, '9adb74e90de41c37ba76b9fc99354f1e.pdf', 20, '34 Yalelift 3'),
(46, 'ae062684a33bef9df59a8276e48ac7cd.pdf', 20, '35 Yalelift LH 1'),
(47, 'bd638a9c160522750491f0b3305e5bb7.pdf', 19, '268 User Information 1'),
(48, '9f128937659f8072ea4f49da752695ff.pdf', 20, '36 Yalelift LH 2'),
(49, '93290540af31abba607687b786c52da1.pdf', 19, '269 User Information 2'),
(50, 'b814fe73ff3b88bef0264dda84f10f02.pdf', 20, '37 Yalelift LH 3'),
(51, '8ab89e146ce169ef1df48ed743d89b7e.pdf', 20, '38 Swivel truck trolley hoist VLRP, VLRG 1'),
(52, 'c80d9a141ce621533c5b369991f6490c.pdf', 19, '270 Harnesses'),
(53, '3ae27313f43d1b14d3524be94b39f204.pdf', 20, '38 Swivel truck trolley hoist VLRP, VLRG 2'),
(54, '776315741184da1a03bbf54c1d3729ab.pdf', 20, '40 Trolley Hoist VNRP, VNRG 1'),
(55, 'e29f19e930e922eaae7b77f8570561a2.pdf', 19, '271 Harnesses'),
(56, 'd2da7d359dcb0ac09a3d3397dad81289.pdf', 20, '41 Trolley hoist VNRP, VNRG 2'),
(57, '6e064310b0bf35ee8c90710bb162fb50.pdf', 20, '42 Corrosion & EX proof 1'),
(58, '8b8671cb1aa6e52235aa72a9a458bd2c.pdf', 19, '272 Harnesses'),
(59, '3d4da4e005e177e827077d5f81099db6.pdf', 20, '43 Corrosion & EX proof 2'),
(60, '7478abfcd613a10c2d3649a29ea2bcdd.pdf', 19, '273 Harnesses'),
(61, '261e53d7867ad4f2bcfc5269218c26c9.pdf', 20, '44 Corrosion & EX proof 3'),
(62, '2190a34dfa8fc18e91fd7f5ec4b2438e.pdf', 19, '274 Lanyards'),
(63, 'e22beb3ff123af3c8ec2f6a2b9fc32a7.pdf', 20, '45 Corrosion & Ex proof 4'),
(64, 'cabe4cbc5458d50f674d3bd6b231e991.pdf', 19, '275 Lanyards'),
(65, 'f2c38b688da43465cde6ec488a672319.pdf', 19, '276 Landyards- Accessories'),
(66, 'ce496a6a0e3f9df608d2f87e2231fe97.pdf', 19, '277 Fall arrest blocks'),
(67, '8f80448ee4af219c1c6810c8bbd9a9ae.pdf', 19, '278 Tripod & Winch & Accessories'),
(68, '79296639fecc4f4da08331c818cfe650.pdf', 19, '279 Fall arrester with rope grab'),
(69, '7cc24d20feafbc6a60a24a1a3013f92c.pdf', 21, '46 Trolley HTP HTG 1'),
(70, 'e516f8511bcd8223a21202c482943990.pdf', 19, '280 Height safety kits'),
(71, 'fd5f0a530c9a68ed3151ef1c5bb9a4cf.pdf', 19, '281 Height safety kits'),
(72, '9aaaba9c8ee0b26de295ac090845b8ab.pdf', 21, '47 Trolley HTP HTG 2'),
(73, '63d7bc90e475659bc67e537041690928.pdf', 19, '282 Height safety kits'),
(74, '99a7dff771461e0d28181df03308f81c.pdf', 21, '48 Trolley HTP HTG 3'),
(75, 'b6df434d77718ddfc1ad8c5790948636.pdf', 19, '283 Height safety kits'),
(76, '324a0167a52faef3dcbeeee0bf35bb47.pdf', 21, '49 Trolley Clamp CTP 1'),
(77, 'f36a7d4d5d2e692f121b127e407326e3.pdf', 21, '50 Swivel Truck trolley 1'),
(78, '7fc07e8669c0305cb90ccd5af416a68d.pdf', 21, '51 Swivel Truck trolley 2'),
(79, 'f25d9274adbc0f3843ac7f0585efe9a3.pdf', 21, '52 Electric Trolley 1'),
(80, 'cc260118690b117892b4693807483058.pdf', 21, '53 Electric Trolley 2'),
(81, '3fbafa8cb4dc9993c604acb805ecfe2b.pdf', 21, '54 Beam Clamp YRC'),
(82, '2e8fcc3b77d27f96f081bc32af307a8f.pdf', 21, '55 Beam Clamp YC 1'),
(83, '64cf484ef7bb7436945d9e5823c29559.pdf', 21, '191 Trolley clamp'),
(84, 'dc2706906fc52cf45d3462964c3434b1.pdf', 21, 'Model HTP and Model HTG-Capacity 500 - 20000 kg'),
(85, '67f4f6a0ead8c6887970e6147d9e7142.pdf', 22, '56 User information 1'),
(86, 'c95e8c5e8da223710902cc735863b5b8.pdf', 22, '57 User information 2'),
(87, 'f1ce5be9096755fb0a497074211746c2.pdf', 22, '58 User Information 3'),
(88, '8824030ea33cd5dc1eafc8bac7cc6a2c.pdf', 22, '59 User information 4'),
(89, 'cf8f6c569f235adeaafc755d292b6a34.pdf', 22, '60 Electric Hoist CPS 1 125-500 kg'),
(90, '889419a6a3f24f51ef709965d158ab4c.pdf', 22, '61 Electric Hoist CPS 2 125-500 kg'),
(91, 'bb64c01e1127e072695f27e9117931cc.pdf', 22, '62 Electric Hoist CPV with lug or trolley 250 - 2000 kg 1'),
(92, '4fac6ab049cb01253439ad39cef7bf34.pdf', 22, '63 Electric Hoist CPV with lug or trolley 250 - 2000 kg 2'),
(93, '0200215081a4d65a5c9bc303426bf1fe.pdf', 22, '64 Electric Hoist CPV with lug or trolley 250 - 2000 kg 3'),
(94, '77bc8ef5aa267c747538b63c169c9e1f.pdf', 22, '65 Electric Hoist CPV with lug or trolley 250 - 2000 kg 4'),
(95, '6fbd203ad3d7c1ddc8cee7f6b62ed1c7.pdf', 22, '66 Electric hoist CPE 1600 - 10000 kg 1'),
(96, '4474802159c7339943b042bf67a45c54.pdf', 22, '67 Electric hoist CPE 1600 - 10000 kg 2'),
(97, '49614961c66f0137234f9e803dea0d97.pdf', 22, '68 Electric hoist CPE 1600 - 10000 kg 3'),
(98, 'e3c668cc1ae879cc6b8488a431a18d28.pdf', 23, '250  User Information 1'),
(99, '68a11fbf3a47ca9dde92e04dec8e2499.pdf', 22, '69 Electric Hoist CPE 1600 - 10000 kg 4'),
(100, 'b8f5aecc9d64f110d5ebe421d0f873be.pdf', 23, '251  User Information 2'),
(101, '6de7675da1cb7f179eac1458d2bd96fe.pdf', 22, '70 Electric hoist CPE 1600 - 10000 kg 5'),
(102, 'cf6eb4cfd391efb281522320b01c59f0.pdf', 23, '252  User Information 3'),
(103, '187aa3d86371a40e9d181bd67b6e346d.pdf', 22, '71 Electric hoist CPE 1600 - 10000 kg 6'),
(104, '79f090fed68f27afef8521f3160ef78c.pdf', 23, '253  User Information 4'),
(105, '9bc91f804d585a660741cad30a4f874d.pdf', 23, '254 Cambuckle Lashing 1'),
(106, '3019f2929532d89a2b6d614e4e005278.pdf', 23, '255 Ratchet Lashing 2 250- 500 kg'),
(107, '5b9bbadd7c2625c16e5cd2710c0bd57e.pdf', 23, '256 Ratchet Lashing 3 1000 kg'),
(108, '070a714cb6c37530f94ce9cab2bfc633.pdf', 23, '257 Ratchet Lashing 4 2000 kg'),
(109, 'd7f968934e5e23ad5a980a9706714aa7.pdf', 23, '258 Ratchet Lashing 5 2500 kg'),
(110, '20063fe49195e3796c5fee98ac676759.pdf', 23, '259 Ratchet Lashing 6 5000 kg'),
(111, 'bafeb6e4ea4b9bd898b717891b248291.pdf', 23, '260 Ratchet Lashing  7 with long lever ratchet 2000 kg'),
(112, 'b0eb4af1d62240b8a45fbf198c5da491.pdf', 23, '261 Ratchet Lashing  8 with long lever ratchet 2500 kg'),
(113, '7cd05201da3cf0c8a092b26bb44c0d4b.pdf', 23, '262 Special Lashing  9'),
(114, 'aa107b8ef34b221fd0944e7463415655.pdf', 23, '263 Special Lashing 10'),
(115, '63032afe9415bc17b188c876ceedf08d.pdf', 25, '72 Pneumatic hoist CPA 125 - 980 kg 1'),
(116, 'db99c28c07afaad026c0f252d30b958e.pdf', 23, '264 Accessories 11'),
(117, '31ac337335697c12bed10ea4045e88a3.pdf', 25, '73 Pneumatic hoist CPA 125 - 980 kg 2'),
(118, '5b402b5f1db5f1e2e61c7df631894251.pdf', 23, '265 Accessories 12'),
(119, 'd77da2b51a912fcfe2ec6b9cadba540c.pdf', 25, '74 Pneumatic Hoist CPA 2000 - 10000 kg 1'),
(120, '67eb774b693df54f67bc0d6d2e6265c2.pdf', 23, '266 Load Binders 13'),
(121, '019420a836b0415da5442054e350814a.pdf', 25, '75 Pneumatic Hoist CPA 2000 - 10000 kg 2'),
(122, '615fd51bd41000f64367a1ab7b0363f7.pdf', 23, '267 Weld-on Hooks ASH  14'),
(123, '1175914b2ea8fca470b3ebc6c36f30b9.pdf', 25, '76 Pneumatic Hoist CPA 2000 - 10000 kg 3'),
(124, '275941ca2e2563722897e3fe4aab9fd7.pdf', 23, 'Lashing Systems-Ratchet lashings-Model ZGR-25-250'),
(125, '939e1a68414c2ba56117c128b1a4f9aa.pdf', 25, '77 Pneumatic Hoist CPA 2000 - 10000 kg 4'),
(126, '45ca3742e8581a3299448e62807e56a1.pdf', 23, 'Lashing Systems-Ratchet lashings-Model ZGR-25-500'),
(127, 'b17e2c02d671508f8eb0605856cda96c.pdf', 23, 'Lashing Systems-Ratchet lashings-Model ZGR-35-1000'),
(128, '25c391bc6884aaac44cad61a06c8c731.pdf', 23, 'Lashing Systems-Ratchet lashings-Model ZGR-50-2500'),
(129, '46487a5c1ca939c1e01d173b8ae42d34.pdf', 26, '78 Chain Stop YKST'),
(130, '2a1b30b3e6c0d7b7df244e847ee141d0.pdf', 26, '79 Yale link chains'),
(131, '494d2cfdfea896e2654441d674fd002e.pdf', 27, '80 กว้านคอนโซล LB 150 - 1200 กก. 1'),
(132, '2e96844d15e0d63198a6a6b73300295e.pdf', 27, '81 เครื่องกว้านที่ติดตั้งคอนโซล LB 150 - 1200 กก. 2'),
(133, 'f5b738af57ead0466e75b5d64ff7f3a2.pdf', 27, '82 กว้านติดผนัง SW-W 80-750 กก. 1'),
(134, '933d757d18543d7f02f3cea35ad9e389.pdf', 27, '83 กว้านติดผนัง SW-W ALPHA 300 - 1000 กก'),
(135, '226726e97d164ab9659ff5f6619bbe37.pdf', 27, '84 เครื่องกว้านติดผนังพร้อมเกียร์หนอน SW-W-SGG 250 - 750 กก'),
(136, '2ba9acd77d99cdb6270e106e883f00e0.pdf', 27, '85 กว้านติดผนังพร้อมเกียร์หนอน SW-W-SGO 250 - 5000 กก'),
(137, '3ebb975d36d67755c731f97f1e90bd08.pdf', 27, '86 กว้านอลูมิเนียมที่ติดตั้งคอนโซล SW-K GAMMA 200 - 800 กก'),
(138, 'e9e28c42368c919ba59407ddee6479a5.pdf', 27, '87 เครื่องกว้านอลูมิเนียมขนาดกะทัดรัดพร้อมชุดขับเคลื่อนฟรี SW-KAL 750 - 1120 กก'),
(139, '6e131f1920564e02c2bdbe6f502dcb10.pdf', 27, '88 กว้านยึด SW-K LAMBDA 300 กก'),
(140, 'cf6a2a24ebf5a18c507d60301458a6b0.pdf', 27, '89 ชีฟบล็อก DSRB S'),
(141, '78645836017bb5e9c5c02807416df876.pdf', 27, '90 เครื่องกว้านติดผนังพร้อมชุดเกียร์หนอนน้ำจืด MWS 125- 2000 kg 1'),
(142, 'ce595a7ed1d5cba33ff81f0b3871b5b0.pdf', 27, '91 เครื่องกว้านติดผนังพร้อมชุดเกียร์หนอนใยเกียร์ MWS 125 - 2000 kg 2'),
(143, 'e496f345c3d13cca672ed8b80ac07b1c.pdf', 28, '92 Cable puller Yaletrac 1'),
(144, 'b3eef48a2ace9576e53617d4414c72ea.pdf', 28, '93 Cable puller Yaletrac 2'),
(145, '10a37c6288260d6be1509723835f99e4.pdf', 28, '94 Cable Puller LP 500 kg'),
(146, 'ef1cb9c0859a99032d92c9be1d6b0ccd.pdf', 28, '95 Cable Puller LM 500 - 1800 daN'),
(147, '35d871ab077265005a1d266cf5ac11b8.pdf', 28, '96 Pulley Black 1000 - 6400 kg'),
(148, 'd33d2b33ce372798e57fad5965b916bb.pdf', 28, '97 Cable grip LMG 2000 - 5000 daN'),
(149, 'f3afb9b591c1f8c80a870c354629551e.pdf', 28, '98 User information 1'),
(150, 'ef090db2dbb7d643afeedf2365b25a77.pdf', 28, '99 User information 2'),
(151, '92b873b1f6e1ed4b52db741162598a5c.pdf', 28, '100 Yaletrac Pulling force 800 - 3200 daN'),
(152, '39f39aa48fa55f15eeb324c73c7cc9fe.pdf', 29, '100 electric winch'),
(153, '54067717fa471d5ccbaaf58da3f29903.pdf', 29, '101 Electric construction winch EBW 200 kg'),
(154, '220b874f1c91f3a4712e054e45f04ddd.pdf', 29, '102 Electric winch RPE 250 - 1000 kg 1'),
(155, 'f6d73cdc3f81a022ad8df2beeffcc719.pdf', 29, '103 Electric winch RPE 250 - 1000 kg 2'),
(156, '7c4ff0f87d15b25d9816ac616355f828.pdf', 29, '104 Electric Winch RPE 250 - 1000 kg 3'),
(157, '1a0720ea00f05a5b268118d8d7e0d8f5.pdf', 29, '105 electric winch RPE 250 - 1000 kg 4'),
(158, '3379be7991c5454592040e620063440f.pdf', 29, '108 Electric Winch SW-E BETA PROLINE 250 - 7000 kg 1'),
(159, 'a65b6637155ea0bbb4c200b150765e7b.pdf', 29, '109 Electric Winch SW-E BETA PROLINE 250 - 7000 kg 2'),
(160, '35cf1ffbb4b3d36e434f2ffd2a191892.pdf', 30, '230 Table of contents 1'),
(161, '5c9bfabb9a2f4b3ae0a623b7589f44e4.pdf', 30, '231 Table of contents 2'),
(162, '40e31fc84a56986ea9627c8cfe29924c.pdf', 30, '232 User Information 1'),
(163, '2663cd894011766d14429031e607b3d1.pdf', 29, '110 Electric Winch SW-E BETA PROLINE 250 - 7000 kg 3'),
(164, '729154453fe65ec4ced6976c0e27aafa.pdf', 30, '233 User Information 2'),
(165, '3bacccd9ae2c763ce088285ae306dcab.pdf', 29, '111 Sheave Block DSRB S 700-8000 kg'),
(166, 'd1cac9a4767e310dd148896e190623f9.pdf', 30, '234 User Information 3'),
(167, '28d136cf8838b7ac5dc5fde0668110f6.pdf', 29, '112 Electric Winch BETA SILVERLINE 125 - 3200 KG 1'),
(168, 'd085bfd71f5223395e834fc5d3470e72.pdf', 30, '235 User Information 4'),
(169, 'd713f29dbee14f056f7a41cc312c5780.pdf', 29, '113 Electric Winch BETA SILVERLINE 125 - 3200 kg 2'),
(170, 'd825482bae554e325c1d7aefb653f729.pdf', 30, '236 Round Sling RSD'),
(171, '91461724d9fdf1bd0bc7eaf0f28f209b.pdf', 30, '237 Round Sling RSX'),
(172, '4b4d81594a7c6c36cdee5dd1f9157391.pdf', 29, '114 Endless winch for goods & personnel YaleMtrac 500 - 980 kg 1'),
(173, '37c04b9f448fb4e93adaf58207e16b84.pdf', 30, '238 Round Sling RSE'),
(174, '2af191183e51e252427c8fa5cc439783.pdf', 29, '115 Endless winch for goods & personnel YaleMtrac 500 -980 kg 2'),
(175, 'd8118d3461a8902d8f29bd51292ded12.pdf', 30, '239 Round Sling Assembly1'),
(176, '80c1a6f1150e0f5e581d03af7ba360a7.pdf', 29, '116 Endless winch for goods & personnel YaleMtrac 500 - 980 kg 3'),
(177, 'c24a1260600547ed12d545bb6eb71f8a.pdf', 30, '240 Round Sling Assembly 2'),
(178, '44a2980e06fdb0d8cf8c4217a4fe0ca4.pdf', 29, '117 Endless winch for goods & personnel YaleMtrac 500 - 980 kg 4'),
(179, 'b3492181e11720d1cd396d28f6290b25.pdf', 30, '241 Round Sling Assembly 3'),
(180, '6728dc82fcb4b86d27162350b48ce17e.pdf', 29, '118 Monorail trolley hoist YGK-E 1600 - 15000 kg 1'),
(181, '50b78181d4fad0eca1f6003dd41639bd.pdf', 30, '242 Endless Flat webbing sling HSE 1'),
(182, 'f952a2174e43efae97f54b3b4457a5da.pdf', 29, '119 Monorail trolley hoist YGK-E 1600 - 15000 kg 2'),
(183, 'b81d345567d2936cb85966314fbf6bc9.pdf', 30, '243 Flat webbing sling 2'),
(184, 'cce3e8c7f5fa552bd63edbc89a43596e.pdf', 29, '120 Monorail trolley hoist YGK-E 1600 - 15000 kg 3'),
(185, '1fdb99f790538d5aea907e5f892df8f4.pdf', 30, '244 Flat webbing sling 3'),
(186, 'f0c9ebfa1c72734fad3e791506019af7.pdf', 30, '245 Flat webbing sling 4'),
(187, 'bb0782f3bdb57888f4ba04ec62e39b6f.pdf', 29, '121 Monorail trolley hoist YGK-E 1600 - 15000 kg 4'),
(188, '1aaebee9a54762156a543ae0e446c276.pdf', 30, '246 Accessories 5'),
(189, '21a3867b5807cbd19a60127416750239.pdf', 30, '247 Accessories 6'),
(190, 'b5d571d8cfbd4c267a4e20e9dd31ef05.pdf', 30, '248 Accessories 7'),
(191, '05711932ae4c2528c331ab38f5981f62.pdf', 30, '249 Accessories 8'),
(193, '77a21f1ca138310fa2f759e3e420f2cb.pdf', 31, '106 Pneumatic winch RPA 250 - 500 daN 1'),
(194, '5356e7ab001ec8556242c9ba5d4a131d.pdf', 31, '107 Pneumatic winch RPA 250 - 500 dan 2'),
(195, '93f899267f2a29315cff801991b0c5e9.pdf', 33, '222 Spring tensioners YFS 1'),
(196, '50d6e33bf6bdc0e2094fd85c745b4548.pdf', 32, '122 Rachet jack Yaletaurus 10000 กก'),
(197, '4a441158a24adc87edd7baf0b35ccdc8.pdf', 33, '223 Spring tensioners YFS 2'),
(198, '2171f7adbb6fb52b1fadf9d39d0fb808.pdf', 33, '224 Spring Balancers 1'),
(199, 'a78bc340be4279d4b35fd76a5c0a4d7a.pdf', 32, '123 ปลั๊กสตีล STW-V, STW-F 1500 - 10000 กก'),
(200, '70f8bf8474a8df6037317a0040230b02.pdf', 33, '225 Spring Balancers 2'),
(201, '30f9d29b6531be92e17c487a4f4b5e5c.pdf', 33, '226 Spring Balancers 3'),
(202, '6d115afdba973c66c45eedc0f14d969f.pdf', 32, '124 ปลั๊กเหล็ก SJ 1500 - 10000 กก'),
(203, 'ee3b0768f7bf8229c2be5fcfb23ff750.pdf', 33, '227 Spring Balancers 4'),
(204, 'df28ea08d4b43084269af71da6377587.pdf', 32, '125 ข้อเหวี่ยงเบรกเกอร์นิรภัย'),
(205, '9a8ee0d3ae1fc6d26abcb95a9b272843.pdf', 33, '228 Spring Balancers 5'),
(206, '5a9edee193cd630f0f81bb285d08337d.pdf', 33, '229 Spring Balancers 6'),
(207, '04e563a26f8ae23ee578bcc82db90cde.pdf', 32, '126 แจ็คพ็อตและแจ็คเก็ตติดตั้งบนผนัง ZWW 250 - 10000 กก. 1'),
(208, '9f050ac23ff4026c9d490ca83b21a443.pdf', 32, '127 แจ็คพ็อตและแจ็คเก็ตติดตั้งบนผนัง ZWW 250 - 10000 กก. 2'),
(209, '15c6f769734bb5ee3bb6c8374dbaf0cc.pdf', 32, '128 ยกกระชาก HB 100 กก'),
(210, '9b6df4312515b27eea76dd8103469fee.pdf', 32, '129 รถบรรทุกยกรถบรรทุก 3000 - 7000 กก'),
(211, 'b94a3c78158a278108a6614a93fa6488.pdf', 32, 'ขันสกรูก่อสร้างรุ่น BSW 12000 - 30000 กก'),
(212, 'f1c2f38fa7e498ec9fa3f339b6f97d73.pdf', 32, '131 Worn gear drive S20 S24'),
(213, '4fb5f78ede1ec045ed8f3eba04fd36ff.pdf', 34, '132 User Information'),
(214, '2d44cac64a84a4406d587e56b830a512.pdf', 34, '133 Questionaire'),
(215, 'af89669c816021699c32f1ecf9e6218b.pdf', 34, '134 Wall-mounted jib crane PMS 50-2500 kg 1'),
(216, 'c7f549034b9404e187645c0ece6de1a0.pdf', 35, '218 crane weighers 1'),
(217, '1b67d3f47b7b9a2ac23ffbe811139927.pdf', 35, '219 crane weighers 2'),
(218, '6c330c61b2a255ae3b8a039fd7a489d3.pdf', 35, '220 Load indicator 1'),
(219, '6b67a01dac7bb9b7950fe2197b96ddce.pdf', 34, '135 Wall-mounted jib crane PMS 50-2500 kg 2'),
(220, '24edcd7ff193a0527fa3a6dca96534e8.pdf', 35, '221 Load indicator 2'),
(221, '0eb77b257356ec50b62d8dc3eaf29df9.pdf', 34, '136 Floor-mounted jib crane PFSP 50-2500 kg'),
(222, '67845949ca813d0009afc0c7d1b5b48d.pdf', 34, '137 Floor-mounted jib crane PFM 50-1000 kg'),
(223, '049660b96d4eba8d95611a4007177716.pdf', 34, '138 Floor-mounted jib crane PFP 500-3200 kg'),
(224, '2143c0191e22b925033e21fed9795cd3.pdf', 34, '139 Safety distances'),
(225, '45374a31c428f8f746b36e7496c9c457.pdf', 34, '140 Standard base plate'),
(226, 'b2228284a5da5f5e3d1177202ab6dedd.pdf', 34, '141 Moveable gantry crane TD 500 - 3200 kg'),
(227, '09587eb12e2907a4452823056d8f6b3b.pdf', 34, '142 Monorail YSK-ES 80 - 2000 kg'),
(228, 'a4b0187d4e885789ae2cc41ccf0730a9.pdf', 34, '143 Double-dirder crane YSK-ZT 80 - 3200 kg'),
(229, 'cd6738f198d0c7a7108aa0a8a17d6906.pdf', 34, '144 Power Supply-Festooned cable system 1'),
(230, 'cf6e573ee24c964773497909bf7d6375.pdf', 34, '145 Power Supply-Festooned cable system 2'),
(231, '2f2e3bdab2f349f3705506b6ee205bf5.pdf', 36, '146 Table of contents 1'),
(232, '33f3bc0385ed14c8d3e9e8b55cd28bad.pdf', 36, '147 Table of contents 2'),
(233, '15f83c47abf58d8cad1f62e55f6b8888.pdf', 36, '148 User information 1'),
(234, '7ab565a7ed19778d12021627dc8b7478.pdf', 36, '149 User information 2'),
(235, '9c54adfcde995d826bf4f7572bf740e8.pdf', 36, '150 User information 3'),
(237, '047e56d0ca3e38e6f8f0c7be64df6509.pdf', 36, '151 Questionnaire'),
(241, '6027b733338cab7097664fc14cba3058.pdf', 38, '152 Plate clamp TBL 500 - 3000 kg'),
(242, 'e34b5f02fc9cdeb6058c52240272f474.pdf', 38, '153 Plate clamp TBL 4000 - 30000 kg'),
(243, '45b61f82be5dc1817f75bf0914c9e5d2.pdf', 38, '154 Plate clamp TBS with hinged hook ring 100 - 3000 kg'),
(244, '5f0e19bc73a921a8a4088a73ab481ef3.pdf', 38, '155 Plate clamp with pivoting shackle TBS 4500 - 10000 kg'),
(245, '225e7571516fa5877bd1be78be98bdd0.pdf', 38, '156 Plate clamp Shark 1000 - 3000 kg 1'),
(246, '09d2a3f0d7d7f3d1b3da6403c371e1fc.pdf', 38, '157 Plate clamp Shark 1000 - 3000 kg 2'),
(247, '64b6d978d11321ea49a7a8c8c35a4bd3.pdf', 38, '158 Plate clamp Shark S with hinged hook ring 1000 - 3000 kg 1'),
(248, '160decd3bcccb9546e6c09897aca057a.pdf', 38, '159 Plate clamp Shark S with hinged hook ring 1000 - 3000 kg 2'),
(249, '795eab4ccba4072e2ff1bc1cc7091906.pdf', 39, '160 Universal grab TAG 350 - 10000 kg 1'),
(250, 'fa7bcf64f028019c00b08cb237d1b167.pdf', 39, '161 Universal grap Tag 350 - 10000 kg 2'),
(252, 'e2ae941b59ae785ab079cad2e408aa24.pdf', 39, '164 Non-marring grab TBP 500 - 1500 kg'),
(253, 'cfd6d4e201e1943976854493c1be1f34.pdf', 39, '165 Non-marring grab with chain TSB 350-1250 kg'),
(254, '8dad7ca20528b74ed94fa8d54aa0bed6.pdf', 40, '162 Permanent load lifting magnets TPM 100 -2000 kg 1'),
(255, '27799fb305f7e53e510b2b77efd66a2d.pdf', 40, '163 Permanent load lifting magnets TPM 100 -2000 kg 2'),
(256, 'bead10243fc4ebabc850d54bbb5cce7a.pdf', 39, '166 Girder grab TTG 500 - 7500 kg'),
(257, 'bfb757a2da0badbaf4f468b8f78a78f2.pdf', 39, '167 Girder grab TTR 750 - 3000 kg'),
(258, '17e524c1ee70a8c99c83fe186248358c.pdf', 39, '168 Girder grag TTT 750 - 4500 kg'),
(259, '9d3f40f5b5453f939c92916456f88e2d.pdf', 39, '169 Horizontal lifting gear TCH 1000 - 10000 kg'),
(260, '7d02c08d59f3d47ae38fc65288dd9154.pdf', 39, '170 Horizontal lifting gear TGF 350 - 6650 kg'),
(261, '7c79049f2386ad51d9019d58096e0c7f.pdf', 39, '171 Horizontal lifing hook BVH 500 - 7500 kg'),
(262, '7715cf6a4637bb2a23cc91b1ceb4cf0e.pdf', 39, '172 Lifting clamp with safety lock THS 750 - 4500 kg'),
(263, '17dfa1d1e63e91bc497c9c67cbbfc585.pdf', 41, '190 Container lifting lug TCO, TCU 32000 56000 kg'),
(264, '537516dd21a8b1ff2dd2f76560ed3be1.pdf', 41, '192 C hook TCK 500 - 10000 kg 1'),
(265, '9f9e4b334a5770d1c900dc7b65e70170.pdf', 41, '193 C hook TCK 500 - 10000 kg 2'),
(266, '835dc5f169465552b8a7c649f9c3e900.pdf', 41, '194 Coil hook TCS 500 - 3000 kg'),
(267, 'c2af50e48d665933e8e763d91a7b2c36.pdf', 39, '173 Lifting clamp TWH 1500 - 5000 kg'),
(268, '986173281bea0b04d282b5725e59ec17.pdf', 39, '174 Lifting clamp THK 750 - 9000 kg'),
(269, 'ee0b208efba11a9964d93864488e33df.pdf', 39, '175 Board clamp TPZX 400 - 750 kg'),
(270, '9880fd4bb6e0ed5c0e0e650e15821dfd.pdf', 42, '195 Barrel grab TFA 300 kg'),
(271, '20ea9f0b5b4604fe9b87332026a5c221.pdf', 39, '176 Manual claw, magnetic THM 120 - 170 kg'),
(272, 'e0389058db2fcbd0c48f439fee6c354e.pdf', 42, '196 Barrel grab TFA D 300 kg'),
(273, '4b855c20b7a912253aef9b27d76bdbe5.pdf', 39, '177 Hand clamp THG 250 kg'),
(274, 'ce4c55831dce1ff6a164d425aed89a41.pdf', 39, '178 Screw clamp TSH 750- 5000 kg'),
(275, 'a566a27f3e652a2f5b0efd105f1035b0.pdf', 42, '197 Barrel grab TFA 350 kg'),
(276, 'a372e26622baf8680f3e800c404143bc.pdf', 39, '179 Screw clamp TSD 1500 - 7500 kg'),
(277, '12fa951562b7ad201fe1baff3a63f3ff.pdf', 42, '198 Barrel rim clamp TFRK 500 kg'),
(278, '4d906d2d3b0d5deb0de98596d9556154.pdf', 39, '180 Screw clamp TSZ 500 - 7500 kg'),
(279, 'ff8d3e1fa196a3fc41f538f86e726a4f.pdf', 42, '199 Barrel clamp TFK 500 kg'),
(280, '79a8845e1a274a34db5117dec202be5c.pdf', 39, '181 Roundstock grab TRU 100 - 4000 kg'),
(281, 'd4af891b638d085c4588bf873f663d11.pdf', 42, '200 Crate grab TKA-d 150 kg'),
(282, '3749b9980d6cb182a4e2ed8648c16e2f.pdf', 39, '182 Pipe grab model TR 200 - 3000 kg'),
(283, 'd7145a3536441c553e07f680d2f51769.pdf', 42, '201 Crate grab TKA a-i 250 kg'),
(284, 'b64e109ef212d9e09c3fd93e851bf446.pdf', 39, '183 Profile steel grab TPR 500 - 3000 kg'),
(285, '0024592b3efb5ab6c67fd338eb6152e7.pdf', 39, '184 Block grab TVB 250 - 500 kg'),
(286, '2fd0b9079ba289818b61ccaadcb145c5.pdf', 39, '185 Stone-concrete grab TBG 200 - 2500 kg'),
(287, '485a89edab417d49035767dcead6b026.pdf', 39, '186 Stone-concrete grab TBG 200 - 5000 kg'),
(288, '4cceb7bab7db7738dfdfa58e2179912a.pdf', 39, '187 Bale grab TBA 200 - 1000 kg'),
(289, '191127537542f2f44415fcc66ac9f0b3.pdf', 39, '188 Rail grab TCR 1000 - 2000 kg'),
(290, 'ae9e77a29ef33b872d0ea85ec85b753e.pdf', 39, '189 Inside grab TDI 100 - 5000 kg'),
(291, 'bc5ff413baf7fda6415d08c072912fe8.pdf', 43, '216 Crane forks TKG 200 - 5000 kg'),
(292, '0d571ee5a0db755e93cc14c0c2c908d0.pdf', 43, '217 Crane Fork TKG 1000 - 5000 kg'),
(293, 'f97389bfa8dd6723e02334bc856da09a.pdf', 44, '202 Concrete pipe lifting gear BTG 1500 - 3000 kg'),
(294, '3db2221c5e04b9e327ac798b87292336.pdf', 44, '203 Trench shield grab TCP 1500 - 5500 kg'),
(295, 'a82bea32a7fc16e14cfe6a02044d1a83.pdf', 44, '204 Trench shield grab TPP 3000 - 12000 kg'),
(296, '7803d0be0f8fdd5a2a536670bcfa8123.pdf', 44, '205 Pipe hook TRO 2000 - 10000 kg'),
(297, '8e4e580c493ea2f699f9f87ecb5877fc.pdf', 46, '208 Spreader beam, non-adjustable TTS-E 1000 - 10000 kg 1'),
(298, '2a4b08113e3fab4176ff34cf79bce222.pdf', 46, '209 Spreader beam, non-adjustable TTS-E 1000 - 10000 kg 2'),
(299, '51b2890b67ff83dc98aaf71549a41cea.pdf', 46, '210 Spreader beam, adjustable TTS 1000 - 25000 kg 1'),
(300, 'dcefb1dc97926b29f0f62171361bc441.pdf', 46, '211 Spreader beam, adjustable TTS 1000 - 25000 kg 2'),
(301, 'ee4dc6a2973617a3234e98d65722e9c5.pdf', 46, '212 Spreader beams'),
(302, 'e93c2fadcf421006d6b5683c25c95739.pdf', 46, '213 Spreader beams'),
(303, 'abf06af274b4f0ce075ccf770b787975.pdf', 46, '214 Spreader beams for box pallets TTS 1000 - 3000 kg'),
(304, 'bfc659d76977011d88074ad9a0432926.pdf', 46, '215 Spreader beam for Big-Bags TTB 1000 - 2000 kg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_data`
--

DROP TABLE IF EXISTS `tb_product_data`;
CREATE TABLE `tb_product_data` (
  `id` int(10) NOT NULL,
  `product_name_th` varchar(100) NOT NULL,
  `product_name_en` varchar(100) NOT NULL,
  `product_category` int(10) NOT NULL,
  `product_sub_category` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `date_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `product_detail_th` text NOT NULL,
  `product_detail_en` text NOT NULL,
  `data_status` enum('0','1','2') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_data`
--

INSERT INTO `tb_product_data` (`id`, `product_name_th`, `product_name_en`, `product_category`, `product_sub_category`, `product_desc`, `date_update`, `product_detail_th`, `product_detail_en`, `data_status`) VALUES
(1, 'Air-operated double diaphragm pump AODD', '', 1, 6, '', '2018-10-01 04:35:25', '', '', '1'),
(5, 'Atlas Copco-Air Compressors (Indoor Type)', '', 2, 7, '', '2018-10-01 09:09:49', '', '', '1'),
(6, 'เครื่องไฟสนำม Light tower', '', 2, 7, '', '2018-10-01 09:10:42', '', '', '1'),
(7, 'ปั๊มน้ำ Submersible Pump', '', 2, 7, '', '2018-10-01 09:12:11', '', '', '1'),
(8, 'Coring Machines Diamond System', '', 4, 19, '', '2018-10-01 09:14:23', '', '', '1'),
(10, 'Air Dryers & Filters เครื่องทำลมแห้งแบบใช้ไฟฟ้า', '', 2, 8, '', '2018-10-01 09:15:08', '', '', '1'),
(12, 'Generator เครื่องกำเนิดไฟฟ้า', '', 2, 9, '', '2018-10-01 09:16:24', '', '', '1'),
(15, 'เครื่องอัดลมแบบเครื่องยนต์', '', 2, 10, '', '2018-10-01 09:18:34', '', '', '1'),
(16, 'Screw Air Compressors', '', 2, 11, '', '2018-10-01 09:20:00', '', '', '1'),
(17, 'Hoisting Product', '', 3, 1, '', '2018-10-01 09:24:59', '', '', '1'),
(18, 'Rachet lever hosit', '', 3, 1, '', '2018-10-01 09:32:50', '', '', '1'),
(19, '	09 Personel Protective Equipment', '', 3, 16, '', '2018-10-01 09:37:30', '', '', '1'),
(20, 'Hand Chain Hoist', '', 3, 1, '', '2018-10-01 09:37:46', '', '', '1'),
(21, 'Trolleys & Trolley Clamps', '', 3, 1, '', '2018-10-01 09:47:28', '', '', '1'),
(22, 'Electric Hoist', '', 3, 1, '', '2018-10-01 09:56:46', '', '', '1'),
(23, '08 Lashing Systems', '', 3, 15, '', '2018-10-01 10:01:33', '', '', '1'),
(25, 'Pheumatic chain hoist', '', 3, 1, '', '2018-10-01 10:06:13', '', '', '1'),
(26, 'Chains & Accessories', '', 3, 1, '', '2018-10-01 10:09:50', '', '', '1'),
(27, 'Manual Winches', '', 3, 1, '', '2018-10-01 10:11:09', '', '', '1'),
(28, 'Cable puller & Acccessories', '', 3, 1, '', '2018-10-01 10:16:37', '', '', '1'),
(29, 'Electric Winch', '', 3, 1, '', '2018-10-01 10:21:46', '', '', '1'),
(30, '07 Textile Lifiting Slings', '', 3, 14, '', '2018-10-01 10:22:41', '', '', '1'),
(31, 'Pneumatic Winch', '', 3, 1, '', '2018-10-01 10:31:25', '', '', '1'),
(32, 'Rack & Pinion Jacks', '', 3, 1, '', '2018-10-01 10:33:50', '', '', '1'),
(33, '06 Spring Balancers', '', 3, 13, '', '2018-10-01 10:33:52', '', '', '1'),
(34, '03 Crane Systems', '', 3, 2, '', '2018-10-01 10:40:07', '', '', '1'),
(35, '05 Tigrip Crane Weighers', '', 3, 12, '', '2018-10-02 02:25:07', '', '', '1'),
(36, '01 Table of contents & Questionnaires', '', 3, 3, '', '2018-10-02 02:43:03', '', '', '1'),
(38, '02 Plate Clamps', '', 3, 3, '', '2018-10-02 02:45:41', '', '', '1'),
(39, '03 Grabs & Clamps', '', 3, 3, '', '2018-10-02 02:49:40', '', '', '1'),
(40, '04 Permanent load lifting magnets', '', 3, 3, '', '2018-10-02 02:58:24', '', '', '1'),
(41, '04 Tigrip Load Hoisting Tackle Container lifting lugs & C-Hooks', '', 3, 3, '', '2018-10-02 03:08:34', '', '', '1'),
(42, '06 Barrel grabs & Crate grabs', '', 3, 3, '', '2018-10-02 03:13:55', '', '', '1'),
(43, '10 Crane Forks', '', 3, 3, '', '2018-10-02 03:19:16', '', '', '1'),
(44, '07 For underground construction', '', 3, 3, '', '2018-10-02 03:19:56', '', '', '1'),
(45, '08 Clamp & Tine Hooks', '', 3, 3, '', '2018-10-02 03:22:04', '', '', '1'),
(46, '09 Spreader beams', '', 3, 3, '', '2018-10-02 03:22:33', '', '', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_img`
--

DROP TABLE IF EXISTS `tb_product_img`;
CREATE TABLE `tb_product_img` (
  `id` int(10) NOT NULL,
  `imge_name` varchar(50) NOT NULL,
  `product_id` int(10) NOT NULL,
  `txtTitle` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_img`
--

INSERT INTO `tb_product_img` (`id`, `imge_name`, `product_id`, `txtTitle`) VALUES
(1, '1ec940ab5cbe4d24ce4fddb807b916d0.PNG', 1, ''),
(2, '0c6c05330a93eaabc222f12f79366af9.PNG', 1, ''),
(7, '1f9df790f2ad6d96cc48fbc951c8c601.PNG', 5, ''),
(8, '427d6b955ac7ae6fde71adbc1d6690af.PNG', 5, ''),
(10, '6ede02972f9404c3a0e7dd6e4e4bf1c5.PNG', 6, ''),
(11, '728bc260d997bdca4c64a07d2ba3d895.PNG', 7, ''),
(12, 'b6666989822fff41364b158866322e91.PNG', 7, ''),
(13, '3cb6dea552923bf17f8bc32ffa3c278b.PNG', 8, ''),
(15, 'ec6d468249eb4e158e3eb69a35b9921d.PNG', 10, ''),
(17, '9d557bd21ec6bdd69e3b3d87e0aaf12b.PNG', 12, ''),
(18, 'ae27590acae8da6b7452e8699fcd9b14.PNG', 8, ''),
(23, 'defe70c8736b5ef9f867aa25417fddcd.PNG', 15, ''),
(24, 'bd75441b034b8def1317b21d1c4f4aab.PNG', 15, ''),
(25, 'ac42d8faca68c40134a949450b3bed6c.PNG', 16, ''),
(26, '230218dc46c0b4ee9f080e43ef90bf61.PNG', 16, ''),
(27, '3ca59da0c3372dd6d3bf5ed5d343426f.jpg', 17, ''),
(31, '9619b0d40c103b73219afc206ca4a32c.jpg', 18, ''),
(32, '71758bca693faecf67313d5054ca58bb.jpg', 19, ''),
(33, '5cb1f2ef844da34b079dec21d0b2068f.jpg', 19, ''),
(34, 'cba7afb6dc8a0523d21a4fdc661dcfcb.jpg', 19, ''),
(35, '33366a19c9b8567d640e7d085962a796.jpg', 20, ''),
(36, '75602f60ed33de414ed5864873578cb7.jpg', 21, ''),
(37, '6d5c037df36b8f6302767c7906cd92e9.jpg', 22, ''),
(38, '0d6a7abc1195d3f303b628ef92110ad5.jpg', 23, ''),
(39, 'b797b5682faca458d3783b1541ca84e4.jpg', 23, ''),
(40, 'fa18b7945866e02f717d79c9e1271ae2.jpg', 23, ''),
(42, '4864a3b757fd20f2507c0593c1eb1458.jpg', 25, ''),
(43, '1f1d4b58d2cef82b81145a8337b220e5.jpg', 26, ''),
(44, '439e2854ab1fd0d0390ea3f85788d04d.jpg', 27, ''),
(45, 'b2e145151354373ac986bb13f1564c28.jpg', 28, ''),
(46, '21467cc2fe8086f5319a33719bc7da97.jpg', 29, ''),
(47, '0260897ed4819c8967660065345ba570.jpg', 30, ''),
(48, '45945f0bd6e517cf91c630c66cc80f94.jpg', 30, ''),
(49, '40d3a1f1c547f261a51820d35ba31b32.jpg', 31, ''),
(50, 'a46dfeb037d0646c795d156f6d2ad845.jpg', 32, ''),
(51, '0580450b84819544d11e546cefe7e264.jpg', 33, ''),
(52, '4ae3a032673b70d0d43f5e6b64c82d4a.jpg', 33, ''),
(53, '38897593d2b74ce8647209f33fa25132.jpg', 34, ''),
(54, '36b0bbbc0d27bd79b6b0c075c931f483.jpg', 34, ''),
(55, '78501909490f804a94c022c9e0be3f05.jpg', 34, ''),
(56, '1eddb383315985e3cec1a27456a8388a.jpg', 35, ''),
(57, 'b1056ee4bbe2a87922a26cc642378f58.jpg', 35, ''),
(58, '1805daeab081db5dda2e0c1cdae29e62.jpg', 36, ''),
(61, 'c708709b30f8722c27757b8af3da5c60.jpg', 38, ''),
(62, '2977302af9b52316001c25c4c7c2224b.jpg', 39, ''),
(63, 'af8d44a89c8ab0691f5a507ca5c03ea9.jpg', 40, ''),
(64, '0691831b6ee2ee6f50a0f2c189bd08ae.jpg', 41, ''),
(65, '69d7b834d8b2e6bb94db9c59b2695fe4.jpg', 42, ''),
(66, '1b36638eedd0bfb1ad43effe28880558.jpg', 43, ''),
(67, 'e1e56a553fcd3835196167abbc86dedd.jpg', 44, ''),
(68, '7f12859b9e357b427f7d56d6ca2c48db.jpg', 45, ''),
(69, 'b9ea07234d9e1679e368b323a4891571.jpg', 46, '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_product_subcatagory`
--

DROP TABLE IF EXISTS `tb_product_subcatagory`;
CREATE TABLE `tb_product_subcatagory` (
  `id` int(10) NOT NULL,
  `main_cate_id` int(10) NOT NULL,
  `file_name` varchar(50) NOT NULL,
  `subcate_name` varchar(100) NOT NULL,
  `subcate_order` int(5) NOT NULL,
  `subcate_status` enum('0','1') NOT NULL,
  `showImg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tb_product_subcatagory`
--

INSERT INTO `tb_product_subcatagory` (`id`, `main_cate_id`, `file_name`, `subcate_name`, `subcate_order`, `subcate_status`, `showImg`) VALUES
(1, 3, 'uploadfile/74a1154aff2897b82e6cbdfa21769daa.jpg', 'Hoisting Equipment', 1, '1', ''),
(2, 3, 'uploadfile/32cdad97ec70b08c51554c1a2a054f91.jpg', 'Crane Systems', 2, '1', ''),
(3, 3, 'uploadfile/24f91b5bdf25fb042ea35012e12e878c.jpg', 'Tigrip Load Hoisting Tackle', 3, '1', ''),
(4, 3, '', 'test', 4, '0', ''),
(5, 3, '', 'asdfawefx', 4, '0', ''),
(6, 1, '', 'Wilden-Air-operated double diaphragm pump AODD', 1, '1', ''),
(7, 2, '', 'Atlas Copco-Air Compressors (Indoor Type)', 1, '1', ''),
(8, 2, '', 'Atlas Copco-Air Dryers & Filters', 2, '1', ''),
(9, 2, '', 'Atlas Copco-Generator', 3, '1', ''),
(10, 2, '', 'Portable Air Compressors', 4, '1', ''),
(11, 2, '', 'Screw Air Compressors', 5, '1', ''),
(12, 3, '', 'Tigrip Crane Weighers', 4, '1', ''),
(13, 3, '', 'Spring Balancers', 5, '1', ''),
(14, 3, '', 'Textile Lifiting Slings', 6, '1', ''),
(15, 3, '', 'Lashing Systems', 7, '1', ''),
(16, 3, '', 'Personel Protective Equipment', 8, '1', ''),
(17, 3, '', 'Load moving systems', 9, '1', ''),
(18, 3, '', 'Little Mule Materials Handling', 10, '1', ''),
(19, 4, '', 'Coring Machines Diamond System', 1, '1', ''),
(20, 1, '', 'aaa', 2, '0', ''),
(21, 1, '', 'aaa', 2, '0', ''),
(22, 1, '', 'ทดสอบระบบ เพิ่มหมวดสินค้าย่อย  - 2', 2, '0', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_images_slide`
--
ALTER TABLE `tbl_images_slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news_data`
--
ALTER TABLE `tbl_news_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_category` (`news_category`);

--
-- Indexes for table `tbl_news_images`
--
ALTER TABLE `tbl_news_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `news_id` (`news_id`);

--
-- Indexes for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  ADD KEY `id` (`id`),
  ADD KEY `brach_id` (`brach_id`),
  ADD KEY `depart_id` (`depart_id`),
  ADD KEY `user_update` (`user_update`);

--
-- Indexes for table `tb_product_catagory`
--
ALTER TABLE `tb_product_catagory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_product_catalogue`
--
ALTER TABLE `tb_product_catalogue`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tb_product_data`
--
ALTER TABLE `tb_product_data`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_category` (`product_category`),
  ADD KEY `product_sub_category` (`product_sub_category`);

--
-- Indexes for table `tb_product_img`
--
ALTER TABLE `tb_product_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `tb_product_subcatagory`
--
ALTER TABLE `tb_product_subcatagory`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_cate_id` (`main_cate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_images_slide`
--
ALTER TABLE `tbl_images_slide`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `tbl_news_data`
--
ALTER TABLE `tbl_news_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tbl_news_images`
--
ALTER TABLE `tbl_news_images`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `tbl_user_data`
--
ALTER TABLE `tbl_user_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_product_catagory`
--
ALTER TABLE `tb_product_catagory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_product_catalogue`
--
ALTER TABLE `tb_product_catalogue`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=306;
--
-- AUTO_INCREMENT for table `tb_product_data`
--
ALTER TABLE `tb_product_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `tb_product_img`
--
ALTER TABLE `tb_product_img`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
--
-- AUTO_INCREMENT for table `tb_product_subcatagory`
--
ALTER TABLE `tb_product_subcatagory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
