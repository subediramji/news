-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 09, 2015 at 02:23 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv`
--

CREATE TABLE IF NOT EXISTS `adv` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `adv`
--

INSERT INTO `adv` (`id`, `image`, `location`) VALUES
(3, 'remote_control2.jpg', '1,2'),
(4, 'cover_photo.jpg', '1');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(14, 'विज्ञान प्रविधि'),
(16, 'प्रमुख समाचार'),
(17, 'Slider'),
(18, 'अन्तर्राष्ट्रिय'),
(19, 'अर्थ'),
(20, 'राजनीति'),
(21, 'खेलकुद'),
(22, 'साहित्य/ कला');

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE IF NOT EXISTS `files` (
  `file_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `file_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_orig_name` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `file_path` varchar(255) COLLATE latin1_general_ci NOT NULL,
  `upload_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `files`
--

INSERT INTO `files` (`file_id`, `file_name`, `file_orig_name`, `file_path`, `upload_date`) VALUES
(12, '12.jpg', '1.jpg', 'C:/xampp/htdocs/news/upload/12.jpg', '2015-07-04 21:46:57'),
(14, 'remote_control1.jpg', 'remote_control.jpg', 'C:/xampp/htdocs/news/upload/remote_control1.jpg', '2015-07-04 21:47:52'),
(16, 'cover_photo1.jpg', 'cover_photo.jpg', 'C:/xampp/htdocs/news/upload/cover_photo1.jpg', '2015-07-05 22:01:06'),
(17, 'ramji.png', 'ramji.png', 'C:/xampp/htdocs/news/upload/ramji.png', '2015-07-05 22:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `hits`
--

CREATE TABLE IF NOT EXISTS `hits` (
  `page` char(100) NOT NULL DEFAULT '',
  `count` int(15) DEFAULT NULL,
  PRIMARY KEY (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`page`, `count`) VALUES
('53', 3),
('49', 2),
('55', 3),
('50', 3);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE IF NOT EXISTS `info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `ip_address` varchar(30) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `datetime` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `ip_address`, `user_agent`, `datetime`) VALUES
(1, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko', '2015/07/06 22:28:46'),
(2, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko', '2015/07/06 22:29:49'),
(3, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko', '2015/07/06 22:32:21'),
(4, '::1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko', '2015/07/06 22:32:26'),
(5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 6.3; WOW64; rv:39.0) Gecko', '2015/07/07 14:27:32');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `summary` longtext CHARACTER SET utf8 NOT NULL,
  `image` varchar(255) CHARACTER SET utf8 NOT NULL,
  `c_id` varchar(255) NOT NULL,
  `time` varchar(255) CHARACTER SET utf8 NOT NULL,
  `limit_summary` longtext CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `summary`, `image`, `c_id`, `time`, `limit_summary`) VALUES
(48, 'बसको बाटो नै खोला', '<h3>पहाडी जिल्ला म्याग्दीलाई राष्ट्रिय राजमार्ग सँग जोड्ने \r\nबेनी–मालढुङ्गा सडकखण्डको पर्वतको खनियाघाटस्थित पर्ने सडक । वर्षाका कारण \r\nठाउँठाउँमा सडक भत्किएको छ भने कालोपत्रे गरेको समेत उप्किएको छ ।</h3>', '11.jpg', '17', '२०७२-५-८ ', '<h5>सुर्खेत–बेस्तडा सडकमा दैलेखको नारायण नगरपालिका र बिन्ध्यवासिनी गाविस &#8230;'),
(49, 'वर्षायामको सडक.........', '<h3>पहाडी जिल्ला म्याग्दीलाई राष्ट्रिय राजमार्ग सँग जोड्ने \r\nबेनी–मालढुङ्गा सडकखण्डको पर्वतको खनियाघाटस्थित पर्ने सडक । वर्षाका कारण \r\nठाउँठाउँमा सडक भत्किएको छ भने कालोपत्रे गरेको समेत उप्किएको छ ।</h3> ', '21.jpg', '17', '2072-03-14', '<h5>पहाडी जिल्ला म्याग्दीलाई राष्ट्रिय राजमार्ग सँग जोड्ने \r\nबेनी–मालढुङ्गा सडकखण्डको पर्वतको&#8230;'),
(50, 'अब दिसामुक्त', '<h3>महोत्तरीको खयरमारा गाविसलाई खुल्ला दिसामुक्त क्षेत्र घोषणा गरिएपछि पञ्चेबाजा बजाएर खुशीयाली मनाउदै गर्दै स्थानीयबासिन्दा ।</h3>  ', 'disamukta.jpg', '14,17', '2072-03-14', '<h3>महोत्तरीको खयरमारा गाविसलाई खुल्ला दिसामुक्त क्षेत्र घोषणा गरिएपछि पञ्चेबाजा बजाएर&#8230;'),
(51, 'टमाटरलाई टहरा', '<h3>काठमाडौं कीर्तिपुरमा टनेलभित्र फलेको गोलभेंडा ।</h3> ', 'tamatar.jpg', '17', '2072-03-14', '<h3>काठमाडौं कीर्तिपुरमा टनेलभित्र फलेको गोलभेंडा ।</h3>'),
(52, 'पानीको जोहो', '<h3>कीर्तिपुरको एक घरमा आकाशबाट छानोमा परेको पानी भाँडामा थापेर संकलन गरिंदै ।</h3> ', 'pani_ko_joho.jpg', '17', '2072-03-14', '<h3>कीर्तिपुरको एक घरमा आकाशबाट छानोमा परेको पानी भाँडामा थापेर संकलन&#8230;'),
(53, 'एप्पलका प्रशिक्षार्थी कर्मचारीलाई वर्षको ८० हजार डलर तलब !', 'एप्पलले आफ्नो कम्पनीमा प्रशिक्षार्थीका रुपमा आउने कर्मचारीलाई राम्रो तलब दिने गरेको एक रिर्पोटले देखाएको छ । <a href="http://www.businessinsider.com/apple-internship-salary-housing-2015-6" target="_blank">बिजनेस इनसाइडर</a>ले\r\n जारी गरेको नयाँ रिपोर्ट अनुसार एप्पलले आफ्नो कम्पनीमा प्रशिक्षार्थीको \r\nरुपमा आउने कर्मचारीलाई महिनाको सात हजार अमेरिकी डलर तलब दिने गरेको छ । \r\nएप्पलमा प्रशिक्षार्थीको रुपमा काम गर्नेले वर्षको ८० हजार डलर भन्दा धेरै \r\nकमाई गर्न सक्ने रिपोर्टमा उल्लेख गरिएको छ ।\r\n\r\n<p style="text-align: justify;">प्रशिक्षार्थी कामदारका लागि आवेदन दिनले \r\nअन्तर्वाताको प्रक्रिया पूरा गरेर प्रशिक्षार्थी कर्मचारीको रुपमा छानिएमा \r\nएप्पलले उनीहरुका काम हेर्ने तथा उनीहरुको विचार सुन्ने गरेको छ । यस्ता \r\nप्रशिक्षार्थी कर्मचारीले एप्पलको कम्पनी भित्रै बसेर काम गर्नुपर्छ । \r\nएप्पलले अन्य प्रतिष्पर्धी कम्पनीले भन्दा आफ्ना प्रशिक्षार्थी कर्मचारीलाई\r\n दिने सेवा सुविधा भन्दा राम्रो छ ।</p>\r\n\r\n<p style="text-align: justify;">फेसबुक, गुगल जस्ता कम्पनीमा काम गर्ने \r\nप्रशिक्षार्थी कर्मचारीले महिनाको बढीमा ६ हजार दुई सय अमेरिकी डलर अर्थात \r\nवर्षको ७४ हजार ४ सय डलर तलब दिने गरेको छ । एप्पलमा प्रशिक्षार्थीको रुपमा\r\n काम पाउन भने अन्य कम्पनीको भन्दा फरक खालको अन्तर्वाता प्रक्रिया पार \r\nगर्नु पर्छ ।</p>\r\n\r\n<p style="text-align: justify;">फेसबुक तथा गुगलले प्रशिक्षार्थी कर्मचारी\r\n छनौटका लागि सामान्य खालको अन्तर्वाता लिने भएपनि एप्पलले प्रशिक्षार्थी \r\nकर्मचारी छनौटका लागि विशेष टिम नै बनाएर अन्तर्वाता लिने गरेको छ ।</p> ', 'apple.jpg', '14', '2072-03-14', 'एप्पलले आफ्नो कम्पनीमा प्रशिक्षार्थीका रुपमा आउने कर्मचारीलाई राम्रो तलब दिने&#8230;'),
(54, 'फेसबुकले तस्बिरमा अनुहार नदेखिने व्यक्तिको पनि पहिचान गर्ने', 'सामाजिक सञ्जाल फेसबुकले तस्बिरमा अनुहार \r\nनदेखिएको अवस्थामा पनि व्यक्तिलाई पहिचान गर्न सक्ने फेसियल रिकगनाइजेसन \r\nप्रविधिको विकास गर्ने भएको छ । नयाँ प्रविधिले <a href="http://www.newscientist.com/article/dn27761-facebook-can-recognise-you-in-photos-even-if-youre-not-looking.html#.VYoL0ix1MgR" target="_blank">तस्बिरमा अनुहार नदेखिएका व्यक्तिलाई पनि पहिचान गर्ने </a>फेसबुकले जनाएको छ ।\r\n\r\n<p style="text-align: justify;">तस्बिरमा अनुहार देखिएका व्यक्तिलाई \r\nपहिचान गर्ने प्रविधि यसअघि नै प्रयोगमा आइसकेको छ । त्यो प्रविधि सफल भएको\r\n र त्यसमा थप सुधार गर्नका लागि अनुहार नदेखिएका व्यक्तिको पहिचान गर्ने \r\nप्रविधिको परीक्षण गरिएको फेसबुकले जनाएको छ ।</p>\r\n\r\n<p style="text-align: justify;">नयाँ प्रविधिको प्रभावकारिता परीक्षण गर्न\r\n तस्बिरमा अनुहार नदेखिएका ४० हजार तस्बिर लिएको र यो प्रविधिले ८३ प्रतिशत\r\n व्यक्तिलाई सही पहिचान गरेको फेसबुकले जनाएको छ ।</p>\r\n\r\n<p style="text-align: justify;">नयाँ प्रविधिले व्यक्तिको पहिचानका लागि \r\nकपाल, लुगा तथा शारीरिक संरचनाको विश्लेषण गर्नेछ । यो नयाँ प्रविधि अहिले \r\nपरीक्षणको चरणमा रहेको फेसबुकले जनाएको । तर छिट्टै नै थप परीक्षण र सुधार \r\nगरेर यसलाई एपको रुपमा ल्याउने फेसबुकको तयारी छ ।</p>\r\n\r\n<h4 style="text-align: justify;"><br></h4> ', ' ', '14', '2072-03-14', 'सामाजिक सञ्जाल फेसबुकले तस्बिरमा अनुहार \r\nनदेखिएको अवस्थामा पनि व्यक्तिलाई पहिचान&#8230;'),
(55, 'रिमोट कन्ट्रोलबाट चल्ने कार', 'बेलायती कार निर्माता कम्पनी जागुअर \r\nल्याण्ड रोवरले स्मार्टफोन एपबाट नियन्त्रण गर्न सकिने कारको नमुना \r\nसार्वजनिक गरेको छ । ल्याण्ड रोवरले स्मार्टफोनमा रहेको रिमोटकन्ट्रोल \r\nएपबाट नियन्त्रण गर्न सकिने स्पोर्टस कारको नमुना सार्वजनिक गरेको हो ।\r\n\r\n<p style="text-align: justify;">कार भन्दा ३२ फिट परसम्म ड्राइभर \r\nहुँदासम्म रिमोटकन्ट्रोलले कारलाई नियन्त्रण गर्न सक्ने ल्याण्ड रोवरले \r\nजनाएको छ । तर घरमै बसेर कारलाई चलाउन भने सकिने छैन । यस्तै गुडिरहेका \r\nबेला नजिकै कुनै अवरोध रहेछ भने कार आफै रोकिन्छ, यसले गर्दा सम्भावित \r\nदुर्घटना वा अप्ठ्यारोबाट जोगिन सकिने कम्पनीले जनाएको छ ।</p>\r\n\r\n<p style="text-align: justify;">यस्तै आफू जाने बाटोमा केही अवरोध छ कि \r\nछैन भनेर ड्राइभर बाहिरै बसेर कारलाई केही अघिसम्म पठाएर अवस्था बुझ्न पनि \r\nसकिनेछ । यो सुविधाले साँघुरो ठाउँ जहाँ पार्किङ गरेपछि ढोका खोल्न मिल्दैन\r\n त्यस्तो ठाउँमा पार्किङ गर्न र त्यहाँबाट कार निकाल्न सजिलो हुने कम्पनीले\r\n जनाएको छ । तर यो सुविधा सहितको कार बजारमा ल्याउने नल्याउने बारेमा भने \r\nकम्पनीले केही बताएको छैन ।</p> ', 'remote_control.jpg', '14', '2072-03-14', 'बेलायती कार निर्माता कम्पनी जागुअर \r\nल्याण्ड रोवरले स्मार्टफोन एपबाट नियन्त्रण&#8230;'),
(56, 'भारतमा विषालु रक्सी पिउँदा ४१ जनाको मृत्यु', 'भारतको मुम्बईमा विषालु रक्सी पिउँदा ४१ \r\nजनाको ज्यान गएको छ । अरु २१ जना विरामी भएका छन । विरामी परेका सबैको \r\nस्वास्थ्य स्थिति गम्भीर छ । ज्यान गुमाउने र विरामी पर्ने सबै जना २५ देखि\r\n ३० वर्ष उमेर बिचका छन् ।\r\n\r\nगर्मी छल्न र समुन्द्री किनारमा \r\nमनोरञ्जनका लागि गएका युवाले घरेलु रक्सी पिउँदा उनीहरुको ज्यान गएको \r\nप्रहरीले जनाएको छ । रक्सी पिए लगत्तै उनीहरुको स्वास्थ्य विग्रिएको थियो ।\r\n प्रहरीले रक्सी व्यापारी राजुलाई पक्राउ गरेको छ । ', ' ', '18', '2072-03-14', 'भारतको मुम्बईमा विषालु रक्सी पिउँदा ४१ \r\nजनाको ज्यान गएको छ&#8230;'),
(57, 'विमान दुर्घटनामा परेका आमा र बच्चा जीवितै भेटिए', 'कोलम्बियामा ५ दिनअघि विमान दुर्घटनामा \r\nपरेका आमा र बच्चा जीवितै भेटिएका छन् । त्यहाँको वायु&nbsp;सेनाका अनुसार \r\nजंगलमा उनीहरु फेला परेका हुन् ।&nbsp;\r\n\r\n<p style="text-align: justify;">वायु सेनाका प्रमुखले यसलाई चमत्कारको \r\nसंज्ञा दिएका छन् । उद्धारकर्ताले १८ वर्षिया मालिया नेली मुरिलो र उनको एक\r\n वर्षको बच्चा जीवितै भेटाएका हुन् । दुर्घटनास्थलबाट ५ सय मिटर पर उनीहरु \r\nभेटिएका वायु सेनाले जनाएको छ &nbsp;।</p>\r\n\r\n<p style="text-align: justify;">कोलम्बियाको चोको प्रान्तमा ५ दिन पहिले \r\nविमान दुर्घटना भएको थियो । जीवितै भेटिएकी मुरिलोको शरीरको केही भाग \r\nजलेपनि खतरामुक्त रहेको र उनको बच्चा पनि स्वस्थ्य रहेको वायु सेनाले \r\nजनाएको छ ।</p> ', ' ', '18', '2072-03-14', 'कोलम्बियामा ५ दिनअघि विमान दुर्घटनामा \r\nपरेका आमा र बच्चा जीवितै&#8230;'),
(58, 'सुन्दर चट्टान बिलिन हुने खतरा', 'अस्ट्रेलियाको सिड्नीको दक्षिणी भागमा रहेको एउटा चट्टान कुनै पनि बेला \r\nसमुद्रमा बिलिन हुन सक्ने सरकारी अधिकरीले बताएका छन् । विडिङ केक रक नाम \r\nगरेको चट्टान कुनै पनि बेला बिलिन हुन सक्ने भन्दै त्यस वरपर मानिस जान रोक\r\n लागाइएको छ । <img alt="" src="http://ichef.bbci.co.uk/news/624/cpsprodpb/1D4E/production/_83820570_255c2f7d-863b-46c9-985f-509134d25feb.jpg" style="width: 687px; height: 386px;">केही\r\n समय अघिदेखि पर्यटकले मन पराउने गरेको विडिङ केक चट्टान वरपर मानिसको \r\nप्रवेश निषेध गरेको सरकारी अधिकारीले बताएका छन् । गएको वर्ष चट्टान हेर्न \r\nगएका फ्रान्सका एक विद्यार्थीको त्यहाँबाट खसेर ज्यान गएको थियो । <img alt="" src="http://ichef.bbci.co.uk/news/624/cpsprodpb/178F6/production/_83820569_18854609300_374723aa77_k.jpg" style="width: 687px; height: 386px;">सिड्नीबाट\r\n ३० किलोमिटर दक्षिणको रोयल नेशनल पार्कमा रहेको विडिङ केक चट्टान पछिल्लो \r\nअध्ययन अनुसार कुनै पनि बेला समुन्द्रमा खस्ने सम्भावना देखिएकाले \r\nसुरक्षाका कारण त्यस क्षेत्रमा मानिसको प्रवेशमा रोक लगाइएको <img alt="" src="http://www.weekendnotes.com/im/008/08/the-wedding-cake-rock1.JPG" style="width: 687px; height: 472px;">एनएसए\r\n नेशनल पार्क एण्ड वाइल्ड लाइफ सर्भिसका प्रवक्ता ग्यारी डनेटले बताउनुभयो ।\r\n पछिल्लो पटक गरिएको अध्ययनले चट्टान १० वर्षभित्र कुनै पनि बेला बिलिन \r\nहुने जनाएको छ । चट्टानको सन्तुलन गुम्दै गएकाले समुद्रमा खस्ने खतरा बढेको\r\n हो । ', 'chattan.jpg', '18', '2072-03-14', 'अस्ट्रेलियाको सिड्नीको दक्षिणी भागमा रहेको एउटा चट्टान कुनै पनि बेला&#8230;');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `key` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `first_name`, `last_name`, `email`, `password`, `key`) VALUES
(1, 'ramji', 'ramji', 'subedi', 'ramjisubedi1991@gmail.com', '1e6a4fa602f4f103eecc69b92e042800', ''),
(2, 'admin', 'admin', 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', ''),
(3, 'bipin', 'sdf', 'sdaf', 'bipin@pin.com', 'a83383d30b2da2f863cb12739254bb02', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
