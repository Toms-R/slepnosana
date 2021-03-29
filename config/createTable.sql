CREATE TABLE `places` (
  `id` int(11)PRIMARY KEY NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `place_name` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `points` int(11) NOT NULL,
  `about_place` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
