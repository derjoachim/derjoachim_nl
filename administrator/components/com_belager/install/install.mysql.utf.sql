CREATE TABLE IF NOT EXISTS `#__belager_belagers` (
  `id` SERIAL,
  `belager_network_id` int(11) NOT NULL,
  `belager_group_id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL DEFAULT '',
  `target` varchar(20) NOT NULL DEFAULT '',
  `image` varchar(100) NOT NULL DEFAULT '',
  `linktitle` varchar(200) NOT NULL DEFAULT '',
  `imagealt` varchar(200) NOT NULL DEFAULT '',
  `enabled` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `enabled` (`enabled`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8; 


CREATE TABLE IF NOT EXISTS `#__belager_groups` (
  `id` SERIAL,
  `title` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8; 


CREATE TABLE IF NOT EXISTS `#__belager_networks` (
  `id` SERIAL,
  `title` varchar(50) NOT NULL DEFAULT '',
  `url` varchar(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8; 

CREATE OR REPLACE VIEW `#__belager_view_belagers` AS
SELECT b.*, g.title AS groupname, n.title AS networkname, n.url
FROM `#__belager_belagers` AS b INNER JOIN `#__belager_groups` AS g ON b.belager_group_id = g.ID 
INNER JOIN `#__belager_networks` AS n ON b.belager_network_id=n.id
--
-- Dumping data for table `#__belager_networks`
--

INSERT INTO `#__belager_networks` VALUES(1, 'Bebo', 'http://www.bebo.com/#id#');
INSERT INTO `#__belager_networks` VALUES(2, 'Blinklist', 'http://www.blinklist.com/#id#');
INSERT INTO `#__belager_networks` VALUES(3, 'Blogger', 'http://#id#.blogspot.com');
INSERT INTO `#__belager_networks` VALUES(4, 'Blogmarks', 'http://blogmarks.net/user/#id#');
INSERT INTO `#__belager_networks` VALUES(5, 'Brightkite', 'http://brightkite.com/people/#id#');
INSERT INTO `#__belager_networks` VALUES(6, 'del.icio.us', 'http://del.icio.us/#id#');
INSERT INTO `#__belager_networks` VALUES(7, 'Digg', 'http://digg.com/users/#id#');
INSERT INTO `#__belager_networks` VALUES(8, 'Diigo', 'http://www.diigo.com/profile/#id#');
INSERT INTO `#__belager_networks` VALUES(9, 'Facebook', 'http://www.facebook.com/#id#');
INSERT INTO `#__belager_networks` VALUES(10, 'Facebook Group', 'http://www.facebook.com/group.php?gid=#id#');
INSERT INTO `#__belager_networks` VALUES(11, 'Facebook Page', 'http://www.facebook.com/profile.php?id=#id#');
INSERT INTO `#__belager_networks` VALUES(12, 'FeedBurner', 'http://feeds.feedburner.com/#id#');
INSERT INTO `#__belager_networks` VALUES(13, 'Flickr', 'http://flickr.com/#id#');
INSERT INTO `#__belager_networks` VALUES(14, 'FriendFeed', 'http://friendfeed.com/#id#');
INSERT INTO `#__belager_networks` VALUES(15, 'Friendster', 'http://profiles.friendster.com/#id#');
INSERT INTO `#__belager_networks` VALUES(16, 'Hi5', 'http://#id#.hi5.com/');
INSERT INTO `#__belager_networks` VALUES(17, 'Hyves', 'http://#id#.hyves.nl/');
INSERT INTO `#__belager_networks` VALUES(18, 'Jaiku', 'http://#id#.jaiku.com/');
INSERT INTO `#__belager_networks` VALUES(19, 'Kwippy', 'http://www.kwippy.com/#id#');
INSERT INTO `#__belager_networks` VALUES(20, 'LastFM', 'http://www.last.fm/user/#id#');
INSERT INTO `#__belager_networks` VALUES(21, 'LastFM Artist', 'http://www.last.fm/music/#id#');
INSERT INTO `#__belager_networks` VALUES(22, 'Linked In', 'http://www.linkedin.com/in/#id#');
INSERT INTO `#__belager_networks` VALUES(23, 'Linked In Group', 'http://www.linkedin.com/group?id=#id#');
INSERT INTO `#__belager_networks` VALUES(24, 'Meet Up', 'http://www.meetup.com/members/#id#');
INSERT INTO `#__belager_networks` VALUES(25, 'Metacafe', 'http://www.metacafe.com/channels/#id#/');
INSERT INTO `#__belager_networks` VALUES(26, 'Mister Wong', 'http://www.mister-wong.com/user/#id#/');
INSERT INTO `#__belager_networks` VALUES(27, 'MySpace', 'http://myspace.com/#id#');
INSERT INTO `#__belager_networks` VALUES(28, 'Netvibes', 'http://www.netvibes.com/#id#');
INSERT INTO `#__belager_networks` VALUES(29, 'Newsvine', 'http://#id#.newsvine.com');
INSERT INTO `#__belager_networks` VALUES(30, 'Ning', 'http://www.ning.com/#id#');
INSERT INTO `#__belager_networks` VALUES(31, 'Orkut', 'http://www.orkut.com/Main#Profile.aspx?uid=#id#');
INSERT INTO `#__belager_networks` VALUES(32, 'Photo Bucket', 'http://photobucket.com/users/#id#');
INSERT INTO `#__belager_networks` VALUES(33, 'Picasa', 'http://picasaweb.google.com/#id#');
INSERT INTO `#__belager_networks` VALUES(34, 'Plurk', 'http://plurk.com/user/#id#');
INSERT INTO `#__belager_networks` VALUES(35, 'Qik', 'http://qik.com/#id#');
INSERT INTO `#__belager_networks` VALUES(36, 'Google Reader', 'http://www.google.com/reader/shared/#id#');
INSERT INTO `#__belager_networks` VALUES(37, 'Reddit', 'http://www.reddit.com/user/#id#');
INSERT INTO `#__belager_networks` VALUES(38, 'Simpy', 'http://www.simpy.com/user/#id#');
INSERT INTO `#__belager_networks` VALUES(39, 'Stumble Upon', 'http://www.stumbleupon.com/stumbler/#id#/');
INSERT INTO `#__belager_networks` VALUES(40, 'Technorati', 'http://technorati.com/people/technorati/#id#');
INSERT INTO `#__belager_networks` VALUES(41, 'Tumblr', 'http://#id#.tumblr.com/');
INSERT INTO `#__belager_networks` VALUES(42, 'Twitter', 'http://twitter.com/#id#');
INSERT INTO `#__belager_networks` VALUES(43, 'Vimeo', 'http://www.vimeo.com/#id#');
INSERT INTO `#__belager_networks` VALUES(44, 'Vox', 'http://#id#.vox.com/');
INSERT INTO `#__belager_networks` VALUES(45, 'Xing', 'http://#id#.xing.com/');
INSERT INTO `#__belager_networks` VALUES(46, 'Xbox Live', 'http://live.xbox.com/member/#id#');
INSERT INTO `#__belager_networks` VALUES(47, 'YouTube', 'http://youtube.com/#id#');
INSERT INTO `#__belager_networks` VALUES(48, 'External Link', 'http://#id#');
