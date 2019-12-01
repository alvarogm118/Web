SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- -------------------------------------------------
-- Estructura de tabla para la tabla `BBDD`
-- -------------------------------------------------

DROP TABLE IF EXISTS `BBDD`;
CREATE TABLE IF NOT EXISTS `BBDD` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255)  NOT NULL,
  `email` varchar(255)  NOT NULL,
  `mensaje` varchar(255)  NOT NULL DEFAULT '--',
  `imagen` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Registros `BBDD`
-- ----------------------------

INSERT INTO `BBDD` VALUES ('1', 'Oscar Sanz', 'oscarsanz@example.com', 'Gracias por tu aportación', '11-start-simple-des.png'),
('2', 'David Sokol', 'davidsokol@example.com', 'Un placer ayudarte', '12-start-simple-des.png');





