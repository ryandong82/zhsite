-- MySQL dump 10.13  Distrib 5.6.23, for Linux (x86_64)
--
-- Host: localhost    Database: zhsite
-- ------------------------------------------------------
-- Server version	5.6.23

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `article_categories`
--

DROP TABLE IF EXISTS `article_categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_categories`
--

LOCK TABLES `article_categories` WRITE;
/*!40000 ALTER TABLE `article_categories` DISABLE KEYS */;
INSERT INTO `article_categories` VALUES (2,'课程回顾',2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'课程预告',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'中和论坛',4,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,'课程剪影',3,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(6,'企业内训',5,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(7,'标杆学习',6,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(8,'国学游学',7,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `article_categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `category` int(10) unsigned NOT NULL,
  `keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `visible` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (4,'深层次分析解读中国经济新形势','<p class=\"MsoNormal\"><img src=\"{@res_id=23}\"></p><p class=\"MsoNormal\"><font size=\"3\">中国成功加入世界贸易组织的功臣，我国复关及入世谈判的首席谈判代表（负责贸易谈判及多边经济与法律事务），原国家外经贸部副部长、博鳌亚洲论坛理事、秘书长。“CCTV2003年度经济人物”；2004年10月，获联合国秘书长安南颁发的联合国特别奖，以表彰他对促进中国与联合国合作的杰出贡献。</font></p><!--EndFragment-->',2,'',0,'2015-07-24 15:46:47','2015-07-24 15:46:47'),(5,'漫谈互联网金融','<div><img src=\"{@res_id=24}\"><br></div>知名网络金融评论家，系列文章“浙江经济怎么了”令他声名鹊起；他有十余年的基层信贷工作经验，并早在2002年就创办了自己的社交网站；他对互联网巨头的批评尖锐而直白，却每每切入要害。网络上的他，嬉笑怒骂随性自由，给无数从业者以新的视角和启发。',2,'',0,'2015-07-24 15:59:09','2015-07-24 15:59:09'),(6,'国有企业改革需要关注的问题','<img src=\"{@res_id=25}\"><!--[if gte mso 9]><xml><w:WordDocument><w:BrowserLevel>MicrosoftInternetExplorer4</w:BrowserLevel><w:DisplayHorizontalDrawingGridEvery>0</w:DisplayHorizontalDrawingGridEvery><w:DisplayVerticalDrawingGridEvery>2</w:DisplayVerticalDrawingGridEvery><w:DocumentKind>DocumentNotSpecified</w:DocumentKind><w:DrawingGridVerticalSpacing>7.8 磅</w:DrawingGridVerticalSpacing><w:PunctuationKerning></w:PunctuationKerning><w:View>Normal</w:View><w:Compatibility><w:DontGrowAutofit/><w:BalanceSingleByteDoubleByteWidth/><w:DoNotExpandShiftReturn/><w:UseFELayout/></w:Compatibility><w:Zoom>0</w:Zoom></w:WordDocument></xml><![endif]--><!--[if gte mso 9]><xml><w:LatentStyles DefLockedState=\"false\"  DefUnhideWhenUsed=\"true\"  DefSemiHidden=\"true\"  DefQFormat=\"false\"  DefPriority=\"99\"  LatentStyleCount=\"260\" >\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"heading 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toc 9\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footnote text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"header\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footer\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"index heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"caption\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"table of figures\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"envelope address\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"envelope return\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"footnote reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"line number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"page number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"endnote reference\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"endnote text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"table of authorities\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"macro\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"toa heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Bullet 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Number 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Title\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Closing\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Signature\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Default Paragraph Font\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"List Continue 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Message Header\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Subtitle\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Salutation\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Date\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text First Indent\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text First Indent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Note Heading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Body Text Indent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Block Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Hyperlink\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"FollowedHyperlink\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Strong\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Emphasis\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Document Map\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Plain Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"E-mail Signature\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal (Web)\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Acronym\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Address\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Cite\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Code\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Definition\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Keyboard\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Preformatted\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Sample\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Typewriter\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"HTML Variable\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Normal Table\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"annotation subject\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"No List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Simple 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Classic 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Colorful 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Columns 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 7\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table List 8\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table 3D effects 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Contemporary\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Elegant\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Professional\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Subtle 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Subtle 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Web 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Balloon Text\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Table Theme\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 1\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 2\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 3\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 4\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 5\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Shading Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Light Grid Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Shading 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium List 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 1 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 2 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Medium Grid 3 Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Dark List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Shading Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful List Accent 6\" ></w:LsdException>\r\n<w:LsdException Locked=\"false\"  Priority=\"99\"  SemiHidden=\"false\"  Name=\"Colorful Grid Accent 6\" ></w:LsdException>\r\n</w:LatentStyles></xml><![endif]--><!--StartFragment--><p class=\"MsoNormal\"><span style=\"mso-spacerun:\'yes\'; font-family:微软雅黑; font-size:11.0000pt; mso-font-kerning:1.0000pt; \">国务院国有资产监督管理委员会企业改革局原副局长。</span></p><!--EndFragment-->',2,'',0,'2015-07-24 16:14:29','2015-07-24 16:14:29'),(14,'中和商学院2015年讲座计划','<img src=\"{@res_id=31}\">\r\n\r\n            <div><img src=\"{@res_id=32}\"><br></div>',3,'',0,'2015-07-25 04:57:58','2015-07-25 04:57:58');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `footer_pics`
--

DROP TABLE IF EXISTS `footer_pics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `footer_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=39 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `footer_pics`
--

LOCK TABLES `footer_pics` WRITE;
/*!40000 ALTER TABLE `footer_pics` DISABLE KEYS */;
INSERT INTO `footer_pics` VALUES (20,'footer_2015_07_28_13_02_381438059758.jpeg','image/jpeg','2015-07-28 05:02:38','2015-07-28 05:02:38'),(19,'footer_2015_07_28_13_02_331438059753.jpeg','image/jpeg','2015-07-28 05:02:33','2015-07-28 05:02:33'),(18,'footer_2015_07_28_13_02_291438059749.jpeg','image/jpeg','2015-07-28 05:02:29','2015-07-28 05:02:29'),(21,'footer_2015_07_28_13_02_421438059762.jpeg','image/jpeg','2015-07-28 05:02:42','2015-07-28 05:02:42'),(22,'footer_2015_07_28_13_02_501438059770.jpeg','image/jpeg','2015-07-28 05:02:50','2015-07-28 05:02:50'),(23,'footer_2015_07_28_13_02_591438059779.jpeg','image/jpeg','2015-07-28 05:02:59','2015-07-28 05:02:59'),(24,'footer_2015_07_28_13_03_041438059784.jpeg','image/jpeg','2015-07-28 05:03:04','2015-07-28 05:03:04'),(25,'footer_2015_07_28_13_03_071438059787.jpeg','image/jpeg','2015-07-28 05:03:07','2015-07-28 05:03:07'),(26,'footer_2015_07_28_13_03_121438059792.jpeg','image/jpeg','2015-07-28 05:03:12','2015-07-28 05:03:12'),(27,'footer_2015_07_28_13_03_181438059798.jpeg','image/jpeg','2015-07-28 05:03:18','2015-07-28 05:03:18'),(28,'footer_2015_07_28_13_03_261438059806.jpeg','image/jpeg','2015-07-28 05:03:26','2015-07-28 05:03:26'),(29,'footer_2015_07_28_13_03_351438059815.jpeg','image/jpeg','2015-07-28 05:03:35','2015-07-28 05:03:35'),(30,'footer_2015_07_28_13_03_401438059820.jpeg','image/jpeg','2015-07-28 05:03:40','2015-07-28 05:03:40'),(31,'footer_2015_07_28_13_04_091438059849.jpeg','image/jpeg','2015-07-28 05:04:09','2015-07-28 05:04:09'),(32,'footer_2015_07_28_13_04_171438059857.jpeg','image/jpeg','2015-07-28 05:04:17','2015-07-28 05:04:17'),(33,'footer_2015_07_28_13_04_231438059863.jpeg','image/jpeg','2015-07-28 05:04:23','2015-07-28 05:04:23'),(34,'footer_2015_07_28_13_04_281438059868.jpeg','image/jpeg','2015-07-28 05:04:28','2015-07-28 05:04:28'),(35,'footer_2015_07_28_13_04_341438059874.jpeg','image/jpeg','2015-07-28 05:04:34','2015-07-28 05:04:34'),(36,'footer_2015_07_28_13_04_411438059881.jpeg','image/jpeg','2015-07-28 05:04:41','2015-07-28 05:04:41'),(37,'footer_2015_07_28_13_04_471438059887.jpeg','image/jpeg','2015-07-28 05:04:47','2015-07-28 05:04:47'),(38,'footer_2015_07_28_13_05_001438059900.jpeg','image/jpeg','2015-07-28 05:05:00','2015-07-28 05:05:00');
/*!40000 ALTER TABLE `footer_pics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `main_horizontal_pics`
--

DROP TABLE IF EXISTS `main_horizontal_pics`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `main_horizontal_pics` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` text COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `main_horizontal_pics`
--

LOCK TABLES `main_horizontal_pics` WRITE;
/*!40000 ALTER TABLE `main_horizontal_pics` DISABLE KEYS */;
INSERT INTO `main_horizontal_pics` VALUES (17,'horPic_2015_08_10_17_18_021439198282.jpeg','image/jpeg','2015-08-10 09:18:02','2015-08-10 09:18:02'),(19,'horPic_2015_08_10_17_32_121439199132.jpeg','image/jpeg','2015-08-10 09:32:12','2015-08-10 09:32:12'),(18,'horPic_2015_08_10_17_18_171439198297.jpeg','image/jpeg','2015-08-10 09:18:17','2015-08-10 09:18:17');
/*!40000 ALTER TABLE `main_horizontal_pics` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_06_23_161956_create_articles_table',1),('2015_06_24_155128_create_article_categories_table',1),('2015_06_28_092038_create_teachers',1),('2015_06_28_092125_create_teacher_groups',1),('2015_06_28_092146_create_uploaded_res',1),('2015_07_01_192556_create_session_table',2),('2015_07_20_125520_create_footerpics_table',3),('2015_07_20_125520_create_footer_pics_table',4),('2015_07_20_125921_create_main_horizontal_pics_table',5);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__bookmark`
--

DROP TABLE IF EXISTS `pma__bookmark`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__bookmark` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__bookmark`
--

LOCK TABLES `pma__bookmark` WRITE;
/*!40000 ALTER TABLE `pma__bookmark` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__bookmark` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__central_columns`
--

DROP TABLE IF EXISTS `pma__central_columns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin,
  PRIMARY KEY (`db_name`,`col_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__central_columns`
--

LOCK TABLES `pma__central_columns` WRITE;
/*!40000 ALTER TABLE `pma__central_columns` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__central_columns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__column_info`
--

DROP TABLE IF EXISTS `pma__column_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__column_info` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__column_info`
--

LOCK TABLES `pma__column_info` WRITE;
/*!40000 ALTER TABLE `pma__column_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__column_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__favorite`
--

DROP TABLE IF EXISTS `pma__favorite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__favorite`
--

LOCK TABLES `pma__favorite` WRITE;
/*!40000 ALTER TABLE `pma__favorite` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__favorite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__history`
--

DROP TABLE IF EXISTS `pma__history`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__history` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sqlquery` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  KEY `username` (`username`,`db`,`table`,`timevalue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__history`
--

LOCK TABLES `pma__history` WRITE;
/*!40000 ALTER TABLE `pma__history` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__history` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__navigationhiding`
--

DROP TABLE IF EXISTS `pma__navigationhiding`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__navigationhiding`
--

LOCK TABLES `pma__navigationhiding` WRITE;
/*!40000 ALTER TABLE `pma__navigationhiding` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__navigationhiding` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__pdf_pages`
--

DROP TABLE IF EXISTS `pma__pdf_pages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  PRIMARY KEY (`page_nr`),
  KEY `db_name` (`db_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__pdf_pages`
--

LOCK TABLES `pma__pdf_pages` WRITE;
/*!40000 ALTER TABLE `pma__pdf_pages` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__pdf_pages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__recent`
--

DROP TABLE IF EXISTS `pma__recent`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__recent`
--

LOCK TABLES `pma__recent` WRITE;
/*!40000 ALTER TABLE `pma__recent` DISABLE KEYS */;
INSERT INTO `pma__recent` VALUES ('root','[{\"db\":\"zhsite\",\"table\":\"main_horizontal_pics\"},{\"db\":\"zhsite\",\"table\":\"migrations\"},{\"db\":\"zhsite\",\"table\":\"article_categories\"},{\"db\":\"zhsite\",\"table\":\"articles\"},{\"db\":\"zhsite\",\"table\":\"footer_pics\"},{\"db\":\"zhsite\",\"table\":\"uploaded_res\"},{\"db\":\"zhsite\",\"table\":\"mainhorizontalpics\"},{\"db\":\"zhsite\",\"table\":\"teacher_groups\"},{\"db\":\"zhsite\",\"table\":\"teachers\"},{\"db\":\"zhsite\",\"table\":\"sessions\"}]'),('zhsite','[{\"db\":\"zhsite\",\"table\":\"main_horizontal_pics\"},{\"db\":\"zhsite\",\"table\":\"uploaded_res\"},{\"db\":\"zhsite\",\"table\":\"footer_pics\"},{\"db\":\"zhsite\",\"table\":\"article_categories\"},{\"db\":\"zhsite\",\"table\":\"migrations\"},{\"db\":\"zhsite\",\"table\":\"articles\"}]');
/*!40000 ALTER TABLE `pma__recent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__relation`
--

DROP TABLE IF EXISTS `pma__relation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  KEY `foreign_field` (`foreign_db`,`foreign_table`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__relation`
--

LOCK TABLES `pma__relation` WRITE;
/*!40000 ALTER TABLE `pma__relation` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__relation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__savedsearches`
--

DROP TABLE IF EXISTS `pma__savedsearches`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__savedsearches` (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__savedsearches`
--

LOCK TABLES `pma__savedsearches` WRITE;
/*!40000 ALTER TABLE `pma__savedsearches` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__savedsearches` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_coords`
--

DROP TABLE IF EXISTS `pma__table_coords`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT '0',
  `x` float unsigned NOT NULL DEFAULT '0',
  `y` float unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_coords`
--

LOCK TABLES `pma__table_coords` WRITE;
/*!40000 ALTER TABLE `pma__table_coords` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_coords` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_info`
--

DROP TABLE IF EXISTS `pma__table_info`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_info`
--

LOCK TABLES `pma__table_info` WRITE;
/*!40000 ALTER TABLE `pma__table_info` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__table_info` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__table_uiprefs`
--

DROP TABLE IF EXISTS `pma__table_uiprefs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`username`,`db_name`,`table_name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__table_uiprefs`
--

LOCK TABLES `pma__table_uiprefs` WRITE;
/*!40000 ALTER TABLE `pma__table_uiprefs` DISABLE KEYS */;
INSERT INTO `pma__table_uiprefs` VALUES ('root','zhsite','articles','{\"CREATE_TIME\":\"2015-06-28 21:43:14\",\"col_order\":[\"0\",\"1\",\"2\",\"3\",\"4\",\"6\",\"5\",\"7\"],\"col_visib\":[\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\",\"1\"],\"sorted_col\":\"`articles`.`created_at` ASC\"}','2015-07-07 14:38:19'),('root','zhsite','uploaded_res','{\"sorted_col\":\"`uploaded_res`.`filename` ASC\"}','2015-07-24 15:50:00');
/*!40000 ALTER TABLE `pma__table_uiprefs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__tracking`
--

DROP TABLE IF EXISTS `pma__tracking`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) unsigned NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin,
  `data_sql` longtext COLLATE utf8_bin,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`db_name`,`table_name`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__tracking`
--

LOCK TABLES `pma__tracking` WRITE;
/*!40000 ALTER TABLE `pma__tracking` DISABLE KEYS */;
INSERT INTO `pma__tracking` VALUES ('zhsite','article_categories',1,'2015-07-03 00:12:13','2015-07-24 23:41:14','a:2:{s:7:\"COLUMNS\";a:5:{i:0;a:8:{s:5:\"Field\";s:2:\"id\";s:4:\"Type\";s:16:\"int(10) unsigned\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:3:\"PRI\";s:7:\"Default\";N;s:5:\"Extra\";s:14:\"auto_increment\";s:7:\"Comment\";s:0:\"\";}i:1;a:8:{s:5:\"Field\";s:13:\"category_name\";s:4:\"Type\";s:12:\"varchar(255)\";s:9:\"Collation\";s:15:\"utf8_unicode_ci\";s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:2;a:8:{s:5:\"Field\";s:6:\"ord_no\";s:4:\"Type\";s:7:\"int(11)\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";N;s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:3;a:8:{s:5:\"Field\";s:10:\"created_at\";s:4:\"Type\";s:9:\"timestamp\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";s:19:\"0000-00-00 00:00:00\";s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}i:4;a:8:{s:5:\"Field\";s:10:\"updated_at\";s:4:\"Type\";s:9:\"timestamp\";s:9:\"Collation\";N;s:4:\"Null\";s:2:\"NO\";s:3:\"Key\";s:0:\"\";s:7:\"Default\";s:19:\"0000-00-00 00:00:00\";s:5:\"Extra\";s:0:\"\";s:7:\"Comment\";s:0:\"\";}}s:7:\"INDEXES\";a:1:{i:0;a:13:{s:5:\"Table\";s:18:\"article_categories\";s:10:\"Non_unique\";s:1:\"0\";s:8:\"Key_name\";s:7:\"PRIMARY\";s:12:\"Seq_in_index\";s:1:\"1\";s:11:\"Column_name\";s:2:\"id\";s:9:\"Collation\";s:1:\"A\";s:11:\"Cardinality\";s:1:\"1\";s:8:\"Sub_part\";N;s:6:\"Packed\";N;s:4:\"Null\";s:0:\"\";s:10:\"Index_type\";s:5:\"BTREE\";s:7:\"Comment\";s:0:\"\";s:13:\"Index_comment\";s:0:\"\";}}}','# log 2015-07-03 00:12:13 root\nDROP TABLE IF EXISTS `article_categories`;\n# log 2015-07-03 00:12:13 root\n\nCREATE TABLE `article_categories` (\n  `id` int(10) unsigned NOT NULL,\n  `category_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,\n  `ord_no` int(11) NOT NULL,\n  `created_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\',\n  `updated_at` timestamp NOT NULL DEFAULT \'0000-00-00 00:00:00\'\n) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;\n','\n\n# log 2015-07-23 00:15:30 root\nDELETE FROM `article_categories` WHERE `article_categories`.`id` = 1;\n\n# log 2015-07-24 23:41:14 root\nINSERT INTO `article_categories` (`id`, `category_name`, `ord_no`, `created_at`, `updated_at`) VALUES (NULL, \'往期课程\', \'0\', \'0000-00-00 00:00:00.000000\', \'0000-00-00 00:00:00.000000\'), (NULL, \'课程预告\', \'0\', \'0000-00-00 00:00:00.000000\', \'0000-00-00 00:00:00.000000\');\n','UPDATE,INSERT,DELETE,TRUNCATE,CREATE TABLE,ALTER TABLE,RENAME TABLE,DROP TABLE,CREATE INDEX,DROP INDEX',1);
/*!40000 ALTER TABLE `pma__tracking` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__userconfig`
--

DROP TABLE IF EXISTS `pma__userconfig`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `config_data` text COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__userconfig`
--

LOCK TABLES `pma__userconfig` WRITE;
/*!40000 ALTER TABLE `pma__userconfig` DISABLE KEYS */;
INSERT INTO `pma__userconfig` VALUES ('root','2015-06-29 15:59:50','{\"lang\":\"zh_CN\",\"collation_connection\":\"utf8mb4_unicode_ci\"}');
/*!40000 ALTER TABLE `pma__userconfig` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__usergroups`
--

DROP TABLE IF EXISTS `pma__usergroups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N',
  PRIMARY KEY (`usergroup`,`tab`,`allowed`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__usergroups`
--

LOCK TABLES `pma__usergroups` WRITE;
/*!40000 ALTER TABLE `pma__usergroups` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__usergroups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pma__users`
--

DROP TABLE IF EXISTS `pma__users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`username`,`usergroup`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pma__users`
--

LOCK TABLES `pma__users` WRITE;
/*!40000 ALTER TABLE `pma__users` DISABLE KEYS */;
/*!40000 ALTER TABLE `pma__users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payload` text COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  UNIQUE KEY `sessions_id_unique` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sessions`
--

LOCK TABLES `sessions` WRITE;
/*!40000 ALTER TABLE `sessions` DISABLE KEYS */;
INSERT INTO `sessions` VALUES ('d395054241e341bed2023cd178822d4b6b786086','YTozOntzOjY6Il90b2tlbiI7czo0MDoienBYcWVBRm54bmlIRXplSkZSeWlqUUw2T2hqMm0yVXhmMFplWmFHbSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('ce9493fb56760cbe5182e3ff1cacd17abbf89543','YTozOntzOjY6Il90b2tlbiI7czo0MDoicnI1eklVUDhLWXlVSWlQQUVCdmYzVDVXcmp5alppWGplOWVTem41OSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('97fd8eb4c0a10cc975e1388c5063c652d414d309','YTo0OntzOjY6Il90b2tlbiI7czo0MDoibnhRNlNIbDNpQmlUYlZtUndjYUhGeUR1UGZSMlFNeWs5WlpvVDhnYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS90ZWFjaGVycGFnZSI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDM5MTk5MzE3O3M6MToiYyI7aToxNDM5MTk5MzE3O3M6MToibCI7czoxOiIwIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1439199317),('970cffaecd5ed5e302c9d2134476a1ba92405425','YTozOntzOjY6Il90b2tlbiI7czo0MDoieFhlZWpwelBHb0phVmNTVHdPSngyWEVwWlJLVWtlWjZtWEd1UTJpaSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('b014c14eaa58ae79fc69e3409489ca69d8769b9e','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidlN4eXNSOGZrS01td3hpaHBoSlRQaU5TdDNTQkxuSTBCVFVoaTdtMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9hYm91dCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDM5MTk4NDM1O3M6MToiYyI7aToxNDM5MTk4NDM1O3M6MToibCI7czoxOiIwIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1439198435),('36c203e12fa75d459b3eb649505ea16c034ff219','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMW0zNE9wamVEYTRuR3puOHpWNVRrWXYxbDUwcnN2TTh2dzFQRTVxbyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbSI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTgyMDY7czoxOiJjIjtpOjE0MzkxOTgyMDU7czoxOiJsIjtzOjE6IjAiO319',1439198206),('ad55a8d4590f98f0945781c272c8d972f1df7ffe','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiVXhOQmJLcVltb1N5UFo3RlFIWW1UN0FTUXd2eGNCUEczUnZJZ3lRVSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjQ6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbSI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDM5MTk3ODg4O3M6MToiYyI7aToxNDM5MTk3ODg4O3M6MToibCI7czoxOiIwIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1439197888),('7c2f4dc287298898c9737c531cb2df6c847438d3','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUGhuVlZzQld4NzVrWDZreGRMenQ1ZjlrSTlFWDFXVDlXTmE2M0hOWSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly96aG9uZ2hlYnMuY29tIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQzOTE5NzcwNjtzOjE6ImMiO2k6MTQzOTE5NzcwNjtzOjE6ImwiO3M6MToiMCI7fX0=',1439197706),('0733dee46ce3b1ed58d3b3db093d38b1f16ec72e','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRlBMOVlPVmVXbEFRQVBGQU1zRjVTZ0MzZEsyUjNBV3JNaHVRdWJldCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly96aG9uZ2hlYnMuY29tL21haW5Ib3Jpem9udGFsUGljcyI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkyMDEzNDI7czoxOiJjIjtpOjE0MzkxODcwMTY7czoxOiJsIjtzOjE6IjAiO319',1439201342),('41d475450c69fc2082171930f3a48c41a1513db8','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYzNld1dkRnQ4bTJUTmh2ZmVWWEJUQ0I2WXQ4SlpFTElBTk1WbDZ1cCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly96aG9uZ2hlYnMuY29tIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTc1ODg7czoxOiJjIjtpOjE0MzkxOTc1ODg7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439197588),('208537820b3ab572dded5f912c06e5193d377ab8','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMVFjaGlXb1drR3RTclV1NTlWY2ttTDdnNG1Wb1J3OXJxbmhFTnlleCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjk6Imh0dHA6Ly96aG9uZ2hlYnMuY29tL3RlYWNoZXJzIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTc2NDc7czoxOiJjIjtpOjE0MzkxOTc2NDc7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439197647),('d233cb8187737b2aa33d6eec93a98655317934b0','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiekNkTVZKS25wY3kxdTBUQ25kZVZWN3I0Um1BWHJkV0hUckw1aGpFMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9jbGFzc2VzIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjk6Il9zZjJfbWV0YSI7YTozOntzOjE6InUiO2k6MTQzOTE5MjE1MTtzOjE6ImMiO2k6MTQzOTE5MTA2NztzOjE6ImwiO3M6MToiMCI7fX0=',1439192151),('21d1132c75db75b0e1a275c37501e0f590108d86','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidG9yTXpkOGNyMzJhZmVMOW4zUTFOY29wR0NhWXViVWU5bDBybUZFZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9pbmRleCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTkyODM7czoxOiJjIjtpOjE0MzkxOTMxMDE7czoxOiJsIjtzOjE6IjAiO319',1439199283),('67c5a732309f5ec73f364564847faef52d63dabf','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQXA5SFd1SU5HV2o2UWxROWxYdHZsNHNqZzY1Mnh4SWpEMm1ZcU1kUCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly96aG9uZ2hlYnMuY29tL21haW5Ib3Jpem9udGFsUGljcyI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDM5MTkzMjI1O3M6MToiYyI7aToxNDM5MTkzMjI1O3M6MToibCI7czoxOiIwIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1439193226),('3f57fc0255a9c7a19723f8d3f77f15bb2a14b5e6','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVdjeDJVeHFOYzRNWFpRMFJYODBZbE5Fc282NGphNjk3OUNGdE5jSyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS90ZWFjaGVycGFnZSI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTczNTM7czoxOiJjIjtpOjE0MzkxOTMzMzk7czoxOiJsIjtzOjE6IjAiO319',1439197353),('46e79d37bca14d8c6edfc6cc0e6ea5f2255bc988','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZVNYdWVLMUZDNnc0NlJUcmdpNVAwNDdDUndwRkdhZ1E5UW5nd2lpaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9pbmRleCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTkxMTI7czoxOiJjIjtpOjE0MzkxOTM0NzQ7czoxOiJsIjtzOjE6IjAiO319',1439199112),('05af3c0386f81f69095c876f189697475444ac45','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZEhHb2paVGJ5ek9BbFVpM2NtcnVyQ0RlbnNlOFBCdjN3UWY3NllOaCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('ae3c31d9841da6faf823f737e13c001166941c1e','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGxSQnNGb1g0N1B0czhNeDZZejk0WldrT1hiSWM0cUdwY1lPek9EYyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('01b8261a31f588b76f40c0aa19c93d183388ded1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWlR0Ujc0ZEJNWjNqcWZ2SmVJWFlzMEtFb3lscTg0Y2psTmJ1aHdzQiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('701155ddce6ba4fe0c7e45fb26caff0c7bc5bbea','YTozOntzOjY6Il90b2tlbiI7czo0MDoidm94bEh4cXZXZThIcExRakJCcDdvelZNSXM1R3FGaGRaYk9JTFBORCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('82a6e9e71409ae6cb65e8246b3dc20364781119b','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGgwYVFMOURpR3N5bXVnNG9uc2FiMUs3TmhEQlI1ODMzTWxhanU1biI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('c4f1d3a3551c6e845ffd4e0d12809740103c9828','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHduYnJDV1lXNU8ydGIxZGhrNWZNWHgyeFV6aUFxbE1LdkpLdXlpVyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM2OTE7czoxOiJjIjtpOjE0MzkxOTM2OTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193691),('00321907b094c06700c6f79569f3aae5463b7823','YTo0OntzOjY6Il90b2tlbiI7czo0MDoidXRJN3J1U2xSYlplc1pIZko4QXQwR0k0ZHdiNG5KblB6MUh3b1o5YiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjA6Imh0dHA6Ly96aG9uZ2hlYnMuY29tIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTM3MTE7czoxOiJjIjtpOjE0MzkxOTM3MTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439193711),('8dfc0c0bbcf3eb013d242e9f172e0b56dd6551e2','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiZjBta2JCdW9Eb2RTMW9tclVYekV1TnFSZ3h0bU1SMVVyZ241S1ByZyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9jb250YWN0Ijt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTQzMTQ7czoxOiJjIjtpOjE0MzkxOTQzMTQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439194314),('56c3629907c82b6b0cd0048be2b2742c828cf808','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaFZLM2xTTzJ4ZktRYW5lNFp0RmZ5SlVpUlY1dzAzWjgxTUVUUXR0WCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('3813fbf210e045b97b60c5b1f92d0c3ed28cbf51','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNWFFcEFkSk55YnZVM0dKRTh3eXJDNTNYMlkzTzliUkFvV3gxN3M4RiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('59ac125d5f09ac418a55db8827193fab62fb8d8c','YTozOntzOjY6Il90b2tlbiI7czo0MDoickVtcGw1TE5TQ0VUZFd1MmU0SHpQVVVmSDE0NkVtOUhOOW5PY0w4NyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('1cefe4bc491ebda83fac809ed63d8782141f4bdf','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUmRNN2djNjZmcXVoUDhLUnJSRjFmZVB5M1hmWjZGb1pOejJ1UTNnZCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('e14e8c7fdb4058a808ed4c6dd644fa994b223516','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT00xUG9DSUNpczR3Z3ZoZ2luZW1qWnhXQ0tFeEhyMENlc0JHU3hjZCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('bbe1d01bc5257cb3548479bb7451d3a12352eba3','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTkxLc1ZIdU5BUWVZdWpubjYyWk9HWXFJd3VYVndndlNJMWxQTWdjMyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTE7czoxOiJjIjtpOjE0MzkxOTU1NTE7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195551),('9c4cc57b07c729f5328673e64e82b907e5cfa943','YTozOntzOjY6Il90b2tlbiI7czo0MDoiQWpKT2htcVJoV21XRm9CYWRXeGhiVFZ4WWZNb0JSMUxvOGh3eGkwbCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('51c7b5be04acc076ef7ceedf3cf2ebffb35c68ad','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTHNhZGFlT0E4NWUya1RBbVI5ZWl2bkZOclI2WkRaTkkxcHJYZUR6eCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('1dad97ba56ab3587868916aecd87095b63c140be','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTXpHSEpCcTJxbVJIWmQ5akpNM05VQXNXOXB3aE5uZGdEendhSWNzdCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('da7e91c16c56b631ac9fa5c72a648b52d8c3a8e1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFNvN2didWtUWVJ3Nno4bkJ1UG4yRXVRaVo1TmFwalhBM01UME1MSiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('559c0fd46e24dde32732ffc4fb5179fe090a3fa4','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYWMxbjlMQmh2TTRVS002dWFmclc5SVBEbXFQUW1qOFVJVXdIYVA0ciI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('6cc317604908ef127b093ab1bec9c94d5a018152','YTozOntzOjY6Il90b2tlbiI7czo0MDoiOTlUYkZNM3Aybk9NckZVVWp2cEtiYW9ydzBKcWdianB3Sm5icDJxeCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('f8e44269417bf1e0e1a5c1d5562e8db034c6b022','YTozOntzOjY6Il90b2tlbiI7czo0MDoiaUo4ZkZMaW9HWFJjQ0F4V0hZM01tUHpUVFp1SmtQaWxTb2pqeWhQSSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('9430aec054eea2de014c9ed2696aae52eecafeb5','YTozOntzOjY6Il90b2tlbiI7czo0MDoiSFl4MUw0WlBPdWZVd1BLRHpodHBDNkNieE1zaGhkUGs5cmtBdEhnUSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('54a51c9375a60bb6707aa5c8829534aa6034bac6','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYnBVb2xkQVVCMFZCWnMxemNIamxLWTkyNjM5OTJxM2JmZmh1c1ZDUCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('73b3c07ef30200969e3920866881fc9b5be5fcf3','YTozOntzOjY6Il90b2tlbiI7czo0MDoieDJDMFJpMW5pc1hnMU53Q3dHUWo4Q3pqcXhSOU1uekVNS01UQmNibSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('d719abe6c3a77719d84e76a444fe7a18a9601fa6','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVG5xTjR2clplQVpibGw5QlZyakpqdloyNXhrbFljVkVUcWpZc0JtQiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('ab89ee26b465cb0d381ef098af6a9edb804d2048','YTozOntzOjY6Il90b2tlbiI7czo0MDoiemZmcEhkQTZMOHcydzUwQ2t1NnY4N3RIOUxlZ1NhcUJDOUY4TlZIaSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTI7czoxOiJjIjtpOjE0MzkxOTU1NTI7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195552),('0d704da412f1f5311266dd3b04551f6156ca1982','YTozOntzOjY6Il90b2tlbiI7czo0MDoiMVo5RDI4OG1XdkNCdElIaENQTGpTOVZYVUZYSzVFbFM2NWRMV2xhZyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTM7czoxOiJjIjtpOjE0MzkxOTU1NTM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195553),('f00fccedacbd9e1bf5bbaf63336e4b580193f82b','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZFpiM2hmbzh0UTVUblYxWERLVVlQSFJMVnpZZm5OcHdxd1oxakVLUiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTM7czoxOiJjIjtpOjE0MzkxOTU1NTM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195553),('385124acf4c448c494dfcdefc08e910b4cbe0d51','YTozOntzOjY6Il90b2tlbiI7czo0MDoiTUwyVTZNSWN0Tk52NzdIOHJlbFJtV1NvUlMzVGl2NGZveFRxUlJ2UCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTM7czoxOiJjIjtpOjE0MzkxOTU1NTM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195553),('98c434582d68e94d7b1f9be8ce78e8f6fd883b0d','YTozOntzOjY6Il90b2tlbiI7czo0MDoiYzZwYjEwNkRZVkNWVG95Z3FCVm9VRHlnU0dySFhPN3RWYWpSckUwMyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTU1NTM7czoxOiJjIjtpOjE0MzkxOTU1NTM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439195553),('ba61008c89792c2ac4392dd5bd3e58824c496f54','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiTkdjOG54NXNiZFg1eHFqRDhiYVdNQlFpbWRlYm9VMzI4ZjNuOGlXMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzk6Imh0dHA6Ly96aG9uZ2hlYnMuY29tL21haW5Ib3Jpem9udGFsUGljcyI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTkxNjY7czoxOiJjIjtpOjE0MzkxOTYxOTI7czoxOiJsIjtzOjE6IjAiO319',1439199166),('227de9bf283fb964e122786a8748d5270a32441c','YTozOntzOjY6Il90b2tlbiI7czo0MDoibFV6WmZsYm1uQWlwS29wM0NxUGZRbHVzRmtVZnB3NXB1NWMyVXRyWSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('020fdad2afb5a35f7d4c1a487d9c9c86253073b4','YTozOntzOjY6Il90b2tlbiI7czo0MDoiUHhjTVNSOXhRUkxkTnZCZmtCUGlwclVSazNuQnF4M2J1TkJqZWtDQSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('a56ec293f64553b7550f05ebbdf1d392a4237656','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRFk5TmN2U05kNjU5Vnpmb0xEcE11SkM5V25lakZXT05rbm9tTTVWNSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('9e0291dbea3586d2059d0b968c0c5b2b37eee2b8','YTozOntzOjY6Il90b2tlbiI7czo0MDoiM2s2aGt6RXRoZ2NvVEV5RzAwT3hQeUt6bWF4ZUE5aXpqZGthWWt4VCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('07e191a2c6a368277a655391bfd72dc535d89ab4','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVkVGTHRyUGFZa0ZHTzQxWTRkaVd0M2FnQVk2WlpJSWx5MTBlejVUcyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('60ecee8543104d8bf580263aa356cd440cde7c70','YTozOntzOjY6Il90b2tlbiI7czo0MDoiV09XNkF0QUxEQjdRMlp5NmRnS012R0ZBNGM2Q0gxeTlMYTBDbTlVdiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('4b5e72b7ac7f298a2c51f60084ab5aa1e9f20447','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNER4SEtZaVVsUk5UV1J0RHJRaUlKckJTOVRTOUs4Z3FIYnd4NFdyTyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTg3MDQ7czoxOiJjIjtpOjE0MzkxOTg3MDQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439198704),('298647f3192ad5b00149ba36d9850a04c104b156','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiRTZVdmtPY0UyNVpRRjZlVndma01KY003M2xBeFB6VmxPS2tzRjBBTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTE6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9jYXRlZ29yeS9jYXRlZ29yeS01LTEuaHRtbCI7fXM6OToiX3NmMl9tZXRhIjthOjM6e3M6MToidSI7aToxNDM5MTk5MzM1O3M6MToiYyI7aToxNDM5MTk5MzM1O3M6MToibCI7czoxOiIwIjt9czo1OiJmbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19',1439199335),('70e0ce7965aa41336714bd524a03c2f062a8b07e','YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQmxINU5BcnAwT09YNDl3T1hVM0pUN09rZjNXVXBSNFpRam1JMXV1TyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly93d3cuemhvbmdoZWJzLmNvbS9jbGFzc2VzIjt9czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTkzNTA7czoxOiJjIjtpOjE0MzkxOTkzNTA7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199350),('dfe5573a09e8c25aab70e196960d0c7e0fd2ec63','YTozOntzOjY6Il90b2tlbiI7czo0MDoibDdlcGduTDYzbTVRRzRZTDBRRk5oa1F1NzNBZXpTREF4TnhudEZhMSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzM7czoxOiJjIjtpOjE0MzkxOTk1MzM7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199533),('0ea0374605422ece17c775eaa5b4544c7d5213c5','YTozOntzOjY6Il90b2tlbiI7czo0MDoieVA1MkdzTXR5SUpETkNneldLY21XTFdLQUtPVU9hT0xDZzluTXBvciI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('f6fb60d59f33a2fac7debd589a9255a8ef2c57dd','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN0hqMnFlelZGTmRpc1Zhc0x6a1k0OTViOHB1YXhOOENwamJMdG1GUSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('8bfcdb64fefad7e4c88ddd9aee6952209b1140d1','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUhFZ1JhTDZDU2tIQ3VJZlJ2Q2ZJWUJqYVUzYWpiSVo1dkFlb1NBSyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('01da33a36954b353b894c9216b2b01961985b0ad','YTozOntzOjY6Il90b2tlbiI7czo0MDoieXZyampJRFJYVzF0dDJ0Z3ZUMm1rdFNReXRvZ2tIaWVKOFFCUG5XNCI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('9d5e8fe52ba9e1868738cc7cdc2cbcb9d976c561','YTozOntzOjY6Il90b2tlbiI7czo0MDoiRUxWdDE2eG1xSWtUdkNpY2IxRHlFN2w0OTBTSG1KaFdsVnpXdjNWdSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('913f1c99c5ef761ac6930707d38798716886b934','YTozOntzOjY6Il90b2tlbiI7czo0MDoiODdmRnFvYTNPNmZGTGh6SVFXWVFjWFg0aDBoeUpqNXNSbEVUbG1tRSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('da35e141edc56494b988e27c431e269a7bcea10b','YTozOntzOjY6Il90b2tlbiI7czo0MDoiekZrWlZ4eXd0VmltN2tFR1hhcm9HUHZzQ1E0TFVhdU5LU2d0MjhFQiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('34a3a973d2db6dea5052e494086c5720e36219e0','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWU1aZzcxSUZLV1V4alNuVkswRzV5MUZYdFA1eDJtMTc5SmdONnFteiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('fe87d02afe178f2f14eefa12c67e507e9643d193','YTozOntzOjY6Il90b2tlbiI7czo0MDoiT0x0NUZSSTNXZHFFSVVJMlJHVzN6ZHRuaE9LZlZreHc1b2d4NDZhbyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('af5dff62bf6dbcbf51d4624dbc10d7495de49625','YTozOntzOjY6Il90b2tlbiI7czo0MDoiVU5FQUhxeG5KUWlDbE9qS1Y1MmpJekRGZFRvZ2RjV3dIV3plb0pRVSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('89ea94da02d5f3768b2d7566f2cbbf311a0e12d6','YTozOntzOjY6Il90b2tlbiI7czo0MDoiZ0dKRjRQU2RIU2tta0RFUXQ0WHU0MkxSWXcyMmNHTzdpSEZSeTVrTiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199534),('62a7536a7a3a63ccb0a46f369d0e69c811592894','YTozOntzOjY6Il90b2tlbiI7czo0MDoiWjhQZVVSUWNSZEtOQ3psaWZGQlJiRUxzRXdjc081c01hRkF1d2k4OSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzQ7czoxOiJjIjtpOjE0MzkxOTk1MzQ7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('d5b38a026d71c1537cae90616514000f56be1814','YTozOntzOjY6Il90b2tlbiI7czo0MDoiN3NvZzRNTjN3WVU3WUZYWnVrMXRZeGc1MGhSclc5QU1WWDJURmFQTyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('e831b5df1a4fce6eaea195339318f4fe70712021','YTozOntzOjY6Il90b2tlbiI7czo0MDoicXJ4VjZaNlVQT3JqcmlmWGFGSEF1cTFLUHZVeGY5YzdGSm9NYk5wQyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('09c104edcd6ba1f88dede91fa7ed598bfe1b587a','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNFRuTEtFVzJkamlFWldNMTUydDVxd1V6cnJKd3hIY0JwTDZTa2F3WiI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('f4d1a72de8781a3f711f89221985931c04778ed6','YTozOntzOjY6Il90b2tlbiI7czo0MDoialRHQkdLM1psYlRTaEsyNmxFOTd0UU5qRWhxOUxuRG1kY0k4SG90SyI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('963aaee001b39715877ac1f951a8c308380f33f0','YTozOntzOjY6Il90b2tlbiI7czo0MDoibjdxQmwwbDB1S1pmd2hQeGg0U2Z4VUhycU92MWJjOWJaa0w2bThxUSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('01befb6e1396a939a106582b193a554dbd92bc53','YTozOntzOjY6Il90b2tlbiI7czo0MDoiNXpXRFpCRUZaTTMyMDVqdlVaVTJob1ZvNWVDNmNOZVo3Q0xQUGhmSSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535),('e637b5722f80221689c3698c1b1e2162abc3d90e','YTozOntzOjY6Il90b2tlbiI7czo0MDoidlMwUXpTY2hGek1sd3U5OE5FZWdTNXA1QW5SVXNxT0J3WW1rWklVMSI7czo5OiJfc2YyX21ldGEiO2E6Mzp7czoxOiJ1IjtpOjE0MzkxOTk1MzU7czoxOiJjIjtpOjE0MzkxOTk1MzU7czoxOiJsIjtzOjE6IjAiO31zOjU6ImZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=',1439199535);
/*!40000 ALTER TABLE `sessions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teacher_groups`
--

DROP TABLE IF EXISTS `teacher_groups`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teacher_groups` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_no` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teacher_groups`
--

LOCK TABLES `teacher_groups` WRITE;
/*!40000 ALTER TABLE `teacher_groups` DISABLE KEYS */;
INSERT INTO `teacher_groups` VALUES (1,'中层管理技能',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(2,'经济学家',1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(3,'经营管理',0,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,'组织与人力资源',0,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `teacher_groups` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teachers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `descript` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ord_no` int(11) NOT NULL,
  `group` int(10) unsigned NOT NULL,
  `photo` int(10) unsigned NOT NULL,
  `visible` int(10) unsigned NOT NULL,
  `content` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `in_intro` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'曾沛涛','美国在线(AOL)公司财务副总裁',0,2,1,1,'曾任麦当劳（中国）控股公司财务总监、家乐福中国区财务总监，美国注册会计师。多年的实践操作加上不断的理论总结曾老师授课严谨而不脱离实际，灰谐幽默不失专业。并能根据课程及学员的情况设计不同课程内容及采用不同上课形式：讲演、小组研讨、个案研究、角色扮演、活动练习等多元化教学让学员极容易理解及掌握专业知识。其中尤以课程的实用性及与学员互动的授课风格备受好评。',1,'2015-07-21 05:30:33','2015-07-22 15:56:21'),(2,'吴敬琏','中国经济学界泰斗',0,2,2,1,'国务院发展研究中心研究员、中国人民政治协商会议全国委员会常务委员兼经济委员会副主任、国务院信息化专家咨询委员会副主任、国务院发展研究中心学术委员会副主任。《改革》、《比较》、《洪范评论》杂志主编；南京大学、复旦大学著名校友、香港浸会大学、香港大学荣誉社会科学博士。1984～1992年，连续五次获得中国“孙冶方经济科学奖”。2003年获得国际管理学会（IAM）“杰出成就奖”；2005年荣获首届“中国经济学奖杰出贡献奖”。',1,'2015-07-22 15:44:10','2015-07-22 15:49:14'),(3,'林毅夫','北京大学国家发展研究院名誉院长，全国政协经济委员会副主任，原世界银行首席经济学家，高级副行长',0,2,3,1,'中华人民共和国第七、八、九、十届政协全国委员会委员、中华全国工商业联合会副主席。',1,'2015-07-22 15:44:57','2015-07-22 15:56:08'),(4,'龙永图','原博鳌亚洲论坛理事、秘书长',0,2,4,1,'现任复旦大学国际关系与公共事务学院院长。他是中国复关及入世谈判的首席谈判代表，原国家外经贸部副部长；',1,'2015-07-22 15:45:41','2015-07-22 15:45:41'),(5,'周其仁','著名经济学家',0,2,5,1,'北京大学中国经济研究中心教授，原北京大学国家发展研究院院长',1,'2015-07-22 15:46:23','2015-07-22 15:56:53'),(6,'茅于轼','当代著名经济学家',0,2,6,1,'中国民间经济学者的重要代表。原北京天则经济研究所理事长，民间学术机构“人文经济学会”的理事长。',1,'2015-07-22 15:46:57','2015-07-22 15:56:45'),(7,'张维迎','著名经济学家',0,2,7,1,'原北京大学光华管理学院院长，经济学教授；北京大学网络经济研究中心主任。他是国内最早提出并系统论证双轨制价格改革思路的学者；他发表的有关中国经济改革和社会发展的观点经常成为媒体关注的焦点。2000年，他获得国家自然科学基金“杰出青年基金”。2002年，他当选为“CCTV2002年中国经济年度人物”。2006年3月他发表了《理性思考中国改革》的长文，将有关改革的争论推向了一个高潮。',1,'2015-07-22 15:48:01','2015-07-22 15:56:38'),(8,'王巍','曾在中国建设银行、中国银行、美国化学银行、世界银行、中国南方证券有限公司等金融机构任重要职务',0,3,8,1,'曾在中国建设银行、中国银行、美国化学银行、世界银行、中国南方证券有限公司等金融机构任重要职务；直接策划、组织了中国大陆几十家大型企业的改制、重组、承销及并购业务；在创办金融机构、创新金融工具、企业购并等方面经验丰富，并主持编辑了《第二板市场》、 《MBO管理者收购》等在企业界引起广泛影响的投资银行专著。1997年5月，王巍先生创办了万盟投资管理有限公司，专注于企业购并及相应的重组、 融资和上市业务。',1,'2015-07-22 15:53:46','2015-07-22 15:53:46'),(9,'陈春花','华南理工大学工商管理学院教授、博士生导师',0,3,9,1,'新希望六和股份有限公司联席董事长兼首席执行官。著名管理专家，集教授、企业家、作家于一体的传奇女性。先后出任华南理工大学工商管理学院副院长，山东六和集团总裁以及康佳集团、TCL集团、美的集团、南方航空等多家企业高级管理顾问。其率领的六和集团创造了2年内销售额从20亿增值80亿的销售奇迹。2004年出版的《领先之道》，以及《争夺价值链》2007年的《超越竞争》被誉为年度最佳畅销书。',1,'2015-07-22 15:54:38','2015-07-22 15:54:38');
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `uploaded_res`
--

DROP TABLE IF EXISTS `uploaded_res`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `uploaded_res` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filename` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mime` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `uploaded_res`
--

LOCK TABLES `uploaded_res` WRITE;
/*!40000 ALTER TABLE `uploaded_res` DISABLE KEYS */;
INSERT INTO `uploaded_res` VALUES (1,'2015_07_21_13_30_331437456633.jpeg','image/jpeg','2015-07-21 05:30:33','2015-07-21 05:30:33'),(2,'2015_07_22_23_44_101437579850.jpeg','image/jpeg','2015-07-22 15:44:10','2015-07-22 15:44:10'),(3,'2015_07_22_23_44_571437579897.jpeg','image/jpeg','2015-07-22 15:44:57','2015-07-22 15:44:57'),(4,'2015_07_22_23_45_411437579941.jpeg','image/jpeg','2015-07-22 15:45:41','2015-07-22 15:45:41'),(5,'2015_07_22_23_46_231437579983.jpeg','image/jpeg','2015-07-22 15:46:23','2015-07-22 15:46:23'),(6,'2015_07_22_23_46_571437580017.jpeg','image/jpeg','2015-07-22 15:46:57','2015-07-22 15:46:57'),(7,'2015_07_22_23_48_011437580081.jpeg','image/jpeg','2015-07-22 15:48:01','2015-07-22 15:48:01'),(8,'2015_07_22_23_55_211437580521.jpeg','image/jpeg','2015-07-22 15:53:46','2015-07-22 15:55:21'),(9,'2015_07_22_23_54_381437580478.jpeg','image/jpeg','2015-07-22 15:54:38','2015-07-22 15:54:38'),(23,'2015_07_24_23_46_471437752807.jpeg','image/jpeg','2015-07-24 15:46:47','2015-07-24 15:46:47'),(24,'2015_07_24_23_59_091437753549.jpeg','image/jpeg','2015-07-24 15:59:09','2015-07-24 15:59:09'),(25,'2015_07_25_00_14_291437754469.jpeg','image/jpeg','2015-07-24 16:14:29','2015-07-24 16:14:29'),(26,'2015_07_25_00_18_091437754689.jpeg','image/jpeg','2015-07-24 16:18:09','2015-07-24 16:18:09'),(27,'2015_07_25_01_11_101437757870.jpeg','image/jpeg','2015-07-24 17:11:10','2015-07-24 17:11:10'),(28,'2015_07_25_01_33_371437759217.jpeg','image/jpeg','2015-07-24 17:33:37','2015-07-24 17:33:37'),(29,'2015_07_25_12_44_501437799490.jpeg','image/jpeg','2015-07-25 04:45:04','2015-07-25 04:45:04'),(30,'2015_07_25_12_45_121437799512.jpeg','image/jpeg','2015-07-25 04:45:13','2015-07-25 04:45:13'),(31,'2015_07_25_12_57_581437800278.jpeg','image/jpeg','2015-07-25 04:57:58','2015-07-25 04:57:58'),(32,'2015_07_25_12_57_581437800278.png','image/png','2015-07-25 04:57:58','2015-07-25 04:57:58');
/*!40000 ALTER TABLE `uploaded_res` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-08-11  0:31:21
