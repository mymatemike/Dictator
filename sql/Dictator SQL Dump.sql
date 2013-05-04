-- phpMyAdmin SQL Dump
-- version 3.5.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 05, 2013 at 01:01 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `when_I_am_dictator`
--

-- --------------------------------------------------------

--
-- Table structure for table `wiad_fuckers`
--

CREATE TABLE `wiad_fuckers` (
  `unique_d` int(11) NOT NULL AUTO_INCREMENT,
  `the_fucker` varchar(255) NOT NULL,
  `fucker_link` varchar(255) NOT NULL,
  `date_added` datetime NOT NULL,
  `is_live` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`unique_d`),
  UNIQUE KEY `unique_d` (`unique_d`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `wiad_fuckers`
--

INSERT INTO `wiad_fuckers` (`unique_d`, `the_fucker`, `fucker_link`, `date_added`, `is_live`) VALUES
(1, 'people who rate books with one star on Amazon because it arrived late.', '', '2013-05-03 00:00:00', 1),
(2, 'U2. Especially Bono, that sanctimonious twat.', 'http://www.u2.com/', '2013-05-03 00:00:01', 1),
(3, 'anyone who doesn''t fucking say thank you at a zebra crossing', '', '0000-00-00 00:00:00', 1),
(5, 'people who chew with their fucking mouths open. fuck them fuckers', '', '0000-00-00 00:00:00', 1),
(6, 'Tony fucking Abbot and all his racist, tiny, tiny brained fuckwit followers.', 'http://en.wikipedia.org/wiki/Tony_Abbott', '0000-00-00 00:00:00', 1),
(8, 'people who over cook fucking steaks. sheeeeit...', 'http://www.youtube.com/watch?v=30YW3wgRvyI', '0000-00-00 00:00:00', 1),
(11, 'fuckheads who wear Ed Hardy.', 'http://www.douchearchives.com/douche/small/1105/-douche-1304461095.jpg', '0000-00-00 00:00:00', 1),
(12, 'those fuckers at the Westboro Baptist Church. What a bunch of cunts.', 'http://en.wikipedia.org/wiki/Westboro_Baptist_Church', '0000-00-00 00:00:00', 1),
(13, 'people who put their fucking fingers on my screen. fuuuuuck!', '', '0000-00-00 00:00:00', 1),
(14, 'the cretins who made the Voice, and any of the fuckers who have ever been on the voice... and any of you fuckers who watch it.', 'http://www.thevoice.com.au', '0000-00-00 00:00:00', 1),
(15, 'bankers. all of the deceitful bastards. send this to a fucking banker.', '', '0000-00-00 00:00:00', 1),
(16, 'people who refuse to believe in evolution. are you fucking serious?', '', '0000-00-00 00:00:00', 1),
(17, 'fucktards who think that global warming is a myth.', '', '0000-00-00 00:00:00', 1),
(18, 'dog owners who don''t pick up their horse sized dog shites. It''s bar-fucking-baric.', '', '0000-00-00 00:00:00', 1),
(19, 'this cunt. enough said.', 'http://assets.rollingstone.com/assets/images/artists/304x304/sting.jpg', '0000-00-00 00:00:00', 1),
(20, 'any arsepart who says ''lol'' in conversation', '', '0000-00-00 00:00:00', 1),
(21, 'nickleback. worst. fucking. band. ever. fuckin fact.', 'http://www.nickelback.com', '0000-00-00 00:00:00', 1),
(22, 'fucking estate agents. you lying little pig weasels.', '', '0000-00-00 00:00:00', 1);
