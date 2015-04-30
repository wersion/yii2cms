/*
Navicat MySQL Data Transfer

Source Server         : aliyun
Source Server Version : 50173
Source Host           : 121.40.57.25:3306
Source Database       : hualiang

Target Server Type    : MYSQL
Target Server Version : 50173
File Encoding         : 65001

Date: 2015-04-30 21:02:50
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `article`
-- ----------------------------
DROP TABLE IF EXISTS `article`;
CREATE TABLE `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL DEFAULT '0',
  `model_id` smallint(3) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `content` text,
  `comments_count` int(11) NOT NULL DEFAULT '0',
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `file` varchar(255) DEFAULT NULL,
  `miaoshu` text,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of article
-- ----------------------------
INSERT INTO `article` VALUES ('11', '1', '0', '1', '技术1111', null, '<p>334各国护航军舰aaa</p>', '0', '', '', '', '/uploads/images/746E8324F73A.jpg', null, null, '1427529889');
INSERT INTO `article` VALUES ('16', '8', null, '1', '华粮溯源', null, '<p><img src=\"http://localhost:63342/hlhtml/images/suyuan.jpg\"/></p>', '0', '', '', '', '', null, null, null);
INSERT INTO `article` VALUES ('17', '8', null, '1', '华粮溯源2', null, '<p>1234</p>', '0', '', '', '', '/uploads/files/Desert.jpg', null, null, null);
INSERT INTO `article` VALUES ('18', '9', null, '1', '一九八五', null, '', '0', '', '', '', '', null, null, '1427461869');
INSERT INTO `article` VALUES ('20', '9', null, '1', '一九九二', null, null, '0', '', '', '', '', null, null, '1427461877');
INSERT INTO `article` VALUES ('21', '9', null, '1', '二零一零', null, null, '0', '', '', '', '/uploads/files/Desert.jpg', null, null, '1427461886');
INSERT INTO `article` VALUES ('23', '10', null, '1', '董事长 张原野', null, '<p>央视网消息（新闻联播）：中共中央政治局3月24日下午就深化司法体制改革、保证司法公正进行第二十一次集体学习。中共中央总书记习近平在主持学习时强调，深化司法体制改革，建设公正高效权威的社会主义司法制度，是推进国家治理体系和治理能力现代化的重要举措。公正司法事关人民切身利益，事关社会公平正义，事关全面推进依法治国。要坚持司法体制改革的正确政治方向，坚持以提高司法公信力为根本尺度，坚持符合国情和遵循司法规律相结合，坚持问题导向、勇于攻坚克难，坚定信心，凝聚共识，锐意进取，破解难题，坚定不移深化司法体制改革，不断促进社会公平正义。。</p>', '0', '', '', '', '/uploads/files/rw1.jpg', null, null, null);
INSERT INTO `article` VALUES ('24', '10', null, '1', '总书记：习近平', null, '<p>969－1975年 陕西省<a target=\"_blank\" href=\"http://baike.baidu.com/view/975612.htm\" style=\"text-decoration: none; color: rgb(19, 110, 194);\">延川县</a>文安驿公社梁家河大队知青、党支部书记</p><p><br/><span class=\"description\" style=\"display: block; color: rgb(85, 85, 85); font-size: 12px; font-family: 宋体; word-wrap: break-word; word-break: break-all; line-height: 15px; padding: 8px 7px; min-height: 12px; border-top-width: 1px; border-top-style: solid; border-top-color: rgb(224, 224, 224);\">习近平</span></p><p>1975－1979年&nbsp;<a target=\"_blank\" href=\"http://baike.baidu.com/view/1563.htm\" style=\"text-decoration: none; color: rgb(19, 110, 194);\">清华大学</a>化工系基本有机合成专业学习</p><p>1979－1982年&nbsp;<a target=\"_blank\" href=\"http://baike.baidu.com/view/24640.htm\" style=\"text-decoration: none; color: rgb(19, 110, 194);\">国务院办公厅</a>、中央军委办公厅秘书（现役）</p><p>1982－1983年 河北省<a target=\"_blank\" href=\"http://baike.baidu.com/view/132969.htm\" style=\"text-decoration: none; color: rgb(19, 110, 194);\">正定县</a>委副书记</p><p>1983－1985年&nbsp;<a target=\"_blank\" href=\"http://baike.baidu.com/view/4112.htm\" style=\"text-decoration: none; color: rgb(19, 110, 194);\">河北省</a>正定县委书记，正定县武装部第一政委、党委第一书记</p><p><br/></p>', '0', '', '', '', '/uploads/files/rw1.jpg', null, null, null);
INSERT INTO `article` VALUES ('25', '13', null, '1', '华粮定位', null, '<p>新华网仰光3月26日电 （记者张云飞）缅甸执政党报《联邦日报》26日报道说，经过一月有余的战事，缅甸军方已经控制整个果敢地区。\r\n\r\n报道说，缅甸军方已经在果敢地区发出通令，敦促地方武装放下武器，并承诺保证其安全。\r\n\r\n老街军管当局在电话中告诉新华社记者，截至24日晚，果敢地区所有主要战略高地都已被军队控制，老街局势相对稳定，一些商店已经开门营业。\r\n\r\n2月9日，缅甸政府军与地方武装在果敢地区爆发战事。持续至今的战事严重影响边境地区安全稳定。缅甸官方统计，交战双方有400余人伤亡</p>', '0', '', '', '', '', null, '1427375172', '1427375172');
INSERT INTO `article` VALUES ('26', '13', null, '1', '华粮宗旨', null, '<p>22222222222222新华网仰光3月26日电 （记者张云飞）缅甸执政党报《联邦日报》26日报道说，经过一月有余的战事，缅甸军方已经控制整个果敢地区。 报道说，缅甸军方已经在果敢地区发出通令，敦促地方武装放下武器，并承诺保证其安全。 老街军管当局在电话中告诉新华社记者，截至24日晚，果敢地区所有主要战略高地都已被军队控制，老街局势相对稳定，一些商店已经开门营业。 2月9日，缅甸政府军与地方武装在果敢地区爆发战事。持续至今的战事严重影响边境地区安全稳定。缅甸官方统计，交战双方有400余人伤亡</p>', '0', '', '', '', '', null, '1427375211', '1427378376');
INSERT INTO `article` VALUES ('27', '13', null, '1', '华粮使命', null, '<p>333333333333333新华网仰光3月26日电 （记者张云飞）缅甸执政党报《联邦日报》26日报道说，经过一月有余的战事，缅甸军方已经控制整个果敢地区。 报道说，缅甸军方已经在果敢地区发出通令，敦促地方武装放下武器，并承诺保证其安全。 老街军管当局在电话中告诉新华社记者，截至24日晚，果敢地区所有主要战略高地都已被军队控制，老街局势相对稳定，一些商店已经开门营业。 2月9日，缅甸政府军与地方武装在果敢地区爆发战事。持续至今的战事严重影响边境地区安全稳定。缅甸官方统计，交战双方有400余人伤亡</p>', '0', '', '', '', '', null, '1427375232', '1427378383');
INSERT INTO `article` VALUES ('28', '15', null, '1', 'UC九游完成阿里手游业务整合 将发布新战略', null, '<p>越位<br/>　　Ö1.凡进攻队员较球更接近于对方球门线者，即为处于越位位置。下列情况除外：　<br/>　　·a.该队员在本方半场内。<br/>　　·b.至少有对方队员两人比该队员更接近于对方的球门线。<br/>　　Ö2.当队员踢或触及球的一瞬间，同队队员处于越位位置时，裁判员认为该队员有下列行为，则应判为越位：<br/>　　·a.在干扰比赛或干扰对方；<br/>　　·b.企图从越位位置获得利益。</p>_ueditor_page_break_tag_<p><br/>　　Ö3.下列情况，队员不应被判为越位：<br/>　　·a.队员仅仅处在越位位置；<br/>　　·b.队员直接接得球门球、角球或界外掷球。<br/>　</p>', '0', '', '', '', '', null, '1427380010', '1427633737');
INSERT INTO `article` VALUES ('29', '15', null, '1', 'UC九游完成阿里手游业务整合222222222', null, '<p>22222222222222新浪科技讯 3月11日下午消息，新浪科技从接近九游的消息人士获悉，九游与阿里游戏的整合已经初步完成，即将下周一宣布新的移动游戏平台战略2014年初，阿里巴巴宣布推出手机游戏平台，除了利用手机淘宝、支付宝钱包等阿里旗下用户过亿的超级App入口开展游戏分发业务，同时独家代理运营《暖暖环游世界》、《愤怒的小鸟斯黛拉》等多款手游。</p><p>6月，阿里巴巴集团与UC优视联合宣布，UC优视全资融入阿里巴巴集团，并组建阿里移动事业群，新任事业群总裁俞永福表示，阿里移动事业群在成功整合阿里集团的浏览器和搜索业务之后，未来还将整合阿里集团其他相关业务和团队。</p>_ueditor_page_break_tag_<p>这些团队包括地图、移动游戏、移动阅读、应用分发等。一个月后，俞永福即出任高德移动互联网事业部总经理，正式接管互联网地图业务。在此之前，UC曾先后整合一搜团队推出神马搜索，整合淘宝浏览器推出UC浏览器PC版</p><p>2014年11月，阿里游戏官方宣布，将手游业务交由阿里移动事业群负责。据了解，九游已经登录手机淘宝和支付宝钱包，位置类似于京东和大众点评在微信的推广入口。</p>_ueditor_page_break_tag_<p>与360、91等渠道相比，九游以重度游戏用户集中、ARUP值高著称。据记者了解，2014年，九游为《天龙八部》、《全民奇迹》、《征途》等多款手游大作贡献的收入，在全渠道占比中都名列第一，《卧虎藏龙》首测当日，九游收入更是超全盘的60%。阿里集团在搜索、游戏这些垂直互联网业务上的路线逐渐清晰，就是向俞永福领衔的阿里巴巴移动事业群集中。(张楠)</p><p>与360、91等渠道相比，九游以重度游戏用户集中、ARUP值高著称。据记者了解，2014年，九游为《天龙八部》、《全民奇迹》、《征途》等多款手游大作贡献的收入，在全渠道占比中都名列第一，《卧虎藏龙》首测当日，九游收入更是超全盘的60%。阿里集团在搜索、游戏这些垂直互联网业务上的路线逐渐清晰，就是向俞永福领衔的阿里巴巴移动事业群集中。(张楠)</p>', '0', '', '', '', '', null, '1427380062', '1427687537');
INSERT INTO `article` VALUES ('30', '15', null, '1', '123', null, '<p>34567</p>', '0', '', '', '', '', null, '1427423223', '1427439908');
INSERT INTO `article` VALUES ('31', '15', null, '1', '444', null, '<p>5678</p>', '0', '', '', '', '', null, '1427423272', '1427439920');
INSERT INTO `article` VALUES ('32', '15', null, '1', '555', null, '<p>t56666</p>', '0', '', '', '', '', null, '1427426462', '1427426462');
INSERT INTO `article` VALUES ('34', '3', null, '1', '2015上海农博会', null, '<p>一段时间以来，深具政府背景或与克里姆林宫有着千丝万缕关系的俄罗斯媒体热衷于挑动中国或外国特别是超级大国美国的敏感神经，试图通过一系列新闻报道或评论激发它们彼此提防、争吵甚至斗争。\r\n俄罗斯战略文化基金会网站 3月29日在一篇题为《拉美、中国与美国 在拉丁美洲，美国发动的反华宣传战达到前所未有的程度》的文章中，将美国描述为“使用手握的一切办法，包括数以百计的电视频道、数以千计的电台和电影”，以达到诋毁中国、破坏中拉关系目的的幕后黑手，它还不顾事实，夸大拉美国家对美国的敌视，在另一方面，他又不惜溢美之词，夸赞“当代中国领导人是务实的，</p>_ueditor_page_break_tag_<p>非常了解拉美及当地形势的特点”。但在竭尽全力唆使中国警惕美国对其发展与拉美关系的威胁后，它却又强调，“对(拉美)与北京合作的乐观前景，华盛顿几乎拿不出任何反制措施。”这篇充满内在矛盾性和夸大其词的文章，与其说是客观报道事实，倒不如说是一篇包藏险恶目的的精心撰构之作。\r\n在去年12月29日俄罗斯《晨报》的一篇文章中，记者就中国问题采访了美国兰德公司高级分析员蒂莫西·希思。希思分析认为，现阶段中国对外政策的优先方向是周边国家和发展中国家。他进一步说，中国提出区域政策倡议，在地缘战略方面迈出了重要一步。这样，北京在巩固侧翼安全的同时，为自己进入世界强国行列奠定了基础。但他同时强调，这并不意味着中国即将拥有全球领导地位。然而这篇报道却被冠以一个更加耸人听闻的标题《中国将领导没有美国的世界》，其真实意图昭然若揭。\r\n看看这些文章（节目）的题目吧：《中国准备同日本及西方作战》、《如果美国有日本，那么中国就有俄罗斯》、</p>_ueditor_page_break_tag_<p>《中国正在全球资本市场取代美国》、《美国正从中国夺走生存资源》等等。无须深看，单从它们就可以揣测文章的内容究竟是什么货色了。它们无一例外都是以夸张手法突出中美或者中外之间的问题、矛盾、冲突和敌对，缺乏基本的客观性，并让人明显感觉到其挑拨意图。\r\n从最新的一个例子中我们也可以得出结论，它的目标决非善意。俄罗斯卫星新闻3月31日报道，朝鲜曾表示愿意加入亚洲基础设施投资银行（AIIB），但被中方拒绝，并称中方的回绝毫无回旋余地。中国外交部发言人在当天的新闻发布会上拒绝证实相关新闻的真实性。很显然北京不愿意将此公之于众，以免陷入尴尬之境。\r\n人们或许认为，俄罗斯是为中国好，在帮助中国。就像两国领导人在主席台上所强调的那样，中俄两国关系处在史无前例的高水平。另外，中俄在政治、军事技术、安全等领域的合作也在密切，在俄与西方关系恶化的背景下，更加彰显中俄关系的重要性，似乎两国更加接近于结盟。\r\n然而诸多事实表明，中俄关系除了在国际关系中通过高度协作带来的巨大互利因素外，并没有想象的那么好：俄罗斯是全球极少数在最后时刻才决定加入中方主导的亚投行的国家之一，</p>_ueditor_page_break_tag_<p>这意味着之前它都在坐山观虎斗；俄罗斯对待向中印出口军事装备和军事技术，天平倾斜于印度一方，以确保印方保持相对优势；俄罗斯在危机之前久远的时间里故意延宕两国油气资源合作升级，并多次挑动中国与有关国家内斗；俄罗斯在与中国假装亲密的同时，在区域掺沙子、丢石头，挖中国周边安全的墙根，比如全力武装越南军队。凡此种种，都在向中国提醒，北极熊绝非那么好心。\r\n那么，俄罗斯为什么不遗余力地挑拨中国与有关国家间彼此产生隔阂、敌意？众所周知，目前在西方的集体制裁下，俄罗斯正陷入崩溃的边缘，通过分化中国与外国的关系，以达到拉拢中国与其进行战略上合作的目的。这是目的之一。\r\n目的之二是，这个世界越团结，越抱团，俄罗斯就会越感孤立，越觉得不安全，这正是它全方位地在中国与外国之间挖坑构陷的重要原因之一。最大程度地分化世界，避免其合伙对付它，是俄罗斯的战略利益所在。\r\n其三，一旦中国受其蛊惑，与有关国家关系恶化并进而消耗国家资源进行斗争，无疑将会削弱彼此的力量，这将有利于其坐收渔翁之利。</p>', '0', '', '', '', '/uploads/files/nbh1.jpg', null, '1427441675', '1427858992');
INSERT INTO `article` VALUES ('35', '3', null, '1', '2015上海第二十六届农博会>', null, '<p>222222222222222</p>', '0', '', '', '', '/uploads/files/nbh2.jpg', null, '1427441753', '1427448938');
INSERT INTO `article` VALUES ('36', '3', null, '1', '上海第二十六届农博会>333', null, '<p>3333333333333333</p>', '0', '', '', '', '/uploads/files/nbh3.jpg', null, '1427441786', '1427442660');
INSERT INTO `article` VALUES ('37', '16', null, '1', '11111111', null, '<p>3332234111</p>', '0', '', '', '', '', null, '1427447051', '1427447051');

-- ----------------------------
-- Table structure for `column_photo`
-- ----------------------------
DROP TABLE IF EXISTS `column_photo`;
CREATE TABLE `column_photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `column_id` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `place` int(11) DEFAULT NULL,
  `create_at` datetime DEFAULT NULL,
  `crate_by` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `column_photo_f` (`column_id`),
  CONSTRAINT `column_photo_f` FOREIGN KEY (`column_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of column_photo
-- ----------------------------

-- ----------------------------
-- Table structure for `menu`
-- ----------------------------
DROP TABLE IF EXISTS `menu`;
CREATE TABLE `menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parentid` int(11) NOT NULL,
  `template_id` int(2) DEFAULT NULL,
  `model_id` smallint(2) NOT NULL,
  `cname` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `sort` smallint(4) DEFAULT NULL,
  `isArticle` smallint(5) DEFAULT NULL,
  `isShow` smallint(5) DEFAULT NULL,
  `content` text,
  `file` varchar(200) DEFAULT NULL,
  `status` smallint(6) DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `model_f` (`model_id`),
  CONSTRAINT `model_f` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of menu
-- ----------------------------
INSERT INTO `menu` VALUES ('1', '0', '1', '1', '走进华粮//Into Hualiang//走進華糧', '', '1', '1', '1', '<p style=\"font-size:48px; font-family: &#39;microsoft yahei&#39;;color: #6B635A; margin-bottom:35px; padding-top:10px;\">我们是<span style=\"margin: 0px; padding: 0px; font-size: 72px;\">谁？</span></p><p style=\"font-size: 18px; margin-bottom:10px;\r\ncolor: #FE944E;font-family: &#39;microsoft yahei&#39;;\">中国华粮集团有限责任公司</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal; \">中国华粮集团有限公司秉承“善本、归元、循道”的理念，立足三农、服务民生，致力于农林牧副渔等行业，以农业、文化、网络、金融、小镇经济为五大产业方向，是高端大农业产品“标准化”的制定者、实施者。</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12);line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal;\">华粮使命：</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12);line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal; \">1、让员工和家人更健康；</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal;\">2、让投资者回报更高；</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal; \">3、让农民耕种快乐、种好地，好种地，地种好；</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal;\">4、奉献“品质、环保、简约、方便、便宜”的好产品；</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px; color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal;\">5、让人们体验喜悦和生命的美好；</p><p style=\"margin-top: 0px; margin-bottom: 0px; padding: 0px;  color: rgb(0, 0, 12); line-height: 25px; font-family: &#39;microsoft yahei&#39;; font-size: 12px; white-space: normal; \">6、为社会贡献一个受人尊敬的企业。</p><p><br/></p>', '/uploads/files/zjhltu.jpg', '10', '1426860398', '1430373320');
INSERT INTO `menu` VALUES ('2', '0', '1', '1', '耕织堂//Farming and weaving//耕織堂', '/colums/17', '2', '1', '1', '<p>22</p>', '/uploads/files/gzttu.jpg', '10', '1426860646', '1430373557');
INSERT INTO `menu` VALUES ('3', '0', '1', '1', '农博会//Agricultural Fair//農博會', '', '3', '2', '1', '<p>222</p>', '/uploads/files/nbhtu.jpg', '10', '1426860665', '1430373592');
INSERT INTO `menu` VALUES ('8', '1', '14', '1', '华粮溯源//Hualiang traceability//華糧溯源', '', '1', '2', '1', '<p>aaa</p>', '/uploads/files/sytu.jpg', '10', '1426898856', '1430373939');
INSERT INTO `menu` VALUES ('9', '1', '9', '1', '企业荣誉//Enterprise honor//企業榮譽', '', '3', '2', '1', '<p>爱爱爱</p>', '', '10', '1426898887', '1426898887');
INSERT INTO `menu` VALUES ('10', '1', '2', '1', '团队介绍//Team Introduction//團隊介紹', '', '2', '1', '1', '<p>11</p>', '', '10', '1426898960', '1426898960');
INSERT INTO `menu` VALUES ('13', '1', '10', '1', '品牌理念//Brand concept//品牌理念', '', '4', '1', '1', '<p>12</p>', '', '10', '1427082642', '1427082642');
INSERT INTO `menu` VALUES ('14', '1', '11', '1', '科研创新//Research and innovation//科研創新', '', '5', '1', '1', '<p>123</p>', '', '10', '1427082745', '1427082745');
INSERT INTO `menu` VALUES ('15', '1', '6', '1', '集团新闻//Group news//集團新聞', '', '6', '2', '1', '<p>34</p>', '', '10', '1427082784', '1427082784');
INSERT INTO `menu` VALUES ('16', '1', '6', '1', '媒体报道//Media reports//媒體報道', '', '7', '2', '1', '<p>12</p>', '', '10', '1427082803', '1427082803');
INSERT INTO `menu` VALUES ('17', '2', '6', '1', '国家政策//The national policy//國家政策', '', '1', '2', '1', '<p>11</p>', '', '10', '1427082914', '1427082914');
INSERT INTO `menu` VALUES ('18', '2', '6', '1', '世界趋势//World Trend//世界趨勢', '', '2', '2', '1', '<p>11</p>', '', '10', '1427082950', '1427082950');
INSERT INTO `menu` VALUES ('19', '2', '6', '1', '心灵鸡汤//Chicken Soup for the soul//心靈雞湯', '', '3', '2', '1', '<p>11</p>', '', '10', '1427082980', '1427082980');
INSERT INTO `menu` VALUES ('20', '0', '1', '1', '华粮商道//Hualiang business//華糧商道', '', '4', '1', '1', '<p>11</p>', '/uploads/files/hlsdtu.jpg', '10', '1427093555', '1430373638');
INSERT INTO `menu` VALUES ('21', '0', '13', '1', '联盟//Alliance//聯盟', '', '5', '1', '1', '<p style=\"text-align: center;\"><strong><br/></strong></p><p style=\"text-align: center;\"><strong>11222</strong></p><p><strong>AAAAAAAAAAAA</strong></p>', '', '10', '1427093599', '1430379720');
INSERT INTO `menu` VALUES ('22', '3', '4', '1', '异地特色//Different characteristics//異地特色', '', null, '1', '1', '<p>11</p>', '', '10', '1427098876', '1430378403');
INSERT INTO `menu` VALUES ('23', '20', '1', '1', '官方商城//The official mall//官方商城', '', null, '1', '1', '<p>1</p>', '', '10', '1427098913', '1427098913');
INSERT INTO `menu` VALUES ('24', '21', '7', '1', '合作客户//Customer cooperation//合作客戶', '', '1', '1', '1', '<p>2233</p>', '', '10', '1427266726', '1427266726');
INSERT INTO `menu` VALUES ('29', '21', '8', '1', '联系我们//Contact us//聯系我們', '', '1', '1', '1', '<p>12</p>', '', '10', '1427443264', '1427443264');
INSERT INTO `menu` VALUES ('30', '21', '12', '1', '加入我们//Join us//加入我們', '', '3', '1', '1', '<p>234</p>', '', '10', '1427443329', '1427443329');
INSERT INTO `menu` VALUES ('31', '0', '1', '1', '首页', 'Assdaas', null, null, null, '', '', '10', '1428905080', '1428917479');
INSERT INTO `menu` VALUES ('33', '2', '6', '1', '春耕//spring ploughing//春耕', '', '4', null, null, '', '', '10', '1430370496', '1430387281');
INSERT INTO `menu` VALUES ('34', '2', '6', '1', '夏耘//Summer hoeing//夏耘', '', '5', null, null, null, '', '10', '1430370510', '1430387290');
INSERT INTO `menu` VALUES ('35', '2', '6', '1', '秋收//Autumn harvest//秋收', '', '6', null, null, null, '', '10', '1430370519', '1430387302');
INSERT INTO `menu` VALUES ('36', '2', '6', '1', '冬藏//Dongcang//冬藏', '', '7', null, null, null, '', '10', '1430370526', '1430387309');
INSERT INTO `menu` VALUES ('37', '21', '1', '1', '网站地图//Site map//網站地圖', '', null, null, null, '', '', '10', '1430370946', '1430374996');

-- ----------------------------
-- Table structure for `migration`
-- ----------------------------
DROP TABLE IF EXISTS `migration`;
CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of migration
-- ----------------------------
INSERT INTO `migration` VALUES ('m000000_000000_base', '1426859759');
INSERT INTO `migration` VALUES ('m130524_201442_init', '1426859762');
INSERT INTO `migration` VALUES ('m150216_075514_create_news_table', '1426859762');
INSERT INTO `migration` VALUES ('m150307_084149_create_category_table', '1426859763');

-- ----------------------------
-- Table structure for `models`
-- ----------------------------
DROP TABLE IF EXISTS `models`;
CREATE TABLE `models` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL COMMENT '模型名称',
  `ename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of models
-- ----------------------------
INSERT INTO `models` VALUES ('1', '文章', 'article');
INSERT INTO `models` VALUES ('2', '图片', 'photo');

-- ----------------------------
-- Table structure for `photo`
-- ----------------------------
DROP TABLE IF EXISTS `photo`;
CREATE TABLE `photo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `article_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(10) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of photo
-- ----------------------------
INSERT INTO `photo` VALUES ('4', '奖牌一', '/uploads/files/ry1.jpg', '18', '9', '123', null, '12', '1427356201', '1427790350');
INSERT INTO `photo` VALUES ('5', '奖牌2', '/uploads/files/ry1.jpg', '18', '9', '2', null, '1', '1427356233', '1427532856');
INSERT INTO `photo` VALUES ('6', '奖牌3', '/uploads/files/ry2.jpg', '20', '9', '44', null, '1', '1427362882', '1427532837');
INSERT INTO `photo` VALUES ('7', '奖牌4', '/uploads/files/ry1.jpg', '21', null, '1', null, '2', '1427362916', '1427532847');
INSERT INTO `photo` VALUES ('8', 'ff', '/uploads/images/746E8324F73A.jpg', '28', '15', 'df', null, '2', '1429620095', '1429620095');

-- ----------------------------
-- Table structure for `photo_menu`
-- ----------------------------
DROP TABLE IF EXISTS `photo_menu`;
CREATE TABLE `photo_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `place` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `menu_id` int(10) DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` smallint(6) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `column_f` (`menu_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of photo_menu
-- ----------------------------
INSERT INTO `photo_menu` VALUES ('1', null, '啊飒飒的', '/uploads/files/Desert.jpg', null, '1234', null, '1', '1427250372', '1427250372');
INSERT INTO `photo_menu` VALUES ('2', null, '皮草2', '/uploads/files/Desert.jpg', null, '123', null, '345', '1427250601', '1427250601');
INSERT INTO `photo_menu` VALUES ('5', null, '1', '/uploads/files/hezuo%20(1).jpg', '24', '12', null, null, '1427446405', '1427446405');
INSERT INTO `photo_menu` VALUES ('6', null, '2', '/uploads/files/hezuo%20(2).jpg', '24', '2', null, null, '1427446415', '1427446415');
INSERT INTO `photo_menu` VALUES ('7', null, '3', '/uploads/files/hezuo%20(3).jpg', '24', '3', null, null, '1427446425', '1427446425');
INSERT INTO `photo_menu` VALUES ('8', '1', '请问', '/uploads/files/hezuo%20(5).jpg', '1', '12', null, null, '1427603246', '1430212504');
INSERT INTO `photo_menu` VALUES ('9', '1', '春', '/uploads/files/45454545.jpg', '31', '春', null, null, '1429539376', '1430380171');
INSERT INTO `photo_menu` VALUES ('10', '2', '春小', '/uploads/files/one.jpg', '31', '春小', null, null, '1429694199', '1430379772');
INSERT INTO `photo_menu` VALUES ('11', '1', '夏', '/uploads/files/ytuytuty.jpg', '31', '夏', null, null, '1429694972', '1430380441');
INSERT INTO `photo_menu` VALUES ('12', '2', '夏小', '/uploads/files/ttttt.jpg', '31', '夏小', null, null, '1429694997', '1430379792');
INSERT INTO `photo_menu` VALUES ('13', '1', '秋', '/uploads/files/454545432.jpg', '31', '秋', null, null, '1429695023', '1430380245');
INSERT INTO `photo_menu` VALUES ('14', '2', '秋小', '/uploads/files/three.jpg', '31', '秋小', null, null, '1429695042', '1430379808');
INSERT INTO `photo_menu` VALUES ('15', '1', '冬', '/uploads/files/56765.jpg', '31', '冬', null, null, '1429695065', '1430380277');
INSERT INTO `photo_menu` VALUES ('16', '2', '冬小', '/uploads/files/fivsdfsdfe.jpg', '31', '冬小', null, null, '1429695084', '1430380053');

-- ----------------------------
-- Table structure for `template`
-- ----------------------------
DROP TABLE IF EXISTS `template`;
CREATE TABLE `template` (
  `id` smallint(3) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ename` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of template
-- ----------------------------
INSERT INTO `template` VALUES ('1', '走进华粮', 'zjhl');
INSERT INTO `template` VALUES ('2', '团队介绍', 'tdjs');
INSERT INTO `template` VALUES ('3', '耕织堂', 'gzt');
INSERT INTO `template` VALUES ('4', '农博会', 'nbh');
INSERT INTO `template` VALUES ('5', '农博会-下级', 'nbh_list');
INSERT INTO `template` VALUES ('6', '集团新闻', 'jtxw');
INSERT INTO `template` VALUES ('7', '合作客户', 'hzkh');
INSERT INTO `template` VALUES ('8', '联系我们', 'lxwm');
INSERT INTO `template` VALUES ('9', '企业荣誉', 'qyry');
INSERT INTO `template` VALUES ('10', '品牌理念', 'ppln');
INSERT INTO `template` VALUES ('11', '科研创新', 'kycx');
INSERT INTO `template` VALUES ('12', '加入我们', 'jrwm');
INSERT INTO `template` VALUES ('13', '华粮联盟', 'hllm');
INSERT INTO `template` VALUES ('14', '华粮溯源', 'hlsy');
INSERT INTO `template` VALUES ('15', '国家政策', 'gjzc');
INSERT INTO `template` VALUES ('16', '国家政策', 'gjzc');

-- ----------------------------
-- Table structure for `user`
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('1', 'admin', '_XlvIAqRwx7SXcfQ4oiMpGQj-u3835-N', '$2y$13$AGVL.yQRJZajqtTaeuHP/.sWsRzfiGbUiwnjh8w8BUwuaC.7frRju', null, 'admin@qq.com', '10', '1426062672', '1426062672');
INSERT INTO `user` VALUES ('2', 'hualiang', 'ax_GvZy6-n4HF1EvtYt5PR9ybCYxCRO4', '$2y$13$eHG3xxnmodoOu8h6KoknuOGrnsTd9NWuUKD6.RFJKdr1lRqJZsMwS', null, 'hua@qq.com', '10', '1428888120', '1428888120');
INSERT INTO `user` VALUES ('3', '', '', '', null, '', '10', '1430053427', '1430053427');
