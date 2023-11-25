-- ---
-- Globals
-- ---

-- SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
-- SET FOREIGN_KEY_CHECKS=0;

-- ---
-- Table 'estudiante'
-- 
-- ---

DROP TABLE IF EXISTS `estudiante`;
		
CREATE TABLE `estudiante` (
  `idEstudiante` INTEGER NOT NULL AUTO_INCREMENT DEFAULT NULL,
  `nombre` VARCHAR(45) NOT NULL DEFAULT 'NULL',
  `apellido` VARCHAR(45) NOT NULL DEFAULT 'NULL',
  `idCurso` INTEGER NOT NULL DEFAULT NULL,
  PRIMARY KEY (`idEstudiante`)
);

-- ---
-- Table 'curso'
-- 
-- ---

DROP TABLE IF EXISTS `curso`;
		
CREATE TABLE `curso` (
  `idCurso` INTEGER NOT NULL AUTO_INCREMENT DEFAULT NULL,
  `nombre` VARCHAR(45) NOT NULL DEFAULT 'NULL',
  PRIMARY KEY (`idCurso`)
);

-- ---
-- Foreign Keys 
-- ---

ALTER TABLE `estudiante` ADD FOREIGN KEY (idCurso) REFERENCES `curso` (`idCurso`);

-- ---
-- Table Properties
-- ---

-- ALTER TABLE `estudiante` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
-- ALTER TABLE `curso` ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- ---
-- Test Data
-- ---

-- INSERT INTO `estudiante` (`idEstudiante`,`nombre`,`apellido`,`idCurso`) VALUES
-- ('','','','');
-- INSERT INTO `curso` (`idCurso`,`nombre`) VALUES
-- ('','');