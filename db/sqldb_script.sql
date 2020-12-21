CREATE DATABASE IF NOT EXISTS inject_test;
USE inject_test;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `username` varchar(30) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;

INSERT INTO `users` VALUES ('admin','123'),('rahul','rahul123'),('akash','akash123');

UNLOCK TABLES;
