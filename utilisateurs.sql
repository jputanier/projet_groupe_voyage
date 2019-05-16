-- Adminer 4.7.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE `utilisateurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` text NOT NULL,
  `mdp` text NOT NULL,
  `courriel` text NOT NULL,
  `choix` text NOT NULL,
  `datezero` int(11) NOT NULL,
  `datefin` int(11) NOT NULL,
  `ami` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `utilisateurs` (`id`, `nom`, `mdp`, `courriel`, `choix`, `datezero`, `datefin`, `ami`) VALUES
(8,	'jeremy',	'0000',	'jeremy@gmail.com',	'1',	0,	0,	0),
(9,	'pascal',	'zero',	'pascal@gmail.com',	'2',	0,	0,	0),
(11,	'lakdar',	'1111',	'lakdar@gmail.com',	'3',	0,	0,	0),
(12,	'raphael',	'2222',	'raph@gmail.com',	'0',	0,	0,	0),
(45,	'qq',	'qq',	'qquuqsdgfqsd',	'0',	4,	5,	3),
(46,	'yy',	'yy',	'yysdgdsg',	'0',	4,	0,	0),
(47,	'uu',	'uudfhdfh',	'uu',	'0',	0,	0,	0),
(48,	'aa',	'aafff',	'aa',	'0',	0,	0,	0),
(49,	'aa',	'aa',	'aa',	'0',	0,	0,	0);

-- 2019-05-16 15:00:33
