-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema comicsnews
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema comicsnews
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `comicsnews` DEFAULT CHARACTER SET utf8 ;
USE `comicsnews` ;

-- -----------------------------------------------------
-- Table `comicsnews`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicsnews`.`categoria` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicsnews`.`autor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicsnews`.`autor` (
  `codigo` INT NOT NULL AUTO_INCREMENT,
  `autor` VARCHAR(100) NOT NULL,
  `email` VARCHAR(75) NOT NULL,
  PRIMARY KEY (`codigo`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `comicsnews`.`noticia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comicsnews`.`noticia` (
  `ID` INT(11) NOT NULL AUTO_INCREMENT,
  `titulo` VARCHAR(100) NOT NULL,
  `texto` TEXT NOT NULL,
  `img` VARCHAR(100) NOT NULL,
  `data` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `descricao` VARCHAR(45) NOT NULL,
  `codigocategoria` INT NOT NULL,
  `codigoautor` INT NOT NULL,
  PRIMARY KEY (`ID`, `codigocategoria`, `codigoautor`),
  INDEX `fk_noticia_categoria_idx` (`codigocategoria` ASC),
  INDEX `fk_noticia_autor1_idx` (`codigoautor` ASC),
  CONSTRAINT `fk_noticia_categoria`
    FOREIGN KEY (`codigocategoria`)
    REFERENCES `comicsnews`.`categoria` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_noticia_autor1`
    FOREIGN KEY (`codigoautor`)
    REFERENCES `comicsnews`.`autor` (`codigo`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 59
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
