create database test;

use test;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `days` int(20) NOT NULL,
  `rest` int(20) NOT NULL,
  PRIMARY KEY  (`id`)
);