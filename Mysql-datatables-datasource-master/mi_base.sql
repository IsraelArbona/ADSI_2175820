/*
Navicat MySQL Data Transfer

Source Server         : Mis_bases
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : mi_base

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-05-07 20:38:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `pr_tabla`
-- ----------------------------
DROP TABLE IF EXISTS `pr_tabla`;
CREATE TABLE `pr_tabla` (
  `id` int(11) NOT NULL,
  `nombre` varchar(40) DEFAULT NULL,
  `apellido_1` varchar(30) DEFAULT NULL,
  `apellido_2` varchar(30) DEFAULT NULL,
  `nombre_completo` varchar(100) DEFAULT NULL,
  `estado` smallint(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pr_tabla
-- ----------------------------
INSERT INTO `pr_tabla` VALUES ('0', 'ISRAEL', 'ARBONA', 'GUERRERO', 'ISRAEL --  ARBONA -- GUERRERO', '0');
INSERT INTO `pr_tabla` VALUES ('1', 'ADSI 1668082', 'NOCHE', '2019', 'ADSI 1668082 --  NOCHE -- 2019', '0');
INSERT INTO `pr_tabla` VALUES ('3', 'SERGIO', 'GOMEZ', 'ZULUAGA', 'SERGIO --  GOMEZ -- ZULUAGA', '0');

-- ----------------------------
-- Table structure for `usuarios`
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `login` varchar(50) NOT NULL,
  `clave` varchar(120) DEFAULT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES ('adsi', '1234');

-- ----------------------------
-- Procedure structure for `mi_procedimiento`
-- ----------------------------
DROP PROCEDURE IF EXISTS `mi_procedimiento`;
DELIMITER ;;
CREATE DEFINER=`root`@`localhost` PROCEDURE `mi_procedimiento`()
BEGIN
	insert into pr_tabla (id,nombre,apellido_1,apellido_2) 
  values (3,"SERGIO","GOMEZ","ZULUAGA");
END
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `pr_tabla_insertar`;
DELIMITER ;;
CREATE TRIGGER `pr_tabla_insertar` BEFORE INSERT ON `pr_tabla` FOR EACH ROW begin

set new.nombre_completo = concat(new.nombre," --  ",new.apellido_1," -- ",new.apellido_2);

end
;;
DELIMITER ;
DROP TRIGGER IF EXISTS `pr_tabla_actualizar`;
DELIMITER ;;
CREATE TRIGGER `pr_tabla_actualizar` BEFORE UPDATE ON `pr_tabla` FOR EACH ROW begin

set new.nombre_completo = concat(new.nombre," --  ",new.apellido_1," -- ",new.apellido_2);

end
;;
DELIMITER ;
