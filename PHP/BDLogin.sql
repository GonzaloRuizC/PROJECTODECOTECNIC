CREATE TABLE `usuarios` (
  `memberID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`memberID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;


INSERT INTO `usuarios`(`username`, `password`) VALUES ('prueba','123');